<!-- Page hasil kalkulator love meter -->
<?php  $this->load->view('template/atas');?>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-tFa3xYUoTR" once="menu" id="menu1-j">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo base_url("zodiac/index"); ?>">
                        <img src="<?php echo base_url(); ?>assets/images/equinox-4.png" style="height: 4.8rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?php echo base_url("zodiac/tampil_data_satu"); ?>">
                            About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?php echo base_url("zodiac/index"); ?>">Learn Astrology</a></li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="content13 cid-tFKoCMwhy7 mbr-fullscreen" id="content13-p">
    

    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                    <strong>Zodiac Compatibility</strong></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-2"><p><strong>Your zodiac sign is</strong></p><p><strong><?php echo $zodiac1; ?></strong></p></ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-2"><p><strong>Your partner's zodiac sign is</strong></p><p><strong><?php echo $zodiac2; ?></strong></p></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <ul class="list mbr-fonts-style display-2">
                    <strong>Zodiac Compatibility</strong>
                    <p><strong><?php echo $compatibility; ?></strong></p>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php  $this->load->view('template/bawah');?>