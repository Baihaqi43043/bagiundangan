<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Mscustomer;
use Exception;
use Illuminate\Http\Request;

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
        try {
            $request->validate([
                'name' => 'require',
                'alamat' => 'require',
                'email' => 'require',
                'phone' => 'require'
            ]);
            $customer = Mscustomer::create([
                'customerNama' => $request->name,
                'customerAlamat' => $request->alamat,
                'customerEmail' => $request->email,
                'customerPhone' => $request->phone,
            ]);
            if ($customer) {
                return ApiFormatter::createApi(200, 'success', $customer);
            } else {
                return ApiFormatter::createApi(200, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(200, 'Failed');
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
        try {
            $request->validate([
                'name' => 'require',
                'alamat' => 'require',
                'email' => 'require',
                'phone' => 'require'
            ]);
            $customer = Mscustomer::where('customerID', $id)->get();
            $customer->update([
                'customerNama' => $request->name,
                'customerAlamat' => $request->alamat,
                'customerEmail' => $request->email,
                'customerPhone' => $request->phone,
            ]);
            if ($customer) {
                return ApiFormatter::createApi(200, 'success', $customer);
            } else {
                return ApiFormatter::createApi(200, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(200, 'Failed');
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
        //
    }
}