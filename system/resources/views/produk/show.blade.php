@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Produk
				</div>
				<div class="card-body">
						<table class="table">
						<tbody>
							<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<h3>{{$produk->nama_produk}}</h3>
							</div>
							@include('produk.show.detail')
							<p>
								{!! nl2br($produk->deskripsi) !!}
							</p>
							<p>
								<img src="{{url("system/public/$produk->foto")}}" alt="">
							</p>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection