<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Virtual extends Component
{
    use WithFileUploads;

    public $title = 'Probador';
    public $subtitle = 'Probador Virtual';
    public $photo;

    public $eyeslashes = false, $browslashes = false, $show_template = false, $show_alert = false;
    public $eyeslashes_images = [];
    public $browslashes_images = [];
    public $selected_images = [];
    public $prev_state = '';
    public $eyeslashes_position = ['x' => 25, 'y' => 40];
    public $browslashes_position = ['x' => 25, 'y' => 35];
    public $selected_eyeslashes = '';
    public $selected_browslashes = '';
    public $browslashes_size = 10, $eyeslashes_size = 10;

    protected $listeners = ['toggle_eyeslashes', 'toggle_browslashes', 'toggle_images', 'toggle', 'save_image', 'save', 'dissmiss_alert', 'resetUI', 'reset_eyeslashes', 'reset_browslashes'];

    public function reset_eyeslashes()
    {
        $this->selected_eyeslashes = null;
    }
    public function reset_browslashes()
    {
        $this->selected_browslashes = null;
    }

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
            $this->eyeslashes = !$this->eyeslashes;
        } else {
            $this->eyeslashes = false;
            $this->browslashes = !$this->browslashes;
        }

        $this->prev_state = $side;
        $this->show_template = true;
    }

    public function resetUI()
    {
        $this->selected_eyeslashes = '';
        $this->selected_browslashes = '';
        $this->eyeslashes_position = ['x' => 25, 'y' => 40];
        $this->browslashes_position = ['x' => 25, 'y' => 35];
        $this->show_template = false;
        $this->browslashes = false;
        $this->eyeslashes = false;
        $this->photo = null;
        $this->browslashes_size = 100;
        $this->eyeslashes_size = 100;
    }

    public function mount()
    {
        $disk = Storage::disk('templates');
        $this->eyeslashes_images = $disk->files('img/templates/eyeslashes');
        $this->browslashes_images = $disk->files('img/templates/browslashes');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.virtual');
    }
}
