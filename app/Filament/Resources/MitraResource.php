<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Mitra;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MitraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MitraResource\RelationManagers;
use Filament\Tables\Columns\IconColumn;

class MitraResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Mitra';
    protected static ?string $navigationLabel = 'Mitra Aktif';
    protected static ?string $label = 'mitra';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nama Mitra')
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->label('Email Mitra')
                    ->email()
                    ->maxLength(255),
                TextInput::make('password')
                    ->required()
                    ->label('Password')
                    ->password()
                    ->minLength(8)
                    ->dehydrated(fn ($state) => ! blank($state))
                    ->maxLength(255)
                    ->confirmed(),
                TextInput::make('password_confirmation')
                    ->required()
                    ->label('Konfirmasi Password')
                    ->password()
                    ->dehydrated(fn ($state) => ! blank($state))
                    ->maxLength(255)
                    ->same('password'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nama Mitra')
                ->searchable()
                ->sortable(),

                TextColumn::make('email')
                    ->label('Email Mitra')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('roles.name')
                    ->label('Role')
                    ->badge()
                    ->color('success'),
                ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereHas('roles', function ($query) {
                $query->where('name', 'mitra');
            })
            ->whereHas('mitraApproval', function ($query) {
                $query->where('status', 'approved');
            });
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMitras::route('/'),
            'create' => Pages\CreateMitra::route('/create'),
            'edit' => Pages\EditMitra::route('/{record}/edit'),
        ];
    }
}
