<?php

namespace App\Filament\Resources\SectionContentResource\Pages;

use App\Filament\Resources\SectionContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSectionContent extends EditRecord
{
    protected static string $resource = SectionContentResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert JSON translations to individual language fields
        $data['title_en'] = $data['title']['en'] ?? '';
        $data['title_de'] = $data['title']['de'] ?? '';
        $data['title_fr'] = $data['title']['fr'] ?? '';

        $data['subtitle_en'] = $data['subtitle']['en'] ?? '';
        $data['subtitle_de'] = $data['subtitle']['de'] ?? '';
        $data['subtitle_fr'] = $data['subtitle']['fr'] ?? '';

        $data['description_en'] = $data['description']['en'] ?? '';
        $data['description_de'] = $data['description']['de'] ?? '';
        $data['description_fr'] = $data['description']['fr'] ?? '';

        $data['button_text_en'] = $data['button_text']['en'] ?? '';
        $data['button_text_de'] = $data['button_text']['de'] ?? '';
        $data['button_text_fr'] = $data['button_text']['fr'] ?? '';

        $data['button_link_en'] = $data['button_link']['en'] ?? '';
        $data['button_link_de'] = $data['button_link']['de'] ?? '';
        $data['button_link_fr'] = $data['button_link']['fr'] ?? '';

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Convert individual language fields back to JSON structure
        $data['title'] = [
            'en' => $data['title_en'] ?? '',
            'de' => $data['title_de'] ?? '',
            'fr' => $data['title_fr'] ?? '',
        ];

        $data['subtitle'] = [
            'en' => $data['subtitle_en'] ?? '',
            'de' => $data['subtitle_de'] ?? '',
            'fr' => $data['subtitle_fr'] ?? '',
        ];

        $data['description'] = [
            'en' => $data['description_en'] ?? '',
            'de' => $data['description_de'] ?? '',
            'fr' => $data['description_fr'] ?? '',
        ];

        $data['button_text'] = [
            'en' => $data['button_text_en'] ?? '',
            'de' => $data['button_text_de'] ?? '',
            'fr' => $data['button_text_fr'] ?? '',
        ];

        $data['button_link'] = [
            'en' => $data['button_link_en'] ?? '',
            'de' => $data['button_link_de'] ?? '',
            'fr' => $data['button_link_fr'] ?? '',
        ];

        // Remove individual language fields
        unset(
            $data['title_en'], $data['title_de'], $data['title_fr'],
            $data['subtitle_en'], $data['subtitle_de'], $data['subtitle_fr'],
            $data['description_en'], $data['description_de'], $data['description_fr'],
            $data['button_text_en'], $data['button_text_de'], $data['button_text_fr'],
            $data['button_link_en'], $data['button_link_de'], $data['button_link_fr']
        );

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
