 


<?php $__env->startSection('content'); ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    	<!-- CONTENT -->
    	<div class="content col-xs-8">
        
        
        	<!-- ARTICLE 1 -->
        	<article>
            	<div class="post-image">
                	<img src="<?php echo e(asset($post->thumbnail)); ?>" alt="post image 1"> 
                </div>
                <div class="post-text">
                    <h2><?php echo e($post->title); ?></h2>
                </div>                 
                <div class="post-text text-content">                  
                	<div class="text"><p><?php echo e($post->content); ?></p>            
                    <div class="gallery">
                    	<div class="item-gallery-left">
                        	<img src="<?php echo e(asset('')); ?>blog_assets/img/img-post-gallery-1.jpg">
                            <img src="<?php echo e(asset('')); ?>blog_assets/img/img-post-gallery-2.jpg">
                        </div>
                        <div class="item-gallery-center">
                        	<img src="<?php echo e(asset('')); ?>blog_assets/img/img-post-gallery-big.jpg">
                        </div>	
                        <div class="item-gallery-right">    
                            <img src="<?php echo e(asset('')); ?>blog_assets/img/img-post-gallery-3.jpg">
                            <img src="<?php echo e(asset('')); ?>blog_assets/img/img-post-gallery-4.jpg">
                    	</div>	
                            <div class="clearfix"></div> 
                    </div>
                    <ul class="bullet">
                    	<p><?php echo e($post->description); ?></p>
                    
                    <div class="clearfix"></div>
                    </div>
                </div>
            
            
       	 	</article>
        
        
        </div>


        <!-- SIDEBAR -->
        <div class="sidebar col-xs-4">
        	
            
            <!-- ABOUT ME -->                              
            <div class="widget about-me">
            	<div class="ab-image">
                	<img src="<?php echo e(asset('')); ?>blog_assets/img/about-me.jpg" alt="about me">
                    <div class="<?php echo e(asset('')); ?>blog_assets/ab-title">About Me</div>
                </div>
                <div class="ad-text">
                	<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <span class="signing"><img src="<?php echo e(asset('')); ?>blog_assets/img/signing.png" alt="signing"></span>
                </div>
            </div>


            <!-- LATEST POSTS -->                              
            <div class="widget latest-posts">
            	<h3 class="widget-title">
                	Latest Posts
                </h3>
                <div class="posts-container">
                
                	<div class="item">
                    	<img src="<?php echo e(asset('')); ?>blog_assets/img/latest-posts-1.jpg" alt="post 1" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                        	<span class="date">07 JUNE 2016</span>	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="<?php echo e(asset('')); ?>blog_assets/img/latest-posts-2.jpg" alt="post 2" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">MAURIS SIT AMET</a></h5>
                        	<span class="date">06 JUNE 2016</span>                       	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="<?php echo e(asset('')); ?>blog_assets/img/latest-posts-3.jpg" alt="post 3" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                        	<span class="date">05 JUNE 2016</span>                        	
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                	<div class="item">
                    	<img src="<?php echo e(asset('')); ?>blog_assets/img/latest-posts-4.jpg" alt="post 4" class="post-image">
                        <div class="info-post">
                        	<h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                        	<span class="date">04 JUNE 2016</span>                     	
                        </div>    
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>


            <!-- FOLLOW US -->                              
            <div class="widget follow-us">
            	<h3 class="widget-title">
                	Follow Us
                </h3>
            	<div class="follow-container">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                
                </div>
            	<div class="clearfix"></div>
            </div>            


            <!-- TAGS -->                              
            <div class="widget tags">
            	<h3 class="widget-title">
                	Tags
                </h3>
            	<div class="tags-container">
                <?php if(isset($tags)): ?> 
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(asset('')); ?>tag/<?php echo e($tag->slug); ?>"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>                                    
            </div>
            	<div class="clearfix"></div>
            </div> 


            <!-- ADVERTISING -->                              
            <div class="widget advertising">
				<div class="advertising-container">
                	<img src="<?php echo e(asset('')); ?>blog_assets/img/350x300.png" alt="banner 350x300">
                </div>
			</div>


            <!-- NEWSLETTER -->                              
            <div class="widget newsletter">
            	<h3 class="widget-title">
                	Newsletter
                </h3>
            	<div class="newsletter-container">
					<h4>DO NOT MISS OUR NEWS</h4>
                    <p>Sign up and receive the <br> latest news of our company</p> 
                    <form>
                       <input type="email" class="newsletter-email" placeholder="Your email address...">
                       <button type="submit" class="newsletter-btn">Send</button>
                  	</form>                                  
                </div>
            	<div class="clearfix"></div>
            </div>  
            
        </div> <!-- #SIDEBAR -->
        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
        
   		<div class="clearfix"></div>
<?php $__env->stopSection(); ?>  
    
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>