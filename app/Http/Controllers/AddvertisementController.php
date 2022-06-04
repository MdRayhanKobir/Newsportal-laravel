<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AddvertisementController extends Controller
{
    public function Addvertisement()
    {
        $ad = DB::table('adds')->orderBy('id', 'desc')->paginate(5);
        return view('Backend.Addvertisement.index', compact('ad'));
    }

    public function CreateAddvertisement()
    {
        return view('Backend.Addvertisement.create');
    }

    public function StoreAddvertisement(Request $request)
    {

        $data = array();
        $data['link'] = $request->link;
        if ($request->type == 1) {
            $image = $request->ads;
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(970, 90)->save('image/ads/' . $imageuniqueName);
            $data['ads'] = 'image/ads/' . $imageuniqueName;
            $data['type'] = 1;
            DB::table('adds')->insert($data);
            $notification = array(
                'message' => 'Successfully Ads insert',
                'alert-type' => 'success'
            );

            return redirect()->route('list.add')->with($notification);
        } else {
            $image = $request->ads;
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('image/ads/' . $imageuniqueName);
            $data['ads'] = 'image/ads/' . $imageuniqueName;
            $data['type'] = 0;
            DB::table('adds')->insert($data);
            $notification = array(
                'message' => 'Successfully Ads insert',
                'alert-type' => 'success'
            );

            return redirect()->route('list.add')->with($notification);
        }
    }

    public function EditAddvertisement($id)
    {
        $ads = DB::table('adds')->where('id', $id)->first();
        return view('Backend.Addvertisement.edit', compact('ads'));
    }

    public function UpdateAddvertisement(Request $request, $id)
    {
        $data = array();
        $data['link'] = $request->link;
        if ($request->type == 1) {
            $oldimg = $request->oldimg;
            $image = $request->ads;
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(970, 90)->save('image/ads/' . $imageuniqueName);
            $data['ads'] = 'image/ads/' . $imageuniqueName;
            $data['type'] = 1;

            DB::table('adds')->where('id', $id)->update($data);
            unlink($oldimg);

            $notification = array(
                'message' => 'Successfully Ads updated',
                'alert-type' => 'success'
            );

            return redirect()->route('list.add')->with($notification);
        } else {
            $oldimg = $request->oldimg;
            $image = $request->ads;
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('image/ads/' . $imageuniqueName);
            $data['ads'] = 'image/ads/' . $imageuniqueName;
            $data['type'] = 0;

            DB::table('adds')->where('id', $id)->update($data);
            unlink($oldimg);
            $notification = array(
                'message' => 'Successfully Ads updated',
                'alert-type' => 'success'
            );

            return redirect()->route('list.add')->with($notification);
        }
    }

    public function DeleteAddvertisement($id)
    {

        $ads = DB::table('adds')->where('id', $id)->first();
        unlink($ads->ads);
        DB::table('adds')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Successfully Ads Deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('list.add')->with($notification);
    }
}
