<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Visi Misi</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Visi Misi</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="contactform/visimisi.php" method="POST">

              <div class="form-group">
                <textarea class="form-control" name="visimisi" id="contact-visimisi" placeholder="Visi Misi" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-visimisi"></div>
              <div class="sent-visimisi">Visi Misi JMA</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Edit</button>
              </div>

            </form>
          </div>

        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>