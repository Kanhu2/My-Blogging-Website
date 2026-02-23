<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (Auth::check() && Auth::user()->usertype == 'admin')
                {{ __('Admin Dashboard') }}
            @else
                {{ __('User Dashboard') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 bg-white rounded-lg shadow-md">

                <h1 class="text-2xl font-bold mb-4">Add New Post</h1>
                @if (session('message'))
                    <div class="alert alert-success mb-4" style="color: green; font-weight: bold;">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="{{ route('admin.createpost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                        <input type="text" name="title" id="title"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                        <textarea name="description" id="description"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            rows="5" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
                        <input type="file" name="image" id="image"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <input style="border: 1px solid blue;
                        text-align: center; padding: 10px"
                        type="submit" name="submit" value="Create Post">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
