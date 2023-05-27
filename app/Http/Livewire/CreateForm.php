<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateForm extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $temporary_images;
    public $images = [];
    public $price;
    public $category;
    public $announcement;  //aggiunto dopo aver visto user #5, noi non lo avevamo

    protected $rules = [
        'title' => 'required|min:5|max:40',
        'description' => 'required|min:20|max:200',
        'images.*'=> 'required|image|max:1024',
        'temporary_images.*'=> 'required|image|max:1024',
        'price' => 'required',
        'category'=>'required'
    ];

    

    public function updatedTitle()
    {
        $this->validateOnly('title');
    }

    public function updatedDescription()
    {
        $this->validateOnly('description');
    }

    public function updatedPrice()
    {
        $this->validateOnly('price');
    }

    protected $messages = [
        'title.required' => 'Il campo Titolo non può essere vuoto.',
        'title.min' => 'Il campo Titolo contiene troppi pochi caratteri.',
        'title.max' => 'Il campo Titolo contiene troppi caratteri.',
        'description.required' => 'Il campo Descrizione non può essere vuoto.',
        'description.min' => 'Il campo descrizione è troppo breve.',
        'description.max' => 'Il campo Descrizione è troppo lungo.',
        'temporary_images.required'=> 'l\'immagine è richiesta',
        'temporary_images.*.image'=> 'I file devono essere immagini',
        'temporary_images.*.max'=> 'L\'immagine dev\'essere massimo di un mb',
        'images.image'=> 'L\'immagine dev\'essere un immagine',
        'images.max'=> 'L\'immagine dev\'essere massimo di un mb',
        'price.required' => 'Il campo Prezzo non può essere vuoto.',
        'category.required'=> 'il campo Categoria non può essere vuoto'
    ];
    
    public function updatedTemporaryImages() {

        if($this->validate ([
            'temporary_images.*'=> 'image|max:1024',
        ])) {

            foreach ($this->temporary_images as $image) {
                $this->images[]= $image;
            } 
        
        }

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    

    public function removeImage($key) {
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]); 
        }
    }



    public function store(){
        $this->validate();
        $category = Category::find($this->category);
        
        $announcement = $category->announcements()->create($this->validate());
        Auth::user()->announcements()->save($announcement); 
        if(count($this->images)) {
            foreach ($this->images as $image) {
                // $announcement->images()->create(['path'=>$image->store('images','public')]);
                $newFileName= "announcements/{$announcement->id}";
                $newImage= $announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);


                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        };
        session()->flash('message','Announcement inserted correctly, it will be published after revision.');
        $this->resetForm();
    }
    
    

    public function resetForm() {
        $this->title='';
        $this->subtitle='';
        $this->description='';
        $this->category = '';
        $this->price = '';
        $this->images = [];
        $this->temporary_images = [];
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
