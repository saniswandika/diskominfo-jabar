@extends('layouts.FrontPage')
@section('template')
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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
        <link type="text/css" 
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south- 
         street/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
        <style>
            .kbw-signature { width: 100%; height: 200px;}
            #sig canvas{
                width: 100% !important;
                height: auto;
            }
        </style>

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
        <div class="mt-10">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Formulir permintaan Informasi PPID </h3>
                  <p class="mt-1 text-sm text-gray-600">Dinas Komunikasi dan informatika provinsi jawa barat</p>
                </div>
              </div>
              <div class=" md:mt-0 md:col-span-2">
                    <form method="POST" action="{{ route('tupoksi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">nama</span>
                                <input type="text" name="nama"
                                    class="block w-full @error('nama') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('nama')}}" />
                            </label>
                            @error('nama')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">email</span>
                                <input type="text" name="email"
                                    class="block w-full @error('email') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('email')}}" />
                            </label>
                            @error('email')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">No_Ktp</span>
                                <input type="text" name="No_Ktp"
                                    class="block w-full @error('No_Ktp') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('No_Ktp')}}" />
                            </label>
                            @error('No_Ktp')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">kontak</span>
                                <input type="text" name="kontak"
                                    class="block w-full @error('kontak') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('kontak')}}" />
                            </label>
                            @error('kontak')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">alamat</span>
                                <input type="text" name="alamat"
                                    class="block w-full @error('alamat') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('alamat')}}" />
                            </label>
                            @error('alamat')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">permintaan</span>
                                <textarea class="description" name="permintaan_informasi"></textarea>
                            </label>
                            @error('permintaan_informasi')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">tujuan</span>
                                <input type="text" name="tujuan"
                                    class="block w-full @error('tujuan') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('tujuan')}}" />
                            </label>
                            @error('tujuan')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple="" name="image_ktp">
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple="" name="image_ttd">


                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5 mt-10">Submit</button>
                    </form>
              </div>
            </div>
        </div>
       
          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>
          <div
          class="text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <span class="flex justify-center col-span-5 px-10 py-10">
              {{-- {{ $posts->links('pagination::tailwind') }}  --}}
          </span>
          </div>
          
          </div>
        <div>


            
          
            
    </section>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" 
        src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> 
        </script>
        <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"> 
        </script>
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
            $('#clear').click(function(e) {
                e.preventDefault();
                sig.signature('clear');
                $("#signature64").val('');
            });
        </script>
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


