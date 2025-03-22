<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Binnacle;
use App\Models\Comment;
use App\Models\Employee;
use App\Models\Package;
use App\Models\Post;
use App\Models\Service;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class DeletedRecords extends Component
{
    use WithPagination;
    private $pagination = 20;
    protected $listeners = ['refreshParent' => '$refresh', 'recover'];

    public function recover($record, $model)
    {
        $name = "";
        switch ($model) {
            case 'Cliente':
                $client = User::withTrashed()
                    ->find($record);
                $client->restore();

                $name = "cliente, ($client->name)";
                break;
            case 'Empleado':
                $employee = Employee::withTrashed()
                    ->find($record);
                $employee->restore();

                $employee_name = $employee->user->name;
                $name = "empleado, ($employee_name)";
                break;
            case 'Servicio':
                $service = Service::withTrashed()
                    ->find($record);
                $service->restore();

                $name = "servicio, ($service->name)";
                break;
            case 'Paquete':
                $package = Package::withTrashed()
                    ->find($record);
                $package->restore();

                $name = "paquete, ($package->name)";
                break;
            case 'Publicación':
                $post = Post::withTrashed()
                    ->find($record);
                $post->restore();

                $name = "publicación, ($post->title)";
                break;
            case 'Comentario':
                $comment = Comment::withTrashed()
                    ->find($record);
                $comment->restore();

                $name = "comentario, ($comment->content)";
                break;
            case 'Cita':
                $appointment = Appointment::withTrashed()
                    ->find($record);
                $appointment->restore();

                $client = $appointment->user->name;
                $name = $appointment->service->name ?? $appointment->package->name;
                $name = "cita, ($appointment - $client)";
                break;
            default:
                break;
        }

        Binnacle::create([
            'user_id' => auth()->id(),
            'status' => 'info',
            'message' => "Se recuperó un registro ({$model})"
        ]);

        $this->dispatch('show_alert', "Registro de tipo $name recuperado");
    }

    public function mount()
    {
        if (auth()->user()->hasRole('client')) {
            return redirect()->route('home');
        }
        if (auth()->user()->hasRole('employee')) {
            return redirect()->route('dashboard');
        }
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $data = [];
        $clients = User::onlyTrashed()
            ->with('roles')
            ->whereHas('roles', function ($q) {
                $q->whereIn('name', ['client']);
            })
            ->orderByDesc('created_at')
            ->get();
        $employees = Employee::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
        $services = Service::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
        $packages = Package::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
        $posts = Post::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
        $comments = Comment::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();
        $appointments = Appointment::onlyTrashed()
            ->orderByDesc('created_at')
            ->get();

        foreach ($clients as $client) {
            $data[] = ['id' => $client->id, 'model' => 'Cliente', 'title' => $client->name, 'deleted_at' => $client->deleted_at];
        }
        foreach ($employees as $employee) {
            $data[] = ['id' => $employee->id, 'model' => 'Empleado', 'title' => $employee->user->name, 'deleted_at' => $employee->deleted_at];
        }
        foreach ($services as $service) {
            $data[] = ['id' => $service->id, 'model' => 'Servicio', 'title' => $service->name, 'deleted_at' => $service->deleted_at];
        }
        foreach ($packages as $package) {
            $data[] = ['id' => $package->id, 'model' => 'Paquete', 'title' => $package->name, 'deleted_at' => $package->deleted_at];
        }
        foreach ($posts as $post) {
            $data[] = ['id' => $post->id, 'model' => 'Publicación', 'title' => $post->title, 'deleted_at' => $post->deleted_at];
        }
        foreach ($comments as $comment) {
            $data[] = ['id' => $comment->id, 'model' => 'Comentario', 'title' => $comment->content, 'deleted_at' => $comment->deleted_at];
        }
        foreach ($appointments as $appointment) {
            $option = $appointment->service ?? $appointment->package;
            if (!is_null($option)) {
                $data[] = ['id' => $appointment->id, 'model' => 'Cita', 'title' => $appointment->service->name ?? $appointment->package->name, 'deleted_at' => $appointment->deleted_at];
            }
        }

        return view('livewire.deleted-records', [
            'records' => $data,
            'title' => 'Papelera'
        ]);
    }
}
