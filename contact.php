<?php
    include "header.php";
?>

    <!-- Banner Section Start -->

    <section class="banner-section position-relative">
        <img class="banner-shape" src="assets/images/banner/shape1.png" alt="shape" />
        <div class="container">
            <div class="row">
                <!-- Banner-Content Start -->
                <div class="col-md-6">
                    <div class="banner-content banner-padding">
                        <h3 class="title">Contact us</h3>
                        <p>
                        Welcome to Drive Doc Vehicle Assistance and Service App! We're here to assist you with all your vehicle-related needs. Whether you have questions, need support, or want to provide feedback, we're just a message away. Feel free to reach out to us through any of the following methods: <br />
              
                        </p>
                    </div>
                </div>
                <!-- Banner-Content End -->

                <!-- Banner-Content Start -->
                <div class="col-md-6 mt-7 mt-md-0">
                    <div class="banner-content scene banner-img">
                        <div data-depth="0.2">
                            <img src="assets/images/contact/1.png" alt="img" />
                        </div>
                    </div>
                </div>
                <!-- Banner-Content End -->
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    
   
    <!-- title section start -->
    <br> 

    <div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
            <div>
                <img src="assets/images/service/12.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-6">
        <div class="title-section mb-3 text-center">
                       <span class="sub-title"><b>Feedback and Suggestions</b></span>
                        
                        <p class="mb-10">
                        We value your input and continuously strive to improve our app based on user feedback. If you have any suggestions, feature requests, or ideas to share, please let us know. Your feedback helps us make Drive Doc even better.
                        </p>
                        <a href="single-service.html" class="btn btn-lg btn-dark btn-hover-dark">Email us</a>
                    </div>

                    <div class="title-section mb-3 text-center">
                       <span class="sub-title"><b>Business Enquiries</b></span>
                        
                        <p class="mb-10">
                        For business partnerships, collaborations, or any other business-related inquiries, please contact our business development team. We're always open to exploring opportunities to enhance our services.
                        </p>
                        <b>Email us at business@drivedocapp.com<b>
                    </div>

        </div>
    </div>
    </div>

  
    <section class="contact-section" style="margin-top: 50px;">
        <div class="container">
            <div class="row mb-n7">
                <div class="col-xl-6 col-lg-6 mb-7">
                    <!-- contact-title-section start -->
                    <div class="contact-title-section">
                        <h3 class="title">Get in touch</h3>
                        <p>
                        Our dedicated customer support team is available to help you with any issues or inquiries you may have. We're committed to providing timely and helpful assistance to ensure your experience with Drive Doc is seamless.
                        <br>We aim to respond to all inquiries as quickly as possible, usually within 24 hours during our business hours.

Thank you for choosing DriveDoc. We appreciate your trust in us and look forward to serving your vehicle needs. Your satisfaction is our top priority, and we're here to help however we can.<br>
              
                        </p>
                    </div>
                
                    <!-- contact-title-section end -->

                    <form id="contactForm" class="row" action="https://htmldemo.net/buznex/buznex/assets/php/contact.php" method="POST">
                        <!-- assets/php/contact.php -->
                        <div class="col-12 col-sm-6 mb-7">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name*" />
                        </div>
                        <div class="col-12 col-sm-6 mb-7">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email*" />
                        </div>

                        <div class="col-12 mb-9">
                            <textarea class="form-control massage-control" name="massage" id="massage" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button id="contactSubmit" type="submit" class="btn btn-dark btn-hover-dark" data-complete-text="Well Done!">
                                Send Message
                            </button>
                            <p class="form-message mt-3"></p>
                        </div>
                    </form>
                </div>

                <div class="col-xl-5 col-lg-6 mb-7 offset-xl-1">
                    <div class="contact-address text-center">
                        <!-- address-list start -->
                        <div class="address-list mb-4 mb-xl-10 pb-2">
                            <h4 class="title">Office Addres</h4>
                            <p>
                                245 Southern Street, Apartment no. 174 Central Twon, New
                                Yourk, USa
                            </p>
                        </div>
                        <!-- address-list end -->
                        <!-- address-list start -->
                        <div class="address-list mb-4 mb-xl-10 pb-2">
                            <h4 class="title">Phone Number</h4>
                            <ul>
                                <li>
                                    <a class="phone-number" href="tel:+12345678987">+12345 678 987</a>
                                </li>
                                <li>
                                    <a class="phone-number" href="tel:+98745612321">+98745 612 321</a>
                                </li>
                            </ul>
                        </div>
                        <!-- address-list end -->
                        <!-- address-list start -->
                        <div class="address-list">
                            <h4 class="title">Reach us</h4>
                            <ul>
                                <li>
                                    <a class="mailto" href="mailto:info@example.com">info@example.com</a>
                                </li>
                                <li>
                                    <a class="mailto" href="mailto:www.example.com">www.example.com</a>
                                </li>
                            </ul>
                        </div>
                        <!-- address-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section ENd -->
    <!-- News letter Section Start -->
    <section class="news-letter-section section-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-6 mx-auto">
                    <div class="title-section mb-10 text-center">
                        <span class="sub-title">NEWSLETTER</span>
                        <h3 class="title mb-0">
                            Subscribe <span class="text-info">Newsletter</span> &
                            <br class="d-none d-xl-block" />get latest update...
                        </h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 mx-auto">
                    <form id="mc-form" class="news-letter-form d-flex">
                        <input id="mc-email" class="form-control" type="email" placeholder="Enter Email here" name="email" required='' />
                        <button class="search-btn" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include "footer.php";
?>