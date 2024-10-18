<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('avatar')
                    ->required()
                    ->image(),
                Forms\Components\TextInput::make('forenames')
                    ->required(),
                Forms\Components\TextInput::make('surname')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Full name'),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->visibleOn(Pages\CreateUser::class),
                Forms\Components\Repeater::make('socials')
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->required(),
                        Forms\Components\TextInput::make('link')
                            ->required(),
                        Forms\Components\TextInput::make('fa-icon')
                            ->required(),
                    ])
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\ImageColumn::make('avatar')
                    ->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('changePassword')
                    ->form([
                        TextInput::make('new_password')
                            ->password()
                            ->label('New password')
                            ->required()
                            ->rule(Password::default()),
                        TextInput::make('new_password_confirmation')
                            ->password()
                            ->label('Confirm new password')
                            ->required()
                            ->same('new_password')
                            ->rule(Password::default())
                    ])
                    ->action(function (User $record, array $data) {
                        $record->update([
                            'password' => Hash::make($data['new_password'])
                        ]);
                    })
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
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
