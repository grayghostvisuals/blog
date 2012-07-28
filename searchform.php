<form action="<?php echo home_url(); ?>" id="search-form" method="get">
  <label for="s">Query the Joint </label>
  <input type="text" value="<?php esc_attr( the_search_query() ); ?>" name="s" placeholder="Ask me anything...I double dog dare you">
</form>
