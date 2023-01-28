<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CekBansos;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        $user = Penduduk::with('user')->get();
        $data = CekBansos::with('penduduk.user')->get();
        return view('backend.penyaluran.index', compact('user', 'data'));
    }

    public function store(Request $request)
    {
        CekBansos::create([
            'penduduk_id' => $request->penduduk_id,
            'tahapan' => $request->tahapan,
            'status' => $request->status,
            'alasan' => $request->alasan
        ]);

        return redirect()->route('admin.penyaluran.index')->with('success', 'Penyaluran Berhasil di Tambahkan');
    }

    public function destroy($id)
    {
        $data = CekBansos::find($id);
        $data->delete();
        return redirect()->route('admin.penyaluran.index')->with('success', 'Data penyaluran berhasil dihapus');
    }
}
