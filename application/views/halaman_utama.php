<?php  $this->load->view('template/atas');?>
<body>
  
  <section data-bs-version="5.1" class="menu menu1 cid-tFa3xYUoTR" once="menu" id="menu1-0">
    

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
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="#header1-3">Learn Astrology</a></li></ul>
                
                
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header5 cid-tFa3BWm6nu mbr-fullscreen" id="header5-1">

    

    
    

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>Know Your Zodiac</strong></h1>
                
                <p class="mbr-text mbr-fonts-style mbr-white display-7">
                    Unlock the secrets of the stars and let your horoscope guides you to the future that's written in the constellations</p>
            </div>
        </div>
    </div>
</section>



<section data-bs-version="5.1" class="header1 cid-tFa3GbYv0J mbr-fullscreen" id="header1-3">

    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>The History of Zodiac</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">
                    The concept of the zodiac can be traced back to ancient civilizations. The earliest known zodiac systems emerged in Mesopotamia around 2000 BCE, with the association of constellations to specific months. The Egyptians further developed the zodiac, linking it to gods and cosmic forces. The Greeks adopted and expanded upon these ideas, dividing the zodiac into twelve equal parts and assigning specific traits to each sign. This Greek zodiac system was later refined by astronomers like Ptolemy in the 2nd century CE. Today, the zodiac continues to be a significant aspect of astrology, providing a framework for understanding personality traits and making predictions based on the positions of celestial bodies.</p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-tFa3MsZfym" id="form5-4">
    

    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1">
                <strong>Looking for a sign?</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="<?php echo base_url("zodiac/determineZodiac"); ?>" method="POST" class="mbr-form form-with-styler">
                   
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <p style="color: white;">Enter your name</p>
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-4" required>
                        </div>
                        <br>
                        <div class="col-4 form-group mb-3" data-for="url">
                            <p style="color: white;">Choose your birth date</p>
                            <input type="date" name="dob" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-4" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn mt-3"><button type="submit" class="btn btn-primary display-7">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header1 cid-tFa3EMzXxo mbr-fullscreen" id="header1-2">

    

    
    

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>What's Your Zodiac?</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">
                    Zodiac signs refer to a twelve-fold division of the ecliptic, an imaginary path the Sun appears to follow in the sky over the course of a year. Each sign is associated with specific dates and is named after a constellation that falls along this path. The twelve signs are Aries, Taurus, Gemini, Cancer, Leo, Virgo, Libra, Scorpio, Sagittarius, Capricorn, Aquarius, and Pisces. According to astrology, the position of the Sun, Moon, and planets at the time of a person's birth can influence their personality traits and life events. Each sign is believed to possess unique characteristics, strengths, weaknesses, and compatibility with other signs</p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-tFa3MsZfym" id="form5-4">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1">
                <strong>Love Meter!</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="<?php echo base_url("kalkulator/hasil"); ?>" method="POST" class="mbr-form form-with-styler">
                   
                    
                    <div class="dragArea row">
                    <div class="col-6 form-group mb-3" data-for="url">
                            <p style="color: white;">Choose your birth date</p>
                            <input type="date" name="birthdate1" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-4" required>
                        </div>
                        <br>
                        <div class="col-6 form-group mb-3" data-for="url">
                            <p style="color: white;">Choose your partner date</p>
                            <input type="date" name="birthdate2" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-4" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn mt-3"><button type="submit" class="btn btn-primary display-7" value="Ukur">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php  $this->load->view('template/bawah');?>