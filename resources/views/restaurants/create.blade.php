<!-- resources/views/restaurants/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="text-primary">Create Restaurant</h1>
        <form action="{{ route('restaurants.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-primary">Name</label>
                <input type="text" name="name" id="name" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="address" class="text-primary">Address</label>
                <input type="text" name="address" id="address" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4 border border-primary border-opacity-50">
                <label for="phone" class="text-primary">Phone</label>
                <input type="text" name="phone" id="phone" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="specialty" class="text-primary">Specialty</label>
                <input type="text" name="specialty" id="specialty" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div class="mb-4">
                <label for="price" class="text-primary">Price</label>
                <input type="number" name="price" id="price" class="block w-full bg-white border border-primary border-opacity-50 rounded py-2 px-4">
            </div>
            <div>
                <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded">Create</button>
            </div>
        </form>
    </div>
    </div>
</x-app-layout>

