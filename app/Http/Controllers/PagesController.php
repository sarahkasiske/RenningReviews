<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
  public function getIndex(){
    $events = Event::orderBy('created_at', 'dsc')->limit(4)->get();
    return view('pages.welcome')->withEvents($events);
  }

  public function getAbout(){
      return view('pages.about');

  }


}
