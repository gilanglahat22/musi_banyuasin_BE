<?php

namespace Database\Seeders;

use App\Models\PaslonPutri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaslonPutriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaslonPutri::create([
            'nomor_urut' => '02',
            'name'   => "Aisyah",
            'count_vote' => 0,
            'path' => 'Aisyah_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '04',
            'name'   => "Desti Azhara",
            'count_vote' => 0,
            'path' => 'Desti_Azhara_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '06',
            'name'   => "Nabila Martina",
            'count_vote' => 0,
            'path' => 'Nabila_Martina_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '08',
            'name'   => "Tia Septiani",
            'count_vote' => 0,
            'path' => 'Tia_Septiani_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '10',
            'name'   => "Sesylia Syakina",
            'count_vote' => 0,
            'path' => 'Sesylia_Syakina_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '12',
            'name'   => "Novia Desi Rahmalina",
            'count_vote' => 0,
            'path' => 'Novia_Desi_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '14',
            'name'   => "Nia Okta Yuwinar",
            'count_vote' => 0,
            'path' => 'Nia_Okta_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '16',
            'name'   => "Dita Risky",
            'count_vote' => 0,
            'path' => 'Dita_Risky_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '18',
            'name'   => "Trisna Lestari",
            'count_vote' => 0,
            'path' => 'Trisna_Lestari_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '20',
            'name'   => "Alika Sulia Marfha",
            'count_vote' => 0,
            'path' => 'Alika_Sulia_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '22',
            'name'   => "Alya Faizah",
            'count_vote' => 0,
            'path' => 'Alya_Faizah_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '24',
            'name'   => "Alya Rosali",
            'count_vote' => 0,
            'path' => 'Alya_Rosali_Putri.JPG',
            'persentase' => 0,
        ]);

        PaslonPutri::create([
            'nomor_urut' => '26',
            'name'   => "Nafisa Ghany Firmansyah",
            'count_vote' => 0,
            'path' => 'Nafisa_Ghany_Putri.JPG',
            'persentase' => 0,
        ]);
    }
}
