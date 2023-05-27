<x-layout>

    <div class="gradient-container container-fluid vh-100">

        <section class="container py-5 " id="registerSection">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12  boxRegister p-5 rounded">
                    {{--<h1 class="lr-title mb-5">REGISTER</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        {{-- <label for="name" class="form-label">Nome</label> 
                        <input type="text" class="form-control rl-input"  name="name" placeholder="Nome">
                        @error('name')<span class="form-error">{{$message}}</span>@enderror
                    </div>
                    <div class="mb-3">
                        {{-- <label for="email" class="form-label">Email address</label> 
                        <input type="email" name="email" class="form-control rl-input" placeholder="Email">
                        @error('email')<span class="form-error">{{$message}}</span>@enderror

                    </div>
                    <div class="mb-3">
                        {{-- <label for="password" class="form-label">Password</label> 
                        <input type="password" name="password" class="form-control rl-input" placeholder="Password">
                        @error('password')<span class="form-error">{{$message}}</span>@enderror

                    </div>
                    <div class="mb-3">
                        {{-- <label for="password_confirmation" class="form-label">Confirm Password</label> 
                        <input type="password" name="password_confirmation" class="form-control rl-input" placeholder="Conferma Password" >
                        @error('password_confirmation')<span class="form-error">{{$message}}</span>@enderror

                    </div>

                    <button type="submit" class="btn bg-dark-custom">Register</button>
                    </form>
                    --}}


                    <div class="formReg">

                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <h1 class="lr-title mb-5">REGISTER</h1>
                            {{-- nome --}}
                            <div class="inputBoxReg">
                                <input type="text" required="required" name="name">
                                <span>Name</span>
                                <i></i>
                                @error('name')<span class="form-error">{{$message}}</span>@enderror
                            </div>
                            {{-- mail --}}
                            <div class="inputBoxReg">
                                <input type="email" required="required" name="email">
                                <span>Email</span>
                                <i></i>
                                @error('email')<span class="form-error">{{$message}}</span>@enderror
                            </div>
                            {{-- password --}}
                            <div class="inputBoxReg">
                                <input type="password" required="required" name="password">
                                <span>Password</span>
                                <i></i>
                                @error('password')<span class="form-error">{{$message}}</span>@enderror
                            </div>

                            {{-- password confirmation --}}
                            <div class="inputBoxReg">
                                <input type="password" required="required" name="password_confirmation">
                                <span>Password Confirmation</span>
                                <i></i>
                                @error('password_confirmation')<span class="form-error">{{$message}}</span>@enderror
                            </div>

                            <input type="submit" value="Register" class="registerButton">
                        </form>
                    </div>
                </div>



            </div>
        </section>
    </div>



    </div>

</x-layout>