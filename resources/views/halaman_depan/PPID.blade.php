@extends('layouts.FrontPage')
@section('template')
    <style>
            h1 {
                    font-family: "Montserrat Medium";
                    text-align: center;
                    transform: scale(0.94);
                    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
                }
                @keyframes scale {
                    100% {
                        transform: scale(1);
                    }
                }

                span {
                        display: inline-block;
                        opacity: 0;
                        filter: blur(4px);
                     }

                span:nth-child(1) {
                animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(2) {
                animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(3) {
                animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(4) {
                animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(5) {
                animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(6) {
                animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(7) {
                animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(8) {
                animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(9) {
                animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                span:nth-child(10) {
                animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }
                span:nth-child(11) {
                animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }

                @keyframes fade-in {
                100% {
                    opacity: 1;
                    filter: blur(0);
                }
                }
                .anjing {
                    font-family: "Montserrat Medium";
                    text-align: center;
                    transform: scale(0.94);
                    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
                }
                @keyframes scale {
                    100% {
                        transform: scale(1);
                    }
                }

                .bagong {
                        display: inline-block;
                        opacity: 0;
                        filter: blur(4px);
                     }

                span:nth-child(1) {
                animation: fade-in 0.60s 0.15s forwards cubic-bezier(0.11, 0, 0.5, 0);
                }


                @keyframes fade-in {
                100% {
                    opacity: 1;
                    filter: blur(0);
                }
                }

    </style>


  

<section class=" body-font">
    <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-col text-center w-full ">
            <h1 class="kata sm:text-3xl text-4xl font-medium title-font mb-4 text-gray-900"><span>PROFIL</span>
                <span>PEJABAT</span>
                <span>PENGELOLA</span>
                <span>INFORMASI</span>
                <span>DAN</span>
                <span>DOKUMENTASI</span><BR>
                <span>DISKOMINFO</span>
                <span>PROVINSI</span>
                <span>JAWA</span>
                <span>BARAT</span>
            </h1>
        </div>
        <div class="flex flex-col text-center w-full ">
            <p class="lg:w-2/3 text-xl mx-auto text-center leading-relaxed text-base">Setiap Badan Publik mempunyai kewajiban untuk membuka akses atas informasi publik yang berkaitan dengan Badan Publik tersebut untuk masyarakat luas. PPID Diskominfo Jabar merupakan layanan informasi satu pintu yang dimaksudkan untuk membangun mekanisme layanan informasi dengan cara melakukan interkoneksi dan sinergi dari data dan informasi yang dihasilkan masing-masing unit kerja.</p>
            <div class="border-t-4 mt-10 border-black ..."></div>
        </div>

        <div class="flex flex-col text-center mt-10 w-full ">
            <h1 class="anjing sm:text-3xl text-4xl font-medium title-font mb-4 text-gray-900"><span class="bagong">TUGAS</span>
            </h1>
        </div>
        <div class="flex flex-col text-center w-full ">
            <p class="lg:w-2/3 text-xl mx-auto text-center leading-relaxed text-base">Menyediakan, menyimpan, mendokumentasikan, dan mengamankan informasi.</p>
            <div class="anjing border-t-4 mt-10 border-black ..."></div>
        </div>
        <div class="flex flex-col text-center mt-10 w-full ">
            <h1 class="anjing sm:text-3xl text-4xl font-medium title-font mb-4 text-gray-900"><span class="bagong">FUNGSI</span></h1>
            <p class="lg:w-2/3 text-xl mx-auto text-center leading-relaxed text-base mb-10">Sebagai PPID Pembantu, PPID Diskominfo Jabar mempunyai fungsi;</p>
        </div>
        <div class="grid grid-cols gap-4 ">
                <div class=""> 
                    <ol class="">
                        <li>1. Membantu PPID Utama melaksanakan tanggung jawab, tugas, dan kewenangannya</li>
                        <li>2. Mengumpulkan bahan informasi dan dokumentasi pada Dinas Komunikasi dan Informatika Daerah</li>
                        <li>3. Menyimpan, mendokumentasikan, menyediakan dan memberi pelayanan informasi kepada publik</li>
                        <li>4. Mengkoordinasikan penyusunan dan pemutakhiran data di masing-masing unit kerja untuk ditetapkan oleh pimpinan unit kerja pada Dinas Komunikasi dan Informatika Daerah</li>
                        <li>5. Menyusun laporan pengelolaan pelayanan informasi di setiap unit kerja dalam Dinas Komunikasi dan Informatika Daerah</li>
                        <li>6. Membentuk petugas pelayanan informasi di unit kerja masing-masing yang meliputi pengelolaan data, kearsipan, dokumentasi serta kehumasan</li>
                        <li>7. Mengkoordinasikan dan memastikan proses keberatan kepada Ketua Tim PPID Pembantu</li>
                        <li>8. Menyediakan, menyimpan, mendokumentasian, dan mengamankan informasi publik di Dinas Komunikasi dan Informatika Daerah</li>
                        <li>9. Memberikan pelayanan informasi publik secara cepat, tepat, dan sederhana, terkait permohonan informasi pada Dinas Komunikasi dan Informatika Daerah</li>
                        <li>10. Membuat informasi publik yang dapat di akses pada PPID masing-masing unit kerja dan melaporkannya kepada Ketua Tim PPID Pembantu</li>
                        <li>11. Membuat pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak masyarakat atas informasi publik</li>
                        <li>12. Menyusun telaahan staf sebagai bahan pertimbangan pengambilan kebijakan dan menyelenggarakan tugas lain, sesuai dengan tugas pokok dan fungsinya.</li>
          
                        <!-- ... -->
                      </ol>
                </div>
                
          </div>

        
          <div class="anjing border-t-4 mt-10 border-black ..."></div>

          <div class="flex flex-col text-center mt-10 w-full ">
            <h1 class="anjing sm:text-3xl text-4xl font-medium title-font mb-4 text-gray-900"><span class="bagong">MAKLUMAT PELAYANAN INFORMASI</span></h1>
        </div>
          <div class="flex justify-center mt-10 ...">
            <div><img class="object-cover object-center rounded" alt="hero"  src="{{ asset('assets/img/jabar.png') }}"></div>
          </div>
        
  </section>
  <script>
    </script>
@endsection