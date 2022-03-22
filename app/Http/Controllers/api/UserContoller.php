<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUser;
use App\Models\ClinicMember;
use App\Models\Location;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserContoller extends Controller
{
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
        //
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateUser $request, $id)
    {
        $newProfile = [
            "first_name" => $request->input("first_name"),
            "last_name" => $request->input("last_name"),
            "gender" => $request->input("gender"),
            "birthday" => $request->input("birthday"),
        ];

        Profile::where('user_id', $id)->update($newProfile);

        $newLocation = [
            "address" => $request->input("address"),
            "latitude" => $request->input("latitude"),
            "longitude" => $request->input("longitude"),
        ];

        $gotProfile = Profile::where('user_id', $id)->get()->first();
        Location::where('profile_id', $gotProfile->id)->update($newLocation);

        return customResponse()
            ->data(User::where('id', $id)->get()->first())
            ->message("User is successfully updated.")
            ->success()
            ->generate();
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
