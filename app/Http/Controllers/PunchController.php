<?php

namespace App\Http\Controllers;
use App\User;
use App\Timeuser;
use App\Newtimemodel;
use Illuminate\Http\Request;

class PunchController extends Controller
{
    public function indextime()
    {
        $datetoday = date("Y-m-d");
        $users = User::all();
        $timesave = Timeuser::all();
        $teame=Timeuser::find(32)->user;
    
        return view('backEnd.users.indextime', compact('users', 'timesave'));
    }
    public function indexedit()
    {
        return view('backEnd.users.indexuser-presence');
    }

}
