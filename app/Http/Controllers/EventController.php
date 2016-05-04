<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use Session;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable to store all races
        $events = Event::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in variable
        return view('events.index')->withevents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
      // validate the data
      $this->validate($request, array(
        'race_name' => 'required|max:255',
        'slug' => 'required|alpha_dash|min:5|max:255|unique:events,slug',
        'description' => 'required'
      ));

      // store in the database
      $event = new Event;

      $event->race_name = $request->race_name;
      $event->slug= $request->slug;
      $event->month = $request->month;
      $event->city = $request->city;
      $event->state = $request->state;
      $event->annual_occurence = $request->annual_occurence;
      $event->terrain = $request->terrain;
      $event->description = $request->description;
      $event->link = $request->link;
      $event->race_distance = $request->race_distance;

      $event->save();

      // Success Message
      Session::flash('success', 'This race was succesfully added!');

      // redirect to another page
      return redirect()->route('events.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $event = Event::find($id);
      return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
      //find event in the database and save it as a variable
      $event = Event::find($id);

      //return the view and pass in the var we previously created
      return view('events.edit')->withEvent($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate data
        $event = Event::find($id);
        if ($request->input('slug') == $event->slug){
        $this->validate($request, array(
          'race_name' => 'required',
          'description' => 'required'
          ));
        }

        else {
          $this->validate($request, array(
            'race_name' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:events,slug',
            'description' => 'required'
          ));
        }


        //Save data to database

        $event = Event::find($id);
        $event->race_name = $request->input('race_name');
        $event->slug= $request->input('slug');
        $event->month = $request->input('month');
        $event->city = $request->input('city');
        $event->state = $request->input('state');
        $event->annual_occurence = $request->input ('annual_occurence');
        $event->terrain = $request->input('terrain');
        $event->description = $request->input ('description');
        $event->link = $request->input('link');
        $event->race_distance = $request->input('race_distance');

        $event->save();

        //set flash data with sucess message
        Session::flash('success', 'This race was succesfully saved!');

        //redirect with flash data to posts.show
        return redirect()->route('events.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //find event
      $event = Event::find($id);

      //delete event
      $event->delete();

      //set flash data with sucess message
      Session::flash('success', 'The post was succesfully deleted.');

      //redirect with flash data to posts.index
      return redirect()->route('events.index');

    }
}
