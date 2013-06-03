				<div id="content_sidebar1" class="threecol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'content_sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'content_sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>