<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsitesResource\Pages;
use App\Filament\Resources\WebsitesResource\RelationManagers;
use App\Models\Website;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsitesResource extends Resource
{
    protected static ?string $model = Website::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->visibleOn('edit')
                    ->unique(ignoreRecord: true)
                    ->label('Website Name')
                    ->placeholder('Enter website name'),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->visibleOn('edit')
                    ->label('Website Description'),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255)
                    ->visibleOn('edit')
                    ->label('Link to Website'),
                Forms\Components\TextInput::make('image_link')
                    ->required()
                    ->maxLength(255)
                    ->visibleOn('edit')
                    ->label('Link to Web Preview Asset'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('link')->label('Link to Website')->searchable(),
                Tables\Columns\TextColumn::make('image_link')->label('Preview Asset Link'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListWebsites::route('/'),
            // 'create' => Pages\CreateWebsites::route('/create'),
            'edit' => Pages\EditWebsites::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    } 
}
