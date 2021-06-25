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


class AdminController extends Controller
{
    // <-------------------------------------------------- Data Pengguna -------------------------------------------->
    // ini buat list pengguna doang
    public function listPengguna() {
        $role=Auth::user()->role;
        if($role == '1'){
            $data= Auth::user()->get();
        return view('admin/listusers',compact(['data']));
        }else {
            return redirect('/redirects');
        }
    
    }
    public function updatepengguna(Request $request)
    {
        // dd($request);
        $pengguna = Auth::user()->find($request->id);
        // dd($request);
        $pengguna->update($request->all());
        return redirect('redirects/listpengguna')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroypengguna(Request $request)
    {
        $pengguna = Auth::user()->find($request->id);
        // dd($Authors);
        // foreach($Authors->news as $tes){
        //     // return $tes->pivot['author_id'];
        //     $Authors->news()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
        // }
        $pengguna->delete();
        return redirect('redirects/listpengguna')->with('sukses', 'Data berhasil dihapus');
    }
    // end list pengguna doang

        // ini buat list order doang
        public function listorder() {
            $role=Auth::user()->role;
        if($role == '1'){
            $data= Order::get();
            $datauser= Auth::user()->get();
            return view('admin/listorder',['data' => $data],['datauser' => $datauser]);
        }else {
            return redirect('/redirects');
        }
        }
        public function updateorder(Request $request)
        {
            // dd($request);
            $order = Order::findOrFail($request->id);
            $order->update($request->all());
            return redirect('redirects/listorder')->with('sukses', 'Data berhasil diupdate');
        }
        public function destroyorder(Request $request)
        {
            $order = Order::findOrFail($request->id);
            // dd($Authors);
            // foreach($Authors->news as $tes){
            //     // return $tes->pivot['author_id'];
            //     $Authors->news()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
            // }
            $order->delete();
            return redirect('redirects/listorder')->with('sukses', 'Data berhasil dihapus');
        }
        // end list order doang
         // ini buat list pembayaran doang
         public function listpembayaran() {
            $role=Auth::user()->role;
            if($role == '1'){
                $data= Pembayaran::get();
            return view('admin/listpembayaran',compact(['data']));
            }else {
                return redirect('/redirects');
            }
        }
        public function updatepembayaran(Request $request)
        {
            // dd($request);
            $order = Order::findOrFail($request->id);
            $order->update($request->all());
            return redirect('redirects/listpembayaran')->with('sukses', 'Data berhasil diupdate');
        }
        public function destroypembayaran(Request $request)
        {
            $order = Pembayaran::findOrFail($request->id);
            // dd($Authors);
            // foreach($Authors->news as $tes){
            //     // return $tes->pivot['author_id'];
            //     $Authors->news()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
            // }
            $order->delete();
            return redirect('redirects/listpembayaran')->with('sukses', 'Data berhasil dihapus');
        }
        // end list order doang

        // <-------------------------------------------- Kelas Kontrol -------------------------------------------> //
        
    // ini buat list Kelas doang
    public function listKelas() {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataLangganan= Langganan::with('users')->get();
        return view('admin/listkelas',compact(['dataLangganan']));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeKelas(Request $request)
    {
        // dd($request);
        Langganan::create($request->all());
        return redirect('redirects/listkelas')->with('sukses', 'Data berhasil diinput');
    }

    public function updateKelas(Request $request)
    {
        // dd($request);
        $pengguna = Langganan::findOrFail($request->id);
        $pengguna->update($request->all());
        return redirect('redirects/listkelas')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyKelas(Request $request)
    {
        $pengguna = Langganan::findOrFail($request->id);
        $pengguna->delete();
        return redirect('redirects/listkelas')->with('sukses', 'Data berhasil dihapus');
    }
    // end list kelas doang
    // ini buat tambah kelas pengguna
    public function tambahKelas() {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataLangganan= Langganan::get();
        return view('admin/tambahkelas',compact(['dataLangganan']));
        }else {
            return redirect('/redirects');
        }
    }
    public function addKelas(Request $request)
    {
        // dd($request);  
        if($request->get('user_id')) {
            Langganan::findOrfail($request->id)->users()->attach($request->get('user_id'));
        }
        return redirect('redirects/tambahkelas')->with('sukses', 'Data berhasil diinput');
    }

    // <--------------------------------------------list materi & modul kontrol ----------------------------------------------------> //
     // ini buat list materi doang
     public function listMateri() {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataMateri= Materi::get();
            $dataLangganan = Langganan::get();
            $dataUser = User::get()->where('role','1');
        return view('admin/listmateri')->with(compact('dataMateri','dataLangganan','dataUser'));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeMateri(Request $request)
    {
        // dd($request);
        Materi::create($request->all());
        return redirect('redirects/listmateri')->with('sukses', 'Data berhasil diinput');
    }

    public function updateMateri(Request $request)
    {
        // dd($request);
        $materi = Materi::findOrFail($request->id);
        $materi->update($request->all());
        return redirect('redirects/listmateri')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyMateri(Request $request)
    {
        $materi = Materi::findOrFail($request->id);
        $materi->delete();
        return redirect('redirects/listmateri')->with('sukses', 'Data berhasil dihapus');
    }

    // ini buat list modul doang
    public function listModul() {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataMateri= Materi::get();
            $dataModul = Modul::get();
        return view('admin/listmodul')->with(compact('dataMateri','dataModul'));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeModul(Request $request)
    {
        // dd($request);
        Modul::create($request->all());
        return redirect('redirects/listmodul')->with('sukses', 'Data berhasil diinput');
    }

    public function updateModul(Request $request)
    {
        // dd($request);
        $modul = Modul::findOrFail($request->id);
        $modul->update($request->all());
        return redirect('redirects/listmodul')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyModul(Request $request)
    {
        $modul = Modul::findOrFail($request->id);
        $modul->delete();
        return redirect('redirects/listmodul')->with('sukses', 'Data berhasil dihapus');
    }
    //ini buat list exams doang
    public function listExams() {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataExams= Exam::get();
            $dataLangganan = Langganan::get();
        return view('admin/listexams')->with(compact('dataExams','dataLangganan'));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeExams(Request $request)
    {
        // dd($request);
        Exam::create($request->all());
        return redirect('redirects/listexams')->with('sukses', 'Data berhasil diinput');
    }

    public function updateExams(Request $request)
    {
        // dd($request);
        $exams = Exam::findOrFail($request->id);
        $exams->update($request->all());
        return redirect('redirects/listexams')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyExams(Request $request)
    {
        $exams = Exam::findOrFail($request->id);
        $exams->delete();
        return redirect('redirects/listexams')->with('sukses', 'Data berhasil dihapus');
    }
    //ini buat crud quiz doang
    public function quiz($id) {
        $role=Auth::user()->role;
        if($role == '1'){
            $dataQuestions= Question::get()->where('exam_id',$id);
            // dd($dataQuestions);
        return view('admin/questions')->with(compact('dataQuestions','id'));
        }else {
            return redirect('/redirects');
        }
    }
        public function storeQuiz(Request $request, $id)
        {
            // dd($request);
            Question::create($request->all());
            return redirect('redirects/listexams')->with('sukses', 'Data berhasil diinput');
        }
    
        public function updateQuiz(Request $request, $id)
        {
            // dd($request);
            $questions = Question::findOrFail($request->id);
            $questions->update($request->all());
            return redirect('redirects/listexams')->with('sukses', 'Data berhasil diupdate');
        }
        public function destroyQuiz(Request $request, $id)
        {
            $questions = Question::findOrFail($request->id);
            $questions->delete();
            return redirect('redirects/listexams')->with('sukses', 'Data berhasil dihapus');
        }
    }
