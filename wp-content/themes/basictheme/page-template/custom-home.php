<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Custom_Theme
 */

get_header();

$upload_dir = wp_upload_dir();
$uploads_url = $upload_dir['baseurl'];
?>

<!-- Hero / Banner Section -->
<section class="hero-banner-section" style="background-image: url('<?php echo esc_url( $uploads_url . '/2025/08/banner-img1.jpg' ); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <div class="hero-subtitle">BEST BUSINESS STRATEGY</div>
                <h1 class="hero-title">We Are Dedicate To Support You !</h1>
                <p class="hero-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus, soluta, nobis varius maxime nisi, per animi incidunt undetates commodo.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-hero-primary">LEARN MORE</a>
                    <a href="#" class="btn btn-hero-secondary">GET STARTED</a>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</section>

<!-- Info Cards Section (Overlapping Hero) -->
<section class="info-cards-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="info-card">
                    <div class="info-card-icon">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/mission-img1.png' ); ?>" alt="Global Strategy">
                    </div>
                    <div>
                        <h4 class="info-card-title">Global Strategy</h4>
                        <p class="info-card-desc">Interdum hac purus temp, eu quos maiores sodex.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-card">
                    <div class="info-card-icon">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/mission-img2.png' ); ?>" alt="Project Managing">
                    </div>
                    <div>
                        <h4 class="info-card-title">Project Managing</h4>
                        <p class="info-card-desc">Interdum hac purus temp, eu quos maiores sodex.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-card">
                    <div class="info-card-icon">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/mission-img3.png' ); ?>" alt="24/7 Support">
                    </div>
                    <div>
                        <h4 class="info-card-title">24/7 Support</h4>
                        <p class="info-card-desc">Interdum hac purus temp, eu quos maiores sodex.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section (About Us) -->
<section class="about-section-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-left-col">
                <img class="about-main-img" src="<?php echo esc_url( $uploads_url . '/2025/08/about-img1.jpg' ); ?>" alt="About Us">
                <div class="about-stats-card">
                    <div class="stat-item d-flex justify-content-between align-items-center">
                        <h6 class="stat-title">Customer Satisfaction</h6>
                        <span class="stat-val">(92%)</span>
                    </div>
                    <div class="stat-item d-flex justify-content-between align-items-center">
                        <h6 class="stat-title">Successful Projects</h6>
                        <span class="stat-val">(95%)</span>
                    </div>
                    <div class="stat-item d-flex justify-content-between align-items-center">
                        <h6 class="stat-title">Quality Project Works</h6>
                        <span class="stat-val">(85%)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-right-col">
                <div class="section-subtitle-red">INTRODUCTION OF US</div>
                <h2 class="section-title-serif">We Are Best Agency To Achieve Your Goal!!</h2>
                <p class="about-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus, soluta, nobis varius maxime nisi, per animi incidunt undetates pulvinar illo.</p>
                
                <div class="solution-banner-card">
                    <img class="solution-icon" src="<?php echo esc_url( $uploads_url . '/2025/08/about-img2.png' ); ?>" alt="Solution Icon">
                    <h5 class="solution-title">Successfully Given Business Solution For 15 Years</h5>
                </div>
                
                <img class="about-bottom-img" src="<?php echo esc_url( $uploads_url . '/2025/08/about-img3.jpg' ); ?>" alt="About Us Bottom">
            </div>
        </div>
    </div>
</section>

<!-- Our Work Process Section -->
<section class="process-section-custom" style="background-image: url('<?php echo esc_url( $uploads_url . '/2025/08/process-img2.jpg' ); ?>');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-subtitle-red text-white">OUR WORK PROCESS</div>
                <h2 class="section-title-serif text-white mb-0">We Are Top Corporate Company Since 1998. Come Join Us !</h2>
            </div>
            <div class="col-lg-4">
                <div class="process-play-btn-wrap">
                    <div class="process-play-btn">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/process-img1-1.png' ); ?>" alt="Play Icon">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row process-cards-row g-4">
            <div class="col-lg-4">
                <div class="process-card">
                    <div class="process-num">01.</div>
                    <h5 class="process-title">Knowing Your Business</h5>
                    <p class="process-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-card">
                    <div class="process-num">02.</div>
                    <h5 class="process-title">Development & Implements</h5>
                    <p class="process-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-card">
                    <div class="process-num">03.</div>
                    <h5 class="process-title">Marketing & Execute</h5>
                    <p class="process-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section-custom">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-subtitle-red">TESTIMONIALS</div>
            <h2 class="section-title-serif">Checkout Customer Review’s</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-quote-badge">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/review-img3.png' ); ?>" alt="Quote">
                    </div>
                    <img class="testimonial-avatar" src="<?php echo esc_url( $uploads_url . '/2025/08/review-img1.jpg' ); ?>" alt="William Houston">
                    <h5 class="testimonial-name">William Houston</h5>
                    <div class="testimonial-role">CUSTOMER</div>
                    <div class="testimonial-stars">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/review-img4.png' ); ?>" alt="5 Stars">
                    </div>
                    <p class="testimonial-text">Minus mollit sollicitudin porro fames, quis porttitor porttitor neque accumsan proident, esse! Deserunt egestas eveniet soluta ipsam risus.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-quote-badge">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/review-img3.png' ); ?>" alt="Quote">
                    </div>
                    <img class="testimonial-avatar" src="<?php echo esc_url( $uploads_url . '/2025/08/review-img2.jpg' ); ?>" alt="Sally Watson">
                    <h5 class="testimonial-name">Sally Watson</h5>
                    <div class="testimonial-role">CUSTOMER</div>
                    <div class="testimonial-stars">
                        <img src="<?php echo esc_url( $uploads_url . '/2025/08/review-img4.png' ); ?>" alt="5 Stars">
                    </div>
                    <p class="testimonial-text">Minus mollit sollicitudin porro fames, quis porttitor porttitor neque accumsan proident, esse! Deserunt egestas eveniet soluta ipsam risus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-section-custom">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-subtitle-red">RECENT BLOG</div>
            <h2 class="section-title-serif">Our Insights And Blog</h2>
        </div>
        
        <div class="row g-4">
            <?php
            $blog_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish'
            ));
            
            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    if ( ! $thumbnail_url ) {
                        // Fallback image based on post loop index
                        $index = $blog_query->current_post + 1;
                        if ( $index == 1 ) {
                            $thumbnail_url = $uploads_url . '/2025/08/image03-1.jpg';
                        } elseif ( $index == 2 ) {
                            $thumbnail_url = $uploads_url . '/2025/08/image02-1.jpg';
                        } else {
                            $thumbnail_url = $uploads_url . '/2025/08/image019.jpg';
                        }
                    }
                    
                    $categories = get_the_category();
                    $category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Marketing';
            ?>
                    <div class="col-lg-4">
                        <div class="blog-card">
                            <div class="blog-img-wrap">
                                <img class="blog-img" src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php the_title_attribute(); ?>">
                            </div>
                            <div class="blog-content">
                                <span class="blog-category"><?php echo $category_name; ?></span>
                                <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="blog-readmore">Read More...</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Hardcoded fallback cards if no posts exist in the DB
            ?>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img-wrap">
                            <img class="blog-img" src="<?php echo esc_url( $uploads_url . '/2025/08/image03-1.jpg' ); ?>" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">Marketing</span>
                            <h4 class="blog-title"><a href="#">Placerat class aptent taciti sociosqu ad litora</a></h4>
                            <p class="blog-excerpt">Minus mollit sollicitudin porro fames, quis porttitor porttitor neque accumsan proident, esse!</p>
                            <a href="#" class="blog-readmore">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img-wrap">
                            <img class="blog-img" src="<?php echo esc_url( $uploads_url . '/2025/08/image02-1.jpg' ); ?>" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">Business</span>
                            <h4 class="blog-title"><a href="#">A Day In Social Media Marketing Strategy</a></h4>
                            <p class="blog-excerpt">Minus mollit sollicitudin porro fames, quis porttitor porttitor neque accumsan proident, esse!</p>
                            <a href="#" class="blog-readmore">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img-wrap">
                            <img class="blog-img" src="<?php echo esc_url( $uploads_url . '/2025/08/image019.jpg' ); ?>" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">Finance</span>
                            <h4 class="blog-title"><a href="#">Uplifting the market value of business</a></h4>
                            <p class="blog-excerpt">Minus mollit sollicitudin porro fames, quis porttitor porttitor neque accumsan proident, esse!</p>
                            <a href="#" class="blog-readmore">Read More...</a>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Custom Rich Footer -->
<footer class="footer-section-custom">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="footer-logo-title">
                    <img src="<?php echo esc_url( $uploads_url . '/2025/08/logo.png' ); ?>" alt="Logo" style="height: 30px;">
                    Business Solutions
                </div>
                <p class="footer-desc">Ridiculus ullam excepteur penatibus tenetur turpis proin occaecat, bibendum qui veniam ab, hac ut dolorum elementum penatibus, soluta.</p>
            </div>
            
            <div class="col-lg-3">
                <h5 class="footer-col-title">RESOURCES</h5>
                <ul class="footer-links-list">
                    <li><a href="#">Portfolio Link</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3">
                <h5 class="footer-col-title">COMPANY</h5>
                <ul class="footer-links-list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Marketing Team</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3">
                <h5 class="footer-col-title">BLOG & NEWS</h5>
                <ul class="footer-links-list">
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog Classic</a></li>
                    <li><a href="#">Grid/List Layout</a></li>
                    <li><a href="#">Right/Left Sidebar</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row footer-bottom-bar align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="footer-copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> Business Solutions. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <p class="footer-copyright">Created by Antigravity</p>
            </div>
        </div>
    </div>
</footer>

<?php
get_footer();
