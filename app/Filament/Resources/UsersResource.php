<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(table: User::class, ignoreRecord: true)
                    ->label('Username'),
                    
                Forms\Components\TextInput::make('display_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Display Name'),
                    
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->unique(table: User::class, ignoreRecord: true)
                    ->label('Email Address'),
                    
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->minLength(8)
                    ->dehydrateStateUsing(fn (?string $state): ?string => $state ? Hash::make($state) : null)
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->label(fn (string $operation): string => ($operation === 'edit') ? 'New Password' : 'Password')
                    ->helperText(fn (string $operation): string => $operation === 'edit' 
                        ? 'Leave empty to keep current password' 
                        : ''),
                    
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->label('Bio/Description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('display_name')->label('Display Name')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('E-Mail'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('image_link')->label('Image Link'),
                Tables\Columns\TextColumn::make('twitter')->label('Twitter Link'),
                Tables\Columns\TextColumn::make('facebook')->label('Facebook Link'),
                Tables\Columns\TextColumn::make('linkedin')->label('LinkedIn Link'),
                Tables\Columns\TextColumn::make('instagram')->label('Instagram Link'),
                Tables\Columns\TextColumn::make('tiktok')->label('Tiktok Link'),
                Tables\Columns\TextColumn::make('rank')->label('Rank'),
                Tables\Columns\TextColumn::make('status_points')->label('Status Points'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
