<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Order::getOrder()->get();
        return response()->json($data);
    
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
        $validasi=$request->validate([
            'nama_lengkap'=>'required',
            'nim'=> 'required|numeric',
            'ttl'=> 'required',
            'jenis_kelamin'=> 'required',
            'agama' => 'required',
            'no_hp' => 'required|numeric',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'no_hp_ayah'=>'required|numeric',
            'no_hp_ibu'=>'required|numeric',
            'ktm'=> 'required|file|mimes:png,jpg,jpeg,gif',
            'kk'=> 'required|file|mimes:png,jpg,jpeg,gif',
            'ktp'=> 'required|file|mimes:png,jpg,jpeg,gif'
        ]);
        try{
            $fileName = time().$request->file('ktm')->getClientOriginalName();
            $fileName = time().$request->file('kk')->getClientOriginalName();
             $fileName = time().$request->file('ktp')->getClientOriginalName();
            $path = $request->file('ktm')->storeAs('uploads/ktm',$fileName);
            $path = $request->file('kk')->storeAs('uploads/kk',$fileName);
            $path = $request->file('ktp')->storeAs('uploads/ktp',$fileName);
            $validasi['ktm']=$path;
            $validasi['kk']=$path;
            $validasi['ktp']=$path;
            $response = Order::create($validasi);
            return response()->json([
                'success'=> true,
                'message' => 'success',
                'data'=>$response
            ]);
        } catch(\Throwable $e){
            return response()->json([
                'success'=> 'Err',
                'errors' => $e->getMessage()
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
        $validasi=$request->validate([
            'nama_lengkap'=>'required',
            'nim'=> 'required|numeric',
            'ttl'=> 'required',
            'jenis_kelamin'=> 'required',
            'agama' => 'required',
            'no_hp' => 'required|numeric',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'no_hp_ayah'=>'required|numeric',
            'no_hp_ibu'=>'required|numereic',
            'ktm'=> '',
            'kk'=> '',
            'ktp'=>''
        ]);
        try{
            if($request->file('ktm')){
                $fileName = time().$request->file('ktm')->getClientOriginalName();
                $path = $request->file('ktm')->storeAs('uploads/ktm',$fileName);
                $validasi['ktm']=$path;
            }
            if ($request->file('kk')) {
                $fileName = time().$request->file('kk')->getClientOriginalName();
                $path = $request->file('kk')->storeAs('uploads/kk', $fileName);
                $validasi['kk']=$path;
            }
             if ($request->file('ktp')) {
                $fileName = time().$request->file('ktp')->getClientOriginalName();
                $path = $request->file('ktp')->storeAs('uploads/ktp', $fileName);
                $validasi['ktp']=$path;
            }
            
            $response = Order::find($id);
            $response -> update($validasi);

            return response()->json([
                'success'=> true,
                'message' => 'success',
                'data'=>$response
            ]);
            // pinjaman::create($response);
            // return redirect('/akun');
        } catch(\Throwable $e){
            return response()->json([
                'success'=> 'Err',
                'errors' => $e->getMessage()
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
        //
    }
}
