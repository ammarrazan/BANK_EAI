<?php

namespace App\Http\Controllers;

use App\Models\JenisNasabah;
use App\Models\JenisPembayaran;
use App\Models\JenisTabungan;
use App\Models\KartuKredit;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        return view('provider.index');
    }
    // ==================JENIS NASABAH================
    // Ambil Semua Jenis Nasabah
    public function getAllJenisNasabah()
    {
        $data = JenisNasabah::all();
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Nasabah not found',
                ],
                404,
            );
        }
        return response()->json($data);
    }

    // Detail Jenis Nasabah
    public function getJenisNasabah($id)
    {
        $data = JenisNasabah::find($id);
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Nasabah not found',
                ],
                404,
            );
        }
        return response()->json([
            'Message' => 'Success get data Jenis Nasabah',
            'Data' => $data,
        ]);
    }

    // ==================JENIS PEMBAYARAN================

    // Ambil Semua Jenis Pembayaran
    public function getAllJenisPembayaran()
    {
        $data = JenisPembayaran::all();
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Pembayaran not found',
                ],
                404,
            );
        }
        return response()->json($data);
    }

    // Detail Jenis Pembayaran
    public function getJenisPembayaran($id)
    {
        $data = JenisPembayaran::find($id);
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Pembayaran not found',
                ],
                404,
            );
        }
        return response()->json([
            'Message' => 'Success get data Jenis Pembayaran',
            'Data' => $data,
        ]);
    }

    // ==================JENIS TABUNGAN================

    // Ambil Semua Jenis Tabungan
    public function getAllJenisTabungan()
    {
        $data = JenisTabungan::all();
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Tabungan not found',
                ],
                404,
            );
        }
        return response()->json($data);
    }

    // Detail Jenis Tabungan
    public function getJenisTabungan($id)
    {
        $data = JenisTabungan::find($id);
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Tabungan not found',
                ],
                404,
            );
        }
        return response()->json([
            'Message' => 'Success get data Jenis Tabungan',
            'Data' => $data,
        ]);
    }

    // ==================JENIS KARTU KREDIT================

    // Ambil Semua Jenis Kartu Kredit
    public function getAllJenisKartuKredit()
    {
        $data = KartuKredit::all();
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Kartu Kredit not found',
                ],
                404,
            );
        }
        return response()->json($data);
    }

    // Detail Jenis Kartu  Kredit
    public function getJenisKartuKredit($id)
    {
        $data = KartuKredit::find($id);
        if (!$data) {
            return response()->json(
                [
                    'Message' => 'Data Jenis Kartu Kredit not found',
                ],
                404,
            );
        }
        return response()->json([
            'Message' => 'Success get data Jenis Kartu Kredit',
            'Data' => $data,
        ]);
    }
}
