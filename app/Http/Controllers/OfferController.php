<?php

namespace App\Http\Controllers;

use App\Models\Projectoffer;
use App\Models\Brandoffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
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

    public function project()
    {
        $projectoffers = Projectoffer::all();
        return view('offer/projectoffering', compact('projectoffers'));
    }
    public function brand()
    {
        $brandoffers = Brandoffer::all();
        return view('offer/brandoffering',compact('brandoffers'));
    }
    public function projectform()
    {

        return view('offer/addprojectoffer');
    }
    public function brandform()
    {
        return view('offer/addbrandoffer');
    }

    public function addprojectoffer(Request $request)
    {

        //  return $request;
        $request->validate([
            'name' => 'required',
            'Offer' => 'required',
            'address' => 'required',
            'validity' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        if ($request->projectName == 'Select Property Name') {
            return redirect()->back()->withErrors(['msg' => 'Please Select Property Name']);
        }
        if ($request->Catogorie == 'Select Category') {
            return redirect()->back()->withErrors(['msg' => 'Please Select Category']);
        }
        $projectoffer = new Projectoffer;
        $projectoffer->user_id = Auth::id();
        $projectoffer->property_name = $request->projectName;
        $projectoffer->category = $request->Catogorie;
        $projectoffer->shop_name = $request->name;
        $projectoffer->offer = $request->Offer;

        $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('images', $name);

        $projectoffer->shoplogo = $name;
        $projectoffer->address = $request->address;
        $projectoffer->validity = $request->validity;
        $projectoffer->map_link = $request->link;
        $projectoffer->contact = $request->contact;
        $projectoffer->save();
        return redirect('/project-offering');
    }
    public function addbrandoffer(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'Offer' => 'required',
            'address' => 'required',
            'validity' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
    
        if ($request->Catogorie == 'Select Category') {
            return redirect()->back()->withErrors(['msg' => 'Please Select Category']);
        }
        $brandoffer = new Brandoffer;
        $brandoffer->user_id = Auth::id();
     
        $brandoffer->category = $request->Catogorie;
        $brandoffer->shop_name = $request->name;
        $brandoffer->offer = $request->Offer;

        $name = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('images', $name);

        $brandoffer->shoplogo = $name;
        $brandoffer->address = $request->address;
        $brandoffer->validity = $request->validity;
        $brandoffer->map_link = $request->link;
        $brandoffer->contact = $request->contact;
        $brandoffer->save();
        return redirect('/brand-offering');
    }


    public function showprojectoffer($id)
    {
        $projectoffer = Projectoffer::find($id);
        return view('offer/showprojectoffer', compact('projectoffer'));
    }
    
    public function showbrandoffer($id)
    {

        $brandoffer = Brandoffer::find($id);
        return view('offer/showbrandoffer', compact('brandoffer'));

    }

    public function deleteprojectoffer($id)
    {
        $projectoffer = Projectoffer::find($id);
        $path = 'images/' . $projectoffer->shoplogo;
        if (file_exists($path)) {
            unlink($path);
        }

        $projectoffer->delete();
        return redirect('/project-offering');
    }
    public function deletebrandoffer($id)
    {
        $brandoffer = Brandoffer::find($id);
        $path = 'images/' . $brandoffer->shoplogo;
        if (file_exists($path)) {
            unlink($path);
        }

        $brandoffer->delete();
        return redirect('/brand-offering');
    }

    public function editprojectoffer($id)
    {

        $projectoffer = Projectoffer::find($id);
        return view('offer/editprojectoffer', compact('projectoffer'));
    }

    public function updateprojectoffer(Request $request, $id)
    {
        return "edit feature will implemented soon";
    }

    
    public function editbrandoffer($id)
    {
        $brandoffer = Brandoffer::find($id);
        return view('offer/editbrandoffer', compact('brandoffer'));
    }

    public function updatebrandoffer(Request $request, $id)
    {
        return "edit feature will implemented soon";
    }
}
