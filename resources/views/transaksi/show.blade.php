@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
		<center><h1>Transaksi</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Transaksi
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
			<div class="form-group">	
				<label class="control-label">Karyawan</label>
				<input type="text" name="a" value="{{$tran->karyawan->name }}" class="form-control" readonly="">
			</div>
			<div class="form-group">	
				<label class="control-label">Konsumen</label>
				<input type="text" name="b" value="{{$tran->konsumen->name }}" class="form-control" readonly="">
			</div>
			<div class="form-group">	
				<label class="control-label">barang</label>
				<input type="text" name="c" value="{{$tran->barang->nama }}" class="form-control" readonly="">
				<img src="{{asset('/img/'.$tran->barang->cover.'')}}" height="100px" width="100px"></td>
			</div>
			<div class="form-group">	
				<label class="control-label">Harga</label>
				<input type="text" name="d" value="{{$tran->harga }}" class="form-control" readonly="">
			</div>
			<div class="form-group">	
				<label class="control-label">Jumlah</label>
				<input type="text" name="f" value="{{$tran->jumlah }}" class="form-control" readonly="">
			</div>
			<div class="form-group">	
				<label class="control-label">Total</label>
				<input type="text" name="d->f" value="{{$tran->total }}" class="form-control" readonly="">
			</div>
			<div class="form-group">	
				<label class="control-label">Tanggal pembelian</label>
				<input type="text" name="g" value="{{$tran->tgl_pembelian }}" class="form-control" readonly="">
			</div>
	</div>
</div>
</div>
@endsection
