<?php
/*
Template Name: Custom Template2
*/
?>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->
        <div class="content push-right">
          <div class="row-fluid row push-down">
            <div class="span5 sidebar">
              <div class="row push-down">
                  <div class="span12">
                    <img src="http://lorempixel.com/100/100" alt="Jeff's Display Picture" class="img img-polaroid display-picture alignleft" align="">
                    <h4>Jeffrey Ely</h4>
                    <p class="display-picture">Welcome to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quas, cupiditate aspernatur architecto doloribus adipisci quisquam animi repellendus commodi nesciunt impedit aut ipsam quam tempora et corporis illum cum porro maxime repellat odit eligendi obcaecati </p>
                    <div class="display-picture">
                      <a href="http://www.google.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/facebook.png" alt="Facebook Profile" class="social-media">  
                      </a>
                      
                      <a href="http://www.google.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/linkedin.png" alt="Facebook Profile" class="social-media">  
                      </a>
                      
                      <a href="http://www.google.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/twitter.png" alt="Facebook Profile" class="social-media">  
                      </a>
                      
                      <a href="http://www.google.com">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/wordpress.png" alt="Facebook Profile" class="social-media">    
                      </a>
                      
                    </div>
                    <div class="pull-right read-more btn btn-read-more">
                      Read More
                    </div>
                  </div>
              </div>
            <!--Latest Posts from the blog-->   

 

              <div class="row push-down hidden-phone">
                <!-- Recent Work Query -->                                  
                <?php $counter = 1; ?>
                <?php $args = array(
                    'numberposts' => 4,
                    'category' => 10,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true );

                    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
                ?> 

                <div class="span6">
                  <h4 class="push-right">Recent Work</h4> <!-- Recent Work -->   
                    <?php foreach( $recent_posts as $recent ) { ?>
                        <div class="feed-data">
                          <div class="span1"></div><!-- spacer -->
                          <div class="span2">
                            <div class="dateformat-small dateformat-small-<?php echo $counter++ ?>"><!-- colored circle here -->
                              <p class="date-small">
                                <?php  
                                $dateduder = mysql2date('d M', $recent["post_date"]);
                                echo $dateduder; ?>
                              </p>

                            </div>                  
                          </div>
                          <div class="span1"></div><!-- spacer -->
                          <div class="span8">
                            <h4>
                              <?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?>
                            </h4><!-- Feed Title goes here -->
                          </div>                      
                      </div>  <!--feed data--> 
                      <?php } ?>                                 
                </div>
                <!-- Blog Query -->    
                <?php $counter = 1; ?>                              
                <?php $args = array(
                    'numberposts' => 4,
                    'category' => 9,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true );

                    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
                ?> 
                <div class="span6">
                  <h4 class="push-right">Latest Posts from the blog</h4>
                    <?php foreach( $recent_posts as $recent ) { ?>
                        <div class="feed-data">
                          <div class="span1"></div><!-- spacer -->
                          <div class="span2">
                            <div class="dateformat-small dateformat-small-<?php echo $counter++ ?>"><!-- colored circle here -->
                              <p class="date-small">
                                <?php  
                                $dateduder = mysql2date('d M', $recent["post_date"]);
                                echo $dateduder; ?>
                              </p>

                            </div>                  
                          </div>
                          <div class="span1"></div><!-- spacer -->
                          <div class="span8">
                            <h4>
                              <?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?>
                            </h4><!-- Feed Title goes here -->
                          </div>                      
                      </div>  <!--feed data--> 
                      <?php } ?>
                </div>
              </div>
              <div class="row push-down hidden-phone">
                <!-- Publications Query -->    
                <?php $counter = 1; ?>                              
                <?php $args = array(
                    'numberposts' => 4,
                    'category' => 11,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true );

                    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
                ?>                 
                <div class="span6">
                  <h4 class="push-right">Publications</h4>

                    <?php foreach( $recent_posts as $recent ) { ?>
                        <div class="feed-data">
                          <div class="span1"></div><!-- spacer -->
                          <div class="span2">
                            <div class="dateformat-small dateformat-small-<?php echo $counter++ ?>"><!-- colored circle here -->
                              <p class="date-small">
                                <?php  
                                $dateduder = mysql2date('d M', $recent["post_date"]);
                                echo $dateduder; ?>
                              </p>

                            </div>                  
                          </div>
                          <div class="span1"></div><!-- spacer -->
                          <div class="span8">
                            <h4>
                              <?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?>
                            </h4><!-- Feed Title goes here -->
                          </div>                      
                      </div>  <!--feed data--> 
                      <?php } ?>

                </div>

                <!-- Personal Opinion Query -->    
                <?php $counter = 1; ?>                              
                <?php $args = array(
                    'numberposts' => 4,
                    'category' => 11,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true );

                    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
                ?>                   
                <div class="span6">
                  <h4 class="push-right">Personal Opinion</h4>
                    <?php foreach( $recent_posts as $recent ) { ?>
                        <div class="feed-data">
                          <div class="span1"></div><!-- spacer -->
                          <div class="span2">
                            <div class="dateformat-small dateformat-small-<?php echo $counter++ ?>"><!-- colored circle here -->
                              <p class="date-small">
                                <?php  
                                $dateduder = mysql2date('d M', $recent["post_date"]);
                                echo $dateduder; ?>
                              </p>

                            </div>                  
                          </div>
                          <div class="span1"></div><!-- spacer -->
                          <div class="span8">
                            <h4>
                              <?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?>
                            </h4><!-- Feed Title goes here -->
                          </div>                      
                      </div>  <!--feed data--> 
                      <?php } ?>                 
                </div><!--sidebar-->
              </div>              
              <div class="row hidden-phone">
                <hr class="ornament"> 
              </div>
              <div class="row hidden-phone">
                <div class="span12 bird">
                  <div class="span1"></div><!-- spacer -->
                  <div class="span7">
                      <?php
                        if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "footer" );
                        ?>
                  </div>

                  <div class="span1"></div><!-- spacer -->
                </div>
              </div>

            </div> 
            <!-- Main Content Area query -->
            <?php while (have_posts()) : the_post(); ?>           
            <div class="span7"><!-- content begins here-->
                <div class="row push-down">
                  <div class="span2">
                    <div class="dateformat dateformat-1">
                      <p class="date">
                                 <?php  
                                echo the_date('d M Y');
                                ?> 
                      </p>
                      <p class="monthandyear">
                               <!-- This part is commented out  -->
                               <!--  <?php  
                                $dateduder = mysql2date('M Y', $date1);
                                echo $dateduder; ?> -->
                      </p>
                    </div>
                  </div>
                  <div class="span10 wellwhite">
                    <h1>
                      <a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">
                        <?php echo the_title(); ?>
                      </a>
                    </h1>
                    <p class="article-entry">
                      <?php echo the_content();?>
                    </p>
                    <?php comments_template('/templates/comments.php'); ?>
                  </div>
                </div>
          </div>
          <?php endwhile; ?>          
        </div>
      </div><!-- /.main -->
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
