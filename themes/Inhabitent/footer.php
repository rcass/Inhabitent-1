<?php
   /**
    * The template for displaying the footer.
    *
    * @package RED_Starter_Theme
    */
   
   ?>
<!-- </div>#content -->
<footer id="colophon" class="site-footer" role="contentinfo">
   <div class="contact">
      <div class="uppercase">
         <h3>contact information</h3>
			</div>
      <p><a href="info@inhabitent.com">info@inhabitent.com</a></p>
			<p>778-456-7891</p>
			<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
							<p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
							<p>
								<span><i class="fa fa-facebook-square"></i></span>
								<span><i class="fa fa-twitter-square"></i></span>
								<span><i class="fa fa-google-plus-square"></i></span>
							</p>
   </div>
   <div class="site-info">
      <div class="uppercase">
         <h3>Business Hours</h3>
      </div>
      <p>Monday-Friday: 9am to 5pm</p>
      <p>Saturday: 10am to 2pm</p>
      <p>Sunday: Closed</p>
      <div class="copyright">
         <p>copyright &copy; 2017 Inhabitent</p>
      </div>
      <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( ' %s' ), '' ); ?></a>
   </div>
   <!-- .site-info -->
</footer>
<!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

