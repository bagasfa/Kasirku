@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Menu";
	document.getElementById('barang').classList.add('active');
</script>
<script type="text/javascript" src="{{asset('assets/jquery.tablesorter.min.js')}}"></script>
<script type="text/javascript">
    $(function(){
    	$.tablesorter.addWidget({
    		id:"indexFirstColumn",
    		format:function(table){
    			$(table).find("tr td:first-child").each(function(index){
    				$(this).text(index+1);
    			})
    		}
    	});
    	$("table").tablesorter({
    		widgets:['indexFirstColumn'],
    		headers:{
        		0:{sorter:false},
        		3:{sorter:false},
        		4:{sorter:false},
        		5:{sorter:false},
        		6:{sorter:false},
        		7:{sorter:false},
        	}
    	});
    });
</script>
<script src="{{asset('assets/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/main.js')}}"></script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
				<a href="menu/tambah_menu" class="btnblue"><i class="fa fa-plus"></i> Tambah Menu</a>&nbsp;&nbsp;

				<form method="GET" style="float: right;">
    			<div class="form-inline my-2 my-lg-0">
      				<input type="text" name="search" class="form-control" placeholder="Cari disini ..." value="{{ request()->get('search') }}">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      			</div>
    			</form>
				</div>
			
				<div class="right">
					<a href="/menu/menu_ex" class="btngreen"><i class="fa fa-print"></i> Export XLS</a>
					<a href="/menu/menu_pdf" class="btnred"><i class="fa fa-print"></i> Export PDF</a>
				</div>

				<div class="both"></div>
			</div>
			<span class="label">Jumlah Menu : {{ \App\barang::count()}}</span>
			<table class="datatable order-table" id="datatable">
				<thead>
				<tr>
					<th width="10px">#</th>
					<th style="cursor: pointer;">Nama Menu <i class="fa fa-sort"></i></th>
					<th style="cursor: pointer;" width="100px">Kategori <i class="fa fa-sort"></i></th>
					<th>Stok</th>
					<th width="120px">Harga Menu</th>
					<th width="150px">Tanggal Ditambahkan</th>
					<th width="60px">Aksi</th>
				</tr>
			</thead>
			<tbody>
					@forelse($barang as $key => $value)
					<tr>
						<td>{{ $barang->firstItem() + $key }}</td>
						<td>{{ $value->nama_barang }}</td>
						<td>{{ $value->kategori->nama_kategori }}</td>
						<td>{{ $value->stok }}</td>
						<td>Rp. {{ $value->harga_jual }}</td>
						<td>{{ $value->date_added }}</td>
						<td>
							<a href="{{url('menu/'.$value->id_barang. '/editMenu')}}" class="btn bluetbl m-r-10" onclick="noAv()"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{url('menu/'.$value->id_barang. '/deleteMenu')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="7">Data Kosong.</td>
					</tr>
					@endforelse
			</tbody>
			</table>
			<br>
			<div class="pull-right">{{ $barang->links() }}</div>
			<br><br>
			</div>
		</div>
	</div>
</div>
@stop
