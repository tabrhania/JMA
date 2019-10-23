<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->

<div class="container">

 <div class="container">
 	PROFILE USER <br>

        <div class="">
            <div class="col-content bg col-md-4 col-table">
                
 				Nama<br>
				ILHAM BAHTIAR <br>
				Email<br>
				kangilham6@gmai.com<br>
				Username<br>
				bahtiar404<br>
				Status<br>
				BELUM NIKAH<br>
            </div>
            <div class="col-content bg col-md-9 col-table">
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

<style type="text/css">
.bg {
    background: #eee;
}
.row-table {
    display: table;
    table-layout: fixed;
    width: 100%;
    height: 100%;
}
.col-table {
    display: table-cell;
    float: none;
    height: 100%;
}
.col-content {
    height: 100%;
    margin-top: 0;
    margin-bottom: 0;
}
</style>
</div>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>