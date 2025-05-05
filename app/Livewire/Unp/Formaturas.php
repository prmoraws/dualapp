<?php

namespace App\Livewire\Unp;

use App\Models\Unp\Formatura;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Formaturas extends Component
{
    use WithPagination;

    public $curso, $unidade, $data, $hora, $checklist, $formatura_id;
    public $isOpen = false;
    public $isViewOpen = false;
    public $confirmDeleteId = null;
    public $searchTerm = '';
    public $sortField = 'data';
    public $sortDirection = 'desc';
    public $selectedFormatura;
    public $errorMessage = '';

    public function render()
    {
        $query = Formatura::query();

        if ($this->searchTerm !== '') {
            $query->where('curso', 'like', '%' . $this->searchTerm . '%');
        }

        if ($this->sortField) {
            $query->orderBy($this->sortField, $this->sortDirection);
        }

        $results = $query->paginate(20);

        return view('livewire.unp.formaturas', [
            'results' => $results,
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            if ($this->sortDirection === 'asc') {
                $this->sortDirection = 'desc';
            } elseif ($this->sortDirection === 'desc') {
                $this->sortField = 'data';
                $this->sortDirection = 'desc';
            }
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();
    }

    public function search()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetInputFields();
        $this->errorMessage = '';
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->resetInputFields();
        $this->errorMessage = '';
    }

    private function resetInputFields()
    {
        $this->curso = '';
        $this->unidade = '';
        $this->data = '';
        $this->hora = '';
        $this->checklist = '';
        $this->formatura_id = '';
    }

    public function store()
    {
        try {
            $this->validate([
                'curso' => 'required|string|max:255',
                'unidade' => 'required|string|max:255',
                'data' => 'required|date',
                'hora' => 'required|string|max:255',
                'checklist' => 'nullable|string',
            ]);

            Formatura::updateOrCreate(
                ['id' => $this->formatura_id],
                [
                    'curso' => $this->curso,
                    'unidade' => $this->unidade,
                    'data' => $this->data,
                    'hora' => $this->hora,
                    'checklist' => $this->checklist,
                ]
            );

            session()->flash('message', $this->formatura_id ? 'Formatura atualizada com sucesso!' : 'Formatura criada com sucesso!');
            $this->closeModal();
            $this->search();
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->all();
            $this->errorMessage = implode(' ', $errors);
        } catch (\Exception $e) {
            $this->errorMessage = 'Erro inesperado: ' . $e->getMessage();
        }
    }

    public function view($id)
    {
        try {
            $this->selectedFormatura = Formatura::findOrFail($id);
            $this->isViewOpen = true;
        } catch (\Exception $e) {
            session()->flash('error', 'Não foi possível carregar os dados da formatura: ' . $e->getMessage());
        }
    }

    public function closeViewModal()
    {
        $this->isViewOpen = false;
        $this->selectedFormatura = null;
    }

    public function edit($id)
    {
        try {
            $formatura = Formatura::findOrFail($id);
            $this->formatura_id = $id;
            $this->curso = $formatura->curso;
            $this->unidade = $formatura->unidade;
            $this->data = $formatura->data ? \Carbon\Carbon::parse($formatura->data)->toDateString() : '';
            $this->hora = $formatura->hora;
            $this->checklist = $formatura->checklist;

            $this->errorMessage = '';
            $this->openModal();
        } catch (\Exception $e) {
            session()->flash('error', 'Não foi possível carregar a formatura para edição: ' . $e->getMessage());
        }
    }

    public function confirmDelete($id)
    {
        Log::info("Confirmando exclusão da formatura ID: {$id}");
        $this->confirmDeleteId = $id;
    }

    public function delete()
    {
        if ($this->confirmDeleteId) {
            $formatura = Formatura::find($this->confirmDeleteId);
            if ($formatura) {
                $formatura->delete();
                session()->flash('message', 'Formatura deletada com sucesso!');
                Log::info("Formatura deletada com sucesso", ['id' => $this->confirmDeleteId]);
            } else {
                session()->flash('error', 'Formatura não encontrada.');
                Log::error("Formatura não encontrada para exclusão", ['id' => $this->confirmDeleteId]);
            }
            $this->confirmDeleteId = null;
            $this->search();
        }
    }
}
