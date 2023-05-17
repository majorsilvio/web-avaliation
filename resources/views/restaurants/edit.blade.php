<!-- resources/views/restaurants/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar restaurante '.$restaurant->name)   }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="text-primary">Edit Restaurant</h1>
        <form action="{{ route('restaurants.update', $restaurant->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="text-primary">Name</label>
                <input type="text" name="name" id="name" value="{{ $restaurant->name }}" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="address" class="text-primary">Address</label>
                <input type="text" name="address" id="address" value="{{ $restaurant->address }}" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="phone" class="text-primary">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ $restaurant->phone }}" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="specialty" class="text-primary">Specialty</label>
                <input type="text" name="specialty" id="specialty" value="{{ $restaurant->specialty }}" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="price" class="text-primary">Price</label>
                <input type="text" name="price" id="price" value="{{ $restaurant->price }}" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div>
                <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
