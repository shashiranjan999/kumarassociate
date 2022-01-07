<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banner.index', compact('banners'));
    }
    public function addBanner(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        $banner = new Banner;
        $banner->user_id = Auth::id();
        $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('images', $name);
        $banner->image = $name;
        if ($request->status != 1) {
            $banner->status = 0;
        } else {
            $banner->status = 1;
        }

        $banner->position = $request->position;
        $banner->save();
        return redirect('/banners');
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $path = 'images/' . $banner->image;
        if (file_exists($path)) {
            unlink($path);
        }
        $banner->delete();
        return redirect('/banners');
    }
    public function edit($id){
        $banner = Banner::find($id);
        return view('banner.edit',compact('banner'));
    }
    public function update(){
        
    }
}
