@extends('layouts.app')
@section('content')

  @include('partials.hero')
  @include('partials.profile')
  @include('partials.qualification')
  @include('partials.experience')
  {{--@include('partials.skill')--}}
  @include('partials.gallery')
  {{--@include('partials.blog')--}}



	
  {{--<!-- EXTRA SECTION -->
  <section id="extra" class="section-wrap">
    <div class="container">

    </div><!-- .container -->
  </section>
  <!-- EXTRA SECTION END -->--}}
	
  @include('partials.contact')
@stop
	
