@extends('layouts.mainuser')
@section('content')

    <body class="template-page-home">

        <!-- Header -->
        <div class="template-header">

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
                                    <a href="/"class=" template-state-selected">Home</a>
                                </li>
                                <li>
                                    <a href="/tentang">Tentang</a>
                                </li>
                                <li>
                                    <a href="/booking">Pemesanan</a>
                                </li>
                                <li>
                                    <a href="/kontak">Kontak</a>
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
                    {{-- <ul class="sf-menu"> --}}
                    <ul class="template-component-social-icon-list">
                        <li><a href="{{ route('login') }}" class="">Login</a>
                            {{-- <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul> --}}
                            
                        </li>
                        <li><a href="{{ route('register') }}" class="">Daftar</a></li>
                        <li><a href="#" class="template-icon-meta-menu"></a></li>
                    </ul>
                </div>


            </div>				
            
            <div class="template-header-bottom">
                        
                <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                    
                    <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- Slide 1 -->
                            <li data-index="slide-1" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                                <!-- Main image -->
                                <img src="build/assets/images/slider/slider_01.jpg" alt="slide-1" data-bgfit="cover" data-bgposition="center bottom">
                                <!-- Layers -->
                                <!-- Layer 01 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']"
                                    data-fontsize="['17','17','17','15','14']"
                                    data-fontweight="['700','700','700','700','900']"
                                    data-lineheight="['17','17','17','15','27']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="100"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 2px;"
                                    >

                                    SELAMAT DATANG DI WEBSITE FAR CAR WASH
                                </div>

                                <!-- Layer 02 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1000"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    MOBIL KAMU
                                </div>

                                <!-- Layer 03 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    BERADA DI TANGAN YANG TEPAT
                                </div>

                                <!-- Layer 04 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']"
                                    data-fontsize="['15','15','15','15','15']"
                                    data-fontweight="['400','400','400','400','400']"
                                    data-lineheight="['15','15','15','15','15']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                                    data-width="['auto','auto','auto','auto','auto']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="2500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    >

                                    <a class="template-component-button template-color-white" href="/booking" title="Purchase Template">Pesan Sekarang</a>
                                </div>
                            </li>

                            <!-- Slide 2 -->
                            <li data-index="slide-2" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                                <!-- Main image -->
                                <img src="build/assets/images/slider/slider_02.jpg" alt="slide-2" data-bgfit="cover" data-bgposition="center bottom">
                                <!-- Layers -->
                                <!-- Layer 01 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']"
                                    data-fontsize="['17','17','17','15','14']"
                                    data-fontweight="['700','700','700','700','900']"
                                    data-lineheight="['17','17','17','15','27']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="100"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 2px;"
                                    >
                                    LAYANAN LENGKAP DENGAN PERAWATAN LUAR
                                </div>

                                <!-- Layer 02 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1000"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    KAMI MENCINTAI MOBIL ANDA
                                </div>

                                <!-- Layer 03 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    SAMA SEPERTI YANG ANDA LAKUKAN
                                </div>

                                <!-- Layer 04 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']"
                                    data-fontsize="['15','15','15','15','15']"
                                    data-fontweight="['400','400','400','400','400']"
                                    data-lineheight="['15','15','15','15','15']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                                    data-width="['auto','auto','auto','auto','auto']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="2500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    >

                                    <a class="template-component-button template-color-white" href="/booking" title="Purchase Template">Pesan Sekarang</a>
                                </div>
                            </li>

                            <!-- Slide 3 -->
                            <li data-index="slide-3" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                                <!-- Main image -->
                                <img src="build/assets/images/slider/slider_03.jpg" alt="slide-3" data-bgfit="cover" data-bgposition="center bottom">
                                <!-- Layers -->
                                <!-- Layer 01 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']"
                                    data-fontsize="['17','17','17','15','14']"
                                    data-fontweight="['700','700','700','700','900']"
                                    data-lineheight="['17','17','17','15','27']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="100"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 2px;"
                                    >

                                    MENCUCI DETAIL LUAR DAN DALAM
                                </div>

                                <!-- Layer 02 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1000"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    CUCI MOBIL
                                </div>

                                <!-- Layer 03 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']"
                                    data-fontsize="['62','55','43','29','22']"
                                    data-fontweight="['900','900','900','700','700']"
                                    data-lineheight="['62','55','43','29','32']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                                    data-width="['auto','auto','auto','auto','300']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 

                                    data-start="1500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    style="letter-spacing: 4px;"
                                    >

                                    DAN AUTO DETAILING
                                </div>

                                <!-- Layer 04 -->
                                <div class="tp-caption tp-resizeme" 
                                    data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" 
                                    data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']"
                                    data-fontsize="['15','15','15','15','15']"
                                    data-fontweight="['400','400','400','400','400']"
                                    data-lineheight="['15','15','15','15','15']"
                                    data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                                    data-width="['auto','auto','auto','auto','auto']"
                                    data-height="auto"
                                    data-basealign="grid"

                                    data-transform_idle="o:1;"

                                    data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;"
                                    data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;"

                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                                    data-start="2500"

                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on"
                                    >

                                    <a class="template-component-button template-color-white" href="/booking" title="Purchase Template">Pesan Sekarang</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/-->

                <!-- Slider JS -->
                <script type="text/javascript">
                var tpj=jQuery;	
                    var revapi4;
                    tpj(document).ready(function() {
                        if(tpj("#rev_slider").revolution == undefined){
                            revslider_showDoubleJqueryError("#rev_slider");
                        }else{
                            revapi4 = tpj("#rev_slider").show().revolution({
                                jsFileLocation:"script/",
                                sliderType:"standard",
                                sliderLayout:"fullwidth",
                                dottedOverlay:"none",
                                delay:9000,
                                responsiveLevels:[1920,1189,959,767,479],
                                gridwidth:[1170,940,750,460,300],
                                gridheight:[750,600,550,550,550],
                                lazyType:"none",
                                navigation: {
                                    keyboardNavigation:"on",
                                    mouseScrollNavigation:"off",
                                    onHoverStop:"on",
                                    keyboard_direction: "horizontal",
                                    touch:{
                                        touchenabled:"on",
                                        swipe_treshold : 75,
                                        swipe_min_touches : 1,
                                        drag_block_vertical:false,
                                        swipe_direction:"horizontal",
                                    },
                                    arrows: {
                                        style:"preview1",
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1500,
                                        hide_under:0,
                                        hide_over:9999,
                                        tmp:'',
                                        left: {
                                            h_align:"left",
                                            v_align:"center",
                                            h_offset:0,
                                            v_offset:0,
                                        },
                                        right: {
                                            h_align:"right",
                                            v_align:"center",
                                            h_offset:0,
                                            v_offset:0,
                                        }
                                    },
                                    bullets: {
                                        style:"preview1",
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1500,
                                        hide_under:0,
                                        hide_over:9999,
                                        direction:"horizontal",
                                        h_align:"center",
                                        v_align:"bottom",
                                        space:10,
                                        h_offset:0,
                                        v_offset:20,
                                        tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
                                    },
                                },
                                shadow:0,
                                spinner:"spinner1",
                                stopAfterLoops:-1,
                                stopAtSlide:-1,
                                disableProgressBar: "on",
                                shuffle:"off",
                                autoHeight:"off",
                                hideSliderAtLimit:0,
                                hideCaptionAtLimit:0,
                                hideAllCaptionAtLilmit:0,
                                debugMode:false,
                                fallbacks: {
                                    simplifyAll:"off",
                                    nextSlideOnWindowFocus:"off",
                                    disableFocusListener:false,
                                }
                        });
                        }
                    }); /*ready*/
                </script>					
            
            </div>
            
        </div>

        <!-- Content -->
        <div class="template-content">

            <!-- Section -->
            <div class="template-section template-section-padding-1 template-clear-fix template-main">
                
                <!-- Header + subheader -->
                <div class="template-component-header-subheader">
                    <h2>Apa Itu FaR Car Wash?</h2>
                    <div></div>
                    <span>Car Wash & Auto Detailing</span>
                </div>	
                
                <!-- Layout 33x66% -->
                <div class="template-layout-33x66 template-clear-fix">
                    
                    <!-- Left column -->
                    <div class="template-layout-column-left">
                        <img src="build/assets/images/sample/460x678/image_01.jpg" alt=""/>
                    </div>
                    
                    <!-- Right column -->
                    <div class="template-layout-column-right">
                        
                        <!-- Text -->
                        <p class="template-padding-reset">
                            Autospa Hand Wash is an eco-friendly, hand car wash and detailing service based in Portland. 
                            Our company was founded back in 2005 by a team of experts with more then 10 years of professional car wash experience. 
                            We operate three car washes throught Portland area. Our goal is to provide our customers with the friendliest, most convenient 
                            hand car wash experience possible. We use the most modern and up-to-date water reclamation modules as a part of our car wash systems. 
                            Our products are all biodegradable and eco-friendly.
                        </p>
                                                        
                        <!-- Feature list -->
                        <div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">
                            
                            <!-- Layout 50x50% -->
                            <ul class="template-layout-50x50 template-clear-fix">
                                
                                <!-- Left column -->
                                <li class="template-layout-column-left template-margin-bottom-reset">
                                    <div class="template-component-space template-component-space-2"></div>
                                    <span class="template-icon-feature-water-drop"></span>
                                    <h5>Pencucian Mobil Terbaik</h5>
                                    <ul class="template-component-list">
                                        <li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
                                        <li><span class="template-icon-meta-check"></span>Multiple car wash locations throughout Portland</li>
                                        <li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
                                        <li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
                                        <li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
                                    </ul>
                                </li>
                                
                                <!-- Right column -->
                                <li class="template-layout-column-right template-margin-bottom-reset">
                                    <div class="template-component-space template-component-space-2"></div>
                                    <span class="template-icon-feature-user-chat"></span>
                                    <h5>Hubungi Kami</h5>
                                    <ul class="template-component-list">
                                        <li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
                                        <li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
                                        <li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
                                        <li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
                                        <li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
                                    </ul>											
                                </li>
                                
                            </ul>
                            
                        </div>
                        
                    </div>
                        
                </div>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">
                
                <!-- Call to action -->
                <div class="template-component-call-to-action">
                    <div class="template-main">
                        <h3>Pemesanan Cuci Mobil No 1 di Indonesia</h3>
                        <a href="/booking" class="template-component-button">Pemesanan</a>
                    </div>
                </div>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">
                
                <!-- Mian -->
                <div class="template-main">

                    <!-- Header + subheader -->
                    <div class="template-component-header-subheader">
                        <h2>Proses Kami</h2>
                        <div></div>
                        <span>Kami Tahu Waktu Anda Berharga</span>
                    </div>	

                    <!-- Space -->							
                    <div class="template-component-space template-component-space-1"></div>
                    
                    <!-- Process list -->							
                    <div class="template-component-process-list template-clear-fix">
                        
                        <!-- Layout 25x25x25x25% -->
                        <ul class="template-layout-25x25x25x25 template-clear-fix template-layout-margin-reset">
                            
                            <!-- Left column -->
                            <li class="template-layout-column-left">
                                <span class="template-icon-feature-check"></span>
                                <h5>1. Pemesanan</h5>
                                <span class="template-icon-meta-arrow-large-rl"></span>
                            </li>
                            
                            <!-- Center left column -->
                            <li class="template-layout-column-center-left">
                                <span class="template-icon-feature-car-check"></span>
                                <h5>2. Pengecekan</h5>
                                <span class="template-icon-meta-arrow-large-rl"></span>
                            </li>
                            
                            <!-- Center right column -->
                            <li class="template-layout-column-center-right">
                                <span class="template-icon-feature-vacuum-cleaner"></span>
                                <h5>3. Pencucian</h5>
                                <span class="template-icon-meta-arrow-large-rl"></span>
                            </li>
                            
                            <!-- Right column -->
                            <li class="template-layout-column-right">
                                <span class="template-icon-feature-payment"></span>
                                <h5>4. Pembayaran</h5>
                            </li>
                            
                        </ul>
                        
                    </div>
                    
                </div>
                    
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-section-padding-1 template-clear-fix template-main">
                
                <!-- Header + subheader -->
                <div class="template-component-header-subheader">
                    <h2>Paket Cuci</h2>
                    <div></div>
                    <span>Paket Pencucian Mana Yang Terbaik Untuk Kendaraan Anda?</span>
                </div>	
                
                <!-- Booking -->
                <div class="template-component-booking" id="template-booking">

                    <form>

                        <ul>
                            
                            <li>

                                <!-- Content -->
                                <div class="template-component-booking-item-content">

                                    <!-- Vehicle list -->
                                    <ul class="template-component-booking-vehicle-list">

                                        <!-- Vehicle -->
                                        <li data-id="regular-size-car">

                                            <div>

                                                <!-- Icon -->
                                                <div class="template-icon-vehicle-small-car"></div>					

                                                <!-- Name -->
                                                <div>Mobil Ukuran Kecil</div>

                                            </div>

                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="medium-size-car">
                                            <div>
                                                <div class="template-icon-vehicle-car-mid-size"></div>					
                                                <div>Mobil Ukuran Sedang</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="compact-suv">
                                            <div>
                                                <div class="template-icon-vehicle-suv"></div>					
                                                <div>Mobil Ukuran Besar</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="minivan">
                                            <div>
                                                <div class="template-icon-vehicle-minivan"></div>					
                                                <div>Mini Bus</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="pickup-truck">
                                            <div>
                                                <div class="template-icon-vehicle-pickup"></div>					
                                                <div>Truck Pickup</div>
                                            </div>
                                        </li>

                                        <!-- Vehicle -->
                                        <li data-id="cargo-truck">
                                            <div>
                                                <div class="template-icon-vehicle-truck-mid-size"></div>					
                                                <div>Truck Cargo</div>
                                            </div>
                                        </li>

                                    </ul>

                                </div>

                            </li>											

                            <li>

                                <!-- Content -->
                                <div class="template-component-booking-item-content">

                                    <!-- Package list -->
                                    <ul class="template-component-booking-package-list">

                                        <!-- Package -->
                                        <li data-id="basic-hand-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">

                                            <!-- Header -->
                                            <h4 class="template-component-booking-package-name">Paket Bronze</h4>

                                            <!-- Price -->
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">30</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>

                                            <!-- Duration -->
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">25</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>

                                            <!-- Services -->
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                            </ul>

                                            <!-- Button -->
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Booking Sekarang</a>
                                            </div>

                                        </li>

                                        <!-- Package -->
                                        <li data-id="basic-hand-wash-2" data-id-vehicle-rel="medium-size-car">

                                            <!-- Header -->
                                            <h4 class="template-component-booking-package-name">Paket Bronze</h4>

                                            <!-- Price -->
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">35</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>

                                            <!-- Duration -->
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">30</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>

                                            <!-- Services -->
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                            </ul>

                                            <!-- Button -->
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Booking Sekarang</a>
                                            </div>

                                        </li>

                                        <!-- Package -->
                                        <li data-id="deluxe-wash-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan,pickup-truck,cargo-truck">
                                            <h4 class="template-component-booking-package-name">Paket Silver</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">50</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">45</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Pesan Sekarang</a>
                                            </div>
                                        </li>

                                        <!-- Package -->
                                        <li data-id="deluxe-wash-2" data-id-vehicle-rel="medium-size-car">
                                            <h4 class="template-component-booking-package-name">Paket Silver</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">60</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">55</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Pesan Sekarang</a>
                                            </div>
                                        </li>

                                        <!-- Package -->
                                        <li data-id="ultimate-shine-1" data-id-vehicle-rel="regular-size-car,compact-suv,minivan">
                                            <h4 class="template-component-booking-package-name">Paket Gold</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">75</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">60</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                                <li data-id="interior-vacuum">Interior Vacuum</li>
                                                <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                                <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                                <li data-id="dashboard-clean">Dashboard Clean</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Pesan Sekarang</a>
                                            </div>
                                        </li>

                                        <!-- Package -->
                                        <li data-id="ultimate-shine-2" data-id-vehicle-rel="medium-size-car">
                                            <h4 class="template-component-booking-package-name">Paket Gold</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">80</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">80</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                                <li data-id="interior-vacuum">Interior Vacuum</li>
                                                <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                                <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                                <li data-id="dashboard-clean">Dashboard Clean</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Pesan Sekarang</a>
                                            </div>
                                        </li>

                                        <!-- Package -->
                                        <li data-id="platinium-works-1" data-id-vehicle-rel="regular-size-car">
                                            <h4 class="template-component-booking-package-name">Paket Platinum</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">90</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">100</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                                <li data-id="interior-vacuum">Interior Vacuum</li>
                                                <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                                <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                                <li data-id="dashboard-clean">Dashboard Clean</li>
                                                <li data-id="air-freshener">Air Freshener</li>
                                                <li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
                                                <li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button"> Sekarang</a>
                                            </div>
                                        </li>

                                        <!-- Package -->
                                        <li data-id="platinium-works-2" data-id-vehicle-rel="medium-size-car">
                                            <h4 class="template-component-booking-package-name">Paket Platinum</h4>
                                            <div class="template-component-booking-package-price">
                                                <span class="template-component-booking-package-price-currency">Rp.</span>
                                                <span class="template-component-booking-package-price-total">100</span>
                                                <span class="template-component-booking-package-price-decimal">K</span>
                                            </div>
                                            <div class="template-component-booking-package-duration">
                                                <span class="template-icon-booking-meta-duration"></span>
                                                <span class="template-component-booking-package-duration-value">125</span>
                                                <span class="template-component-booking-package-duration-unit">min</span>
                                            </div>
                                            <ul class="template-component-booking-package-service-list">
                                                <li data-id="exterior-hand-wash">Exterior Hand Wash</li>
                                                <li data-id="towel-hand-dry">Towel Hand Dry</li>
                                                <li data-id="wheel-shine">Wheel Shine</li>
                                                <li data-id="tire-dressing">Tire Dressing</li>
                                                <li data-id="windows-in-and-out">Windows In &amp; Out</li>
                                                <li data-id="sealer-hand-wax">Sealer Hand Wax</li>
                                                <li data-id="interior-vacuum">Interior Vacuum</li>
                                                <li data-id="trunk-vacuum">Trunk Vacuum</li>
                                                <li data-id="door-shuts-and-plastics">Door Shuts &amp; Plastics</li>
                                                <li data-id="dashboard-clean">Dashboard Clean</li>
                                                <li data-id="air-freshener">Air Freshener</li>
                                                <li data-id="triple-coat-hand-wax">Triple Coat Hand Wax</li>
                                                <li data-id="exterior-vinyl-protectant">Exterior Vinyl Protectant</li>
                                            </ul>
                                            <div class="template-component-button-box">
                                                <a href="book-your-wash.html" class="template-component-button">Pesan Sekarang</a>
                                            </div>
                                        </li>

                                    </ul>

                                </div>	

                            </li>
                                                
                        </ul>

                    </form>

                </div>
                
                <script type="text/javascript">
                    jQuery(document).ready(function($)
                    {
                        $('#template-booking').booking();
                    });
                </script>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-section-padding-reset template-clear-fix">
                
                <!-- Flex layout 50x50% -->
                <div class="template-layout-flex template-background-color-1 template-clear-fix">

                    <!-- Left column -->
                    <div class="template-background-image template-background-image-1"></div>

                    <!-- Right column -->
                    <div class="template-section-padding-1">
                        
                        <!-- Features list -->
                        <div class="template-component-feature-list template-component-feature-list-position-top">
                            
                            <!-- Layout 50x50% -->
                            <ul class="template-layout-50x50 template-clear-fix">
                                
                                <!-- Left column -->
                                <li class="template-layout-column-left">
                                    <span class="template-icon-feature-location-map"></span>
                                    <h5>Kenyamanan</h5>
                                    <p>Kami berdedikasi untuk menyediakan layanan berkualitas, kepuasan pelanggan dengan nilai tinggi di berbagai lokasi yang menawarkan jam kerja yang nyaman.</p>
                                </li>
                                
                                <!-- Right column -->
                                <li class="template-layout-column-right">
                                    <span class="template-icon-feature-eco-nature"></span>
                                    <h5>Produk Organik</h5>
                                    <p>Produk kami ramah lingkungan dan produk interior semuanya organik. Kami menggunakan kurang dari satu galon air dengan limbah nol.</p>											
                                </li>
                                
                                <!-- Left column -->
                                <li class="template-layout-column-left">
                                    <span class="template-icon-feature-team"></span>
                                    <h5>Team Berpengalaman</h5>
                                    <p>Anggota kru kami semua terlatih dan terampil dan dilengkapi dengan peralatan dan perlengkapan yang dibutuhkan agar kami dapat memberikan hasil terbaik.</p>											
                                </li>
                                
                                <!-- Right column -->
                                <li class="template-layout-column-right">
                                    <span class="template-icon-feature-spray-bottle"></span>
                                    <h5>Harga Yang Murah</h5>
                                    <p>Kami menawarkan berbagai layanan dengan harga terjangkau untuk memenuhi kebutuhan Anda. Kami menawarkan layanan premium sambil menghemat waktu dan uang Anda.</p>											
                                </li>
                                
                            </ul>
                            
                        </div>

                    </div>

                </div>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-clear-fix template-main">
                
                <!-- Header + subheader -->
                <div class="template-component-header-subheader">
                    <h2>Project Terbaru</h2>
                    <div></div>
                    <span>Gallery Cuci Mobil</span>
                </div>	
                
                <!-- Gallery -->
                <div class="template-component-gallery">

                    <!-- Filter buttons list -->
                    <ul class="template-component-gallery-filter-list">
                        <li><a href="#" class="template-filter-all template-state-selected">All</a></li>
                        <li><a href="#" class="template-filter-hand-wash">Cuci Biasa</a></li>
                        <li><a href="#" class="template-filter-auto-detail">Auto Detailing</a></li>
                        <li><a href="#" class="template-filter-triple-foam">Tiga Busa</a></li>
                        <li><a href="#" class="template-filter-hand-polish">Detail Mesin</a></li>
                        <li><a href="#" class="template-filter-hand-wax">Interior</a></li>
                    </ul>

                    <!-- Images list -->
                    <ul class="template-component-gallery-image-list">

                        <!-- Image -->
                        <li class="template-filter-hand-wash">

                            <div class="template-component-image template-component-image-preloader">

                                <!-- Orginal image -->
                                <a href="build/assets/images/sample/460x678/image_01.jpg" class="template-fancybox" data-fancybox-group="gallery-1">

                                    <!-- Thumbnail -->
                                    <img src="build/assets/images/sample/460x678/image_01.jpg" alt=""/>

                                    <!-- Image hover -->
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">BMW i3</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Triple Foam</span>
                                            </span>
                                        </span>
                                    </span>

                                </a>

                                <!-- Fancybox description -->
                                <div class="template-component-image-description">
                                    Suspendisse sagittis placerat diam sit amet viverra neque elementum et. Donec lacinia in tortor ac tristique. 
                                    In dui leo bibendum et dignissim non laoreet ut nulla. Nunc vulputate odio a dapibus feugiat tortor velit iaculis libero 
                                    sit amet euismod lacus elit et enim. Aliquam semper nunc sed rhoncus interdum.
                                </div>

                            </div>

                        </li>

                        <!-- Image -->
                        <li class="template-filter-auto-detail template-filter-triple-foam">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/460x306/image_01.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/460x306/image_01.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">Renault Clio</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Hand Polish</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="template-component-image-description">
                                    Nam mollis libero at mollis lacinia. Praesent nunc turpis mollis in congue a lacinia at nisl. 
                                    Quisque tincidunt vehicula dolor a eleifend. In nec tellus eu nisi fringilla molestie ac eu enim. 
                                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque gravida nibh a lobortis blandit risus turpis auctor ligula.
                                </div>
                            </div>
                        </li>

                        <!-- Image -->
                        <li class="template-filter-hand-wash template-filter-auto-detail template-filter-hand-wax">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/460x306/image_02.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/460x306/image_02.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">Volkswagen Polo</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Interior Dusting</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="template-component-image-description">
                                    Morbi est augue porta in consequat nec pretium eget nunc. In ullamcorper ante quis pharetra finibus. 
                                    Phasellus tincidunt augue sed velit molestie a pretium neque accumsan. Nam id ligula arcu. Proin non tempus eros. 
                                    Pellentesque congue libero eget tristique consectetur.
                                </div>
                            </div>
                        </li>

                        <!-- Image -->
                        <li class="template-component-gallery-image-list-width-2 template-filter-hand-wash template-filter-triple-foam">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/760x506/image_06.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/760x506/image_06.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">Fiat Bravo</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Cleaning Waterless Wash &amp; Wax with Carnauba</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>	
                                <div class="template-component-image-description">
                                    Donec eget massa vitae metus maximus tempor. Vivamus maximus mattis ultricies. Sed viverra vitae metus in ornare. 
                                    Ut lacus massa finibus quis luctus quis faucibus sit amet risus. Ut elit neque pulvinar sit amet ipsum eget feugiat consequat 
                                    magna. Quisque fringilla ex sit amet rutrum varius velit arcu tempus tellus vitae euismod felis orci vel turpis.
                                </div>
                            </div>
                        </li>

                        <!-- Image -->
                        <li class="template-filter-triple-foam template-filter-hand-polish">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/460x678/image_03.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/460x678/image_03.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">BMW Mini Cooper</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Wheel Shine</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="template-component-image-description">
                                    Phasellus non commodo dolor. In iaculis eleifend ipsum id lacinia turpis sagittis ut. Ut id vestibulum mauris 
                                    ac laoreet augue. Nullam malesuada tempor finibus. Aliquam viverra augue ac tincidunt lacinia. Interdum et malesuada fames 
                                    ac ante ipsum primis in faucibus. Nullam ultricies viverra nulla ac egestas.
                                </div>
                            </div>
                        </li>

                        <!-- Image -->
                        <li class="template-filter-auto-detail template-filter-hand-polish">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/460x306/image_04.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/460x306/image_04.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">Mazda 3</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Scratch Repair</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="template-component-image-description">
                                    Praesent efficitur tortor sit amet nulla malesuada id venenatis velit sagittis. Aliquam blandit ipsum quis iaculis feugiat. 
                                    Sed eros lacus aliquet ut libero et faucibus ultricies nisi. Donec hendrerit dignissim ante vel feugiat augue tempor non. 
                                    Nunc auctor quam sollicitudin est blandit consectetur. Phasellus vitae suscipit purus.
                                </div>
                            </div>
                        </li>

                        <!-- Image -->
                        <li class="template-filter-triple-foam template-filter-hand-polish template-filter-hand-wax">
                            <div class="template-component-image template-component-image-preloader">
                                <a href="build/assets/images/sample/460x306/image_10.jpg" class="template-fancybox" data-fancybox-group="gallery-1">
                                    <img src="build/assets/images/sample/460x306/image_10.jpg" alt=""/>
                                    <span class="template-component-image-hover">
                                        <span>
                                            <span>
                                                <span class="template-component-image-hover-header">Mercedes A200</span>
                                                <span class="template-component-image-hover-divider"></span>
                                                <span class="template-component-image-hover-subheader">Hazy Headlights Restoring</span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="template-component-image-description">
                                    Nam et ornare mauris. Nam fringilla eu metus ac vehicula. Mauris dapibus hendrerit ante imperdiet varius orci. 
                                    Fusce rutrum lobortis erat. Nunc vehicula vehicula risus sit amet cursus. Curabitur non congue magna vel porttitor magna. 
                                    Duis interdum ligula sed lectus elementum ut interdum neque dignissim.
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>	
                
                <!-- Button -->
                <div class="template-align-center">
                    <a href="gallery.html" class="template-component-button">Project Lainnya</a>
                </div>
                
            </div>		
            
            <!-- Section -->
            <div class="template-section template-section-padding-reset template-clear-fix">
                
                <!-- Flex layout 50x50% -->
                <div class="template-layout-flex template-clear-fix template-background-color-1">
                    
                    <!-- Left column -->
                    <div>
                        
                        <!-- Header + subheader -->
                        <div class="template-component-header-subheader">
                            <h2>Testimoni</h2>
                            <div></div>
                            <span>Pelanggan Kami</span>
                        </div>		
                        
                        <!-- Space -->		
                        <div class="template-component-space template-component-space-2"></div>
                        
                        <!-- Testimonials list -->							
                        <div class="template-component-testimonial-list template-clear-fix">
                            
                            <!-- Content -->
                            <ul class="template-clear-fix">
                                <li>
                                    <p>I could not be happier with the job you did on my car. It looks great. Thank you for your great service and I will continue to refer friends and family to you all.</p>
                                    <h6>Dotti Newman</h6>
                                    <span>Audi Q5</span>
                                </li>
                                <li>
                                    <p>I think Auto Spa is the best car washers ever. Love the price, convenience and customer service. Thanks so much! My car looks like new. I will definitely come again.</p>
                                    <h6>David Magnus</h6>
                                    <span>Nissan Titan X5</span>
                                </li>
                                <li>
                                    <p>Finally a car wash that does pay attention to the detail. I have a little extra time and money and I let them do the full detail and it always has turned out great.</p>
                                    <h6>Josh Williams</h6>
                                    <span>Toyota Avensis</span>
                                </li>
                            </ul>
                            
                            <!-- Navigation -->
                            <div class="template-component-testimonial-list-navigation">
                                <a href="#" class="template-component-testimonial-list-navigation-left template-icon-meta-arrow-large-rl"></a>
                                <span class="template-component-testimonial-list-navigation-center template-icon-feature-testimonials"></span>
                                <a href="#" class="template-component-testimonial-list-navigation-right template-icon-meta-arrow-large-rl"></a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <!-- Right column -->
                    <div class="template-background-image template-background-image-2 template-color-white">
                    
                        <!-- Header + subheader -->
                        <div class="template-component-header-subheader">
                            <h2>Berita Baru</h2>
                            <div></div>
                            <span>Terbaru Dari Blog</span>
                        </div>
                        
                        <!-- Recent posts list -->
                        <ul class="template-component-recent-post">
                            <li>
                                <a href="single-post-right-sidebar.html">
                                    <span>How to choose car detailing company</span>
                                    <span>April 14, 2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="single-post-right-sidebar.html">
                                    <span>Interior car wash and detailing service</span>
                                    <span>March 25, 2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="single-post-right-sidebar.html">
                                    <span>How to book a car wash online</span>
                                    <span>March 05, 2015</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <!-- Section -->
            <div class="template-section template-section-padding-1 template-clear-fix template-main">
                
                <!-- Features list -->
                <div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">
                    
                    <!-- Layout 33x33x33% -->
                    <ul class="template-layout-33x33x33 template-clear-fix">
                        
                        <!-- Left column -->
                        <li class="template-layout-column-left">
                            <span class="template-icon-feature-phone-circle"></span>
                            <h5>Call Us At</h5>
                            <p>
                                (+505) 122 225 225<br/>
                                (+505) 122 225 224<br/>
                            </p>
                        </li>
                        
                        <!-- Center column -->
                        <li class="template-layout-column-center">
                            <span class="template-icon-feature-location-map"></span>
                            <h5>Our Address</h5>
                            <p>
                                464 Rhode Island Av.<br/>
                                Portland, OR 97219
                            </p>
                        </li>
                        
                        <!-- Right column -->
                        <li class="template-layout-column-right">
                            <span class="template-icon-feature-clock"></span>
                            <h5>Working hours</h5>
                            <p>
                                Monday - Friday: 8 am - 6 pm<br/>
                                Saturday: 8 am - 3 pm
                            </p>
                        </li>
                        
                    </ul>
                </div>
                
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
                        <span class="template-component-google-map-button-label-show">Show Map</span>
                        <span class="template-component-google-map-button-label-hide">Hide Map</span>
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
                            marker			:	'assets/images/map_pointer.png'
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
                            <img src="build/assets/images/logo-sm.png" alt="" class="template-logo" />
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