<header class="masthead py-5">
    <div class="container-fluid p-0">
        <div class="row h-100 align-items-center position-relative">
            <img class="masthead-img img-fluid" src="/media/pattern.png" alt="pattern">
            <div class="col-12 text-center mx-auto position-absolute">
                <h1 class="display-5 text-center ms-4" id="presto-title">PRESTO</h1>
                <p class="lead">{{__('ui.slogan')}}</p>
                <a class="btn bg-dark-custom shop-btn shadow" href="{{ route('announcement.index') }}">{{__('ui.shop')}}</a>
                <form class="d-flex justify-content-center my-5" action="{{ route('announcements.search') }}" method="GET">
                    <input name="searched" class="form-control input-custom" type="search" placeholder="{{__('ui.cerca')}}" aria-label="Search">
                    <button class="btn bg-white btn-custom" type="submit">
                        <lord-icon src="https://cdn.lordicon.com/zniqnylq.json" trigger="hover"
                        colors="primary:#ff99c8,secondary:#66eece" stroke="100" style="width:30px;height:30px">
                        </lord-icon>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
