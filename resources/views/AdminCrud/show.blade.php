<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <h1>Products Show</h1>
        <hr/>

        <div class="bg-dark text-white rounded p-3">
            <h5 class="text-warning">Name</h5>
            <p class="fw-bold">{{ $change->title }}</p>

            <h5 class="text-warning">Price</h5>
            <p class="fw-bold">$ {{ $change->author }}</p>

            <h5 class="text-warning">Description</h5>
            <p class="fw-bold">{{ $change->description }}</p>
        </div>

    </x-slot>
</x-app-layout>
