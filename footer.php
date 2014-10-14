<?php
 global $onetone_options;
 $facebook_link = onetone_options_array( 'facebook_link' );
 $twitter_link = onetone_options_array( 'twitter_link' );
 $youtube_link = onetone_options_array( 'youtube_link' );
?>
<footer class="home-footer">
    	<div class="home-site-info">
            <div class="player"><?php echo do_shortcode('[wonderplugin_audio id="1"]'); ?></div>
        	<?php //printf(__('Powered by <a href="%s">WordPress</a>. Designed by <a href="%s">MageeWP Themes</a>.','onetone'),esc_url('http://wordpress.org/'),esc_url('http://www.mageewp.com/'));?>
            <div class="float-right width-60">
                     <!--BOTTOM MENU-->
                     <div class="bottom-menu float-right">
                        <ul>
                            <li><a href="#">SHARE</a></li>
                            <li><a href="#">WORLDWIDE RELEASE DATES</a></li>
                            <li><a href="#">CREDITS</a></li>
                        </ul>
                     </div>
                    <!--END OF  BOTTOM MENU-->
                    <!--SOCIAL MEDIA-->
                    <div class="social-medea float-right">
                        <ul>
                            <li>FOLLOW US</li>
                            <li><a href="<?php echo $facebook_link;?>" class="fb"><img src="<?php echo get_template_directory_uri();?>/images/icon-fb.png"></a></li>
                            <li><a href="<?php echo $twitter_link;?>" class="tw"><img src="<?php echo get_template_directory_uri();?>/images/icon-twitter.png"></a></li>
                            <li><a href="<?php echo $youtube_link;?>" class="lin"><img src="<?php echo get_template_directory_uri();?>/images/icon-youtube.png"></a></li>
                        </ul>
                    </div>
                    <!--END OF  SOCIAL MEDIA-->
                </div>
		</div>
    </footer>
</div>
<?php
	wp_footer();
?>
</body>
</html>