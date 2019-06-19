<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Songs;
use App\Http\Resources\Songs as SongsResource;

/**
 *
 */
class SongsController extends Controller
{
    /**
     *
     */
    public function index() {
       // return view('songs.index');
      $songs = Songs::all();
      return SongsResource::collection($songs); 
    }
    /**
     *
     */
    public function show($id) {
        $song = Songs::findOrFail($id);
        return new SongsResource($song);
    }
    /**
     *
     */
    public function store(Request $request) {
       
        $song = $request->isMethod('put') ? Songs::findOrFail($request->SongID) : new Songs;

        $song->SongID = $request->input('SongID');
        $song->Title = $request->input('Title');
        $song->Artist = $request->input('Artist');
        $song->Year = $request->input('Year');
        $song->DateAdded = $request->input('DateAdded');
        $song->FormatID = $request->input('FormatID');
        $song->Lead = $request->input('Lead');

        if($song->save()) {
            return new SongsResource($song);
        } 
    }
    /**
     *
     */
    public function destroy($id) {
        //Get Song
        $song = Songs::findOrFail($id);

        if($song->delete()) {
            return new SongsResource($song);
        }
    }

}
