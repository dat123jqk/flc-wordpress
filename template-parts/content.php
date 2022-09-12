<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Is_theme_flc
 */

?>


<section id="archive-banner" class="banner archive-banner" style="background-image: url('<?php bloginfo("template_directory");?>/images/bg-archive.png')">
        <div class="banner-info">
            <h1>Bất động sản</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End banner -->    
            <!-- Main Wrapper -->
        <section class="main-content">
            <div class="container">
                <div class="wrap-content">
                    <div class="title-real">
                        <h1 class="title-real-estate">-- Bất động sản toàn quốc --</h1>
                    </div>
                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-md-9">
                            <!-- Item -->
                            <div class="post-item">
                                <?php the_content(); ?>
							<?php
							// $args = array('numberposts' => 5, 'category'=>9);
							// $custom_posts = get_posts($args);
							// foreach($custom_posts as $post) : setup_postdata($post);
							// $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
							?>
                                <!-- <div class="post-thumb">
                                    <a href="">
                                        <img src="<?php echo $image[0] ?>" alt="">
                                    </a>
                                </div>
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
								<a href="<?php the_permalink(); ?>">
                                <div class="post-title">
                                    <h3>
										<?php
											echo get_the_title();
										?>
                                    </h3>
                                </div>
                                <div class="post-desc">
									<p>
										<?php
										echo get_the_excerpt();
										?>
									</p>
                                </div>
								</a> -->
							<?php 
								// endforeach;
								// wp_reset_postdata();
							?>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <!-- <div class="post-item">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="<?php bloginfo('template_directory') ?> /images/tin1.jpg" alt="">
                                    </a>
                                </div>
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
                                <div class="post-title">
                                    <h3>
                                        <a href="#">Hơn 50% căn hộ đợt 1 Bohemia Residence đã được bán ngay ngày mở bán</a>
                                    </h3>
                                </div>
                                <div class="post-desc">
                                    <p>Roman Plaza  không những được đánh giá là dự án có “số hưởng” khi nắm trọn mọi lợi thế, mà hiện tại còn là dự án có chính sách bán hàng “khủng”.</p>
                                </div>
                            </div> -->
                            <!-- End Item -->

                            <!-- Item -->
                            <!-- <div class="post-item">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="<?php bloginfo('template_directory') ?> /images/tin1.jpg" alt="">
                                    </a>
                                </div>
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
                                <div class="post-title">
                                    <h3>
                                        <a href="#">Hơn 50% căn hộ đợt 1 Bohemia Residence đã được bán ngay ngày mở bán</a>
                                    </h3>
                                </div>
                                <div class="post-desc">
                                    <p>Roman Plaza  không những được đánh giá là dự án có “số hưởng” khi nắm trọn mọi lợi thế, mà hiện tại còn là dự án có chính sách bán hàng “khủng”.</p>
                                </div>
                            </div> -->
                            <!-- End Item -->

                            <!-- Item -->
                            <!-- <div class="post-item">
                                <div class="post-thumb">
                                    <a href="">
                                        <img src="<?php bloginfo('template_directory') ?> /images/tin1.jpg" alt="">
                                    </a>
                                </div>
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
                                <div class="post-title">
                                    <h3>
                                        <a href="#">ROMAN PLAZA “bội thu” hạ tầng và tiện ích khu Tây Hà Nội</a>
                                    </h3>
                                </div>
                                <div class="post-desc">
                                    <p>Roman Plaza  không những được đánh giá là dự án có “số hưởng” khi nắm trọn mọi lợi thế, mà hiện tại còn là dự án có chính sách bán hàng “khủng”.</p>
                                </div>
                            </div> -->
                            <!-- End Item -->
                        </div>
                        <!-- End Main Content -->

                        <!-- Sidebar -->
                        <div class="col-md-3 price">
                            <div class="price-heading">
                                <h3 class="price-heading-title">Lọc theo giá</h3>
                                <div class="price-about-details">
                                    <ul class="price-about-details-list">
                                    <?php
                                    $args = array('numberposts' => 14, 'category' => 10);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post) : setup_postdata($post);
                                    ?>
                                        <li class="price-about-details--list__item">
                                            <a href="<?php the_permalink(); ?>">
                                            <span>
                                            <?php
                                                echo get_the_excerpt();
                                            ?>
                                            </span> 
                                            </a>
                                        </li>

                                    <?php
                                    endforeach;wp_reset_postdata();
                                    ?>    
                                    </ul>
                                </div>
                            </div>
                            <div class="price-area">
                                <h3 class = "price-area-title">Lọc theo diện tích</h3>
                                <div class="price-area-details">
                                    <ul class="price-area-details--list">
                                    <?php
                                    $args = array('numberposts' => 14, 'category' => 11);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post) : setup_postdata($post);
                                    ?>
                                        <li class="price-area-details--list__item">
                                        <a href="<?php the_permalink(); ?>">
                                            <span>
                                            <?php
                                                echo get_the_excerpt();
                                            ?>
                                            </span> 
                                        </a>
                                        </li>
                                    <?php
                                    endforeach;wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                            </div>
                            <div class="price-apartment">
                                <h3 class="price-apartment-title">Bán căn hộ chung cư theo dự án</h3>
                                <div class="price-apartment-details">
                                    <ul class="price-apartment-details--list">
                                    <?php
                                    $args = array('numberposts' => 14, 'category' => 12);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post) : setup_postdata($post);
                                    ?>
                                        <li class="price-apartment-details--list__item">
                                        <a href="<?php the_permalink(); ?>">
                                            <span>
                                            <?php
                                                echo get_the_excerpt();
                                            ?>
                                            </span> 
                                        </a>
                                        </li>
                                    <?php
                                    endforeach;wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-outstanding">
                                <h3 class="price-outstanding-title">Căn hộ nổi bật</h3>
                                <div class="price-outstanding-details">
                                    <ul class="price-outstanding-details--list">
                                    <?php
                                    $args = array('numberposts' => 14, 'category' => 12);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post) : setup_postdata($post);
                                    ?>
                                        <li class="price-outstanding-details--list__item">
                                        <a href="<?php the_permalink(); ?>">
                                            <span>
                                            <?php
                                                echo get_the_excerpt();
                                            ?>
                                            </span> 
                                        </a>
                                        </li>
                                    <?php
                                    endforeach;wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Sidebar -->
                    </div>
                </div>

                <div class="project-apartment">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="project-apartment-list">
                            <?php
                            $args = array('numberposts' => 10, 'category' => 15);
                            $custom_posts = get_posts($args);
                            foreach($custom_posts as $post) : setup_postdata($post);
                            ?>
                                <li class="project-apartment-list__item">
                                    <a href="<?php the_permalink(); ?>">
                                    <span>
                                        <?php
                                            echo get_the_excerpt();
                                        ?>
                                        </span> 
                                    </a>
                                </li>
                            <?php
                            endforeach;wp_reset_postdata();
                            ?>    
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="project-apartment-list">
                            <?php
                            $args = array('numberposts' => 10, 'category' => 16);
                            $custom_posts = get_posts($args);
                            foreach($custom_posts as $post) : setup_postdata($post);
                            ?>
                                <li class="project-apartment-list__item">
                                    <a href="<?php the_permalink(); ?>">
                                    <span>
                                        <?php
                                            echo get_the_excerpt();
                                        ?>
                                        </span> 
                                    </a>
                                </li>
                            <?php
                            endforeach;wp_reset_postdata();
                            ?>    
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="project-apartment-list">
                            <?php
                            $args = array('numberposts' => 10, 'category' => 17);
                            $custom_posts = get_posts($args);
                            foreach($custom_posts as $post) : setup_postdata($post);
                            ?>
                                <li class="project-apartment-list__item">
                                    <a href="<?php the_permalink(); ?>">
                                    <span>
                                        <?php
                                            echo get_the_excerpt();
                                        ?>
                                        </span> 
                                    </a>
                                </li>
                            <?php
                            endforeach;wp_reset_postdata();
                            ?>    
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="project-apartment-list">
                            <?php
                            $args = array('numberposts' => 10, 'category' => 18);
                            $custom_posts = get_posts($args);
                            foreach($custom_posts as $post) : setup_postdata($post);
                            ?>
                                <li class="project-apartment-list__item">
                                    <a href="<?php the_permalink(); ?>">
                                    <span>
                                        <?php
                                            echo get_the_excerpt();
                                        ?>
                                        </span> 
                                    </a>
                                </li>
                            <?php
                            endforeach;wp_reset_postdata();
                            ?>    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Wrapper -->
        <!-- Footer -->

<!-- #post-<?php the_ID(); ?> -->
