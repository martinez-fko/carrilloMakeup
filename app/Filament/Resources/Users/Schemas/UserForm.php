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
                    ->minLength(8)
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->dehydrated(fn ($state) => filled($state))
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state))
                    ->hint(fn ($operation) =>
                            $operation === 'edit'
                                ? 'Déjalo vacío para mantener la contraseña actual'
                                : null
                    ),
                TextInput::make('password_confirmation')
                    ->password()
                    ->same('password')
                    ->dehydrated(false)
                    ->required(fn ($operation) => $operation === 'create'),
                Toggle::make('active')
                    ->label('Activo')
                    ->default(true)
                    ->inline(false),
                Select::make('role_id')
                    ->label('Rol')
                    ->options(Role::query()->pluck('name', 'id'))
                    ->required(),
            ]);
    }
}
