<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'heroicon-o-language';

    protected static ?string $navigationLabel = 'Translations';
    
    protected static ?string $modelLabel = 'Translation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Translation Details')
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->label('Translation Key')
                            ->required()
                            ->maxLength(255)
                            ->helperText('e.g., site.title, footer.copyright')
                            ->placeholder('e.g., site.title'),
                        Forms\Components\Select::make('language')
                            ->options([
                                'en' => 'English',
                                'de' => 'German',
                                'fr' => 'French',
                            ])
                            ->required()
                            ->default('en'),
                        Forms\Components\TextInput::make('section')
                            ->label('Section (Optional)')
                            ->maxLength(255)
                            ->helperText('Group by section (e.g., footer, header)'),
                        Forms\Components\Select::make('type')
                            ->options([
                                'text' => 'Plain Text',
                                'html' => 'HTML Content',
                                'json' => 'JSON Data',
                            ])
                            ->default('text'),
                    ])->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('value')
                            ->label('Translation Value')
                            ->required()
                            ->rows(6)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('language')
                    ->label('Language')
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'en' => 'info',
                        'de' => 'warning',
                        'fr' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('section')
                    ->label('Section')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'text' => 'primary',
                        'html' => 'info',
                        'json' => 'warning',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('value')
                    ->label('Value')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('language')
                    ->options([
                        'en' => 'English',
                        'de' => 'German',
                        'fr' => 'French',
                    ]),
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'text' => 'Plain Text',
                        'html' => 'HTML Content',
                        'json' => 'JSON Data',
                    ]),
                Tables\Filters\SelectFilter::make('section'),
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
