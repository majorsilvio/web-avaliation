<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Auth::user()->restaurants;
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialty' => 'required',
            'price' => 'required',
        ]);

        $userId = auth()->id();

        $restaurant = new Restaurant($validatedData);
        $restaurant->user_id = $userId;
        $restaurant->save();

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
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'specialty' => 'required',
            'price' => 'required',
        ]);

        $userId = auth()->id();

        $restaurant = Restaurant::where('id', $id)
                            ->where('user_id', $userId)
                            ->firstOrFail();

        $restaurant->update($validatedData);

        return redirect('/restaurants')->with('success', 'Restaurant updated successfully.');
    }

    public function destroy($id)
    {
        $userId = auth()->id();

        $restaurant = Restaurant::where('id', $id)
                            ->where('user_id', $userId)
                            ->firstOrFail();
        $restaurant->delete();

        return redirect('/restaurants')->with('success', 'Restaurant deleted successfully.');
    }
}
