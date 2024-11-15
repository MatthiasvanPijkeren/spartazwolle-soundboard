<?php

namespace App\Blueprints\Sounds;

use Tdwesten\StatamicBuilder\Blueprint;
use Tdwesten\StatamicBuilder\FieldTypes\Assets;
use Tdwesten\StatamicBuilder\FieldTypes\Section;
use Tdwesten\StatamicBuilder\FieldTypes\Tab;
use Tdwesten\StatamicBuilder\FieldTypes\Text;

class SoundBlueprint extends Blueprint
{
    /**
     * The blueprint title.
     *
     * @var string
     */
    public $title = 'Sound';

    /**
     * The blueprint handle.
     *
     * @var string
     */
    public $handle = 'sound';

    /**
     * Hide the blueprint from the blueprint dropdown.
     *
     * @var bool
     */
    public $hidden = false;

    public function registerTabs(): array
    {
        return [
            Tab::make('General', [
                Section::make('General', [
                    Text::make('title')
                        ->displayName('Title')
                        ->required(),
                ]),
                Section::make('Sound', [
                    Assets::make('sound')
                        ->displayName('Sound')
                        ->maxFiles(1)
                        ->container('sounds')
                        ->required(),
                ]),
            ]),
        ];
    }
}
