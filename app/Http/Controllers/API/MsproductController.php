<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Msproduk;
use Illuminate\Http\Request;

class MsproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Msproduk::all();
        return response()->json([
            'success' => 200,
            'messege' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'produkName' => 'required',
            'file_path' => 'required|file|mimes:png,jpg',
            'jenisProduk' => 'required',
            'demoProduk' => ''
        ]);
        try {
            $filename = time() . $request->file('file_path')->getClientOriginalName();
            $path = $request->file('file_path')->storeAs('aploads/produks', $filename);
            $validasi['file_path'] = $path;
            $respon = Msproduk::create($validasi);
            return response()->json([
                'success' => 200,
                'messege' => 'success',
                'data' => $respon
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
        //
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

        $data = request()->validate([
            'description' => 'required',
            'url' => 'required',
            'image' => 'nullable',
        ]);

        $updateData = [
            'description' => $data['description'],
            'url' => $data['url'],
        ];

        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $updateData['image'] = $imagePath;
        }

        auth()->user()->profile()->update($updateData);

        return redirect('/users/' . auth()->user()->id);

        $fileName = null;
        $currentImage = $product->image;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $fileName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move('./img/', $fileName);
        } else
            $fileName = $currentImage;

        if ($fileName && $currentImage) {
            Storage::delete('./img/' . $currentImage);
        }

        // $validasi = $request->validate([
        //     'produkName' => '',
        //     'file_path' => '',
        //     'jenisProduk' => '',
        //     'demoProduk' => ''
        // ]);
        // try {
        //     if ($request->file('file_path')) {
        //         $filename = time() . $request->file('file_path')->getClientOriginalName();
        //         $path = $request->file('file_path')->storeAs('aploads/produks', $filename);
        //         $validasi['file_path'] = $path;
        //     }
        //     $respon = Msproduk::find($id);
        //     $respon->update($validasi);
        //     return response()->json([
        //         'success' => 200,
        //         'messege' => 'success',
        //         'data' => $respon
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'messege' => 'Err',
        //         'eror' => $e->getMessage()
        //     ]);
        // }
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