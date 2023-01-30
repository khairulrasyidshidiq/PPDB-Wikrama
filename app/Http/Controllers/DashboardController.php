<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.dashboard');
    }

    public function detail($id)
    {
        $student = User::where('id', $id)->first();
        return view('admin.detail', compact('student'));
    }

    public function detailpembayaran($id)
    {
        $pembayaran = Payment::where('user_id', $id)->first();
        return view('admin.detailpembayaran', compact('pembayaran'));
    }

    public function error()
    {
        return view('error');
    }

    public function pembayaran()
    { 
        $pembayaran = Payment::where('user_id', Auth::user()->id)->first();
        $bank = Http::get('https://kistarr.netlify.app/api/bank')->json();
        return view('student.pembayaran', compact('bank', 'pembayaran'));
    }

    public function verifikasi()
    {
        $student = User::all();
        return view('admin.validasi', compact('student'));
    }

    public function admin()
    {
        $pembayaran = Payment::all();
        return view('admin.adminpage', compact('pembayaran'));
    }

    public function landing()
    {
        $pembayaran = Payment::where('user_id', Auth::user()->id)->first();
        return view('student.landing', compact('pembayaran'));
    }

    public function register()
    {
        $sekolah = Http::get('https://kistarr.netlify.app/api/smp')->json();
        return view('page.register', compact('sekolah'));
    }

    public function pagelogin()
    {
        return view('page.login');
    }

    public function login(Request $request) 
    {   
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
            
        ]);

 
        if (Auth::attempt($credentials)) {
            if (Auth::user()->roles == 'Admin') {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }else{
                $request->session()->regenerate();
                return redirect()->intended('/student');
            }
        }
 

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');

    }

    public function print()
    {
        $pdf = User::latest()->first();
        return view('page.pdfprint', compact('pdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
            'referensi' => 'required',
        ]);
        
        User::create([
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'referensi' => $request->referensi,
            'nama' => $request->nama,
            'lulus' => $request->lulus,
            'rayon' => $request->rayon,
            'asal_smp' => $request->asal_smp,
            'no_seleksi' => $request->no_seleksi,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->nisn),
            'roles' => 'Student',
        ]);

    

        return redirect('/print');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}

