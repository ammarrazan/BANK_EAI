<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ObjWisataModel;
use Illuminate\Support\Facades\Http;
class ObjWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://pajakobjekwisata.onrender.com/wisata');
        $data = $response->json();
        $idWisata = array_column($data, 'id_wisata');

        return $idWisata;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mendapatkan tanggal saat ini sebagai active_date
        $activeDate = Carbon::now()->toDateString();

        // Menambahkan 4 tahun ke active_date untuk mendapatkan expired_date
        $expiredDate = Carbon::now()->addYears(4)->toDateString();
        $data = ObjWisataModel::create([
            'id' => $request->id,
            'id_wisata' => $request->id_wisata,
            'nama_objek' => $request->nama_objek,
            'harga_tiket' => $request->harga_tiket,
            'saldo' => $request->saldo,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
