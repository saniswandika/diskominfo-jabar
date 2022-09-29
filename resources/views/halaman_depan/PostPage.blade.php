
@extends('layouts.FrontPage')
@section('template')
<div class="container mx-auto flex flex-wrap py-6">

    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="{{ url('uploads/' . $syarat->image) }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"></a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $syarat->title}}</a>
                <p href="#" class="text-sm pb-8">
                 Published on {{ $syarat->created_at}}
                </p>
                <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                <p class="pb-3">{!! $syarat->content !!} </p>
              </div>
        </article>

        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="{{ asset('assets/img/logo-kominfo.png') }}" class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">Diskominfo Jabar</p>
                <p class="pt-2">.Meningkatkan pelayanan informasi komunikasi dan data elektronik yang cepat, akurat dan aktual</p>
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                    <a class="" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="pl-4" href="#">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

      
      <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        @foreach ($posts as $post)
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
             <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ url('uploads/' . $post->image) }}" alt="blog">
            <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
                <p class="leading-relaxed mb-3">{!! Str::limit($post->content , 300) !!}</p>
                <div class="flex items-center flex-wrap ">
                  <a href ="{{ route('post.show' , $post->id) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14"></path>
                      <path d="M12 5l7 7-7 7"></path>
                    </svg>
                  </a>
                  <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                  </span>
                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                  </span>
                </div>
              </div>
              

          </div>  
          @endforeach
          
          
      </div>
        

        
    </aside>
  </div>
@endsection
