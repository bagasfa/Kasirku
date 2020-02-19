@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Kategori Menu";
	document.getElementById('kategori').classList.add('active');
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
					<form action="{{url('kategori')}}" method="POST">
						@csrf
						<input type="text" name="nama_kategori" placeholder="Nama Kategori..." style="margin-right: 10px;border-right: 1px solid #ccc;border-radius: 3px;">
						<button style="background: #41b3f9;color: #fff;border-radius: 3px;border-color: #41b3f9;border:1px solid #41b3f9" type="submit">Tambahkan</button>
					</form>
				</div>

				<!-- Search Metode Laravel -->
				<div class="pull-right">
				<form method="GET">
    			<div class="form-inline my-2 my-lg-0">
      				<input type="text" name="search" class="form-control" placeholder="Cari disini ..." value="{{ request()->get('search') }}">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      			</div>
    			</form>
    			</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Kategori : {{ \DB::table('kategori')->count()}}</span>
			<table class="datatable" style="width: 500px;">
				<thead>
				<tr>
					<th width="35px">#</th>
					<th>Nama Kategori</th>
					<th width="60px">Aksi</th>
				</tr>
			</thead>
			<tbody>
					@forelse($cat as $key => $value)
					<tr>
						<td>{{ $cat->firstItem() + $key }}</td>
						<td>{{ $value->nama_kategori }}</td>
						<td>
							<a href="{{url('kategori/' .$value->id_kategori. '/editCat')}}" class="btn bluetbl m-r-10"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{ url('kategori/' .$value->id_kategori. '/deleteCat')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="3">Data Kosong.</td>
					</tr>
					@endforelse
			</tbody>
			</table>
			<br>
			<div class="pull-right">{{ $cat->links() }}</div>
			<br><br>
			</div>
		</div>
	</div>
</div>
@stop