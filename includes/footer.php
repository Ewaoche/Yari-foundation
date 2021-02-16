<footer class="footer-two">
    <img src="images/footer/1.jpg" class="img-fluid  footer-one" alt="image">
    <div class="footer-top main-bg">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-5">
                    <div class="iq-footer-logo">
                        <a href="index.html"><img src="images/nigeria/Yari.png" class="img-fluid mb-4" alt="image"></a>
                        <p class="footer-info text-white">Contrary to popular belief, Lorem Ipsum is not simply random
                            text.</p>
                        <a class="slide-button button" href="contact-us.php">
                            <div class="first">contact us <i class="fas fa-angle-right"></i></div>
                            <div class="second">contact us <i class="fas fa-angle-right"></i></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <h5 class="text-white">Subscribe Newsletter.</h5>
                    <form class="position-relative subscribe-form">
                        <div class="form-group mb-0"> <input type="email"
                                class="form-control position-relative subscription-email" placeholder="Enter Email">
                        </div>
                        <a href="#" class="button bt-subscribe subscription-button"><i
                                class="fas fa-angle-right"></i></a>
                    </form>
                    <div class="social-media d-inline-block mb-4">
                        <ul class="social">
                            <li><a href="#" class="text-uppercase"><i
                                        class="fab fa-facebook-f iq-fw-6 pr-3"></i>facebook</a></li>
                            <li><a href="#" class="text-uppercase"><i
                                        class="fab fa-twitter iq-fw-6 pr-3"></i>twitter</a></li>
                            <li><a href="#" class="text-uppercase"><i
                                        class="fab fa-linkedin iq-fw-6 pr-3"></i>linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="footer-link">
                        <h5 class=" text-white">Navigation.</h5>
                        <ul class="list-inline">
                            <li class="list-item"><a href="about-us.php">About us</a></li>
                            <li class="list-item"><a href="#>FAQ</a></li>
                            <li class=" list-item"><a href="contact-us.php">Contact Us</a></li>
                            <li class="list-item"><a href="statement.php">Statement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-copyright text-center iq-fw-3 ">©Copyrights 2021 Yari Foundation </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-wave wave-animation">
        <div class="main-wave waveone">
            <div class="wave-effect wave-top"></div>
        </div>
        <div class="main-wave wavetwo">
            <div class="wave-effect wave-middle"></div>
        </div>
        <div class="main-wave wavethree">
            <div class="wave-effect wave-bottom"></div>
        </div>
    </div>
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"><i class="ion-ios-arrow-thin-up"></i></a>
    </div>
    <!-- back-to-top End -->
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-min.js"></script>
<!-- popper  -->
<script src="js/popper.min.js"></script>
<!--  bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Modernizr JavaScript -->
<script src="js/modernizr.js"></script>
<!-- Appear JavaScript -->
<script src="js/appear.min.js"></script>
<!-- Megamenu  -->
<script src="js/mega_menu.min.js"></script>
<!-- Timeline JavaScript -->
<script src="js/timeline.js"></script>
<!-- Wow -->
<script src="js/wow.min.js"></script>
<!-- scrollme -->
<script src="js/jquery.scrollme.min.js"></script>
<!-- countdown JavaScript -->
<script src="js/countdown.js"></script>
<!-- waypoints JavaScript -->
<script src="js/waypoints.min.js"></script>
<!-- Counterup JavaScript -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JavaScript -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- Progressbar JavaScript -->
<script src="js/circle-progress.min.js"></script>
<!-- Canvas JavaScript -->
<script src="js/canvasjs.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="revslider/js/jquery.themepunch.tools.min.js"></script>
<script src="revslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.video.min.js"></script>
<!-- Retina JavaScript -->
<script src="js/retina.min.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
<script>
var revapi12,
    tpj = jQuery;
tpj(document).ready(function() {
    if (tpj("#rev_slider_12_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_12_1");
    } else {
        revapi12 = tpj("#rev_slider_12_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "//localhost/revslider-standalone/revslider-standalone/revslider/public/revslider/assets/js",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                onHoverStop: "off",
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1400,
            gridheight: 868,
            lazyType: "none",
            parallax: {
                type: "mouse",
                origo: "enterpoint",
                speed: 400,
                levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 55],
            },
            shadow: 0,
            spinner: "spinner0",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
}); /*ready*/
</script>

<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="images/loader.gif" alt="loder">
    </div>
</div>
<!-- loading End -->
</body>

</html>