<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        // return inertia(
        //     "Index/index",
        //     [
        //         'message' => 'Hello from Laravel!',
        //         'test' => 123
        //     ]
    // );
        return redirect()->route('listing.index');
    }
    public function show() {
        return inertia('Index/show');
    }

}
