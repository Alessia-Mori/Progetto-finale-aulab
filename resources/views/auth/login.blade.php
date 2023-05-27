
<x-layout>
 
    <div class="gradient-container vh-100 container-fluid bodyLogin">

    {{-- <section class="container py-5" id="loginSection">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-12 col-md-6 p-5 bg-form-box rounded">
                <h1 class="lr-title mb-5 text-center">LOGIN</h1>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control rl-input" name="email" >
                        @error('email')<span class="form-error">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rl-input" name="password" >
                        @error('password')<span class="form-error">{{$message}}</span>@enderror
                    </div>
                   
                    <button type="submit" class="btn bg-dark-custom">Login</button>
                </form>
                


            </div>
        </div>
    </section> --}}
    
    {{-- Form animato  --}}

    <div class="boxLogin">
        <div class="formLogin">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h2>Sign in</h2>
                <div class="inputBox">
                    <input type="text" required="required" name="email">
                    <span>Email</span>
                    <i></i>
                    @error('email')<span class="form-error">{{$message}}</span>@enderror
                </div>
                <div class="inputBox">
                    <input type="password" required="required" name="password">
                    <span>Password</span>
                    <i></i>
                    @error('password')<span class="form-error">{{$message}}</span>@enderror
                </div>
                                
                <input type="submit" value="Login" class="loginButton">
            </form>
        </div>
    </div>
    
    </div>

    

</x-layout>

