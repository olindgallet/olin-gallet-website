<!doctype html>
<html lang="en">	
<head>
	<meta charset="utf-8">
	<title>Olin Gallet | Portfolio</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/reveal.js/2.6.2/css/reveal.min.css">
	<link rel="stylesheet" href="css/og-slide.css" id="theme">	
</head>

<body>
	<!-- Wrap the entire slide show in a div using the "reveal" class. -->
	<div class="reveal">
		<!-- Wrap all slides in a single "slides" class -->
		<div class="slides">

			<!-- ALL SLIDES GO HERE -->
			<!-- Each section element contains an individual slide -->
			<section>
				<h2>Hi I'm Olin Gallet</h2>
				<h2>This is my portfolio</h2>
				<p>PC Users: Use your arrow keys or the navigator in the lower-right corner</p>
				<p>Mobile Users: Slide to navigate</p>
			</section>

			<section>
				<h2>Selected Work</h2>
				<p>
					<ul>
						<li><a href="#/slides-web-apps">Web Applications</a></li>
						<li><a href="#/slides-game-design">Game Design</a></li>
						<li><a href="#/slides-miscellaneous">Miscellaneous</a></li>
					</ul>
				</p>
			</section>
			
			<section>
				<section id="slides-web-apps">
					<h2>Web Applications</h2>
				</section>
				
				<section>
					<h2>Image Effects</h2>
					<a href="http://www.olingallet.com/websites/imageeffects">http://www.olingallet.com/websites/imageeffects</a>
					
					<p>Tool used to upload images to an image processing script, then download the results in a ZIP file.  Intended to work on PC, however works on Android but not iOS.</p>
					<ul>
						<li>PHP, ImageMagick and MagickWand libraries</li>
						<li>jQuery</li>
						<li>HTML5/CSS3</li>
					</ul>
				</section>
				
				<section>
					<h2>All Alternative Music</h2>
					<a href="http://www.allalternativemusic.com">http://www.allalternativemusic.com</a>
					
					<p>Site designed to mimic going through different CD cases to find music.  Also contains information
					pages for each album.</p>
					<ul>
						<li>PHP, Wordpress</li>
						<li>jQuery</li>
						<li>CSS3</li>
					</ul>
				</section>			
				
			</section>
			
			<section>
				
				<section id="slides-game-design">
					<h2>Game Design</h2>
				</section>
				
				<section>
					<h2>Shape Chaser</h2>
					<p><a href="http://www.olingallet.com/websites/shapechaser/">http://www.olingallet.com/websites/shapechaser/</a></p>
					<p><a href="https://github.com/olindgallet/shape-chaser">Source &mdash; https://github.com/olindgallet/shape-chaser</a></p>
					
					<p>Web game designed for children to match colored shapes to text as quickly as possible.  Intended to be ported to mobile
					devices, however still not 100% bugless on mobile.  Works fine in PC browsers though.</p>
					<ul>
						<li>HTML5/CSS3</li>
						<li>Easel.js, jQuery</li>
						<li>Phonegap</li>
					</ul>	
				</section>
				
				<section>
					<h2>Ms. Gelee</h2>
					<a href="http://www.olingallet.com/websites/msgelee">http://www.olingallet.com/websites/msgelee</a>
					
					<p>Platformer inspired by Kirby Games and Mr. Gimmick.  Arrow keys to move, C to shoot, X to jump.  Currently on hold, though
					part of the first stage is playable.</p>
					<ul>
						<li>Melon.JS/Javascript</li>
						<li>Tiled Map Editor</li>
						<li>GIMP</li>
						<li>Audacity</li>
					</ul>
				</section>
				
				<section>
					<h2>Sevens Card Game AI Design</h2>
					<p><a href="http://news.dice.com/2014/04/03/coding-challenge-wrapup-won-sevens/">http://news.dice.com/2014/04/03/coding-challenge-wrapup-won-sevens/</a></p>
					<p>Source &mdash; <a href="https://github.com/olindgallet/sevens-ai">https://github.com/olindgallet/sevens-ai</a></p>
					
					<p>The strategy is to get rid of the highest and lowest card in hand if possible.  If not, then remove the next highest and lowest card if possible.  In the event of a tie, pick
					the most common suit in hand since that means there's more opportunities to play cards and less for the opponent.</p>
					<p>Even though my bot placed 3rd, the range among wins for the top 3 is 2, so I believe that 2nd and 3rd place could easily place first if the random number generator selected better scenarios for them.</p>
					<ul>
						<li>JAVA</li>
					</ul>
				</section>
				
				<section>
					<h2>Improving Breath of Fire:Dragon Quarter Game Design</h2>
					<a href="http://gamecareerguide.com/features/1312/results_from_game_design_.php?page=4">http://gamecareerguide.com/features/1312/results_from_game_design_.php?page=4</a>
					
					<p>Entry into a contest for improving the existing game design of an unpopular game.  Overall, my goal would be to maximize replayability and player immersion.  Details on what I would change are in the link.</p>
				</section>
			</section>
			
			<section>
				
				<section id="slides-miscellaneous">
					<h2>Miscellaneous</h2>
				</section>
				
				<section>
					<h2>Psychology Behind Good Web Design</h2>
					<a href="http://www.slideshare.net/olindgallet/the-psychology-of-good-web-design">http://www.slideshare.net/olindgallet/the-psychology-of-good-web-design</a>
					
					<p>Presentation about how to make users have a positive web experience.</p>
				</section>
				
				<section>
					<h2>Introduction to Programming the Web</h2>
					<a href="http://www.olingallet.com/websites/webprogrammingclass/week1.pdf">http://www.olingallet.com/websites/webprogrammingclass/week1.pdf</a>
				
					<p>Syllabus to teach someone with no programming experience the starting principles of web design.</p>	
				</section>
				
			</section>

			</div>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/reveal.js/2.6.2/js/reveal.min.js"></script>

	<script>
		// Required, even if empty.
		Reveal.initialize({
		});
	</script>
</body>
</html>