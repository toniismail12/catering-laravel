<!DOCTYPE html>
<html>
<head>
	<title>Struk Sewa Alat</title>
	<link rel="stylesheet" type="text/css" href="style-struk.css">
</head>
<body>
	<div class="container">
		<h1>Struk Pemesanan Sewa Alat</h1>

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
                    <td><label for="">Kategori</label></td>
                    <td>
                        <input name="kategori" type="text" class="form-control" disabled
                            value="{{ $item->kategori }}" />
                    </td>
                </tr>
                @if ($item->kategori == 'satuan')
                <tr>
                    <td><label for="">Jenis Alat Disewa</label></td>
                    <td>
                        <ul style="list-style-type: none; margin: 0; padding: 0;">
                            @foreach ($alat as $item2)
                                <li>
                                    <input name="alat[]" type="checkbox" value="{{ $item2->id }}" checked disabled /> {{ $item2->nama }} Rp. {{ $item2->harga }} x {{ $item2->jumlah }} = {{ $item2->harga*$item2->jumlah }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                {{-- <tr>
                    <td><label for="">Jumlah Bayar</label></td>
                    <td>
                        <ul style="list-style-type: none; margin: 0; padding: 0;">
                            @foreach ($alat as $item2)
                                <li>
                                    {{ $item2->nama }} Rp. {{ $item2->harga*$item2->jumlah }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr> --}}
                    
                @endif
                
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
                        Rp.  {{ $item->kategori == 'satuan' ? $total_bayar : '500000' }}
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
