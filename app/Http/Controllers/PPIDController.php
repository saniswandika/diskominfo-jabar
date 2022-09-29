<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\models\Mohon;
use App\Models\Permohonan;
use App\models\post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PPIDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PPID = Mohon::all();
        // dd($PPID);
        // return view('admin.charts',compact('count','posts','categories','data'));
        return view('halaman_depan.permohonan',compact('PPID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'nama' => 'required',
                'No_Ktp' => 'required',
                'kontak' => 'required',
                'alamat' => 'required',
                'permintaan_informasi' => 'required',
                'tujuan' => 'required',
                'image_ktp' => 'required|image_ktp|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'image_ttd' => 'required',
        ]);
        // $input['mata_kuliah '] = $request->input('mata_kuliah ');
        
        
        
            $uploadPath_ktp = public_path('upload_ktp');

            if (!File::isDirectory($uploadPath_ktp)) {
                File::makeDirectory($uploadPath_ktp, 0755, true, true);
            }

            $file = $request->file('image_ktp');
            $explode_ktp = explode('.', $file->getClientOriginalName());
            $originalName_ktp = $explode_ktp[0];
            $extension_ktp = $file->getClientOriginalExtension();
            $rename_ktp = 'file_' . date('YmdHis') . '.' . $extension_ktp;
            $mime_ktp = $file->getClientMimeType();
            $filesize_ktp = $file->getSize();

            //tanda tangan

            $uploadPathttd = public_path('upload_ttd');
            
            if (!File::isDirectory($uploadPathttd)) {
                File::makeDirectory($uploadPathttd, 0755, true, true);
            }

            $file = $request->file('image_ttd');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            
            
            // $dosen =  $request->nama_pembimbing;

            if ($file->move($uploadPath_ktp, $rename_ktp) && $file->move($uploadPathttd, $rename) ) {
                $post = new Mohon;
                $post->name_ktp = $originalName_ktp;
                $post->image_ktp = $rename_ktp;
                $post->extension_ktp = $extension_ktp;
                $post->size_ktp = $filesize_ktp;
                $post->mime_ktp = $mime_ktp;
                $post->name_ttd = $originalName;
                $post->image_ttd = $rename;
                $post->extension_ttd = $extension;
                $post->size_ttd = $filesize;
                $post->mime_ttd = $mime;
                $post->No_Ktp = $request->No_Ktp;
                $post->kontak = $request->kontak;
                $post->alamat = $request->alamat;
                $post->permintaan_informasi = $request->permintaan_informasi;
                $post-> tujuan = $request-> tujuan;
                // dd($post);
                $post->save();
            }
             
            return redirect()->back()->with('success', 'your message,here');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
