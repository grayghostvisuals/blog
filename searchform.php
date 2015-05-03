<form id="search-form" action="<?php echo home_url(); ?>" method="get" role="search">
    <label for="s">Search the Archives</label>
    <input type="search" value="<?php esc_attr( the_search_query() ); ?>" name="s" placeholder="enter search term">
</form>