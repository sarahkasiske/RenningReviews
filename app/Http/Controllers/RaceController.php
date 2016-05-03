<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Review;

class RaceController extends Controller
{
  //Listing events on the races page
  public function getIndex() {
    $events = Event::paginate(10);

    //Fetching and displaying information from the DB
    return view('race.index')->withEvents($events);
  }

  public function getSingle($slug) {
    //fetch from DB based on slug
    $event = Event::where('slug', '=', $slug)->first();
    $reviews = Review::all();

    //return view and pass in post object
    return view('race.single',["reviews" => $reviews, "event" => $event]);
  }
}
