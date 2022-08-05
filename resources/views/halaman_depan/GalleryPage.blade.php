@extends('layouts.FrontPage')
@section('template')

<div class="w-full m-0 p-0 bg-cover bg-bottom jumbotron">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
            <p class="text-white font-extrabold text-3xl md:text-5xl">
                Welcome to all news 
            </p>
            <p class="text-xl md:text-2xl text-white">Diskominfo Jabar</p>
    </div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
    
    <div class="mx-0 sm:mx-6">
        

        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            
        <!--Lead Card-->
        <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
            <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                <div class="w-full md:w-2/3 rounded-t">	
                    <img src="{{ url('uploads/' . $berita['0']->image) }}" class="h-full w-full shadow">
                </div>

                <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6"></p>
                        <div class="w-full font-bold text-4xl text-gray-900 px-6">{{ $berita[0]->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita[0]->content , 300) !!}
                        </p>
                    </div>

                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="{{ asset('assets/img/logo-kominfo.png') }}" alt="Avatar of Author">
                            <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                  <circle cx="12" cy="12" r="3"></circle>
                                </svg>{{ $berita[0]->views }}
                              </span>
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <!--/Lead Card-->


        <!--Posts Container-->
        <div class="flex flex-wrap justify-between pt-12 -mx-6">
            
            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src={{ url('uploads/' . $berita['1']->image) }} class="h-64 w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full  font-bold text-xl text-gray-900 px-6">{{ $berita[1]->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita[1]->content , 300) !!}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita[1]->views }}</p>
                    </div>
                </div>
            </div>
        
            
            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src={{ url('uploads/' . $berita['2']->image) }} class="h-64 w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full  font-bold text-xl text-gray-900 px-6">{{ $berita[2]->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita[2]->content , 300) !!}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita[2]->views }}</p>
                    </div>
                </div>
            </div>

            <!--1/3 col -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ url('uploads/' . $berita['3']->image) }}" class="h-64 w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full  font-bold text-xl text-gray-900 px-6">{{ $berita[3]->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita[3]->content , 300) !!}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita[3]->views }}</p>
                    </div>
                </div>
            </div>


            <!--1/2 col -->
            <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ url('uploads/' . $berita['4']->image) }}" class="h-full w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $berita[4]->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita[4]->content , 300) !!}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita[4]->views }}</p>
                    </div>
                </div>
            </div>

            <!--1/2 col -->
            {{-- <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">	
                        <img src="{{ url('uploads/' . $berita['5']->image) }}" class="h-full w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $berita['5']->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita['5']->content , 300) !!} 
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita['5']->views }}</p>
                    </div>
                </div>
            </div> --}}



            <!--2/3 col -->
            {{-- <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">	
                        <img src="{{ url('uploads/' . $berita['5']->image) }}" class="h-full w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $berita['5']->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita['5']->content , 300) !!} 
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita['5']->views }}</p>
                    </div>
                </div>
            </div> --}}

            <!--1/3 col -->
            {{-- <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ url('uploads/' . $berita['5']->image) }}" class="h-full w-full rounded-t pb-6">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                        <div class="w-full font-bold text-xl text-gray-900 px-6">{{ $berita['5']->title }}</div>
                        <p class="text-gray-800 font-serif text-base px-6 mb-5">
                            {!! Str::limit($berita['5']->content , 300) !!}  
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <p class="text-gray-600 text-xs md:text-sm">{{ $berita['0']->views }}</p>
                    </div>
                </div>
            </div> --}}

        </div>
        <!--/ Post Content-->
                
    </div>
        <!--Author-->

        <nav aria-label="Page navigation example" class="flex justify-center mt-10">
            <ul class="inline-flex -space-x-px ">
              <li>
                <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
              </li>
              <li>
                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
              </li>
              <li>
                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
              </li>
              <li>
                <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
              </li>
              <li>
                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
              </li>
              <li>
                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
              </li>
              <li>
                <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
              </li>
            </ul>
          </nav>
          
        <!--/Author-->
    
</div>


</div>
{{-- <section>
    <div class="flex flex-col items-center w-full mt-10">
          <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            Gallery And News 
        </a>
        <p class="text-lg text-gray-600">
            Dinas Komunikasi dan Informatika
        </p>
    </div>
    <div class="p-2 pb-16 mt-6 md:p-12 md:-mt-4 lg:p-24 lg:-mt-16 grid grid-flow-row grid-cols-3 gap-4">
      <div>
        <a href="/" class="col-span-2 relative group cursor-pointer">
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ asset('images/bimbing.png') }}" alt="bathtub">
            <div class="opacity-0 group-hover:opacity-100 duration-300 absolute left-0 bottom-0 right-0 z-10 flex justify-center items-end text-xl text-white font-semibold">
              <div
              class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out bg-gray-100  bg-opacity-25"
              >
                  <div class="font-bold text-black">Jessie Watsica</div> 
                      <div class="text-sm text-black ">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Distinctio dolores error iure, perferendis
                          sequi totam. Ad aliquam aperiam atque deleniti dolor
                          dolorem enim esse et in, inventore itaque, pariatur
                          reprehenderit.
                      </div>
                  </div>
              </div>
          </a>
            </div>
            <div class="col-span-2">
                <div
                class="overflow-hidden  aspect-video bg-red-400 cursor-pointer rounded-xl relative group"
                 >
                    <div
                        class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end"
                    >
                        <div>
                            <div
                                class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out bg-gray-100  bg-opacity-25"
                            >
                                <div class="font-bold text-black">Jessie Watsica</div>

                                <div class="text-sm text-black ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Distinctio dolores error iure, perferendis
                                    sequi totam. Ad aliquam aperiam atque deleniti dolor
                                    dolorem enim esse et in, inventore itaque, pariatur
                                    reprehenderit.
                                </div>
                            </div>
                        </div>
                    </div>
                    <img
                        alt=""
                        class="object-cover w-full aspect-square group-hover:scale-110 transition duration-300 ease-in-out"
                        src="{{ asset('images/bimbing.png') }} "
                    />
            </div>
      </div>
      <a href="/" class="col-span-2 relative group cursor-pointer">
          <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ asset('images/bimbing.png') }}" alt="bathtub">
          <div class="opacity-0 group-hover:opacity-100 duration-300 absolute left-0 bottom-0 right-0 z-10 flex justify-center items-end text-xl text-white font-semibold">
            <div
            class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out bg-gray-100  bg-opacity-25"
            >
                <div class="font-bold text-black ">Jessie Watsica</div>

                    <div class="text-sm text-black ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Distinctio dolores error iure, perferendis
                        sequi totam. Ad aliquam aperiam atque deleniti dolor
                        dolorem enim esse et in, inventore itaque, pariatur
                        reprehenderit.
                    </div>
                </div>
            </div>
        </a>
      <a href="/" class="row-span-2 relative group cursor-pointer">
          <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ asset('images/bimbing.png') }}" alt="lampstand">
          <div class="opacity-0 group-hover:opacity-100 duration-300 absolute left-0 bottom-0 right-0 z-10 flex justify-center items-end text-xl text-white font-semibold">
            <div
            class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out bg-gray-100  bg-opacity-25"
            >
                <div class="font-bold text-black ">Jessie Watsica</div>

                    <div class="text-sm text-black ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Distinctio dolores error iure, perferendis
                        sequi totam. Ad aliquam aperiam atque deleniti dolor
                        dolorem enim esse et in, inventore itaque, pariatur
                        reprehenderit.
                    </div>
                </div>
            </div>
        </a>
      <a href="" class="relative group cursor-pointer">
          <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ asset('images/bimbing.png') }}" alt="plants">
           <div class="opacity-0 group-hover:opacity-100 duration-300 absolute left-0 bottom-0 right-0 z-10 flex justify-center items-end text-xl text-white font-semibold">
            <div
            class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out bg-gray-100  bg-opacity-25">
                <div class="font-bold text-black ">Jessie Watsica</div>

                    <div class="text-sm text-black ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Distinctio dolores error iure, perferendis
                        sequi totam. Ad aliquam aperiam atque deleniti dolor
                        dolorem enim esse et in, inventore itaque, pariatur
                        reprehenderit.
                    </div>
                </div>
            </div>
        </a>
        <a href="" class="relative group cursor-pointer">
            <img class="object-cover h-full w-full rounded-xl shadow-xl" src="{{ asset('images/bimbing.png') }}" alt="plants">
             <div class="opacity-0 group-hover:opacity-100 duration-300 absolute left-0 bottom-0 right-0 z-10 flex justify-center items-end text-xl text-white font-semibold bg-gray-100  bg-opacity-25">
              <div
              class="transform-gpu  p-4 space-y-3 text-xl group-hover:opacity-200 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out"
              >
                  <div class="font-bold text-black ">Jessie Watsica</div>
  
                      <div class="text-sm text-black ">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Distinctio dolores error iure, perferendis
                          sequi totam. Ad aliquam aperiam atque deleniti dolor
                          dolorem enim esse et in, inventore itaque, pariatur
                          reprehenderit.
                      </div>
                  </div>
              </div>
          </a>
  </div>


</section> --}}
@endsection
