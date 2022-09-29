<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Category;
use App\models\Mohon;
use App\models\User;
use App\models\post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class tupoksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(10);
        $berita->setCollection($berita->sortByDesc('created_at'));
        return view('halaman_depan.tupoksi',compact('posts','user','berita'));
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
                    'email' => 'required',
                    'No_Ktp' => 'required',
                    'kontak' => 'required',
                    'alamat' => 'required',
                    'permintaan_informasi' => 'required',
                    'tujuan' => 'required',
                    'image_ktp' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf',
                    'image_ttd' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            ], 
            [ 
                'nama.required'=> 'nama harus di isi'
                
             ]);
            //  dd($request);
            
            if ($request->all()) {
                $uploadPath = public_path('image_ktp');
               
               
                //buat foto gambar 
                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true, true);
                }

                $file = $request->file('image_ktp');
                $explode = explode('.', $file->getClientOriginalName());
                $originalName = $explode[0];
                $extension = $file->getClientOriginalExtension();
                $rename = 'file_' . date('YmdHis') . '.' . $extension;
                $mime = $file->getClientMimeType();
                $filesize = $file->getSize();
                $uploadPath = public_path('image_ktp');
              
                $moveKtp = $file->move($uploadPath, $rename);
                
                // ini tanda tangan
                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0755, true, true);
                }

                $file = $request->file('image_ttd');
                $explode_ttd = explode('.', $file->getClientOriginalName());
                $originalName_ttd = $explode_ttd[0];
                $extension_ttd = $file->getClientOriginalExtension();
                $rename_ttd = 'file_' . date('YmdHis') . '.' . $extension_ttd;
                $mime_ttd = $file->getClientMimeType();
                $filesize_ttd = $file->getSize();
                $uploadPath= public_path('image_ttd');
                
                $moveTtd = $file->move($uploadPath, $rename);
                // $dosen =  $request->nama_pembimbing;

                if ($moveKtp && $moveTtd) {
                    $post = new mohon;
                    $post->name_ktp = $originalName;
                    $post->image_ktp = $rename;
                    $post->extension_ktp = $extension;
                    $post->size_ktp = $filesize;
                    $post->mime_ktp = $mime;
                    $post->name_ttd = $originalName_ttd;
                    $post->image_ttd = $rename_ttd;
                    $post->extension_ttd = $extension_ttd;
                    $post->size_ttd = $filesize_ttd;
                    $post->mime_ttd = $mime_ttd;
                    $post->nama = $request->nama;
                    $post->No_Ktp = $request->No_Ktp;
                    $post->kontak = $request->kontak;
                    $post->alamat = $request->alamat;
                    $post->email = $request->email;
                    $post->permintaan_informasi = $request->permintaan_informasi;
                    $post-> tujuan = $request-> tujuan;
                    $post->save();

                    
                }
               
                return redirect()->back()->with('success', 'your message,here');
            
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        post::find($id)->increment('views');
        $syarat = post::find($id);
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(10);
        $berita->setCollection($berita->sortByDesc('created_at'));
        return view('halaman_depan.tupoksi',compact('posts','user','syarat','berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        DB::table('mohons')->where('id', $id)->delete();
        return back()->with('success', 'Succesfully Added');
    }
}
