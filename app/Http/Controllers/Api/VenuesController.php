<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Venues;
use App\Http\Resources\Venue as VenueResource;


class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       $venues = Venues::all();
       return VenueResource::collection($venues); 
    }
    /**
     *
     */
    public function show($id) {
        $venue = Venues::findOrFail($id);
        return new VenueResource($venue);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venue = $request->isMethod('put') ? Venues::findOrFail($request->VenueID) : new Venues;

        $venue->VenueID = $request->input('VenueID');
        $venue->Venue = $request->input('Venue');

        if($venue->save()) {
            return new VenueResource($venue);
        } 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get Song
        $venue = Venues::findOrFail($id);

        if($venue->delete()) {
            return new VenueResource($venue);
        }

    }
}
