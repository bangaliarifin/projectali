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
				<label class="control-label">Nama Barang</label>
				<input type="text" name="a" value="{{$barang->nama}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
			<label class="control-label">karyawan</label>
			<input type="text" name="b" value="{{$barang->karyawan->name}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Merek</label>
				<input type="text" name="a" value="{{$barang->merek}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Harga</label>
				<input type="text" name="e" value="{{$barang->harga}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">jumlah </label>
				<input type="text" name="c" value="{{$barang->jumlah}}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Gambar</label>
				<img src="{{asset('/img/'.$barang->cover.'')}}" width="100px" height="100px">
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection