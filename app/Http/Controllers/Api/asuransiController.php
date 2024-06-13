<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\asuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class asuransiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response=asuransi::paginate(5);
        if($response->count()>0){
            return response()->json([
                'status'=> true,
                'message'=>'data pembayaran claim asuransi',
                'data'=>$response,
            ],
            200,
            );
        }else{
            return response()->json([
                'status'=>false,
                'messsage'=>'data not found'

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
        $validator=Validator::make($request->all(), [
            'id'=>'required|min:3',
            'rekening'=>'required|min:3',
            'nama'=>'required|min:3',
            'kategori'=>'required|min:3',
            'jumlah'=>'required|min:3',
            'tagihan'=>'required|min:3'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if (asuransi::where('id', $request->id)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Already Exist',
                ],
                409,
            );
        }
        $data = asuransi::create([
            'id'=>$request->id,
            'rekening'=>$request->rekening,
            'nama'=>$request->nama,
            'kategori'=>$request->kategori,
            'jumlah'=>$request->jumlah,
            'tagihan'=>$request->tagihan,
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
        $data=asuransi::where('id',$id)
        ->orWhere('nama','like','%'.$id.'%')
        ->get();

        if ($data->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'data pembayaran claim asuransi',
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
            'tagihan'=>'required'

        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $data=asuransi::find($id);
        $data->tagihan=$request->tagihan;
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
        $data = asuransi::where('id', $id)->delete();
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

    // public function getFetch(){
    //     try {
    //         $response = Http::get('https://eai-fastapi.onrender.com/bank');
    
    //         if ($response->successful()) {
    //             // Decode the JSON response to a PHP array
    //             $data = $response->json();
    //             $extractedData = [];
    //             if (is_array($data) && !empty($data)) {
    //                 foreach ($data as $item) {
    //                     if (is_array($item) && isset($item[], $item[], $item[])) {
    //                         $extractedData[] = [
    //                             'id_wis' => $item['id_wisata'],
    //                             'nama_objek' => $item['nama_objek'],
    //                             'harga_tiket' => $item['harga_tiket']
    //                         ];
    //                     }
    //                 }
    //             } else {
    //                 return ['error' => 'Unexpected data structure or empty response.'];
    //             }
    //             if (empty($extractedData)) {
    //                 return ['error' => 'No matching data found.'];
    //             }
    
    //             return $extractedData;
    //         } else {
    //             return ['error' => 'Failed to fetch data. Status code: ' . $response->status()];
    //         }
    //     } catch (\Exception $e) {
    //         return ['error' => 'An error occurred: ' . $e->getMessage()];
    //     }
    // }

    // public function getFetchDetail($id){
    //     try {
    //         $response = Http::get('https://eai-fastapi.onrender.com/bank' . $id);
    
    //         if ($response->successful()) {
    //             $data = $response->json();
    
    //             if (is_array($data) && isset($data['id_wisata'], $data['nama_objek'], $data['harga_tiket'])) {
                    
    //                 $extractedData = [
    //                     // 'id_wisata' => $data['id_wisata'],
    //                     // 'nama_objek' => $data['nama_objek'],
    //                     // 'harga_tiket' => $data['harga_tiket']
    //                 ];
    
    //                 return $extractedData;
    //             } else {
    //                 return ['error' => 'Required keys not found in response.'];
    //             }
    //         } else {
    //             return ['error' => 'Failed to fetch data. Status code: ' . $response->status()];
    //         }
    //     } catch (\Exception $e) {
    //         return ['error' => 'An error occurred: ' . $e->getMessage()];
    //     }
    // }
}
