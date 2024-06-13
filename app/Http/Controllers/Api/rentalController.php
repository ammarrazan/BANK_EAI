<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RentalMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class rentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = RentalMobil::paginate(5);
        if ($response->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'data pembayaran customer rental mobil',
                    'data' => $response,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'messsage' => 'data not found',
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
            'id' => 'required|min:3',
            'IDpembayaran' => 'required|min:3',
            'IDPenyewaan' => 'required|min:3',
            'jenisKartuKredit' => '',
            'nominal' => 'required|min:3',
            'tanggalPembayaran' => 'required|min:3',
            'statusPembayaran' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (RentalMobil::where('id', $request->id)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Already Exist',
                ],
                409,
            );
        }
        $data = RentalMobil::create([
            'id' => $request->id,
            'IDpembayaran' => $request->IDembayaran,
            'IDPenyewaan' => $request->IDpenyewaan,
            'jenisKartuKredit' => $request->jenisKartuKredit,
            'nominal' => $request->nominal,
            'tanggalPembayaran' => $request->tanggalPembayaran,
            'statusPembayaran' => $request->statusPembayaran,
        ]);
        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Data Created',
                    'data' => $data,
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data is Not Created',
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
        $data = RentalMobil::where('id', $id)
            ->orWhere('IDpembayaran', 'like', '%' . $id . '%')
            ->get();

        if ($data->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'data pembayaran customer rental mobil',
                    'data' => $data,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'data not found',
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
            'nominal' => 'required',
            'statusPembayaran'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $data = RentalMobil::find($id);
        $data->nominal = $request->nominal;
        $data->statusPembayaran=$request->statusPembayaran;
        $data->save();

        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Data Updated',
                    'data' => $data,
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Not Updated',
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
        $data = RentalMobil::where('id', $id)->delete();
        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Data Deleted',
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Not Deleted',
                ],
                500,
            );
        }
    }
    public function getFetch(){
        try {
            $response = Http::get('https://rental-mobil-api.onrender.com/pembayaran');
    
            if ($response->successful()) {
                // Decode the JSON response to a PHP array
                $data = $response->json();
                $extractedData = [];
                if (is_array($data) && !empty($data)) {
                    foreach ($data as $item) {
                        if (is_array($item) && isset($item['id_pembayaran'], $item['tanggal_pembayaran'],$item['jumlah_pembayaran'])) {
                            $extractedData[] = [
                                'id_pembayaran' => $item['id_pembayaran'],
                                'tanggal_pembayaran' => $item['tanggal_pembayaran'],
                                'jumlah_pembayaran'=>$item['jumlah_pembayaran']
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
            $response = Http::get('https://rental-mobil-api.onrender.com/pembayaran'. $id);
    
            if ($response->successful()) {
                // Decode the JSON response to a PHP array
                $data = $response->json();
                $extractedData = [];
                if (is_array($data) && !empty($data)) {
                    foreach ($data as $item) {
                        if (is_array($item) && isset($item['id_pembayaran'], $item['tanggal_pembayaran'],$item['jumlah_pembayaran'])) {
                            $extractedData[] = [
                                'id_pembayaran' => $item['id_pembayaran'],
                                'tanggal_pembayaran' => $item['tanggal_pembayaran'],
                                'jumlah_pembayaran'=>$item['jumlah_pembayaran']
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
}
