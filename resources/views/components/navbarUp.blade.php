<div class="container-fluid bg-transparent py-3">
    <div class="row w-100">
       

        <div class="d-none d-md-block">
            <ul class="d-flex flex-wrap  justify-content-around ">

                @if(App::isLocale('it'))
                
                @foreach ($categories as $category)
                    <li class="nav-link active mx-3 my-2 customCategory"><a
                            href="{{ route('categoryShow', compact('category')) }}"
                            class="text-decoration-none text-black lead " id="link-border">{{ $category->name }}</a>
                    </li>
                   
                @endforeach

                @elseif(App::isLocale('en'))

                @foreach ($categories as $category)
                    <li class="nav-link active mx-3 my-2 customCategory"><a
                            href="{{ route('categoryShow', compact('category')) }}"
                            class="text-decoration-none text-black lead " id="link-border">{{ $category->en }}</a>
                    </li>
                @endforeach

                @elseif(App::isLocale('de'))
                @foreach ($categories as $category)
               

                    <li class="nav-link active mx-3 my-2 customCategory"><a
                            href="{{ route('categoryShow', compact('category')) }}"
                            class="text-decoration-none text-black lead " id="link-border">{{ $category->de }}</a>
                    </li>
                @endforeach
                @endif

            </ul>
        </div>
    </div>
</div>
