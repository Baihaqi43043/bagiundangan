<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Mscustomer;
use Exception;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MscustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mscustomer::all();
        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(200, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'customerNama' => 'required',
            'customerAlamat' => 'required',
            'customerEmail' => 'required',
            'customerPhone' => 'required',

        ]);

        try {
            $reponse = Mscustomer::create($validasi);
            return response()->json([
                'success' => 200,
                'messege' => 'success',
                'data' => $reponse
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'messege' => 'Err',
                'eror' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mscustomer::where('customerID', '=', $id)->get();
        if (empty($data)) {
            return ApiFormatter::createApi(200, 'Failed');
        } else {
            return ApiFormatter::createApi(200, 'success', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'customerNama' => 'required',
            'customerAlamat' => 'required',
            'customerEmail' => 'required',
            'customerPhone' => 'required',

        ]);

        try {
            $reponse = Mscustomer::find($id);
            $reponse->update($validasi);
            return response()->json([
                'success' => 200,
                'messege' => 'success',
                'data' => $reponse
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'messege' => 'Err',
                'eror' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        return response()->json([
            'messege' => 'halo gan'
        ]);
        // $customer = Mscustomer::findOrFail($id);
        // try {
        //     $customer->delete();
        //     return response()->json([
        //         'success' => 200,
        //         'messege' => 'success',
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'messege' => 'Err',
        //         'eror' => $e->getMessage()
        //     ]);
        // }
    }
}