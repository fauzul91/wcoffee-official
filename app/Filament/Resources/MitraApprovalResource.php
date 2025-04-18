<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MitraApproval;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MitraApprovalResource\Pages;
use App\Filament\Resources\MitraApprovalResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;
use Joaopaulolndev\FilamentPdfViewer\Infolists\Components\PdfViewerEntry;

class MitraApprovalResource extends Resource
{
    protected static ?string $model = MitraApproval::class;
    protected static ?string $navigationLabel = "Konfirmasi Kerjasama";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Mitra';    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([                
                TextInput::make('nama_pemilik')
                    ->label('Nama Pemilik')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('nib')
                    ->label('NIB')
                    ->required(),
                FileUpload::make('siup')
                    ->label('SIUP')
                    ->required(),
                TextInput::make('link_gmaps')
                    ->label('Link Google Maps')
                    ->required(),
                TextInput::make('deskripsi_mitra')
                    ->label('Deskripsi Mitra')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pemilik')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('nib')
                    ->circular(),
                ImageColumn::make('siup')
                    ->circular(),
                Tables\Columns\TextColumn::make('link_gmaps')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi_mitra')
                    ->sortable()
                    ->searchable(),                
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Approve')
                    ->label('Approve')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->action(fn (MitraApproval $record) => $record->update(['status' => 'approved']))
                    ->after(function () {
                        Notification::make()
                            ->title('Status updated successfully!')
                            ->success()
                            ->send();
                    }),

                Action::make('Reject')
                    ->label('Reject')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->requiresConfirmation()
                    ->action(fn (MitraApproval $record) => $record->update(['status' => 'rejected'])),
                Tables\Actions\ViewAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMitraApprovals::route('/'),
            'create' => Pages\CreateMitraApproval::route('/create'),
            'edit' => Pages\EditMitraApproval::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('status', 'pending');
    }
}
