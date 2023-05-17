<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1 class="text-primary py-4 px-6">Restaurantes</h1>
        <a href="{{ route('restaurants.create') }}" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 mt-5 rounded">Cadastrar restaurante</a>
        <table class="table-auto w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-primary text-white">Nome</th>
                    <th class="px-4 py-2 bg-primary text-white">Endereço</th>
                    <th class="px-4 py-2 bg-primary text-white">Telefone</th>
                    <th class="px-4 py-2 bg-primary text-white">Especialidade</th>
                    <th class="px-4 py-2 bg-primary text-white">Preço medio</th>
                    <th class="px-4 py-2 bg-primary text-white">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <td class="px-4 py-2">{{ $restaurant->name }}</td>
                        <td class="px-4 py-2">{{ $restaurant->address }}</td>
                        <td class="px-4 py-2">{{ $restaurant->phone }}</td>
                        <td class="px-4 py-2">{{ $restaurant->specialty }}</td>
                        <td class="px-4 py-2">{{ $restaurant->price }}</td>
                        <td class="px-4 py-2 flex justify-between items-center">
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="bg-secondary hover:bg-primary font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="bg-secondary hover:bg-primary font-bold py-2 px-4 rounded">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
