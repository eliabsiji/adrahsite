@extends('master')
@section('content')
        <!-- Contact -->
        <div class="contact next-section-contact pt-130">
            <div class="container">
                <div class="row">
                    <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                        <h2>Contact Us</h2>
                    </div>

                    <!-- Info -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Adrah Studio</h4>
                        <p>
                           We are a photography and videography company that
                            specializes in capturing life’s most precious moments.
                            They believe that every moment is worth capturing, and
                             we’re passionate about helping their clients create
                             lasting memories.We have a presence on different
                             social media platforms.
                        </p>

                    </div>
                    <!-- Location -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Phone</h4>
                        <p>
                            <a href="https://wa.me/4407565241644?text=Hello,%20i%20want%20to%20make%20enquiry%20about%20your%20services"> +447565241644</a>

                        </p>
                        <h4>Email</h4>
                        <p>contact@adrahstudio.com</p>
                        <h4>Address</h4>
                        <p> 31, Sandringham Close. Wellingborough.NN8 2EJ.</p>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <div>
                            <h4>Drop us a line!</h4>
                        </div>
                        <form method="post" class="contact__form" action="#">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
