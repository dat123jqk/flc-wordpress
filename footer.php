<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Is_theme_flc
 */

?>

<footer id="footer" class="footer">
        <div class="container">
            <div class="wrap-footer">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Footer Left -->
                        <div class="ft-row wow fadeInLeft">
                            <div class="ft-info clearfix">
                                <div class="ft-logo">
                                    <img src="<?php bloginfo('template_directory') ?> /images/logo_footer.png" alt="">
                                </div>
                                <p class="ft-title"><strong>Đơn vị phân phối chiến lược:</strong></p>
                                <p class="ft-title"><strong>Công ty Cổ phần Bất động sản Hải Phát - chi nhánh Quảng Ninh</strong></p>
                                <ul class="ft-desc list-unstyled">
                                    <li><p><img src="<?php bloginfo('template_directory') ?> /images/location.png" /><span>Lô 01-02, Khu đô thị mới Mon Bay, Trần Quốc Nghiễn,<br/> Hồng Hải, Quảng Ninh</span></p></li>
                                    <li><p><img src="<?php bloginfo('template_directory') ?> /images/phone.png" /><span>0901.061.999</span></p></li>
                                </ul>
                                <ul class="app_mobile">
                                    <li><img class="app_mobile-google" src="<?php bloginfo('template_directory')?> /images/google-play.png" alt=""></li>
                                    <li><img class="app_mobile-apple" src="<?php bloginfo('template_directory')?> /images/app_store.png" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Left -->
                    <!-- Footer Right -->
                    <div class="col-md-6">
                        <div class="wrap-dangky wow fadeInRight">
                            <h3 class="form-title">Đăng ký nhận thông tin dự án</h3>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="text" placeholder="Nội dung">
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Footer Right -->
                </div><!-- /.ft-row -->
            </div>
        </div><!-- /.wrap-footer -->
    </footer>

<?php wp_footer(); ?>

</body>
</html>
