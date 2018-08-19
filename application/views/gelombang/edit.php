<div class="card">
  <form action="<?php echo site_url('admin/gelombang/edit') ?>" method="POST" class="card">
    <div class="card-header">
      <h3 class="card-title">UBAH GELOMBANG PENDAFTARAN</h3>
      <div class="card-options">
            <a href="<?php echo site_url('admin/gelombang') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </div>
    <div class="card-body">
        <input type="hidden" name="id" value="<?php echo $row['id_fase'];?>">
        <div class="form-group">
          <label class="form-label">Tahun PPDB<span class="form-required">*</span></label>
          <input type="text" name="tahun_ppdb" placeholder="Misal 2018" value="<?php echo $row['tahun_ppdb'];?>" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Gelombang<span class="form-required">*</span></label>
          <input type="number" name="gelombang" placeholder="Misal 1" value="<?php echo $row['gelombang'];?>" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Tanggal Mulai<span class="form-required">*</span></label>
          <input type="date" name="tgl_mulai" placeholder="Misal 1" value="<?php echo $row['tanggal_mulai'];?>" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Tanggal Selesai<span class="form-required">*</span></label>
          <input type="date" name="tgl_selesai" placeholder="Misal 1" value="<?php echo $row['tanggal_selesai'];?>" class="form-control" required />
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