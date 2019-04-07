<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    
    <section class="sidebar">
      <!-- Logo -->
      <a href="<?php echo base_url ('index.php/admin/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SIP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SIP</span>
    </a>
    <!-- /Logo -->
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src=<?php echo base_url ('assets/img/user2-160x160.jpg') ?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SISTEM INFORMASI PERTOKOAN</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Transaksi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ('pages/layout/boxed.html') ?>"><i class="fa fa-circle-o"></i> Rekap Transaksi</a></li>
            <li><a href="<?php echo base_url ('pages/layout/fixed.html') ?>"><i class="fa fa-circle-o"></i> Data Pelanggan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ('pages/layout/top-nav.html') ?>"><i class="fa fa-circle-o"></i> Inventori Barang </a></li>
            <li><a href="<?php echo base_url ('pages/layout/boxed.html') ?>"><i class="fa fa-circle-o"></i> List Barang</a></li>
            <li><a href="<?php echo base_url ('pages/layout/fixed.html') ?>"><i class="fa fa-circle-o"></i> List Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan Pembukuan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>