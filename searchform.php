<form action="<?php echo home_url(); ?>" id="search-form" method="get">
  <label for="s">Search the Archives of Knowledge</label>
  <input type="text" value="<?php esc_attr( the_search_query() ); ?>" name="s" placeholder="...whatchya lookin' for?">
</form>