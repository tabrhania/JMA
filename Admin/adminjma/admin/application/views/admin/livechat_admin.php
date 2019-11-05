<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<?php $this->load->view('template/sidebar') ?>
<!-- isi halaman memulai -->

   <section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Live Chat Room: JMA</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Cari" class="form-control search-btn ">
              </form>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Admin</div>
              <div class="second-part">Halo, Nauval</div>
              <div class="third-part">12:30</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Nauval Permana Putra</div>
              <div class="second-part">Iya, ada apa?</div>
              <div class="third-part">12:31</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Admin</div>
              <div class="second-part">Gpp, cuman test</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Tabhrani Ody</div>
              <div class="second-part">Ikut Ghibah Dong Slurrrr</div>
              <div class="third-part">12:33</div>
            </div>
            <div class="group-rom last-group">
              <div class="first-part odd">Admin</div>
              <div class="second-part">Monggo Buka Topik Slur</div>
              <div class="third-part">12:34</div>
            </div>
            <footer>
              <div class="chat-txt">
                <input type="text" class="form-control">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
              </div>
              <button class="btn btn-theme">Kirim Pesan</button>
            </footer>
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Anggota JMA</h4>
              <a href="#" class="btn btn-theme04 pull-right">+ Undang</a>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="<?= base_url() ?>/assets/img/nauval.jpg" width="32">
                  Nauval Permana Putra
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="<?= base_url() ?>/assets/img/ody.jpg" width="32">
                  Tabhrani Ody
                  </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>