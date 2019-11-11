<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->
   <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-12">

              <h4><i class="fa fa-angle-right"></i> Album Galeri Jember Market Analyst</h4>
              <div class="btn-group">
                <button type="button" class="btn btn-default">Kegiatan 1</button>
                <button type="button" class="btn btn-default">Kegiatan 2</button>
                <button type="button" class="btn btn-default">Kegiatan 3</button>
              </div>
             <div class="form-panel">
              <form action="#" class="form-horizontal style-form">
                <div class="form-group last">
                  <label class="control-label col-md-3">Image Galery Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" />
                        </span>
                    <button class="btn btn-theme" type="submit">Upload</button>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
     	  </div>

        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>