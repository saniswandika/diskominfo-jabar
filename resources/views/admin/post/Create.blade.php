@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

{{-- trix-editor --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
<script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
{{-- flowbite --}}
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
    theme: {
    extend: {
        fontFamily: {
        sans: ['Inter', 'sans-serif'],
        },
    }
    }
}
</script>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{ route('admin.forms.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Title</span>
                            <input type="text" name="title"
                                class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('title')}}" />
                        </label>
                        @error('title')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Slug</span>
                            <input type="text" name="slug"
                                class="block w-full @error('slug') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('slug')}}" />
                        </label>
                        @error('slug')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6 ">
                        <label class="block">
                            <span class="text-gray-700">Select Category</span>
                            <select name="category_id" class="block w-full mt-1 rounded-md">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </label>
                        @error('category_id')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">content</span>
                            <textarea class="block w-full mt-1 rounded-md" name="content"
                                rows="3">{{old('content')}}</textarea>
                        </label>
                        @error('content')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                     id="multiple_files" type="file" multiple="" name="image">
                    <button type="submit"
                        class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection