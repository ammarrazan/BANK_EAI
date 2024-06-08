<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\asuransi;
use Carbon\Carbon;
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
            'jenis_nasabah'=>'required|min:3',
            'jenis_tabungan'=>'required|min:3',
            'kategori'=>'required|min:3',
            'jumlah'=>'required|min:3',
            'active_date'=>'required|min:3',
            'expired'=>'required|min:3',
            'saldo'=>'required|min:3',
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
            'jenis_nasabah'=>$request->jenis_nasabah,
            'jenis_tabungan'=>$request->jenis_tabungan,
            'kategori'=>$request->kategori,
            'jumlah'=>$request->jumlah,
            'active_date'=>$request->active_date,
            'expired'=>$request->expired,
            'saldo'=>$request->saldo,
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
            'saldo'=>'required',
            'tagihan'=>'required'

        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $data=asuransi::find($id);
        $data->saldo=$request->saldo;
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
}
