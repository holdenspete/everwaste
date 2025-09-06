<?php
/**
 * Memberships Prices Template
 */

get_header(); ?>

<section class="hero justText">
    <div class="container">
        <div class="text" style="opacity:0;">
            <h1 class="smallHeaderOne">Pricing</h1>
            <h2 class="headerOne">Memberships <br>&amp; Prices</h2>
        </div>
        <div class="description" style="opacity:0;transform:translateY(50px);">
            <p>Discover our memberships and packages with pricing options tailored to your fitness journey at our Pilates studio.</p>
        </div>
    </div>
</section>
<div class="introGradient borderBottom">
    
    <section class="memberships">
        <div class="container">
            <div class="titleWrapper">
                <h2 class="pink">Memberships &amp; Packages</h2>
            </div>
            <div class="membershipsWrapper onScreen">
                <div class="toggle">
                    <span class="option optionOne active" data-filter=".membership">Memberships</span>
                    <span class="option optionTwo" data-filter=".package">Packages</span>
                </div>
                <div class="cards">
                    <!-- Membership Cards -->
                    <div class="card membership">
                        <div class="top">
                            <h3>Reformer off-peak<br> 1 class per week</h3>
                            <p>&pound;49<span>pm</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>4 classes per month</li>
                                <li>Off-peak classes only</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card membership">
                        <div class="top">
                            <h3>Reformer anytime<br> 1 class per week</h3>
                            <p>&pound;79<span>pm</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>4 classes per month</li>
                                <li>On and off-peak classes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card membership">
                        <div class="top">
                            <h3>Reformer anytime<br> 2 class per week</h3>
                            <p>&pound;129<span>pm</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>8 classes per month</li>
                                <li>On and off-peak classes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card membership">
                        <div class="top">
                            <h3>Reformer off-peak<br> 3 class per week</h3>
                            <p>&pound;179<span>pm</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>12 classes per month</li>
                                <li>Off-peak classes only</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card membership favourite">
                        <div class="top">
                            <h3>Reformer anytime<br> unlimited</h3>
                            <p>&pound;199<span>pm</span></p>
                            <span class="pop">Most Popular</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>Unlimited classes per month</li>
                                <li>On and off-peak classes</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Package Cards -->
                    <div class="card package">
                        <div class="top">
                            <h3>1 Class<br> Credit</h3>
                            <p>&pound;24<span> each</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>One Reformer class</li>
                                <li>Valid for 1 month</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card package">
                        <div class="top">
                            <h3>Reformer Intro<br> Pack</h3>
                            <p>&pound;25<span> total</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>2 Reformer classes</li>
                                <li>Valid for 1 month</li>
                                <li>*New clients only*</li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="card package">
                        <div class="top">
                            <h3>7 Day<br> Pass</h3>
                            <p>&pound;35<span> total</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>7 Reformer classes</li>
                                <li>Valid for 1 week</li>
                                <li>*New clients only*</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card package">
                        <div class="top">
                            <h3>14 Day<br> Pass</h3>
                            <p>&pound;49<span> total</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>14 Reformer classes</li>
                                <li>Valid for 2 weeks</li>
                                <li>*New clients only*</li>
                            </ul>
                        </div>
                    </div>



                    <div class="card package">
                        <div class="top">
                            <h3>10 Class<br> Pack</h3>
                            <p>&pound;185<span> total</span></p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>10 Reformer classes</li>
                                <li>Valid for 3 months</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card package favourite">
                        <div class="top">
                            <h3>20 Class<br> Pack</h3>
                            <p>&pound;310<span> total</span></p>
                            <span class="pop">Best Value</span>
                        </div>
                        <div class="bottom">
                            <ul>
                                <span>Includes:</span>
                                <li>20 Reformer classes</li>
                                <li>Valid for 6 months</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="membershipsMessage">
                    <p>* Please note that our membership cancellation policy is 2 months.</p>
                </div>
                <div class="cta">
                    <a href="<?php echo esc_url(home_url('/')); ?>memberships-prices" class="button pink"><span>Sign Up Now</span></a>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="ctaSec">
    <div class="container onScreen">
        <div class="titleWrapper">
            <h2 class="pink">Got questions about our memberships &amp; packages?</h2>
        </div>
        <p>If there's anything you are unsure of, simply visit our FAQ's page.</p>
        <a href="<?php echo home_url('/faqs'); ?>" class="button pink"><span>View our FAQ's</span></a>
    </div>
</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    gsap.registerPlugin(SplitText) 
    

    // GSAP timeline for .reveal
    if (window.gsap) {
        const tl = gsap.timeline();
        // You can add more animations to the timeline as needed
        const text = document.querySelector('.hero .text');
        const h1 = document.querySelector('.hero h1');
        const h2 = document.querySelector('.hero h2');
        if (h1 && window.SplitText) {
            const split = new SplitText([h1, h2], { type: "words,chars" });
            gsap.set(split.chars, { y: 80, opacity: 0 });
            gsap.set(text, { opacity: 1 });
            tl.to(split.chars, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.03,
                ease: "power3.out"
            });
        }
        tl.to('.description', { y: 0, opacity: 1, duration: .5 }, "-=0.65");

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


    // Show memberships by default, hide packages
    const packages = document.querySelectorAll('.package');
    packages.forEach(card => card.style.display = 'none');
    
    const options = document.querySelectorAll('.option');
    options.forEach(option => {
        option.addEventListener('click', function() {
            const filterValue = this.getAttribute('data-filter');
            
            // Update active class on toggle buttons
            options.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            
            // Simple show/hide based on filter
            if (filterValue === '.membership') {
                document.querySelectorAll('.membership').forEach(card => card.style.display = 'block');
                document.querySelectorAll('.package').forEach(card => card.style.display = 'none');
            } else if (filterValue === '.package') {
                document.querySelectorAll('.package').forEach(card => card.style.display = 'block');
                document.querySelectorAll('.membership').forEach(card => card.style.display = 'none');
            }
        });
    });
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){

        // Show memberships by default, hide packages
        $('.package').addClass('hidden');
        
        $('.option').on('click', function() {
            var filterValue = $(this).attr('data-filter');
            
            // Update active class on toggle buttons
            $('.option').removeClass('active');
            $(this).addClass('active');
            
            // Simple show/hide based on filter
            if (filterValue === '.membership') {
                $('.membership').removeClass('hidden');
                $('.package').addClass('hidden');
            } else if (filterValue === '.package') {
                $('.package').removeClass('hidden');
                $('.membership').addClass('hidden');
            }
        });
    });
</script>

<?php get_footer(); ?>