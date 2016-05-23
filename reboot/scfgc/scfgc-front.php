<?php /* Template Name: ThemeBoot Frontpage */ ?>
<?php get_header(); ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="http://santacruzfgc.com/wp-content/uploads/2016/05/bubble1.png">
          <h2>Latest Blog Posts</h2>
          <table class="table table-striped table-hover">
            <?php
              $args = array( 'numberposts' => '5', 'post_status' => 'publish' );
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ){
                echo '<tr><td><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></td></tr>';
              }
            ?>
          </table>
          <p><a class="btn btn-default" href="/blog" role="button">Blog &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://santacruzfgc.com/wp-content/uploads/2016/05/bubble3.png">
          <h2>Online Communities</h2>
          <table class="table table-striped table-hover">
            <tr><td><a href="https://facebook.com/groups/santacruzfgc">Facebook Group</a></td></tr>
            <tr><td><a href="https://twitter.com/santacruzfgc">Twitter</a></td></tr>
            <tr><td><a href="https://twitch.tv/santacruzfgc">Twitch Channel</a></td></tr>
            <tr><td><a href="https://steamcommunity.com/groups/scfgc">Steam Group</a></td></tr>
            <tr><td><a href="https://discord.gg/0gAOshL88wv9fzio">Discord Server</a></td></tr>
          </table>
          <p><a class="btn btn-default" href="/links" role="button">Community Links &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="http://santacruzfgc.com/wp-content/uploads/2016/05/bubble2.png">
          <h2>Upcoming Events</h2>
          <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=santacruzfgc%40gmail.com&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="360" height="200" frameborder="0" scrolling="no"></iframe>
          <p><a class="btn btn-default" href="/calendar" role="button">Calendar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
<?php get_footer(); ?>