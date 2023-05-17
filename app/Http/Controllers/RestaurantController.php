<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialty' => 'required',
            'price' => 'required',
        ]);

        Restaurant::create($request->all());

        return redirect('/restaurants')->with('success', 'Restaurant created successfully.');
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.show', compact('restaurant'));
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialty' => 'required',
            'price' => 'required',
        ]);

        $restaurant = Restaurant::find($id);
        $restaurant->update($request->all());

        return redirect('/restaurants')->with('success', 'Restaurant updated successfully.');
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        return redirect('/restaurants')->with('success', 'Restaurant deleted successfully.');
    }
}
