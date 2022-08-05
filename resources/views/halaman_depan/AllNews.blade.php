
@extends('layouts.FrontPage')
@section('template')


@if (request()->routeIs('semuaberita.show'))
<link rel="stylesheet" href="{{ asset('assets/beritacss/style.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/beritacss/tailwindcss.css') }}"/>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

@endif


<div class="bg-white py-6">
    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
      <!-- big grid 1 -->
      <div class="flex flex-row flex-wrap">
        <!--Start left cover-->
        <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
          <div class="relative hover-img max-h-98 overflow-hidden">
            <a href="#">
              <img class="max-w-full w-full mx-auto h-auto" src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
            </a>
            <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
              <a href="#">
                <h2 class="text-3xl font-bold capitalize text-white mb-3">{{ $berita[0]->title }}</h2>
              </a>
              <p class="text-gray-100 hidden sm:inline-block"></p>
              <div class="pt-2">
                <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>nama category berita</div>
              </div>
            </div>
          </div>
        </div>

        <!--Start box news-->
        <div class="flex-shrink max-w-full w-full lg:w-1/2">
          <div class="box-one flex flex-row flex-wrap">
            <article class="flex-shrink max-w-full w-full sm:w-1/2">
              <div class="relative hover-img max-h-48 overflow-hidden">
                <a href="#">
                  <img class="max-w-full w-full mx-auto h-auto"  src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
                </a>
                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                  <a href="#">
                    <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">{{ $layanan[0]->title }}</h2>
                  </a>
                  <div class="pt-1">
                    <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>nama category layanan</div>
                  </div>
                </div>
              </div>
            </article>
            <article class="flex-shrink max-w-full w-full sm:w-1/2">
              <div class="relative hover-img max-h-48 overflow-hidden">
                <a href="#">
                  <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
                </a>
                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                  <a href="#">
                    <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">{{ $publikasi[0]->title }}</h2>
                  </a>
                  <div class="pt-1">
                    <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>nama category publikasi</div>
                  </div>
                </div>
              </div>
            </article>
            <article class="flex-shrink max-w-full w-full sm:w-1/2">
              <div class="relative hover-img max-h-48 overflow-hidden">
                <a href="#">
                  <img class="h-40 rounded w-full object-cover object-center mb-6"  src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
                </a>
                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                  <a href="#">
                    <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">{{ $program[0]->title }}</h2>
                  </a>
                  <div class="pt-1">
                    <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>nama categori program</div>
                  </div>
                </div>
              </div>
            </article>
            <article class="flex-shrink max-w-full w-full sm:w-1/2">
              <div class="relative hover-img max-h-48 overflow-hidden">
                <a href="#">
                  <img class="h-40 rounded w-full object-cover object-center mb-6"  src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
                </a>
                <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                  <a href="#">
                    <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Online taxi users are increasing drastically ahead of the new year</h2>
                  </a>
                  <div class="pt-1">
                    <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Lifestyle</div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white">
    <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
      <div class="flex flex-row flex-wrap">
        <!-- Left -->
        <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
          <div class="w-full py-3">
            <h2 class="text-gray-800 text-2xl font-bold">
              <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Berita
            </h2>
          </div>
          <div class="flex flex-row flex-wrap -mx-3">
            @foreach ($berita as $posts )  
                <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                    <div class="flex flex-row sm:block hover-img">
                        <a href="">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ url('uploads/' . $posts->image) }}" alt="alt title">
                        </a>
                        <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                                <a href="#">{{ $posts->title }}</a>
                            </h3>
                            <p class="hidden md:block text-gray-600 leading-tight mb-1"> {!! Str::limit($posts->content , 150) !!}</p>
                           
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                            <div class="flex items-center flex-wrap ">
                                <a href ="{{ route('post.show' , $posts->id) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a>
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                  </svg>{{ $posts->views }}
                                </span>
                              </div>
                        </div>
                        {{-- <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                              <circle cx="12" cy="12" r="3"></circle>
                            </svg>{{ $posts->views }}
                          </span> --}}
                    </div>
                </div>
            @endforeach 
          </div>
        </div>
        <!-- right -->
      </div>
    </div>
  </div>
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>program
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
                @foreach ($program as $post )
                    <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                        <div class="flex flex-row sm:block hover-img">
                        <a href="">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"  src="{{ url('uploads/' . $post->image) }}" alt="alt title">
                        </a>
                        <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                            <a href="#">{{ $post->title }}</a>
                            </h3>
                            <p class="hidden md:block text-gray-600 leading-tight mb-1">{!! Str::limit($post->content , 300) !!}</p>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                        </div>
                        <div class="flex items-center flex-wrap ">
                            <a href ="{{ route('post.show' , $posts->id) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>
                            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>{{ $posts->views }}
                            </span>
                          </div>
                        </div>
                    </div>
                @endforeach
                    
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-50 py-6">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
          <div class="flex flex-row flex-wrap">
            <!-- Left -->
            <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
              <div class="w-full py-3">
                <h2 class="text-gray-800 text-2xl font-bold">
                  <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>pelayanan
                </h2>
              </div>
              <div class="flex flex-row flex-wrap -mx-3">
                <div class="flex-shrink max-w-full w-full px-3 pb-5">
                  <div class="relative hover-img max-h-98 overflow-hidden">
                    <!--thumbnail-->
                    <a href="#">
                      <img class="max-w-full w-full mx-auto h-auto" src="{{ asset('assets/img/bimbing.png') }}" alt="Image description">
                    </a>
                    <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                      <!--title-->
                      <a href="#">
                        <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                      </a>
                      <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>                                                  
                      <!-- author and date -->
                      <div class="pt-2">
                        <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Berita</div>
                      </div>
                    </div>
                  </div>
                </div>
                @foreach ($layanan as $posts )
                <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                    <div class="flex flex-row sm:block hover-img">
                      <a href="">
                        <img class="max-w-full w-full mx-auto" src="{{ url('uploads/' . $posts->image) }}" alt="alt title">
                      </a>
                      <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                        <h3 class="text-lg font-bold leading-tight mb-2">
                            <a href="#">{{ $posts->title }}</a>
                        </h3>
                        <p class="hidden md:block text-gray-600 leading-tight mb-1">{!! Str::limit($posts->content , 300) !!}</p>
                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                      </div>
                      <div class="flex items-center flex-wrap ">
                        <a href ="{{ route('post.show' , $posts->id) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                          </svg>{{ $posts->views }}
                        </span>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <!-- right -->
            <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
              <div class="w-full bg-white">
                <div class="mb-6">
                  <div class="p-4 bg-gray-100">
                    <h2 class="text-lg font-bold">Paling Popular</h2>
                  </div>
                  <ul class="post-number">
                    <li class="border-b border-gray-100 hover:bg-gray-50">
                      <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                    </li>
                    <li class="border-b border-gray-100 hover:bg-gray-50">
                      <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                    </li>
                    <li class="border-b border-gray-100 hover:bg-gray-50">
                      <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                    </li>
                    <li class="border-b border-gray-100 hover:bg-gray-50">
                      <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                    </li>
                    <li class="border-b border-gray-100 hover:bg-gray-50">
                      <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>publikasi
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
                @foreach ($publikasi as $posts)
                    <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                        <div class="flex flex-row sm:block hover-img">
                            <a href="">
                                <img class="h-40 rounded w-full object-cover object-center mb-6"  src="{{ url('uploads/' . $posts->image) }}" alt="alt title">
                            </a>
                            <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                <h3 class="text-lg font-bold leading-tight mb-2">
                                <a href="#">{{ $posts->title }}</a>
                                </h3>
                                <p class="hidden md:block text-gray-600 leading-tight mb-1">{!! Str::limit($posts->content , 300) !!}</p>
                                <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                            </div>
                            <div class="flex items-center flex-wrap ">
                                <a href ="{{ route('post.show' , $posts->id) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a>
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                  </svg>{{ $posts->views }}
                                </span>
                              </div>
                        </div>
                    </div>
                @endforeach
                    

            </div>
          </div>
        </div>
      </div>
    </div>

    @if (request()->routeIs('semuaberita.show'))
    <script src="{{ asset('assets/vendors/hc-sticky/dist/hc-sticky.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/glightbox/dist/js/glightbox.min.js') }}"></script>
   
    <script src="{{ asset('assets/vendors/@splidejs/splide/dist/js/splide.min.js') }}"></script>
    
    <script src="{{ asset('assets/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js') }}"></script>
    
    <!-- Start development js -->
    <script src="{{ asset('assets/js/themes.js') }}"></script>
    @endif
    
  <!-- End development js -->

@endsection
