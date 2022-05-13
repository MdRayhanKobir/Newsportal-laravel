<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }

    public function Index(){
        $district=DB::table('districs')->orderBy('id','desc')->paginate(5);
        return view('Backend.District.index',compact('district'));
    }

    public function AddDistrict(){
        return view('Backend.District.create');
    }

    public function StoreDistrict(Request $request){

        $validated = $request->validate([
            'district_eng' => 'required|unique:districs|max:255',
            'district_bang' => 'required|unique:districs|max:255',
        ]);

        $data=array();
        $data['district_eng']=$request->district_eng;
        $data['district_bang']=$request->district_bang;
        DB::table('districs')->insert($data);

        $notification=array(
            'message'=>'Successfully District Insert',
            'alert-type'=>'success'
        );

        return redirect()->route('districts')->with($notification);

    }

    public function EditDistrict($id){

        $district=DB::table('districs')->where('id',$id)->first();
        return view('Backend.District.edit',compact('district'));
    }

    public function UpdateDistrict(Request $request,$id){

        $data=array();
        $data['district_eng']=$request->district_eng;
        $data['district_bang']=$request->district_bang;
        DB::table('districs')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully District Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('districts')->with($notification);

    }

    public function DeleteDistrict($id){
        $data=DB::table('districs')->where('id',$id);
        $data->delete();

        $notification=array(
            'message'=>'Successfully District Deleted',
            'alert-type'=>'error'
        );

        return redirect()->route('districts')->with($notification);



    }


}
