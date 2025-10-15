<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $wallet = Wallet::firstOrCreate(
            ['user_id' => Auth::id()],
            ['balance' => 0]
        );

        return view('wallet.index', compact('wallet'));
    }

    public function addBalance(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|min:1']);

        $wallet = Wallet::firstOrCreate(
            ['user_id' => Auth::id()],
            ['balance' => 0]
        );

        $wallet->balance += $request->amount;
        $wallet->save();

        return redirect()->back()->with('success', 'Wallet topped up successfully!');
    }
}
