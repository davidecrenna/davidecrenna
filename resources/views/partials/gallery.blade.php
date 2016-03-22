<!-- Gallery -->
<section id="gallery" class="section-wrap">
    <div class="container">
    <h2 class="heading">Gallery <h4><a href="/gallery">Visualizza la Gallery completa</a></h4></h2>

    <div id="photogallery">
        @foreach ($photos as $photo)
            <img alt="{{ $photo->alt }}" src="{{ url($photo->path) }}"
                 data-image="{{ url($photo->path) }}"
                 data-description="{{ $photo->desc }}">
        @endforeach
    </div>



        </div>
    </section>
<!-- Gallery end -->