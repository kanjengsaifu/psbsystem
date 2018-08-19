<div class="card">
	<form action="<?php echo site_url('admin/kuota/tambah') ?>" method="POST" class="card">
		<div class="card-header">
			<h3 class="card-title">TAMBAH KUOTA PENDAFTARAN</h3>
			<div class="card-options">
		        <a href="<?php echo site_url('admin/kuota') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
		    </div>
		</div>
		<div class="card-body">
				<div class="form-group">
					<?php
				        $info = $this->session->flashdata('info_success');
				        if (!empty($info)){
				            echo '<div class="alert alert-success">'.$this->session->flashdata('info_success').'</div>';
				        }
				    ?>
				</div>
				<div class="form-group">
	              <label class="form-label">Gelombang Pendaftaran<span class="form-required">*</span></label>
	              	<select class="form-control custom-select" name="gelombang_dftr" required>
	                  <option>--Pilih Gelombang--</option>
	                  <?php foreach ($dtgelombang->result() as $row): ?>
	                  <option value="<?php echo $row->id_fase ?>"><?php echo $row->tahun_ppdb." gelombang - ".$row->gelombang ?></option>
	                  <?php endforeach; ?>
	                </select>
	            </div>
	            <div class="form-group">
	              <label class="form-label">Jurusan<span class="form-required">*</span></label>
	              <select class="form-control custom-select" name="jurusan_dftr" required>
	                  <option>--Pilih Jurusan--</option>
	                  <?php foreach ($dtjurusan->result() as $row): ?>
	                  <option value="<?php echo $row->id_jurusan ?>"><?php echo $row->jurusan;?></option>
	                  <?php endforeach; ?>
	                </select>
	            </div>
	            <div class="form-group">
	              <label class="form-label">Jumlah Kuota<span class="form-required">*</span></label>
	              <input type="number" name="jml_kuota" placeholder="Misal 100" class="form-control" required />
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