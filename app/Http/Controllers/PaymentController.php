<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bayar(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required',
            'pemilik' => 'required',
            'nominal' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('/assets/bukti/'), $nama_file);
        }
        
        Payment::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $request->nama_bank,
            'pemilik' => $request->pemilik,
            'nominal' => $request->nominal,
            'gambar' => $nama_file,
            'status' => 'Pending',
        ]);
        return redirect('/student')->with('status', 'Pembayaran telah dilakukan silahkan menunggu admin untuk melakukan validasi.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request, $id)
    {
        Payment::where('user_id', '=', $id)->update([
            'status' => 'Success',
        ]);

        return redirect()->back();
    }

    public function failed(Request $request, $id)
    {
        Payment::where('user_id', '=', $id)->update([
            'status' => 'Failed',
        ]);

        return redirect()->back();
    }

    public function pending(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required',
            'pemilik' => 'required',
            'nominal' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('/assets/bukti/'), $nama_file);
        }

        Payment::where('user_id', '=', Auth::user()->id)->update([
            'nama_bank' => $request->nama_bank,
            'pemilik' => $request->pemilik,
            'nominal' => $request->nominal,
            'gambar' => $nama_file,
            'status' => 'Pending',
        ]);

        return redirect('/student');
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
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
