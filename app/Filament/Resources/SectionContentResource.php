<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionContentResource\Pages;
use App\Models\SectionContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SectionContentResource extends Resource
{
    protected static ?string $model = SectionContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    protected static ?string $navigationLabel = 'Section Contents';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identifikasi Section')
                    ->schema([
                        Forms\Components\TextInput::make('section_key')
                            ->label('Section Key')
                            ->required()
                            ->maxLength(255)
                            ->helperText('e.g., hero_home, features_home')
                            ->placeholder('e.g., hero_home'),
                        Forms\Components\Select::make('content_type')
                            ->options([
                                'text' => 'Text Only',
                                'image' => 'Image Only',
                                'mixed' => 'Mixed (Text + Image)',
                            ])
                            ->default('mixed'),
                        Forms\Components\TextInput::make('css_class')
                            ->label('CSS Class')
                            ->maxLength(255)
                            ->helperText('Add custom CSS classes for styling'),
                    ])->columns(3),

                Forms\Components\Section::make('Translations')
                    ->schema([
                        Forms\Components\Tabs::make('Languages')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('🇬🇧 English')
                                    ->badge('EN')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_en')
                                            ->label('Title')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('subtitle_en')
                                            ->label('Subtitle')
                                            ->maxLength(255),
                                        Forms\Components\Textarea::make('description_en')
                                            ->label('Description')
                                            ->rows(4),
                                        Forms\Components\TextInput::make('button_text_en')
                                            ->label('Button Text')
                                            ->maxLength(100),
                                        Forms\Components\TextInput::make('button_link_en')
                                            ->label('Button Link')
                                            ->url()
                                            ->maxLength(255),
                                    ])->columns(1),

                                Forms\Components\Tabs\Tab::make('🇩🇪 German')
                                    ->badge('DE')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_de')
                                            ->label('Title')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('subtitle_de')
                                            ->label('Subtitle')
                                            ->maxLength(255),
                                        Forms\Components\Textarea::make('description_de')
                                            ->label('Description')
                                            ->rows(4),
                                        Forms\Components\TextInput::make('button_text_de')
                                            ->label('Button Text')
                                            ->maxLength(100),
                                        Forms\Components\TextInput::make('button_link_de')
                                            ->label('Button Link')
                                            ->url()
                                            ->maxLength(255),
                                    ])->columns(1),

                                Forms\Components\Tabs\Tab::make('🇫🇷 French')
                                    ->badge('FR')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_fr')
                                            ->label('Title')
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('subtitle_fr')
                                            ->label('Subtitle')
                                            ->maxLength(255),
                                        Forms\Components\Textarea::make('description_fr')
                                            ->label('Description')
                                            ->rows(4),
                                        Forms\Components\TextInput::make('button_text_fr')
                                            ->label('Button Text')
                                            ->maxLength(100),
                                        Forms\Components\TextInput::make('button_link_fr')
                                            ->label('Button Link')
                                            ->url()
                                            ->maxLength(255),
                                    ])->columns(1),
                            ])->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Media & Design')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('section-contents')
                            ->helperText('Upload section image (optional)'),
                        Forms\Components\TextInput::make('icon')
                            ->label('Icon Class')
                            ->helperText('e.g., heroicon-o-bell (optional)'),
                    ])->columns(2),

                Forms\Components\Section::make('Display Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Visible')
                            ->default(true),
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower number = higher position'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('section_key')
                    ->label('Section')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title (EN)')
                    ->formatStateUsing(fn ($record) => $record?->getTranslation('title', 'en'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('content_type')
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'text' => 'gray',
                        'image' => 'info',
                        'mixed' => 'success',
                    }),
                Tables\Columns\IconColumn::make('is_visible')
                    ->label('Visible')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('section_key'),
                Tables\Filters\SelectFilter::make('content_type'),
                Tables\Filters\TernaryFilter::make('is_visible')
                    ->label('Visible'),
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
            'index' => Pages\ListSectionContents::route('/'),
            'create' => Pages\CreateSectionContent::route('/create'),
            'edit' => Pages\EditSectionContent::route('/{record}/edit'),
        ];
    }
}
