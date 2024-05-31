<x-web>
    <section class="page-header page-header__dark">
        <div class="container" style="height: -10px">
            <h2> Galeri</h2>
        </div>
    </section>
    <section class="event-one">
        <div class="container">
            <div class="block-title text-center">
            </div>
            <div class="row low-gutter" style="margin-top: -9%">
                @foreach ($list_galeri as $galeri)
                    <div class="col-lg-4">
                        <div class="event-one__single">
                            <div class="event-one__image">
                                <img src="{{ url("public/$galeri->poto") }}"
                                    style="object-fit: cover; position: static; width: 100%; height: 300px;">

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>
