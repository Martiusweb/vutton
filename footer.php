        <footer id="eop">
            <?php if(!is_404()) get_sidebar('footer'); ?>
            <p>C'est la fin, mais c'est feston !</p>
        </footer>
    </div> <!-- #content -->
    <div id="sidebar" class="span3">
        <?php get_search_form(); ?>
        <?php get_sidebar(); ?>
    </div>
</div><?php /* #row */ ?> 
</div><?php /* #container */ ?>
<!-- scripts here -->
<?php
if(is_singular() && get_option('thread_comments'))
	wp_enqueue_script('comment-reply');

wp_footer();
?></body>
</html>
