<?php
/*
Template Name: Custom Template1
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

 

              <div class="row push-down hidden-phone hidden-tablet">
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
                          <div class="span2 offset1">
                            <div class="dateformat-small dateformat-small-<?php echo $counter++ ?>"><!-- colored circle here -->
                              <p class="date-small">
                                <?php  
                                $dateduder = mysql2date('d M', $recent["post_date"]);
                                echo $dateduder; ?>
                              </p>

                            </div>                  
                          </div>
                          <div class="span8 offset1">
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
                          <div class="span2 offset1">
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
              <div class="row push-down hidden-phone hidden-tablet">
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
              <div class="row hidden-phone hidden-tablet">
                <div class="span12 bird">
                  <div class="span7 offset3">
                      <?php
                        if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "footer" );
                        ?>
                  </div>
                </div>
              </div>

            </div> 
            <!-- Main Content Area query -->
                <?php $counter = 1; ?>                              
                <?php $args = array(
                    'numberposts' => 4,
                    'category' => 13,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true );

                    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
                ?>                   

            <div class="span7"><!-- content begins here-->
              <?php foreach( $recent_posts as $recent ) { ?>
                <div class="row push-down">
                  <div class="span2">
                    <div class="dateformat dateformat-<?php echo $counter++ ?>">
                      <p class="date">
                                <?php  
                                $dateduder = mysql2date('d', $recent["post_date"]);
                                echo $dateduder; ?>

                      </p>
                      <p class="monthandyear">
                                <?php  
                                $dateduder = mysql2date('M Y', $recent["post_date"]);
                                echo $dateduder; ?>
                      </p>
                    </div>
                  </div>
                  <div class="span10 wellwhite">
                    <h1>
                      <?php echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>'; ?>
                    </h1>
                    <p class="article-entry">
                      <?php echo $recent["post_content"];?>
                    </p>
                    <h3>
                      <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
                    </h3>
                    <div class="pull-right read-more btn btn-read-more">
                      <a href="<?php echo get_permalink($recent["ID"]); ?>">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
          </div>
        </div>
      </div><!-- /.main -->
  <?php get_template_part('templates/footer'); ?>

</body>
</html>
