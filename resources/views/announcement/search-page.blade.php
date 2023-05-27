<x-layout>


    <div class="container">
        
        <div class="row p-5 bg-white-transparent">
            <h1 class="container display-5 mb-5 text-center " data-aos="zoom-in">{{__('ui.i nostri annunci')}}</h1>
            @forelse($announcements as $announcement)
            
                <div class="col-12 col-md-3 mx-3 d-flex justify-content-center align-items-center  flex-column" data-aos="fade-up">
                    <div class="card-shawdow">
                        <img class="card-img-top p-3 rounded" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" alt="">
                    </div>
                    <div class="my-2">
                        <h5>{{Str::limit($announcement->title, 15) }}</h3>
                        <p class="fw-bold">{{$announcement->price}} €</p>
                    </div>
                    <div class="footer bg-transparent vh-100">
                        <p><a class="waves-effect waves-light btn btn-card bg-dark-custom" href="{{route('announcement.show', compact('announcement'))}}">{{__('ui.read more')}}</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i></span></a></p>
                        <p class="txt3"><i class="far fa-clock"></i>{{$announcement->created_at->format('Y-m-d')}}<span class="comments"><i class="fas fa-comments"></i></span></p>
                    </div>
               
                </div>   
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non ci sono annunci per questa ricerca.</p>
                </div>
            </div>

            @endforelse
            {{$announcements->links()}}
            </div>

        </div>
    </div>






</x-layout>