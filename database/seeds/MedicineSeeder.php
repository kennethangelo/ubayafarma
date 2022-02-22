<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            //Category #1
             ["generic_name" => "Fentanil", "form" => "inj 0,05 mg/mL (i.m/i.v)", "restriction_formula" => "5 amp/kasus", 
             "description" => "inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 1],
             ["generic_name" => "Morfin", "form" => "tab lepas lambat 10 mg", "restriction_formula" => "60 tab/bulan", 
             "description" => "Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 1],
             ["generic_name" => "Oksikodon", "form" => "kaps 10 mg", "restriction_formula" => "60 kaps/bulan", 
             "description" => "Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 1],
             //Category #2
             ["generic_name" => "Bupivakain Heavy", "form" => "inj 0,5% + glukosa 8%", "restriction_formula" => "", 
             "description" => "Khusus untuk analgesia spinal.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 2],
             ["generic_name" => "Deksmedetomidin", "form" => "inj 100 mcg/mL", "restriction_formula" => "", 
             "description" => "Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 2],
             ["generic_name" => "Midazolam", "form" => "inj 1 mg/mL (i.v.)", "restriction_formula" => "1 mg/jam (24 mg/hari)", 
             "description" => "Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 2],
             //Category #3
             ["generic_name" => "Deksametason", "form" => "inj 5 mg/mL", "restriction_formula" => "20 mg/hari", 
             "description" => "", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 3],
             ["generic_name" => "Difenhidramin", "form" => "inj 10 mg/mL (i.v./i.m.)", "restriction_formula" => "30 mg/hari", 
             "description" => "", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 3],
             ["generic_name" => "Klorfeniramin", "form" => "tab 4 mg", "restriction_formula" => "3 tab/hari, maks 5 hari", 
             "description" => "", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 3],
             //Category #4
             ["generic_name" => "Nalokson", "form" => "inj 0,4 mg/mL", "restriction_formula" => "", 
             "description" => "Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 4],
             ["generic_name" => "Natrium bikarbonat", "form" => "tab 500 mg", "restriction_formula" => "", 
             "description" => "High alert medicine.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 4],
             ["generic_name" => "Efedrin", "form" => "inj 50 mg/mL", "restriction_formula" => "", 
             "description" => "", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 4],
             //Category #5
             ["generic_name" => "Fenitoin", "form" => "inj 50 mg/mL", "restriction_formula" => "Untuk status epileptikus, dapat diberikan hingga dosis 15-30 mg/kgBB di Faskes Tk. 2 dan 3.", 
             "description" => "Dapat digunakan untuk status konvulsivus.", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 5],
             ["generic_name" => "Levetirasetam", "form" => "tab 250 mg", "restriction_formula" => "60 tab/bulan", 
             "description" => "Sebagai terapi tambahan pada pasien epilepsi onset parsial.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 5],
             ["generic_name" => "Lamotrigin", "form" => "tab dispersible 25 mg", "restriction_formula" => "30 tab/bulan (hanya untuk titrasi dosis)", 
             "description" => "Dapat digunakan sebagai lini kedua pada ibu hamil atau pasien usia lanjut (> 65 tahun).", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 5],
             //Category #6
             ["generic_name" => "Dietilkarbamazin", "form" => "tab 100 mg", "restriction_formula" => "", 
             "description" => "Tidak digunakan untuk ibu hamil atau ibu menyusui.", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 6],
             ["generic_name" => "Prazikuantel", "form" => "tab 600 mg", "restriction_formula" => "", 
             "description" => "Khusus di Kalimantan Selatan untuk pengobatan Fasciolopsis buski.", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 6],
             ["generic_name" => "Sefiksim", "form" => "tab/kaps 100 mg", "restriction_formula" => "10 hari", 
             "description" => "Hanya untuk pasien rawat inap yang sebelumnya mendapatkan antibiotik parenteral sefalosporin generasi tiga atau sesuai hasil uji resistensi.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 6],
             //Category #7
             ["generic_name" => "Ergotamin", "form" => "tab 1 mg", "restriction_formula" => "8 tab/minggu", 
             "description" => "Hanya digunakan untuk serangan migren akut dan cluster headache.", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 7],
             ["generic_name" => "Betahistin", "form" => "tab 24 mg", "restriction_formula" => "90 tab/bulan", 
             "description" => "Hanya untuk sindrom meniere.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 7],
             ["generic_name" => "Propranolol", "form" => "tab 10 mg", "restriction_formula" => "", 
             "description" => "", "faskes_tk1" => 1, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 7],
             //Category #8
             ["generic_name" => "Anastrozol", "form" => "tab 1 mg", "restriction_formula" => "30 tab/bulan", 
             "description" => "Dapat digunakan untuk kanker payudara post menopause dengan pemeriksaan reseptor estrogen/progesteron positif.", "faskes_tk1" => 0, "faskes_tk2" => 0, "faskes_tk3" => 1, "category_id" => 8],
             ["generic_name" => "Bikalutamid", "form" => "tab sal 150 mg", "restriction_formula" => "", 
             "description" => "Hanya diberikan untuk kanker prostat.", "faskes_tk1" => 0, "faskes_tk2" => 0, "faskes_tk3" => 1, "category_id" => 8],
             ["generic_name" => "Dienogest", "form" => "tab sal gula 25 mg", "restriction_formula" => "30 tab/bulan", 
             "description" => "Dapat digunakan untuk kanker payudara post menopause, ER dan/atau PR positif.", "faskes_tk1" => 0, "faskes_tk2" => 0, "faskes_tk3" => 1, "category_id" => 8],
            //Category #9
             ["generic_name" => "Pramipeksol", "form" => "tab lepas lambat 0,375 mg", "restriction_formula" => "30 tab/bulan", 
             "description" => "Hanya diresepkan oleh dokter spesialis neurologi.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 9],
             ["generic_name" => "Ropinirol", "form" => "tab lepas lambat 4 mg", "restriction_formula" => "30 tab/bulan", 
             "description" => "Hanya diresepkan oleh dokter spesialis neurologi.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 9],
             ["generic_name" => "Triheksifenidil", "form" => "tab 2 mg", "restriction_formula" => "90 tab/bulan", 
             "description" => "Dapat digunakan pada gangguan ekstrapiramidal karena obat.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 9],
             //Category #10
             ["generic_name" => "Dabigatran eteksilat", "form" => "kaps 75 mg", "restriction_formula" => "30 kaps, pasca operasi", 
             "description" => "Untuk pencegahan VTE (Venous Thrombo Embolism) pada hip dan knee replacement.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 10],
             ["generic_name" => "Enoksaparin sodium", "form" => "inj 10.000 IU/mL", "restriction_formula" => "2 vial/hari.", 
             "description" => "Dapat digunakan untuk tromboemboli dan sindrom koroner akut serta pencegahan clotting pada hemodialisis, pada bedridden post operasi, medium dan high risk.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 10],
             ["generic_name" => "Fondaparinuks", "form" => "inj 2,5 mg/0,5 mL", "restriction_formula" => "1 vial/hari", 
             "description" => "Untuk tromboemboli dan sindrom koroner akut.", "faskes_tk1" => 0, "faskes_tk2" => 1, "faskes_tk3" => 1, "category_id" => 10],
        ]);
    }
}
