<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<1000; $i++){
            $tempGenerated = $this->generateRandomString(7);
            $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            while($isFound != null){
                $tempGenerated = $this->generateRandomString(7);
                $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            }
            Voucher::create([
                'kode_voucher' => $tempGenerated,
                'nominal' => "10",
            ]);
        }

        for($i=0; $i<500; $i++){
            $tempGenerated = $this->generateRandomString(7);
            $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            while($isFound != null){
                $tempGenerated = $this->generateRandomString(7);
                $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            }
            Voucher::create([
                'kode_voucher' => $tempGenerated,
                'nominal' => "25",
            ]);
        }

        for($i=0; $i<500; $i++){
            $tempGenerated = $this->generateRandomString(7);
            $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            while($isFound != null){
                $tempGenerated = $this->generateRandomString(7);
                $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            }
            Voucher::create([
                'kode_voucher' => $tempGenerated,
                'nominal' => "50",
            ]);
        }

        for($i=0; $i<250; $i++){
            $tempGenerated = $this->generateRandomString(7);
            $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            while($isFound != null){
                $tempGenerated = $this->generateRandomString(7);
                $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            }
            Voucher::create([
                'kode_voucher' => $tempGenerated,
                'nominal' => "100",
            ]);
        }

        for($i=0; $i<100; $i++){
            $tempGenerated = $this->generateRandomString(7);
            $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            while($isFound != null){
                $tempGenerated = $this->generateRandomString(7);
                $isFound = Voucher::where('kode_voucher',$tempGenerated)->first();
            }
            Voucher::create([
                'kode_voucher' => $tempGenerated,
                'nominal' => "500",
            ]);
        }
    }

    public function generateRandomString($length = 25) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ%^&*()!@#$~{}[]?<>';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}