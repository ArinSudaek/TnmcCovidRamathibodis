<?php

namespace App\Http\Controllers;

use App\Models\Quota;
use App\Models\VolunteerRamaThibodi;
use Illuminate\Http\Request;

class RegisterFormController extends Controller
{

    public function index()
    {
        return view('guest.form_register.index');
    }

    // Form1
    public function formRamathibodi()
    {
        $quota = Quota::where('amount', '>', 0)->get();
        return view('guest.form_register.form_ramathibodi', [
            'quota' => $quota
        ]);
    }

    public function insertFormRamathibodi(Request $request)
    {


        $curruntAmount = Quota::where('date_work', $request->check_date)->pluck('amount');
        $totalCurrent = (int) $curruntAmount[0] - 1;
        $rs = Quota::where('date_work', $request->check_date)->update(['amount' => $totalCurrent]);
        $reg = new VolunteerRamaThibodi;

        $reg->prefix = $request->prefix;
        $reg->name = $request->name;
        $reg->surname = $request->surname;
        $reg->age = $request->age;
        $reg->date_of_birth = $request->date_of_birth;
        $reg->id_card = $request->id_card;
        $reg->member_number = $request->member_number;
        $reg->license_number = $request->license_number;
        $reg->email = $request->email;
        $reg->position = $request->position;
        $reg->workplace = $request->workplace;
        $reg->tel = $request->tel;
        $reg->current_address = $request->current_address;
        $reg->date_work = $request->check_date;
        $reg->save();
        return redirect()->back()->with('alert', 'สมัครเรียบร้อย!');
    }
    // END Form1

}
