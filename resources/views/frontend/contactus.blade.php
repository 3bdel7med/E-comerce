@include('frontend.include.header')
<div class="page-header">
    <div class="page-header-bg" style="background-image: url('./img/2.jpg');" data-stellar-background-ratio="0.5" ></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase">Contact</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
            <div class="section-title">
                <div class="section-row">

                <h2 class="title">Contact Information</h2>
            </div>
            <p></p>
            <ul class="contact">
                <li><i class="bi bi-phone"></i> 01123281471</li>
                <li><i class="bi bi-envelope"></i> <a href="#">abdelhmedfthy372@gmail.com</a></li>
                <li><i class="bi bi-map-marker"></i> Egypt Cairo</li>
            </ul>
        </div>

        <div class="section-row">
            <div class="section-title">
                <h2 class="title">Mail us</h2>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="input" type="text" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="input" name="message" placeholder="Message"></textarea>
                        </div>
                        <button class="primary-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        <!-- social widget -->
        <div class="aside-widget">
            <div class="section-title">
                <h2 class="title">Social Media</h2>
            </div>
            <div class="social-widget">
                <ul>
                    <li>
                        <a href="#" class="social-facebook">
                            <i class="bi bi-facebook"></i>
                            <span>21.2K<br>Followers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-twitter">
                            <i class="bi bi-twitter"></i>
                            <span>10.2K<br>Followers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-google-plus">
                            <i class="bi bi-google-plus"></i>
                            <span>5K<br>Followers</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /social widget -->

        <!-- newsletter widget -->
        <div class="aside-widget">
            <div class="section-title">
                <h2 class="title">Newsletter</h2>
            </div>
            <div class="newsletter-widget">
                <form>
                    <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                    <input class="input" name="newsletter" placeholder="Enter Your Email">
                    <button class="primary-button">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('frontend.include.footer')
