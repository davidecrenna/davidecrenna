<!-- Gallery -->
<div id="gallery" class="gallery">
    <h2 class="heading">Gallery <h4><a href="/gallery">Visualizza la Gallery completa</a></h4></h2>

    <div class="gallery-control">
        <ul class="list-inline list-unstyled">
            <li class="filter" data-group="all"><span>Tutte</span></li>
            @foreach($groups as $group)
                <li class="filter" data-group="{{ $group->name }}"><span>{{ $group->label }}</span></li>
            @endforeach
        </ul>
    </div>

    <div id="grid" class="row gallery-wrap">

        @foreach ($photos as $photo)
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item" data-groups='["all",
                        @unless($photo->groups->isEmpty())
                            @foreach($photo->groups as $group)
                                "{{ $group->name }}"
                            @endforeach
                        @endunless
                    ]'>
                <div class="gallery-frame">
                    <a class="image-link" href="{{ url($photo->path) }}"><img src="{{ url($photo->path) }}" alt="{{ $photo->alt }}"></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Gallery end -->