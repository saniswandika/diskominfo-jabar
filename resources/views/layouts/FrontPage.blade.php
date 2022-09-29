
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @if (request()->routeIs('login','register'))
      <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}"/>
    @endif
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    
  </head>
<body class="bg-white font-family-karla">
  @if (request()->routeIs('login','register','semuaberita.show')) 
  <header class="text-white bg-blue-800 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center flex justify-center">
      {{-- <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        
      </nav> --}}
      <a href="/" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
        <div class="flex flex-col text-center bg-white w-28 rounded-lg">
            <img src="{{ asset('images/logo_diskom.svg') }}" class="mr-3 h-10" alt="Flowbite Logo" />
        </div>
      </a>
      {{-- <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      </div> --}}
    </div>
  </header>
    @else 
    <header class="text-white bg-blue-800 body-font">
      <div class="container flex  p-5 flex-col md:flex-row">
        <nav class="flex lg:w-2/5 items-center text-base md:">
          <div class="dropdown">
              <button class="dropbtn">Profile
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="/struktur">Sejarah</a>
                <a href="/tupoksi">Tupoksi</a>
                <a href="/struktur">Struktur Organisasi</a>
              </div>
            </div> 
            {{-- <div class="dropdown">
              <button class="dropbtn">Program 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                @foreach ( $program as $o )
                <a href="{{ route('post.show' , $o->id) }}">jdknak</a>
                @endforeach
               
               
              </div>
            </div>  --}}
          <div class="dropdown">
              <button class="dropbtn">Informasi
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="/ppid">PPID</a>
                <a href="/permohonan">Permohonan</a>
                <a href="#">Produk Hukum</a>
                <a href="#">Dokumen</a>
              </div>
            </div> 
            <div class="dropdown">
              <button class="dropbtn">Berita
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="/semuaberita">Semua Berita</a>
                <a href="/galleryPage">Semua Foto</a>
              </div>
            </div> 
        </nav>
        <a href="/" class="flex  lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
          <div class="flex flex-col text-right bg-white w-28 rounded-lg">
              <img src="{{ asset('images/logo_diskom.svg') }}" class="mr-3 h-10" alt="Flowbite Logo" />
          </div>
        </a>
        {{-- <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">

          <form class="flex items-center">   
              <label for="simple-search" class="sr-only">Search</label>
              <div class="relative w-full">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required="">
              </div>
              <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  <span class="sr-only">Search</span>
              </button>
          </form>
          
        </div> --}}
      </div>
  </header>
  @endif
  
   
  {{-- @include('halaman_depan.HomeBlog') --}}
    @yield('template')
    
        <footer class="footer-area">
            <div class="footer-wave-box">
                <div class="footer-wave footer-animation"></div>
            </div>
            <div class="main">
                <div class="footer">
                    <div class="single-footer">
                        <div class="flex flex-col text-center bg-white w-full rounded-lg">
                            <img src="{{ asset('images/logo_diskom.svg') }}" class="mr-3 h-28" alt="Flowbite Logo" />
                        </div>
                       <div class="footer-social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="single-footer">
                        <h4>main menu</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-chevron-right"></i> home</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> tentang kami</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> program</a></li>
                            <li><a href=""><i class="fas fa-chevron-right"></i> hubungin kami</a></li>
                        </ul>
                    </div>
               
                    <div class="single-footer">
                        <h4>contact us</h4>
                        <ul>
                            <li><a href=""><i class="fas fa-map-marker-alt"></i> Jl. Taman Sari No. 55 Bandung 40132</a></li>
                            <li><a href=""><i class="fas fa-mobile-alt"></i> 022-2502898</a></li>
                         
                            <li><a href=""><i class="fas fa-globe-europe"></i> www.demo.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copy">
                    <p>&copy; 2020 all rights reserved</p>
                </div>
            </div>
        </footer>
    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>

</body>
</html>