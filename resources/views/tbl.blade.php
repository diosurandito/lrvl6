<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>coba tabel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/dataTables.fixedColumns.min.css')}}">

	<script type="text/javascript" src="{{ asset('public/js/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/js/dataTables.fixedColumns.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#example').DataTable( {
				scrollY:        '70vh',
				scrollX:        true,
				scrollCollapse: true,
				paging:         true,
				pageLength: 50,
				fixedColumns:   {
					leftColumns: 3
				}
			} );
		} );
	</script>
	<style type="text/css">
		th, td { white-space: nowrap; }
		div.dataTables_wrapper {
			width: 86%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1 align="center">Data Purchase Order (PO)</h1>
	<table id="example" class="stripe row-border order-column" style=""> <thead class="thead-dark">
		<tr>
			<th width="30" style="font-size: 15px;">No</th>
			<th width="50" style="font-size: 15px;">No. PO</th>
			<th style="font-size: 15px;">No Rangka Kend.</th>
			<th style="font-size: 15px;">Tanggal PO</th>
			<th style="font-size: 15px;">Jenis Trans.</th>
			<th style="font-size: 15px;">Nama Kend.</th>
			<th style="font-size: 15px;">Tipe Kend.</th>
			<th style="font-size: 15px;">Tahun Kend.</th>
			<th style="font-size: 15px;">Warna Kend.</th>
			<th style="font-size: 15px;">Jenis Kaca</th>
			<th style="font-size: 15px;">Kaca Depan</th>
			<th style="font-size: 15px;">Kaca Samping Kiri(1)</th>
			<th style="font-size: 15px;">Kaca Samping Kanan(2)</th>
			<th style="font-size: 15px;">Kaca Samping Kiri(3)</th>
			<th style="font-size: 15px;">Kaca Samping Kanan(4)</th>
			<th style="font-size: 15px;">Kaca Samping Kiri(5)</th>
			<th style="font-size: 15px;">Kaca Samping Kanan(6)</th>
			<th style="font-size: 15px;">Kaca Backdoor</th>
			<th style="font-size: 15px;">Harga</th>
			<th style="font-size: 15px;">Nama Cust.</th>
			<th style="font-size: 15px;">No Telp Cust.</th>
			<th style="font-size: 15px;">Alamat Kirim</th>
			<th style="font-size: 15px;">Tanggal Kirim</th>
			<th style="font-size: 15px;">Status</th>
			<th width="40" style="font-size: 15px;">Lihat Bukti PO</th>
			
			<th width="40" style="font-size: 15px;">Aksi</th>
		</tr>
	</thead> 

	<tbody>
		@php($no = 1)
		@foreach($rekap as $data)
		<tr>
			<td>{{$no}}</td>
			<td>{{$data->no_po}}</td>
			<td>{{$data->no_rangka_kendaraan}}</td>
			<td>{{date('d M Y', strtotime($data->tgl_po))}}</td>
			<td>{{$data->jns_transaksi}}</td>
			<td>{{$data->nm_kendaraan}}</td>
			<td>{{$data->tp_kendaraan}}</td>
			<td>{{$data->thn_kendaraan}}</td>
			<td>{{$data->wrn_kendaraan}}</td>
			<td>{{$data->jns_kaca}}</td>
			<td>{{$data->kaca_depan}}</td>
			<td>{{$data->kaca_samping_kiri1}}</td>
			<td>{{$data->kaca_samping_kanan2}}</td>
			<td>{{$data->kaca_samping_kiri3}}</td>
			<td>{{$data->kaca_samping_kanan4}}</td>
			<td>{{$data->kaca_samping_kiri5}}</td>
			<td>{{$data->kaca_samping_kanan6}}</td>
			<td>{{$data->kaca_backdoor}}</td>
			<td>Rp. {{number_format($data->harga,0,',','.')}}</td>
			<td>{{$data->nm_customer}}</td>
			<td>{{$data->tlp_customer}}</td>
			<td>{{$data->almt_kirim}}</td>
			<td>{{date('d M Y', strtotime($data->tgl_kirim))}}</td>
			<td>{{$data->status}}</td>
			<td class="text-center">
				<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#show{{$data->id}}" title="Lihat Bukti">
					<i class="fa fa-money-check-alt"></i>
				</button>
			</td>
			<td>button aksi</td>


		</tr>
		@php($no++)
		@endforeach 
	</tbody>
</table>

</body>
</html>