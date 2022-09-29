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
          <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Tampilan Postingan Produk Hukum
        </h4>
    
    <div class=" md:mt-10 md:col-span-2">
        
        <form method="POST" action="{{ route('admin.produk-hukum.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">judul</span>
                    <input type="text" name="judul"
                        class="block w-full @error('judul') border-red-500 @enderror mt-1 rounded-md"
                        placeholder="" value="{{old('judul')}}" />
                </label>
                @error('judul')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">tanggal_arsip</span>
                    <input type="date" name="tanggal_arsip"
                        class="block w-full @error('tanggal_arsip') border-red-500 @enderror mt-1 rounded-md"
                        placeholder="" value="{{old('tanggal_arsip')}}" />
                </label>
                @error('tanggal_arsip')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">publisher</span>
                    <input type="text" name="publisher"
                        class="block w-full @error('publisher') border-red-500 @enderror mt-1 rounded-md"
                        placeholder="" value="{{old('publisher')}}" />
                </label>
                @error('publisher')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
          
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700 mb-10">upload produk hukum</span>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple="" name="file_produk_hukum">
                </label>
                @error('publisher')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-600  rounded text-sm px-5 py-2.5 mt-10">Submit</button>
        </form>
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


