<x-web>
    <section class="page-header page-header__dark">
        <div class="container" style="height: -10px">
            <h2> Berita Terbaru</h2>
        </div>
    </section>
    <section class="event-one">
        <div class="container">
            <div class="block-title text-center">
            </div>
            <div class="row high-gutter">
                @foreach ($list_berita as $berita)
                    <div class="col-lg-4">
                        <div class="event-one__single">
                            <div class="event-one__image">
                                <img src="{{ url("public/$berita->poto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 300px;">
                                <a href="{{ url("berita/$berita->id") }}"><i class="fal fa-plus"></i></a>
                            </div>
                            <div class="event-one__content">
                                <div class="event-one__content-inner">
                                    <div class="event-one__date">
                                        <div class="event-one__date-inner">
                                            <b>{{ date('d', strtotime($berita->tanggal_berita)) }}</b>
                                            <span>{{ date('M', strtotime($berita->tanggal_berita)) }}</span>
                                        </div>
                                    </div>
                                    <h3><a href="{{ url("berita/$berita->id") }}">{{ $berita->nama_berita }}</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>
