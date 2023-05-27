<x-layout>

    <div class="container-fluid  gradient-three-colors ">
        <div class="row mx-5 caroselloCustom justify-content-center mb-5">
            <div class="col-12 col-md-8 p-5 bg-white-transparent rounded d-flex flex-column justify-content-center ">
                
                
                <div id="carouselExample" class=" justify-content-center carousel slide">
                    <div class="carousel-inner ">
                        
                        @foreach ($announcement->images as $image)
                        <div class="carousel-item   @if ($loop->first)  active @endif">
                            <img src="{{ $image->getUrl(400, 300) }}"
                                class="position-relative mx-auto d-block  " alt="...">
                        </div>
                        @endforeach
                    
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            
            <div class="col-12 py-3">

        <div class="w-100 text-center d-flex flex-column align-items-start justify-content-around">
            <h1>{{ $announcement->title }}</h1>
            <p class="fw-bold fs-5">{{ $announcement->price }} €</p>
            <p>{{ $announcement->description }}</p>
            <p>{{__('ui.spedizione')}}</p>
            <a class="my-3 text-white btn bg-black" href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{__('ui.categoria')}}:
                @if(App::isLocale('it'))
                {{$announcement->category->name}}
                @elseif(App::isLocale('en'))
                {{$announcement->category->en}}
                @elseif(App::isLocale('de'))
                {{$announcement->category->de}}
                @endif
            </a>
        </div>
    </div>
    {{-- <div class="row justify-content-center align-items-center mx-5">
            <p>{{$announcement->description}}</p>
    </div> --}}
    </div>
    </div>
</x-layout>