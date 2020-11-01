<?php

namespace App\Http\Controllers;

use App\Cell;
use App\District;
use App\Group;
use App\Hall;
use App\Mass;
use App\Parish;
use App\Sector;
use App\User_Request;
use App\Village;
use Illuminate\Http\Request;

class JqueryController extends Controller
{
    public function Districtjquery(Request $request){
        $value=$request->get('provinces');
        $district = District::where('province',$value )->get();
            return response()->json($district);
    }

    public function paruwasi(Request $request){
        $value=$request->get('provinces');
        $district = Hall::where('parishe',$value )->get();
            return response()->json($district);
    }

    public function Sectorjquery(Request $request){
        $value=$request->get('value');
        $sector = Sector::where('District',$value )->get();
            return response()->json($sector);
    }

    public function Celljquery(Request $request){
        $value=$request->get('provinces');
        $Cell = Cell::where('Sector',$value )->get();
            return response()->json($Cell);
    }
     public function villagejquery(Request $request){
        $value=$request->get('value');
        $village = Village::where('Cell',$value )->get();
            return response()->json($village);
    }
    public function Hall(Request $request){
        $value=$request->get('value');
        $village = Hall::where('parishe',$value )->get();
            return response()->json($village);
    }
    public function Mess(Request $request){
        $value=$request->get('value');
        $village = Mass::where('halls',$value )->get();
            return response()->json($village);
    }
    public function Searchcode(Request $request){
        $value=$request->get('value');
        $code = User_Request::where('code',$value )->get();

            return response()->json($code);

    }
    public function Messlocation(Request $request){
        $value=$request->get('value');
        $code = User_Request::where('code',$value )->get();
        foreach ($code as $key => $value) {

            $mass= Hall::where('id',$value->mass )->get();
        }

            return response()->json($mass);

    }
    public function qrcode(){
        return view('qrcode');
    }
}
