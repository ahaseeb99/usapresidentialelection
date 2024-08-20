<?php

namespace App\Http\Controllers\Auth;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Vote;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        
        if ($user->is_admin == 1) {
            return redirect()->route('admin.dashboard');    
        } else {
            
            
            if ($request->redirect_url != null) {
                $get_session_id = Session::get('session_id');
                
               
               $query = DB::table('scenarios')
                ->where('user_id', '=', $get_session_id)
                ->get();
   
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
            return redirect('/');
        }
    }
    
    public static function scenario_number()
    {
        $user_id =  auth()->id();
        $select =   DB::table('votes')
                ->where('user_id', '=', $user_id)
                ->get();
                
        foreach($select as $rows){
            if($rows->scenario_number == 'Draw'){
                return $rows->scenario_number . ' - Scenario ';
            }else{
                return $rows->scenario . 's - ' . $rows->scenario_number;
            }
        }
    }
    
    public static function scenario_number_fr()
    {
        $user_id = auth()->id();
        $select = DB::table('votes')
                    ->where('user_id', '=', $user_id)
                    ->get();
    
        foreach ($select as $rows) {
            if ($rows->scenario_number == 'Draw') {
                return $rows->scenario_number . ' - Scenario ';
            } elseif ($rows->scenario == 'Democrat') {
                return $rows->scenario_number . ' : ' . 'Démocrates';
            } else {
                return $rows->scenario_number . ' : ' . 'Républicains';
            }
        }
    }
    
    public static function scenario_number_es()
    {
        $user_id = auth()->id();
        $select = DB::table('votes')
                    ->where('user_id', '=', $user_id)
                    ->get();
    
        foreach ($select as $rows) {
            if ($rows->scenario_number == 'Draw') {
                return $rows->scenario_number . ' - ' . "Escenario";
            } elseif ($rows->scenario == 'Democrat') {
                return $rows->scenario_number_es . ' : ' . 'Démocrates';
                return 'Démocrates' . ' - ' . $rows->scenario_number_es;
            } else {
                return 'Republicanos'.' - ' . $rows->scenario_number_es;
            }
        }
    }
    
    public static function scenario_number_pt()
    {
        $user_id = auth()->id();
        $select = DB::table('votes')
                    ->where('user_id', '=', $user_id)
                    ->get();
    
        foreach ($select as $rows) {
            if ($rows->scenario_number == 'Draw') {
                return $rows->scenario_number . ' - ' . "Cenário";
            } elseif ($rows->scenario == 'Democrat') {
                return $rows->scenario_number_pt . ' : ' . 'Democratas';
                return 'Democratas' . ' - ' . $rows->scenario_number_pt;
            } else {
                return 'Republicanos'.' - ' . $rows->scenario_number_pt;
            }
        }
    }

    public static function scenario($url,$session_id)
    {
        $select =   DB::table('scenarios')
                ->where('user_id', '=', $session_id)    
                ->get();
                
                
                if($select->isEmpty()){$user = DB::table('scenarios')->insert(
            ['user_id' => $session_id , 'scenario_url' => $url]
        );}
        Session::put('session_id',$session_id);
        
    }

    public function redirectToProvider()
    {
     
     
        return Socialite::driver('google')->redirect();
        
    }

    public function handleProviderCallback()
    {
        
        
            $socialiteUser = Socialite::driver('google')->user();
            
            $user = User::where('email', $socialiteUser->email)->first();
    
            if ($user) {
                Auth::login($user);
             $get_session_id = Session::get('session_id');
            $query = DB::table('scenarios')
                ->where('user_id', '=', $get_session_id)
                ->get();
   
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
               // return redirect('/');
            }

    
            return view('auth.register', compact('socialiteUser'));
        }
        
        
         public static function checkvote($user_id)
    {
        
         $select =   DB::table('votes')->where('user_id', '=', $user_id)->get();
         
          if($select->isEmpty()){ return ""; }else{   return "1";
      }
        
        
    }

    
}
