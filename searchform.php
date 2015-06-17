<form id="search-form" action="<?php echo home_url(); ?>" method="get" role="search">
    <label for="s" class="visuallyhidden">Search the Archives</label>
    <input type="search" value="<?php esc_attr( the_search_query() ); ?>" name="s" placeholder="Search Archives">
</form>