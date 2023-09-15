@extends('layouts.app')
@section('title', 'Jadwal TKIT AL-QOLAM')
@section('content')

<section class="section-padding-equal">
            <div class="container">
                <div class="row row-40">
                    <div class="col-lg-16">
                        <div class="blog-grid">
                            <h3 class="title"><a href="single-blog.html">Jadwal Akademik</a></h3>
                            <div class="author">
                                <div class="author-thumb">
                                    <img src="assets/media/blog/author-1.png" alt="">
                                </div>
                               
                            </div>
                            <div class="post-thumbnail">
                                <div class="slick-slider slick-arrow-nav slick-dot-nav" data-slick='{"infinite": true, "autoplay": true, "arrows": true, "dots": true, "slidesToShow": 1}'>
                                    <div class="slick-slide">
                                        <a href="single-blog-gallery.html"><img src="assets/front-app/media/blog/pelajaran(2).png" alt="Blog"></a>
                                    </div>
                                    <div class="slick-slide">
                                        <a href="single-blog-gallery.html"><img src="assets/front-app/media/blog/pelajaran(1).png" alt="Blog"></a>
                                    </div>
                                    <div class="slick-slide">
                                        <a href="single-blog-gallery.html"><img src="assets/front-app/media/blog/pelajaran.png" alt="Blog"></a>
                                    </div>
                                </div>
                            </div>

            <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
          
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/">Mitra Global Techno</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
@endsection