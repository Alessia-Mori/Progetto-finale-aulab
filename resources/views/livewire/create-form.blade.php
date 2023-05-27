<div>
  @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show gradient-three-colors" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form wire:submit.prevent="store">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">{{__('ui.titolo')}}</label>
          <input wire:model="title" type="text" class="form-control" @error('title') is-invalid @enderror" name="title">

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">{{__('ui.descrizione')}}</label>
          <textarea wire:model="description" type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
        
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{__('ui.prezzo')}}</label>
            <input wire:model="price" type="number" required name="price" min="0" value="" step=".01" class="form-control @error('price') is-invalid @enderror">
          
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">{{__('ui.categoria')}}</label>
           <select id="category" class="form-control" wire:model.defer="category">
              <option value="">{{__('ui.scegli')}}</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
          
            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
      
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
          
            @error('temporary_images.*')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                  <p>Photo preview: </p>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach ($images as $key => $image)
                          <div class="col my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}}); background-size:contain;background-position:center; background-repeat:no-repeat;">
                                    
                                </div>
                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <button type="submit" class="btn bg-dark-custom">Invia</button>
      </form>
    
</div>
