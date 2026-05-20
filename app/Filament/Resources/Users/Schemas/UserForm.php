<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Role;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre Completo')
                    ->required(),
                TextInput::make('username')
                    ->label('Usuario')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->label('Contraseña')
                    ->password()
                    ->required(),
                Toggle::make('active')
                    ->label('Activo'),
                Select::make('role_id')
                    ->label('Rol')
                    ->options(Role::query()->pluck('name', 'id'))
                    ->required(),
            ]);
    }
}
