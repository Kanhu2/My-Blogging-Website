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

                <h1 class="text-2xl font-bold mb-4">Update Post</h1>

                <form action="{{ route('admin.postupdate', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                        <input type="text" name="title" id="title" value="{{ $post->title }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                        <textarea name="description" id="description"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            rows="5" required>{{ $post->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Old Image:</label>
                        <img src="{{ asset('img/' . $post->image) }}" alt="{{ $post->image }}"
                            class="mt-2 w-32 h-37 object-cover">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="block text-gray-700 font-bold mb-2">New Image:</label>
                        <input type="file" name="image" id="image"
                            class="shadow appearance-none border rounded w-full py-2 px-3
                            text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <input style="border: 1px solid green;
                        text-align: center; padding: 10px"
                        type="submit" name="submit" value="Update Post">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
