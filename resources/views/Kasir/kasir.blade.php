@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Tambah Kasir";
	document.getElementById('kasir').classList.add('active');
</script>
<script src="{{asset('assets/main.js')}}"></script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
				<a href="kasir/tambah_kasir" class="btnblue">Tambah Kasir</a>&nbsp;&nbsp;
				<form method="GET" style="float: right;">
    			<div class="form-inline my-2 my-lg-0">
      				<input type="text" name="search" class="form-control" placeholder="Cari disini ..." value="{{ request()->get('search') }}">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      			</div>
    			</form>
				</div>

				<div class="both"></div>
			</div>
			<span class="label">Jumlah Kasir : {{ \App\User::count()}}</span>
			<table class="datatable order-table" id="datatable">
				<thead>
				<tr>
					<th width="10px">#</th>
					<th width="200px"><center>Username</center></th>
					<th width="300px"><center>Nama User</center></th>
					<th width="200px"><center>No. Telp</center></th>
					<th width="100px"><center>Foto</center></th>
					<th ><center>Tanggal Ditambahkan</center></th>
					<th width="60px" align="center"><center>Aksi</center></th>
				</tr>
			</thead>
			<tbody>
					@forelse($cs as $key => $kasir)
					<tr>
						<td align="center">{{ $cs->firstItem() + $key }}</td>
						<td align="center">{{ $kasir->username }}</td>
						<td>{{ $kasir->nama_user }}</td>
						<td align="center">{{ $kasir->telp }}</td>
						<td align="center" class="admin-info"><img src="{{url('assets/images/'.$kasir->foto)}}" width="100px" height="100px" alt="{{$kasir->foto}}"></td>
						<td align="center">{{ $kasir->date_created }}</td>
						<td>
							<a href="{{url('kasir/'.$kasir->id. '/editKasir')}}" class="btn bluetbl m-r-10" onclick="noAv()"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{url('kasir/'.$kasir->id. '/deleteKasir')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="6">Data Kosong.</td>
					</tr>
					@endforelse
			</tbody>
			</table>
			<br>
			<div class="pull-right">{{ $cs->links() }}</div>
			<br><br>
			</div>
		</div>
	</div>
</div>
@stop
