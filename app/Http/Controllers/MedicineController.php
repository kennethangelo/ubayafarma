<?php

namespace App\Http\Controllers;

use App\Category;
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

        // //Semua class yang dipanggil static harus diimport sebelum dieksekusi!!
        // //Ciri khasnya adalah namaClass::fungsi()

        // //Untuk query dengan RAW
        // // $queryRaw = DB::select(DB::raw("SELECT * FROM medicines"));

        // //Untuk query builder
        // $queryBuilder = DB::table('medicines')->get();

        // //Untuk query dengan Model
        // // $queryModel = Medicine::all();

        //         1. Tampilkan seluruh data kategori obat.
        // ○ SELECT * FROM medicines
        //Raw Query
        // $medicines = DB::select(DB::raw("SELECT * FROM medicines"));
        //Query Builder
        // $medicines = DB::table('medicines')->get();
        //Eloquent
        // $medicines = Medicine::all();

        // 2. Tampilkan seluruh nama medicines, formula dan harga.
        // ○ SELECT generic_name, form, price FROM medicines
        // //Raw Query 
        // $medicines = DB::select(DB::raw("SELECT generic_name, form, price FROM medicines"));
        // //Query Builder
        // $medicines = DB::table('medicines')->select('generic_name', 'form', 'price')->get();
        // //Eloquent
        // $medicines = Medicine::select('generic_name', 'form', 'price')->get();

        // 3. Tampilkan seluruh nama medicines, formula dan nama kategori.
        // ○ SELECT m.generic_name, m.form, c.name FROM medicines m
        // INNER JOIN categories c ON c.id = m.category_id
        // //Raw Query
        // $medicines = DB::select(DB::raw("SELECT m.generic_name, m.form, c.name FROM medicines m INNER JOIN categories c ON c.id = m.category_id"));
        // //Query Builder
        // $medicines = DB::table('medicines AS m')
        //              ->join('categories AS c', 'm.category_id', '=', 'c.id')
        //              ->select('m.generic_name', 'm.form', 'c.name')
        //              ->get();
        //Eloquent
        // $medicines = Medicine::select('generic_name', 'form', 'price')->get();

        // 4. Tampilan jumlah kategori yang memiliki data medicines.
        // ○ SELECT COUNT(DISTINCT(category_id)) FROM medicines
        // //Raw Query
        // $countCategories = DB::select(DB::raw("SELECT COUNT(DISTINCT(category_id)) AS total FROM medicines"));
        // //Query Builder
        // $countCategories = DB::table('medicines')
        //              ->distinct()
        //              ->count('category_id');
        //Eloquent
        // $countCategories = Medicine::distinct()->count('category_id');            


        // 5. Tampilkan nama kategori yang tidak memiliki data medicines satupun.
        // ○ SELECT c.name FROM categories c LEFT JOIN medicines m ON
        // c.id = m.category_id WHERE m.category_id IS NULL
        // //Raw Query
        // $showCategoriesWithNoMedicines = DB::select(DB::raw("SELECT c.name FROM categories c LEFT JOIN medicines m ON c.id = m.category_id WHERE m.category_id IS NULL"));
        // //Query Builder
        // $showCategoriesWithNoMedicines = DB::table('categories AS c')
        //              ->leftJoin('medicines AS m', 'c.id' , '=', 'm.category_id')
        //              ->whereNull('m.category_id')
        //              ->select('c.name')
        //              ->get();
        //Eloquent
        // $showCategoriesWithNoMedicines = Category::doesntHave('medicines')->get(); 

        // 6. Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka
        // berikan 0.
        // ○ SELECT c.name, IFNULL(AVG(m.price),0) AS price FROM
        // categories c LEFT JOIN medicines m ON c.id =
        // m.category_id GROUP BY c.name ORDER BY c.name
        // //Raw Query
        // $showAvgPriceEachCategories = DB::select(DB::raw("SELECT c.name, IFNULL(AVG(m.price),0) AS price FROM categories c LEFT JOIN medicines m ON c.id = m.category_id GROUP BY c.name ORDER BY c.name"));
        // //Query Builder
        // $showAvgPriceEachCategories = DB::table('categories AS c')
        //              ->leftJoin('medicines AS m', 'c.id' , '=', 'm.category_id')
        //              ->select('c.name', DB::raw("IFNULL(AVG(m.price),0) AS price"))
        //              ->orderBy('c.name')
        //              ->groupBy('c.name')
        //              ->get();
        // //Eloquent
        // $showAvgPriceEachCategories = Category::select('categories.*')
        //              ->leftJoin('medicines', 'categories.id' , '=', 'medicines.category_id')
        //              ->select('categories.name', DB::raw("IFNULL(AVG(medicines.price),0) AS price"))
        //              ->orderBy('categories.name')
        //              ->groupBy('categories.name')
        //              ->get();

        // 7. Tampilkan kategori obat yang memiliki 1 produk medicine saja.
        // ○ SELECT c.name, COUNT(m.category_id) AS total FROM
        // categories c INNER JOIN medicines m ON c.id =
        // m.category_id GROUP BY c.id HAVING total = 1
        // //Raw Query
        // $showCategoriesWithOneProduct = DB::select(DB::raw("SELECT c.name, COUNT(m.category_id) AS total FROM categories c INNER JOIN medicines m ON c.id = m.category_id GROUP BY c.id, c.name HAVING total = 1"));
        // //Query Builder
        // $showCategoriesWithOneProduct = DB::table('categories AS c')
        //              ->join('medicines AS m', 'c.id' , '=', 'm.category_id')  
        //              ->groupBy(['c.id','c.name'])
        //              ->having('total','=', 1)
        //              ->select('c.name', DB::raw("COUNT(m.category_id) AS total"))
        //              ->get();
        // //Eloquent
        // $showCategoriesWithOneProduct = Category::select('categories.name', DB::raw("COUNT(medicines.category_id) AS total"))
        //              ->join('medicines', 'categories.id' , '=', 'medicines.category_id')  
        //              ->groupBy(['categories.id','categories.name'])
        //              ->having('total','=', 1)
        //              ->get();

        // 8. Tampilkan obat yang memiliki satu form.
        // ○ SELECT generic_name, COUNT(form) AS total FROM
        // medicines GROUP BY generic_name HAVING COUNT(form) > 1
        // //Raw Query
        // $showMedicinesWithOneForm = DB::select(DB::raw("SELECT generic_name, COUNT(form) AS total FROM medicines GROUP BY generic_name HAVING COUNT(form) > 1"));
        // //Query Builder
        // $showMedicinesWithOneForm = DB::table('medicines')
        //              ->select('generic_name', DB::raw("COUNT(form) AS total"))
        //              ->groupBy('generic_name')
        //              ->having('total','>',1)
        //              ->get();
        // //Eloquent
        // $showMedicinesWithOneForm = Medicine::select('generic_name', DB::raw("COUNT(form) AS total"))
        //     ->groupBy('generic_name')
        //     ->having('total', '>', 1)
        //     ->get();

        // 9. Tampilkan kategori dan nama obat yang memiliki harga termahal.
        // ○ SELECT c.name, m.generic_name, MAX(m.price) FROM
        // medicines m INNER JOIN categories c ON c.id =
        // m.category_id
        // //Raw Query
        // $showTheMostExpensiveProduct = DB::select(DB::raw("SELECT c.name, m.generic_name, m.price FROM medicines m INNER JOIN categories c ON c.id = m.category_id ORDER BY m.price DESC LIMIT 1"));
        //Query Builder
        // $showTheMostExpensiveProduct = DB::table('medicines AS m')
        //              ->join('categories AS c', 'c.id' , '=', 'm.category_id')    
        //             ->orderBy('m.price','desc')
        //             ->limit(1)
        //              ->select('c.name', 'm.generic_name', 'm.price')
        //              ->get();
        // //Eloquent
        // $showTheMostExpensiveProduct = Medicine::select('categories.name', 'medicines.generic_name', 'medicines.price')
        //     ->join('categories', 'categories.id', '=', 'medicines.category_id')
        //     ->orderBy('medicines.price', 'desc')
        //     ->limit(1)
        //     ->get();

        //Untuk memunculkan isi dari variable 
        //var_dump();
        //print_r();
        // dd();
        // khusus laravel.

        // //Cari 1 dengan sintaks compact => variabel querybuilder nanti dikenali 
        // //pada controller & view.
        // return view('medicine.index', compact('queryBuilder'));

        // //Cara 2 dengan sintaks array -> variabel querybuilder hanya dikenali pada controller dan 
        // //pada view diubah menjadi data.
        // // return view('medicine.index', ['data'=>$queryBuilder]);
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
        if ($medicine != null) {
            $message = $medicine;
        } else {
            $message = null;
        }
        return view('medicine.show', compact('message'));
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
