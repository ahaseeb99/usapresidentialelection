<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votes;
use App\Models\Subscribe;
use Auth;
use Stripe;
use Stripe\Customer;
use Stripe\Charge;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

//     public function votePost(Request $request){
//         $this->validate($request,[
//             'url'=>'required'
//         ]);
//         $scenario_number = array_slice(explode('/', $request->url), -1, 1);
//         $scenario_number = ucfirst(str_replace('-', ' ', $scenario_number[0]));

//         $scenario = array_slice(explode('/', $request->url), -2, 1);
//         $scenario = ucfirst($scenario[0]);
// // if($scenario_number != "Draw"){
// //     $scenario = $scenario.'s';
// // }
//         $data = new Votes();
        
//         $data->scenario = $scenario;
//         $data->scenario_number = $scenario_number;
//         $data->user_id = Auth::user()->id;
//         $data->save();
//         return redirect('/scenarios-result')->with('success', 'Vote Cast Successfully');
//     }


public function votePost(Request $request){
    $this->validate($request,[
        'url'=>'required'
    ]);

    // Extract scenario number from URL
    $scenario_number = array_slice(explode('/', $request->url), -1, 1);
    $scenario_number = ucfirst(str_replace('-', ' ', $scenario_number[0]));

    // Extract scenario name from URL
    $scenario = array_slice(explode('/', $request->url), -2, 1);
    $scenario = ucfirst($scenario[0]);

    // Mapping for scenario numbers in Spanish
    $spanish_scenario_numbers = [
        'One' => 'Uno',
        'Two' => 'Dos',
        'Three' => 'Tres',
        // Add more translations as needed
    ];

    // Mapping for scenario numbers in Portuguese
    $portuguese_scenario_numbers = [
        'One' => 'Um',
        'Two' => 'Dois',
        'Three' => 'Três',
        // Add more translations as needed
    ];

    // Check if the scenario number needs translation
    if (array_key_exists($scenario_number, $spanish_scenario_numbers)) {
        $scenario_number_spanish = $spanish_scenario_numbers[$scenario_number];
    } 
    else {
        $scenario_number_spanish = $scenario_number;
    }
    $unwanted_words = "Scenario";
    $scenario_number_es = str_replace($unwanted_words,"",$scenario_number_spanish);

    if (array_key_exists($scenario_number, $portuguese_scenario_numbers)) {
        $scenario_number_portuguese = $portuguese_scenario_numbers[$scenario_number];
    } 
    else {
        $scenario_number_portuguese = $scenario_number;
    }
    $scenario_number_pt = str_replace($unwanted_words,"",$scenario_number_portuguese);

    // Translations for the word "Scenario"
    $spanish_scenario_word = "Escenario";
    $portuguese_scenario_word = "Cenário";

    $data = new Votes();
    
    // Save scenario numbers in English, Spanish, and Portuguese
    $data->scenario = $scenario;
    $data->scenario_number = $scenario_number;
    $data->scenario_number_es = $spanish_scenario_word . '' . $scenario_number_es;
    $data->scenario_number_pt = $portuguese_scenario_word . '' . $scenario_number_pt;

    // Save user ID and redirect
    $data->user_id = Auth::user()->id;
    $data->save();
    return redirect('/scenarios-result')->with('success', 'Vote Cast Successfully');
}



    // public function subscribe(Request $request){
    //     $price = 10;
    //     $subscribe = new Subscribe();
    //     $subscribe->subscribe_no = rand(0, 999999999999999);
    //     $subscribe->price = $price;

    //     try {
    //         try {
    //             Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    //             $customer = \Stripe\Customer::create(array(
    //                 'email' => Auth::user()->email,
    //                 'name' => Auth::user()->name,
    //                 'description' => "Client Created From Website - USA Presidential Election",
    //                 'source'  => $request->stripeToken,
    //             ));

    //         } catch (Exception $e) {
    //             return redirect()->back()->with('stripe_error', $e->getMessage());
    //         }

    //         try {
    //             $charge = \Stripe\Charge::create(array(
    //                 'customer' => $customer->id,
    //                 'amount'   => $price * 100,
    //                 'currency' => 'USD',
    //                 'description' => "Payment From Website - USA Presidential Election",
    //                 'metadata' => array("name" => Auth::user()->name, "email" => Auth::user()->email),
    //             ));
    //         } catch (Exception $e) {
    //             return redirect()->back()->with('stripe_error', $e->getMessage());
    //         }

    //     } catch (Exception $e) {
    //         return redirect()->back()->with('stripe_error', $e->getMessage());
    //     }

    //     $chargeJson = $charge->jsonSerialize();
    //     // Check whether the charge is successful
    //     if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
    //         $transactionID = $chargeJson['balance_transaction'];
    //         $payment_status = $chargeJson['status'];
    //         $subscribe->transaction_id = $transactionID;
    //         $subscribe->status = $payment_status;
    //     }
    //     $subscribe->user_id = Auth::user()->id;
    //     $subscribe->save();
    //     return redirect()->back()->with('success', 'Subscribed Successfully');
    // }
    
    public function subscribe(Request $request) {
    $selectedCurrency = $this->fetchExchangeRate();
    // dd($selectedCurrency);
    $usdPrice = 10; // Subscription price in USD

    if (!$selectedCurrency) {
        // Handle error if unable to determine currency
        return redirect()->back()->with('error', 'Failed to determine user currency');
    }

    // Convert USD price to the selected currency
    $convertedPrice = $usdPrice;

    $subscribe = new Subscribe();
    $subscribe->subscribe_no = rand(0, 999999999999999);
    $subscribe->price = $convertedPrice;

    try {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = \Stripe\Customer::create(array(
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'description' => "Client Created From Website - USA Presidential Election",
            'source' => $request->stripeToken
        ));

        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount' => $convertedPrice * 100, // Convert amount to cents
            'currency' => $selectedCurrency, // Charge in selected currency
            'description' => "Payment From Website - USA Presidential Election",
            'metadata' => array("name" => Auth::user()->name, "email" => Auth::user()->email),
        ));

        $chargeJson = $charge->jsonSerialize();
        // Check whether the charge is successful
        if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
            $transactionID = $chargeJson['balance_transaction'];
            $payment_status = $chargeJson['status'];
            $subscribe->transaction_id = $transactionID;
            $subscribe->status = $payment_status;
        }

        $subscribe->user_id = Auth::user()->id;
        $subscribe->save();
        return redirect()->back()->with('success', 'Subscribed Successfully');
    } catch (Exception $e) {
        return redirect()->back()->with('stripe_error', $e->getMessage());
    }
}

public static function fetchExchangeRate() {
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ip_address = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ip_address = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ip_address = $_SERVER['REMOTE_ADDR'];
    else
        $ip_address = 'UNKNOWN';

    $loc_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));    
    if($loc_data && $loc_data->geoplugin_countryCode != null){
            $countryCode = $loc_data->geoplugin_countryCode;
        // dd($countryCode);

        $currencyMapping = [
            'US' => 'USD',
            'GB' => 'GBP', 
            'PL' => 'EUR', 
            'NL' => 'EUR',
            'DE' => 'EUR',
            'FR' => 'EUR',
            'ES' => 'EUR',
            'IT' => 'EUR',
            'PT' => 'EUR',
            // 'CA' => 'CAD'
        ];

        if (isset($currencyMapping[$countryCode])) {
            return $currencyMapping[$countryCode];
        } else {
            return 'USD';
        }
    } else {
        return 'USD';
    }
}




    public function scenariosResult(){
        $scenario_array = [
            'Democrat' => ['Scenario 1', 'Scenario 2', 'Scenario 3', 'Scenario 4', 'Scenario 5', 'Scenario 6', 'Scenario 7', 'Scenario 8', 'Scenario 9'],
            'Republican' => ['Scenario 1', 'Scenario 2', 'Scenario 3', 'Scenario 4', 'Scenario 5', 'Scenario 6', 'Scenario 7', 'Scenario 8', 'Scenario 9', 'Scenario 10', 'Scenario 11', 'Scenario 12']
        ];
        return view('scenarios_result', compact('scenario_array'));
    }
}
