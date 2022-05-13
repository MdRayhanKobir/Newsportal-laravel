<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubDistrictController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        }

    public function Index(){
        $subdistrict=DB::table('subdistricts')
        ->join('districs','subdistricts.district_id','districs.id')
        ->select('subdistricts.*','districs.district_eng','districs.district_bang')
        ->orderBy('id','desc')->paginate(5);
        return view('Backend.Subdistrict.index',compact('subdistrict'));
    }

    public function AddSubdistrict(){
        $district=DB::table('districs')->get();
        return view('Backend.Subdistrict.create',compact('district'));
    }

    public function StoreSubdistrict(Request $request){
        $validated = $request->validate([
            'subdistrict_eng' => 'required|unique:subdistricts|max:255',
            'subdistrict_bang' => 'required|unique:subdistricts|max:255',
        ]);

        $data=array();
        $data['subdistrict_eng']=$request->subdistrict_eng;
        $data['subdistrict_bang']=$request->subdistrict_bang;
        $data['district_id']=$request->district_id;
        DB::table('subdistricts')->insert($data);

        $notification = array(
            'message' => 'Successfully SubDistrict Insert',
            'alert-type' => 'success'
        );

        return redirect()->route('subdistricts')->with($notification);

    }

    public function EditSubdistrict($id){
        $subdistrict=DB::table('subdistricts')->where('id',$id)->first();
        $district=DB::table('districs')->get();
        return view('Backend.Subdistrict.edit',compact('subdistrict','district'));

    }

    public function UpdateSubdistrict(Request $request,$id){
        $data=array();
        $data['subdistrict_eng']=$request->subdistrict_eng;
        $data['subdistrict_bang']=$request->subdistrict_bang;
        $data['district_id']=$request->district_id;
        DB::table('subdistricts')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Successfully SubDistrict Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('subdistricts')->with($notification);

    }

    public function DeleteSubdistrict($id){
        $data=DB::table('subdistricts')->where('id',$id);
        $data->delete();

        $notification = array(
            'message' => 'Successfully SubDistrict deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('subdistricts')->with($notification);

    }

}
