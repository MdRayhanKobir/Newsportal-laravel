<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Photogallery()
    {

        $photo = DB::table('photos')->orderBy('id', 'desc')->paginate(3);
        return view('Backend.Photogallery.photos', compact('photo'));
    }

    public function AddPhotogallery()
    {
        return view('Backend.Photogallery.create');
    }

    public function StorePhotogallery(Request $request)
    {


        $data = array();
        $data['photo_title'] = $request->photo_title;
        $data['type'] = $request->type;

        $image = $request->photo;
        if ($image) {
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/photogallery/' . $imageuniqueName);
            $data['photo'] = 'image/photogallery/' . $imageuniqueName;

            DB::table('photos')->insert($data);
            $notification = array(
                'message' => 'Successfully Photogalley insert',
                'alert-type' => 'success'
            );

            return redirect()->route('photo.gallery')->with($notification);
        } else {
            return redirect()->back();
        }
    }

    public function EditPhotogallery($id)
    {
        $photo = DB::table('photos')->where('id', $id)->first();
        return view('Backend.Photogallery.edit', compact('photo'));
    }

    public function UpdatePhotogallery(Request $request, $id)
    {

        $data = array();
        $data['photo_title'] = $request->photo_title;
        $data['type'] = $request->type;

        $oldimg = $request->oldimg;
        $image = $request->photo;
        if ($image) {
            $imageuniqueName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/photogallery/' . $imageuniqueName);
            $data['photo'] = 'image/photogallery/' . $imageuniqueName;

            DB::table('photos')->where('id', $id)->update($data);
            unlink($oldimg);
            $notification = array(
                'message' => 'Successfully photo gallery updated',
                'alert-type' => 'success'
            );

            return redirect()->route('photo.gallery')->with($notification);
        } else {
            $data['photo'] = $oldimg;
            DB::table('photos')->where('id', $id)->update($data);
            $notification = array(
                'message' => 'Successfully photo gallery Updated',
                'alert-type' => 'success'
            );

            return redirect()->route('photo.gallery')->with($notification);
        }
    }

    public function DeletePhotogallery($id)
    {
        $photo = DB::table('photos')->where('id', $id)->first();
        unlink($photo->photo);
        DB::table('photos')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Successfully photo gallery deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('photo.gallery')->with($notification);
    }
}
