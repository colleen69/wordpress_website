        </main>
        <footer>

                         <div class="footer-nav">   
                            
                                <div class="icons">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                </div>  

                                 <ul class="display-dk hidden-md hidden-sm">
                                    <?php wp_nav_menu(array('theme_location'=>'secondary'));?>
                                </ul>
                        </div>      
                            
                        <div class="admin-footerinfo">
                            <ul>
                                <li><a href="#">Send Us Feedback | </a></li> 
                                <li><a href="policy.html"> Privacy Policy/Your Privacy Rights | </a></li>
                                <li><a href="terms.html">Terms and Conditions </a></li>
                            </ul>    
                        </div>
                    </div> 
            
                <div class="copyright">
                    Copyright © <?php echo date('Y'); ?> Sony Music Entertainment. All Rights Reserved.
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>