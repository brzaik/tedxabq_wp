<form role="search" method="get" id="searchform" action="<?php echo get_option('home'); ?>">
  <div>
    <h4 class="widgettitle">Search</h4>
    <input type="text" placeholder="Enter text to search" value="<?php echo esc_attr( apply_filters( 'the_search_query' , get_search_query() ) ); ?>" name="s" id="s" />
  </div>
</form>