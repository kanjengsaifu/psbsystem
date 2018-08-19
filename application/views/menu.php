<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">
      <!-- <div class="col-lg-3 ml-auto">
        <form class="input-icon my-3 my-lg-0">
          <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
          <div class="input-icon-addon">
            <i class="fe fe-search"></i>
          </div>
        </form>
      </div> -->
      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="<?php echo site_url(); ?>" class="nav-link"><i class="fe fe-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Data Referensi</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="<?php echo base_url(); ?>admin/program_keahlian" class="dropdown-item "><i class="fa fa-bookmark"></i>Program Keahlian</a>
              <!-- <a href="<?php echo base_url(); ?>kelas" class="dropdown-item "><i class="fa fa-book"></i>Kelas</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Manajemen PPDB</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="<?php echo base_url(); ?>admin/gelombang" class="dropdown-item "><i class="fa fa-calendar"></i>Gelombang Pendaftaran</a>
              <a href="<?php echo base_url(); ?>admin/kuota" class="dropdown-item "><i class="fa fa-filter"></i>Kuota Pendaftaran</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>PPDB</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="<?php echo base_url(); ?>admin/ppdb/pendaftar" class="dropdown-item "><i class="fa fa-smile-o"></i> Semua Pendaftar</a>
              <a href="<?php echo base_url(); ?>admin/ppdb/proses_seleksi" class="dropdown-item "><i class="fa fa-hourglass"></i> Proses Seleksi</a>
              <a href="<?php echo base_url(); ?>admin/ppdb/pendaftar_diterima" class="dropdown-item "><i class="fa fa-check-circle"></i> Pendaftar Diterima</a>
              <a href="<?php echo base_url(); ?>admin/ppdb/pendaftar_ditolak" class="dropdown-item "><i class="fa fa-times-circle "></i>Pendaftar Tidak Diterima</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-cogs"></i>Pengaturan</a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="<?php echo base_url(); ?>admin/ppdb/pengaturan" class="dropdown-item "><i class="fa fa-street-view"></i>PPDB</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>