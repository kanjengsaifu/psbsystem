<div class="card">
	<form action="<?php echo site_url('admin/program_keahlian/tambah') ?>" method="POST" class="card">
		<div class="card-header">
			<h3 class="card-title">TAMBAH PROGRAM KEAHLIAN BARU</h3>
			<div class="card-options">
		        <a href="<?php echo site_url('admin/program_keahlian') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
		    </div>
		</div>
		<div class="card-body">
				<div class="form-group">
					<?php
				        $info = $this->session->flashdata('info_success');
				        if (!empty($info)){
				            echo '<div class="alert alert-success">'.$this->session->flashdata('info_success').'</div>';
				        }
				        $info_error = $this->session->flashdata('info_error');
				        if (!empty($info_error)){
				            echo '<div class="alert alert-danger">'.$this->session->flashdata('info_error').'</div>';
				        }
				    ?>
				</div>
				<div class="form-group">
	              <label class="form-label">Program Keahlian<span class="form-required">*</span></label>
	              <input type="text" name="program_keahlian" class="form-control" required />
	              <?php echo form_error('program_keahlian'); ?>
	            </div>
	            <div class="form-group">
	              <label class="form-label">Nama Singkat<span class="form-required">*</span></label>
	              <input type="text" name="singkatan" class="form-control" required />
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