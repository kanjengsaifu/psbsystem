<div class="card">
	<div class="card-header">
		<a href="<?php echo site_url("admin/kuota/tambah")?>" class="btn btn-square btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th width="10">No</th>
                <th width="60"><i class="fa fa-cog"></i></th>
                <th>Gelombang Pendaftaran</th>
                <th>Jurusan</th>
                <th>Jumlah Kuota</th>
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($query->result() as $row): ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td>
                	<a href="<?php echo site_url("admin/kuota/edit/". $row->id_kuota)?>" class="btn btn-icon btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                	<a href="<?php echo site_url("admin/kuota/delete/". $row->id_kuota)?>" onclick="return confirm('data ini akan di hapus?')" class="btn btn-icon btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                </td>
                <td><?php echo "Tahun ".$row->tahun_ppdb." gelombang - ".$row->gelombang?></td>
                <td><?php echo $row->jurusan?></td>
                <td><?php echo $row->kuota?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
        <tfoot>
            <tr>
                <th width="10">No</th>
                <th width="60"><i class="fa fa-cog"></i></th>
                <th>Gelombang Pendaftaran</th>
                <th>Jurusan</th>
                <th>Jumlah Kuota</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>