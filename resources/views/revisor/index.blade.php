<x-layout>
  <div class="container">
    <div class="row">
      <div class="col-12">
   
        <!-- <h1 class=" text-center text-uppercase display-3 py-5" data-aos="zoom-in">{{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
        </h1> -->

      </div>
    </div>
  </div>

  @if ($announcement_to_check)
  <h1 class=" text-center text-uppercase display-3 py-5" data-aos="zoom-in">{{__('ui.annunciRevisore')}}</h1>
  <div class="container">
    <section class="row justify-content-center">
      <div class="col-12 col-md-6">

        {{-- carosello --}}
        <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

          @if ($announcement_to_check->images)
          <div class="carousel-inner ">
            @foreach ($announcement_to_check->images as $image)
            <div id="caroselloR" class="carousel-item @if($loop->first) active @endif">
              <img src="{{$image->getUrl(400, 300)}}" class="position-relative mx-auto d-block" alt="...">
            </div>
            @endforeach
            {{-- "{{Storage::url($image->path)}} --}}
          </div>



          @else
          <div class="carousel-inner">
            <div class="carousel-item d-flex active">
              <img src="https://picsum.photos/id/28/1200/400" class="img-fluid  p-3 rounded" alt="...">
            </div>
            <div class="carousel-item d-flex">
              <img src="https://picsum.photos/id/29/1200/400" class="img-fluid  p-3 rounded" alt="...">
            </div>
            <div class="carousel-item d-flex">
              <img src="https://picsum.photos/id/29/1200/400" class="img-fluid  p-3 rounded" alt="...">
            </div>
          </div>

          @endif
          <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>

      {{-- label + tags --}}
      <div class="col-12 col-md-6 pb-5 mb-5 mb-md-0">

        <div class="card-body p-4 border-custom bg-white-transparent">
          
          <h5 class="tc-accent mt-3">Tags</h5>
          @if($image->labels)
          @foreach ($image->labels as $label)
          <p class="d-inline">{{$label}},</p>
          @endforeach
          @endif
        </div>

        <div class="card-body p-4 border-custom bg-white-transparent">
          <h5 class="tc-accent">{{__('ui.revisioneImmagini')}}</h5>
          <p class="my-1">{{__('ui.adulti')}}: <span class="{{$image->adult}}"></span></p>
          <p class="my-1">{{__('ui.satira')}}: <span class="{{$image->spoof}}"></span></p>
          <p class="my-1">{{__('ui.medicina')}}: <span class="{{$image->medical}}"></span></p>
          <p class="my-1">{{__('ui.violenza')}}: <span class="{{$image->violence}}"></span></p>
          <p class="my-1">{{__('ui.contenutoAmmiccante')}}: <span class="{{$image->racy}}"></span></p>
        </div>
      </div>
    </section>

    <hr />


    {{-- card body + pulsanti --}}

    <section class="row py-5">

        <div class="col-12 col-md-6 d-flex flex-column align-items-center ">
            <h5 class="card-title">{{__('ui.titolo')}}: {{$announcement_to_check->title}}</h5>
            <p class="card-text">{{__('ui.descrizione')}}: {{$announcement_to_check->description}}</p>
            <p class="card-footer">{{__('ui.pubblicato')}}: {{$announcement_to_check->created_at->format('Y-m-d')}}</p>
        </div>  
        <div class="col-12 col-md-6 d-flex justify-content-around">
            <div class="pb-5" >
              <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success">{{__('ui.accetta')}}</button>
              </form>
            </div>
            <div >
              <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="POST">
                
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger">{{__('ui.rifiuta')}}</button>
              </form>
            </div>
        </div>
      </section>
    
  @else
  {{-- <div class="col-12 vh-100 d-flex justify-content-center">
    <img src="https://cdn.pixabay.com/photo/2014/03/05/21/12/desert-279862_1280.jpg" alt="deserto" class="h-50">
  </div>  --}}
<div class="col-12 vh-100 d-flex justify-content-center align-items-start">
  
    <div class="bodyErrorRevisor">
        <div class="container errorRevisorContainer">
          <div class="box">
            <span style="--i:1;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:2;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:3;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:4;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:5;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:6;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:7;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:8;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:9;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:10;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:11;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:12;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:13;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:14;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:15;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
            <span style="--i:16;"><i>{{__('ui.niente')}}</i> {{__('ui.da')}} <i>{{__('ui.r')}}</i>{{__('ui.revisionare')}}</span>
          </div>
        </div>
    </div>   
 </div>     
     
    </div>
  </div>
  @endif



</x-layout>