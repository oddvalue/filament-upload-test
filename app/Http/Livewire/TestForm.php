<?php

namespace App\Http\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms;

class TestForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $file;
    public $checkbox;

    public function mount()
    {
        $this->form->fill([
            'file' => ['2.png'],
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('file')
                ->required()->multiple(),
            Forms\Components\Checkbox::make('checkbox'),
        ];
    }

    public function render()
    {
        return view('livewire.test-form');
    }
}
