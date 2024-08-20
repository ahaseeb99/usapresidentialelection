<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Auth;
class Votes extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function total_draw(){
        
        $total_votes = DB::table('votes')->count();
        $total_draw = DB::table('votes')->where('scenario_number', 'Draw')->count();
        $percent = ($total_draw / $total_votes) * 100;
        $draw_array = ['draw_percentage'=>$percent,'total_draw'=>$total_draw];
        return $draw_array;
    }

    public function total_republican(){
        
        $total_votes = DB::table('votes')->count();
        $total_republican = DB::table('votes')->where('scenario', 'Republican')->count();
        $percent = ($total_republican / $total_votes) * 100;
        $republican_scenarios_array = ['Scenario 1', 'Scenario 2', 'Scenario 3', 'Scenario 4', 'Scenario 5', 'Scenario 6', 'Scenario 7', 'Scenario 8', 'Scenario 9','Scenario 10','Scenario 11','Scenario 12'];
        $republican_scenarios_votes_array = [];
        $republican_scenarios_votes_percentage_array = [];

        foreach ($republican_scenarios_array as $scenario) {
            $get_republican_votes = DB::table('votes')->where('scenario', 'Republican')->where('scenario_number', $scenario)->count();
            $republican_scenarios_votes_percentage_array[$scenario] = 100/$total_votes*$get_republican_votes;
            $republican_scenarios_votes_array[$scenario] = $get_republican_votes;
        }
        
        $democrat_array = ['republican_percentage'=>$percent,'total_republican'=>$total_republican,'republican_scenarios_votes_array'=>$republican_scenarios_votes_array,'republican_scenarios_votes_percentage_array'=>$republican_scenarios_votes_percentage_array,'republican_scenarios_array'=>$republican_scenarios_array];

        return $democrat_array;
    }

    public function democrat(){
        
        $total_votes = DB::table('votes')->count();
        $total_democrat = DB::table('votes')->where('scenario', 'Democrat')->count();
        $percent = ($total_democrat / $total_votes) * 100;
        $democrat_scenarios_array = ['Scenario 1', 'Scenario 2', 'Scenario 3', 'Scenario 4', 'Scenario 5', 'Scenario 6', 'Scenario 7', 'Scenario 8', 'Scenario 9'];
        $democrat_scenarios_votes_array = [];
        $democrat_scenarios_votes_percentage_array = [];

        foreach ($democrat_scenarios_array as $scenario) {
            $get_democrat_votes = DB::table('votes')->where('scenario', 'Democrat')->where('scenario_number', $scenario)->count();
            $democrat_scenarios_votes_percentage_array[$scenario] = 100/$total_votes*$get_democrat_votes;
            $democrat_scenarios_votes_array[$scenario] = $get_democrat_votes;
        }
        
        $democrat_array = ['democrat_percentage'=>$percent,'total_democrat'=>$total_democrat,'democrat_scenarios_votes_array'=>$democrat_scenarios_votes_array,'democrat_scenarios_votes_percentage_array'=>$democrat_scenarios_votes_percentage_array,'democrat_scenarios_array'=>$democrat_scenarios_array];

        return $democrat_array;
    }

    public function is_result_view($view){
        
        // return $view;
        
        if($view == 1){
        
            $result_view_query = DB::table('is_result_view')->where('user_id',Auth::user()->id)->first();
            
            if($result_view_query){
                   
                 $result_array = [
                    'view_result' => '0',
                ];
                return $result_array;
                
            }else{
                
                 $result_insert_query = DB::table('is_result_view')->insert([
                     'user_id' => Auth::user()->id,
                     'view_result' => '1',
                     ]);
                $result_array = [
                    'view_result' => '1',
                ];
            return $result_array;
            }
        
        }else{
              $result_array = [
                'view_result' => '0',
            ];
            return $result_array;
            
        }
        
       
    }
    
    public function particular_result(){
        
        $total_votes = DB::table('votes')->count();
        $particular_person_vote = DB::table('votes')->where('user_id',Auth::user()->id)->first(); //  scenario 1
        
     
        $total_votes_on_particular_scenario_number = DB::table('votes')->where('scenario_number', $particular_person_vote->scenario_number)->where('scenario', $particular_person_vote->scenario)->count(); //2

        $total_votes_on_particular_scenarios = DB::table('votes')->where('scenario', $particular_person_vote->scenario)->count(); //10
        
        
        
        $color = [];
        //$total_percent_on_particular_scenarios = ($total_votes_on_particular_scenario_number / $total_votes_on_particular_scenarios) * 100;
        
        
           $total_percent_on_particular_scenarios = 100/$total_votes*$total_votes_on_particular_scenario_number;
        
            if($particular_person_vote->scenario == 'Democrats'){
                 $color = [
                    'first' => 'primary-color',
                    'second' => 'dem'
                     ];
            }
            else if($particular_person_vote->scenario == 'Republicans'){
                $color = [
                    'first' => 'secondary-color',
                    'second' => 'rep'
                     ];
            }
            else{
                $color = [
                    'first' => 'grey-color',
                    'second' => 'draw'
                     ];
            }
            $result = [
                '$total_votes_on_particular_scenario_number' => $total_votes_on_particular_scenario_number,
                '$particular_person_vote' => $particular_person_vote->scenario,
                '$scenario_number' => $particular_person_vote->scenario_number,
                'color' =>  $color,
                '$total_votes_on_particular_scenarios' => $total_votes_on_particular_scenarios,
                '$total_percent_on_particular_scenarios' => $total_percent_on_particular_scenarios,
                ];
            return $result;
    }
}