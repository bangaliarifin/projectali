@extends('layouts.app')
@section('content')
<div class="container">
<div class=-"row">
		<center><h1>Data karyawan</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data karyawan
		<div class="panel-title pull-right"><a href="/admin/karyawan/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					@foreach($karya as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->no_hp}}</td>
						<td>
						</td>
			
					<td>
						<a class="btn btn-warning" href="/admin/karyawan/{{$data->id}}/edit">Edit</a> </td>
						<td>
						<td>
						<a class="btn btn-info" href="/admin/karyawan/{{$data->id}}
						">Show</a> </td>
						<td>
						<form action="{{route('karyawan.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		

		
		</div>
</div>


@endsection