<?php
$title = "Contact Us | Resurtech";
include('template/header.php');
?>
<!-- Banner Area Start -->

<div class="page__banner">
    <div class="page__banner-shape">
        <img src="assets/img/shape/page-banner-shape.png" alt="image" />
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-6 col-lg-7">
                <div class="page__banner-content">
                    <h2>Contact Us</h2>
                    <span><a href="index.php">Home</a>
                        <span>|</span>
                        Contact Us
                    </span>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="page__banner-img">
                    <img src="assets/img/banner/page-banner-img.png" alt="image" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner Area End -->

<!-- Contact Two Start -->

<div class="contact__two section-padding">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-xl-6">
                <div class="contact__two-content">
                    <div class="contact__two-title">
                        <span class="subtitle-one">Contact us</span>
                        <h2>Have Questions?</h2>
                        <p>
                            Feel free to reach out! Whether you have inquiries, need more
                            information, want to provide feedback, or share your thoughts,
                            we’re here to listen. We’re always eager to discuss anything
                            related to our mission!
                        </p>
                    </div>
                    <div class="contact__two-form">
                        <form action="#">
                            <div class="row gy-4 mb-4">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Your Name" />
                                </div>

                                <div class="col-xl-6">
                                    <input type="email" placeholder="Your E-mail" />
                                </div>

                                <div class="col-xl-6">
                                    <input type="tel" placeholder="Phone Number" />
                                </div>

                                <div class="col-xl-6">
                                    <input type="text" placeholder="Subject" />
                                </div>
                            </div>
                            <textarea placeholder="Your Message"></textarea>
                            <button type="submit" class="btn-two">
                                Submit Now
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact__two-contact-info">
                    <div class="contact__two-single-info">
                        <div class="contact__two-single-info-icon">
                            <img src="assets/img/icon//service-1.png" alt="image" />
                        </div>
                        <div class="contact__two-single-info-content">
                            <h4>Email</h4>
                            <span>resurtechglobal@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact__two-single-info">
                        <div class="contact__two-single-info-icon">
                            <img src="assets/img/icon//service-2.png" alt="image" />
                        </div>
                        <div class="contact__two-single-info-content">
                            <h4>Contacts</h4>
                            <span>+2348168143888</span>
                        </div>
                    </div>
                    <div class="contact__two-single-info">
                        <div class="contact__two-single-info-icon">
                            <img src="assets/img/icon//service-3.png" alt="image" />
                        </div>
                        <div class="contact__two-single-info-content">
                            <h4>Date</h4>
                            <span>Mondays - Fridays 9am -5pm</span>
                        </div>
                    </div>
                    <div class="contact__two-single-info">
                        <div class="contact__two-single-info-icon">
                            <img src="assets/img/icon/service-4.png" alt="image" />
                        </div>
                        <div class="contact__two-single-info-content">
                            <h4>Location</h4>
                            <span>Shop 2, Block A7, New Wazo Market, Ogbomoso, Nigeria.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Two End -->

<?php include('template/footer.php') ?>