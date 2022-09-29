@extends('layouts.admin')
@section('content')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
    <section>
            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tabFill"
            role="tablist">
            <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-homeFill" class="
                nav-link
                w-full
                block
                font-medium
                text-xs
                leading-tight
                uppercase
                border-x-0 border-t-0 border-b-2 border-transparent
                px-6
                py-3
                my-2
                hover:border-transparent hover:bg-gray-100
                focus:border-transparent
                active
            " id="tabs-home-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-homeFill" role="tab"
                aria-controls="tabs-homeFill" aria-selected="true">Layanan</a>
            </li>
            <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-profileFill" class="
                nav-link
                w-full
                block
                font-medium
                text-xs
                leading-tight
                uppercase
                border-x-0 border-t-0 border-b-2 border-transparent
                px-6
                py-3
                my-2
                hover:border-transparent hover:bg-gray-100
                focus:border-transparent
            " id="tabs-profile-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-profileFill" role="tab"
                aria-controls="tabs-profileFill" aria-selected="false">Tambah Layanan</a>
            </li>
        
        </ul>
        <div class="tab-content" id="tabs-tabContentFill">
            <div class="tab-pane fade show active" id="tabs-homeFill" role="tabpanel" aria-labelledby="tabs-home-tabFill">
                <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Tampilan Postingan Layanan
                </h4>
                <div class="grid gap-3 mb-8 md:grid-cols-1 xl:grid-cols-3">
                    <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div
                                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                <i class="fa-solid fa-newspaper"></i>
                                
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Total Layanan
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{ $count }}
                                </p>
                            </div>
                        </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                               Total pembaca Dari Seluruh Layanan
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                               {{$data}}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                tanggal terkahir di buat
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                {{-- {{ $posts[0]->created_at->format('d/m/Y') }}  --}}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                   
            </div>
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Cards with title
                </h4>
            </div>
            <div class="grid gap-6 mb-8 md:grid-cols-1">
      
           
                    <table id="myTable" class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3 text-center">Judul & gambar</th>
                                <th class="px-4 py-3 text-center">jumlah pembaca</th>
                                <th class="px-4 py-3 text-center">program</th>
                                <th class="px-4 py-3 text-center">tanggal & tahun pembuatan</th>
                                <th class="px-4 py-3 text-center">aksi</th>
                                <th class="px-4 py-3 text-center">status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($posts as $post)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                src="{{ url('uploads/' . $post->image) }}"
                                                    alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">{{ $post->title }}</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    10x Developer sikadnakndksa
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        {{ $post->views }}
                                    </td>
                                    <td class="px-4 py-3 text-xs text-center">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $post->nama_categori}}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        {{ $post->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-3">
                                        
                                        <div class="flex items-center space-x-4 text-sm">
                                            <form action="{{ route('admin.ListData.destroy', $post->id ) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id  }}">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                                
                                            </button>
                                            </form>
                                            
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->id  }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id  }}">
                                                <i class="fa-solid fa-eye"></i>
                                                
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox" data-id="{{ $post->id }}" name="status" class="js-switch" {{ $post->status == 1 ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                        </tbody>
                    </table>
               

                    @foreach ($posts as $post)
                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                        id="exampleModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog relative w-auto pointer-events-none">
                                <div
                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                        
                                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">{{ $post->nama_categori }}</h5>
                                                    <button type="button"
                                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                            <div
                                                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                                <i class="fa-solid fa-newspaper"></i>
                                                
                                            </div>
                                            <div>
                                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                    Total pembaca 
                                                </p>
                                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $post->views }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            <div class="flex justify-center">
                                                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                                <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                    <img class="rounded-t-lg" src="{{ url('uploads/' . $post->image) }}" alt=""/>
                                                </a>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">  {{ $post->title }}</h5>
                                                    <p class="text-gray-700 text-base mb-10">
                                                        {!! ($post->content )  !!}

                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md mt-10">
                                            <button type="button" class="px-6
                                                py-2.5
                                                bg-purple-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-purple-700 hover:shadow-lg
                                                focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-purple-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="px-6
                                                py-2.5
                                                bg-blue-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-blue-700 hover:shadow-lg
                                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-blue-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out
                                                ml-1">Save changes
                                            </button>
                                    </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            @foreach ($posts as $post)        
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="EditModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                                    Edit berita
                                </h5>
                                <button type="button"
                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body relative p-4">
                                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                        <div class="p-6 bg-white border-b border-gray-200">
                                            
                                            <form action="{{ route('admin.forms.update',[$post->id]) }}"  method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-6">
                                                    <label class="block">
                                                        <span class="text-gray-700">Title</span>
                                                        <input type="text" name="title"
                                                            class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md"
                                                            placeholder="" value="{{ old('title', $post->title) }}" />
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
                                                            placeholder=""value="{{ old('slug', $post->slug) }}" />
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
                                                        <textarea class="description" name="content">{{ old('content', $post->content) }}</textarea>
                                                    </label>
                                                    @error('content')
                                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                 id="multiple_files" type="file" multiple="" name="image" value="{{ old('image', $post->image) }}">
                                                 <div class="flex items-center justify-center">
                                                 <div class="object-center max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mt-4">
                                                    <a href="#">
                                                        <img class="rounded-t-lg" src="{{ url('uploads/' . $post->image) }}" alt="">
                                                    </a>

                                                 </div>
                                                 </div>

                                                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md mt-10">
                                                        <button type="button" class="px-6
                                                            py-2.5
                                                            bg-purple-600
                                                            text-white
                                                            font-medium
                                                            text-xs
                                                            leading-tight
                                                            uppercase
                                                            rounded
                                                            shadow-md
                                                            hover:bg-purple-700 hover:shadow-lg
                                                            focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                            active:bg-purple-800 active:shadow-lg
                                                            transition
                                                            duration-150
                                                            ease-in-out" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="px-6
                                                            py-2.5
                                                            bg-blue-600
                                                            text-white
                                                            font-medium
                                                            text-xs
                                                            leading-tight
                                                            uppercase
                                                            rounded
                                                            shadow-md
                                                            hover:bg-blue-700 hover:shadow-lg
                                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                            active:bg-blue-800 active:shadow-lg
                                                            transition
                                                            duration-150
                                                            ease-in-out
                                                            ml-1">Save changes
                                                        </button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach       
                <!-- Button trigger modal -->
                
                
                
            </div>
            <div
                class="text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex justify-center col-span-5 px-10 py-10">
                    {{ $posts->links('pagination::tailwind') }} 
                </span>
            </div>
                
            </div>
            <div class="tab-pane fade" id="tabs-profileFill" role="tabpanel" aria-labelledby="tabs-profile-tabFill">
                <div id="form-wrapper">
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
                                                <textarea class="description" name="content"></textarea>
                                            </label>
                                            @error('content')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                         id="multiple_files" type="file" multiple="" name="image">
                                        <button type="submit"
                                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5 mt-10">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script>
            let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    
                elems.forEach(function(html) {
                    let switchery = new Switchery(html,  { size: 'small' });
                });
            </script>
           <script>
                $(function() {
                    $('#myTable').DataTable();
                });
    
                        $(document).ready(function(){
                $('.js-switch').change(function () {
                    let status = $(this).prop('checked') === true ? 1 : 0;
                    let userId = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '{{ route('admin.updatestatus') }}',
                        data: {'status': status, 'user_id': userId},
                        success: function (data) {
                            console.log(data.message);
                        }
                    });
                });
            });
            </script>
        
       <script>
            $(function() {
                $('#myTable').DataTable();
            });
        </script>
    
    <script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
    </script>
        
        <script>
        
        </script>

@endsection


