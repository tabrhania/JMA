<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->

<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Halaman Traders</h3>
        <div class="row mt">
          <div class="col-lg-12">

    <div class="white-panel pn">
      <div class="white-header">
        <h5>TRADER TERBAIK</h5>
      </div>
      <p><img src="<?= base_url() ?>/assets/img/nauval.JPG" class="img-circle" width="50"></p>
      <p><b>Nauval Permana Putra</b></p>
      <div class="row">
        <div class="col-md-6">
          <p class="small mt">ANGGOTA SEJAK</p>
          <p>1945</p>
        </div>
        <div class="col-md-6">
          <p class="small mt">TOTAL PROFIT</p>
          <p>$ 696,969</p>
        </div>
      </div>
    </div>

          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>