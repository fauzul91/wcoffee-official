<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProductBundle;
use App\Models\ProductVarian;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductBundleResource\Pages;
use App\Filament\Resources\ProductBundleResource\RelationManagers;

class ProductBundleResource extends Resource
{
    protected static ?string $model = ProductBundle::class;
    protected static ?string $navigationGroup = 'Manajemen Produk';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\Textarea::make('description'),
                Forms\Components\FileUpload::make('thumbnail'),
                Repeater::make('productBundleItems')
                    ->relationship('productBundleItems')
                    ->schema([
                        Select::make('product_varian_id')
                            ->label('Product + Grind Size')
                            ->options(function () {
                                return ProductVarian::with('product', 'category') // category = grind size
                                    ->get()
                                    ->mapWithKeys(function ($varian) {
                                        return [
                                            $varian->id => $varian->product->name . ' - ' . $varian->category->name,
                                        ];
                                    });
                            })
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $varian = ProductVarian::find($state);
                                $price = $varian?->price ?? 0;
                                $quantity = $get('quantity') ?? 1;
                                $set('price', $price);
                                $set('subtotal', $price * $quantity);
                            }),                       
                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\TextInput::make('quantity')
                            ->numeric()
                            ->required()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $price = $get('price') ?? 0;
                                $set('subtotal', $price * $state);
                            }),
                        Forms\Components\TextInput::make('subtotal')
                            ->label('Total Harga')
                            ->numeric()
                            ->reactive()
                            ->dehydrated()
                            ->disabled(),
                        Forms\Components\Select::make('promo_id')
                            ->relationship('promo', 'name')
                            ->label('Promo (Optional)'),
                    ])
                    ->label('Produk dalam Bundle')
                    ->columnSpanFull(),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->size(50),                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProductBundles::route('/'),
            'create' => Pages\CreateProductBundle::route('/create'),
            'edit' => Pages\EditProductBundle::route('/{record}/edit'),
        ];
    }
}
