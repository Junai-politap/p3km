<x-web>
   
    @include('title.title', [
        'title' => 'DETAIL BERITA',
    ]) 

    <div class="blog-details blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ url("public/$berita->poto") }}">
                        </div>
                        <div class="blog-one__content">
                            <h3>
                                {{ $berita->nama_berita }}
                            </h3>
                            <ul class="blog-one__meta list-unstyled">
                                
                                <li>{{ date("d - M - Y", strtotime($berita->tanggal_berita)) }}</li>
                            </ul>
                            
                            <blockquote>
                                <p>
                                    {!! nl2br($berita->detail) !!}
                                </p>
                            </blockquote>
                        
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        @foreach ($list_berita as $berita)
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Berita Terbaru</h3>
                            <div class="sidebar__post-single">
                                <div class="sidebar__post-image">
                                    <img src="{{ url("public/$berita->poto") }}">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3><a href="{{ url("berita/$berita->id") }}">
                                        {{ $berita->nama_berita }}
                                        </a>
                                    </h3>
                                    <p>
                                        {{ date("d - M - Y", strtotime($berita->tanggal_berita)) }}
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                        @endforeach
                       
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-web>
