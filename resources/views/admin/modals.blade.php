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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>


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
        <div class="tab-content" id="tabs-tabContentFill">
            <div class="tab-pane fade show active" id="tabs-homeFill" role="tabpanel" aria-labelledby="tabs-home-tabFill">
                <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Tampilan Masuk Data Permohonan 
                </h4>
                <div class="grid gap-3 mb-8 md:grid-cols-1 xl:grid-cols-2">

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
                               Total pengajuan PPID
                            </p>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                               {{$count}}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    
                    <!-- Card -->
                   
            </div>
         <div class="grid gap-6 mb-8 md:grid-cols-1 mt-10">
      
           
            <table id="myTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center">Nama</th>
                        <th class="px-4 py-3 text-center">E-mail</th>
                        <th class="px-4 py-3 text-center">No_ktp</th>
                        <th class="px-4 py-3 text-center">kontak pemohon</th>
                        <th class="px-4 py-3 text-center">alamat</th>
                        <th class="px-4 py-3 text-center">tujuan</th>
                        <th class="px-4 py-3 text-center">permintaan_informasi</th>
                        <th class="px-4 py-3 text-center">Lihat KTP & Tanda Tangan</th>
                        <th class="px-4 py-3 text-center">Hapus data permohonan</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($PPID as $post)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div>
                                        <p class="font-semibold">{{ $post->nama}}</p>
                                        
                                    </div>
                                </div>
                            </td>
                            {{-- nama --}}
                            <td class="px-4 py-3 text-sm text-center">
                                {{ $post->email}}
                            </td>
                            {{-- email --}}
                            <td class="px-4 py-3 text-xs text-center">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $post->No_Ktp}}
                                </span>
                            </td>
                            {{-- nomer KTP --}}
                            <td class="px-4 py-3 text-sm text-center">
                                {{ $post->kontak}}
                                {{-- {{ $post->created_at->format('d/m/Y') }} --}}
                            </td>
                            {{-- Kontak pemohon --}}
                            <td class="px-4 py-3">
                                {{ $post->alamat}}
                            </td>
                            {{-- alamat --}}
                            <td>
                                {{ $post->tujuan}}
                            </td>
                            {{-- tujuan --}}
                           
                              {{-- permintaan_informasi --}}
                            <td class="px-4 py-3 text-sm text-center">
                                {!! $post->permintaan_informasi !!}
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->id  }}">
                                             Lihat Gambar
                                </button>
                            </td>
                            <td class="px-4 py-3 text-sm text-center">
                                
                                <form action="{{ route('tupoksi.destroy', $post->id ) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                            <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                            aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id  }}">
                                            Hapus Data
                                            
                                        </button>
                                </form>
                            </td>
                            
                            {{-- image KTP dan image ttd--}}
                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="EditModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
                                <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                                        Gambar tanda tangan & KTP (Kartu tanda penduduk) 
                                    </h5>
                                    <button type="button"
                                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body relative p-4">
                                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                            <div class="container my-12 mx-auto px-4 md:px-12">
                                                <div class="flex flex-wrap -mx-1 lg:-mx-4">
                                            
                                                    <!-- Column -->
                                                    <div class="my-1 px-1 w-1/2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                            
                                                        <!-- Article -->
                                                        <article class="overflow-hidden rounded-lg shadow-lg">
                                            
                                                            {{-- <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                                                <p class="text-center mb-5"> Kartu Tanda </p>
                                                            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                                <img class="rounded-t-lg" src="{{ url('image_ktp/' . $post->image_ktp) }}" alt=""/>
                                                            </a> --}}
                                                            <a href="#">
                                                                <img class="rounded-t-lg" src="{{ url('image_ktp/' . $post->image_ktp) }}" alt=""/>
                                                            </a>
                                            
                                                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                                <h1 class="text-lg">
                                                                    <a class="no-underline hover:underline text-black" href="#">
                                                                        {{ $post->nama }}
                                                                    </a>
                                                                </h1>
                                                                <p class="text-grey-darker text-sm">
                                                                     {{ $post->created_at->format('d/m/Y') }}
                                                                </p>
                                                            </header>
                                            
                                                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                                                  
                                                                    <p class="ml-2 text-sm">
                                                                        {{ $post->email }}
                                                                    </p>
                                                                </a>
                                                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                                                    <span class="hidden">Like</span>
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </footer>
                                            
                                                        </article>
                                                        <!-- END Article -->
                                            
                                                    </div>
                                                    <div class="my-1 px-1 w-1/2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                            
                                                        <!-- Article -->
                                                        <article class="overflow-hidden rounded-lg shadow-lg">
                                            
                                                            {{-- <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                                                <p class="text-center mb-5"> Kartu Tanda </p>
                                                            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                                <img class="rounded-t-lg" src="{{ url('image_ktp/' . $post->image_ktp) }}" alt=""/>
                                                            </a> --}}
                                                            <a href="#">
                                                                <img class="rounded-t-lg" src="{{ url('image_ttd/' . $post->image_ttd) }}" alt=""/>
                                                            </a>
                                            
                                                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                                                <h1 class="text-lg">
                                                                    <a class="no-underline hover:underline text-black" href="#">
                                                                        {{ $post->nama }}
                                                                    </a>
                                                                </h1>
                                                                <p class="text-grey-darker text-sm">
                                                                   {{ $post->created_at->format('d/m/Y') }} 
                                                                </p>
                                                            </header>
                                            
                                                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                                                <a class="flex items-center no-underline hover:underline text-black" href="#">
                                                                   
                                                                    <p class="ml-2 text-sm">
                                                                    {{ $post->email }}
                                                                    </p>
                                                                </a>
                                                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                                                    <span class="hidden">Like</span>
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </footer>
                                            
                                                        </article>
                                                        <!-- END Article -->
                                            
                                                    </div>
                                                 
                                            
                                                </div>
                                            </div>
                                            {{-- <div class="p-6 bg-white border-b border-gray-200">
                                                <div class="flex justify-center">
                                               
                                                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                                        <p class="text-center mb-5"> Kartu Tanda Penduduk :</p>
                                                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                        <img class="rounded-t-lg" src="{{ url('image_ktp/' . $post->image_ktp) }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="flex justify-center mx-5">
                                                  
                                                    <div class="rounded-lg shadow-lg bg-white max-w-sm ">
                                                        <p class="text-center mb-5"> Tanda Tangan :</p>
                                                    <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                                        <img class="rounded-t-lg" src="{{ url('image_ttd/' . $post->image_ttd) }}" alt=""/>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            
                        </tr>
                    @endforeach
                
                
                </tbody>
            </table>
         </div>
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
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
    </script>
        
        <script>
        
        </script>

@endsection


