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
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Kategori : {{ \DB::table('kategori')->count()}}</span>
			<table class="datatable" style="width: 500px;">
				<thead>
				<tr>
					<th width="35px">NO</th>
					<th>Nama Kategori</th>
					<th width="60px">Aksi</th>
				</tr>
			</thead>
			<tbody>
					<?php $no = 1; ?>
					@foreach($cat as $value)
					<tr>
						<td><?php echo $no++; ?></td>
						<td>{{ $value->nama_kategori }}</td>
						<td>
							<a href="{{url('kategori/' .$value->id_kategori. '/editCat')}}" class="btn bluetbl m-r-10"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{ url('kategori/' .$value->id_kategori. '/deleteCat')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
			</tbody>

			</table>
			</div>
		</div>
	</div>
</div>
@stop