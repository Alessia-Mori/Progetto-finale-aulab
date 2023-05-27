<x-layout>
    <x-navbarUp />

        <x-masthead />
 
    


    <div class="bg-custom-welcome pt-5">
        <div class="container mb-5 bg-white-transparent rounded py-5  ">
            <p class="h2 my-2 fw-bold text-center">{{__('ui.allAnnouncements')}}</p>
            <div class="row justify-content-around">
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-3 my-3" data-aos="fade-up">
                    <article class="custom-card">
                        <div class="d-flex justify-content-center align-items-center ">
                            <a class="postcard__img_link" href="{{route('announcement.show', compact('announcement'))}}">
                                <img class="postcard__img w-100 rounded-top" src="{{$announcement->images()->first()->getUrl(400, 300) }}" alt="Image Title" />
                            </a>
                        </div>
                        <div class="p-2">
                            <p class="my-0 fw-bold ms-2 mt-2 text-uppercase" href="{{route('announcement.show', compact('announcement'))}}">{{Str::limit($announcement->title, 10)}}</p>
                            <a class="text-black text-decoration-none" href="{{route('categoryShow', $announcement->category) }}"><i class="fa-solid fa-tag ms-2 me-2"></i>
                                @if(App::isLocale('it'))
                                {{$announcement->category->name}}
                                @elseif(App::isLocale('en'))
                                {{$announcement->category->en}}
                                @elseif(App::isLocale('de'))
                                {{$announcement->category->de}}
                                @endif
                            </a>
                            <p><i class="fa-solid fa-money-bill ms-2 me-2"></i>{{$announcement->price}}€</p>
                            <div class="d-flex justify-content-end">
                                <time datetime="2020-05-25 12:00:00" class="text-grey custom-time">
                                    <i class="text-black fas fa-calendar-alt mr-2 ms-2 me-2"></i>{{$announcement->created_at->format('Y-m-d')}}
                                </time>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>