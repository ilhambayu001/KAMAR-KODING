<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Pembayaran;
use App\Models\Langganan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role == '1'){
            $date = now()->year;
            $tanggal = now()->month;
            $dataLangganan= Langganan::with('users')->get();
            $dataOrder= Order::whereMonth('created_at', '=', $tanggal)->get();
            $dataUser= Auth::user()->get();
            $dataPembayaran= Pembayaran::get();

            $Income = 0;
            foreach($dataOrder as $inco){
                $Income = $Income + (int)$inco->harga;
            }
            $dataBulan = array(
                "Januari" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '1')->count(),
                "Februari" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '2')->count(),
                "Maret" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '3')->count(),
                "April" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '4')->count(),
                "Mei" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '5')->count(),
                "Juni" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '6')->count(),
                "Juli" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '7')->count(),
                "Agustus" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '8')->count(),
                "September" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '9')->count(),
                "Oktober" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '10')->count(),
                "November" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '11')->count(),
                "Desember" => Auth::user()->whereYear('created_at', '=', $date)->whereMonth('created_at', '=', '12')->count(),
              );
            return view('admin/dashboard')->with(compact('dataLangganan', 'dataOrder','dataUser','dataPembayaran',"Income","dataBulan","tanggal"));
            }else{
            $dataLangganan= Langganan::with('users')->get();
            // foreach($dataLangganan as $d){
            //  dd($d->users->count());
            // }
            $iduser=Auth::user()->id;
            // dd($dataLangganan);
            return view('user/dashboard')->with(compact('dataLangganan', 'iduser'));
            }
        }
    
    }
        