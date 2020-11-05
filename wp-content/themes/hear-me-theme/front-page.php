<?php get_header();
      include 'additional-php-function.php';
?>



<div id="home" class="main-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="main-banner-content">
                    <div id="blank"></div>
                    <h1>Hii, I&#x27;M <br /><?php echo get_field('name'); ?></h1>
                    <p><?php echo get_field('description'); ?></p>
                    <form>
                        <?php
                        echo do_shortcode("[contact-form-7 id='63' title='Newsletter']"); 
                        
                        ?>
                        <!-- <input type="text" class="input-newsletter" placeholder="Enter your email address" />
                        <button type="submit">Join with me now</button> -->
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="main-banner-image">
                    <img src="<?php echo get_field('main_banner_image') ?>" class="main-image animate__animated animate__fadeInUp" alt="image"/>
                    <div class="banner-shape">
                        <img class="animate__animated animate__fadeInLeft" src="<?php echo get_theme_file_uri('images/line-bg1.png')?>" alt="image" />
                        <img class="animate__animated animate__fadeInRight" src="<?php echo get_theme_file_uri('images/line-bg2.png')?>" alt="image" />
                    </div>
    </div>
</div>
<section class="followers-area bg-f9f9f9 pt-100">
    <div class="container">
        <div class="section-title"><span class="sub-title">What Do I Love</span>

            <h2><?php echo get_field('what_do_i_love') ?></h2>
        </div> 
        <div class="row">
        <?php
                $page = get_field('social_media_pages');
                $page_selected_1 = $page[0];
                $page_selected_2 = $page[1];
                $page_selected_3 = $page[2];

                if ($page_selected_1 == 'instagram') { ?>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-followers-box">
                        <h3>
                            <?php 
                                
                                // Pulling Live instagram followers
                                $page = get_field('instagram_user_id');
                                echo instagram_user_info($page);
                            ?>
                        </h3><span class="sub-title d-block">Instagram followers</span><a class="link" href="https://instagram.com/<?php echo $page; ?>/"><i class="fab fa-instagram"></i> @<?php echo $page ?></a>
                        <div class="line"></div>
                        <p class ="bio" ><?php echo get_field('instagram_bio'); ?>.</p>
                    </div>
                </div> 

                <?php }

                if ($page_selected_1 == 'twitter' or $page_selected_2 == 'twitter' or $page_selected_3 =='twitter' ) { ?>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-followers-box">
                        <h3>
                            <?php 
                                
                                // Pulling Live twitter followers
                                $page = get_field('twitter_user_id');
                                echo '211K';
                            ?>
                        </h3><span class="sub-title d-block">Twitter followers</span><a class="link" href="#"><i class="fab fa-twitter"></i> @<?php echo $page ?></a>
                        <div class="line"></div>
                        <p class ="bio" ><?php echo get_field('twitter_bio'); ?>.</p>
                    </div>
                </div> 

                <?php }

                if ($page_selected_1 == 'facebook' or $page_selected_2 == 'facebook' or $page_selected_3 == 'facebook' ) { ?>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-followers-box">
                        <h3>
                            <?php 
                                
                                // Pulling Live facebook followers
                                $page = get_field('facebook_id');
                                echo '315K';
                            ?>
                        </h3><span class="sub-title d-block">Facebook followers</span><a class="link" href="#"><i class="fab fa-facebook"></i> @<?php echo $page ?></a>
                        <div class="line"></div>
                        <p class ="bio" ><?php echo get_field('facebook_about'); ?></p>
                    </div>
                </div>

                <?php }

                if ($page_selected_1 == 'pinterest' or $page_selected_2 == 'pinterest' or $page_selected_3 == 'pinterest' ) { ?>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-followers-box">
                        <h3>
                            <?php 
                                
                                // Pulling Live pinterest followers
                                $page = get_field('pinterest_user_id');
                                echo '315K';
                            ?>
                        </h3><span class="sub-title d-block">Pinterest followers</span><a class="link" href="#"><i class="fab fa-pinterest"></i> @<?php echo $page ?></a>
                        <div class="line"></div>
                        <p class ="bio" ><?php echo get_field('pinterest_bio'); ?></p>
                    </div>
                </div>

                <?php }

                if ($page_selected_1 == 'youtube' or $page_selected_2 == 'youtube' or $page_selected_3 == 'youtube' ) { ?>

                    <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-followers-box">
                        <h3>
                            <?php 
                                
                                // Pulling Live youtube followers
                                $page = get_field('youtube_channel_name');
                                echo '315K';
                            ?>
                        </h3><span class="sub-title d-block">Youtube followers</span><a class="link" href="#"><i class="fab fa-youtube"></i> @<?php echo $page ?></a>
                        <div class="line"></div>
                        <p class ="bio" ><?php echo get_field('youtube_bio'); ?></p>
                    </div>
                </div>

                <?php }

        ?>
        </div>
    </div>
    <div class="shape1"><img src="<?php echo get_theme_file_uri('images/insta-shape1.png')?>" alt="image" /></div>
</section>
<section id="about" class="about-area pt-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="about-image"><img src="<?php echo get_theme_file_uri('images/insta-about1.png')?>" class="main-image" alt="image" />
                    <div class="shape"><img src="<?php echo get_theme_file_uri('images\insta-about-shape1.png')?>" alt="image" /><img src="<?php echo get_theme_file_uri('images/insta-about-shape2.png')?>" alt="image" /></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="about-content"><span class="sub-title">About Me</span>
                    <h2>I&#x27;m a Instagram influencer designer running my own design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="btn-box"><button type="button" class="default-btn btn btn-secondary">Contact Me</button><span class="email">hello@alikamaya.com</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="socialStatistics" class="social-statistics-area pt-100">
    <div class="container">
        <div class="section-title">
            <h2>Social Statistics <?php echo $page_selected[0]; ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-social-statistics-box">
                    <h3>8M</h3><span class="sub-title d-block">Facebook followers</span><a class="link" href="#"><i class="bx bxl-instagram"></i> @alikamaya</a>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-social-statistics-box">
                    <h3>1.2M</h3><span class="sub-title d-block">Pinterest followers</span><a class="link" href="#"><i class="bx bxl-pinterest-alt"></i> @alikamaya</a>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-social-statistics-box">
                    <h3>58K</h3><span class="sub-title d-block">Linkedin followers</span><a class="link" href="#"><i class="bx bxl-linkedin"></i> @alikamaya</a>
                    <div class="line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape1"><img src="<?php echo get_theme_file_uri('images/insta-shape1.png')?>" alt="image" /></div>
</section>
<section id="instagramAudience" class="audience-area pb-100 pt-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="audience-image">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="image"><img src="<?php echo get_theme_file_uri('images/audience-img1.jpg')?>" alt="image" /></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="image"><img src="<?php echo get_theme_file_uri('images/audience-img2.jpg')?>" alt="image" /></div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="image"><img src="<?php echo get_theme_file_uri('images/audience-img3.jpg')?>" alt="image" /></div>
                        </div>
                    </div>
                </div>
                <div class="followers-engagement-rate">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-6">
                            <h3>275K</h3>
                            <p>followers</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-6">
                            <h3>13%</h3>
                            <p>average post engagement rate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="audience-content"><span class="sub-title"><a href="#">@Alikamaya</a></span>
                    <h2>Instagram + Audience</h2>
                    <div class="audience-content-inner instagram-audience-content">
                        <h5>Instagram Audience</h5>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <div class="audience-text">
                                    <h4>78% <span>female</span></h4>
                                    <h4>25-35 <span>years old</span></h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="audience-item">
                                    <div class="audience-header">
                                        <div class="count-box"><span class="count-text">95.5</span>%</div>US
                                    </div>
                                    <div class="audience-bar">
                                        <div class="bar-inner"></div>
                                    </div>
                                </div>
                                <div class="audience-item">
                                    <div class="audience-header">
                                        <div class="count-box"><span class="count-text">80.2</span>%</div>UK
                                    </div>
                                    <div class="audience-bar">
                                        <div class="bar-inner"></div>
                                    </div>
                                </div>
                                <div class="audience-item">
                                    <div class="audience-header">
                                        <div class="count-box"><span class="count-text">70.6</span>%</div>Canada
                                    </div>
                                    <div class="audience-bar">
                                        <div class="bar-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="audience-content-inner instagram-collaborations-content">
                        <h5>Instagram Collaborations</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-collaborations-box"><img src="<?php echo get_theme_file_uri('images/collaborations-img1.jpg')?>" alt="image" />
                                    <h3>Alika X Tempest</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-collaborations-box"><img src="<?php echo get_theme_file_uri('images/collaborations-img2.jpg')?>" alt="image" />
                                    <h3>LUXE + COTTON</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners-area bg-f9f9f9 pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Trusted Partners</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner1.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner2.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner3.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner4.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner5.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner6.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner7.png')?>" alt="image" /></a></div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
                <div class="single-partners-box"><a target="_blank" href="#"><img src="<?php echo get_theme_file_uri('images\insta-partner8.png')?>" alt="image" /></a></div>
            </div>
        </div>
    </div>
</section>
<section class="video-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="video-content"><span class="sub-title">Showreel</span>
                    <h2>Want to stick out in a saturated market?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna.</p><a class="video-btn popup-youtube" href="#play-video"><i class="bx bx-play"></i> Watch Video</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="video-image"><img src="<?php echo get_theme_file_uri('images/video-img.jpg')?>" alt="image" /></div>
            </div>
        </div>
    </div>
</section>
<section class="podcast-area pt-100">
    <div class="container">
        <div class="section-title">
            <h2>Build The Business Of Your Dreams With My Programs</h2>
        </div>
        <div class="overview-box">
            <div class="overview-image">
                <div class="image"><img src="<?php echo get_theme_file_uri('images/podcast-img1.jpg')?>" alt="image" /></div>
            </div>
            <div class="overview-content">
                <div class="content">
                    <h3>Social Creator</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Qu ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p><a class="default-btn" href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="overview-box">
            <div class="overview-content">
                <div class="content">
                    <h3>The Podcast</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Qu ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p><a class="default-btn" href="#">Read More</a>
                </div>
            </div>
            <div class="overview-image">
                <div class="image"><img src="<?php echo get_theme_file_uri('images/podcast-img1.jpg')?>" alt="image" /></div>
            </div>
        </div>
    </div>
</section>
<section id="blog" class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title"><span class="sub-title">From The Blog</span>
            <h2>Latest insights are on top all times</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single-blog-post">
                    <div class="post-image"><a target="_blank" href="instagram-single-blog.html"><img src="<?php echo get_theme_file_uri('images/insta-blog1.jpg')?>" alt="image" /></a></div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li><a href="#">Fashion</a><a href="#">Lifestyle</a></li>
                            <li>4 min read</li>
                        </ul>
                        <h3><a target="_blank" href="instagram-single-blog.html">How to Successfully Negotiate with Influencers</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="single-blog-post">
                    <div class="post-image"><a target="_blank" href="instagram-single-blog.html"><img src="<?php echo get_theme_file_uri('images/insta-blog2.jpg')?>" alt="image" /></a></div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li><a href="#">Travel</a><a href="#">Style</a></li>
                            <li>3 min read</li>
                        </ul>
                        <h3><a target="_blank" href="instagram-single-blog.html">How to Find the Perfect Influencers for Your Niche</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="single-blog-post">
                    <div class="post-image"><a target="_blank" href="instagram-single-blog.html"><img src="<?php echo get_theme_file_uri('images/insta-blog3.jpg')?>" alt="image" /></a></div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li><a href="#">Fashion</a><a href="#">Travel</a></li>
                            <li>6 min read</li>
                        </ul>
                        <h3><a target="_blank" href="instagram-single-blog.html">How Micro-Influencers Can Transform Your Business</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="single-blog-post">
                    <div class="post-image"><a target="_blank" href="instagram-single-blog.html"><img src="<?php echo get_theme_file_uri('images/insta-blog4.jpg')?>" alt="image" /></a></div>
                    <div class="post-content">
                        <ul class="post-meta">
                            <li><a href="#">Lifestyle</a><a href="#">Travel</a></li>
                            <li>5 min read</li>
                        </ul>
                        <h3><a target="_blank" href="instagram-single-blog.html">Influencer Marketing Trends to Expect in 2020</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>