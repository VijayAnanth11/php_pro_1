<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Card;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        // $demos = Demo::where('course', '=', 'doctor')->get();
        return view ('userscreens.menu')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userscreens.menu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $requestData = $request->all();
        // $fileName = time().$request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->storeAs('images',$fileName,'public');
        // $requestData["image"] = '/storage/'.$path;
        // Card::create($requestData);
        // return redirect('menu')->with('flash_message', 'Card Addedd!');

        $input = $request->all();
        Card::create($input);
        return redirect('menu')->with('flash_message', 'Card Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
