<x-layout>

    
    <div class="gradient-container container-fluid ">
    <section class="container py-5 " id="registerSection">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 bg-form-box p-5 rounded">
                <h1 class="lr-title mb-5" data-aos="zoom-in">CANDIDATI</h1>
                <form action="{{route('become.revisor')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="age" class="form-label">Indica la tua età</label>
                         <input type="text" class="form-control rl-input"  name="age" placeholder="age">
                        @error('age')<span class="form-error">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="messageR" class="form-label">Perché vuoi diventare revisore?</label>
                        <textarea  type="text" name="messageR" class="form-control @error('messageR') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
                        
                        @error('messageR')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                   </div>

                   
                    <button type="submit" class="btn btn-success my-5">Candidati come revisore</button>
                </form>
                
                
                
                
                
                
            </div>
        </div>
    </section>
    
</div>
    

</x-layout>