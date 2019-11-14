<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->

<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Halaman Traders</h3>
    <div class="row mb">
      <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Master Trader</h4>
        <div class="content-panel">
          <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
              <thead>
                <tr>
                  <th>ID Trader</th>
                  <th>Nama Trader</th>
                  <th>Bio</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($trader as $t) : ?>
                <tr>
                  <td><?= $t['id_trader'] ?></td>
                  <td><?= $t['trader'] ?></td>
                  <td><?= $t['bio'] ?></td>
                  <td>
                    <button type="button" class="btn-primary" data-toggle="modal" data-target="#editTraderModal">EDIT</button>
                    <button type="button" class="btn-success" data-toggle="modal" data-target="#lihatTraderModal">Lihat</button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

    <div class="row mt">
      <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Tambah Master Trader</h4>
        <div class="form-panel">
          <form class="cmxform form-horizontal style-form" enctype="multipart/form-data" method="post" action="<?= base_url() ?>/TradersAdmin/tambahTrader">
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Nama Trader</label>
              <div class="col-lg-10">
                <input class=" form-control" name="namaTrader" type="text" />
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">Foto</label>
              <div class="col-md-9">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                  </div>
                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                    <span class="btn btn-theme02 btn-file">
                      <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                    <input type="file" name="foto" class="default" />
                    </span>
                    <a href="#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <label for="ccomment" class="control-label col-lg-2">Bio</label>
              <div class="col-lg-10">
                <textarea class="form-control" name="bio"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-theme" type="submit">Tambah</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /form-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
  </section>
</section>



<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>