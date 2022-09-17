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
                                        Những thay đổi lớn do ảnh hưởng từ đại dịch Covid - 19, cùng những hệ quả từ biến đổi khí hậu, ô nhiễm môi trường… đã khiến thế giới phải tái định nghĩa khái niệm chăm sóc sức khỏe.Chỉ riêng với du lịch, lĩnh vực này đã có sự chuyển biến đáng kể sau đại dịch. Thay vì du lịch trải nghiệm thông thường như trước, xu hướng quan tâm đến du lịch y tế ngày càng phổ biến khi tốc độ tăng trưởng kép của thị trường du lịch này lên đến 11,7% và đạt 35,77 tỷ USD trong năm 2022
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
                                        $args = array('numberposts' => 6, 'category' => 20);
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
                                        $args = array('numberposts' => 6, 'category' => 21);
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
                            <h5 class="news-market-title--text"> TIN THỊ TRƯỜNG</h5>
                        </div>
                        <div class="news-market-pseudo">
                        </div>
                        <div class="row">
                            <div class="col-md-8 news-market-info">
                                <div class="col-md-6 news-market-info__details">
                                    <ul class="news-market-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 23);
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
                                        <span>Căn hộ Hà Nội tăng giá mạnh là thực tế đã kéo dài khoảng 3 năm nay và có xu hướng tăng mạnh hơn từ năm 2021 đến nay. “Ăn theo” đà tăng giá, nhiều chủ nhà đã đưa ra những mức giá chào bán cao và liên tục tăng giá trong thời gian ngắn khiến thị trường “loạn giá”. Trong khi đó, người có nhu cầu thực thì ngày càng khó khăn trong việc tiếp cận nhà ở.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-market-info__details">
                                    <ul class="news-market-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 24);
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
                                    $args = array('numberposts' => 6, 'category' => 25);
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
                            <h5 class="news-analysis-title--text"> PHÂN TÍCH - NHẬN ĐỊNH</h5>
                        </div>
                        <div class="news-analysis-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-analysis-info">
                                <div class="col-md-6 news-analysis-info__details">
                                    <ul class="news-analysis-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 26);
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
                                        <span>Tại tọa đàm: “Phát triển nguồn vốn cho bất động sản: Dư địa và gợi ý các giải pháp bền vững” do Tạp chí Điện tử Doanh nhân Việt Nam phối hợp với vietnambiz.vn và Vietnammoi.vn tổ chức, thực trạng các doanh nghiệp bất động sản đối mặt với hàng loạt khó khăn do thiếu vốn gây ra được nêu bật. Các giải pháp căn cơ, gốc rễ vấn đề về khơi thông nguồn vốn cho thị trường bất động sản đã được các chuyên gia đưa ra và thảo luận</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-analysis-info__details">
                                    <ul class="news-analysis-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 27);
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
                                    $args = array('numberposts' => 6, 'category' => 28);
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
                            <h5 class="news-zoning-title--text"> QUY HOẠCH - PHÁP LÝ</h5>
                        </div>
                        <div class="news-zoning-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-zoning-info">
                                <div class="col-md-6 news-zoning-info__details">
                                    <ul class="news-zoning-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 29);
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
                                        <span>Chuyển nhượng là việc chuyển quyền sở hữu hoặc sở hữu các loại tài sản hợp pháp, bao gồm cả bất động sản sang cho cá nhân, tổ chức nào đó theo thỏa thuận. Thỏa thuận này thường sẽ được lưu dưới dạng hợp đồng.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-zoning-info__details">
                                    <ul class="news-zoning-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 30);
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
                                    $args = array('numberposts' => 6, 'category' => 31);
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
                            <h5 class="news-finance-title--text">TÀI CHÍNH</h5>
                        </div>
                        <div class="news-finance-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-finance-info">
                                <div class="col-md-6 news-finance-info__details">
                                    <ul class="news-finance-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 32);
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
                                        <span>Dù lựa chọn hình thức vay tín chấp hay thế chấp thì khách hàng luôn cần chứng minh thu nhập khi vay ngân hàng. Dưới đây là 6 cách chứng minh thu nhập khi vay ngân hàng phổ biến nhất.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-finance-info__details">
                                    <ul class="news-finance-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 33);
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
                                    $args = array('numberposts' => 6, 'category' => 34);
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
                            <h5 class="news-chart-title--text">BIỂU ĐỒ GIÁ</h5>
                        </div>
                        <div class="news-chart-pseudo">
                        </div>
    
                        <div class="row">
                            <div class="col-md-8 news-chart-info">
                                <div class="col-md-6 news-chart-info__details">
                                    <ul class="news-chart-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 35);
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
                                        <span>Giá bán theo tin đăng nhiều loại hình bất động sản tại Hà Nội đã chững lại từ tháng 5 sau khi có thời gian tăng tốc vào tháng 3 và tháng 4. Riêng giá đất, đất nền dự án vẫn tăng thêm 2-5% mỗi tháng.</span>
                                    <?php 
                                    endforeach;
                                    wp_reset_postdata();
                                    ?> 
                                    </ul>
                                </div>
                                <div class="col-md-6 news-chart-info__details">
                                    <ul class="news-chart-info__details--list">
                                    <?php 
                                    $args = array('numberposts' => 6, 'category' => 36);
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
                                    $args = array('numberposts' => 6, 'category' => 37);
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