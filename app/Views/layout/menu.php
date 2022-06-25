  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url()?>/images/puri_utami.png" alt="Puri Utami" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Puri Utami</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Takrimia</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
           
          </li>
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('akun/daftarakun') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Kode Akun</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('karyawan/daftarkaryawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('bahan_baku/daftarbahan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahan Baku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('bop/daftarbop') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BOP</p>
                </a>
              </li>
            </ul>
          </li>
         
            
             
			  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Produksi') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Biaya Produksi</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('targetcosting/ListTargetcosting') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Target Costing</p>
                </a>
              </li>
		   <li class="nav-item">
              <a href="<?= base_url('karyawan/daftarkaryawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Two</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('jurnalumum') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jurnal Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('bukubesar') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku Besar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('harga_pokok_produk') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Pokok Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('kartu_harga_pokok') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kartu Harga Pokok</p>
                </a>
              </li>
             
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 