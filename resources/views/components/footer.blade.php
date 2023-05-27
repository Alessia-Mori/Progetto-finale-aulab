<div class="container-fluid mb-0 bg-white p-0 ">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top" >
    <p class="col-md-3 mb-0 text-black ms-4">&copy; 2023 Presto, Inc. All rights reserved</p>

    @auth
    @if(!Auth::user()->is_revisor)
    <a class="col-md-3 d-flex align-items-center justify-content-center text-black btn bg-dark-custom" href="{{ route('workWithUs')}}">Lavora con noi!</a>
  @endif
  @endauth

    <li class="nav col-md-3 justify-content-end me-4">
      <a href="#"><i class="text-black fa-brands fa-instagram fs-2 me-2"></i></a>
      <a href="#"><i class="text-black fa-brands fa-github fs-2 me-2 ms-2"></i></a>
      <a href="#"><i class="text-black fa-solid fa-envelope fs-2  ms-2"></i></a>
    </li>
  </footer>
</div>
