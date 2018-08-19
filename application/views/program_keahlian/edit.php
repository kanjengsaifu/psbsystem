<div class="card">
	<form action="<?php echo site_url('admin/program_keahlian/edit') ?>" method="POST" class="card">
		<div class="card-header">
			<h3 class="card-title">EDIT PROGRAM KEAHLIAN <?php echo $row['singkatan'];?></h3>
			<div class="card-options">
		        <a href="<?php echo site_url('admin/program_keahlian') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
		    </div>
		</div>
		<div class="card-body">
			<input type="hidden" name="id" value="<?php echo $row['id_jurusan'];?>"">
			<div class="form-group">
              <label class="form-label">Program Keahlian<span class="form-required">*</span></label>
              <input type="text" name="program_keahlian" value="<?php echo $row['jurusan'];?>" class="form-control" required />
              <?php echo form_error('program_keahlian'); ?>
            </div>
            <div class="form-group">
              <label class="form-label">Nama Singkat<span class="form-required">*</span></label>
              <input type="text" name="singkatan" value="<?php echo $row['singkatan'];?>" class="form-control" required />
              <?php echo form_error('singkatan'); ?>
            </div>
		</div>
		<div class="card-footer">
          <div class="btn-list">
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
            <button type="submit" name="simpan" class="btn btn-primary ml-auto"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
	</form>
</div>