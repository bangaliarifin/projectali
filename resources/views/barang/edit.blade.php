@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
			<form action="{{route('barang.update',$barang->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$barang->nama}}" class="form-control" required="">
			</div>
			<div class="form-group">
			<label class="control-label">Karyawan</label>
				<select name="b" class="form-control">
				@foreach($karya as $data)
				<option value="{{$data->id}}"> {{$data->name}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Merek</label>
				<input type="text" name="c" value="{{$barang->merek}}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">harga</label>
				<input type="text" name="e" value="{{$barang->harga}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="text" name="d" value="{{$barang->jumlah}}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" required="" value="{{$barang->cover}}"></input>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection