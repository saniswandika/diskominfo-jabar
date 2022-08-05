@extends('layouts.FrontPage')
@section('template')
  

<header class="w-full container mx-auto">
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">DINAS KOMUNIKASI DAN INFORMATIKA
          
          <br class="hidden lg:inline-block">PROVINSI JAWA BARAT
        </h1>
        <p class="mb-8 leading-relaxed">Dinas mempunyai tugas pokok melaksanakan urusan pemerintahan Daerah bidang komunikasi dan informatika, meliputi E-Government, Aplikasi Informatika, Informasi dan komunikasi Publik, persandian dan keamanan informasi dan statistik berdasarkan asas otonomi, yang menjadi kewenangan Provinsi, melaksanakan tugas dekonsentrasi sampai dengan dibentuk Sekretariat Gubernur sebagai Wakil Pemerintah Pusat serta melaksanakan tugas pembantuan sesuai bidang tugasnya.</p>
          <div class="flex justify-center">
              <a href="/tupoksi">
                  <button  class="inline-flex text-black bg-yellow-300 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-300 rounded text-lg">Read more</button>
              </a>
          </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero"  src="{{ asset('assets/img/jabar.png') }}">
      </div>
    </div>
  </section>
</header>
    <div class="container mx-auto flex flex-wrap py-6">

      <!-- Posts Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-6">
        @foreach ($berita as $post)
          <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="{{ route('post.show' , $post->id) }}" class="hover:opacity-75">
                <img src="{{ url('uploads/' . $post->image) }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-10 py-7">
                {{-- <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a> --}}
                <a href="{{ route('post.show' , $post->id) }}"class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                <p href="#" class="text-sm pb-3">
                   Published on {{ $post->created_at->format('d/m/Y')}}
                </p>
                <a href="{{ route('post.show' , $post->id) }}" class="pb-6">{!! Str::limit($post->content , 600) !!}</a>
                <br>
                <a href="{{ route('post.show' , $post->id) }}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
          @endforeach
          <!-- Pagination -->
      </section>

      <!-- Sidebar Section -->
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
          <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            @foreach ($posts as $post)
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                 <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ url('uploads/' . $post->image) }}" alt="blog">
                <div class="p-6">
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"></h2>
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
                    <p class="leading-relaxed mb-3">{!! Str::limit($post->content , 200) !!}</p>
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
                        </svg>{{ $post->views }}
                      </span>
                    </div>
                  </div>
                 

              </div>  
              @endforeach
              {{ $posts->links('pagination::tailwind') }} 
          </div>
      </aside>
    </div>
    <div class="flex flex-col bg-white m-auto p-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Berita Terkini Diskominfo</h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
      </div>
            <div
              class="flex overflow-x-scroll pb-10  hide-scroll-bar"
            >
              <div
                class=" flex flex- lg:ml-1 md:ml-20 ml-5 "
              >
              @foreach ($post_berita as $post)
                <div class="inline-block px-5 ">
                  <div class="w-96 h-96 max-w-xl overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                      <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ url('uploads/' . $post->image) }}" alt="content">
                      <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBT</h2>
                      <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                      <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                        <div class="flex items-center flex-wrap mt-5">
                          <a href ="{{ route('post.show' , $post->id) }}" class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                          </a>
                        </div>
                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                          </svg>{{ $post->views }}
                        </span>
                   </div>
                </div>
                @endforeach
                
              </div>
            </div>
          </div>
      </div>
      <style>
      .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
      .hide-scroll-bar::-webkit-scrollbar {
        display: none;
      }
      </style>
    <section class="text-gray-600 text-center body-font">
      <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
        program 
    </a>
    <p class="text-lg text-gray-600">
        Dinas Komunikasi dan Informatika
    </p>
      <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-wrap mx-4 -mb-10 text-center">
          @foreach ($program as $post)
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="{{ url('uploads/' . $post->image) }}">
              </div>
              <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">  {{ $post->title }}</h2>
              <p class="leading-relaxed text-base">  {!! Str::limit($post->content , 300) !!}</p>
              <a href="{{ route('post.show' , $post->id) }}">
                  <button class="flex mx-auto mt-6 text-black bg-yellow-300 border-0 py-2 px-5 focus:outline-none hover:bg-blue-300 rounded">klik disini</button>
              </a>
            </div>
          @endforeach
          <div class="flex mx-auto mt-6 text-black bg-yellow-300 border-0 py-2 px-5 focus:outline-none hover:bg-blue-300 rounded">
            {{ $program->links('pagination::tailwind') }}
          </div>
        </div>
      </div>

    </section>
    <section>
      <div class="flex flex-col items-center w-full py-10">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
              Publikasi
          </a>
          <p class="text-lg text-gray-600">
              Dinas Komunikasi dan Informatika
          </p>
      </div>
      <div class="p-2 pb-16 mt-6 md:p-12 md:-mt-4 lg:p-24 lg:-mt-16 grid grid-flow-row grid-cols-3 gap-4">

        <div>
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['0']->image) }}" alt="stand">
        </div>
        
        
        <div class="col-span-2">
          <img class="object-fill h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['1']->image) }}" alt="couch">
        </div>
        
        
        <div class="col-span-2">
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['2']->image) }}" alt="bathtub">
        </div>
        {{-- <div class="row-span-2">
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['4']->image) }}" alt="lampstand">
        </div> --}}
        {{-- <div>
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['3']->image) }}" alt="plants">
        </div> --}}
        <div>
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi['0']->image) }}" alt="wooden stand">
        </div>
      </div>
      
  </section>
  

{{-- <script>
  var hasil = document.getElementById("hasil");
  hasil.innerPHP=" <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ url('uploads/' . $publikasi->image) }}" alt="stand">"
</script> --}}
        


@endsection