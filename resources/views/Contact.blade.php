@extends('layouts.baseLayout')
<!-- contact-us section begin -->
@section('content')
<section class="contact-us-section" id="contact-us-section">
        <div class="container" style="padding-top:90px">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="contact-us-text">
                        <h5 class="contact-us-title">Contact Us</h5>
                        <h2 class="contact-us-subtitle">Get in Touch</h2>
                        <p class="contact-us-title-describe">Please feel free to contact us through our support center. Simply choose the appropriate support options to send us your questions, concerns and/or feedback.Our customer service team is ready to overcome any issues that might occur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-img">
                        <img src="img/contact-us.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form">
                        <form id="contactForm" method="post" class="contact-form-aqua">
                            <h2 class="contact-head">Send Us a Massage</h2>
                            <input type="text" name="name" required="" placeholder="Name *" class="contact-frm active">
                            <input type="email" name="email" required="" placeholder="Email *" class="contact-frm">
                            <textarea name="message" id="message" placeholder="Message *" class="contact-msg"></textarea>
                            <input id="form-submit" type="submit" value="SUBMIT NOW" class="contact-btn">
                            <br>
                            <br>
                            <span class="msgSubmit"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    <!-- contact-us section end -->
