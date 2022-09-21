<?php
    /**
     * Template Name: Page furniture
     * 
     * @package Is_theme_flc
     */
    get_header();
?>
    <section id="detail-banner" class="banner detail-banner" style="background-image: url('<?php bloginfo("template_directory");?>/images/bg-archive.png')">
            <div class="banner-info">
                <h1>Tin tức nội thất</h1>
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
                        <option value="dog">Nhà bán đất</option>
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
                            <h5 class="news-details-title__text"> NỘI THẤT - TIN NỔI BẬT</h5>
                        </div>
                        <div class="news-details-content">
                            <div class="col-md-8 news-details-content__main">
                                <div class="col-md-6">
                                <?php 
                                $args = array('numberposts' => 6, 'category' => 50);
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
                                        Một trong những phương án trang trí hoặc cải tạo không gian tiếp khách hiệu quả là sử dụng gạch ốp tường phòng khách. Các mẫu gạch với đa dạng màu sắc, hoa văn, phối màu ăn nhập không chỉ tạo nên một diện mạo mới cho căn phòng mà còn bảo vệ rất tốt cho phần tường nhà.
                                        </span>
                                    </div>
                                    
                                <?php 
                                endforeach;
                                wp_reset_postdata();
                                ?>    
                                </div>
                                <div class="news-main">
                                    <ul class="news-main-list">
                                        <?php 
                                        $args = array('numberposts' => 6, 'category' => 51);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <li class="news-main-list__item">
                                            <img class="news-main-list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-main-list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?> 

                                        <?php 
                                        $args = array('numberposts' => 6, 'category' => 52);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                        <li class="news-main-list__item-one">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-main-list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?>   
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="news-register">
                                    <div class="news-register-icon">
                                        <i class="fa-solid fa-envelope"></i>
                                        <span class="news-register-icon__text">
                                            Nhận bản tin từ Batdongsan.com.vn
                                        </span>
                                    </div>
                                    <div class="news-register-form">
                                        <form action="">
                                            <input type="text" placeholder="Nhập email">
                                        </form>
                                        <button class="news-register-form__button">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-register-form__button--link">
                                                    Đăng ký
                                                </span>
                                            </a>
                                        </button>
                                    </div>
                                </div>

                                <div class="news-people">
                                    <div class="news-people-title">
                                        <h5 class="news-people-title__text"> TIN NHIỀU NGƯỜI ĐỌC </h5>
                                    </div>

                                    <div class="news-people-outstanding">
                                        <ul class="news-people-outstanding__list">
                                        <?php 
                                        $args = array('numberposts' => 6, 'category' => 22);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                            <li class="news-people-outstanding__list--item">
                                                <img class="news-people-outstanding__list--item-image" src="<?php echo $image[0] ?>" alt="">
                                                <a href="<?php the_permalink(); ?>">
                                                    <span class="news-people-outstanding__list--item-text">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?> 
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="news-market">
                        <div class="news-market-title">
                            <h5 class="news-market-title--text"> PHÒNG NGỦ </h5>
                        </div>
                        <div class="news-market-pseudo">
                        </div>
                        <div class="row">
                            <div class="col-md-8 news-market-info">
                                <div class="col-md-6 news-market-info__details">
                                    <ul class="news-market-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 53);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-market-info__details--list__item">
                                            <img class="news-market-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-market-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <span>Nếu không may sở hữu một ngôi nhà có phòng khách vừa hẹp vừa sâu tựa như hành lang hay con hẻm nhỏ thì bạn cũng đừng quá lo lắng. Chỉ cần áp dụng một vài thủ thuật đánh lừa thị giác nhằm mở rộng không gian dưới đây, bạn sẽ không còn cảm giác như mình đang đứng trước một con hẻm sâu hun hút.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-market-info__details">
                                    <ul class="news-market-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 54);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-market-info__details--list__item">
                                            <img class="news-market-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-market-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 73);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    ?>
                                    <li class="news-main-list__item-one">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="news-main-list__item--text">
                                                <?php echo get_the_excerpt(); ?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="news-province">
                                    <div class="news-province-title">
                                        <h5 class="news-province-title__text"> BĐS 6 TỈNH NỔI BẬT </h5>
                                    </div>

                                    <div class="news-province-outstanding">
                                        <ul class="news-province-outstanding__list">
                                        <?php 
                                        $args = array('numberposts' => 6, 'category' => 38);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                            <li class="news-province-outstanding__list--item">
                                                <img class="news-province-outstanding__list--item-image" src="<?php echo $image[0] ?>" alt="">
                                                <a href="<?php the_permalink(); ?>">
                                                    <span class="news-province-outstanding__list--item-text">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?> 
                                        </ul>
                                    </div>

                                    </div>
                                </div>
                            </div>
                    </div>
    
                    <div class="news-analysis">
                        <div class="news-analysis-title">
                            <h5 class="news-analysis-title--text"> TOÀN CẢNH NGÔI NHÀ</h5>
                        </div>
                        <div class="news-analysis-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-analysis-info">
                                <div class="col-md-6 news-analysis-info__details">
                                    <ul class="news-analysis-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 57);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-analysis-info__details--list__item">
                                            <img class="news-analysis-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-analysis-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <span>Xu hướng thiết kế nội thất 2022 sẽ hướng tới việc đưa các yếu tố thiên nhiên vào trong không gian sống, cấu trúc lại các khu vực công năng cho phù hợp với nhu cầu làm việc tại nhà và mua sắm nội thất, đồ trang trí một cách có chủ đích hơn.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-analysis-info__details">
                                    <ul class="news-analysis-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 58);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-analysis-info__details--list__item">
                                            <img class="news-analysis-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-analysis-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 59);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    ?>
                                    <li class="news-main-list__item-one">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="news-main-list__item--text">
                                                <?php echo get_the_excerpt(); ?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-care">
                                    <div class="news-care-title">
                                        <h5 class="news-care-title__text"> CHỦ ĐỀ ĐƯỢC QUAN TÂM </h5>
                                    </div>

                                    <div class="news-care-outstanding">
                                        <ul class="news-care-outstanding__list">
                                        <?php 
                                        $args = array('numberposts' => 10, 'category' => 39);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        ?>
                                            <li class="news-care-outstanding__list--item">
                                                <a href="<?php the_permalink(); ?>">
                                                    <span class="news-care-outstanding__list--item-text">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?> 
                                        </ul>

                                        <button class="news-care-outstanding__button">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-care-outstanding__button--text">Xem tất cả</span>
                                            </a>
                                        </button>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="news-zoning">
                        <div class="news-zoning-title">
                            <h5 class="news-zoning-title--text"> PHÒNG KHÁCH</h5>
                        </div>
                        <div class="news-zoning-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-zoning-info">
                                <div class="col-md-6 news-zoning-info__details">
                                    <ul class="news-zoning-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 60);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-zoning-info__details--list__item">
                                            <img class="news-zoning-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-zoning-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <span>Nếu không may sở hữu một ngôi nhà có phòng khách vừa hẹp vừa sâu tựa như hành lang hay con hẻm nhỏ thì bạn cũng đừng quá lo lắng. Chỉ cần áp dụng một vài thủ thuật đánh lừa thị giác nhằm mở rộng không gian dưới đây, bạn sẽ không còn cảm giác như mình đang đứng trước một con hẻm sâu hun hút.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-zoning-info__details">
                                    <ul class="news-zoning-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 61);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-zoning-info__details--list__item">
                                            <img class="news-zoning-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-zoning-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 62);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    ?>
                                    <li class="news-main-list__item-one">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="news-main-list__item--text">
                                                <?php echo get_the_excerpt(); ?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="news-utilities">
                                    <div class="news-utilities-title">
                                        <h5 class="news-utilities-title__text"> Hỗ TRỢ TIỆN ÍCH</h5>
                                    </div>
                                    <div class="news-utilities-outstanding">
                                        <ul class="news-utilities-outstanding__list">
                                        <?php 
                                        $args = array('numberposts' => 10, 'category' => 40);
                                        $custom_posts = get_posts($args);
                                        foreach($custom_posts as $post): setup_postdata($post);
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                        ?>
                                            <li class="news-utilities-outstanding__list--item">
                                                <img class="news-utilities-outstanding__list--item-image" src="<?php echo $image[0] ?>" alt="">
                                                <a href="<?php the_permalink(); ?>">
                                                    <span class="news-utilities-outstanding__list--item-text">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php 
                                        endforeach;
                                        wp_reset_postdata();
                                        ?> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="news-finance">
                        <div class="news-finance-title">
                            <h5 class="news-finance-title--text">PHÒNG BẾP</h5>
                        </div>
                        <div class="news-finance-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-finance-info">
                                <div class="col-md-6 news-finance-info__details">
                                    <ul class="news-finance-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 64);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-finance-info__details--list__item">
                                            <img class="news-finance-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-finance-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <span>Nguyên tắc tam giác hữu dụng đề cập đến cách bố trí tủ lạnh, bồn rửa, bếp nấu sao cho khoa học, hợp lý, giúp tối ưu hóa quá trình thao tác, giảm công sức của người nội trợ trong căn bếp.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-finance-info__details">
                                    <ul class="news-finance-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 65);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-finance-info__details--list__item">
                                            <img class="news-finance-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-finance-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 71);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    ?>
                                    <li class="news-main-list__item-one">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="news-main-list__item--text">
                                                <?php echo get_the_excerpt(); ?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="news-chart">
                        <div class="news-chart-title">
                            <h5 class="news-chart-title--text">PHÒNG TẮM</h5>
                        </div>
                        <div class="news-chart-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-chart-info">
                                <div class="col-md-6 news-chart-info__details">
                                    <ul class="news-chart-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 67);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-chart-info__details--list__item">
                                            <img class="news-chart-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-chart-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                        <span>Chỉ với vài thay đổi nhỏ, không quá tốn kém trong cách sắp xếp, bày trí đồ đạc, bạn có thể khiến phòng tắm nhà mình như được “lột xác”, đẹp và tiện nghi chẳng thua kém khách sạng hạng sang.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-chart-info__details">
                                    <ul class="news-chart-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 68);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                                    ?>
                                        <li class="news-chart-info__details--list__item">
                                            <img class="news-chart-info__details--list__item--image" src="<?php echo $image[0] ?>" alt="">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="news-chart-info__details--list__item--text">
                                                    <?php echo get_the_excerpt(); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 72);
                                    $custom_posts = get_posts($args);
                                    foreach($custom_posts as $post): setup_postdata($post);
                                    ?>
                                    <li class="news-main-list__item-one">
                                        <a href="<?php the_permalink(); ?>">
                                            <span class="news-main-list__item--text">
                                                <?php echo get_the_excerpt(); ?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
get_footer();