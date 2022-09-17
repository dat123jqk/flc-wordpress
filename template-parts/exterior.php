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
            <h1>Ngoại Thất</h1>
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
                </div>

                <div class="col-md-4">
                    <div>
                        <h3>hello</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

get_footer();