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
				<form style="float: right;"><input type="search" class="light-table-filter" data-table="order-table"><button>Search Menu</button></form>
				</div>

				<div class="both"></div>
			</div>
			
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
							<a href="#" class="btn bluetbl m-r-10" onclick="noAv()"><span class="btn-edit-tooltip">Edit</span><i class="fa fa-pencil"></i></a>
							<a href="#" class="btn redtbl" onclick="noAv()"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-trash"></i></a>
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
