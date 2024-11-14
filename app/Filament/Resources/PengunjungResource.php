<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengunjungResource\Pages;
use App\Filament\Resources\PengunjungResource\RelationManagers;
use App\Models\Pengunjung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengunjungResource extends Resource
{
    protected static ?string $model = Pengunjung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('gender')
                ->options([
                    'Cowok' => 'Cowok',
                    'Cewek' => 'Cewek',
                    'Any' => 'Any',
                ])
                ->required(),
                Forms\Components\TextInput::make('tipe_kamar'),
                Forms\Components\TextInput::make('harga'),
                Forms\Components\TextInput::make('pengunjung_id'),
                Forms\Components\Select::make('name_hotel')
                ->relationship('Hotel', 'name_hotel')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('gender')->searchable(),
            Tables\Columns\TextColumn::make('tipe_kamar')->searchable(),
            Tables\Columns\TextColumn::make('harga')->searchable(),
            Tables\Columns\TextColumn::make('pengunjung_id')->searchable(),
            Tables\Columns\TextColumn::make('name_hotel')->searchable()
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
            'index' => Pages\ListPengunjungs::route('/'),
            'create' => Pages\CreatePengunjung::route('/create'),
            'edit' => Pages\EditPengunjung::route('/{record}/edit'),
        ];
    }
}
