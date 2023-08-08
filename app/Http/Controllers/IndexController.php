<?php

namespace App\Http\Controllers;

use App\Models\JenisAlatDisewa;
use App\Models\PaketCatering;
use App\Models\PesananALat;
use App\Models\PesananMasuk;
use App\Models\SewaAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index(){
        return view('index',[
            'data_nasi_kotak' => PaketCatering::Where('kategori','nasi-kotak')->orderBy('id', 'asc')->get(),
            'data_prasmanan' => PaketCatering::Where('kategori','prasmanan')->orderBy('id', 'asc')->get(),
            'sewa_alat_satuan' => SewaAlat::Where('kategory','satuan')->orderBy('id', 'asc')->get(),
            'sewa_alat_permeja' => SewaAlat::Where('kategory','permeja')->orderBy('id', 'asc')->get(),
        ]);
    }

    public function detail_paket(Request $request){

        return view('detail-paket',[
            'data' => PaketCatering::Where('uuid', $request->uuid)->get(),
        ]);
    }

    public function pesan_paket(){

        return view('pesan-paket',[
            'paket' => PaketCatering::all(),
        ]);
    }

    public function simpan_pesan_paket(Request $request){

        $paket = PaketCatering::Where('uuid', $request->paket)->first();

        $uuid = Str::uuid();

        $nohp = strlen($request->nohp);

        if($nohp > 11) {
            return redirect("/pesan-paket")->with('danger', "panjang maksimal no hp 13 character.");
        } 

        if($nohp < 9) {
            return redirect("/pesan-paket")->with('danger', "panjang minimal no hp 11 character.");
        } 

        if($request->porsi < 20) {
            return redirect("/pesan-paket")->with('danger', "jumlah porsi minimal 20.");
        }

        PesananMasuk::create([
            "uuid"=>$uuid,
            "nama"=>$request->nama,
            "email"=>$request->email,
            "nohp"=>"08".$request->nohp,
            "paket"=>$paket->paket,
            "porsi"=>$request->porsi,
            "kategori"=>$paket->kategori, 
            "alamat"=>$request->alamat,
            "tanggal_pengambilan"=>$request->tanggal_pengambilan,
            "tanggal_pemesanan"=>date("Y-m-d"),
            "metode_pickup"=>$request->metode_pickup,
            "status"=>"menunggu-pembayaran",
            "kode_pesanan"=>Str::random(7),
            "bukti_bayar"=>"-",
            "catatan"=>$request->catatan,
        ]);
       
        return redirect("/detail-pesanan?uuid=".$uuid)->with('success', "berhasil melakukan pemesanan.");
        
    }

    public function detail_pesan_paket(Request $request){

        $detail = PesananMasuk::Where('uuid', $request->uuid)->first();

        $paket = PaketCatering::Where('paket', $detail->paket)->Where('kategori', $detail->kategori)->first();

        $total_bayar = $paket->harga * $detail->porsi; 

        return view('detail-pesanan',[
            'data' => PesananMasuk::Where('uuid', $request->uuid)->get(),
            'total_bayar'=> $total_bayar,
            'uuid' => $detail->uuid,
        ]);
        
    }

    public function cetak_struk(Request $request){

        $detail = PesananMasuk::Where('uuid', $request->uuid)->first();

        $paket = PaketCatering::Where('paket', $detail->paket)->Where('kategori', $detail->kategori)->first();

        $total_bayar = $paket->harga * $detail->porsi; 

        return view('struk',[
            'data' => PesananMasuk::Where('uuid', $request->uuid)->get(),
            'harga' =>  $paket->harga,
            'total_bayar'=> $total_bayar,
            'uuid' => $detail->uuid,
        ]);
        
    }

    public function pembayaran(){

        return view('pembayaran');
    }

    public function kirim_pembayaran(Request $request){

        $extension = $request->file('image')->extension();

        if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png'){

            if($request->pembayaran == 'catering') {
                $detail = PesananMasuk::Where('kode_pesanan', $request->kode_pesanan)->count();

                if($detail < 1 ) {
                    return redirect('/pembayaran')->with('danger', 'Maaf kode pesanan tidak ditemukan.');
                }
            }

            if($request->pembayaran == 'sewa-alat') {
                $detail = PesananALat::Where('kode_pesanan', $request->kode_pesanan)->count();

                if($detail < 1 ) {
                    return redirect('/pembayaran')->with('danger', 'Maaf kode pesanan tidak ditemukan.');
                }
            }

            $img = $request->file('image');
            
            $img_name = '';

            if($img){
                $img_name = $request->file('image')->store('img-bukti-bayar');
            }
            if($img == null){
                $img_name = $request->old_image;
            }

            if($request->pembayaran == 'catering') {
                PesananMasuk::where('kode_pesanan', $request->kode_pesanan)->update([
                    'status' => 'menunggu-konfirmasi',
                    'bukti_bayar' => $img_name,
                ]);
            }

            if($request->pembayaran == 'sewa-alat') {
                PesananALat::where('kode_pesanan', $request->kode_pesanan)->update([
                    'status' => 'menunggu-konfirmasi',
                    'bukti_bayar' => $img_name,
                ]);
            }

            return redirect('/pembayaran')->with('success', 'Berhasil kirim bukti transfer. Cek status pesanan kamu di menu Status Pesanan.');
        }

        return redirect('/pembayaran')->with('danger', 'Maaf format file tidak diizinkan.');

    }

    public function status_pesanan(Request $request){

        if ($request->pembayaran == 'catering'){

            $detail = PesananMasuk::Where('kode_pesanan', $request->kode_pesanan)->count();

            if($detail < 1 ) {
                return view('status-pesanan',[
                    'data' =>[],
                    'uuid' => '0',
                    'data2' => [],
                    'alat' => [],
                    'harga' =>  '0',
                    'total_bayar'=> '0',
                    'pembayaran'=>$request->pembayaran,
                ]);
            }

        }

        if ($request->pembayaran == 'sewa-alat'){

            $detail = PesananALat::Where('kode_pesanan', $request->kode_pesanan)->count();

            if($detail < 1 ) {
                return view('status-pesanan',[
                    'data' =>[],
                    'uuid' => '0',
                    'data2' => [],
                    'alat' => [],
                    'harga' =>  '0',
                    'total_bayar'=> '0',
                    'pembayaran'=>$request->pembayaran,
                ]);
            }

        }

        if($request->kode_pesanan == null){

            return view('status-pesanan',[
                'data' =>[],
                'uuid' => '0',
                'data2' => [],
                'alat' => [],
                'harga' =>  '0',
                'total_bayar'=> '0',
                'pembayaran'=>$request->pembayaran,
            ]);
        }

        if ($request->pembayaran == 'catering'){

            $detail = PesananMasuk::Where('kode_pesanan', $request->kode_pesanan)->first();

            $paket = PaketCatering::Where('paket', $detail->paket)->Where('kategori', $detail->kategori)->first();

            $total_bayar = $paket->harga * $detail->porsi; 

            return view('status-pesanan',[
                'data' => PesananMasuk::Where('kode_pesanan', $request->kode_pesanan)->get(),
                'uuid' => $detail->uuid,
                'data2' => [],
                'alat' => [],
                'harga' =>  $paket->harga,
                'total_bayar'=> $total_bayar,
                'pembayaran'=>$request->pembayaran,
                
            ]);

        }

        if ($request->pembayaran == 'sewa-alat'){

            $kode = PesananALat::Where('kode_pesanan', $request->kode_pesanan)->first();

            $alats = JenisAlatDisewa::Where('uuid_pesanan', $kode->uuid)->get();

            $jumlah[]=0;

            foreach($alats as $key => $value){

                $jumlah[] = $value->harga * $value->jumlah;

            }

            return view('status-pesanan',[
                'data' => [],
                'uuid' => $kode->uuid,
                'data2'=> PesananALat::Where('kode_pesanan', $request->kode_pesanan)->get(),
                'alat' => $alats,
                'harga' => '0',
                'total_bayar'=> array_sum($jumlah),
                'pembayaran'=>$request->pembayaran,
            ]);
            
        }

    }

    public function bukti_transfer(Request $request){

        if ($request->pembayaran == 'catering'){
            $detail = PesananMasuk::Where('uuid', $request->uuid)->first();

            return view('bukti-transfer',[
                'image' => $detail->bukti_bayar,
            ]);
        }
        
        if ($request->pembayaran == 'sewa-alat'){
            $detail = PesananALat::Where('uuid', $request->uuid)->first();

            return view('bukti-transfer',[
                'image' => $detail->bukti_bayar,
            ]);
        }
        
    }

    public function pesan_alat_satuan(){

        return view('pesan-alat-satuan',[
            'alat' => SewaAlat::Where('kategory', 'satuan')->get(),
        ]);
    }

    public function pesan_alat_permeja(){

        return view('pesan-alat-permeja');
    }

    public function simpan_pesan_alat_satuan(Request $request){

        if($request->alat == null){
            return redirect('/pesan-alat-satuan')->with('danger', 'Mohon pilih minimal 1 alat.');
        }

        $nohp = strlen($request->nohp);

        if($nohp > 11) {
            return redirect("/pesan-alat-satuan")->with('danger', "panjang maksimal no hp 13 character.");
        } 

        if($nohp < 9) {
            return redirect("/pesan-alat-satuan")->with('danger', "panjang minimal no hp 11 character.");
        } 

        $uuid = Str::uuid();

        PesananALat::create([
            "uuid"=>$uuid,
            "nama"=>$request->nama,
            "email"=>$request->email,
            "nohp"=>"08".$request->nohp,
            "kategori"=>'satuan', 
            "alamat"=>$request->alamat,
            "tanggal_pengambilan"=>$request->tanggal_pengambilan,
            "tanggal_pemesanan"=>date("Y-m-d"),
            "metode_pickup"=>$request->metode_pickup,
            "status"=>"menunggu-pembayaran",
            "kode_pesanan"=>Str::random(7),
            "bukti_bayar"=>"-",
        ]);

        $data = SewaAlat::WhereIn('id', $request->alat)->get();

        foreach($data as $key => $value){
           
            JenisAlatDisewa::create([
                'uuid'=>$value->uuid,
                'uuid_pesanan'=>$uuid,
                'nama'=>$value->nama_alat,
                'harga'=>$value->biaya,
                'jumlah'=>'1',
            ]);

        }

        return redirect('/masukan-jumlah-pesan-alat?uuid_pesanan='.$uuid);
        
    }

    public function simpan_pesan_alat_permeja(Request $request){

        $uuid = Str::uuid();

        $nohp = strlen($request->nohp);

        if($nohp > 11) {
            return redirect("/pesan-alat-satuan")->with('danger', "panjang maksimal no hp 13 character.");
        } 

        if($nohp < 9) {
            return redirect("/pesan-alat-satuan")->with('danger', "panjang minimal no hp 11 character.");
        } 

        PesananALat::create([
            "uuid"=>$uuid,
            "nama"=>$request->nama,
            "email"=>$request->email,
            "nohp"=>"08".$request->nohp,
            "kategori"=>'permeja', 
            "alamat"=>$request->alamat,
            "tanggal_pengambilan"=>$request->tanggal_pengambilan,
            "tanggal_pemesanan"=>date("Y-m-d"),
            "metode_pickup"=>$request->metode_pickup,
            "status"=>"menunggu-pembayaran",
            "kode_pesanan"=>Str::random(7),
            "bukti_bayar"=>"-",
        ]);

        return redirect('/detail-pesan-alat-satuan?uuid='.$uuid)->with('success', 'Berhasil Melakukan Pemesanan.');
        
    }

    public function masukan_jumlah_pesan_alat(Request $request){

        return view('masukan-jumlah-pesan-alat',[
            'uuid' => $request->uuid_pesanan,
            'alat' => JenisAlatDisewa::Where('uuid_pesanan', $request->uuid_pesanan)->get(),
        ]);
        
    }

    public function update_jumlah_pesan_alat(Request $request, $uuid){

        $arr = $request->all();

        foreach($arr as $key => $value){

            JenisAlatDisewa::where('id', $key)->update([
                'jumlah' => $value,
            ]);

        }
        
        return redirect('/detail-pesan-alat-satuan?uuid='.$uuid)->with('success', 'Berhasil Melakukan Pemesanan.');
    }

    public function detail_pesan_alat_satuan(Request $request){

        $alats = JenisAlatDisewa::Where('uuid_pesanan', $request->uuid)->get();

        $jumlah[]=0;

        foreach($alats as $key => $value){

            $jumlah[] = $value->harga * $value->jumlah;

        }

        return view('detail-pesan-alat-satuan',[
            'uuid' => $request->uuid,
            'data'=> PesananALat::Where('uuid', $request->uuid)->get(),
            'alat' => $alats,
            'total_bayar'=> array_sum($jumlah),
        ]);
    }

    public function cetak_struk_alat_satuan(Request $request){

        $alats = JenisAlatDisewa::Where('uuid_pesanan', $request->uuid)->get();

        $jumlah[]=0;

        foreach($alats as $key => $value){

            $jumlah[] = $value->harga * $value->jumlah;

        }

        return view('cetak-struk-alat-satuan',[
            'uuid' => $request->uuid,
            'data'=> PesananALat::Where('uuid', $request->uuid)->get(),
            'alat' => $alats,
            'total_bayar'=> array_sum($jumlah),
        ]);
    }

    public function lupa_password(){
        return view('lupa-password');
    }
   
}
