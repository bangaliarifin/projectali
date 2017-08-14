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
		
			<form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Nama </label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			<div class="form-group">
			<label class="control-label">Karayawan</label>
				<select name="b" class="form-control">
				<option value="0" selected="true" disabled="true">penjaga </option>
					@foreach($karya as $data)
					<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Merek </label>
				<input type="text" name="c" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Harga </label>
				<input type="number" name="e" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="number" name="d" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover"  required="">
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