<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use App\Http\Resources\Request as RequestResource;


class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Requests::all();
        return RequestResource::collection($requests); 
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->isMethod('put') ? Requests::findOrFail($request->RequestID) : new Requests;

        $req->RequestID = $request->input('RequestID');
        $req->SongID = $request->input('SongID');
        $req->Requests = $request->input('Requests');
        $req->GigID = $request->input('GigID');

        if($req->save()) {
            return new RequestResource($req);
        } 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = Requests::findOrFail($id);
        return new RequestResource($request);
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
