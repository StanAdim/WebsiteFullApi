<script lang="ts" setup></script>

<template>

<!-------- contact start -------->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <!-- <h2>Contact Us</h2> -->
                    <h3>Drop Us a Line</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">

                <!-------- contact form start -------->
                <form class="contact-form" action="#" method="post">
                    <p class="form-label">For any inquiries relating to my Retail and Leadership Programs</p>
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="name">Name(Required)</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="email">Email Address(Required)</label>
                            <input type="text" class="form-control" id="email" placeholder="Your Email*" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="phone">Phone No.(Optional)</label>
                            <input type="text" class="form-control" id="phone" placeholder="Your Phone"> 
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="service">Service(Required)</label>
                            <select id="service" class="form-control" required>
                                <option value="">Select Service</option>
                                <option value="">Financial Advice</option>
                                <option value="">Brand Developing</option>
                                <option value="">Advanced Reporting</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="message">Your Message</label>
                            <textarea placeholder="Write Message*" class="form-control" id="message" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit">Sent Message  <span class="icon"><i class="fa-solid fa-angles-right"></i></span></button>
                </form>
                <!-------- contact form end -------->
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-------- contact info start -------->
                <div class="contact-info">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <span class="icon"> 
                                        <img src="./assets/images/address.png" alt="">
                                    </span>
                                </div>
                                <div class="contact-box-content">
                                    <!-- title -->
                                    <h3 class="title">Office Address</h3>
                                    <p class="desc">
                                        Digital Techno Network & IT 
                                        <br>
                                        20 Eastbourne Terrace Cen
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <span class="icon">
                                        <img src="./assets/images/telephone.png" alt="">       </span>
                                </div>
                                <div class="contact-box-content">
                                    <!-- title -->
                                    <h3 class="title">Telephone No.</h3>
                                    <p class="desc">+550 198 360 2021,<br>+520 698 637 426, </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="contact-box">
                                <div class="contact-box-icon">
                                    <span class="icon">                   <img src="./assets/images/email.png" alt=""></span>
                                </div>
                                <div class="contact-box-content">
                                    <!-- title -->
                                    <h3 class="title">Email Address</h3>
                                    <p class="desc">info@example.com,<br>example@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------- contact info end -------->

            </div>
        </div>
    </div>
</section>
<!-------- contact end ------>


        <!-------- site map start ----->
        <section class="site-map ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.327856879496!2d89.65839427490229!3d25.56075691688005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd37aa8b6816bd%3A0x8fe1463701456871!2sHi-Tech%20Parks!5e0!3m2!1sen!2sbd!4v1690263157803!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-------- site map end ----->
</template>

<style scoped></style>
