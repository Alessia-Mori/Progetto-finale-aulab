<x-layout>
    <div class="gradient-container container-fluid py-5">
    
    <h1 class="display-5 container text-center py-5">{{__('ui.creaAnnuncio')}}</h1>
    <section class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-6 bg-form-box p-5 rounded">
                @livewire('create-form')
            </div>
        </div>
    </section>
</div>
</x-layout>