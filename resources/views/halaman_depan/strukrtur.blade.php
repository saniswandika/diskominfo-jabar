@extends('layouts.FrontPage')
@section('template')
<style>
section {
    height: 200%;
  }
  
  .bg {
    /* The image used */
    background-image: url("images/organigram.png");
  
    /* Full height */
    height: 100%;
  
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
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
  <section>
    
        <div class="bg">
        
            <div class="flex flex-col items-center w-full mt-10">
                <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-7xl mt-20" href="#">
                    Struktur organigram
                </a>
                
            </div> 
        <div class="p-2 pb-1 mt-6 md:p-12 md:-mt-4 lg:p-24 lg:-mt-16 grid grid-flow-row grid-cols-12 gap-4 mt-10">
            <div class="col-span-12 flex justify-center mt-28">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-42 h-48 rounded-full mx-auto" src="{{ asset('images/ika-mardiah.png') }}" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Dr. Ika Mardiah, M.Si.</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-10">
                        <p>KEPALA DINAS</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
                   
            </div>
            <div class="col-span-6 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="{{ asset('images/gilang.jpg') }}" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Gilang Sailendra, S.STP. M.Si</h3>
                    <div class="text-center text-gray-900 text-md text-xl font-semibold mt-10 ">
                        <p>SEKRETARIS DINAS</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Hj. Astria Priantie, S.E., M.M </h3>
                    <div class="text-center text-gray-900 text-md  text-xl font-semibold mt-5">
                        <p>KEPALA SUB BAGIAN KEUANGAN DAN ASET</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Winny Citra Dewi Utami, S.Sos., M.Kesos</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-4">
                        <p>KEPALA SUB BAGIAN KEPEGAWAIAN, UMUM, DAN KEHUMASAN</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Agi Agung Galuh Purwa, S.STP., M.Sc., MPA</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-5">
                        <p>KEPALA BIDANG E-GOVERNMENT</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Dian Istanti, S.Sos., M.A.P</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-10">
                        <p>KEPALA BIDANG APLIKASI INFORMATIKA</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Faiz Rahman, S.STP</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-6">
                        <p>KEPALA BIDANG INFORMASI KOMUNIKASI PUBLIK</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Tiomaida Seviana HH., SH., M.A.P</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-5">
                        <p>KEPALA BIDANG PERSANDIAN DAN KEAMANAN INFORMASI</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Ida Ningrum, S.Si.M.Pd</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-10">
                        <p>  KEPALA BIDANG STATISTIK</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
            <div class="col-span-6 sm:col-span-4 flex justify-center">
               
            </div>
           
            <div class="col-span-6 sm:col-span-4 flex justify-center">
                <div class="w-96 h-96 max-w-xs overflow-hidden rounded-lg shadow-md bg-yellow-300 hover:shadow-xl transition-shadow duration-300  object-cover ease-in-out">
                    <div class="photo-wrapper p-2">
                        <img class="w-40 h-40 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
                    </div>
                    <h3 class="text-center text-2xl text-gray-900 font-semibold leading-8 mt-2">Agi Agung Galuh Purwa, S.STP., M.Sc., MPA</h3>
                    <div class="text-center text-gray-900 text-md text-xl  font-semibold mt-5">
                        <p>PLT. KEPALA UNIT PELAKSANA TEKNIS DAERAH PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL</p>
                    </div>
                      <div class="flex items-center flex-wrap mt-5">
                       
                    </div>
                </div>
            </div>
          </div>
        </div>
</section>

@endsection