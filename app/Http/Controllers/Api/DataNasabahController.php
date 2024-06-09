<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\data_nasabah_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataNasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = data_nasabah_model::paginate(5);
        if ($response->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Account Data nasabah telah dibuat',
                    'data' => $response,
                ],
                200,
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Account Data =nasabah tidak ada',
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
            'nama'=>'required|min:3',
            'norekening'=>'required|min:3',
            'jenistabungan'=>'required|min:3',
            'activatedDate'=>'required|min:3',
            'expiredDate'=>'min:3',
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if (data_nasabah_model::where('id', $request->id)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Already Exist',
                ],
                409,
            );
        }
        $data = data_nasabah_model::create([
            'id'=>$request->id,
            'nama'=>$request->nama,
            'norekening'=>$request->norekening,
            'jenistabungan'=>$request->jenistabungan,
            'activatedDate'=>$request->activatedDate,
            'expiredDate'=>$request->expiredDate,

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
        $data=data_nasabah_model::where('id',$id)
        ->orWhere('nama','like','%'.$id.'%')
        ->get();

        if ($data->count() > 0) {
            return response()->json(
                [
                    'status' => true,
                    'message' => 'data pembayaran customer hotel',
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
            'id'=>'required|min:3',
            'nama'=>'required|min:3',
            'norekening'=>'required|min:3',
            'jenistabungan'=>'required|min:3',
            'activatedDate'=>'required|min:3',
            'expiredDate'=>'min:3',
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $data=data_nasabah_model::find($id);
        $data->id=$request->id;
        $data->nama=$request->nama;
        $data->norekening=$request->norekening;
        $data->jenistabungan=$request->jenistabungan;
        $data->activatedDate=$request->activatedDate;
        $data->expiredDate=$request->expiredDate;
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
        $data = data_nasabah_model::where('id', $id)->delete();
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
