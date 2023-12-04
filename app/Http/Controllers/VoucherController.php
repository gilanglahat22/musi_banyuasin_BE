<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('vouchers')
                ->get();

        return response()->json($data);
    }

    public function show(Voucher $voucher)
    {
        return response()->json($voucher);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_voucher' => 'required|string',
            'nominal' => 'required|integer',
        ]);

        $voucher = Voucher::create($request->all());
        return response()->json(['data' => $voucher,
                                'message' => "New Data has been store"]);
    }

    public function update(Request $request, Voucher $voucher)
    {
        $request->validate([
            'kode_voucher' => 'required|string',
            'nominal' => 'required|integer',
        ]);

        $voucher->kode_voucher = $request->kode_voucher;
        $voucher->nominal = $request->nominal;
        $voucher->save();
        return response()->json(['data' => $voucher]);
    }

    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return response()->json(['message' => 'The Voucher has been deleted']);
    }
}
