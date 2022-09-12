<?php
    /**
     * Template Name: Page Apartment
     * 
     * @package Is_theme_flc
     */
    get_header();
?>
   <!-- Banner -->
   <section id="detail-banner" class="banner detail-banner" style="background-image: url('<?php bloginfo("template_directory");?>/images/bg-archive.png')">
            <div class="banner-info">
                <h1>Hơn 50% căn hộ đợt 1 FLC Tropical đã được bán ngay ngày mở bán</h1>
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
        <section class="main-content">
            <div class="container">
                <div class="wrap-content">
                    <h1 class="apartment-title">-- Bán căn hộ chung cư tại FLC SeaTower --</h1>
                    <div class="apartment-option">
                        <div class="apartment-option-icon">
                            <div class="apartment-option-icon--one">
                                <i class="fa-solid fa-list"></i>
                                <span>Danh sách</span>
                            </div>
                            <div class="apartment-option-icon--two">
                                <i class="fa-solid fa-map"></i>
                                <span>Xem bản đồ</span>
                            </div>
                        </div>
                        <div class>
                        <select id="pet-select">
                            <option value="">--Thông thường--</option>
                            <option value="dog">Tin mới nhất</option>
                            <option value="cat">Giá thấp đến cao</option>
                            <option value="hamster">Giá cao đến thấp</option>
                            <option value="parrot">Diện tích lớn đến bé</option>
                            <option value="spider">Diện tích bé đến lớn</option>
                            <option value="goldfish">Penthouses</option>
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Main Content -->
                        <?php 
                        $args = array('numberposts' => 6, 'category' => 14);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post): setup_postdata($post);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                        ?>
                        <div class="col-md-4">
                            <div class="image-apartment">
                                <img src="<?php echo $image[0] ?>" alt="">
                            </div>
                        </div>
                        <!-- End Main Content -->

                        <!-- Sidebar --> 
                        <div class="col-md-8 apartment">
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="apartment-heading"><?php the_title(); ?></h3>
                            </a>
                            <ul class="apartment-list">
                                <li class="apartment-list-item">
                                    <span class="apartment-list-item--text"> <?php echo get_the_excerpt(); ?></span>
                                </li>
                                <!-- <li class="apartment-list-item">
                                    <span class="apartment-list-item--desc">* Cần sang nhượng giỏ hàng căn hộ FLC SeaTower Quy Nhơn - view biển cực đẹp bao gồm:* Hướng Tây Nam: View biển Ghềnh...</span>
                                </li> -->
                                <li class="apartment-list-item">
                                    <span class="apartment-list-item--time">Hôm qua</span>
                                    <i class="fa-regular fa-heart"></i>
                                </li>
                            </ul>
                        </div>
                        <?php 
                        endforeach;
                        wp_reset_postdata();
                        ?>
                        <!-- End Sidebar -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Wrapper -->
<?php
get_footer();
