@extends('layouts.app')
@section('content')

  @include('partials.hero')
  @include('partials.profile')
  @include('partials.qualification')
  @include('partials.experience')
  @include('partials.skill')




	
  <!-- EXTRA SECTION -->	
  <section id="extra" class="section-wrap">
    <div class="container">
		
      @include('partials.gallery')
			
      <!-- Blog Preview -->
      <div id="blog" class="blog">
        <h2 class="heading">Blog Post</h2>
				
        <div class="row">
					
          <div class="col-md-4 col-sm-6">
            <div class="blog-post">
              <h3 class="blog-title"><a href="#">My First Job</a></h3>
							
              <img class="blog-thumb" src="img/thumb/thumb-2.jpg" alt="">
							
              <div class="blog-meta">
                <ul class="list-inline list-unstyled">
                  <li><i class="fa fa-calendar"></i> 26 May 2013</li>
                  <li><i class="fa fa-folder-open"></i> <a href="#">Work</a></li>
                  <li><i class="fa fa-comments"></i> <a href="#">10</a></li>
                </ul>
              </div>
							
              <p>Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, form itself fifth created rule upon moving fourth. I green.</p>
							
              <a class="pull-right" href="#"><i>continue reading &nbsp;<i class="fa fa-angle-double-right"></i></i></a>
            </div>
          </div>
					
          <div class="col-md-4 col-sm-6">
            <div class="blog-post">
              <h3 class="blog-title"><a href="#">Vacation Go!</a></h3>
							
              <img class="blog-thumb" src="img/thumb/thumb-3.jpg" alt="">
							
              <div class="blog-meta">
                <ul class="list-inline list-unstyled">
                  <li><i class="fa fa-calendar"></i> 17 Sep 2012</li>
                  <li><i class="fa fa-folder-open"></i> <a href="#">Travelling</a></li>
                  <li><i class="fa fa-comments"></i> <a href="#">23</a></li>
                </ul>
              </div>
							
              <p>Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, form itself fifth created rule upon moving fourth. I green.</p>
							
              <a class="pull-right" href="#"><i>continue reading &nbsp;<i class="fa fa-angle-double-right"></i></i></a>
            </div>
          </div>
					
          <div class="col-md-4 col-sm-6">
            <div class="blog-post">
              <h3 class="blog-title"><a href="#">New Year Wish</a></h3>
							
              <img class="blog-thumb" src="img/thumb/thumb-1.jpg" alt="">
							
              <div class="blog-meta">
                <ul class="list-inline list-unstyled">
                  <li><i class="fa fa-calendar"></i> 1 Jan 2012</li>
                  <li><i class="fa fa-folder-open"></i> <a href="#">Chat</a></li>
                  <li><i class="fa fa-comments"></i> <a href="#">15</a></li>
                </ul>
              </div>
							
              <p>Which. Seed divide subdue. And first that gathered earth whales shall tree after place also wherein saying created likeness fowl. Blessed fish green set fill saying greater you whales can't, form itself fifth created rule upon moving fourth. I green.</p>
							
              <a class="pull-right" href="#"><i>continue reading &nbsp;<i class="fa fa-angle-double-right"></i></i></a>
            </div>
          </div>
					
        </div><!-- .row -->
      </div>
      <!-- Blog End -->

    </div><!-- .container -->
  </section>
  <!-- EXTRA SECTION END -->
	
  @include('partials.contact')
@stop
	
