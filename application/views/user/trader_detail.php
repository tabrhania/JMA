<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->
<div class="row ml-5 mb-5">

    <div class="card" style="width: 18rem;">

		<div class="mt-3 mx-auto" style="overflow:hidden; height:120px; width:120px; border-radius:50%;">
    		<img class="img-fluid" src="assets/images/ccc.jpg" alt='Agent picture' />	
		</div>

		<div class="card-body">
		<h5 class="card-title text-center">Nama Pengguna </h5>
		</div>

		<div class="btnfollow mb-4" align="center">
		<a href="#" class="btn  btn-primary">Follow !</a>
		</div>

        <div class="item ml-3 mb-3">
            <div class="item-infoprofile" style="margin-top:10px;">
                <label>Profit Bulanan</label>
                    <h5>12.34%</h5>
            </div>

            <div class="item-infoprofile">
                <label>Balance </label>
                   <h5>USD 0.06</h5>
            </div>

            <div class="item-infoprofile">
                <label>Draw Down</label>
                    <h5>68.08 %</h5>
            </div>

            <div class="item-infoprofile">
                <label>Equity</label>
                    <h5>USD 0.06</h5>
            </div>

            <div class="item-infoprofile">
                <label>Pips</label>
                    <h5>1003.2</h5>
            </div>

            
		</div>
    </div>
    
    <div class="card ml-5" style="width: 60rem;">
    
        <h4 class="detail-title ml-3 mt-3">Tentang Saya</h4>
        <p class="content ml-3 mr-3 text-left">Saya Sudah Kenal Trading Sejak 2007 Tapi Mulai Benar-Benar Trading Sejak Tahun 2014. Win Ratio Teknik Saya Bisa Mencapai 61,85%. Teknik Trading Saya Hanya Menggunakan Indiktor Stocasthic Oscillator Dan Beberapa Entry-An Saya Mengikuti Fundamental. Saya Menggunakan Money Management Berdasarkan Ekuitas Saya, Dalam 1 Waktu Saya Bisa Merisikokan 25% Dari Ekuitas Awal. Untuk Mengikuti Tradingan Saya Maka Saya Sarankan Untuk Memiliki Minimal Equity $250. Nilai Lindung Yang Saya Sarankan Untuk Mengikuti Saya Adalah 70% Dari Ekuitas Yang Anda Miliki.</p>


        <div class="image w-75 p-3 mx-auto">
            <img src="assets/images/traffic.png" class="card-img-top" alt="...">
        </div> 
    </div>

</div>



<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>