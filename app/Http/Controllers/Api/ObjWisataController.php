<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ObjWisataModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
class ObjWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = ObjWisataModel::paginate(5);
        if ($response->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Objek Wisata',
                    'data' => $response,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Not Exist',
                ],
                404,
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_wisata' => 'required|min:3',
            'nama_objek' => 'required|min:3',
            'harga_tiket' => 'required|min:3',
            'saldo' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (ObjWisataModel::where('id_wisata', $request->id_wisata)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Already Exist',
                ],
                409,
            );
        }

        $activeDate = Carbon::now()->toDateString();
        $expiredDate = Carbon::now()->addYears(4)->toDateString();

        $idPrefix = 2021403;
        $idRandom = $idPrefix . rand(100, 999);

        $data = ObjWisataModel::create([
            'id' => $idRandom,
            'id_wisata' => $request->id_wisata,
            'nama_objek' => $request->nama_objek,
            'harga_tiket' => $request->harga_tiket,
            'saldo' => $request->saldo,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);

        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Objek Wisata Created',
                    'data' => $data,
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Not Created',
                ],
                500,
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ObjWisataModel::where('id', $id)
            ->orWhere('id_wisata', 'like', '%' . $id . '%')
            ->orWhere('nama_objek', 'like', '%' . $id . '%')
            ->get();

        if ($data->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Objek Wisata',
                    'data' => $data,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Not Exist',
                ],
                404,
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'id_wisata' => 'required|min:3',
            'nama_objek' => 'required|min:3',
            'harga_tiket' => 'required|min:3',
            'saldo' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = ObjWisataModel::find($id);
        $data->id_wisata = $request->id_wisata;
        $data->nama_objek = $request->nama_objek;
        $data->harga_tiket = $request->harga_tiket;
        $data->saldo = $request->saldo;
        $data->save();

        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Objek Wisata Updated',
                    'data' => $data,
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Not Updated',
                ],
                500,
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = ObjWisataModel::where('id', $id)->delete();
        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Objek Wisata Deleted',
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Objek Wisata Not Deleted',
                ],
                500,
            );
        }
    }

    public function getFetch(){
        try {
            $response = Http::get('https://pajakobjekwisata.onrender.com/wisata');
    
            if ($response->successful()) {
                // Decode the JSON response to a PHP array
                $data = $response->json();
                $extractedData = [];
                if (is_array($data) && !empty($data)) {
                    foreach ($data as $item) {
                        if (is_array($item) && isset($item['id_wisata'], $item['nama_objek'], $item['harga_tiket'])) {
                            $extractedData[] = [
                                'id_wisata' => $item['id_wisata'],
                                'nama_objek' => $item['nama_objek'],
                                'harga_tiket' => $item['harga_tiket']
                            ];
                        }
                    }
                } else {
                    return ['error' => 'Unexpected data structure or empty response.'];
                }
                if (empty($extractedData)) {
                    return ['error' => 'No matching data found.'];
                }
    
                return $extractedData;
            } else {
                return ['error' => 'Failed to fetch data. Status code: ' . $response->status()];
            }
        } catch (\Exception $e) {
            return ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }

    public function getFetchDetail($id){
        try {
            $response = Http::get('https://pajakobjekwisata.onrender.com/wisata/' . $id);
    
            if ($response->successful()) {
                $data = $response->json();
    
                if (is_array($data) && isset($data['id_wisata'], $data['nama_objek'], $data['harga_tiket'])) {
                    
                    $extractedData = [
                        'id_wisata' => $data['id_wisata'],
                        'nama_objek' => $data['nama_objek'],
                        'harga_tiket' => $data['harga_tiket']
                    ];
    
                    return $extractedData;
                } else {
                    return ['error' => 'Required keys not found in response.'];
                }
            } else {
                return ['error' => 'Failed to fetch data. Status code: ' . $response->status()];
            }
        } catch (\Exception $e) {
            return ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }
}
