<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Pembayaran;
use App\Models\Langganan;
use App\Models\User;
use App\Models\Materi;
use App\Models\Modul;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::untuk Order:::::::::::::::::::::::::::::::::::::::::::: //
    public function orderstore(Request $request){
        $role=Auth::user()->role;
        if($role == '0'){
            // dd($request);
            Order::create($request->all());
            return redirect('/redirects/keranjang');
        }else {
            return redirect('/redirects');
        }
    }
        public function keranjang(){
            $role=Auth::user()->role;
            if($role == '0'){
                // dd($request);
                $id=Auth::user()->id;
                $order = Order::get()->where('user_id',$id);
                // dd($order);
                return view('user/keranjang')->with(compact('order'));
            }else {
                return redirect('/redirects');
            }
        }
        public function storekeranjang(Request $request)
    {
        $input = $request->all();
        // if ($image = $request->file('bukti_pembayaran')) {
        //     $destinationPath = 'images/bukti_pembayaran';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['bukti_pembayaran'] = "$profileImage";
        // }
        Pembayaran::create($input);
        return redirect('redirects/keranjang')->with('sukses', 'Data berhasil diinput');
    }
    public function destroykeranjang(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $order->delete();
        return redirect('redirects/keranjang')->with('sukses', 'Data berhasil dihapus');
    }
    // ::::::::::::::::::::::::::::::::::::::::::::::::::::untuk materi::::::::::::::::::::::::::::::::::::::: //
     // ini buat kelas pengguna
     public function Kelas($id) {
        $role=Auth::user()->role;
        if($role == '0'){
            $dataMateri= Materi::with('moduls')->get()->where('langganan_id',$id);
            $dataExams= Exam::with('questions')->get()->where('langganan_id',$id);
        return view('user/materi')->with(compact('dataMateri','dataExams'));
        }else {
            return redirect('/redirects');
        }
    }
    public function Exams($id) {
        $role=Auth::user()->role;
        if($role == '0'){
            $dataQuestions= Question::get()->where('exam_id',$id);
            // dd($dataQuestions);
        return view('user/exams')->with(compact('dataQuestions'));
        }else {
            return redirect('/redirects');
        }
    }
}
