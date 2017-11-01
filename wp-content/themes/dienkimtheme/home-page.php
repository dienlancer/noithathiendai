<?php 
	/*
	 Template Name: HomePage
	 */	 
     global $zendvn_sp_settings;
     $contacted_phone=$zendvn_sp_settings['contacted_phone'];
$email_to=$zendvn_sp_settings['email_to'];
$address=$zendvn_sp_settings['address'];
$to_name=$zendvn_sp_settings['to_name'];
$telephone=$zendvn_sp_settings['telephone'];
$website=$zendvn_sp_settings['website'];
$opened_time=$zendvn_sp_settings['opened_time'];
$opened_date=$zendvn_sp_settings['opened_date'];
$contaced_name=$zendvn_sp_settings['contacted_name'];
$facebook_url=$zendvn_sp_settings['facebook_url'];
$twitter_url=$zendvn_sp_settings['twitter_url'];
$google_plus=$zendvn_sp_settings['google_plus'];
$youtube_url=$zendvn_sp_settings['youtube_url'];
$instagram_url=$zendvn_sp_settings['instagram_url'];
$pinterest_url=$zendvn_sp_settings['pinterest_url'];   
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
        <div class="margin-top-15 product-kemma">            
            <div>                
                <div class="cate-product-horizontal-right">
                    <?php     
                    $args = array( 
                        'menu'              => '', 
                        'container'         => '', 
                        'container_class'   => '', 
                        'container_id'      => '', 
                        'menu_class'        => 'cateprodhorizontalright', 
                        'menu_id'           => 'cate-prod-horizontal-right', 
                        'echo'              => true, 
                        'fallback_cb'       => 'wp_page_menu', 
                        'before'            => '', 
                        'link_before'       => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;&nbsp;', 
                        'after'             => '', 
                        'link_after'        => '<i class="fa fa-caret-down pull-right" aria-hidden="true"></i>', 
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                        'depth'             => 3, 
                        'walker'            => '', 
                        'theme_location'    => 'rau-sach-menu' 
                    );
                    wp_nav_menu($args);
                    ?>    
                    <div class="clr"></div>                                    
                </div>
                <div class="margin-top-15"><center><img  src="<?php echo site_url( '/wp-content/uploads/noi-that-sang-trong.jpg',null ); ?>" /></center></div>                
            </div>
            <div>                               
                <?php if(is_active_sidebar('rau-sach-widget')):?>
                    <?php dynamic_sidebar('rau-sach-widget')?>
                <?php endif; ?>                    
            </div>                    
            <div class="clr"></div>   
        </div>  
        <div class="header-title">
            <h4><span><font color="#3AB54A">Thiết bị</font></span> vệ sinh</h4>                          
        </div>  
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thiet-bi-ve-sinh-widget')):?>
                <?php dynamic_sidebar('thiet-bi-ve-sinh-widget')?>
            <?php endif; ?>  
        </div>
        <div class="header-title">
            <h4><span><font color="#3AB54A">Thiết bị</font></span> bếp</h4>                          
        </div>  
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thiet-bi-bep-widget')):?>
                <?php dynamic_sidebar('thiet-bi-bep-widget')?>
            <?php endif; ?>  
        </div>
    </div>    
    <div class="register-mail-bg margin-top-15">
        <div class="container">            
            <div class="col-lg-12 no-padding">
                <h3 class="subscribe-label">
                    <span>Đăng ký nhận</span>&nbsp;<span class="tu-van-mien-phi">tư vấn miễn phí</span>
                </h3>
                <div class="mail-subscribe">Bạn là khách hàng , lớn hay nhỏ, và muốn chúng tôi phục vụ , xin vui lòng gửi cho chúng tôi một</div>
                <div class="mail-subscribe">email để support@megashop.com</div>
                <div class="box-register-email margin-top-5">              
                    <div class="subscribe-email">
                        <form action="#" method="post"  name="mc-embedded-subscribe-form" target="_blank">
                            <input type="email" value="" placeholder="Email của bạn" name="EMAIL" id="mail" aria-label="general.newsletter_form.newsletter_email">
                            <button name="subscribe" id="subscribe">Gửi ngay</button>
                        </form>
                    </div>                                                                  
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div> 
    <div class="cleverhouse padding-bottom-15">
        <div class="container">
            <div class="header-title">
                <h4><span><font color="#3AB54A">Nhà</font></span> thông minh</h4>                          
            </div>  
            <div class="margin-top-15">
                <?php if(is_active_sidebar('clever-house-widget')):?>
                    <?php dynamic_sidebar('clever-house-widget')?>
                <?php endif; ?>  
            </div>
        </div>   
    </div>     
    <?php if(is_active_sidebar('customer-widget')):?>
                    <?php dynamic_sidebar('customer-widget')?>
    <?php endif; ?> 
    <div class="cleverhouse padding-bottom-15">
        <div class="container">
            <div class="header-title">
                <h4><span><font color="#3AB54A">Tin</font></span>&nbsp;mới</h4>                          
            </div>  
            <div class="margin-top-15">
                <?php if(is_active_sidebar('hot-news-widget')):?>
                    <?php dynamic_sidebar('hot-news-widget')?>
                <?php endif; ?>  
            </div>
        </div>   
    </div>     
    <div class="cleverhouse padding-bottom-15">
        <div class="container">
            <div class="header-title">
                <h4><span><font color="#3AB54A">Đối</font></span>&nbsp;tác</h4>                          
            </div>  
            <div class="margin-top-15">
                <?php if(is_active_sidebar('partner-widget')):?>
                    <?php dynamic_sidebar('partner-widget')?>
                <?php endif; ?>  
            </div>
        </div>   
    </div>  
    <?php if(is_active_sidebar('map-widget')):?>
                    <?php dynamic_sidebar('map-widget')?>
    <?php endif; ?>      
    <div class="cleverhouse padding-bottom-15 padding-top-15">
        <div class="container">
            <div class="col-lg-4 no-padding">
                <div>
                    <div class="col-lg-3 no-padding"><center><span class="follow-us">Follow us</span></center></div>
                    <div class="col-lg-9 no-padding">
                        <div class="warasocial"><ul class="social-block ">
                            <li class="facebook"><a class="_blank" href="<?php echo $facebook_url; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a class="_blank" href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                            <li class="google_plus"><a class="_blank" href="<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="pinterest"><a class="_blank" href="<?php echo $pinterest_url; ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul></div>                        
                    </div>
                </div>                
            </div>
            <div class="col-lg-8 no-padding-right">
                <div class="menu-bottom">
                    <?php     
                    $args = array( 
                        'menu'              => '', 
                        'container'         => '', 
                        'container_class'   => '', 
                        'container_id'      => '', 
                        'menu_class'        => 'bottommenu', 
                        'menu_id'           => 'bottom-menu', 
                        'echo'              => true, 
                        'fallback_cb'       => 'wp_page_menu', 
                        'before'            => '', 
                        'after'             => '', 
                        'link_before'       => '', 
                        'link_after'        => '', 
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                        'depth'             => 3, 
                        'walker'            => '', 
                        'theme_location'    => 'bottom-menu' 
                    );
                    wp_nav_menu($args);
                    ?>         
                </div>                
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer();?>
</body>
</html>