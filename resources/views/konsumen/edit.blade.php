@extends('layouts.app')
@section('content')
<div class="container">
<div class=-"row">
		<center><h1>Data konsumen</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data konsumen
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('konsumen.update',$konsu->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$konsu->name }}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<input type="text" name="b" value="{{$konsu->alamat }}"class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">No Hp</label>
				<input type="number" name="c" value="{{$konsu->no_hp }}"class="form-control" required="">
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