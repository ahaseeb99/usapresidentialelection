<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Carbon;
use DB;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails, RedirectsUsers;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    // protected $redirectTo = '/';
    protected $redirectTo = RouteServiceProvider::SUB;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                        ? redirect($this->redirectPath())
                        : view('verification.notice', [
                            'pageTitle' => __('Account Verification')
                        ]);
    }

    protected function verified(Request $request)
    {
        $email = DB::table('users')
              ->where('id', $request->user()->id)
              ->update(['email_verified_at' => now()->toDateTimeString()]);
        //  dd($request->user()->id);
         
        $get_session_id = Session::get('session_id');
                
               
        $query = DB::table('scenarios')
        ->where('user_id', '=', $get_session_id)
        ->get();
        
         if($query->isEmpty()){
             $request->session()->flash('message', 'Email adress successfully verified');
         }else{
             
              foreach($query as $row){
                    $url = parse_url($row->scenario_url);
                    
                    
                    $myArray = explode('/', $url["path"]);
                    
                    $scenario = ucfirst($myArray[1]);
                     $user_id =  auth()->id(); 
                     
                    //  dd($scenario);
                    
                    if($scenario == 'Draw'){ 
                        
                         $select =   DB::table('votes')
                                    ->where('user_id', '=', $user_id)
                                    ->get();
                     if($select->isEmpty()){
                    $user = DB::table('votes')->insert(
                                ['scenario' => 'Jmbarani.com    ' , 'scenario_number' => 'Draw', 'user_id' => $user_id,'created_at' => now(),'updated_at' => now()]
                            );
                     }
                        
                    }else{
                    
                    $scenario_numbers = str_replace('-', ' ' , $myArray[2]);
                    $scenario_number = ucfirst($scenario_numbers);
                   
                    
                    $select =   DB::table('votes')
                                    ->where('user_id', '=', $user_id)
                                    ->get();
                     if($select->isEmpty()){
                    $user = DB::table('votes')->insert(
                                ['scenario' => $scenario , 'scenario_number' => $scenario_number, 'user_id' => $user_id,'created_at' => now(),'updated_at' => now()]
                            );
                     }
                     
                    }
        
                   
                    
                }
                return redirect('/scenarios-result')->with('success', 'Vote Cast Successfully');
             
             
         }
         
        
    }
}