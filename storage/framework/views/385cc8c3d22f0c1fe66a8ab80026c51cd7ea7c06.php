 


<?php $__env->startSection('content'); ?>

	<!-- CONTENT -->
	<div class="content col-xs-8">
        <?php if(isset($name)): ?>
        <p>Showing result of <?php echo e($name); ?></p>
        <?php endif; ?>
    	<!-- ARTICLE  -->  
    	
		<?php if(isset($posts)): ?> 
			
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
		    	<article>
		        	<div class="post-image">
		            	<img src="<?php echo e(asset($post->thumbnail)); ?>" alt="post image 1">
                        <?php if(isset($post->category)): ?>
    		                <div class="category">
                                <a href="<?php echo e(asset('')); ?>category/<?php echo e($post->category_slug); ?>"><?php echo e($post->category->name); ?></a>
                            </div>
                        <?php endif; ?>
		            </div>
		            <div class="post-text">
		            	<span class="date"><?php echo e($post->created_at); ?></span>
		                <h2><a href="<?php echo e(asset('')); ?>blog/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h2>
		                <p class="text">
		                	<?php echo $post->description; ?>

                            <a href="#"><i class="icon-arrow-right2"></i></a>
		                </p>                                 
		            </div>
		            <div class="post-info">
		            	<div class="post-by">Post By <a href="#">AD-Theme</a></div>
		                <div class="extra-info">
		                	<a href="#"><i class="icon-facebook5"></i></a>
		            		<a href="#"><i class="icon-twitter4"></i></a>
		            		<a href="#"><i class="icon-google-plus"></i></a>
		                    <span class="comments">25 <i class="icon-bubble2"></i></span>
		                </div>
		                <div class="clearfix"></div>
		            </div>
		        </article>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    <?php endif; ?>
               
    	<!-- NAVIGATION -->
        <?php if(isset($name)): ?>
        <div class="navigation">
                    <a href="<?php echo e($posts->previousPageUrl()); ?>" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
                    <a href="<?php echo e($posts->nextPageUrl()); ?>" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
                    <div class="clearfix"></div>
        </div>
        
        <?php else: ?>
        
        <div class="navigation">
                    <a href="<?php echo e($posts->previousPageUrl()); ?>" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
                    <a href="<?php echo e($posts->nextPageUrl()); ?>" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
                    <div class="clearfix"></div>
        </div>
        <?php endif; ?>
        
        

        
    
    </div>
    
    
    <!-- SIDEBAR -->
    <div class="sidebar col-xs-4">
    	
        
        <!-- ABOUT ME -->                    
        <div class="widget about-me">
        	<div class="ab-image">
            	<img src="<?php echo e(asset('')); ?>blog_assets/img/about-me.jpg" alt="about me">
                <div class="ab-title">About Me</div>
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
    
	<div class="clearfix"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>