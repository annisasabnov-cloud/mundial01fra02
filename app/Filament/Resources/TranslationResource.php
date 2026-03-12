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

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 1;

    public static function getLanguageOptions(): array
    {
        return [
            'id' => '🇮🇩 Indonesian',
            'fr' => '🇫🇷 French',
            'en' => '🇬🇧 English',
            'de' => '🇩🇪 German',
        ];
    }

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
                            ->helperText('e.g., preise.pool_table, nav.offers, footer.copyright')
                            ->placeholder('e.g., page.home.heading')
                            ->copyable(),
                        Forms\Components\Select::make('language')
                            ->label('Language')
                            ->options(self::getLanguageOptions())
                            ->required()
                            ->default('id'),
                        Forms\Components\TextInput::make('section')
                            ->label('Section (Optional)')
                            ->maxLength(255)
                            ->helperText('Group by section (e.g., pages.preise, navigation, footer)')
                            ->placeholder('e.g., pages.home'),
                        Forms\Components\Select::make('type')
                            ->label('Content Type')
                            ->options([
                                'text' => 'Plain Text',
                                'html' => 'HTML Content',
                                'json' => 'JSON Data',
                            ])
                            ->default('text')
                            ->reactive(),
                    ])->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('value')
                            ->label('Translation Value')
                            ->required()
                            ->rows(8)
                            ->columnSpanFull()
                            ->helperText('For HTML type: you can use full HTML tags. For plain text: just write the text.'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        $langOptions = self::getLanguageOptions();

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->fontFamily('mono')
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('language')
                    ->label('Language')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'id' => '🇮🇩 ID',
                        'fr' => '🇫🇷 FR',
                        'en' => '🇬🇧 EN',
                        'de' => '🇩🇪 DE',
                        default => strtoupper($state),
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'id' => 'danger',
                        'fr' => 'info',
                        'en' => 'success',
                        'de' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('section')
                    ->label('Section')
                    ->searchable()
                    ->sortable()
                    ->placeholder('—'),

                Tables\Columns\TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'text' => 'primary',
                        'html' => 'info',
                        'json' => 'warning',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('value')
                    ->label('Value')
                    ->limit(60)
                    ->searchable()
                    ->wrap(),
            ])
            ->defaultSort('key', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('language')
                    ->label('Language')
                    ->options(self::getLanguageOptions()),
                Tables\Filters\SelectFilter::make('type')
                    ->label('Type')
                    ->options([
                        'text' => 'Plain Text',
                        'html' => 'HTML Content',
                        'json' => 'JSON Data',
                    ]),
                Tables\Filters\SelectFilter::make('section')
                    ->label('Section')
                    ->options(fn () => Translation::distinct()->pluck('section', 'section')->filter()->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('duplicate')
                    ->label('Duplicate')
                    ->icon('heroicon-o-document-duplicate')
                    ->color('gray')
                    ->form([
                        Forms\Components\Select::make('target_language')
                            ->label('Duplicate to Language')
                            ->options(self::getLanguageOptions())
                            ->required(),
                    ])
                    ->action(function (Translation $record, array $data): void {
                        Translation::updateOrCreate(
                            ['key' => $record->key, 'language' => $data['target_language']],
                            [
                                'section' => $record->section,
                                'value'   => $record->value,
                                'type'    => $record->type,
                            ]
                        );
                    })
                    ->successNotificationTitle('Translation duplicated'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit'   => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
