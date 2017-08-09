@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
		<center><h1>Data konsumen</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data konsumen
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
			<div class="form-group">	
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$konsu->name }}" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<input type="text" name="b" value="{{$konsu->alamat }}"class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label class="control-label">No Hp</label>
				<input type="number" name="c" value="{{$konsu->no_hp }}"class="form-control" readonly="">
			</div>
			
	</div>
</div>
</div>
@endsection
