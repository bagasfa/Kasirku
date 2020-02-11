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
				<a href="{{url('tambah_menu')}}" class="btnblue"><i class="fa fa-plus"></i> Tambah Menu</a>&nbsp;&nbsp;
				<!-- Search JS -->
				<form style="float: right;"><input type="search" class="light-table-filter" placeholder="pake JS" data-table="order-table"><button>Search Menu</button></form>
				</div>
				<!-- Search Metode Laravel -->
				<div class="pull-right">
				<form action="menu/cariMenu" method="GET">
    			<div class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Cari disini ..." name="cariMenu" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      			</div>
    			</form>
    			</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Menu : {{ \DB::table('barang')->count()}}</span>
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
				<?php $no = 1; ?>
					@foreach($items as $value)
					<tr>
						<td><?php echo $no++; ?></td>
						<td>{{ $value->nama_barang }}</td>
						<td>{{ $value->id_kategori }}</td>
						<td>{{ $value->stok }}</td>
						<td>Rp. {{ $value->harga_jual }}</td>
						<td>{{ $value->date_added }}</td>
						<td>
							<a href="{{url('/'.$value->id_barang. '/editMenu')}}" class="btn bluetbl m-r-10" onclick="noAv()"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="{{url('/'.$value->id_barang. '/deleteMenu')}}" class="btn redtbl"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
			</tbody>
			</table>
			<br>
			<div class="pull-right">{{ $items->links() }}</div>
			<br><br>
			</div>
		</div>
	</div>
</div>
@stop
