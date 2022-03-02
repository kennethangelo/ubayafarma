<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Semua class yang dipanggil static harus diimport sebelum dieksekusi!!
        //Ciri khasnya adalah namaClass::fungsi()

        //Untuk query dengan RAW
        // $queryRaw = DB::select(DB::raw("SELECT * FROM medicines"));

        //Untuk query builder
        $queryBuilder = DB::table('medicines')->get();

        //Untuk query dengan Model
        // $queryModel = Medicine::all();
        
        //Untuk memunculkan isi dari variable 
        //var_dump();
        //print_r();
        // dd(); 
        // khusus laravel.

        //Cari 1 dengan sintaks compact => variabel querybuilder nanti dikenali 
        //pada controller & view.
        return view('medicine.index', compact('queryBuilder'));

        //Cara 2 dengan sintaks array -> variabel querybuilder hanya dikenali pada controller dan 
        //pada view diubah menjadi data.
        // return view('medicine.index', ['data'=>$queryBuilder]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
