<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\race;
use App\comment;
use App\rating;

class ControllerTwo extends Controller
{
    public function index() {
      $obj = new \stdClass();
    	$obj->firstName = "Person";

      return view('frontend.hello', ["obj" => $obj]);
    }

    public function races() {
    	$races = race::all();
    	return view('frontend.add-race', ["races" => $races]);
 }

    public function new_race(Request $request) {
    	$race = new race;
      $race->name = $request->name;
    	$race->description= $request->description;
      $race->race_month= $request->race_month;
      $race->type= $request->type;
      $race->location= $request->location;
      $race->elevation_gain= $request->elevation_gain;
      $race->user_id= $request->user_id = 1;
    	$race->save();
    	$races = race::all();
    	return view('frontend.add-race', ["races" => $races]);
}


  public function comments() {
    $comments = comment::all();
    return view('frontend.rate-comment', ["comments" => $comments]);
}

  public function new_comment(Request $request) {
    $comment = new comment;
    $comment->comment = $request->comment;
    $comment->user_id= $request->user_id = 1;
    $comment->user_id= $request->race_id = 1;
    $comment->save();
    $comments = comment::all();
    return view('frontend.rate-comment', ["comments" => $comments]);
}

  public function ratings() {
    $ratings = rating::all();
    return view('frontend.rate-comment', ["ratings" => $ratings]);
}

  public function new_rating(Request $request) {
    $rating = new rating;
    $rating ->rating = $request->rating;
    $rating ->participation= $request->participation;
    $rating ->user_id= $request->user_id = 1;
    $rating ->user_id= $request->race_id = 1;
    $rating ->save();
    $ratings = rating::all();
    return view('frontend.rate-comment', ["ratings" => $ratings]);
}




}
