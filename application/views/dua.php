<!-- Ini page hasil zodiak -->
<?php  $this->load->view('template/atas');?>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-tFa3xYUoTR" once="menu" id="menu1-f">
    

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
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page1.html">
                            About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?php echo base_url("zodiac/index"); ?>">Learn Astrology</a></li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="content4 cid-tFaOmWLOnE" id="content4-h">
    

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-1"><strong><?php echo $zodiac['name']; ?></strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">
                    <!-- Hi, Ruby. Your zodiac is scorpio. -->
                    <?php if ($zodiac != 'Unknown') { ?>
        <p>Hello, <?php echo $name; ?>! Your zodiac sign is: <?php echo $zodiac['name']; ?></p>
    <?php } else { ?>
        <p>Invalid date of birth. Please enter a valid date.</p>
    <?php } ?>
                </h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image3 cid-tFaOpyzdhW" id="image3-i">
    

    
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="image-wrapper">
                <img src="<?php echo base_url('images/' . $zodiac['image']); ?>" alt="<?php echo $zodiac['name']; ?>">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php  $this->load->view('template/bawah');?>