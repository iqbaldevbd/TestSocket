<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\TestTransaction;
use App\Events\TransactionEvent;
use Illuminate\Http\Request;

class TestTransactionController extends Controller
{
    public function index(){
        return view('crate');
    }
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'amount' => 'required|numeric',
            'trxID' => 'required|string',
            'reference' => 'required|string',
        ]);

        // Create a new transaction record
        $transaction = TestTransaction::create([
            'amount' => $request->input('amount'),
            'trxID' => $request->input('trxID'),
            'reference' => $request->input('reference')
            // Add other fields as needed
        ]);
        if($transaction){
            TransactionEvent::dispatch($transaction);

        }
        // Dispatch a notification after transaction creation
        // $transaction->notify(new TransactionCreated($transaction));

        return response()->json(['message' => 'Transaction created successfully', 'transaction' => $transaction], 201);
    }
}
