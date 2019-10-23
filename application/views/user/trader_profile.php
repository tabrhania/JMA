<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->

<div class="container align-center my-4"><h1 class="center">Profile Copy Trader</h1></div>

<div class="container border border-dark min-vh-100 p-3 my-4">
        <iframe frameborder="0" width="220" height="140" src="https://www.mql5.com/en/signals/widget/signal/4722?t=red"></iframe>
        <iframe frameborder="0" width="220" height="140" src="https://www.mql5.com/en/signals/widget/signal/4726"></iframe>
        <iframe frameborder="0" width="220" height="140" src="https://www.mql5.com/en/signals/widget/signal/4720?t=red"></iframe>
        <iframe frameborder="0" width="220" height="140" src="https://www.mql5.com/en/signals/widget/signal/4725"></iframe>
</div>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>