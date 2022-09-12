<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Is_theme_flc
 */

get_header();
?>

	<!-- Section Slider -->
    <section id="home-slider" class="section home-slider">
        <!-- Sldier -->
        <div id="carouselHomeSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /images/banner_1.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('template_directory') ?> /images/banner_2.png">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHomeSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomeSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End Sldier -->
    </section>
    <!-- End Section Slider -->
    <!-- Section tổng thể -->
    <section id="section-tongthe">
        <img src="<?php bloginfo('template_directory') ?> /images/bando_duan.jpg" />
    </section>
    <!-- End section tổng thể -->
    <!-- Section tổng quan -->
    <section id="section-tongquan">
        <div class="container">
            <h3 class="block-title text-center title-text wow zoomIn">Tổng quan dự án</h3>
            <p class="text-center sub-text wow zoomIn" data-wow-delay="1s">FlC Tropical City Ha Long là khu phức hợp đẳng cấp khép kín mang thương hiệu của tập đoàn FLC</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="left-tongquan wow fadeInLeft">
                        <img src="<?php bloginfo('template_directory') ?> /images/banner_tongquan.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="right-tongquan wow fadeInUp">
                        <?php
                        $args = array('numberposts' => 9, 'category'=>7);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post) : setup_postdata($post);
                        ?>
                        <li>
                        <span class="title-tongquan">
                            <?php
                            echo get_the_title();
                            ?>
                        </span>
                        <span>
                        <?php
                            echo get_the_excerpt();
                        ?>
                        </span>
                        </li>
                        <?php
                        endforeach;wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End section tổng quan -->
    <!-- Section giới thiệu botanic-->
    <section id="section-introBotanic">
        <div class="section-title" style="background-image: url('<?php bloginfo("template_directory");?>/images/banner_tin.png')">
            <div class="wrap-title wow zoomIn">
                <h3>Bản giao hưởng cất lên cuộc sống<br/> muôn màu</h3>
                <p style="display: block; width: 70%; margin: 0 auto;">Nếu cuộc sống là một bản hòa ca với hàng triệu những âm thanh trong trẻo thì Tropical City Ha Long được coi là một trong những bản hòa ca tinh tế và sang trọng bậc nhất, nơi cất lên những giai điệu của cuộc sống hiện đại, sôi nổi mà bình yên, lắng đọng qua 4 mảnh ghép phân khu độc đáo, đặc trưng và riêng biệt.</p>
            </div>
        </div>
        <div class="wrap-body ">
            <div class="container">
                <div class="row">
                <?php 
                    $args = array('numberposts' => 8, 'category' => 8);
                    $custom_posts = get_posts($args);
                    foreach($custom_posts as $post): setup_postdata($post);
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                ?>
                    <div class="col-md-3 wow fadeInUp paddingBotton" data-wow-delay="1s"><img src="<?php echo $image[0] ?>" /></div>
                    <!-- <div class="col-md-3 wow fadeInUp" data-wow-delay="1.5s"><img src="<?php bloginfo('template_directory') ?> /images/tiennghi_2.png" /></div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="2s"><img src="<?php bloginfo('template_directory') ?> /images/tiennghi_3.png" /></div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="2.5s"><img src="<?php bloginfo('template_directory') ?> /images/tiennghi_4.png" /></div> -->
                <?php 
                    endforeach;
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section giới thiệu botanic-->
    <!-- Section botanic -->
    <section id="section-botanic">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="botanic-logo wow fadeInDown">
                        <img src="<?php bloginfo('template_directory') ?> /images/botanic.png" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-text wow zoomIn">
                        <h3 class="title-bota">Phân khu <span>Botanic Garden</span></h3>
                        <h3 class="sub-title-bota">Sống để tận hưởng</h3>
                        <p class="body-bota">Là nơi đón ánh nắng mặt trời đầu tiên tại Tropical City, phân khu Botanic Garden trở thành biểu tượng của bình minh trong lòng khu đô thị trẻ.</p>
                        <p class="body-bota">Với những mảng xanh thiên nhiên mát mắt, Botanic Garden là không gian thư thái để con người tận hưởng những khoảng khắc an nhiên trong cuộc sống. Nơi ấy, năng lượng dồi dào và căng tràn cho tâm hồn rộng mở, để đón nhận những điều tuyệt vời nhất mà tạo hóa ban tặng.</p>
                    </div>
                </div>
            </div>
            <div class="bota-wrap-tienich">
                <div class="bota-tienich-thumb wow fadeInUp">
                    <img src="<?php bloginfo('template_directory') ?> /images/bando_toancanh_1.png" />
                </div>
                <div class="chuthich-list clearfix wow fadeInRight">
                    <h3>Chú thích</h3>
                    <ul class="list-unstyled">
                        <?php
                        $args = array('numberposts' => 7, 'category'=>4);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post) : setup_postdata($post);
                        ?>

                        <li>
                            <?php
                            global $wp_query;
                            $posts = $woo_options['woo_latest_entries'];
                            query_posts('post_type=post&category_name=company');
                            if ( have_posts() ) : while ( have_posts() ) : the_post();  $count++;
                            $index = $wp_query->current_post + 1;
                            ?>
                            <div id="my_post_<?php echo $index; ?>">
                                <span class="number">
                                <?php 
                                    echo $wp_query->current_post +1; 
                                ?>
                                </span>
                            </div>
                            <?php endwhile; endif; ?>

                            <span class="text">
                            <?php
                                echo get_the_excerpt();
                            ?>
                            </span>
                        </li>
                        <?php
                        endforeach;wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section botanic -->
    <!-- Section Bali Forest -->
    <section id="section-baliforest">
        <div class="container">
            <div class="row">
                <div class="wrap-box wow bounceInUp">
                    <img src="<?php bloginfo('template_directory') ?> /images/tanhuong.png" />
                </div>
            </div>
            <div class="bando-bali wow fadeInLeft">
                <img src="<?php bloginfo('template_directory') ?> /images/bando_bali.png" />
            </div>
            <div class="chuthich-bali wow fadeInRight">
                <img src="<?php bloginfo('template_directory') ?> /images/bali_forest.png">
                <div class="right-text-botanic">
                    <h3 class="title-bali">Phân khu <span>Bali Forest<span></h3>
                    <h3 class="subtitle-bali">Sống để khám phá</h3>
                    <p>Bali Forest chính là "nốt bổng" trong bản giao hưởng cuộc sống mang tên Tropical City. Hình ảnh những dãy nhà liền kề ôm trọn 4 tòa chung cư tại Bali Forest gây ấn tượng mạnh mẽ trong tổng khu dự án.</p>
                    <p>Bali Forest, nơi tổng hòa của không gian sống sôi động trẻ trung, trở thành mục tiêu lý tưởng để phát triển toàn diện cho con trẻ.</p>
                </div>
                <div class="chuthich-list wow fadeInUp">
                    <h3>Chú thích</h3>
                    <ul class="list-unstyled">
                        <?php
                        $args = array('numberposts' => 5, 'category' => 5);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post) : setup_postdata($post);
                        ?>
                        <li>
                        <?php
                            global $wp_query;

                            $posts = $woo_options['woo_latest_entries'];
                            query_posts('post_type=post&category_name=company');

                            if ( have_posts() ) : while ( have_posts() ) : the_post();  $count++;
                                $index = $wp_query->current_post + 1;
                            ?>
                            <span class="number"></span>
                            <?php endwhile; endif; ?>
                            <span class="text">
                            <?php
                                echo get_the_excerpt();
                            ?>
                            </span>
                        </li>
                        <?php
                        endforeach;wp_reset_postdata();
                        ?>
                    </ul>
                    <ul class="list-unstyled">
                    <?php
                        $args = array('numberposts' => 5, 'category' => 6);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post) : setup_postdata($post);
                        ?>
                        <li>
                            <!-- <span class="number">
                            </span> -->
                            <?php if ( have_posts() ) : ?>
                            <div>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <p> <span class="number">$index</span> </p>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                            <span class="text">
                            <?php
                                echo get_the_excerpt();
                            ?>
                            </span>
                        </li>
                        <?php
                        endforeach;wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Bali Forest -->
    <!-- Section Palm Village -->
    <section id="section-palmVillage">
        <div class="container">
            <div class="row">
                <div class="wrap-box wow fadeInDown">
                    <img src="<?php bloginfo('template_directory') ?> /images/khampha_1.jpg" />
                </div>
            </div>
            <div class="palm-left fadeInLeft" data-wow-delay="1s">
                <h3 class="title-palm">Phân khu <span>Palm Village<span></h3>
                <h3 class="subtitle-palm">Sống để khám phá</h3>
            </div>
            <div class="palm-right fadeInRight" data-wow-delay="1.5s">
                <h3 class="title-palm">Phân khu <span>Hawaii Seaside<span></h3>
                <h3 class="subtitle-palm">Sống để trải nghiệm</h3>
            </div>
            <div class="palm-button wow zoomIn" style="background: url('<?php bloginfo("template_directory");?>/images/comming-soon.png') no-repeat center">
                <h3>Comming Soon</h3>
            </div>
        </div>
    </section>
    <!-- End Section Palm Village -->
    <!-- Tiện ích -->
    <section id="section-tienich">
        <div class="banner-top">
                <img src="<?php bloginfo('template_directory') ?> /images/banner_top_tienich.png" alt="">
            </div>
        <div class="container">
            <div class="tienich text-center wow zoomIn" data-wow-delay="1s">
                <img src="<?php bloginfo('template_directory') ?> /images/tienich_2.png" alt="">
            </div>
        </div>
    </section>
    <!-- End tiện ích -->
    <!-- Tin tức sự kiện -->
    <section id="section-news" style="background-image: url('<?php bloginfo("template_directory");?>/images/tintuc.jpg')">
        <div class="container">
            <div class="block-title wow zoomIn">
                <h3 class="title-news">Tin tức - Sự kiện</h3>
            </div>
            <div class="wrap-news">
                <div class="row">
                    <!-- Col Item -->
                    <?php 
                        $args = array('numberposts' => 6, 'category' => 3);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post): setup_postdata($post);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                    ?>
                    <div class="col-md-4">
                        <div class="col-item">
                            <div class="box-thumb">
                                <img src="<?php echo $image[0] ?>" alt="">
                            </div>
                            <div class="thumb-shadow"></div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="box-title"> 
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="box-desc">
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <span class="date">28/12/2018</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                        wp_reset_postdata();
                    ?>
                   <!-- <div class="col-md-4">
                        <div class="col-item">
                            <div class="box-thumb">
                                <img src="<?php //bloginfo('template_directory') ?> /images/tin_1.jpg" alt="">
                            </div>
                            <div class="thumb-shadow"></div>
                            <div class="box-title">
                                <h3>
                                    Tập đoàn FLC trao niềm tin cho Hải Phát Land tại dự án FLC Tropical City Hạ Long
                                </h3>
                            </div>
                            <div class="box-desc">
                                <p>Chỉ sau thời gian ngắn ra mắt thị trường, FLC Tropical City Ha Long đã tạo lên một làn sóng... </p>
                                <span class="date">28/12/2018</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Col Item -->
                    <!-- Col Item -->
                    <!-- <div class="col-md-4">
                        <div class="col-item">
                            <div class="box-thumb">
                                <img src="<?php bloginfo('template_directory') ?> /images/tin_2.jpg" alt="">
                            </div>
                            <div class="thumb-shadow"></div>
                            <div class="box-title">
                                <h3>Kick off hút 1.000 người, FLC Tropical City Ha Long thu hút thị trường địa ốc cuối năm</h3>
                            </div>
                            <div class="box-desc">
                                <p>Tiếp nối thành công của quần thể du lịch FLC Hạ Long sắp đi vào khánh thành, dự án đô thị trẻ...</p>
                                <span class="date">27/11/2018</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Col Item -->
                    <!-- Col Item -->
                    <!-- <div class="col-md-4">
                        <div class="col-item">
                            <div class="box-thumb">
                                <img src="<?php bloginfo('template_directory') ?> /images/tin_3.jpg" alt="">
                            </div>
                            <div class="thumb-shadow"></div>
                            <div class="box-title">
                                <h3>
                                    FLC Tropical City Ha Long đưa “vườn nhiệt đới” về với thành phố biển
                                </h3>
                            </div>
                            <div class="box-desc">
                                <p>Với FLC Tropical City Ha Long, Tập đoàn FLC kỳ vọng kiến tạo nên một không gian xanh rộng lớn...</p>
                                <span class="date">20/11/2018</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Col Item -->
                </div>
            </div><!-- /.wrap-tituc -->
        </div>
    </section>
    <!-- End tin tức sự kiện -->

<?php
get_sidebar();
get_footer();
