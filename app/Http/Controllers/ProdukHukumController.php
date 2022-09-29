<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Validator;

class ProdukHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produk');
        
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
            'file_produk_hukum' => 'required|mimes:pdf',
            'judul' => 'required',
            'tanggal_arsip' => 'required|date',
            'publisher' => 'required',
        ]);
        $input['mata_kuliah '] = $request->input('mata_kuliah ');


        if ($request->all()) {
            $uploadPath = public_path('uploads');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('file_produk_hukum');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            
            // $dosen =  $request->nama_pembimbing;

            if ($file->move($uploadPath, $rename)) {
                $post = new ProdukHukum;
                $post->name = $originalName;
                $post->file_produk_hukum = $rename;
                $post->extension = $extension;
                $post->size = $filesize;
                $post->mime = $mime;
                $post->judul = $request->judul;
                $post->tanggal_arsip = $request->tanggal_arsip;
                $post->publisher = $request->publisher;
                $post->save();
            }
   
            return redirect()->back()->with('success', 'your message,here');

            //     $file = $request->file;

            //     $request->validate([
            //         'file_produk_hukum' => 'required|mimes:pdf',
            //         'judul' => 'required',
            //         'tanggal_arsip' => 'required|date',
            //         'publisher' => 'required',
            //     ]);
            //     // dd($request);
            //     // use of pdf parser to read content from pdf 
            //     $fileName = $file->getClientOriginalName();

            //     $pdfParser = new Permohonan();
            //     $pdf = $pdfParser->parseFile($file->path());
            //     $content = $pdf->getText();

            //    $upload_file = new Permohonan();
            //    $upload_file->orig_filename = $fileName;
            //    $upload_file->mime_type = $file->getMimeType();
            //    $upload_file->filesize = $file->getSize();
            //    $upload_file->content = $content;
            //    $upload_file->judul = $request->judul;
            //    $upload_file->tanggal_arsip = $request->tanggal_arsip;
            //    $upload_file->publisher = $request->publisher;
            //    $upload_file->save();
            //    return redirect()->back()->with('success', 'File  submitted');
                // $validatedData = $request->validate([
                //     'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
                //     'judul' => 'required',
                //     'tanggal_arsip' => 'required|date',
                //     'publisher' => 'required',
                // ]);
            
                //    $name = $request->file('file')->getClientOriginalName();
            
                //    $file_produk_hukum = $request->file('file')->store('public/files');
            
            
                //    $save = new ProdukHukum();

                //    $save->name = $request->name;
                //    $save->judul = $request->judul;
                //    $save->tanggal_arsip = $request->tanggal_arsip;
                //    $save->publisher = $request->publisher;
                //    $save->file_produk_hukum = $file_produk_hukum;
            
                //    return redirect('file-produk-hukum')->with('status', 'File Has been uploaded successfully in laravel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukHukum $produkHukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdukHukum $produkHukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdukHukum $produkHukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdukHukum $produkHukum)
    {
        //
    }
}
