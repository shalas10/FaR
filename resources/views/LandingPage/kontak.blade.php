@extends('layouts.mainuser')
@section('content')


    <body class="template-page-contact-style-1">

        <!-- Header -->
        <div class="template-header template-header-background template-header-background-1">

            <!-- Top header -->
            <div class="template-header-top">

                <!-- Logo -->
                <div class="template-header-top-logo">
                    <a href="/index" title="">
                        <img src="build/assets/images/logo-sm.png" alt="" class="template-logo"/>
                        <img src="build/assets/images/logo-sm.png" alt="" class="template-logo template-logo-sticky"/>
                    </a>
                </div>

                <!-- Menu-->
                <div class="template-header-top-menu template-main">
                    <nav>   
                        <!-- Default menu-->
                        <div class="template-component-menu-default">
                            <ul class="sf-menu">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/tentang">Tentang</a>
                                </li>
                                <li>
                                    <a href="/booking">Pemesanan</a>
                                </li>
                                <li>
                                    <a href="/kontak" class="template-state-selected">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <nav>
                        <!-- Mobile menu-->
                        <div class="template-component-menu-responsive">
                            <ul class="flexnav">
                                <li>
                                    <a href="#">
                                        <span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close    "></span>&nbsp;
                                    </a>
                                </li>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/tentang">Tentang</a>
                                </li>
                                <li>
                                    <a href="/boking">Pemesanan</a>
                                </li>
                                <li>
                                    <a href="/kontak" class="template-state-selected">Kontak</a>
                                </li>
                            </ul>							
                        </div>
                    </nav>
                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            $('.template-header-top').templateHeader();
                        });
                    </script>
                </div>

                <!-- Social icons -->
                <div class="template-header-top-icon-list template-component-social-icon-list-1">
                    <ul class="template-component-social-icon-list">
                        {{-- <li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
                        <li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
                        <li><a href="book-your-wash.html" class="template-icon-meta-cart"></a></li>
                        <li><a href="#" class="template-icon-meta-search"></a></li> --}}
                        <li><a href="{{ route('login') }}" class="">Login</a>
                        <li><a href="{{ route('register') }}" class="">Daftar</a></li>
                        <li><a href="#" class="template-icon-meta-menu"></a></li>
                    </ul>
                </div>

            </div>				

            <div class="template-header-bottom">
            
                <div class="template-main">

                    <div class="template-header-bottom-page-title">
                        <h1>Kontak</h1>
                    </div>

                    <div class="template-header-bottom-page-breadcrumb">
                        <a href="index.html">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">Contact style 1</a>
                    </div>
                
                </div>

            </div>
                
        </div>

        <!-- Content -->
        <div class="template-content">
            
            <!-- Section -->
            <div class="template-section template-section-padding-1 template-main template-clear-fix">
                
                <!-- Features list -->
                <div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">
                    
                    <!-- Layout 33x33x33% -->
                    <ul class="template-layout-33x33x33 template-clear-fix">
                        
                        <!-- Left column -->
                        <li class="template-layout-column-left">
                            <span class="template-icon-feature-phone-circle"></span>
                            <h5>Hubungi</h5>
                            <p>
                                (+505) 122 225 225<br/>
                                (+505) 122 225 224<br/>
                            </p>
                        </li>
                        
                        <!-- Center column -->
                        <li class="template-layout-column-center">
                            <span class="template-icon-feature-location-map"></span>
                            <h5>Alamat</h5>
                            <p>
                                464 Rhode Island Av.<br/>
                                Portland, OR 97219
                            </p>
                        </li>
                        
                        <!-- Right column -->
                        <li class="template-layout-column-right">
                            <span class="template-icon-feature-clock"></span>
                            <h5>Jadwal Operasi</h5>
                            <p>
                                Monday - Friday: 8 am - 6 pm<br/>
                                Saturday: 8 am - 3 pm
                            </p>
                        </li>
                        
                    </ul>
                    
                </div>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-padding-reset template-main template-clear-fix">
                
                <!-- Contact form -->
                <form name="contact-form" id="contact-form" method="POST" action="#" class="template-component-contact-form">
                    
                    <!-- Layout 50x50% -->
                    <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">
                        
                        <!-- Left column -->
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <div class="template-component-form-field template-state-block">
                                <label for="contact-form-name">Nama Kamu *</label>
                                <input type="text" name="contact-form-name" id="contact-form-name"/>
                            </div>
                            <div class="template-component-form-field template-state-block">
                                <label for="contact-form-email">Masukan E-mail *</label>
                                <input type="text" name="contact-form-email" id="contact-form-email"/>
                            </div>
                            <div class="template-component-form-field template-state-block">
                                <label for="contact-form-phone">Nomor Telepon *</label>
                                <input type="text" name="contact-form-phone" id="contact-form-phone"/>
                            </div>
                        </li>
                        
                        <!-- Right column -->
                        <li class="template-layout-column-right template-margin-bottom-reset">
                            <div class="template-component-form-field template-state-block">
                                <label for="contact-form-message">Beri Penilaian *</label>
                                <textarea rows="1" cols="1" name="contact-form-message" id="contact-form-message"></textarea>
                            </div>
                        </li>
                        
                    </ul>
                    
                    <!-- Button -->
                    <div class="template-align-center template-clear-fix template-margin-top-1">
                        <span class="template-state-block">
                            <input type="submit" value="Kirim Pesan" class="template-component-button" name="contact-form-submit" id="contact-form-submit"/>
                        </span>
                    </div>
                    
                </form>
                
                <!-- Space -->
                <div class="template-component-space template-component-space-4"></div>
                
            </div>
            
            <!-- Google Maps -->
            <div class="template-section template-section-padding-reset template-clear-fix">
                            
                <!-- Google Map -->
                <div class="template-component-google-map">

                    <!-- Content -->
                    <div class="template-component-google-map-box">
                        <div class="template-component-google-map-box-content"></div>
                    </div>

                    <!-- Button -->
                    <a href="#" class="template-component-google-map-button">
                        <span class="template-icon-meta-marker"></span>
                        <span class="template-component-google-map-button-label-show">Lihat Peta</span>
                        <span class="template-component-google-map-button-label-hide">Sembunyikan Peta</span>
                    </a>

                </div>

                <script type="text/javascript">

                    jQuery(document).ready(function()
                    {
                        jQuery('.template-component-google-map').templateGoogleMap(
                        {
                            coordinate		:
                            {
                                lat			:	'-37.823952',
                                lng			:	'144.958766'
                            },
                            dimension		:
                            {
                                width		:	'100%',
                                height		:	'400px'
                            },
                            marker			:	'media/image/map_pointer.png'
                        });
                    });

                </script>					
            
            </div>
            
        </div>
        
        <!-- Footer -->
        <div class="template-footer">
            
            <div class="template-main">
                
                <!-- Footer top -->
                <div class="template-footer-top">
                    
                    <!-- Layout 25x25x25x25 -->
                    <div class="template-layout-25x25x25x25 template-clear-fix">
                        
                        <!-- Left column -->
                        <div class="template-layout-column-left">
                            <h6>About</h6>
                            <p>Autospan Hand Wash is an eco-friendly hand car wash and detailing service based in Portland.</p>
                            <img src="media/image/logo.png" alt="" class="template-logo" />
                        </div>

                        <!-- Center left column -->
                        <div class="template-layout-column-center-left">
                            <h6>Services</h6>
                            <ul class="template-list-reset">
                                <li><a href="service-style-1.html">Exterior Hand Wash</a></li>
                                <li><a href="service-style-1.html">Tower Hand Dry</a></li>
                                <li><a href="service-style-1.html">Tire Dressing</a></li>
                                <li><a href="service-style-1.html">Wheel Shine</a></li>
                                <li><a href="service-style-1.html">Interior Vacuum</a></li>
                                <li><a href="service-style-1.html">Sealer Hand Wax</a></li>
                            </ul>									
                        </div>
                        
                        <!-- Center right column -->
                        <div class="template-layout-column-center-right">
                            <h6>Company</h6>
                            <ul class="template-list-reset">
                                <li><a href="about-style-1.html">About Us</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="service-style-2.html">Our Services</a></li>
                                <li><a href="book-your-wash.html">Book Your Wash</a></li>
                                <li><a href="gallery.html">Portfolio</a></li>
                                <li><a href="contact-style-1.html">Contact</a></li>
                            </ul>
                        </div>
                        
                        <!-- Right column -->
                        <div class="template-layout-column-right">
                            <h6>Newsletter</h6>
                            <form class="template-component-newsletter-form">
                                <div class="template-component-form-field">
                                    <label for="newsletter-form-email">Your e-mail address *</label>
                                    <input type="text" name="newsletter-form-email" id="newsletter-form-email"/>
                                </div>
                                <div class="template-margin-top-2">
                                    <input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit"/>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- Footer bottom -->
                <div class="template-footer-bottom">
                    
                    <!-- Social icon list -->
                    <ul class="template-component-social-icon-list template-component-social-icon-list-2">
                        <li><a href="https://twitter.com/quanticalabs" class="template-icon-social-twitter" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/QuanticaLabs" class="template-icon-social-facebook" target="_blank"></a></li>
                        <li><a href="https://dribbble.com/quanticalabs" class="template-icon-social-dribbble" target="_blank"></a></li>
                        <li><a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" class="template-icon-social-envato" target="_blank"></a></li>
                        <li><a href="https://www.behance.net/quanticalabs" class="template-icon-social-behance" target="_blank"></a></li>
                        <li><a href="https://www.youtube.com/user/quanticalabs" class="template-icon-social-youtube" target="_blank"></a></li>
                    </ul>
                    
                    <!-- Copyright -->
                    <div class="template-footer-bottom-copyright">
                        By <a href="http://quanticalabs.com" target="_blank">QuanticaLabs</a> &copy; 2016 <a href="http://themeforest.net/user/QuanticaLabs/portfolio?ref=quanticalabs" target="_blank">Auto Spa Template</a>
                    </div>
                    
                </div>
                
            </div>

        </div>

        <!-- Search box -->
        <div class="template-component-search-form">
            <div></div>
            <form>
                <div>
                    <input type="search" name="search"/>
                    <span class="template-icon-meta-search"></span>
                    <input type="submit" name="submit" value=""/>
                </div>
            </form>
        </div>
        
        <!-- Go to top button -->
        <a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>
        
        <!-- Wrapper for date picker -->
        <div id="dtBox"></div>
        
    </body>
@endsection