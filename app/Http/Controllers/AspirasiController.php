<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id');
        $kategori = Kategori::all();
        $id = abs($noUrut + 1);
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'aspirasi' => $aspirasi->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,

        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id_pelaporan' => 'required',
            'nis' => 'required',
            'lokasi' => 'required',
            'id_kategori' => 'required',
            'ket' => 'required',
            'bukti' => 'required|image|file|max:1024',
        ]);
        $data = Siswa::all()->where('nis', $request->nis)->count();
        if ($data > 0) {
            if ($request->file('bukti')) {
                $validate['bukti'] = $request->file('bukti')->store('bukti-foto');
            }
            Input_aspirasi::create($validate);
            Aspirasi::create([
                'id' => $request->id_pelaporan,
                'id_aspirasi' => $request->id_pelaporan,
                'id_kategori' => $request->id_kategori,
            ]);
            return Redirect("/?id=$request->id_pelaporan");
        } else {
            return Redirect("/?nis=$request->nis");
        }
    }
    public function feedback(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
            ->update(['feedback' => $request->feedback]);
        return redirect('/#aspirasi');
    }
}
