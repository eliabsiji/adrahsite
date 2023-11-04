<?php $__env->startSection('content'); ?>
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
                        <p>Our firm nisl sodales sit amet sapien idea placeran sodales oite. Vivamus ne miss rhoncus felis into Pozo Photography Agency. Donec arcu lectus, bibendum sed turpis ut, porta dictum leon.</p>
                        <p><b>VAT :</b> USA002323065B06</p>
                    </div>
                    <!-- Location -->
                    <div class="col-md-4 mb-60 animate-box" data-animate-effect="fadeInUp">
                        <h4>Phone</h4>
                        <p>+1 650-333-0000</p>
                        <h4>Email</h4>
                        <p>photography@adrahstudio.com</p>
                        <h4>Address</h4>
                        <p>1010 Broadway NY, New York 10001 USA</p>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/contact.blade.php ENDPATH**/ ?>