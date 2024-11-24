<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Treinetic\ImageArtist\lib\Image;

class Virtual extends Component
{
    public $title = 'Probador';
    public $subtitle = 'Probador Virtual';

    public $eyeslashes = false, $browslashes = false, $show_template = false, $show_alert = false;
    public $eyeslashes_images = [];
    public $browslashes_images = [];
    public $selected_images = [];
    public $prev_state = '';
    public $eyeslashes_position = ['x' => 25, 'y' => 40];
    public $browslashes_position = ['x' => 25, 'y' => 35];
    public $selected_eyeslashes = '';
    public $selected_browslashes = '';

    protected $listeners = ['toggle_eyeslashes', 'toggle_browslashes', 'toggle_images', 'toggle', 'save_image', 'save', 'dissmiss_alert', 'resetUI'];

    public function dissmiss_alert()
    {
        $this->show_alert = false;
    }

    public function toggle_images(string $image, $side)
    {
        if ($side === 'eyeslashes') {
            if ($this->selected_eyeslashes === $image) {
                $this->selected_eyeslashes = '';
                return null;
            }
            $this->selected_eyeslashes = $image;
        } else {
            if ($this->selected_browslashes === $image) {
                $this->selected_browslashes = '';
                return null;
            }
            $this->selected_browslashes = $image;
        }
    }

    public function toggle($side)
    {
        if ($this->prev_state === $side) {
            $this->show_template = false;
            return;
        }

        if ($side === 'eyeslashes') {
            $this->browslashes = false;
            $this->eyeslashes = ! $this->eyeslashes;
        } else {
            $this->eyeslashes = false;
            $this->browslashes = ! $this->browslashes;
        }

        $this->prev_state = $side;
        $this->show_template = true;
    }

    public function save()
    {
        $file_name = 'result_image.jpeg';
        $base = Storage::disk('templates')->files('img/templates')[0];
        $img = new Image($base);
        $eyeslashes_image = new Image($this->selected_eyeslashes);
        $browslashes_image = new Image($this->selected_browslashes);

        $img->scaleToWidth(384);
        $img->scaleToHeight(384);
        $eyeslashes_image->resize(160, 60);
        $browslashes_image->resize(160, 60);
        $img->merge($eyeslashes_image, $this->eyeslashes_position['x'] * 4.5, $this->eyeslashes_position['y'] * 4);
        $img->merge($browslashes_image, $this->browslashes_position['x'] * 4.5, $this->browslashes_position['y'] * 3.5);
        $img->save($file_name, IMAGETYPE_JPEG);

        $file_path = public_path() . "/$file_name";

        $this->resetUI();

        if (file_exists($file_path)) {
            return response()->download($file_path)
                ->deleteFileAfterSend(true);
        } else {
            $this->show_alert = true;
            session()->put('alert', 'No se encontró la imágen, por favor intente de nuevo');
        }
    }

    public function resetUI()
    {
        $this->selected_eyeslashes = $this->eyeslashes_images[0];
        $this->selected_browslashes = $this->browslashes_images[0];
        $this->eyeslashes_position = ['x' => 25, 'y' => 40];
        $this->browslashes_position = ['x' => 25, 'y' => 35];
        $this->show_template = false;
        $this->browslashes = false;
        $this->eyeslashes = false;
    }

    public function mount()
    {
        $disk = Storage::disk('templates');
        $this->eyeslashes_images = $disk->files('img/templates/eyeslashes');
        $this->browslashes_images = $disk->files('img/templates/browslashes');

        $this->selected_eyeslashes = $this->eyeslashes_images[0];
        $this->selected_browslashes = $this->browslashes_images[0];
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.virtual');
    }
}
