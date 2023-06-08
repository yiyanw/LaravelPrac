<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Listing/index',
            [
                'listings' => Listing::all()
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia(
            "Listing/create"
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $listing = new Listing();
        // $listing->beds = $request->beds;
        // $listing->baths = $request->baths;
        // $listing->area = $request->area;
        // $listing->street = $request->street;
        // $listing->street_nr = $request->street_nr;
        // $listing->city = $request->city;
        // $listing->code = $request->code;
        // $listing->price = $request->price;
                
        // $listing->save();

        Listing::create([
            ...$request->validate([
                'beds' => 'required | integer | min:0 | max:20',
                'baths' => 'required | integer | min:0 | max:20',
                'area' => 'required | integer | min:0 | max:1000',
                'street' => 'required',
                'street_nr' => 'required',
                'city' => 'required',
                'code' => 'required | integer | min:0',
                'price' => 'required | integer | min:0',
            ])
        ]);
        
        return redirect()->route('listing.index')->with('success', 'Listing was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia(
            'Listing/show',
            [
                'listing' => $listing
            ]
            );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia(
            "Listing/edit",
            [
                'listing' => $listing
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {

        $listing->update([
            ...$request->validate([
                'beds' => 'required | integer | min:0 | max:20',
                'baths' => 'required | integer | min:0 | max:20',
                'area' => 'required | integer | min:0 | max:1000',
                'street' => 'required',
                'street_nr' => 'required',
                'city' => 'required',
                'code' => 'required | integer | min:0',
                'price' => 'required | integer | min:0',
            ])
        ]);

        return redirect()->route('listing.index')->with('success', 'Listing was changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
    }
}
