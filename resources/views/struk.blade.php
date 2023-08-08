<!DOCTYPE html>
<html>
<head>
	<title>Struk Pemesanan</title>
	<link rel="stylesheet" type="text/css" href="style-struk.css">
</head>
<body>
	<div class="container">
		<h1>Struk Pemesanan</h1>

        <table class="table">
            @foreach ($data as $item)
                <tr>
                    <td><label for="">Kode Pesanan</label></td>
                    <td><input name="nama" type="text" class="form-control" disabled
                            value="{{ $item->kode_pesanan }}" /></td>
                </tr>
                <tr>
                    <td><label for="">Status Pesanan</label></td>
                    <td>{{ $item->status }}</td>
                </tr>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td><input name="nama" type="text" class="form-control" disabled
                            value="{{ $item->nama }}" /></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><input name="email" type="text" class="form-control" disabled
                            value="{{ $item->email }}" /></td>
                </tr>
                <tr>
                    <td><label for="">No HP</label></td>
                    <td><input name="nohp" type="text" class="form-control" disabled
                            value="{{ $item->nohp }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Alamat</label></td>
                    <td>
                        {{ $item->alamat }}
                    </td>
                </tr>
                <tr>
                    <td><label for="">Jenis Paket</label></td>
                    <td>
                        <input name="jenis_paket" type="text" class="form-control" disabled
                            value="Paket {{ $item->paket }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Harga</label></td>
                    <td>
                        <input name="harga" type="text" class="form-control" disabled
                            value="Rp. {{ $harga }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Jumlah Porsi</label></td>
                    <td>
                        <input name="jumlah_porsi" type="text" class="form-control" disabled
                            value="{{ $item->porsi }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Kategori</label></td>
                    <td>
                        <input name="kategori" type="text" class="form-control" disabled
                            value="{{ $item->kategori }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Pengambilan</label></td>
                    <td>
                        <input name="tanggal_pengambilan" type="text" class="form-control"
                            disabled value="{{ $item->tanggal_pengambilan }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Pemesanan</label></td>
                    <td>
                        <input name="tanggal_pemesanan" type="text" class="form-control" disabled
                            value="{{ $item->tanggal_pemesanan }}" />
                    </td>
                </tr>
                
                <tr>
                    <td><label for="">Metode Pickup</label></td>
                    <td>
                        <input name="metode_pickup" type="text" class="form-control" disabled
                            value="{{ $item->metode_pickup }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Total Pembayaran</label></td>
                    <td>
                        <input name="total_pembayaran" type="text" class="form-control" disabled
                            value="Rp. {{ $total_bayar }}" />
                    </td>
                </tr>
                <tr>
                    <td><label for="">Catatan</label></td>
                    <td>
                        {{ $item->catatan }}
                    </td>
                </tr>
            @endforeach

        </table>

	</div>

    <script>
		window.print();
	</script>

</body>
</html>
