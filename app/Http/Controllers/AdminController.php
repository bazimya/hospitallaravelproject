<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Group;
use App\Hall;
use App\Mass;
use App\Parish;
use App\Province;
use App\User;
use App\User_Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Http;
use Throwable;
use Illuminate\Support\Facades\Log;
use Laravel\Ui\Presets\React;
use phpDocumentor\Reflection\Types\Null_;

class AdminController extends Controller
{
public function welcome(){


        $province=Province::all();
        $parish=Parish::all();
        return view('welcome' ,compact('province','parish'));
    }
    // Route to chane language
public function rw(){
    $fr="rw";
    App::setLocale($fr);
        $province=Province::all();
        $parish=Parish::all();
        return view('welcome' ,compact('province','parish'));
    }
public function fr(){
    $lang="fr";
    App::setLocale($lang);
        $province=Province::all();
        $parish=Parish::all();
        return view('welcome' ,compact('province','parish'));
    }

public function index(){
    return view('auth.register');
    }



public function Attendence(Request $request){
//   $test= $this->validate($request, [

//         'email'     =>  'unique:user__requests|email',
//         'phone'     =>  'required|unique:user__requests,phone',
//         'nid'     =>  'required|unique:user__requests,nid',

//     ]);


    $random =rand(1000, 9999);
    $phone=$request->get('phone');
    $requestform=new User_Request();
    $requestform->name=$request->get('name');
    $requestform->phone=$phone;
    $requestform->email=$request->get('email');
    $requestform->nid=$request->get('nid');
    $requestform->village_you_from=$request->get('village');
    $requestform->mass=$request->reasonwhy;
    $requestform->code=$random;
    $requestform->Decision="oya";

    $requestform->save();

    // $message="Ubusabe bwanyu bwemewe. Muhawe iyi code $random muzerekana mbere yo kwinjira.";

    // $response = Http::post('https://sms.besoft.rw/api/v1/client/bulksms', [
    //             'token' => 'U7kplNvYry5MMCYXBGDi9VTLBopt5noS',
    //             'phone' => $phone,
    //             'message'=> $message,
    //             'sender_name'=>'Church',
    //         ]);
    //         try{
    //                     $response = file_get_contents( $response);
    //                 }catch(Throwable $e){

    // ;                        Log::error("SMS can not be sent to $phone $message");
    //                 }
    Session::flash('message', "Ubusabe bwanyu bwemewe. Muhawe iyi code $random muzerekana mbere yo kwinjira.");
    return Redirect::back();
    }

public function NewChurch(Request $request){

    $requestform=new Parish();
    $requestform->Parish_name=$request->get('name');
    $requestform->Parish_phone=$request->get('phone');
    $requestform->Parish_email=$request->get('email');
    $requestform->villages=$request->get('village');
    $requestform->save();
    Session::flash('message', "Urusengero Rwinjijwe neza ");
    return Redirect::back();

    }

public function CreateService(Request $request){

    $mess = new Mass();
    $mess->mess=$request->get('miss');
    $mess->language=$request->get('lang');
    $mess->date=$request->get('Date');
    $mess->halls=$request->get('hall');
   $mess->save();
   Session::flash('message', "Messayagiye mo neza ");
   return Redirect::back();

}
public function Createhall(Request $request){
    $requestform=new Hall();
    $requestform->Hall_name=$request->get('hall');
    $requestform->Hall_capacity=$request->get('capacity');
    $requestform->parishe=$request->get('Parish');
    $requestform->save();
    Session::flash('message', "Icyumba cyinjijwe neza ");
    return Redirect::back();
}
public function Approve(Request $request,$id){
    $id=$id;
    $parishesid = DB::table('user__requests')->where('id', $id )->get();
    foreach ($parishesid as $key => $value) {
        $member= DB::table('groups')->where('user__request_id', $value->id) ->get();
    }

    return view('admin.approve',compact('parishesid','member'));
}

public function ChangeStutas(Request $request){
    $value = $request->all();

    $parent = $value['Heade'];

    $groupData = $value['group'];
    foreach ($groupData as $groupKey => $decision) {
        DB::table('groups')
            ->where('id', $groupKey)
            ->update(['Decision' => $decision]);
    }

    foreach ($parent as $key => $value) {
        DB::table('user__requests')
        ->where('id', $key)
        ->update(['Decision' => $value]);
    }
    return redirect('/Attended');
}
public function checkcode(){
    return view('admin.checkcode');
}
public function Enternew(Request $data){
    User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
    return redirect()->back();
}
public function creareuser(){
    return view('auth.register');
    }
public function Consertation($id){

    try {
        $member = User_Request::findOrFail($id);
        return view('admin.Consertation',compact('member'));

    } catch (\Exception $e) {
        Session::flash('message', "User not exist ");
    return Redirect::back();
    }

}

public function postconsultation(Request $request){

    $postconsultation=new Consultation();
    $postconsultation->use_id=$request->bywho;
    $postconsultation->requestuse_id=$request->patientid;
    $postconsultation->Consultationmessage=$request->consertationmessage;
    $postconsultation->save();

    Session::flash('message', "Consultation accepted successfull");
return Redirect::back();
}





}
