<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        $sellTransaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
        ->whereHas('product', function($product){
            $product->where('users_id', Auth::user()->id);
        })->get();

        $buyTransaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
        ->whereHas('transaction', function($transaction){
            $transaction->where('users_id', Auth::user()->id);
        })->get();

        return view('pages.dashboard-transactions', [
            'sellTransaction' => $sellTransaction,
            'buyTransaction' => $buyTransaction
        ]);
    }
    public function details(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])->findOrFail($id);
        return view('pages.dashboard-transactions-details', [
            'transaction' => $transaction
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();    

        dd($data);

        return;

        $item = TransactionDetail::findOrFail($id);

        $item->update($data);

        return redirect()->route('dashboard-transactions-details', $id);
    }
}
