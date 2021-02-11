<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     //biasanya untuk get All Data
    {
        $data = Food::all();
        // dd($data->all());
        return view('foods.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    //biasanya untuk nampilin form create
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //biasanya untuk nge-create data ke database
    {
        // return 'harusnya udah disini';
        // dd($request->all());
        $food_name_dari_form = $request['food_name'];
        $price_dari_form = $request->price;
        // dd($price_dari_form);
        $food = Food::create([
            'food_name' => $food_name_dari_form,
            'price' => $price_dari_form
        ]);
        return 'berhasil';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return 'ini untuk edit';
        $food = Food::find($id);
        // dd($food);
        return view('foods.update', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request -> all());
        $food_name_update = $request['food_name'];
        $price_update = $request->price;
        $food = Food::where('id', $id) -> update([
            // 'food_name' => $request['food_name'],
            // 'price' => $request['price']
            'food_name' => $food_name_update,
            'price' => $price_update
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::destroy($id);
        return redirect('/');
    }
}
