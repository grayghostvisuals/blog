<?php
/*
 * Required to display in select menu list
 * on posts pages from dashboard
 * Template Name: Blank
 */
?>
<?php get_header(); ?>
<div class="grid">
	<div class="col-6-4 col-9-3 col-5-1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<main class="<?php the_title(); ?> clearfix" id="content" role="main">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
				<h1>heading level 1</h1>
				<h2>heading level 2</h2>
				<h3>heading level 3</h3>
				<h4>heading level 4</h4>
				<h5>heading level 5</h5>
				<h6>heading level 6</h6>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non unde, laudantium dolor debitis sequi ad! Labore facilis asperiores veritatis, minima? Nam provident architecto minus ab, perferendis quisquam doloribus alias nemo.</p>
				<img src="//static.grayghostvisuals.com/imgblog/st-tags-hotkey.gif" alt="selecting the opening and closing tag using quick key commands in sublime text 2" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non unde, laudantium dolor debitis sequi ad! Labore facilis asperiores veritatis, minima? Nam provident architecto minus ab, perferendis quisquam doloribus alias nemo.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non unde, laudantium dolor debitis sequi ad! Labore facilis asperiores veritatis, minima? Nam provident architecto minus ab, perferendis quisquam doloribus alias nemo.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non unde, laudantium dolor debitis sequi ad! Labore facilis asperiores veritatis, minima? Nam provident architecto minus ab, perferendis quisquam doloribus alias nemo.</p>

				<pre class="language-scss"><code>@keyframes orbitGlow {
  0% {
    box-shadow: 0 0 0 25px transparent;
  }

  50% {
    box-shadow: 0 0 0 50px rgba(maroon, .10);
  }

  100% {
    box-shadow: 0 0 0 75px transparent;
  }
}</code></pre>

		<pre class="language-javascript"><code>function buttonGlowEnd(event, cname) {
  $(this).removeClass(cname);
}

$btn.on('animationend', function() {
  buttonGlowEnd.call(this, event, state);
});</code></pre>

			<figure>
				<img src="//static.grayghostvisuals.com/imgblog/st-tags-hotkey.gif" alt="selecting the opening and closing tag using quick key commands in sublime text 2" />
				<figcaption>
					<strong>Fig. 1.0 | </strong>Quick key in action using <cite title="http://www.sublimetext.com/2">Sublime Text 2</cite> on Mac 10.9.
				</figcaption>
			</figure>

			<a href="http://emmet.io">emmet</a><br>

			<abbr title="HyperText Markup Language">HTML</abbr>

			<ul>
				<li>list-item 1</li>
				<li>list-item 2</li>
				<li>list-item 3</li>
				<li>list-item 4</li>
				<li>list-item 5</li>
				<li>list-item 6</li>
			</ul>

			<ol>
				<li>list-item 1</li>
				<li>list-item 2</li>
				<li>list-item 3</li>
				<li>list-item 4</li>
				<li>list-item 5</li>
				<li>list-item 6</li>
			</ol>
			</div>

			<?php wp_link_pages( array( 'before' => '<div>' . 'Pages &rarr;', 'after' => '</div>' ) ); ?>
		</main>
	<?php endwhile; ?>

	<?php else : ?>
		<p><?php echo ( 'sorry, this page does not exist' ); ?></p>
	<?php endif; ?>

	<?php get_footer(); ?>
	</div>
</div>