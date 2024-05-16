<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;

class TestPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test-page';

    public ?array $data = [];

    public function form(Form $form): Form
    {
        return $form
            ->statePath('data')
            ->schema([
                Builder::make('builder')
                    ->columnSpanFull()
                    ->collapsible()
                    ->blocks([
                        Builder\Block::make('user')
                            ->columnSpanFull()
                            ->schema([
                                TextInput::make('name'),
                            ])
                    ])
            ]);
    }

    public function save(): void
    {
        dd($this->form->getRawState());
    }
}
