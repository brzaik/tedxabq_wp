			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div class="fourcol first">
						
						<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/tedxabq_mainlogo_white.png" /></a>

						<br /><br />

						<p class="source-org copyright"><p>This independent <a href="http://www.ted.com/tedx">TEDx</a> event is operated under license from <a href="http://ted.com">TED</a>.</p></p>

						<br />

						<nav role="navigation">
							<?php bones_footer_links(); ?>
						</nav>

						<br />

					</div>

					<div class="fivecol">
						
						<h4 class="widgettitle">What is TEDx?</h4>
						<p>In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxABQ, where x = independently organized TED event.</p>
						<p>At our TEDxABQ event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>

						<br />

					</div>

					<div class="threecol">

						<?php get_sidebar( 'footer_sidebar1' ); ?>

						<br />

					</div>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
