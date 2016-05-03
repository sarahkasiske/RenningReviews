<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Review;
use Session;


class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reviews.create');
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
        'title' => 'required|max:255',
        'review' => 'required'
      ));

      // store in the database
      $review = new Review;

      $review->user_id= $request->user_id = 1;
      $review->event_id= $request->event_id;
      $review->participation= $request->participation;
      $review->overall= $request->overall;
      $review->packet_pickup= $request->packet_pickup;
      $review->crowd_support= $request->crowd_support;
      $review->title= $request->title;
      $review->review= $request->review;

      $review->save();

      // Success Message
      Session::flash('success', 'Your review was succesfully added!');

      return redirect()->back();

    }

    /**
     * Display the specified resource.
     *ss
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = Review::find($id);
      return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
