<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ["name" => "Analgesik, antipiretik, antiinflamasi non steroid, antipirai", "description" => "Golongan obat berfungsi sebagai antidemam sekaligus antinyeri. Obat golongan ini bisa digunakan untuk meredakan nyeri akibat radang sendi, cedera, sakit gigi, sakit kepala, atau nyeri haid, sekaligus bisa mengatasi demam."],
            ["name" => "Anestetik", "description" => "Obat Anestetik lokal juga digunakan untuk penghilang nyeri pasca bedah, sehingga mengurangi kebutuhan analgesik seperti opioid."],
            ["name" => "Antialergi dan obat untuk anafilaksis", "description" => "Obat yang digunakan dalam terapi untuk pengobatan gejala sakit alergi dan gejala sakit oleh karena terjadi anafilaksis, terhadap atau oleh karena alergen seperti obat, minuman atau oleh karena pengaruh lingkungan."],
            ["name" => "Antidot dan obat lain untuk keracunan", "description" => "Obat antidot adalah penawar racun. Meski demikian, zat ini bersifat sangat spesifik pada jenis racun tertentu."],
            ["name" => "Antiepilepsi, antikonvulsi", "description" => "Obat ini adalah untuk mencegah timbulnya seizure dengan memberikan dosis efektif satu atau lebih antiepileptik. Penyesuaian dosis perlu dilakukan secara hati-hati, dimulai dengan dosis kecil dan dosis ditingkatkan secara bertahap hingga serangan epilepsi dapat dikendalikan atau hingga muncul gejala efek samping yang nyata."],
            ["name" => "Antiinfeksi", "description" => "Obat yang digunakan untuk mengatasi infeksi bakteri. Beberapa jenis antibiotik juga bisa digunakan untuk mencegah terjadinya infeksi bakteri pada kondisi-kondisi tertentu. Antibiotik tidak dapat digunakan untuk mengatasi infeksi akibat virus, seperti flu."],
            ["name" => "Antimigren dan antivertigo", "description" => "Obat pereda nyeri yang sering digunakan adalah obat antiinflamasi nonsteroid (OAINS), seperti parasetamol,kalium diklofenak, ibuprofen, atau asam mefenamat.Obat-obat tersebut dapat digunakan untuk mengatasi nyeri migrain ringan, sedang, atau berat."],
            ["name" => "Antineoplastik, imunosupresan, dan obat untuk terapi paliatif", "description" => "Obat Antineoplastik atau disebut dengan obat antikanker dapat mempengaruhi proses pembelahan sel yang bersifat antiproliferatif. Antineoplastik merusak DNA dan memulai apoptosis, mencegah perkembangan dan penyebaran sel neoplastik"],
            ["name" => "Antiparkinson", "description" => "Obat Antiparkinson digunakan untuk menggantikan dopamin baik dengan obat yang dapat melepaskan dopamin atau meniru kerja dari dopamin. Penyakit parkinson adalah kelainan gerak degeneratif karena kekurangan dopamin pada ganglia basal"],
            ["name" => "Obat yang mempengaruhi darah", "description" => "Obat pengencer darah bekerja mencegah terjadinya penggumpalan darah di pembuluh darah. Gumpalan darah bisa menyumbat aliran darah ke otot jantung dan menyebabkan serangan jantung. Bekuan darah juga bisa menghadang aliran darah ke otak, sehingga akhirnya menyebabkan stroke."],
        ]);
    }
}
