<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RentalMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class rentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response=RentalMobil::paginate(5);
        if($response->count()>0){
            return response()->json([
                'status'=> true,
                'message'=>'data pembayaran customer rental mobil',
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
        $validator=Validator::make($request->all(),[
            'id'=>'required|min:3',
            'rekening'=>'required|min:3',
            'jenisKartuKredit'=>"",
            'jenisTabungan'=>'required|min:3',
            'nominal'=>'required|min:3',
            'nama'=>'required|min:3',
            'saldo'=>'required'
        ]);
        if ($validator->fails()){
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
            'id'=>$request->id,
            'rekening'=>$request->rekening,
            'jenisKartuKredit'=>$request->jenisKartuKredit,
            'janisTabungan'=>$request->jenisTabungan,
            'nominal'=>$request->nominal,
            'nama'=>$request->nama,
            'saldo'=>$request->saldo
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
        $data=RentalMobil::where('id',$id)
        ->orWhere('nama','like','%'.$id.'%')
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
            'rekening'=>'required|min:3',
            'jenisTabungan'=>'required|min:3',
            'nominal'=>'required|min:3',
            'nama'=>'required|min:3',
            'saldo'=>'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $data=RentalMobil::find($id);
        $data->rekening=$request->rekening;
        $data->jenisTabungan=$request->jenisTabungan;
        $data->nominal=$request->nominal;
        $data->nama=$request->nama;
        $data->saldo=$request->saldo;
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
        $data=RentalMobil::where('id',$id)
        ->orWhere('name','like','%'.$id.'%')
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
}
