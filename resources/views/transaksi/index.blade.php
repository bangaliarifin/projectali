@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Transaksi
		<div class="panel-title pull-right"><a href="/admin/transaksi/create">tambah data</a>
		</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Karyawan </th>
						<th>Konsumen</th>
						<th>Barang </th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Tanggal Pembelian</th>
						<th colspan="3">action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tran as $data)
					<tr>
						<td>{{$data->karyawan->name}}</td>
						<td>{{$data->konsumen->name}}</td>
						<td>{{$data->barang->nama}}
							<img src="{{asset('/img/'.$data->barang->cover.'')}}" height="100px" width="100px"></td>
						<td>{{$data->harga}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->total}}</td>
						<td>{{$data->tgl_pembelian}}</td>
						<td>
							<a class="btn btn-warning" href="/admin/transaksi/{{$data->id}}/edit">Edit</a>
						</td>

						
						<td>
						<a class="btn btn-info" href="/admin/transaksi/{{$data->id}}
						">Show</a> </td>
						<td>
						<form action="{{route('transaksi.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		
			</table>
		</div>

		</div>
	</div>
</div>
</div>
@endsection