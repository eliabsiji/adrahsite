<?php $__env->startSection('content'); ?>
  <!-- About Us -->
  <section class="about pt-130">
    <div class="container">
        <div class="row">
            <div class="col-md-4 image animate-box" data-animate-effect="fadeInUp">
                <div class="img"> <img src="<?php echo e(asset('html/images/slider/2.jpg')); ?>" alt=""> </div>
            </div>
            <div class="col-md-8 image animate-box" data-animate-effect="fadeInUp">
                <!-- About -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>Who We Are<span>@ Adrah Studios</span></h3>
                        <p>Adrah Studios is a photography and videography company that specializes in capturing life’s most precious moments. They believe that every moment is worth capturing, and we’re passionate about helping their clients create lasting memories. We are located in Wellingborough, Northamptonshire, UK. We have a presence on different social media platforms.</p>
                        <p><b>Phone :</b>  07565241644
                        <br /><b>E-mail :</b> photography@adrahstudios.com
                        <br /><b>Skype :</b> @pozoartphoto

                        </p>
                    </div>
                </div>
                <!-- Team -->
                <div class="row mt-60">
                    <div class="col-md-12">
                        <h3>Professional <span></span>Team</span></h3>
                        <br />
                    </div>
                    <div class="col-md-6">
                        <div class="team-holder">
                            <div class="team-image-holder">
                                <a href="<?php echo e(route('team1')); ?>">
                                    <img src="<?php echo e(asset('html/images/gallery/51.jpg')); ?>" class="img-fluid" alt="">
                                    <div class="team-side-info">
                                        <h4 class="team-name">Adetunji  Ayeni</h4>
                                        <h6 class="team-position">Lead Creative Director</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <ul class="team-info-social text-center">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="team-holder">
                            <div class="team-image-holder">
                                <a href="team-details.html">
                                <img src="<?php echo e(asset('html/images/gallery/54.jpg')); ?>" class="img-fluid" alt="">
                                <div class="team-side-info">
                                    <h4 class="team-name">Simeon Owolabi </h4>
                                    <h6 class="team-position">Lead Creative Director</h6>
                                </div>
                                </a>
                            </div>
                        </div>
                        <ul class="team-info-social text-center">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adrahsite\resources\views/about.blade.php ENDPATH**/ ?>