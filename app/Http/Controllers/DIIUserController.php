<?php

namespace App\Http\Controllers;

use App\DIIUser;
use App\Http\Resources\DIIUserResource;
use Illuminate\Http\Request;



class DIIUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DIIUserResource::collection(DIIUser::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

    public function connection(Request $request){
        $user = DIIUser::all()->where("fingerPrintHash", $request->fingerPrintHash)->first();

        if($user === null){
            return response()->json([
                "message" => "AUTHENTIFICATION_FAIL",
            ], 401);
        }

        return $user;
    }

}
