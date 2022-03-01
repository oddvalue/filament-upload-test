<?php

namespace App\Http\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms;

class TestForm extends Component implements HasForms
{
    use InteractsWithForms;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('file')
                ->required(),
        ];
    }

    public function render()
    {
        return view('livewire.test-form');
    }
}
