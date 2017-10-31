<?php 
	/*
	 Template Name: HomePage
	 */	 
	 global $zController;    

    ?>
    <?php get_header();     ?>
    <div class="container">
        <div class="margin-top-5">            
            <?php if(is_active_sidebar('slideshow-widget')):?>
                <?php dynamic_sidebar('slideshow-widget')?>
            <?php endif; ?>              
        </div>
    </div>
    <?php if(is_active_sidebar('tu-van-widget')):?>
        <?php dynamic_sidebar('tu-van-widget')?>
    <?php endif; ?>    
    <div class="container main">
        <div class="header-title">
            <h4><span><font color="#3AB54A">Danh mục</font></span> sản phẩm</h4>               
        </div>
        <script type="text/javascript" language="javascript">
            jQuery(document).ready(function(){
                jQuery(".owl-carousel-rau-sach-thit-hai-san-thuc-pham-kho").owlCarousel({
                    autoplay:false,                    
                    loop:true,
                    margin:0,                        
                    nav:true,                                            
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:4,
                            nav:false
                        },
                        1000:{
                            items:4,
                            nav:true,
                            loop:false
                        }
                    }
                })
            });                
        </script>    
        <div class="margin-top-15">
            <div class="product-kemma">
                <div>
                    <div class="category-list-index">
                        <h2 class="rau-sach-index h-title">Rau sạch</h2>
                        <div>
                            <?php     
                            $args = array( 
                                'menu'              => '', 
                                'container'         => '', 
                                'container_class'   => '', 
                                'container_id'      => '', 
                                'menu_class'        => 'rausachmenu', 
                                'menu_id'           => 'rau-sach-menu', 
                                'echo'              => true, 
                                'fallback_cb'       => 'wp_page_menu', 
                                'before'            => '', 
                                'link_before'       => '<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;', 
                                'after'             => '', 
                                'link_after'        => '', 
                                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                                'depth'             => 3, 
                                'walker'            => '', 
                                'theme_location'    => 'rau-sach-menu' 
                            );
                            wp_nav_menu($args);
                            ?>                                        
                        </div>
                    </div>  
                    <?php if(is_active_sidebar('top-ban-chay-1-widget')):?>
                        <?php dynamic_sidebar('top-ban-chay-1-widget')?>
                    <?php endif; ?>               
                </div>
                <div>
                    <div><center><img src="<?php echo site_url( '/wp-content/uploads/dua-chuot-da-lat.png', null ); ?>" /></center></div>
                    <div>
                        <?php if(is_active_sidebar('rau-sach-widget')):?>
                        <?php dynamic_sidebar('rau-sach-widget')?>
                        <?php endif; ?>    
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        
        <?php if(is_active_sidebar('partner-widget')):?>
            <?php dynamic_sidebar('partner-widget')?>
        <?php endif; ?>  
    </div>    
    <div class="register-mail-bg margin-top-15">
        <div class="container padding-top-15 padding-bottom-15">
            <div class="col-lg-6 no-padding">
                <?php if(is_active_sidebar('customer-widget')):?>
                    <?php dynamic_sidebar('customer-widget')?>
                <?php endif; ?>                  
            </div>
            <div class="col-lg-6 no-padding-right">
                <div class="subscribe-label">Đăng ký nhận email</div>
                <div class="box-register-email margin-top-5">                                                            
                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                        <input type="email" value="" placeholder="Email của bạn" name="EMAIL" id="mail" aria-label="general.newsletter_form.newsletter_email">
                        <button name="subscribe" id="subscribe">Gửi ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>     
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>