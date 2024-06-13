<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\BiroTour;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class BiroTourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = BiroTour::paginate(5);
        if ($response->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Biro Tour',
                    'data' => $response,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Biro Tour Not Exist',
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
            'no_guider' => 'required|min:3',
            'nama_guider' => 'required|min:3',
            'fee' => 'required|min:3',
            'saldo' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (BiroTour::where('id', $request->id)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Biro Tour Already Exist',
                ],
                409,
            );
        }

        $activeDate = Carbon::now()->toDateString();
        $expiredDate = Carbon::now()->addYears(5)->toDateString();


        $data = BiroTour::create([
            'id' => $request->id,
            'no_guider' => $request->no_guider,
            'nama_guider' => $request->nama_guider,
            'fee' => $request->fee,
            'saldo' => $request->saldo,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);

        if ($data) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data Biro Tour Created',
                    'data' => $data,
                ],
                202,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data Biro Tour Not Created',
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
        $data = BiroTour::where('id', $id)
        ->orWhere('id', 'like', '%' . $id . '%')
        ->orWhere('nama_guider', 'like', '%' . $id . '%')
        ->get();

    if ($data->count() > 0) {
        return response()->json(
            [
                'status' => true,
                'message' => 'Account Data Biro Tour',
                'data' => $data,
            ],
            200,
        );
    } else {
        return response()->json(
            [
                'status' => false,
                'message' => 'Account Data Biro Tour Not Exist',
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
            'pembayaran' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = BiroTour::find($id);
        $data->saldo = $data->saldo + $request->pembayaran;
        $data->save();

        if($data){
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Pembayaran Berhasil',
                    'data' => $data,
                ],
                200,
            );
        }else{
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Pembayaran gagal',
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
        $response = BiroTour::find($id)->delete();
        if($response){
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Akun Terhapus'
                ],
                200,
            );
        }else{
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Akun Gagal Terhapus'
                ],
                500,
            );
        }
    }
    public function getFetch(){
        try {
            $response = Http::get('https://tour-guide-ks4n.onrender.com/tourguide');
    
            if ($response->successful()) {
                // Decode the JSON response to a PHP array
                $data = $response->json();
                $extractedData = [];
                if (is_array($data) && !empty($data)) {
                    foreach ($data as $item) {
                        if (is_array($item) && isset($item['id_guider'], $item['nama_guider'], $item['fee'],$item['profile'])) {
                            $extractedData[] = [
                                'id_guider' => $item['id_guider'],
                                'nama_guider' => $item['nama_guider'],
                                'fee' => $item['fee'],
                                'profile' => $item['profile']
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
            $response = Http::get('https://tour-guide-ks4n.onrender.com/tourguide/' . $id);
    
            if ($response->successful()) {
                $data = $response->json();
    
                if (is_array($data) && isset($data['id_guider'], $data['nama_guider'], $data['fee'], $data['profile'])) {
                    
                    $extractedData = [
                        'id_guider' => $data['id_guider'],
                                'nama_guider' => $data['nama_guider'],
                                'fee' => $data['fee'],
                                'profile' => $data['profile']
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
