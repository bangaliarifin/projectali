@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
		<center><h1>Data Transaksi</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('transaksi.store')}}" method="post">
			{{csrf_field()}}
				<div class="form-group">
			<label class="control-label">Karayawan</label>
				<select name="a" class="form-control">
				<option value="0" selected="true" disabled="true">penjaga </option>
					@foreach($karya as $data)
					<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
				</select>
			</div>
				<div class="form-group">
			<label class="control-label">Konsumen</label>
				<select name="b" class="form-control">
				<option value="0" selected="true" disabled="true">pembeli </option>
					@foreach($konsu as $data)
					<option value="{{$data->id}}">{{$data->name}} </option>
					@endforeach
				</select>
			</div>
				<div class="form-group">
			<label class="control-label">Barang</label>
				<select name="c" class="form-control">
				<option value="0" selected="true" disabled="true">barang </option>
					@foreach($barang as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Harga</label>
				<select class="form-control" name="d">
				<option value="0" selected="true" disabled="true">Harga </option>
				@foreach($barang as $e)
				<option value="{{$e->harga}}">{{$e->harga}}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="number" name="f" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Tanggal Pembelian</label>
				<input type="date" name="g" class="form-control" required="">
			</div>
					<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection