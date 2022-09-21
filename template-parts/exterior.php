<?php
    /**
     * Template Name: Page exterior
     * 
     * @package Is_theme_flc
     */
    get_header();
?>

    <section id="detail-banner" class="banner detail-banner" style="background-image: url('<?php bloginfo("template_directory");?>/images/bg-archive.png')">
    <div class="banner-info">
                <h1>Tin tức ngoại thất</h1>
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

    <section>
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
                <div class="col-md-8">
                    <div class="exterior-details">
                        <ul class="exterior-details-list">
                        <?php 
                        $args = array('numberposts' => 10, 'category' => 41);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post): setup_postdata($post);
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                        ?>
                            <li class="exterior-details-list__item">
                                <img class="exterior-details-list__item-image" src="<?php echo $image[0] ?>" alt="">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="exterior-details-list__item-title">
                                        <?php
                                            the_title();
                                        ?>
                                    </span>
                                    <i class="exterior-details-list__item-time">00:00 07/09/2022</i>
                                    
                                    <span class="exterior-details-list__item-text">
                                        <?php
                                            echo get_the_excerpt();
                                        ?>
                                    </span>
                                </a>
                            </li>
                        <?php 
                        endforeach;
                        wp_reset_postdata();
                        ?>    
                        </ul>
                    </div>

                    <div class="exterior-numerical">
                        <ul class="exterior-numerical-list">
                            <li class="exterior-numerical-list__item">
                                <h5 class="exterior-numerical-list__item-number-backgr">1</h5>
                            </li>
                        <?php 
                        $args = array('numberposts' => 10, 'category' => 49);
                        $custom_posts = get_posts($args);
                        foreach($custom_posts as $post): setup_postdata($post);
                        ?>
                            <li class="exterior-numerical-list__item">
                                <h5 class="exterior-numerical-list__item-number"><?php the_title(); ?></h5>
                            </li>
                        <?php 
                        endforeach;
                        wp_reset_postdata();
                        ?>  
                        <i class="fa-solid fa-chevron-right"></i>    
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="news-register register-exterior">
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
                            $args = array('numberposts' => 6, 'category' => 46);
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

                    <div class="news-care care-exterior">
                        <div class="news-care-title">
                            <h5 class="news-care-title__text"> CHỦ ĐỀ ĐƯỢC QUAN TÂM </h5>
                        </div>

                        <div class="news-care-outstanding">
                            <ul class="news-care-outstanding__list">
                            <?php 
                            $args = array('numberposts' => 7, 'category' => 48);
                            $custom_posts = get_posts($args);
                            foreach($custom_posts as $post): setup_postdata($post);
                            ?>
                                <li class="news-care-outstanding__list--item news-exterior-outstanding__list--item">
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
                        <div class="news-utilities utilities-exterior">
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
        </div>
    </section>
<?php

get_footer();