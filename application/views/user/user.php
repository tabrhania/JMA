<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->
<div class="container-fluid">
        
        <!-- row 1: Header -->
        <div class="container rounded-3">
            <div class="row pt-4 pr-5 pb-4 mb-4" style="background: #008080; color: white">
                <div class="col-md-3 offset-md-1">
                    <div class="text-center">
                    <img src="<?= base_url() ?>/assets/img/bg-img/3x4.jpg" class="img-rounded" alt="Profil" width="150"><br>             
                    <h3 style="font-family: bitter;">
                    <em>Ilham Bahtiar</em> <br>    
                    </h3>
                    <br>
    				<u>Email</u><br>
    				kangilham6@gmai.com<br>
    				<u>Username</u><br>
    				bahtiar404<br>
    				<u>Status</u><br>
    				BELUM NIKAH<br>
                    </div>
                </div>

                <div class="col-md-8">
                	<form>
    					<div class="form-group">
      	 				<label for="exampleFormControlInput1">Nama</label>
        				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
    					</div>
    				</form>
    				<form>
    					<div class="form-group">
      	 				<label for="exampleFormControlInput1">Nomor KTP</label>
        				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0000000000000000">
    					</div>
    				</form>
    				<form>
    					<div class="form-group">
      	 				<label for="exampleFormControlInput1">Email</label>
        				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="admin@admin.com">
    					</div>
    				</form>
    				<button type="button" class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
</div>
<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>