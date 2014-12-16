<div id="rightcol">

	<!-- Search form -->
    <?php include(TEMPLATEPATH . '/search-form.php'); ?>
    
    <div class="box2">
        <div class="spacer">
        
			<!-- Add you sidebar manual code here to show above the widgets -->

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) )  ?>		           

			<!-- Add you sidebar manual code here to show below the widgets -->
            
        </div>
        <!--/spacer -->
    </div>
    <!--/box2 -->
</div>
<!--/rightcol -->
