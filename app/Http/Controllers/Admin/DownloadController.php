<?php

namespace App\Http\Controllers\Admin;

use App\Models\Download;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:downloads.index|downloads.create|downloads.edit|downloads.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::latest()->when(request()->q, function ($downloads) {
            $downloads = $downloads->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.download.index', compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'file' => 'required|file|mimes:pdf,docx,xlsx,doc,zip|max:2048',
        ]);

        //upload image
        $file = $request->file('file');
        $file->storeAs('public/files', $file->hashName());

        $download = Download::create([
            'file' => $file->hashName(),
            'nama' => $request->input('nama')
        ]);

        if ($download) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.admin-download.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.admin-download.index')->with(['error' => 'Data Gagal Disimpan!']);
        }





        // $request->validate([
        //     'nama'=>'required',
        //     'file' => 'required|file|mimes:pdf,docx,xlsx,doc,zip|max:200048',
        // ]);

        // $input = $request->all();

        // if ($file = $request->file('file')) {
        //     $destinationPath = 'public/download-files';
        //     $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
        //     $file->move($destinationPath, $profileFile);
        //     $input['file'] = "$profileFile";
        // }

        // Download::create($input);

        // if($input){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('admin.admin-download.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('admin.admin-download.index')->with(['error' => 'Data Gagal Disimpan!']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        return view('admin.download.show', compact('download'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        return view('admin.download.edit', compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'public/download-files/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['file'] = "$profileFile";
        } else {
            unset($input['file']);
        }

        $file->update($input);

        if ($file) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.admin-download.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.admin-download.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Download::findOrFail($id);
        $file = Storage::disk('local')->delete('public/download-files/' . $download->file);
        $download->delete();

        if ($download) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
