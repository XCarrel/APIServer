<?php

namespace App\Http\Controllers;

use App\Http\Resources\NHYAccountResource;
use App\NHYAccount;
use App\NHYTransaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;

class NHYAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NHYAccountResource::collection(NHYAccount::all());
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

    public function newaccount(Request $request)
    {
        $newaccount = new NHYAccount();
        $newaccount->name = $request->input('name');
        $newaccount->favorite = $request->input('favorite');
        $newaccount->value = $request->input('value');
        try {
            $newaccount->save();
            return $newaccount;
        } catch (QueryException $e) {
            return new Response($e, 409);
        }
    }
    
    public function updateaccount(Request $request)
    {
        $account = NHYAccount::find($request->input('id'));
        $account->favorite = $request->input('favorite');
        $account->value = $request->input('value');
        try {
            $account->save();
            return $account;
        } catch (QueryException $e) {
            return new Response($e, 409);
        }
    }

    public function transaction(Request $request)
    {
        $newtrans = new NHYTransaction();
        $newtrans->amount = $request->input('amount');
        $newtrans->moment = $request->input('moment');
        $newtrans->account_id = $request->input('accountid');
        try {
            $newtrans->save();
            return $newtrans;
        } catch (QueryException $e) {
            return new Response($e, 409);
        }
    }

}
