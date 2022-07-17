<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;

class ListingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $listings = Listing::orderBy('created_at', 'desc')->get();
        return view('index', compact('listings'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', 
            'address' => 'required',
            'website' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'bio' => 'required',
        ]);

        $listings = new Listing();
        $listings->user_id = Auth::id();
        $listings->name = $request->input('name');
        $listings->address = $request->input('address');
        $listings->website = $request->input('website');
        $listings->email = $request->input('email');
        $listings->phone = $request->input('phone');
        $listings->bio = $request->input('bio');
        $listings->save();

        return redirect()->to('home')->with('success', 'Listing Created Successfully!');
    }

    public function edit($id)
    {
        $listings = Listing::find($id);
        return view('edit')->with('listings', $listings);
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);
        $listing->name = $request->input('name');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');
        $listing->save();

        return redirect()->to('/home')->with('success', 'Listing edited successfully!');
    }

    public function destroy($id)
    {
        $listings = Listing::find($id);
        $listings->delete();

        return redirect()->to('/home')->with('success', 'Listing deleted successfully!');
    }

    public function show($id)
    {
        $listings = Listing::find($id);
        return view('show', compact('listings'));
    }
}
