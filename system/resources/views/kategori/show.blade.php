@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Kategori
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3>{{$kategori->nama_kategori}}</h3>
							<hr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection