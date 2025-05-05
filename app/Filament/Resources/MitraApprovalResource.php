<?php

namespace App\Filament\Resources;

use ZipArchive;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MitraApproval;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MitraApprovalResource\Pages;
use App\Filament\Resources\MitraApprovalResource\RelationManagers;
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
                    ->disk('public') // Disk storage, pastikan sudah dikonfigurasi di filesystems.php
                    ->directory('nib')
                    ->acceptedFileTypes(['application/pdf']) // Batas hanya file PDF
                    ->maxSize(2048) // (opsional) batas ukuran dalam KB, ini contoh 2MB
                    ->preserveFilenames()// <-- ini dia!
                    ->required(),
                FileUpload::make('siup')
                    ->label('SIUP')
                    ->required()
                    ->directory('siup')
                    ->acceptedFileTypes(['application/pdf']) // Batas hanya file PDF
                    ->maxSize(2048) 
                    ->preserveFilenames()
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
                TextColumn::make('mitra.name')
                    ->label('Nama Mitra')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pemilik')
                    ->sortable()
                    ->searchable(), 
                Tables\Columns\TextColumn::make('link_gmaps')
                    ->sortable()
                    ->url('https://www.google.com/maps/search/?api=1&query={link_gmaps}', true)
                    ->searchable(),                              
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Accept')
                    ->label('Accept')
                    ->color('success')
                    ->icon('heroicon-o-check-circle')
                    ->requiresConfirmation()
                    ->action(fn (MitraApproval $record) => $record->update(['status' => 'approved']))
                    ->after(function () {
                        Notification::make()
                            ->title('Status kerjasama berhasil diubah!')
                            ->success()
                            ->send();
                    }),

                Action::make('Reject')
                    ->label('Reject')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->requiresConfirmation()
                    ->action(fn (MitraApproval $record) => $record->update(['status' => 'rejected']))
                    ->after(function () {
                        Notification::make()
                            ->title('Status kerjasama berhasil diubah!')
                            ->success()
                            ->send();
                    }),

                Action::make('download_zip')
                    ->label('Download Semua')
                    ->icon('heroicon-o-archive-box-arrow-down')
                    ->action(function (MitraApproval $record) {
                        $record->loadMissing('mitra');

                        $namaMitra = str_replace(' ', '_', $record->mitra->name);
                        $zipFileName = 'berkas-' . $record->id . '.zip';
                        $zipPath = storage_path('app/public/' . $zipFileName);

                        $zip = new ZipArchive;

                        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
                            $zip->addFile(storage_path('app/public/' . $record->nib), "{$namaMitra}_NIB.pdf");
                            $zip->addFile(storage_path('app/public/' . $record->siup), "{$namaMitra}_SIUP.pdf");
                            $zip->close();
                        }
                        return response()->download($zipPath)->deleteFileAfterSend(true);
                    })
                    ->color('primary')
                    ->visible(fn (MitraApproval $record) => $record->nib && $record->siup),
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
