@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Kategori
				</div>
				<div class="card-body">
					<form action="{{url('kategori')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label"> id </label>
						<input type="text" name="id" class="form-control">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label"> Nama Kategori</label>
								<input type="text" name="nama" class="form-control">
							</div>
						</div>

					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection