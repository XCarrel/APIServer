<?php

namespace App\Http\Controllers;

use App\DIIFriendship;
use App\DIIRole;
use App\DIIUser;
use App\Http\Resources\DIIFriendshipResource;
use App\Http\Resources\DIIUserResource;
use App\User;
use Illuminate\Http\Request;


class DIIFriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param DIIUser $user
     * @return void
     */
    public function index(DIIUser $user)
    {
        $friendship = $user->friendship()->get();
        if(count($friendship) == 0) {
            $friendship = $user->friendship2()->get();
        }



        return DIIFriendshipResource::collection($friendship);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param DIIUser $user
     * @param DIIUser $friendUser
     * @return void
     */
    public function show(DIIUser $user, $friendUser)
    {


        //        return DIIFriendshipResource::collection($friendship);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Check if the relation exists (user->friend), if not we take the inverse relation (friend->user)
     */
    private function getTheRightRelation(DIIUser $user, $friendId)
    {
        $friendship = $user->friendship()->get()->where('DII_user_id2', $friendUser)->get();

        if (count($friendship) == 0) {
            $friendship2 = $user->friendship2()->get()->where('DII_user_id', $friendUser)->get();
            $friendship = $friendship2;
        }

        return $friendship;
    }

}
