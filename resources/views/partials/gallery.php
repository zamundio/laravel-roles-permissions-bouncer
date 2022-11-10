<section id="gallery" class="wow fadeInUp">


    @foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
        @foreach($gallery->photos as $photo)
        <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
        @endforeach
    </div>
    @endforeach
</section>