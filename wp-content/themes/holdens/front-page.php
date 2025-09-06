<?php
/**
 * Homepage Template
 */

get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="videoWrapper">
            <div class="reveal"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Everwaste - Specialist Waste Solutions">
            <iframe 
                id="vimeoPlayer"
                src="https://player.vimeo.com/video/1115441329?badge=0&amp;&amp;autoplay=1&amp;loop=1&amp;autopause=0&amp;muted=1&amp;background=1" 
                allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen="" 
                title="Everwaste - Specialist Waste Solutions" 
                data-ready="true" 
                frameborder="0"></iframe>
            <div class="text">
                <div class="shape" style="right: 150%;"></div>
                <div class="inner" style="opacity: 0;">
                    <h1>Tailored solutions,<br> fit for tomorrow.<br> <span>We are everwaste.</span></h1>
                    <p style="opacity:0;">We don't just manage waste - we solve complex challenges. Providing safe, sustainable and tailored solutions that you can count on.</p>
                    <!-- <a href="<?php // echo esc_url(home_url('/')); ?>contact-us" class="button yellow">Contact Us</a> -->
                    <a style="opacity:0;" href="#getInTouch" class="button yellow">Get in touch</a>
                </div>
            </div>
        </div>
        
        <script src="https://player.vimeo.com/api/player.js"></script>
        <script>
            var player = new Vimeo.Player('vimeoPlayer');
            player.ready().then(function() {
                document.getElementById('vimeoPlayer').classList.add('loaded');
            });
        </script>
    </div>
</section>

<section class="about">
    <div class="container">  
        <svg style="opacity: 0;transform: translateY(100px);" class="icon" preserveAspectRatio="none" width="1087" height="560" viewBox="0 0 1087 560" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-198.891 557.498C-197.764 559.069 -195.949 560 -194.016 560L1083.15 560C1085.6 560 1087.02 557.236 1085.59 555.251L688.891 2.50159C687.764 0.931213 685.949 0 684.016 0L-593.154 0C-595.597 0 -597.016 2.76428 -595.592 4.74921L-198.891 557.498Z" fill="url(#paint0_linear_9046_2771)" fill-opacity="0.5"/>
            <defs>
            <linearGradient id="paint0_linear_9046_2771" x1="535.672" y1="458.5" x2="826.055" y2="-206.626" gradientUnits="userSpaceOnUse">
            <stop stop-color="#000833"/>
            <stop offset="1" stop-color="#1900FF"/>
            </linearGradient>
            </defs>
        </svg>
      
        <div class="text">
            <div class="inner">
                <h2>Specialist waste solutions. <span>Delivered the right way.</span></h2>
                <p>From waste recovery to disposal, we offer tailored waste services designed for today's challenges - and tomorrow's expectations. With owned infrastructure, expert teams and real industry insight, we tackle your challenges head-on.</p>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="anchor" id="ourServices"></div>
    <div class="container">
        <div class="title">
            <h2><span>Our Services.</span></h2>
        </div>
        <div class="allServices">
            <a href="#" class="service onScreen">
                <h3><span>Recovery &amp; Recycling</span>
                    <div class="bg"></div>
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recovery.jpg" alt="Everwaste - Recovery and Recycling Solutions">
            </a>
            <a href="#" class="service onScreen">
                <h3><span>Collections &amp; Skips</span>
                    <div class="bg"></div>
                    
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/collections.jpg" alt="Everwaste - Collection and Skips Solutions">
            </a>
            <a href="#" class="service onScreen">
                    <h3><span>Disposal &amp; Landfill</span>
                    <div class="bg"></div>                    
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/disposal.jpg" alt="Everwaste - Disposal and Landfill Solutions">
            </a>
            <a href="#" class="service onScreen">
                <h3><span>Hazardous Waste Management</span>
                <div class="bg"></div>                    
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hazardous.jpg" alt="Everwaste - Hazardous Waste Management Solutions">
            </a>
        </div>
    </div>
</section>

<section class="rooted">
    <div class="anchor" id="ourCulture"></div>
    <div class="container">   
        <div class="bg onScreen"></div>
        
        <div class="text">
            <!-- <svg class="bg" width="592" height="813" viewBox="0 0 592 813" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.72007 0.498753C9.65379 0.496098 11.4703 1.42555 12.5993 2.9954L590.813 806.933C592.24 808.916 590.825 811.682 588.382 811.685L61.506 812.41C59.5723 812.413 57.7558 811.484 56.6268 809.914L-521.587 5.97579C-523.014 3.99273 -521.599 1.22748 -519.156 1.22412L7.72007 0.498753Z" fill="url(#paint0_linear_9046_2772)" fill-opacity="0.5"/>
                <defs>
                <linearGradient id="paint0_linear_9046_2772" x1="279.145" y1="508.755" x2="-8.69081" y2="994.028" gradientUnits="userSpaceOnUse">
                <stop stop-color="#000833"/>
                <stop offset="1" stop-color="#1900FF"/>
                </linearGradient>
                </defs>
            </svg> -->
            <div class="inner">
                <h2>Rooted in responsibility. <br><span>Powered by people.</span></h2>
                <p>We're a specialist partner that's reshaping the waste industry with smart infrastructure, trusted expertise and a commitment to doing things right - every time.</p>
            </div>
        </div>
        <div class="imageWrapper">
            <div class="inner maskBottomLeft">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooted.jpg" alt="Everwaste - Powered by People">
            </div>
        </div>
    </div>
</section>

<section class="thirds">
    <div class="container">
        <div class="third onScreen">
            <div class="text">
                <h3>The Everwaste way.</h3>
                <p>Our mission is to tackle complex waste problems with innovation and integrity. We empower our people and build tailored solutions that last.</p>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 38 32" xmlns="http://www.w3.org/2000/svg" width="38" height="32" fill="none"><path fill="#fff" d="M19.392 30.6c.278 0 .555-.056.83-.166.274-.11.507-.26.698-.448L34.647 16.36a6.467 6.467 0 0 0 1.004-1.253c.257-.429.386-.917.386-1.465 0-.552-.129-1.089-.386-1.61a5.763 5.763 0 0 0-1.004-1.429l-7.835-7.796a6.524 6.524 0 0 0-1.363-.939 3.283 3.283 0 0 0-1.48-.328c-.75 0-1.402.202-1.958.608-.555.406-1.09.875-1.602 1.406l-1.126 1.113 3.54 3.326c.406.426.74.894 1.003 1.406.263.51.394 1.052.394 1.624 0 .91-.313 1.675-.94 2.295-.627.62-1.398.93-2.314.93-.452 0-.895-.073-1.326-.219a3.133 3.133 0 0 1-1.2-.765L14.499 9.33l-7.206 7.128c-.191.22-.342.462-.454.725-.11.264-.167.531-.167.802 0 .492.163.89.488 1.191.325.302.736.453 1.234.453.273 0 .539-.055.798-.166.259-.11.5-.259.722-.448l5.18-5.078 1.053 1.042-5.216 5.124a1.96 1.96 0 0 0-.478.723 2.309 2.309 0 0 0-.143.795c0 .464.166.862.497 1.193.331.33.738.496 1.219.496.277 0 .552-.055.827-.165.275-.11.508-.26.699-.45l5.616-5.59 1.1 1.087-5.652 5.509c-.199.22-.352.47-.46.75a2.27 2.27 0 0 0-.162.82c0 .463.166.86.498 1.19.331.33.738.494 1.219.494.276 0 .552-.055.827-.165.274-.11.507-.26.698-.45l5.616-5.59 1.1 1.087-5.616 5.51a2.54 2.54 0 0 0-.453.77 2.316 2.316 0 0 0-.167.819c0 .506.164.91.494 1.211.329.302.723.453 1.183.453Zm-.01 1.4c-.971 0-1.779-.351-2.422-1.054-.644-.702-.908-1.554-.792-2.555-1.038.074-1.92-.226-2.648-.901-.727-.675-1.073-1.576-1.037-2.703-1.166.016-2.1-.312-2.804-.983-.703-.672-.993-1.557-.87-2.656-1.018.105-1.881-.14-2.588-.736-.707-.596-1.06-1.406-1.06-2.428 0-.457.086-.91.258-1.359a3.43 3.43 0 0 1 .81-1.22l8.27-8.169 4.922 4.87c.223.196.451.347.686.454.235.106.51.16.826.16.449 0 .843-.163 1.184-.489.34-.325.51-.732.51-1.22 0-.31-.062-.59-.186-.84a2.98 2.98 0 0 0-.435-.658l-6.778-6.705c-.467-.438-.93-.759-1.39-.962a3.691 3.691 0 0 0-1.512-.305c-.546 0-1.03.11-1.45.328-.422.22-.854.532-1.297.939L3.255 9.031c-.428.422-.759.932-.992 1.532a4.236 4.236 0 0 0-.278 1.876c.048.297.116.563.203.796l.272.724-1.194 1.134a4.677 4.677 0 0 1-.494-1.185A8.43 8.43 0 0 1 .51 12.44a6.203 6.203 0 0 1 .35-2.483A5.157 5.157 0 0 1 2.203 7.93L8.479 1.72A5.564 5.564 0 0 1 10.24.47c.64-.282 1.355-.423 2.147-.423.79 0 1.5.141 2.129.424.628.282 1.22.698 1.776 1.25l1.881 1.86 1.88-1.907a5.634 5.634 0 0 1 1.741-1.25C22.421.14 23.131 0 23.923 0c.791 0 1.499.141 2.124.424.624.282 1.214.699 1.771 1.25L35.7 9.47c.557.55.996 1.164 1.318 1.842.322.678.483 1.408.483 2.19 0 .784-.16 1.486-.483 2.107a7.025 7.025 0 0 1-1.318 1.757L21.974 30.98c-.392.388-.803.655-1.233.801-.43.146-.884.219-1.359.219Z"/></svg>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3>Safety that sets the standard.</h3>
                <p>From ISO-certified systems to COTC-qualified staff, we prioritise safety, compliance and community transparency across every site.</p>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none"><path fill="#fff" d="M23 23.533c-1.65 0-3.024-.549-4.122-1.646-1.098-1.098-1.647-2.477-1.647-4.14 0-1.662.549-3.035 1.647-4.12C19.976 12.542 21.35 12 23 12s3.024.542 4.122 1.627c1.098 1.085 1.647 2.458 1.647 4.12 0 1.663-.549 3.042-1.647 4.14-1.098 1.097-2.472 1.646-4.122 1.646Zm0-1.538c1.197 0 2.202-.405 3.014-1.216.811-.811 1.217-1.815 1.217-3.012s-.406-2.201-1.218-3.012c-.811-.812-1.816-1.217-3.013-1.217-1.197 0-2.202.405-3.014 1.217-.811.811-1.217 1.815-1.217 3.012s.406 2.2 1.218 3.012c.811.81 1.816 1.216 3.013 1.216ZM34.069 38l-5.923-5.92c-.382-.383-.645-.78-.79-1.195a3.745 3.745 0 0 1-.218-1.243c0-.906.323-1.713.967-2.421.644-.708 1.47-1.062 2.48-1.062.801 0 1.431.184 1.89.554.457.369.989.856 1.594 1.46.59-.589 1.117-1.072 1.581-1.449.465-.377 1.106-.565 1.922-.565 1.042 0 1.873.354 2.495 1.063.622.709.933 1.516.933 2.423 0 .425-.08.85-.242 1.274a3.279 3.279 0 0 1-.766 1.16L34.07 38ZM9 38v-2.891c0-.882.255-1.671.764-2.369a5.055 5.055 0 0 1 1.98-1.614c1.902-.85 3.736-1.494 5.503-1.93 1.768-.436 3.753-.73 4.253-.73l1.038 1.538a22.842 22.842 0 0 0-5.069.632c-1.633.396-3.308 1.008-5.023 1.836-.595.31-1.061.7-1.4 1.17-.338.47-.507.96-.507 1.467v1.353h15.896L27.973 38H9Z"/></svg>
            </div>
        </div>
        <div class="third onScreen">
            <div class="text">
                <h3>Smart technology. Smarter thinking.</h3>
                <p>We invest in leading technologies, like ultrafiltration and resource recovery, to raise standards and reduce environmental impact.</p>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none"><path fill="#fff" d="M25 41a3.28 3.28 0 0 1-1.943-.618c-.58-.412-.9-.973-.956-1.683h-1.746c-.422 0-.786-.152-1.09-.455a1.469 1.469 0 0 1-.459-1.08v-6.16c-1.938-1.13-3.39-2.613-4.356-4.448-.967-1.834-1.45-3.722-1.45-5.665 0-3.32 1.163-6.131 3.488-8.435C18.813 10.152 21.65 9 25 9c3.35 0 6.187 1.152 8.512 3.456C35.837 14.76 37 17.572 37 20.891c0 1.893-.483 3.77-1.45 5.628-.966 1.86-2.418 3.354-4.356 4.485v6.16c0 .418-.153.778-.458 1.08a1.495 1.495 0 0 1-1.09.455H27.85c-.057.71-.368 1.271-.932 1.683A3.173 3.173 0 0 1 25 41Zm-4.645-3.836h9.29v-2.449h-9.29v2.449Zm0-4.308h9.29v-2.375h-9.29v2.375Zm-1.839-3.91h5.918v-6.085l-4.083-4.047.826-.818L25 21.784l3.823-3.788.826.819-4.083 4.046v6.085h5.918a10.947 10.947 0 0 0 2.903-3.572 9.721 9.721 0 0 0 1.065-4.483c0-2.877-1.017-5.322-3.049-7.336-2.032-2.014-4.5-3.02-7.403-3.02-2.903 0-5.371 1.006-7.403 3.02-2.033 2.014-3.049 4.46-3.049 7.336 0 1.566.355 3.053 1.065 4.46a10.872 10.872 0 0 0 2.903 3.595Z"/></svg>
            </div>
        </div>
    </div>
</section>

<section class="example">
    <div class="anchor" id="sustainability"></div>
    <div class="container"> 
        <div class="bg onScreen"></div>       
        <div class="imageWrapper">
            <div class="inner maskBottomRight">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="Everwaste - Sustainability that leads by example.">
            </div>
        </div>
        <div class="text">
            <div class="inner">
                <h2>Sustainability that <br><span>leads by example.</span></h2>
                <p>We're helping build a circular future through advanced recovery, partnerships and responsible infrastructure development across the UK.</p>
            </div>
        </div>        
    </div>
</section>
<section class="halves">
    <div class="container">
        <div class="half onScreen">
            <div class="text">
                <h3>Circular Solutions.</h3>
                <p>We turn waste into opportunity - recovering more, reducing emissions and keeping valuable materials in use.</p>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 24 33" xmlns="http://www.w3.org/2000/svg" width="24" height="33" fill="none"><path fill="#fff" d="M.913 20.987a16.369 16.369 0 0 1-.643-2.104C.09 18.123 0 17.329 0 16.5c0-3.361 1.188-6.225 3.565-8.591 2.376-2.366 5.278-3.505 8.704-3.415h2.17l-3.448-3.45L12.034 0l5.208 5.21-5.208 5.211-1.043-1.044 3.447-3.45h-2.17c-3.058-.06-5.628.953-7.711 3.036-2.083 2.084-3.124 4.596-3.124 7.537 0 .588.042 1.175.127 1.761.085.586.213 1.15.382 1.695l-1.03 1.03ZM11.966 33l-5.208-5.21 5.208-5.211 1.043 1.044-3.448 3.45h2.17c3.059.06 5.63-.953 7.712-3.036 2.083-2.084 3.124-4.596 3.124-7.537 0-.588-.042-1.175-.127-1.761a10.95 10.95 0 0 0-.382-1.695l1.03-1.03c.247.642.461 1.344.642 2.103.18.76.27 1.554.27 2.383 0 3.331-1.188 6.188-3.565 8.569-2.377 2.381-5.278 3.527-8.704 3.437h-2.17l3.448 3.45L11.966 33Z"/></svg>
            </div>
        </div>
        <div class="half onScreen">
            <div class="text">
                <h3>Community-first approach.</h3>
                <p>We work with local authorities to create infrastructure that serves communities, not just manages waste.</p>
            </div>
            <div class="svgWrapper">
                <svg viewBox="0 0 41 33" xmlns="http://www.w3.org/2000/svg" width="41" height="33" fill="none"><path fill="#fff" d="M17.938 14.638c-2.115 0-3.875-.696-5.282-2.09-1.407-1.392-2.11-3.144-2.11-5.253 0-2.11.703-3.853 2.11-5.23C14.063.688 15.823 0 17.937 0c2.115 0 3.875.688 5.282 2.065s2.11 3.12 2.11 5.23c0 2.11-.703 3.86-2.11 5.254-1.407 1.393-3.167 2.09-5.282 2.09Zm0-1.951c1.534 0 2.82-.515 3.86-1.544 1.04-1.03 1.56-2.305 1.56-3.824 0-1.519-.52-2.793-1.56-3.823-1.04-1.03-2.326-1.544-3.86-1.544-1.535 0-2.822.515-3.861 1.544-1.04 1.03-1.56 2.304-1.56 3.823 0 1.52.52 2.794 1.56 3.824 1.04 1.029 2.326 1.543 3.86 1.543ZM32.12 33l-7.59-7.515c-.489-.484-.826-.99-1.011-1.515a4.712 4.712 0 0 1-.279-1.578c0-1.15.413-2.174 1.238-3.073.826-.899 1.885-1.348 3.177-1.348 1.027 0 1.834.234 2.422.703.586.468 1.267 1.086 2.043 1.854a27.106 27.106 0 0 1 2.026-1.84c.595-.478 1.416-.717 2.462-.717 1.335 0 2.4.45 3.197 1.35.797.899 1.195 1.924 1.195 3.074 0 .54-.104 1.079-.31 1.618a4.16 4.16 0 0 1-.98 1.472L32.12 33ZM0 33v-3.67c0-1.118.326-2.12.979-3.006a6.465 6.465 0 0 1 2.537-2.049c2.436-1.08 4.786-1.896 7.051-2.45 2.264-.552 4.808-.926 5.449-.926l1.33 1.952c-2.237.032-4.402.3-6.495.802-2.093.503-4.238 1.28-6.436 2.33-.762.394-1.36.889-1.794 1.486-.433.597-.65 1.217-.65 1.861v1.718h20.367L24.309 33H0Z"/></svg>
            </div>
        </div>
    </div>
</section>
<section class="accreds">
    <div class="container">
        <div class="title">
            <h2>Our partnerships and accreditations.</h2>
        </div>
        <div class="logos">
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso-9001.png" alt="BSI ISO 9001">
            </div>
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/safeContractor.png" alt="Alcumus Safe Contractor">
            </div>
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SSIP.png" alt="Assessed by a SSIP member scheme">
            </div>
            <div class="logo onScreen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CIWM-Affiliated.png" alt="CIWM Affiliate Organisation 2024">
            </div>
        </div>
    </div>
</section>
<section class="contactFormSec">
    <div class="anchor" id="getInTouch"></div>
    <div class="container">
        <div class="inner">
            <div class="title">
                <h3>Get in touch</h3>
            </div>
            <div class="bottom">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="208520d" title="Contact form"]'); ?>
                </div>
                <div class="text">
                    <h2>Need a waste partner who goes further?</h2>
                    <p>We're here to tackle complex waste challenges head-on. Contact us for expert support and fast, flexible, tailored solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(SplitText) 
   
    // GSAP timeline for .reveal
    if (window.gsap) {
        const tl = gsap.timeline();
        
        const h1 = document.querySelector('.hero h1');
        const heroShape = document.querySelector('.hero .text .shape');
        const textWrapper = document.querySelector('.hero .text .inner');
        const heroDescription = document.querySelector('.hero .text .inner p');
        const heroButton = document.querySelector('.hero .text .inner .button');
        const reveal = document.querySelector('.hero .reveal');
        const aboutIcon = document.querySelector('.about .icon');
        
        tl.to(heroShape, { right: '0%', duration: .5, delay: .1 });
        tl.to(textWrapper, { opacity: 1, duration: .3 }, "-=0.2");
        // You can add more animations to the timeline as needed
        if (h1 && window.SplitText) {
            const split = new SplitText(h1, { type: "words,chars" });
            gsap.set(split.chars, { y: 80, opacity: 0 });
            tl.to(split.chars, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.03,
                ease: "power3.out"
            });
        }
        tl.to(heroDescription, { opacity: 1, duration: .3 }, "-=0.6");
        tl.to(heroButton, { opacity: 1, duration: .3 }, "-=0.6");
        tl.to(reveal, { opacity: 0, duration: .3 }, "-=0.4");
        tl.to(aboutIcon, { y: 0, opacity: 1, duration: .3 }, "-=0.4");
    }

    const onScreenElements = document.querySelectorAll('.onScreen');
    if ('IntersectionObserver' in window && onScreenElements.length) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        onScreenElements.forEach(el => observer.observe(el));
    }
});
</script>
<?php get_footer(); ?>