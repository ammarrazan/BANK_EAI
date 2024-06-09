<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response=hotel::paginate(5);
        if($response->count()>0){
            return response()->json([
                'status'=> true,
                'message'=>'data pembayaran customer hotel',
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
            'jenis'=>'required|min:3',
            'name'=>'required|min:3',
            'total'=>'required|min:3',
            'saldo'=>'required|min:3'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if (hotel::where('id', $request->id)->exists()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Data Already Exist',
                ],
                409,
            );
        }
        $data = hotel::create([
            'id'=>$request->id,
            'jenis'=>$request->jenis,
            'name'=>$request->name,
            'total'=>$request->total,
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

        $data=hotel::where('id',$id)
        ->orWhere('name','like','%'.$id.'%')
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
            'jenis'=>'required|min:3',
            'name'=>'required|min:3',
            'total'=>'required',
            'saldo'=>'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $data=hotel::find($id);
        $data->jenis=$request->jenis;
        $data->name=$request->name;
        $data->total=$request->total;
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
        $data = hotel::where('id', $id)->delete();
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