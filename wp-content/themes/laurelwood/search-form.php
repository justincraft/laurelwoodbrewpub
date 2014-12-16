<!-- Search form -->
<form method="get" action="<?php bloginfo('url'); ?>/">
    <fieldset id="search">
        <input type="text" value="Search Keywords" onblur="if (this.value == '') {this.value = 'Search Keywords';}"  onfocus="if (this.value == 'Search Keywords') {this.value = '';}" onclick="this.value='';" name="s" id="s" class="keyword" /> <input type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/btn_search.gif" alt="Search" class="searchsubmit" value="<?php _e('Search'); ?>" />
    </fieldset>
</form>
<!-- /Search form -->
