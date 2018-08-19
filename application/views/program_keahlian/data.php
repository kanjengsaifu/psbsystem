<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/program_keahlian/tambah/")?>" class="btn btn-square btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10">No</th>
                <th width="60"><i class="fa fa-cog"></i></th>
                <th>Program Keahlian</th>
                <th>Nama Singkat</th>
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($query->result() as $row): ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td>
                	<a href="<?php echo site_url("admin/program_keahlian/edit/". $row->id_jurusan)?>" class="btn btn-icon btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                	<a href="<?php echo site_url("admin/program_keahlian/delete/". $row->id_jurusan)?>" onclick="return confirm('program keahlian ini akan di hapus?')" class="btn btn-icon btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                </td>
                <td><a href="<?php echo site_url("program_keahlian/edit/". $row->id_jurusan)?>"><?php echo $row->jurusan?></a></td>
                <td><?php echo $row->singkatan?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th><i class="fa fa-cog"></i></th>
                <th>Program Keahlian</th>
                <th>Nama Singkat</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>

<!-- <script type="text/javascript">

var save_method;
var table;

$(document).ready(function() {

	//datatables
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('program_keahlian/all_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],
 
    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
 
});

</script> -->