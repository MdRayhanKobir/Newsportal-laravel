<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class WebsiteSettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }

    public function AllWebsiteSetting()
    {
        $allWebsite = DB::table('websitesettings')->first();
        return view('Backend.Setting.website', compact('allWebsite'));
    }

    public function UpdateAllWebsiteSetting(Request $request, $id)
    {
        $data = array();
        $data['phone_eng'] = $request->phone_eng;
        $data['phone_bang'] = $request->phone_bang;
        $data['email'] = $request->email;
        $data['address_eng'] = $request->address_eng;
        $data['address_bang'] = $request->address_bang;


        $oldimg = $request->oldimg;
        $image = $request->logo;
        if ($image) {
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(320, 130)->save('image/setting/' . $imageuniqueName);
            $data['logo'] = 'image/setting/' . $imageuniqueName;

            DB::table('websitesettings')->where('id', $id)->update($data);
            unlink($oldimg);
            $notification = array(
                'message' => 'Successfully Setting Updated',
                'alert-type' => 'success'
            );

            return redirect()->route('allwebsite.setting')->with($notification);
        } else {
            $data['logo'] = $oldimg;
            DB::table('websitesettings')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Successfully Setting Updated',
                'alert-type' => 'success'
            );

            return redirect()->route('allwebsite.setting')->with($notification);
        }
    }
}
