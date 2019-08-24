
            <main id="content">
                <!-- BEGIN .huge-slider -->
                <div class="container">
                                <div class="ot-do-large-space">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-top' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
<div class="container">
                    <div class="ot-block-article-slider otg otg-items-1 breaking_news">
                    <div class="ot-content-block ot-featured-author-block" id="media">
                        <?php foreach($active_breaking_news as $row) { ?> 
                            <h3 class="h3-breaking"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                            <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <div class="otg-item item slidersss">
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <div class="otg-item item slidersss">
                                   <a href="<?php echo base_url('news/detail/'.$row['content_id']) ?>">
                                       <img src="<?php echo $row['server_image'];?>" />
                                   </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <a href="<?php echo base_url('news/detail/'.$row['content_id']) ?>">
                                       <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" class="img-responsive"/>
                                   </a>
                               <?php } ?>
                               <?php
                           $string = $row['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                                    <span class="wordsss">
                                           
                           <?php echo $string;?>
                                        </span>
                        <?php }  ?>   
                    </div>
                <!-- END .wrapper -->
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <div data-ot-tab="all" class="ot-content-tab active">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                           <?php
                                       
                                        foreach($shortcodes as $shortcode)
                                        {
                                            ?>
                                        <div class="otg-item main-news-new-news">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">

                                                    <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </a>
                                                    </div> 
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>


                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                        </a>
                                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?> 
                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                        </a>
                                                    </div>
                               <?php } ?>
                                                <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $shortcode['created'];?></span>
                                                        </span>
                                                       <?php
                           $string = $shortcode['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="otg-item main-news-small-news">
                                            <div class="ot-articles-blog-list">
                                                <?php
                                       
                                        foreach($shortcodes_offset1 as $shortcode)
                                        {
                                            ?>

                                            <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>


                                    <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               
                               <?php }
                               else{
                                   ?>
                                                    <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               <?php } ?>

                                                <?php
                                        }
                                        ?>
                                       
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                  </div>
                  <div class="col-md-4">
                    <div class="adsers main-sied">
                                <div class="ot-do-large-space midlandre new-main-side">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'aside-main-news' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
                  </div>
                </div>
                    <div class="huge-slider">
                     <?php
                                       
                                        foreach($blogs as $blog)
                                        {
                                            ?>
                                <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                    <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                                        <?php
                                       
                                        foreach($blogs_offset1 as $blog)
                                        {
                                            ?>
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div> 
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                                         <?php

                                        foreach($blogs_offset6 as $blog)
                                        {
                                            ?>
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                <!-- END .huge-slider -->
                </div>
                        <div class="adsers">
                                <div class="ot-do-large-space midlandre">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-mid' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
            <div class="row">    
                <div class="ot-content-wrapper-full">
                
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <!-- <div class="ot-title-block">
                            <h2>News</h2>
                        </div> -->
                       
                        <div class="ot-content-block">

                            <div class="ot-grid-article-list otg otg-items-2 otg-h-30 otg-v-30">
                                  <?php foreach($blogs_offset4 as $row) { ?>   
                                    <div class="col-md-6">
                                <div class="otg-item news">
                                    <h3 class="slidwords">News</h3>
                                    <div class="ot-material-card haha">
                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>
                                          <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo $row['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span> 
                               <?php } ?>
                                    <?php }  ?>
                                       <?php foreach($blogs_offset5 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                        </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                                <div class="otg-item news">
                                    <h3 class="slidwords">Songs</h3>
                                    <div class="ot-material-card haha">
                                      <?php foreach($shortcodes as $shortcode) { ?>   
                                        <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                    <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>

                                <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"><img src="<?php echo $shortcode['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           </span>
                                        </span> 
                               <?php } ?>

                                    <?php }  ?>
                                       <?php foreach($shortcodes1 as $shortcode) { ?>   
                                <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>

                                          <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo $shortcode['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        Check
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div> 
                          </div>
                        </div>
                        <div class="col-md-6">
                             <div class="otg-item news">
                                        <h3 class="slidwords">Videos</h3>
                                    <div class="ot-material-card haha">
                                        <?php
                               if (!empty($gadget_world['youtube_link'])){
                                   ?>
                                      <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$gadget_world['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>"><?php echo $gadget_world['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($gadget_world['server_image'])) {
                                ?>

                                        <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header"><img src="<?php echo $gadget_world['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>"><?php echo $gadget_world['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>"><?php echo $gadget_world['content_title']; ?></a></h3>
                                           </span>
                                        </span> 
                               <?php } ?>

                                <?php foreach($gadget_world1 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                 <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        Check
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="otg-item news">
                                <h3 class="slidwords">Photos</h3>
                                    <div class="ot-material-card haha">
                                        <?php foreach($latest_blog_articles as $row) { ?> 
                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row ['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row ['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row ['content_id']) ?>"><?php echo $row ['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                           <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo $row['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php } ?>
                                    <?php }  ?>

                                <?php foreach($latest_blog_articles1 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                     <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>

                                      <?php }  ?>
                                </div>
                            </div>
                          </div>
                            </div>

                            </div>
                            

                        </div>

                    <!-- END .wrapper -->
                    </div>

                </div>
                <div class="wrapper">
                                <div class="ot-do-large-space midlandre">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-mid' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
                            <div class="gal-max-width">
                            <div class="row">
                              <h2 class="gal-tit">Videos</h2>
                            </div>
                            <div class='row'>
                              <div class='col-md-12'>
                                <div class="carousel slide media-carousel" id="media">
                                  <div class="carousel-inner">
                                    <div class="item  active">
                                      <div class="row">
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>          
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>        
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="row">
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>          
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>        
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="row">
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>          
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>
                                        <div class="col-md-4">
                                          <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                                        </div>      
                                      </div>
                                    </div>
                                  </div>
                                  <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                  <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                </div>                          
                              </div>
                            </div>
                          </div>
                          <script>
                            $(document).ready(function() {
                            $('#media').carousel({
                              pause: true,
                              interval: false,
                            });
                          });
                          </script> 
                <div class="row">    
                <div class="ot-content-wrapper-full">
                
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <!-- <div class="ot-title-block">
                            <h2>News</h2>
                        </div> -->
                       
                        <div class="ot-content-block">

                            <div class="ot-grid-article-list otg otg-items-2 otg-h-30 otg-v-30">   
                                <div class="otg-item news">
                                    <h3 class="slidwords">New Release</h3>
                                    <div class="ot-material-card haha">
                                      <?php foreach($latest_articles as $row) { ?>
                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                 <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"> <iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span> 
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo $row['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php } ?>
                                    <?php }  ?>
                                    <?php foreach($latest_articles1 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div> 
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                         <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                             <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>
                                <div class="otg-item news">
                                    <h3 class="slidwords">Events</h3>
                                    <div class="ot-material-card haha">
                                      <?php foreach($active_tools as $shortcode) { ?>  
                                         <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>

                                           <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"><img src="<?php echo $shortcode['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php } ?>
                                    <?php }  ?>
                                       <?php foreach($active_tools1 as $shortcode) { ?>   
                                <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                  <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>

                                          <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo $shortcode['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                             <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>

                                <div class="otg-item news">
                                        <h3 class="slidwords">Aritst Profile</h3>
                                    <div class="ot-material-card haha">
                                        <?php foreach($footer_category as $row) { ?>   
                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                  <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                           <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo $row['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php } ?>
                                    <?php }  ?>
                                       <?php foreach($footer_category1 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>
                                        <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                             <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                             <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>
                            <div class="otg-item news">
                                <h3 class="slidwords">Lyrics</h3>
                                    <div class="ot-material-card haha">
                                        <?php foreach($author_name as $row) { ?> 
                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"> <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo $row['server_image'];?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <span class="hvr-image">
                                           <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                           <span class="hvr-title">
                                               <h3 class="hvr-marg-tit"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           </span>
                                        </span>
                               <?php } ?>
                                    <?php }  ?>
                                       <?php foreach($author_name1 as $row) { ?>   
                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                  <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss youtube-edt">
                                            <div class="row">
                                            <div class="col-md-4">
                                              <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><iframe src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div>
                                              </div>
                                              <div class="col-md-8 txts">
                                                <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                              </div>  
                                          </div>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <div class="image"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo $row['server_image'];?>" alt="" /></a></div>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                             <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                               <?php } ?>
                                      <?php }  ?>
                                </div>
                            </div>
                            </div>

                            </div>
                            

                        </div>

                    <!-- END .wrapper -->
                    </div>

                </div>
                <div class="gal-max-width">
                            <div class="row">
                              <div class="col-md-12">
                                <h2 class="gal-tit">Videos</h2>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                  <div data-ot-tab="all" class="ot-content-tab active">
                                                  <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                                         <?php
                                                     
                                                      foreach($shortcodes as $shortcode)
                                                      {
                                                          ?>
                                                      <div class="otg-item main-news-new-news bottom-news">
                                                          <div class="ot-articles-material-blog-list">

                                                              <div class="item item-vertical">

                                                                  <?php
                                             if (!empty($shortcode['youtube_link'])){
                                                 ?>
                                                 <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                      </a>
                                                                  </div> 
                                             <?php }
                                             elseif (!empty($shortcode['server_image'])) {
                                              ?>


                                                  <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                                      </a>
                                                                  </div> 
                                              
                                             
                                             <?php }
                                             else{
                                                 ?> 
                                                  <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                                      </a>
                                                                  </div>
                                             <?php } ?>
                                                              <div class="item-content">
                                                                      <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                                      <span class="item-meta">
                                                                          <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $shortcode['created'];?></span>
                                                                      </span>
                                                                     <?php
                                         $string = $shortcode['content_body'];;
                                         $string = word_limiter($string, 20);
                                         ?>
                                         <?php echo $string;?>
                                                                  </div>
                                                              </div>
                                                          
                                                          </div>
                                                      </div>
                                                      <?php
                                                      }
                                                      ?>
                                                      <div class="otg-item main-news-small-news">
                                                          <div class="ot-articles-blog-list">
                                                              <?php
                                                     
                                                      foreach($shortcodes_offset1 as $shortcode)
                                                      {
                                                          ?>

                                                          <?php
                                             if (!empty($shortcode['youtube_link'])){
                                                 ?>
                                                 <div class="item item-small">
                                                                  <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                      </a>
                                                                  </div>
                                                                  <div class="item-content">
                                                                      <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                                  </div>
                                                              </div>
                                             <?php }
                                             elseif (!empty($shortcode['server_image'])) {
                                              ?>


                                                  <div class="item item-small">
                                                                  <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                                      </a>
                                                                  </div>
                                                                  <div class="item-content">
                                                                      <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                                  </div>
                                                              </div>
                                             
                                             <?php }
                                             else{
                                                 ?>
                                                                  <div class="item item-small">
                                                                  <div class="item-header">
                                                                      <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                                      <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                                      </a>
                                                                  </div>
                                                                  <div class="item-content">
                                                                      <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                                  </div>
                                                              </div>
                                             <?php } ?>

                                                              <?php
                                                      }
                                                      ?>
                                                     
                                                          </div>
                                                          
                                                      </div>
                                                  </div>
                                              </div>
                                           </div>
                            </div>
                          </div>
                <div class="wrapper">
                                <div class="ot-do-large-space midlandre">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-mid' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
<!-- 
            <div class="row">    
                <div class="ot-content-wrapper-full"> -->
                
                    <!-- BEGIN .wrapper -->
                   <!--  <div class="wrapper">
 -->
                        <!-- <div class="ot-title-block">
                            <h2>News</h2>
                        </div> -->
                       
                        <!-- <div class="ot-content-block">

                            <div class="ot-grid-article-list otg otg-items-2 otg-h-30 otg-v-30">
                                <div class="otg-item news">
                                    <h3 class="slidwords">Harke Haldar</h3>
                                    <div class="ot-material-card haha">
                                        <a href="<?php echo base_url('/news/detail/'.$national_news['content_id']) ?>" class="item-header"><img src="<?php echo base_url('/uploads/content/'.$national_news['featured_img']); ?>" alt="" /></a>
                                        <div class="item-content content-news">
                                            <a href="<?php echo base_url('/news/detail/'.$national_news['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$national_news['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$national_news['content_id']) ?>"><?php echo $national_news['content_title']; ?></a></h3> 
                                    </div>
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$national_music['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$national_music['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$national_music['content_id']) ?>"><?php echo $national_music['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <?php foreach($national_news2 as $shortcode) { ?>   
                                <div class="otg-item news">
                                    <h3 class="slidwords">What The Flop</h3>
                                    <div class="ot-material-card haha">
                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header"><img src="<?php echo base_url('/uploads/content/'.$shortcode['featured_img']); ?>" alt="" /></a>
                                        <div class="item-content content-entertainment">
                                            <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$shortcode['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3> 
                                    </div>
                                    <?php }  ?>
                                       <?php foreach($international_news as $shortcode) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                             <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$shortcode['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div> 
                                <div class="otg-item news">
                                        <h3 class="slidwords">Today's Tv</h3>
                                    <div class="ot-material-card haha">
                                        <a href="<?php echo base_url('/news/detail/'.$province3_news['content_id']) ?>" class="item-header"><img src="<?php echo base_url('/uploads/content/'.$province3_news['featured_img']); ?>" alt="" /></a>
                                        <div class="item-content content-todays-tv">
                                             <a href="<?php echo base_url('/news/detail/'.$province3_news['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$province3_news['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$province3_news['content_id']) ?>"><?php echo $province3_news['content_title']; ?></a></h3> 
                                    </div>
                                       <?php foreach($province3_news2 as $row) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div>
                            <div class="otg-item news">
                                <h3 class="slidwords">New Tv</h3>
                                    <div class="ot-material-card haha">
                                        <a href="<?php echo base_url('/news/detail/'.$province4_news['content_id']) ?>" class="item-header"><img src="<?php echo base_url('/uploads/content/'.$province4_news['featured_img']); ?>" alt="" /></a>
                                        <div class="item-content content-todays-tv">
                                            <a href="<?php echo base_url('/news/detail/'.$province4_news['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$province4_news['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$province4_news['content_id']) ?>"><?php echo $province4_news['content_title']; ?></a></h3> 
                                    </div>
                                       <?php foreach($province4_news2  as $row) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-title"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt="" /></a>
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div>
                            </div>

                            </div>
                            

                        </div> -->

                    <!-- END .wrapper -->
<!--                     </div>

                </div> -->
                <!-- <iframe width="100%" height="10%" src="https://www.youtube.com/embed/1bvYHkQxWmg?list=RD1bvYHkQxWmg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</div>
                <!-- <div class="wrapper">
                                <div class="ot-do-large-space midlandre">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-mid' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
 -->

                
                <!-- BEGIN .wrapper -->
                <!-- <div class="wrapper">
                    
                    <div class="ot-content-block ot-featured-author-block" id="media">
                            <div class="ot-block-article-slider otg otg-items-4 otg-h-30 otg-slider">
                                     <?php foreach($footer_category as $row) { ?> 
                                    <div class="otg-item item slidersss">
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>">
                                        <img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt="" />
                                        <span class="item-content">
                                            <span class="item-category">
                                            </span>
                                            <strong><?php echo $row['content_title']; ?></strong>
                                            <span class="meta-items">
                                            </span>
                                        </span>
                                    </a>
                                
                        </div>  
                        <?php }  ?>        
                            </div> 
                    </div>

                
                </div> -->
                <!-- END .wrapper -->

                
                
            <!-- BEGIN <?php echo base_url('/news/detail/'.$blog['content_id']) ?>content -->
            
            
            
         