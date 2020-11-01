<?php

namespace App\Http\Controllers;

use App\District;
use App\Group;
use App\Parish;
use App\Province;
use App\User_Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $churche=User_Request::all()->count();
        // $group=Group::all()->count();
        // $total=$group+ $churche;
        $present=DB::table('user__requests')->where('Decision', 'yego')->count();
        $absent=DB::table('user__requests')->where('Decision', 'oya')->count();

        $presentgroup=DB::table('groups')->where('Decision', 'yego')->count();
        $presenttota=$present+$presentgroup;

        // $abataje= $total-$presenttota;
        // if ($total==0) {
        //     $totaabataje=0;
        //     $displaypercent=0;
        // }else{
        //     $totaabataje= $abataje/$total*100;
        //     $displaypercent= $presenttota/$total*100;
        // }
        // $presentnumner =$present/$churche*100;
        // $presentnumner =$absent/$churche*100;


        return view('admin.dashboard',compact('present','absent','churche'));
    }

    public function Attended(){
          $Userrequest=User_Request::all();


        return view('admin.Collected',compact('Userrequest'));
    }

    public function Insertchurch(){
        $province=Province::all();
        return view('admin.Insertchurch',compact('province'));

    }
    public function InsertMess(){
        $church =Parish::all();

        return view('admin.Insertmess',compact('church'));

    }
    public function InserHall(){
        $church =Parish::all();

        return view('admin.Inserthalls',compact('church'));

    }
    public function bonaurutonde(Request $request ,$id){
        $id=$id;
        $requestuser=DB::table('user__requests')->where('mass', $id )->get();


        return view('admin.bonaurutonde',compact('requestuser'));

    }


}
