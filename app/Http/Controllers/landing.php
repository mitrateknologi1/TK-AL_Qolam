<?php

namespace App\Http\Controllers;

use App\Models\ibu;
use App\Models\ayah;
use App\Models\wali;
use App\Models\peserta;
use App\Models\keluarga;
use App\Models\pendanaan;
use App\Models\pendahuluan;
use App\Models\surveitatib;
use Illuminate\Http\Request;
use App\Models\informasipribadi;
use App\Models\keteranganpribadi;
use Illuminate\Support\Facades\Auth;

class landing extends Controller
{
    public function daftarpeserta()
    {
         $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();

        // Jika peserta dengan user_id yang sama sudah ada
        if ($find->count() > 0) {
            // Anda dapat mengambil data peserta pertama dari hasil pencarian
            $peserta = $find->first();

            // Mengambil ID dari data peserta yang sudah ada
            $id = $peserta->id;
            $get = peserta::find($id);

            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-peserta', compact('get'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-peserta');
        }
    }

    public function daftarkeluarga()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getkeluarga = $get->id_keluarga;

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getkeluarga != Null) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-keluarga', compact('get','getkeluarga'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-keluarga');
        }
    }

    public function daftarpendahuluan()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getpendahuluan = $get->id_pendahuluan;

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getpendahuluan != Null) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-pendahuluan', compact('get','getpendahuluan'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-pendahuluan');
        }
    }

    public function daftarpribadi()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getpribadi = $get->id_pribadi;

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getpribadi != Null) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-pribadi', compact('get','getpribadi'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-pribadi');
        }
    }

    public function daftarsurvei()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getsurvei = $get->id_survei;

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getsurvei != Null) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-survei', compact('get','getsurvei'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-survei');
        }
    }

    public function daftarlain()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getidsurvei = $get->id_survei;
        $getsurvei = surveitatib::find($getidsurvei);

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getsurvei->kehadiran_dua_bulan != Null || $getsurvei->tatib_merokok != Null
            || $getsurvei->gizi_sehat != Null || $getsurvei->kontrol_pengembangan != Null
            || $getsurvei->kerja_sama != Null
        ) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-lain', compact('get','getidsurvei'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-lain');
        }
    }

    public function daftarpendanaan()
    {
        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $get = peserta::find($id);
        $getpendanaan = $get->id_pendanaan;

        // Jika peserta dengan user_id yang sama sudah ada
        if ($getpendanaan != Null) {
        
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return view('pages.update-pendanaan', compact('get','getpendanaan'));
        } else {
            // Jika peserta dengan user_id yang sama belum ada, tampilkan view "Add Data"
            return view('pages.daftar-pendanaan');
        }
    }

    public function visimisi()
    {
        return view('pages.visi-misi');
    }
    public function sejarah()
    {
        return view('pages.sejarah');
    }
    public function sarana()
    {
        return view('pages.sarana');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function struktur()
    {
        return view('pages.struktur');
    }
    public function jadwal()
    {
        return view('pages.jadwal');
    }
    public function kurikulum()
    {
        return view('pages.kurikulum');
    }

    public function store(Request $request){
   

    $this->validate($request, [

        // Peserta
        'nama_peserta' => 'required',
        'agama_peserta' => 'required',
        'jenis_kelamin' => 'required',
        'usia_peserta' => 'required',
        'tempat_lahir_peserta' => 'required',
        'tanggal_lahir_peserta' => 'required',
        'nama_panggilan' => 'required',
        'berat_badan' => 'required',
        'tinggi_badan' => 'required',
        'jumlah_saudara_kandung' => 'required',
        'jumlah_saudara_tiri' => 'nullable',
        'urutan_lahir' => 'required',
        'nama_saudara_dan_usia' => 'required',
        'alamat' => 'required',
        'alergi' => 'required',
        'penyakit' => 'required',
        'informasi' => 'required',
        'kategori_peserta' => 'required',
        'pindahan_tk' => 'nullable',
        'tanggal_pindahan' => 'nullable',
        'tanggal_diterima' => 'nullable',
        'kelompok' => 'nullable',

    ]);

        //Peserta
            $peserta = new peserta();
            $peserta->id_user = Auth::user()->id;
            $peserta->nama_lengkap = $request->nama_peserta;
            $peserta->agama = $request->agama_peserta;
            $peserta->jenis_kelamin = $request->jenis_kelamin;
            $peserta->tempat_lahir = $request->tempat_lahir_peserta;
            $peserta->tanggal_lahir = $request->tanggal_lahir_peserta;
            $peserta->usia = $request->usia_peserta;
            $peserta->nama_panggilan = $request->nama_panggilan;
            $peserta->berat_badan = $request->berat_badan;
            $peserta->tinggi_badan = $request->tinggi_badan;
            $peserta->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
            $peserta->jumlah_saudara_tiri = $request->jumlah_saudara_tiri;
            $peserta->urutan_lahir = $request->urutan_lahir;
            $peserta->nama_saudara_dan_usia = $request->nama_saudara_dan_usia;
            $peserta->alamat = $request->alamat;
            $peserta->alergi = $request->alergi;
            $peserta->penyakit = $request->penyakit;
            $peserta->informasi = $request->informasi;
            $peserta->kategori_peserta = $request->kategori_peserta;
            $peserta->pindahan_tk = $request->pindahan_tk;
            $peserta->tanggal_pindahan = $request->tanggal_pindahan;
            $peserta->tanggal_diterima = $request->tanggal_diterima;
            $peserta->kelompok = $request->kelompok;
            $peserta->status_all = "Pending";

        $peserta->save();

        return redirect('daftar-keluarga');
        }

    public function updatepeserta(Request $request, $id){
      
           

            $this->validate($request, [

                // Peserta
                'nama_peserta' => 'required',
                'agama_peserta' => 'required',
                'jenis_kelamin' => 'required',
                'usia_peserta' => 'required',
                'tempat_lahir_peserta' => 'required',
                'tanggal_lahir_peserta' => 'required',
                'nama_panggilan' => 'required',
                'berat_badan' => 'required',
                'tinggi_badan' => 'required',
                'jumlah_saudara_kandung' => 'required',
                'jumlah_saudara_tiri' => 'nullable',
                'urutan_lahir' => 'required',
                'nama_saudara_dan_usia' => 'required',
                'alamat' => 'required',
                'alergi' => 'required',
                'penyakit' => 'required',
                'informasi' => 'required',
                'kategori_peserta' => 'required',
                'pindahan_tk' => 'nullable',
                'tanggal_pindahan' => 'nullable',
                'tanggal_diterima' => 'nullable',
                'kelompok' => 'nullable',

            ]);

                $peserta = peserta::find($id);

                //Peserta
                $peserta->nama_lengkap = $request->nama_peserta;
                $peserta->agama = $request->agama_peserta;
                $peserta->jenis_kelamin = $request->jenis_kelamin;
                $peserta->tempat_lahir = $request->tempat_lahir_peserta;
                $peserta->tanggal_lahir = $request->tanggal_lahir_peserta;
                $peserta->usia = $request->usia_peserta;
                $peserta->nama_panggilan = $request->nama_panggilan;
                $peserta->berat_badan = $request->berat_badan;
                $peserta->tinggi_badan = $request->tinggi_badan;
                $peserta->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
                $peserta->jumlah_saudara_tiri = $request->jumlah_saudara_tiri;
                $peserta->urutan_lahir = $request->urutan_lahir;
                $peserta->nama_saudara_dan_usia = $request->nama_saudara_dan_usia;
                $peserta->alamat = $request->alamat;
                $peserta->alergi = $request->alergi;
                $peserta->penyakit = $request->penyakit;
                $peserta->informasi = $request->informasi;
                $peserta->kategori_peserta = $request->kategori_peserta;
                $peserta->pindahan_tk = $request->pindahan_tk;
                $peserta->tanggal_pindahan = $request->tanggal_pindahan;
                $peserta->tanggal_diterima = $request->tanggal_diterima;
                $peserta->kelompok = $request->kelompok;
                $peserta->status_all = "Pending";

            $peserta->update();

            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return redirect('daftar-keluarga');
        }

        public function storekeluarga(Request $request){
             
            $this->validate($request, [
                 // Ayah 
                'nama_ayah' => 'required',
                'agama_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'tanggal_lahir_ayah' => 'required',
                'tempat_lahir_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'alamat_ayah' => 'required',
                'alamat_kantor_ayah' => 'required',
                'nomor_telepon_rumah_ayah' => 'required',
                'nomor_telepon_kantor_ayah' => 'required',
                'no_whatsapp_ayah' => 'required',

                // Ibu
                'nama_ibu' => 'required',
                'agama_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'tanggal_lahir_ibu' => 'required',
                'tempat_lahir_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'alamat_ibu' => 'required',
                'alamat_kantor_ibu' => 'required',
                'nomor_telepon_rumah_ibu' => 'required',
                'nomor_telepon_kantor_ibu' => 'required',
                'no_whatsapp_ibu' => 'required',

                // Wali Opsional
                'nama_wali' => 'nullable',
                'agama_wali' => 'nullable',
                'pendidikan_wali' => 'nullable',
                'tanggal_lahir_wali' => 'nullable',
                'tempat_lahir_wali' => 'nullable',
                'pekerjaan_wali' => 'nullable',
                'alamat_wali' => 'nullable',
                'alamat_kantor_wali' => 'nullable',
                'nomor_telepon_rumah_wali' => 'nullable',
                'nomor_telepon_kantor_wali' => 'nullable',
                'no_whatsapp_wali' => 'nullable',
            ]);

            //Keluarga (ayah)
            $ayah = new ayah();
            $ayah->nama_lengkap = $request->nama_ayah;
            $ayah->agama = $request->agama_ayah;
            $ayah->pendidikan = $request->pendidikan_ayah;
            $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
            $ayah->tempat_lahir = $request->tempat_lahir_ayah;
            $ayah->pekerjaan = $request->pekerjaan_ayah;
            $ayah->alamat = $request->alamat_ayah;
            $ayah->alamat_kantor = $request->alamat_kantor_ayah;
            $ayah->nomor_telepon_rumah = $request->nomor_telepon_rumah_ayah;
            $ayah->nomor_telepon_kantor = $request->nomor_telepon_kantor_ayah;
            $ayah->no_whatsapp = $request->no_whatsapp_ayah;
            

        $ayah->save();

        //Keluarga (ibu)
            $ibu = new ibu();
            $ibu->nama_lengkap = $request->nama_ibu;
            $ibu->agama = $request->agama_ibu;
            $ibu->pendidikan = $request->pendidikan_ibu;
            $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
            $ibu->tempat_lahir = $request->tempat_lahir_ibu;
            $ibu->pekerjaan = $request->pekerjaan_ibu;
            $ibu->alamat = $request->alamat_ibu;
            $ibu->alamat_kantor = $request->alamat_kantor_ibu;
            $ibu->nomor_telepon_rumah = $request->nomor_telepon_rumah_ibu;
            $ibu->nomor_telepon_kantor = $request->nomor_telepon_kantor_ibu;
            $ibu->no_whatsapp = $request->no_whatsapp_ibu;
            

        $ibu->save();

        //Keluarga (wali)
            $wali = null; // Inisialisasi $wali sebagai null
            if (
                $request->filled('nama_wali') ||
                $request->filled('agama_wali') ||
                $request->filled('pendidikan_wali') ||
                $request->filled('tanggal_lahir_wali') ||
                $request->filled('tempat_lahir_wali') ||
                $request->filled('pekerjaan_wali') ||
                $request->filled('alamat_wali') ||
                $request->filled('alamat_kantor_wali') ||
                $request->filled('nomor_telepon_rumah_wali') ||
                $request->filled('nomor_telepon_kantor_wali') ||
                $request->filled('no_whatsapp_wali')
            ) {
                $wali = new Wali();
                $wali->nama_lengkap = $request->nama_wali;
                $wali->agama = $request->agama_wali;
                $wali->pendidikan = $request->pendidikan_wali;
                $wali->tanggal_lahir = $request->tanggal_lahir_wali;
                $wali->tempat_lahir = $request->tempat_lahir_wali;
                $wali->pekerjaan = $request->pekerjaan_wali;
                $wali->alamat = $request->alamat_wali;
                $wali->alamat_kantor = $request->alamat_kantor_wali;
                $wali->nomor_telepon_rumah = $request->nomor_telepon_rumah_wali;
                $wali->nomor_telepon_kantor = $request->nomor_telepon_kantor_wali;
                $wali->no_whatsapp = $request->no_whatsapp_wali;
        $wali->save();
            }

        // Keluarga
            $keluarga = new Keluarga();
            $keluarga->id_ayah = $ayah->id;
            $keluarga->id_ibu = $ibu->id;
            $keluarga->id_wali = $wali ? $wali->id : null; // Jika $wali tidak kosong, masukkan id wali, jika kosong, masukkan null

            // Simpan data keluarga
        $keluarga->save();

        $call = Auth::user()->id;

        // Mencari data peserta dengan user_id yang sama dengan $call
        $find = peserta::where('id_user', $call)->get();
        $peserta = $find->first();
        $id = $peserta->id;
        $update = peserta::find($id);
        $update->id_keluarga = $keluarga->id;
        $update->save();


         return redirect('daftar-pendahuluan');
        }

        public function updatekeluarga(Request $request, $id){
            
            $this->validate($request, [
                 // Ayah 
                'nama_ayah' => 'required',
                'agama_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'tanggal_lahir_ayah' => 'required',
                'tempat_lahir_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'alamat_ayah' => 'required',
                'alamat_kantor_ayah' => 'required',
                'nomor_telepon_rumah_ayah' => 'required',
                'nomor_telepon_kantor_ayah' => 'required',
                'no_whatsapp_ayah' => 'required',

                // Ibu
                'nama_ibu' => 'required',
                'agama_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'tanggal_lahir_ibu' => 'required',
                'tempat_lahir_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'alamat_ibu' => 'required',
                'alamat_kantor_ibu' => 'required',
                'nomor_telepon_rumah_ibu' => 'required',
                'nomor_telepon_kantor_ibu' => 'required',
                'no_whatsapp_ibu' => 'required',

                // Wali Opsional
                'nama_wali' => 'nullable',
                'agama_wali' => 'nullable',
                'pendidikan_wali' => 'nullable',
                'tanggal_lahir_wali' => 'nullable',
                'tempat_lahir_wali' => 'nullable',
                'pekerjaan_wali' => 'nullable',
                'alamat_wali' => 'nullable',
                'alamat_kantor_wali' => 'nullable',
                'nomor_telepon_rumah_wali' => 'nullable',
                'nomor_telepon_kantor_wali' => 'nullable',
                'no_whatsapp_wali' => 'nullable',
            ]);

        // Keluarga
            $keluarga = keluarga::find($id);
            $idayah = $keluarga->id_ayah;
            $idibu = $keluarga->id_ibu;
            $idwali = $keluarga->id_wali;

            if($keluarga){
                $ayah = ayah::find($idayah);
                $ibu = ibu::find($idibu);
                $wali = wali::find($idwali);

                //Keluarga (ayah)
                $ayah->nama_lengkap = $request->nama_ayah;
                $ayah->agama = $request->agama_ayah;
                $ayah->pendidikan = $request->pendidikan_ayah;
                $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
                $ayah->tempat_lahir = $request->tempat_lahir_ayah;
                $ayah->pekerjaan = $request->pekerjaan_ayah;
                $ayah->alamat = $request->alamat_ayah;
                $ayah->alamat_kantor = $request->alamat_kantor_ayah;
                $ayah->nomor_telepon_rumah = $request->nomor_telepon_rumah_ayah;
                $ayah->nomor_telepon_kantor = $request->nomor_telepon_kantor_ayah;
                $ayah->no_whatsapp = $request->no_whatsapp_ayah;

                $ayah->update();

                //Keluarga (ibu)
                $ibu->nama_lengkap = $request->nama_ibu;
                $ibu->agama = $request->agama_ibu;
                $ibu->pendidikan = $request->pendidikan_ibu;
                $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
                $ibu->tempat_lahir = $request->tempat_lahir_ibu;
                $ibu->pekerjaan = $request->pekerjaan_ibu;
                $ibu->alamat = $request->alamat_ibu;
                $ibu->alamat_kantor = $request->alamat_kantor_ibu;
                $ibu->nomor_telepon_rumah = $request->nomor_telepon_rumah_ibu;
                $ibu->nomor_telepon_kantor = $request->nomor_telepon_kantor_ibu;
                $ibu->no_whatsapp = $request->no_whatsapp_ibu;

                $ibu->update();

                //Keluarga (wali)
                $wali->nama_lengkap = $request->nama_wali;
                $wali->agama = $request->agama_wali;
                $wali->pendidikan = $request->pendidikan_wali;
                $wali->tanggal_lahir = $request->tanggal_lahir_wali;
                $wali->tempat_lahir = $request->tempat_lahir_wali;
                $wali->pekerjaan = $request->pekerjaan_wali;
                $wali->alamat = $request->alamat_wali;
                $wali->alamat_kantor = $request->alamat_kantor_wali;
                $wali->nomor_telepon_rumah = $request->nomor_telepon_rumah_wali;
                $wali->nomor_telepon_kantor = $request->nomor_telepon_kantor_wali;
                $wali->no_whatsapp = $request->no_whatsapp_wali;

                $wali->update();
            }

         return redirect('daftar-pendahuluan');
        }

        public function storependahuluan(Request $request){
   

        $this->validate($request, [

             // pendahuluan
            'latar_belakang' => 'required',
            'harapan_keilmuan' => 'required',
            'harapan_keilmuan_agama' => 'required',
            'harapan_keilmuan_sosial' => 'required',
            'jangka_waktu_belajar' => 'required',
        ]);

            //Pendahuluan

            $pendahuluan = new pendahuluan();
            $pendahuluan->latar_belakang = $request->latar_belakang;
            $pendahuluan->harapan_keilmuan = $request->harapan_keilmuan;
            $pendahuluan->harapan_keilmuan_agama = $request->harapan_keilmuan_agama;
            $pendahuluan->harapan_keilmuan_sosial = $request->harapan_keilmuan_sosial;
            $pendahuluan->jangka_waktu_belajar = $request->jangka_waktu_belajar;

            $pendahuluan->save();

            $call = Auth::user()->id;

            // Mencari data peserta dengan user_id yang sama dengan $call
            $find = peserta::where('id_user', $call)->get();
            $peserta = $find->first();
            $id = $peserta->id;
            $update = peserta::find($id);
            $update->id_pendahuluan = $pendahuluan->id;
            $update->save();

            return redirect('daftar-pribadi');
        }

        public function updatependahuluan(Request $request, $id){
      
           

            $this->validate($request, [

             // pendahuluan
            'latar_belakang' => 'required',
            'harapan_keilmuan' => 'required',
            'harapan_keilmuan_agama' => 'required',
            'harapan_keilmuan_sosial' => 'required',
            'jangka_waktu_belajar' => 'required',
        ]);

                $pendahuluan = pendahuluan::find($id);

                //Peserta
                $pendahuluan->latar_belakang = $request->latar_belakang;
                $pendahuluan->harapan_keilmuan = $request->harapan_keilmuan;
                $pendahuluan->harapan_keilmuan_agama = $request->harapan_keilmuan_agama;
                $pendahuluan->harapan_keilmuan_sosial = $request->harapan_keilmuan_sosial;
                $pendahuluan->jangka_waktu_belajar = $request->jangka_waktu_belajar;

            $pendahuluan->update();

            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return redirect('daftar-pribadi');
        }

        public function storepribadi(Request $request){
   

        $this->validate($request, [

            // pribadi
        'kemampuan_membaca_latin' => 'required',
        'kemampuan_membaca_hijaiyah' => 'required',
        'kemampuan_menggambar' => 'required',
        'kemampuan_angka' => 'required',
        'judul_buku_latin' => 'required',
        'kemampuan_menulis' => 'required',
        'kemampuan_berhitung' => 'required',
        'tata_cara_berwudhu' => 'required',
        'tata_cara_solat' => 'required',
        'hafalan_juzamma' => 'required',
        'hafalan_doa' => 'required',
        'doa_harian_hafal' => 'required',
        'hobi' => 'required',
        'hafal_murotal' => 'required',
        'berlangganan_majalah' => 'required',

        'tinggal_bersama' => 'required',
        'jumlah_penghuni_dewasa' => 'required',
        'jumlah_penghuni_anak' => 'required',
        'halaman_bermain' => 'required',
        'kesempatan_bergaul' => 'required',
        'selera_makan' => 'required',
        'hubungan_ayah' => 'required',
        'hubungan_ibu' => 'required',
        'hubungan_saudara' => 'required',
        'kemampuan_buang_air' => 'required',
        'kebiasan_tidur_malam' => 'required',
        'kebiasan_bangun_pagi' => 'required',
        'kebiasaan_ngompol' => 'required',
        'hal_penting_waktu_tidur' => 'required',
        'kepatuhan_anak' => 'required',
        'hal_penting_tingkahlaku_anak' => 'required',
        'mudah_bergaul' => 'required',
        'sifat_baik' => 'required',
        'sifat_buruk' => 'required',
        'pembantu_rumah_tangga' => 'required',
        'peralatan_elektronik' => 'required'

        ]);

            //Pendahuluan

             //Pribadi

                $pribadi = new keteranganpribadi();
                $pribadi->kemampuan_membaca_latin = $request->kemampuan_membaca_latin;
                $pribadi->kemampuan_membaca_hijaiyah = $request->kemampuan_membaca_hijaiyah;
                $pribadi->kemampuan_menggambar = $request->kemampuan_menggambar;
                $pribadi->kemampuan_angka = $request->kemampuan_angka;
                $pribadi->judul_buku_latin = $request->judul_buku_latin;
                $pribadi->kemampuan_menulis = $request->kemampuan_menulis;
                $pribadi->kemampuan_berhitung = $request->kemampuan_berhitung;
                $pribadi->tata_cara_berwudhu = $request->tata_cara_berwudhu;
                $pribadi->tata_cara_solat = $request->tata_cara_solat;
                $pribadi->hafalan_juzamma = $request->hafalan_juzamma;
                $pribadi->hafalan_doa = $request->hafalan_doa;
                $pribadi->doa_harian_hafal = $request->doa_harian_hafal;
                $pribadi->hobi = $request->hobi;
                $pribadi->hafal_murotal = $request->hafal_murotal;
                $pribadi->berlangganan_majalah = $request->berlangganan_majalah;
         

            $pribadi->save();

                $informasi = new informasipribadi();
                $informasi->id_pribadi = $pribadi->id;
                $informasi->tinggal_bersama = $request->tinggal_bersama;
                $informasi->jumlah_penghuni_dewasa = $request->jumlah_penghuni_dewasa;
                $informasi->jumlah_penghuni_anak = $request->jumlah_penghuni_anak;
                $informasi->halaman_bermain = $request->halaman_bermain;
                $informasi->kesempatan_bergaul = $request->kesempatan_bergaul;
                $informasi->selera_makan = $request->selera_makan;
                $informasi->hubungan_ayah = $request->hubungan_ayah;
                $informasi->hubungan_ibu = $request->hubungan_ibu;
                $informasi->hubungan_saudara = $request->hubungan_saudara;
                $informasi->kemampuan_buang_air = $request->kemampuan_buang_air;
                $informasi->kebiasan_tidur_malam = $request->kebiasan_tidur_malam;
                $informasi->kebiasan_bangun_pagi = $request->kebiasan_bangun_pagi;
                $informasi->kebiasan_tidur_siang = $request->kebiasan_tidur_siang;
                $informasi->kebiasaan_ngompol = $request->kebiasaan_ngompol;
                $informasi->hal_penting_waktu_tidur = $request->hal_penting_waktu_tidur;
                $informasi->kepatuhan_anak = $request->kepatuhan_anak;
                $informasi->hal_penting_tingkahlaku_anak = $request->hal_penting_tingkahlaku_anak;
                $informasi->mudah_bergaul = $request->mudah_bergaul;
                $informasi->sifat_baik = $request->sifat_baik;
                $informasi->sifat_buruk = $request->sifat_buruk;
                $informasi->pembantu_rumah_tangga = $request->pembantu_rumah_tangga;
                $informasi->peralatan_elektronik = $request->peralatan_elektronik;

            $informasi->save();

            $call = Auth::user()->id;

            // Mencari data peserta dengan user_id yang sama dengan $call
            $find = peserta::where('id_user', $call)->get();
            $peserta = $find->first();
            $id = $peserta->id;
            $update = peserta::find($id);
            $update->id_pribadi = $informasi->id;
            $update->save();

            return redirect('daftar-survei');
        }

        public function updatepribadi(Request $request, $id){
      
        $this->validate($request, [

            // pribadi
        'kemampuan_membaca_latin' => 'required',
        'kemampuan_membaca_hijaiyah' => 'required',
        'kemampuan_menggambar' => 'required',
        'kemampuan_angka' => 'required',
        'judul_buku_latin' => 'required',
        'kemampuan_menulis' => 'required',
        'kemampuan_berhitung' => 'required',
        'tata_cara_berwudhu' => 'required',
        'tata_cara_solat' => 'required',
        'hafalan_juzamma' => 'required',
        'hafalan_doa' => 'required',
        'doa_harian_hafal' => 'required',
        'hobi' => 'required',
        'hafal_murotal' => 'required',
        'berlangganan_majalah' => 'required',

        'tinggal_bersama' => 'required',
        'jumlah_penghuni_dewasa' => 'required',
        'jumlah_penghuni_anak' => 'required',
        'halaman_bermain' => 'required',
        'kesempatan_bergaul' => 'required',
        'selera_makan' => 'required',
        'hubungan_ayah' => 'required',
        'hubungan_ibu' => 'required',
        'hubungan_saudara' => 'required',
        'kemampuan_buang_air' => 'required',
        'kebiasan_tidur_malam' => 'required',
        'kebiasan_bangun_pagi' => 'required',
        'kebiasaan_ngompol' => 'required',
        'hal_penting_waktu_tidur' => 'required',
        'kepatuhan_anak' => 'required',
        'hal_penting_tingkahlaku_anak' => 'required',
        'mudah_bergaul' => 'required',
        'sifat_baik' => 'required',
        'sifat_buruk' => 'required',
        'pembantu_rumah_tangga' => 'required',
        'peralatan_elektronik' => 'required'

        ]);

        
        $pribadi = keteranganpribadi::find($id);

        $pribadi->kemampuan_membaca_latin = $request->kemampuan_membaca_latin;
        $pribadi->kemampuan_membaca_hijaiyah = $request->kemampuan_membaca_hijaiyah;
        $pribadi->kemampuan_menggambar = $request->kemampuan_menggambar;
        $pribadi->kemampuan_angka = $request->kemampuan_angka;
        $pribadi->judul_buku_latin = $request->judul_buku_latin;
        $pribadi->kemampuan_menulis = $request->kemampuan_menulis;
        $pribadi->kemampuan_berhitung = $request->kemampuan_berhitung;
        $pribadi->tata_cara_berwudhu = $request->tata_cara_berwudhu;
        $pribadi->tata_cara_solat = $request->tata_cara_solat;
        $pribadi->hafalan_juzamma = $request->hafalan_juzamma;
        $pribadi->hafalan_doa = $request->hafalan_doa;
        $pribadi->doa_harian_hafal = $request->doa_harian_hafal;
        $pribadi->hobi = $request->hobi;
        $pribadi->hafal_murotal = $request->hafal_murotal;
        $pribadi->berlangganan_majalah = $request->berlangganan_majalah;
        
        $find = informasipribadi::where('id_pribadi', $id)->get();
        $get = $find->first();
        $idref = $get->id;

        $informasi = informasipribadi::find($idref);

        $informasi->tinggal_bersama = $request->tinggal_bersama;
        $informasi->jumlah_penghuni_dewasa = $request->jumlah_penghuni_dewasa;
        $informasi->jumlah_penghuni_anak = $request->jumlah_penghuni_anak;
        $informasi->halaman_bermain = $request->halaman_bermain;
        $informasi->kesempatan_bergaul = $request->kesempatan_bergaul;
        $informasi->selera_makan = $request->selera_makan;
        $informasi->hubungan_ayah = $request->hubungan_ayah;
        $informasi->hubungan_ibu = $request->hubungan_ibu;
        $informasi->hubungan_saudara = $request->hubungan_saudara;
        $informasi->kemampuan_buang_air = $request->kemampuan_buang_air;
        $informasi->kebiasan_tidur_malam = $request->kebiasan_tidur_malam;
        $informasi->kebiasan_bangun_pagi = $request->kebiasan_bangun_pagi;
        $informasi->kebiasan_tidur_siang = $request->kebiasan_tidur_siang;
        $informasi->kebiasaan_ngompol = $request->kebiasaan_ngompol;
        $informasi->hal_penting_waktu_tidur = $request->hal_penting_waktu_tidur;
        $informasi->kepatuhan_anak = $request->kepatuhan_anak;
        $informasi->hal_penting_tingkahlaku_anak = $request->hal_penting_tingkahlaku_anak;
        $informasi->mudah_bergaul = $request->mudah_bergaul;
        $informasi->sifat_baik = $request->sifat_baik;
        $informasi->sifat_buruk = $request->sifat_buruk;
        $informasi->pembantu_rumah_tangga = $request->pembantu_rumah_tangga;
        $informasi->peralatan_elektronik = $request->peralatan_elektronik;

        $informasi->update();

        $pribadi->update();



        // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
        return redirect('daftar-survei');
        }

        public function storesurvei(Request $request){
   

        $this->validate($request, [

            // Survei
            'tidak_boleh_ditunggu' => 'required',
            'berpakaian_islami' => 'required',
            'larangan_berpakaian_perhiasan' => 'required',
        ]);

            //Survei

            $survei = new surveitatib();
            $survei->tidak_boleh_ditunggu = $request->tidak_boleh_ditunggu;
            $survei->berpakaian_islami = $request->berpakaian_islami;
            $survei->larangan_berpakaian_perhiasan = $request->larangan_berpakaian_perhiasan;

            $survei->save();

            $call = Auth::user()->id;

            // Mencari data peserta dengan user_id yang sama dengan $call
            $find = peserta::where('id_user', $call)->get();
            $peserta = $find->first();
            $id = $peserta->id;
            $update = peserta::find($id);
            $update->id_survei = $survei->id;
            $update->save();

            return redirect('daftar-lain');
        }

        public function updatesurvei(Request $request, $id){
      
        $this->validate($request, [

            // Survei
            'tidak_boleh_ditunggu' => 'required',
            'berpakaian_islami' => 'required',
            'larangan_berpakaian_perhiasan' => 'required',
        ]);

                $survei = surveitatib::find($id);

                //Survei
                $survei->tidak_boleh_ditunggu = $request->tidak_boleh_ditunggu;
                $survei->berpakaian_islami = $request->berpakaian_islami;
                $survei->larangan_berpakaian_perhiasan = $request->larangan_berpakaian_perhiasan;

            $survei->update();

            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return redirect('daftar-lain');
        }

        public function storelain(Request $request){
   

        $this->validate($request, [

            // Survei
            'kehadiran_dua_bulan' => 'required',
            'tatib_merokok' => 'required',
            'gizi_sehat' => 'required',
            'kontrol_pengembangan' => 'required',
            'kerja_sama' => 'required',
        ]);

            $call = Auth::user()->id;

            $find = peserta::where('id_user', $call)->get();
            $peserta = $find->first();
            $id = $peserta->id;
            $update = peserta::find($id);
            $getid = $update->id_survei;

            //Survei

            $survei = surveitatib::find($getid);

            $survei->kehadiran_dua_bulan = $request->kehadiran_dua_bulan;
            $survei->tatib_merokok = $request->tatib_merokok;
            $survei->gizi_sehat = $request->gizi_sehat;
            $survei->kontrol_pengembangan = $request->kontrol_pengembangan;
            $survei->kerja_sama = $request->kerja_sama;

            $survei->update();

            return redirect('daftar-pendanaan');
        }

        public function updatelain(Request $request, $id){
      
        $this->validate($request, [

            // Survei
            'kehadiran_dua_bulan' => 'required',
            'tatib_merokok' => 'required',
            'gizi_sehat' => 'required',
            'kontrol_pengembangan' => 'required',
            'kerja_sama' => 'required',
        ]);

                $survei = surveitatib::find($id);

                //Survei
                $survei->kehadiran_dua_bulan = $request->kehadiran_dua_bulan;
                $survei->tatib_merokok = $request->tatib_merokok;
                $survei->gizi_sehat = $request->gizi_sehat;
                $survei->kontrol_pengembangan = $request->kontrol_pengembangan;
                $survei->kerja_sama = $request->kerja_sama;

            $survei->update();

            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return redirect('daftar-pendanaan');
        }

        public function storependanaan(Request $request){
   

        $this->validate($request, [

        // pendanaan
        'pemasukan_ortu' => 'required',
        'kenaikan_konsumsi' => 'required',
        'infaq' => 'required'
        ]);

            //Survei

            //Pendanaan

            $pendanaan = new pendanaan();
            $pendanaan->pemasukan_ortu =  $request->pemasukan_ortu;
            $pendanaan->kenaikan_konsumsi =  $request->kenaikan_konsumsi;
            $pendanaan->infaq =  $request->infaq;
           

            $pendanaan->save();

            $call = Auth::user()->id;

            // Mencari data peserta dengan user_id yang sama dengan $call
            $find = peserta::where('id_user', $call)->get();
            $peserta = $find->first();
            $id = $peserta->id;
            $update = peserta::find($id);
            $update->id_pendanaan = $pendanaan->id;
            $update->save();

             // Flash a success message to the session
            session()->flash('success', 'Data sudah didaftar. Silahkan cek email secara berkala 2x24 jam.');

            return redirect('/');
        }

        public function updatependanaan(Request $request, $id){
      
        $this->validate($request, [

            // pendanaan
            'pemasukan_ortu' => 'required',
            'kenaikan_konsumsi' => 'required',
            'infaq' => 'required'
        ]);

                $pendanaan = pendanaan::find($id);

                //Survei
                $pendanaan->pemasukan_ortu =  $request->pemasukan_ortu;
                $pendanaan->kenaikan_konsumsi =  $request->kenaikan_konsumsi;
                $pendanaan->infaq =  $request->infaq;

            $pendanaan->update();
             // Flash a success message to the session
            session()->flash('success', 'Data sudah diupdate. Silahkan cek email secara berkala 2x24 jam kalau perlu sampe mati.');
            // Kemudian, tampilkan view "Update Data" dan kirimkan data peserta dan ID
            return redirect('/');
        }

}
