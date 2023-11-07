<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use App\Models\Student;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function indexDone()
    {
        $refunds = Refund::where('status', 1)
        ->orderBy('refund_finished_date', 'desc')
        ->get();
        return view('ProcessedRefunds', [
            'refunds' => $refunds
        ]);
    }

    public function indexWait()
    {
        $refunds = Refund::where('status', 0)
        ->orderBy('ask_for_refund_date', 'desc')
        ->get();
        return view('WaitingRefunds', [
            'refunds' => $refunds
        ]);
    }

    public function finishRefund(Request $request)
    {
        $data = $request->validate([
            'check' => ''
        ]);
        foreach($data['check'] as $refund_id)
        {
            $refund = Refund::where('id', $refund_id)->first();

            $temp = isset($refund->toArray()[0]) ? $refund->toArray()[0] : $refund->toArray();

            $temp['status'] = 1;
            $temp['refund_finished_date'] = date('Y-m-d');
            $refund->fill($temp);
            $refund->save();
        }

        return redirect()->route('refund-done')->with('success', 'Pomyślnie zwrócono środki');
    }
}
