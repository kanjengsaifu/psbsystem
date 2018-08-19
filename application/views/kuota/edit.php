<div class="card">
  <form action="<?php echo site_url('admin/kuota/edit') ?>" method="POST" class="card">
    <div class="card-header">
      <h3 class="card-title">UBAH KUOTA PENDAFTARAN</h3>
      <div class="card-options">
            <a href="<?php echo site_url('admin/kuota') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </div>
    <div class="card-body">
        <input type="hidden" name="id" value="<?php echo $row['id_kuota'];?>">
        <div class="form-group">
          <label class="form-label">Gelombang Pendaftaran<span class="form-required">*</span></label>
            <select class="form-control custom-select" name="gelombang_dftr" required>
              <?php
              foreach ($dtgelombang as $dt){
                  echo "<option value='$dt->id_fase' ";
                  echo $dt->id_fase==$row['id_fase']?'selected':'';
                  echo">tahun $dt->tahun_ppdb gelombang - $dt->gelombang</option>";
              }
              ?>
            </select>
        </div>
        <div class="form-group">
          <label class="form-label">Jurusan<span class="form-required">*</span></label>
          <select class="form-control custom-select" name="jurusan_dftr" required>
              <?php foreach ($dtjurusan as $dtj): ?>
              <option value="<?php echo $dtj->id_jurusan ?>" <?php echo $dtj->id_jurusan==$row['id_jurusan']?'selected':''; ?>><?php echo $dtj->jurusan;?></option>
              <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
          <label class="form-label">Jumlah Kuota<span class="form-required">*</span></label>
          <input type="number" name="jml_kuota" value="<?php echo $row['kuota']; ?>" placeholder="Misal 100" class="form-control" required />
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