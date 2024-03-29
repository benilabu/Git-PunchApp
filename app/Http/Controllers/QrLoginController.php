<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use App\Timeuser;
use Carbon\Carbon;
use App\Newtimemodel;
use Illuminate\Http\Request;

class QrLoginController extends Controller
{
	
    public function index(Request $request) {
    	
		return view('auth.QrLogin');
	}
	public function indexoption2(Request $request) {
    	
		return view('auth.QrLogin2');
	}
	public function ViewUserQrCode($value='')
	{
		return view('backEnd.users.viewqrcode');
	}

	public function checkUserBykeypad(Request $request)
	{
		if($request->keypad_pass)
		{
			$user = User::where('passwordkeypad',$request->keypad_pass)->first();
			$id_user = $user->id;
			if ($user) {
				$this->UpdateUserStatus($id_user);
				Sentinel::authenticate($user);
			   
				$result =1;
			 }else{
				 $result =0;
			 }
		}
		return view('auth.QrLogin');

	}
	
	public function checkUserByrfid(Request $request) {
		$result = 0;
		   if ($request->Qrcode_pass) {
		   
			   $user = User::where('QRpassword',$request->Qrcode_pass)->first();
			   $id_user = $user->id;
		   
			   if ($user) {
				   $this->UpdateUserStatus($id_user);
				   Sentinel::authenticate($user);
				  
				   $result =1;
				}else{
					$result =0;
				}
		   }
		   return view('auth.QrLogin');
	   
		   
   }

	public function checkUser(Request $request) {
		 $result = 0;
			if ($request->data) {
			
				$user = User::where('QRpassword',$request->data)->first();
				$id_user = $user->id;
				if ($user) {
					$this->UpdateUserStatus($id_user);
					Sentinel::authenticate($user);
				    $result =1;
				 }else{
				 	$result =0;
				 }
			}
			return $result;		
	}

	public function UpdateUserStatus($param)
	{
		$hourtoday=date("G:i:s");
		$datetoday=date("Y-m-j");   
		$updateuser = User::find($param);
		$datenewformat = date("Y-m-j",strtotime($updateuser->last_login));

		if($updateuser->presence_status =="0")
		{
			$timeuser = new Timeuser;
			$timeuser->user_id = $param;
			$timeuser->date_today = $datetoday;
			$timeuser->heure_arriver = $hourtoday;
			$timeuser->heure_sortie ='';
			$timeuser->save();
			$updateuser->presence_status = "1";
		}
		else
		{	
			if($datenewformat == $datetoday)
			{
				$this->updatehoursortie($param);
			}
				$updateuser->presence_status = "0";
		
		}
		$updateuser->save();
	}

	public function updatehoursortie($paramid)
	{
		$hourtoday=date("G:i:s");
		$datetoday =date("Y-m-j");  
		$timeinit = date("00:00:00"); 
		$timelook = Timeuser::where([ ['date_today','=',$datetoday],['user_id','=',$paramid],['heure_sortie','=',$timeinit] ])->get();
		
		foreach($timelook as $dox)
        {
          $id_find = $dox->id;
        }
		$updatetime =Timeuser::find($id_find);
		$updatetime->heure_sortie = $hourtoday;
		$updatetime->save();

		

	}
	public function QrAutoGenerate(Request $request)
	{	
		$result=0;
		if ($request->action = 'updateqr') {
			$user = Sentinel::getUser();
			if ($user) {
				$qrLogin=bcrypt($user->personal_number.$user->email.str_random(40));
		        $user->QRpassword= $qrLogin;
		        $user->update();
		        $result=1;
			}
		
		}
		
        return $result;
	}

}