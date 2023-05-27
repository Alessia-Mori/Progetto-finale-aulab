<x-layout>

    <div class="container mx-auto containerCustomMobile bg-white-transparent p-5 m-5 rounded" style="min-height:100vh" >
        <h1 class="" data-aos="zoom-in">{{ __('ui.AnnunciDellaCategoria') }}:
            @if (App::isLocale('it'))
                {{ $category->name }}
            @elseif(App::isLocale('en'))
                {{ $category->en }}
            @elseif(App::isLocale('de'))
                {{ $category->de }}
            @endif
        </h1>
        <div class="row">
            @if ($category->announcements)
                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-3  mx-3 d-flex justify-content-center align-items-center flex-column"
                        data-aos="fade-up">
                        <div class="card-shawdow">
                            <img class="card-img-top p-3 rounded"
                                src="{{ $announcement->images()->first()->getUrl(400, 300) }}" alt="">
                        </div>
                        <div class="my-2">
                            <h5>{{ Str::limit($announcement->title, 15) }}</h3>
                                <p class="fw-bold">{{ $announcement->price }} €</p>
                        </div>
                        <div class="footer bg-transparent">
                            <p><a class="waves-effect waves-light btn btn-card bg-dark-custom"
                                    href="{{ route('announcement.show', compact('announcement')) }}">{{__('ui.read more')}}</a><a
                                    id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a>
                            </p>
                            <p class="txt3"><i
                                    class="far fa-clock"></i>{{ $announcement->created_at->format('Y-m-d') }} <span
                                    class="comments"><i class="fas fa-comments"></i>45 Comments</span></p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 vh-100">
                    <p>{{ __('ui.nonCiSonoAnnunci') }}</p>
                    <p>{{ __('ui.pubblicaneUno') }}: <a class="btn btn-success shadow"
                            href="{{ route('announcement.create') }}">{{ __('ui.nuovoAnnuncio') }}</a></p>
                </div>
            @endif
        </div>
    </div>
 

</x-layout>
