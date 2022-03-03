<?php

namespace App\Http\Controllers;

use App\Models\VolunteerRamaThibodi;
use App\Models\Quota;
use Illuminate\Http\Request;


class VolunteerRamaThibodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = VolunteerRamaThibodi::orderBy('id','desc')->paginate(10);
        return view('volunteer_ramathibodi.index', [
            "user" => $user
        ]);
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
     * @param  \App\Models\VolunteerRamaThibodi  $volunteerRamaThibodi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = VolunteerRamaThibodi::where('id', $id)->get();
        return view('volunteer_ramathibodi.show', [
            "user" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VolunteerRamaThibodi  $volunteerRamaThibodi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quota = Quota::where('amount','>' , 0)->get();
        $user = VolunteerRamaThibodi::findOrFail($id);
        return view('volunteer_ramathibodi.edit', [
            'user' => $user,
            'quota' => $quota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VolunteerRamaThibodi  $volunteerRamaThibodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerRamaThibodi $volunteerRamaThibodi)
    {
        $user = VolunteerRamaThibodi::find($request->id);
        $user->prefix = $request->prefix;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->date_of_birth = $request->date_of_birth;
        $user->id_card = $request->id_card;
        $user->member_number= $request->member_number	;
        $user->license_number = $request->license_number;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->workplace = $request->workplace;
        $user->tel = $request->tel;
        $user->current_address = $request->current_address;
        $user->date_work = $request->check_date;
        $user->save();
        return redirect('/covid/ramathibodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VolunteerRamaThibodi  $volunteerRamaThibodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VolunteerRamaThibodi::destroy($id);
        return redirect('/covid/ramathibodi');
    }
}
