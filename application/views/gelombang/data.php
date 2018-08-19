<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/gelombang/tambah")?>" class="btn btn-square btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10">No</th>
                <th width="60"><i class="fa fa-cog"></i></th>
                <th>Tahun PPDB</th>
                <th>Gelombang</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($query->result() as $row): ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td>
                	<a href="<?php echo site_url("admin/gelombang/edit/". $row->id_fase)?>" class="btn btn-icon btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                	<a href="<?php echo site_url("admin/gelombang/delete/". $row->id_fase)?>" onclick="return confirm('data ini akan di hapus?')" class="btn btn-icon btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                </td>
                <td><?php echo $row->tahun_ppdb?></td>
                <td><?php echo $row->gelombang?></td>
                <td><?php echo longdate_indo($row->tanggal_mulai)?></td>
                <td><?php echo longdate_indo($row->tanggal_selesai)?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th><i class="fa fa-cog"></i></th>
                <th>Tahun PPDB</th>
                <th>Gelombang</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>