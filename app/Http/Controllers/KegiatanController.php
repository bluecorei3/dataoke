<?php

namespace App\Http\Controllers;
use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kegiatan=Kegiatan::paginate(10);
      return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kegiatan=Kegiatan::paginate(10);
      return view('admin.kegiatan.create', compact('kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this -> validate($request, [
        'judul_kegiatan' => 'required',
        'content_kegiatan' => 'required',
        'gambar_kegiatan' => 'required',
      ]);

      $gambar_kegiatan = $request->gambar_kegiatan;
      $new_gambar_kegiatan = time().$gambar_kegiatan->getClientOriginalName();

      $kegiatan = Kegiatan::create([
        'judul_kegiatan' => $request->judul_kegiatan,
        'content_kegiatan' => $request->content_kegiatan,
        'gambar_kegiatan' => 'public/uploads/kegiatan/'.$new_gambar_kegiatan
      ]);


      $gambar_kegiatan->move('public/uploads/kegiatan/', $new_gambar_kegiatan);
      return redirect()->back()->with('success','kegiatan berhasil di upload');
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
      $kegiatan = Kegiatan::findorfail($id);
      return view('admin.kegiatan.edit', compact('kegiatan'));

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
      $this -> validate($request, [
        'judul_kegiatan' => 'required',
        'content_kegiatan' => 'required'
      ]);

        $kegiatan = Kegiatan::findorfail($id);

        if ($request->has('gambar_kegiatan')) {
          $gambar_kegiatan = $request->gambar_kegiatan;
          $new_gambar_kegiatan = time().$gambar_kegiatan->getClientOriginalName();
          $gambar_kegiatan->move('public/uploads/kegiatan', $new_gambar_kegiatan);

          $kegiatan_data = [
            'judul_kegiatan' => $request->judul_kegiatan,
            'content_kegiatan' => $request->content_kegiatan,
            'gambar_kegiatan' => 'public/uploads/kegiatan/'.$new_gambar_kegiatan
          ];
        }
        else{
          $kegiatan_data = [
            'judul_kegiatan' => $request->judul_kegiatan,
            'content_kegiatan' => $request->content_kegiatan
          ];
        }

      $kegiatan->update($kegiatan_data);
      return redirect()->route('kegiatan.index')->with('success','kegiatan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kegiatan = Kegiatan::findorfail($id);
      $kegiatan->delete();
      return redirect()->back();with('success','data berhasil dihapus');
    }
}
