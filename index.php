<?php get_header(); ?>


	<! ========== HEADERWRAP ==================================================================================================== 
	=============================================================================================================================>
    <div id="headerwrap" style="background: url('<?php bloginfo('template_url') ?>/imagens/park_cimba.png') no-repeat center top; background-size: 100%;">
    	<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2 mt">
					<h1 class="animation slideDown">Venha aprender novas línguas na escola de idiomas que mais cresce em Araguaína.</h1>
    				<p class="mt"><button type="button" class="btn btn-cta btn-lg">Inscreva-se!</button></p>
				</div>
				
			</div><!-- /row -->
    	</div><!-- /container -->
    </div> <!-- /headerwrap -->

	<! ========== BLOG POSTS ==================================================================================================== 
	=============================================================================================================================>    
	<div class="container">	

		<div class="row mt centered ">
			<div class="col-lg-4 col-lg-offset-4">
				<h3>What Is Happening?</h3>
				<hr>
			</div>
		</div><!-- /row 350-->

		<div class="row mt">
			
			<?php query_posts('category_name=noticias,campanhas&showposts=3'); ?>
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="<?php the_Permalink() ?>">
					<div class="imageT" style="background-image: url(<?php the_post_thumbnail_url() ?>);width: 350px;height: 200px; background-size: 350px;">
					<?php $image = get_the_post_thumbnail_url(); ?>
					</div>
					<div class="b-wrapper">
					  	<h5 class="b-from-left b-animate b-delay03"><?php the_title(); ?></h5>
					  	<p class="b-from-right b-animate b-delay03">Ler Mais</p>
					</div>
				</a>
				<p><b><?php the_title(); ?></b></p>
				<p class="lead"><?php the_excerpt(30, ''); ?></p>
				<hr-d>
				<p class="time">
					<i class="fa fa-comment-o"></i> <?php the_author(); ?> | 
					<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
				</p>
			</div><!-- col-lg-4 -->

			<?php endwhile; else: ?>
            <?php endif; ?>
			
		</div><!-- /row -->
	</div><!-- /container -->
	
	<! ========== CALL TO ACTION 1 ============================================================================================== 
	=============================================================================================================================>    
    <div id="cta01">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2">
    				<h2>The probability of success is difficult to estimate;<br/>but if we never search, the chance of success is zero.</h2>
    				<button type="button" class="btn btn-cta btn-lg">eBook Grátis</button>
    			</div>
    		</div><!-- /row -->
    	</div><!-- /container -->
    </div><! --/cta01 -->

	<! ========== PORTFOLIO SECTION ============================================================================================= 
	=============================================================================================================================>    
	<div class="container">
		<div class="row mt centered ">
			<div class="col-lg-4 col-lg-offset-4">
				
				<h3>Our Latest Work</h3>
				
				<hr>
			</div>
		</div><!-- /row -->
		
		<div class="row mt centered">
		<?php query_posts('category_name=noticias,campanhas&showposts=3'); ?>
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>	
			<div class="col-lg-4 desc">
				<a class="b-link-fade b-animate-go" href="<?php the_Permalink() ?>">
					<div class="imageT" style="background-image: url(<?php the_post_thumbnail_url() ?>);width: 350px;height: 200px; background-size: 350px;">
					<?php $image = get_the_post_thumbnail_url(); ?>
					</div>
					<div class="b-wrapper">
					  	<h5 class="b-from-left b-animate b-delay03"><?php the_title(); ?></h5>
					  	<p class="b-from-right b-animate b-delay03">Mais Detalhes</p>
					</div>
				</a>
				<p>
					<?php
					$categoria = get_the_category();
					$nomeCategoria = $categoria[0]->cat_name;
					echo $nomeCategoria;
					?> - <i class="fa fa-heart-o"></i></p>
			</div>
		<?php endwhile; else: ?>
        <?php endif; ?>
		</div><!-- /row -->
		

		<div class="row mt centered">
			<div class="col-lg-4 col-lg-offset-4">
    			<button type="button" class="btn btn-theme btn-lg">VIEW OUR PORTFOLIO</button>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

	<! ========== BRANDS & CLIENTS =============================================================================================== 
	=============================================================================================================================>    
	<div id="grey">
		<div class="container">
			<div class="row mt centered ">
				<div class="col-lg-4 col-lg-offset-4">
					<h3>Parceiros</h3>
					<hr>
				</div><!-- /col-lg-4 -->
			</div><!-- /row -->
			
			<div class="row centered">
				<center>
				<div class="col-lg-3 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/280x124.fw.png" alt="Devulpis">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/Espaço-Deguste.png" alt="">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/fael.png" alt="">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/image1.png" alt="">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/logo_novo_empresa jr.png" alt="">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/rangos.png" alt="">
				</div>
				<div class="col-lg-2 pt">
					<img class="img-responsive" src="<?php bloginfo('template_url') ?>/imagens/parceiros/summer.png" alt="">
				</div>
				</center>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /grey -->

	
	<! ========== BLACK SECTION ================================================================================================= 
	=============================================================================================================================>    
	<div id="black">
		<div class="container">
			<div class="row mt centered">
				<?php query_posts('category_name=pt&showposts=1'); ?>
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-lg-4 col-lg-offset-4">
					<h3><?php the_title(); ?></h3>
					<hr>
				</div><!-- /col-lg-4 -->
			</div><!-- /row -->
			
			<div class="row mt">
				<div class="col-lg-8 col-lg-offset-2">
					<?php the_content(); ?>
				</div><! --/col-lg-8 -->
			</div><!-- /row -->
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div><!-- /container -->
	</div><!-- /black -->


	<! ========== FEATURED ICONS ================================================================================================ 
	=============================================================================================================================>    
    <div id="white">
	    <div class="container">
	    	<div class="row mt">
	    		<div class="col-lg-4 col-lg-offset-4 centered">
	    			<h3>Diferentes Estágios</h3>
	    			<hr>
	    		</div>
	    	</div>
	    	<div class="row mt">
	    	<?php query_posts('category_name=estagios&order=DESC'); ?>
			<?php if(have_posts()) : $i = 0; while (have_posts()) : $i++; the_post(); ?>
	    		<div class="col-lg-3">
	    			<p class="capitalize"><?php echo $i ?></p>
	    			<h4><?php the_title(); ?></h4>
	    			<?php the_content(); ?>
	    		</div>
	    	<?php endwhile; else: ?>
			<?php endif; ?>
	    	</div><!-- /row -->
	    </div><!-- /container -->
    </div><!-- /white -->

	<! ========== CALL TO ACTION 2 ============================================================================================== 
	=============================================================================================================================>    
    <div id="cta02">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2">
    				<h2>Our products & services are crafted with the utmost care to fulfill your needs.</h2>
    				<button type="button" class="btn btn-cta btn-lg">LEARN MORE</button>
    			</div>
    		</div><!-- /row -->
    	</div><!-- /container -->
    </div><! --/cta02 -->

	<! ========== FEATURED ICONS ================================================================================================ 
	=============================================================================================================================>    
    <div class="container">
    	<div class="row mt">
    		<div class="col-lg-4 centered si">
    			<i class="fa fa-flask"></i>
    			<h4>Built with Bootstrap 3</h4>
    			<p>Built for all levels of expertise, whether you need simple pages or complex ones, creating something incredible with Marco is an effortless and intuitive process.</p>
    		</div>
    		<div class="col-lg-4 centered si">
    			<i class="fa fa-eye"></i>
    			<h4>Retina Display Theme</h4>
    			<p>We’ve taken great care to ensure that Marco is fully retina-ready. So it’ll look good on any retina display. We use retina.js to ensure the best view.</p>
    		</div>
    		<div class="col-lg-4 centered si">
    			<i class="fa fa-mobile"></i>
    			<h4>Responsive Design Always</h4>
    			<p>Marco fits any device handsomely. We tested our theme in major devices and browsers. Check it out and test it before buy it on responsinator.com.</p>
    		</div>    	

    		<div class="col-lg-4 centered si">
    			<i class="fa fa-cog"></i>
    			<h4>Really Nice Animations</h4>
    			<p>Good looking animations are an essential part of the new theme design trend. We add animations.css, a cool script to help you enhance your site with style.</p>
    		</div>
    		<div class="col-lg-4 centered si">
    			<i class="fa fa-flag"></i>
    			<h4>Font Awesome Included</h4>
    			<p>Font Awesome is the most used icon font on Bootstrap. Gives you scalable vector icons that can instantly be customized with the power of CSS.</p>
    		</div>
    		<div class="col-lg-4 centered si">
    			<i class="fa fa-heart"></i>
    			<h4>Carefully Crafted</h4>
    			<p>We aim to design both, functional & beautiful themes. Details are an important part of our main concept. We work hard to keep our code and front-end flawless.</p>
    		</div>    	
    	</div><!-- /row -->
    </div><!-- /container -->
    
	<! ========== OUR TEAM ====================================================================================================== 
	=============================================================================================================================>    
	
	<div id="white">
		<div class="container">
	    	<div class="row mt">
	    		<div class="col-lg-4 col-lg-offset-4 centered">
	    			<h3>Professores</h3>
	    			<hr>
	    		</div>
	    	</div><! --/row -->
			
			<div class="row">
				<div class="col-lg-4 centered">
					<div class="members">
					  <img src="<?php bloginfo('template_url') ?>/imagens/gutemberg.jpg" alt="">
					  <div class="team-info">
					    <div class="subhead">Developer</div>
					    <h2 class="team-name">Gianni</h2>
					    <p class="team-description"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-dribbble"></i></p>
					  </div>
					</div>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4 centered">
					<div class="members">
					  <img src="<?php bloginfo('template_url') ?>/assets/img/team/rebecca.png" alt="">
					  <div class="team-info">
					    <div class="subhead">Designer</div>
					    <h2 class="team-name">Rebecca</h2>
					    <p class="team-description"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-dribbble"></i></p>
					  </div>
					</div>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4 centered">
					<div class="members">
					  <img src="<?php bloginfo('template_url') ?>/assets/img/team/william.png" alt="">
					  <div class="team-info">
					    <div class="subhead">Designer</div>
					    <h2 class="team-name">William</h2>
					    <p class="team-description"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-dribbble"></i></p>
					  </div>
					</div>
				</div><!-- /col-lg-4 -->

			</div><! --/row -->	
		</div><! --/container -->
	</div><! --/white -->
	
	<! ========== BLACK SECTION ================================================================================================= 
	=============================================================================================================================>    
	<div id="black">
		<div class="container pt">
			<div class="row mt centered">
				<div class="col-lg-3">
					<p><i class="fa fa-instagram"></i></p>
					<h1>21.337</h1>
					<hr>
					<h4>Pictures Taken</h4>
				</div>

				<div class="col-lg-3">
					<p><i class="fa fa-music"></i></p>
					<h1>9.764</h1>
					<hr>
					<h4>Songs Listened</h4>
				</div>

				<div class="col-lg-3">
					<p><i class="fa fa-trophy"></i></p>
					<h1>107</h1>
					<hr>
					<h4>Awards Earned</h4>
				</div>

				<div class="col-lg-3">
					<p><i class="fa fa-ticket"></i></p>
					<h1>209</h1>
					<hr>
					<h4>Movies Watched</h4>
				</div>

			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /black -->

	<! ========== TESTIMONIAL CAROUSEL ========================================================================================== 
	=============================================================================================================================>    

	<div class="container">
    	<div class="row mt">
    		<div class="col-lg-4 col-lg-offset-4 centered">
    			<h3>Honest Testimonials</h3>
    			<hr>
    		</div>
    	</div><! --/row -->
	
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2 centered">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">				
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						  <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</h2>
						  <h5>Paul Morrison - BlackTie.co</h5>
						</div>
						
						<div class="item">
						  <h2>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h2>
						  <h5>Mike Wellington - BlackTie.co</h5>
						</div>
					</div><!-- /carousel-inner -->
				
				</div><! --/carousel-example -->		
			</div><!-- /col-lg-8 -->
		</div><! --/row -->
	</div><!-- /container -->


	<! ========== CONTACT SECTION =============================================================================================== 
	=============================================================================================================================>    

	<div id="white">
		<div class="container">
	    	<div class="row mt">
	    		<div class="col-lg-4 col-lg-offset-4 centered">
	    			<h3>Contact Us</h3>
	    			<hr>
	    		</div>
	    	</div><! --/row -->
		</div><!-- /container -->
	<div id="map"></div>	
	</div><!-- /white -->



	
	<! ========== CALL TO ACTION BAR =============================================================================================== 
	=============================================================================================================================>    
	<div id="cta-bar">
		<div class="container">
			<div class="row centered">
				<a href="#"><h4>Are You Ready For The Next Step?</h4></a>
			</div>
		</div><!-- /container -->
	</div><!-- /cta-bar -->
	
	<! ========== FOOTER ======================================================================================================== 
	=============================================================================================================================>    
	
	<div id="f">
		<div class="container">
			<div class="row">
				<!-- ADDRESS -->
				<div class="col-lg-3">
					<h4>Our Studio</h4>
					<p>
						Some Ave. 987,<br/>
						Postal 64733<br/>
						London, UK.<br/>
					</p>
					<p>
						<i class="fa fa-mobile"></i> +55 4893.8943<br/>
						<i class="fa fa-envelope-o"></i> hello@yourdomain.com
					</p>
				</div><! --/col-lg-3 -->
				
				<!-- TWEETS -->
				<div class="col-lg-3">
					<h4>Recent Tweets</h4>
					<div id="showtweets"></div>
						<script>
							twitterFetcher.fetch('258157205101088768', 'showtweets', 2, true, false, false, '', false, handleTweets, false);
							
							function handleTweets(tweets){
							    var x = tweets.length;
							    var n = 0;
							    var element = document.getElementById('showtweets');
							    var html = '<ul>';
							    while(n < x) {
							      html += '<li>' + tweets[n] + '</li>';
							      n++;
							    }
							    html += '</ul>';
							    element.innerHTML = html;
							}					
						</script>
					<p>Follow us <b>@Alvrz_is</b></p>
				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Latest Posts</h4>
					<p>
						<i class="fa fa-angle-right"></i> A post with an image<br/>
						<i class="fa fa-angle-right"></i> Other post with a video<br/>
						<i class="fa fa-angle-right"></i> A full width post<br/>
						<i class="fa fa-angle-right"></i> We talk about something nice<br/>
						<i class="fa fa-angle-right"></i> Yet another single post<br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- NEW PROJECT -->
				<div class="col-lg-3">
					<h4>New Project</h4>
					<a href="#"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt="" /></a>
				</div><!-- /col-lg-3 -->
				
				
			</div><! --/row -->
		</div><!-- /container -->
	</div><!-- /f -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/retina.js"></script>


  	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;
	
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>    



  
  </body>
</html>
