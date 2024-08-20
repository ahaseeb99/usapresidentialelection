<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DB;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/?a=s';
    
   
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required'],
            'set_state' => ['required'],
            'nationality' => ['required'],
            'sex' => ['required'],
            'age' => ['required','max:2']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $current_time = Carbon::now()->toDateTimeString();
        
        
          $verifiedEmail = isset($data['verified_email']) ? $data['verified_email'] : 2;

        if ($verifiedEmail == 1) {
            
            // dd($current_time);
            
             $user = User::create([
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'is_admin' => 0,
                'state_name' => $data['country'],
                'state_code' => $data['set_state'],
                'nationality' => $data['nationality'],
                'sex' => $data['sex'],
                'age' => $data['age'],
                'email_verified_at' => $current_time,
            ]);
            
            $user_id = $user->id;

            // Send registration confirmation email
            // Mail::to($user->email)->send(new RegistrationConfirmation($user));
            
            $user->markEmailAsVerified();
            
           // dd($user_id);
             
             
             $get_session_id = Session::get('session_id');
            $query = DB::table('scenarios')
                ->where('user_id', '=', $get_session_id)
                ->get();
                
                 if($query->isEmpty()){
                     
                      return $user;
                     
                 }else{
                
                foreach($query as $row){
                    $url = parse_url($row->scenario_url);
                    
                    
                    $myArray = explode('/', $url["path"]);
                    
                    $scenario = ucfirst($myArray[1]);
                    
                 if($scenario == 'Draw'){ 
                        
                         $select =   DB::table('votes')
                                    ->where('user_id', '=', $user_id)
                                    ->get();
                     if($select->isEmpty()){
                     DB::table('votes')->insert(
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
                    DB::table('votes')->insert(
                                ['scenario' => $scenario , 'scenario_number' => $scenario_number, 'user_id' => $user_id,'created_at' => now(),'updated_at' => now()]
                            );
                     }
                     
                    }
                    
                }
                
                
                 return $user;
                
                 }
            
        }else{
            
                // dd('2');

        $user = User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => 0,
            'state_name' => $data['country'],
            'state_code' => $data['set_state'],
            'nationality' => $data['nationality'],
            'sex' => $data['sex'],
            'age' => $data['age']
        ]);


        return $user;
        
        }

        // else{
        //     return User::create([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //         'is_admin' => 0,
        //         'state_name' => $data['country'],
        //         'state_code' => $data['set_state'],
        //         'nationality' => $data['nationality'],
        //         'sex' => $data['sex'],
        //         'age' => $data['age']
        //     ]);

        // }
    }

}
