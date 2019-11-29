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
				paging:         false,
				fixedColumns:   {
					leftColumns: 2
				}
			} );
		} );
	</script>
	<style type="text/css">
		th, td { white-space: nowrap; }
		div.dataTables_wrapper {
			width: 70%;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1 align="center">Data Karyawan</h1>
	<table id="example" class="stripe row-border order-column" style=""> <thead class="thead-dark">
		<tr>
			<th width="30" style="font-size: 13px;">No</th>
			<th width="50" style="font-size: 13px;">No. PO</th>
			<th style="font-size: 13px;">Tanggal PO</th>
			<th style="font-size: 13px;">No Rangka Kend.</th>
			<th style="font-size: 13px;">Nama Kend.</th>
			<th style="font-size: 13px;">Tipe Kend.</th>
			<th style="font-size: 13px;">Tahun Kend.</th>
			<th style="font-size: 13px;">Warna Kend.</th>
			<th style="font-size: 13px;">Nama Cust.</th>
			<th style="font-size: 13px;">No Telp Cust.</th>
			<th style="font-size: 13px;">Alamat Kirim</th>
			<th style="font-size: 13px;">Tanggal Kirim</th>
			<th width="40" style="font-size: 13px;">Lihat Bukti PO</th>
		</tr>
	</thead> 

	<tbody>
		@php($no = 1)
		@foreach($rekap as $data)
		<tr>
			<td>{{$no}}</td>
			<td>{{$data->no_po}}</td>
			<td>{{date('d M Y', strtotime($data->tgl_po))}}</td>
			<td>{{$data->no_rangka_kendaraan}}</td>
			<td>{{$data->nm_kendaraan}}</td>
			<td>{{$data->tp_kendaraan}}</td>
			<td>{{$data->thn_kendaraan}}</td>
			<td>{{$data->wrn_kendaraan}}</td>
			<td>{{$data->nm_customer}}</td>
			<td>{{$data->tlp_customer}}</td>
			<td>{{$data->almt_kirim}}</td>
			<td>{{date('d M Y', strtotime($data->tgl_kirim))}}</td>
			<td class="text-center">
				<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#show{{$data->id}}" title="Lihat Bukti">
					<i class="fa fa-money-check-alt"></i>
				</button>
			</td>

		</tr>
		@php($no++)
		@endforeach 
	</tbody>
</table>

</body>
</html>