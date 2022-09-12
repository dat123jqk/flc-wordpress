<?php
    /**
     * Template Name: Page news
     * 
     * @package Is_theme_flc
     */
    get_header();
?>
    <section id="detail-banner" class="banner detail-banner" style="background-image: url('<?php bloginfo("template_directory");?>/images/bg-archive.png')">
            <div class="banner-info">
                <h1>Tin tức nổi bật</h1>
                <ul class="list-inline post-info">
                    <li class="list-inline-item user">
                        <i class="far fa-user"></i>
                        admin
                    </li>
                    <li class="list-inline-item user">
                        <i class="far fa-calendar-alt"></i>
                        Thứ 2 Ngày 27 tháng 08 năm 2018
                    </li>
                    <li class="list-inline-item user">
                        <i class="far fa-list-alt"></i>
                        <a href="">Tin tức</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End banner -->
        
        <!-- Main Wrapper -->
        <section class="news-content">
            <div class="container">
                <div class="news-container">
                    <form action="" class="news-container-form">
                        <input class="news-container-form__input" type="text" placeholder="Nhập từ khóa tìm kiếm">
                    </form>
                    <select id="pet-select" class="news-pet-select">
                        <option value="">Tin tức</option>
                        <option value="dog">Nhà bán đấtt</option>
                        <option value="cat">Nhà cho thuê</option>
                        <option value="hamster">Tin tức</option>
                        <option value="parrot">Dự án</option>
                        <option value="spider">Doanh nghiệp</option>
                        <option value="goldfish">Môi giới</option>
                    </select>
                    <button class="news-button">
                        Tìm kiếm
                    </button>
                </div>
                
                <div class="row">
                    <div class="news-details">
                        <div class="news-details-title">
                            <h5 class="news-details-title__text"> TIN TỨC BẤT ĐỘNG SẢN - TIN NỔI BẬT</h5>
                        </div>
                        <div class="news-details-content">
                            <div class="col-md-8 news-details-content__main">
                                <div class="col-md-6">
                                <?php 
                                $args = array('numberposts' => 6, 'category' => 19);
                                $custom_posts = get_posts($args);
                                foreach($custom_posts as $post): setup_postdata($post);
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                ?>
                                    <div class="news-image">
                                        <img src="<?php echo $image[0] ?>" alt="">
                                    </div>
                                    <div>
                                        <a href="<?php the_permalink(); ?>">
                                            <h6 class="apartment-heading"><?php echo get_the_excerpt(); ?></h6>
                                        </a>
                                        <span>
                                        Những thay đổi lớn do ảnh hưởng từ đại dịch Covid - 19, cùng những hệ quả từ biến đổi khí hậu, ô nhiễm môi trường… đã khiến thế giới phải tái định nghĩa khái niệm chăm sóc sức khỏe.
                                        </span>
                                    </div>
                                    
                                <?php 
                                endforeach;
                                wp_reset_postdata();
                                ?>    
                                </div>
                                <?php 
                                $args = array('numberposts' => 6, 'category' => 20);
                                $custom_posts = get_posts($args);
                                foreach($custom_posts as $post): setup_postdata($post);
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                ?>
                                <div class="col-md-6 news-main">
                                    <div class="col-md-4">
                                        <div class="news-image">
                                            <img src="<?php echo $image[0] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="news-main-text">
                                        <span class="">
                                            <?php echo get_the_excerpt(); ?>
                                        </span>
                                    </div>
                                </div>
                                <?php 
                                endforeach;
                                wp_reset_postdata();
                                ?>    
                            </div>

                            <div class="col-md-4">
                                <h1>hello</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Wrapper -->
    
<?php
get_footer();