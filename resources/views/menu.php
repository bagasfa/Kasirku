<?php include "header.php" ?>
<script type="text/javascript">
	document.title="Menu";
	document.getElementById('barang').classList.add('active');
	
	function noAv(){
		alert("Maaf fitur ini belum tersedia :)");
	}
</script>
<script type="text/javascript" src="assets/jquery.tablesorter.min.js"></script>
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
<script src="assets/jquery-3.3.1.min.js"></script>
<script src="assets/main.js"></script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
				<a href="#" onclick="noAv()" class="btnblue"><i class="fa fa-plus"></i> Tambah Menu</a>&nbsp;&nbsp;
				<form style="float: right;"><input type="search" class="light-table-filter" data-table="order-table"><button>Search Menu</button></form>
				</div>
				<div class="right">
					<script type="text/javascript">
						function gotocat(val){
							var value=val.options[val.selectedIndex].value;
							window.location.href="barang.php?id_cat="+value+"";
						}
					</script>
					
				</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Menu : <?= $root->show_jumlah_barang() ?></span>
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
					<?php
					if (isset($_GET['id_cat']) && $_GET['id_cat']) {
						$root->tampil_barang_filter($_GET['id_cat']);
					}else{
						$keyword=isset($_GET['q'])?$_GET['q']:"null";
						$root->tampil_barang($keyword);
					}
					?>
</tbody>

			</table>
			</div>
		</div>
	</div>
</div>


<?php 
include "footer.php" ?>
