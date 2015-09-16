<?php get_header(); ?>
	<div class="banner">
		<div class="item banner-blog">
			<div class="container">
				<h1 class="page-title">Blog</h1>
			</div>
		</div>
	</div>
	<div class="container content blog">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post() ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p class="blog-post-meta"><?php the_time( 'F j, Y' ); ?> by <?php the_author_meta( 'display_name' ); ?></p>
		<?php the_content(); ?>
		<hr class="featurette-divider">
		<!--<h1>Spring 2015 Quarter Announcements</h1>
		<p class="blog-post-meta">04/10/2015 by <a href="http://twitter.com/animelover1808">Jason Lu</a></p>

		<p>Hey everyone, Jason “animelover1808” Lu here representing the group. Here is our plans for the quarter!</p>

		<h2>Fight Night: Casual Edition renamed to Salty Saturdays</h2>
		<p>To prevent confusion between Fight Night: Ranked Edition and Fight Night: Casual Edition, we’re now renaming our casual nights to Salty Saturdays. Our ranked nights will now simply known as Fight Night. Phew, now we don’t need to type as much when writing the event names down! :)

		  <h2>Mystery Game Tournament</h2>
		  <p>yeah</p>-->
		<a href="#" class="small pull-right">Back to top</a>
		<?php endwhile; ?>
		<?php else : ?>
		<hr class="featurette-divider">
		<?php endif; ?>
		<!--<a href="/blog/spring-2015-quarter-announcements.html"><h1>Spring 2015 Quarter Announcements</h1></a>
		<p class="blog-post-meta">04/10/2015 by <a href="http://twitter.com/animelover1808">Jason Lu</a></p>

		<p>Hey everyone, Jason “animelover1808” Lu here representing the group. Here is our plans for the quarter!</p>

		<h2>Fight Night: Casual Edition renamed to Salty Saturdays</h2>
		<p>To prevent confusion between Fight Night: Ranked Edition and Fight Night: Casual Edition, we’re now renaming our casual nights to Salty Saturdays. Our ranked nights will now simply known as Fight Night. Phew, now we don’t need to type as much when writing the event names down! :)

		  <h2>Mystery Game Tournament</h2>
		<p>After the beta test run while we were still underground, I am proud to announce the Mystery Game Tournament is coming back even better set for week one! First off the prizes have been improved!</p>
		<ul>
		  <li>1st place gets an awesome Top Ramen style shirt!</li>
		  <li>2nd place gets a box of Street Fighter Dhalsim Curry.</li>
		  <li>3rd gets a can of Salt and Vinegar Pringles.</li>
		</ul> 
		<p>Basic rules are ⅔ for the tournament until grand finals which is ⅗ (except Puzzle Fighter). Every matchup will be a different randomly drawn out fighting game, which has been upgraded to 3 different consoles (360, PS3, and Wii). This will occur on the first week back in our “OG” room, Baskin Engineering 330.</p>

		<h2>Fight Night Ranked Season for Super Smash Bros. for Wii U (Smash 4)</h2>
		<p>After the amazing turnout for our two test run tournaments, we are pleased to announce that Fight Night for Smash 4 will continue onto Spring quarter. We are now attempting to adapt the Evolution Championship rules for Smash 4. However because of the difficulties with setup, we expect hiccups to occur as we adjust to this drastic change.</p>

		<h2>Marvel Kumite</h2>
		<p>Now that the Street Fighter 4 Fight Night season has ended we have more flexibility in doing other stuff. One thing that was attempted and will be so once more is the Marvel Kumite aka the round robin. I will attempt it once more with a slight change in format. Rather than it being it’s own series, I’m just gonna pay out to the top 3 at the end of the event.</p>
		<ul>
		  <li>1st gets $20.</li>
		  <li>2nd gets $5.</li>
		  <li>3rd gets $1.</li>
		</ul>
		<p>This is a callback to the original roots of the Santa Cruz Fighting Game Community. Hope to see you all there and good luck to everyone!</p>

		<h2>GDA Collab X SCFGC Fundraiser Smash 4 Tournament</h2>
		<p>We're partnering with the <a href="https://facebook.com/groups/gdacollab/">GDA Collaboration</a> to run a Smash 4 tournament to help raise funds for both organizations! The entry fee will be $5 and the top 3 will get a % payout. The rest will go to the GDA Collaboration and Santa Cruz Fighting Game Community to help fund organization activities.</p>
		<p>The projected date is on <strong>April 16 (Thursday) night at Baskin Engineering 2 192 or 194, but this still has a chance of changing</strong>. We will update you all when the date and location is finalized.</p>

		<h2>Super Slug Fighters: The Big Tournament of the Year!</h2>
		<p>So after much planning and still planning, we are going to do a huge tournament. At the moment the planned games are still tentative, but we will update you as soon as we get a final list.</p>

		<p>Unlike Fight Night, this tournament will have a venue fee for all non-UCSC entrants and will require a student ID for free entry. Non-UCSC entrants can still get in for free if they bring a full setup (TV, console, and game) to be used in tournament.</p>

		<p>Part of the venue fee will go towards recuperating some of the expenses we have already spent for the organization. The rest will go towards a permanent stream setup and projector for the organization. The pot fee will of course will be paid out to either top 3 or 8 which is TBD. More information on the event (date, price, etc.) will come out soon!</p>

		<h2>Fight Night Lab Time</h2>
		<p>At Fight Night we will open a setup exclusively for training mode between players. I specifically will be attempting to teach Marvel to those that wish to learn. This will run alongside the setups used for tournament.</p>

		<h2>Doubles for Smash</h2>
		<p>We have been asked numerous times about running doubles for some of our Smash games. Before due to logistics with the Fight Night series for both games it was impossible. Now that the Fight Night season has finished for most of our games, we are going to try and move forward with running doubles.</p>

		<h2>Open Schedule for Traditional Fighting Games!</h2>
		<p>Towards the last half of the quarter we have the freedom to really try a lot of different ideas. A few ideas are Edition Select and Omega Mode tournaments if people want to do that. We could also do Doubles where we could have our partner coach us which could be fun and helpful in getting better. I would like to do a Street Fighter x Tekken scramble mode tournament if people are down for that too. I would prefer to do other stuff than all of us just playing casuals since that can be done on Salty Saturdays, but I am not opposed to playing just casuals. If anyone has suggestions please message me on Facebook or discuss about it in the group.</p>

		<h2>Tentative Schedule for Fight Night</h2>
		<ul>
		  <li>04/03 - Mystery Game Tournament</li>
		  <li>04/10 - Marvel 3 Round Robin / Smash 4 [Ranked]</li>
		  <li>04/17 - Under Night In-Birth Exe:Late Highlight / Melee Doubles</li>
		  <li>04/24 - Skullgirls Highlight / Project M Doubles</li>
		  <li>05/01 - SF4 / Smash 4 [Ranked]</li>
		  <li>05/08 - TBD / Smash 4 [Ranked]</li>
		  <li>05/15 - SF4 / Melee Singles</li>
		  <li>05/22 - TBD / Smash 4 [Ranked]</li>
		  <li>05/29 - SF4 / Smash 4 Quadruples</li>
		</ul>
		<a href="#" class="small pull-right">Back to top</a>
		<hr class="featurette-divider">
		<a href="/blog/winter-2015-quarter-ranked-fight-night.html"><h1>Winter 2015 Quarter Ranked Fight Night</h1></a>
		<p class="blog-post-meta">01/16/2015 by <a href="http://twitter.com/animelover1808">Jason Lu</a></p>
		<h2>Schedule</h2>
		<p>Hey guys we were quite pleased with the HUGE turnout for our Ranked Fight Night during Fall so we are excited to announce the event will continue on this quarter as well!</p>
		<p>We will still be holding them on Fridays, with signups taking place from 7:30 PM - 9:00 PM. The ranking points from last quarter are also being carried over as well, meaning all of the games from last quarter are returning. The difference now is that we’re introducing two new games to the event series: <strong>Ultimate Marvel vs. Capcom 3</strong> and <strong>Super Smash Bros. for Nintendo Wii U</strong>.</p>
		<p>Here’s the schedule:
			<ol>
				<li>01/16:	Ultimate Marvel vs. Capcom 3 / Project M</li>
				<li>01/23:	Ultra Street Fighter IV / Super Smash Bros. for Nintendo Wii U</li>
				<li>01/30:	Ultra Street Fighter IV / Super Smash Bros. Melee</li>
				<li>02/06:	Ultra Street Fighter IV / Project M</li>
				<li>02/13:	Ultra Street Fighter IV / Super Smash Bros. for Nintendo Wii U</li>
				<li>02/20:	Ultra Street Fighter IV / Super Smash Bros. Melee</li>
				<li>02/27:	Ultra Street Fighter IV / Project M</li>
				<li>03/06:	Ultra Street Fighter IV / Super Smash Bros. Melee</li>
			</ol>
		</p>
		<p>To handle having so many games for one event series, we are having one Ranked Fight Night every week now, rather than having the bi-weekly schedule we had last quarter.</p>
		<h2>Time & Location</h2>
		<p>We noticed that our old venue was growing more and more cramped as our participants grew, so we are pleased to announce our new venue at <strong>Baskin Engineering 2 192 every Friday starting at 7:30 PM</strong>. The room is much larger and has a door to the outside for fresh air, but setting up the room for the event will be a bit more complicated now so please bear with us as we try to get used to it.</p>
		<h2>Season Endings & Prizes</h2>
		<p><strong>Ultra Street Fighter IV</strong>, <strong>Super Smash Bros. Melee</strong>, and <strong>Project M</strong> will end their season at the end of this quarter, so prizes will be given to the top 3 players with the highest rank for each game. Special thanks to our sponsor <a href="http://www.levelupvideogames.com/" target="_blank">Level Up Video Games</a> for giving us prizes to hand out!</p>
		<p><s><strong>Ultimate Marvel vs. Capcom 3</strong> begins its season this quarter. The turnout depends on whether or not the game continues next quarter, but it will have a definite prize with $50 for 1st place, $10 for 2nd place, and $1 for 3rd place.</s> Marvel has been unfortunately postponed until next quarter! We apologize for the inconvenience.</p>
		<p><strong>Super Smash Bros. for Nintendo Wii U</strong> also begins its season this quarter. If the turnout is good enough, it will continue onto next quarter, possibly with prizes given out at the end.</p>
		<h2>Rules</h2>
		<p>Coming soon!</p>
		<a href="#" class="small pull-right">Back to top</a>
		<hr class="featurette-divider">
		<a href="/blog/winter-2015-quarter-schedule.html"><h1>Winter 2015 Quarter Schedule</h1></a>
		<p class="blog-post-meta">01/08/2015 by <a href="http://twitter.com/isaaclean">Isaac Lean</a></p>
		<p>This quarter our scheduled has changed! Now we are going to have one <strong>Ranked Fight Night</strong> and one <strong>Casual Fight Night</strong> every week. Please check out the new schedule <a href="/schedule">here</a>.</p>
		<p>Ranked Fight Nights will be every Friday from 7:00 PM to 12:00 AM <strong>starting on January 16</strong>. The location has not been confirmed just yet, but we will announce it as soon as we know. There are also some other nice things about Ranked Fight Night now that will be revealed very soon, so please keep your eye on the blog and Facebook group for the latest updates.</p>
		<p>Casual Fight Nights will be every Saturday from 7:00 PM to 11:30 PM in Baskin Engineering 379.</p>
		<p><strong>As for this Friday</strong>, we will have a special highlight event for <strong>Guilty Gear Xrd</strong> and <strong>Super Smash Bros. for Nintendo Wii U</strong>. This will basically be a Casual Fight Night with the focus on these new games, so all other fighting games are still welcome, but we would really like you to try these games out! The location will be <strong>Baskin Engineering 379 from 7:00 PM to 12:00 AM</strong>.</p>
		<p>As for upcoming tournaments...</p>
		<ul>
			<li>1/17: <a href="https://www.facebook.com/events/1519974538282568/?ref=4" target="_blank">Gamerz Phunk Lab Tournament</a> - Guilty Gear Xrd, Super Smash Bros. for Nintendo Wii U, Ultimate Marvel vs. Capcom 3, Ultra Street Fighter IV</li>
			<li>2/7: <a href="http://levelupvideogames.challonge.com/UltraSFIVRound2" target="_blank">Level Up Video Games Ultra Street Fighter IV Tournament</a></li>
		</ul>
		<a href="#" class="small pull-right">Back to top</a>
		<hr class="featurette-divider">
		<a href="/blog/fight-night-ranked-edition-season-1.html"><h1>Fight Night: Ranked Edition - Season 1</h1></a>
		<p class="blog-post-meta">11/05/2014 by <a href="http://twitter.com/isaaclean">Isaac Lean</a></p>
		<p>The Santa Cruz Fighting Game Community is proud to present an all new event series: <strong>Fight Night: Ranked Edition</strong>.</p>
		<p>At these events players will battle for points and climb their way up the rankings in a double-elimination tournament format. So far the ranked matches feature the following games:</p>
		<table class="table table-striped">
			<tr>
				<td>
					<strong><a href="http://streetfighter.com/us/usfiv" target="_blank">Ultra Street Fighter IV</a></strong>
				</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#usf4-rules">
						View Rules
					</button>
				</td>
			</tr>
			<tr>
				<td>
					<strong><a href="http://en.wikipedia.org/wiki/Super_Smash_Bros._Melee" target="_blank">Super Smash Bros. Melee</a></strong>
				</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ssbm-rules">
						View Rules
					</button>
				</td>
			</tr>
			<tr>
				<td>
					<strong><a href="http://projectmgame.com/en" target="_blank">Project M</a></strong>
				</td>
				<td>
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pm-rules">
						View Rules
					</button>
				</td>
			</tr>
		</table>
		<p>At each event points are given to players who place in the top 13 ranks and the amount of points each player earns varies depending on how high their rank is. At the end of each week the points are calculated and players can see how they are progressing through the <a href="/rankings">rankings</a>. For each event you must participate in at least one bracket match to be eligible for points.</p>
		<p>Super Smash Bros. Melee and Project M will alternate every other event, starting with Super Smash Bros. Melee on November 7 and Project M on November 21.</p>
		<p>While normally lasting throughout one quarter at UCSC, Season 1 will instead last through both Fall and Winter quarter.</p>
		<p><strong>Fight Night: Ranked Edition</strong> happens every other week on Friday at <a href="/location">Baskin 330</a> with sign-ups starting from 7:30 PM to 8:30 PM, so make sure you sign-up within this period otherwise you will not be able to compete! For specific dates please check out <a href="/schedule">Events & Schedule</a> page.</p>
		<p>We are always in need of TVs, consoles, and games, so if you are willing to bring any of them please do so! Also setup starts at 7:30, so if you're feeling nice and want to help move things go ahead.</p>
		<a href="#" class="small pull-right">Back to top</a>
		<hr class="featurette-divider">
		<a href="/blog/casual-nights.html"><h1>Fight Night: Casual Edition returns</h1></a>
		<p class="blog-post-meta">10/29/2014 by <a href="http://twitter.com/isaaclean">Isaac Lean</a></p>
		<p>Now that we are an official organization, we now have a new venue for our <strong>Fight Night: Casual Edition</strong> events at <a href="/location">Baskin 330</a>. This is to address the occupancy and sound limitations of our old venue at Oakes.</p>
		<p><strong>Fight Night: Casual Edition</strong> is an event for everyone to get together and just play some care-free matches in some fighting games. Everyone of any skill level and game is welcome, so don't hesitate to bring in some other games beyond the main three of Ultra Street Fighter 4, Ultimate Marvel vs. Capcom 3, and Super Smash Bros Melee.</p>
		<p>We are always in need of TVs, consoles, and games, so if you are willing to bring any of them please do so! Also setup starts at 7:30, so if you're feeling nice and want to help move things come around this time.</p>
		<p><strong>Fight Night: Casual Edition</strong> happen every other week on Thursday from 8:00PM to 12:00AM, so feel free to stop by at anytime during this time block and play a few games! For specific dates please check out <a href="/schedule">Events & Schedule</a> page.</p>
		<a href="#" class="small pull-right">Back to top</a>
		<hr class="featurette-divider">
		<a href="/blog/new-scfgc-website.html"><h1>New SCFGC Website: A work in progress</h1></a>
		<p class="blog-post-meta">10/29/2014 by <a href="http://twitter.com/isaaclean">Isaac Lean</a></p>
		<p>Welcome to the all new website for the Santa Cruz Fighting Game Community. This website is a way for us to centralize information about the community in an organized manner. It is also a way for us to keep community members who don't use any of our <a href="/contact">online communities</a> up to date with community affairs.</p>
		<p>Because we want the main content of the website up as soon as possible, it is now online but the entire site is still not 100% complete yet. Still everything should be mostly working, but if you find any bugs or issues <a href="/contact">please let us know</a>!</p>
		<a href="#" class="small pull-right">Back to top</a>-->
<?php get_footer(); ?>