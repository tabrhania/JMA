<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->

 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Halaman Artikel</h3>
        <div class="row mt">

		<!-- Judul Artikel -->
      <div class="col-lg-12">
        <div class="form-panel">
          <div class=" form">
            <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
            	    <div class="form-group last">
                  <label class="control-label col-md-2">Upload Gambar</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih Gambar</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Ubah</span>
                        <input type="file" class="default" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Hapus</a>
                      </div>
                    </div>
                    <span class="label label-info">CATATAN!</span>
                    <span>
                     Upload gambar maksimal 3MB. Format berupa JPG,JPEG,PNG.
                      </span>
                  </div>
                </div>

        	     <div class="form-group">
              <label class="control-label col-md-2">Pilih Tanggal</label>
              <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="Pilih Tanggal">
              </div>
            </div>
              <div class="form-group ">
                <label for="cname" class="control-label col-lg-2">Judul Artikel</label>
                <div class="col-lg-10">
                  <input class=" form-control" id="cname" name="name" minlength="2" type="text" required placeholder="Masukkan Judul Artikel" />
                </div>
              </div>
              <div class="form-group ">
                <label for="ccomment" class="control-label col-lg-2">Isi Artikel</label>
                <div class="col-lg-10">
                  <textarea class="form-control " id="ccomment" name="comment" required placeholder="Masukkan Isi Artikel"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" data-toggle="modal" data-target="#myModal" type="submit">Simpan</button>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">PERINGATAN!!!</h4>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin untuk menyimpan perubahan ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="button" class="btn btn-primary">Simpan perubahan</button>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /form-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
 </section>
 	  

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>