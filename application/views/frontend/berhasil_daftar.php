<div class="card">
	<div class="card-header">
      <h3 class="card-title">SELAMAT ANDA BERHASIL MELAKUKAN PENDAFTARAN BARU!</h3>
      <div class="card-options">
            <a href="<?php echo site_url('welcome') ?>" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
        </div>
    </div>
    <div class="card-body">
    	<p class="text-center">Halo <?php echo $this->session->userdata('nama_lengkap'); ?> , Selamat kamu berhasil melakukan pendaftaran baru! Ini nomor pendaftaran kamu <bold><?php echo $this->session->userdata('no_daftar'); ?></bold> harap simpan dengan baik no tersebut karena nomor akan terus digunakan sampai proses seleksi selesai.</p>
    </div>
</div>