<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\RecordBlag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;
class Home extends Component
{
    use WithFileUploads;

    public $image;
    public $link;
    public $details;

    // Validation rules
    protected $rules = [
        'image' => 'required|image|mimes:jpg,png,gif|max:2048', // 2MB Max
        'link' => 'required|url',
        // 'details' => 'required|string|max:1000',
    ];
    protected $messages = [
        'image.required' => 'الصورة مطلوبة.',
        'image.image' => 'الملف يجب أن يكون صورة.',
        'image.mimes' => 'الصورة يجب أن تكون بصيغة jpg أو png أو gif.',
        'image.max' => 'حجم الصورة يجب ألا يتجاوز 2 ميجابايت.',
        'link.required' => 'الرابط مطلوب.',
        'link.url' => 'الرابط غير صحيح.',
        // 'details.required' => 'التفاصيل مطلوبة.',
        // 'details.string' => 'التفاصيل يجب أن تكون نصًا.',
        // 'details.max' => 'التفاصيل يجب ألا تتجاوز 1000 حرف.',
    ];
    public function render()
    {
        return view('livewire.home');
    }
    public  function Stor()
    {
        $this->validate();
        if ($this->image) {
            # code...
            $uniqueName = Str::uuid() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('Blags', $uniqueName);
            // dd( $uniqueName);

            $d=new RecordBlag();
            $d->link=$this->link;
            $d->iamge=$uniqueName;
            $d->detils=$this->details;
            $d->ip=Request::ip();
            $d->save();
            $this->reset();
        }

    } 

    // public function g()
    // {
    //     return RecordBlag::get();
    // }
}
