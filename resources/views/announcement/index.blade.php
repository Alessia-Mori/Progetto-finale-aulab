<x-layout>

    {{-- card container --}}
    
    <div class="container my-5 bg-white-transparent rounded " style="min-height:100%;" >
            <h1 class=" text-center display-5 pt-5" data-aos="zoom-in">{{__('ui.i nostri annunci')}}</h1>
            <div class="container-fluid">
                <div class="row justify-content-around py-5">
                @forelse($announcements as $announcement)
                    <div class="col-12 col-md-3 mx-3 d-flex justify-content-center align-items-center  flex-column" data-aos="fade-up">
                        <div class="card-shawdow">
                            <img class="card-img-top p-3 rounded" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200'}}" alt="">
                        </div>
                        <div class="my-2">
                            <h5>{{Str::limit($announcement->title, 15) }}</h3>
                            <p class="fw-bold">{{$announcement->price}} €</p>
                        </div>
                        <div class="footer bg-transparent">
                            <p><a class="waves-effect waves-light btn btn-card bg-dark-custom" href="{{route('announcement.show', compact('announcement'))}}">{{__('ui.read more')}}</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a></p>
                            <p class="txt3"><i class="far fa-clock"></i>{{$announcement->created_at->format('Y-m-d')}}<span class="comments"><i class="fas fa-comments"></i></span></p>
                        </div>
                   
                    </div>    
                    @empty
                    <div class="col-12 vh-100">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">Non ci sono annunci per questa ricerca.</p>
                        </div>
                    </div>
        
                    @endforelse
            
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    </x-layout>
    
    