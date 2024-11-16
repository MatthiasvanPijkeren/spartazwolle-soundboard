<?php

namespace App\Blueprints\Globals;

use Tdwesten\StatamicBuilder\Blueprint;
use Tdwesten\StatamicBuilder\FieldTypes\Assets;
use Tdwesten\StatamicBuilder\FieldTypes\Icon;
use Tdwesten\StatamicBuilder\FieldTypes\Link;
use Tdwesten\StatamicBuilder\FieldTypes\Section;
use Tdwesten\StatamicBuilder\FieldTypes\Tab;
use Tdwesten\StatamicBuilder\FieldTypes\Text;

class HeaderBlueprint extends Blueprint
{
    /**
     * The blueprint title.
     *
     * @var string
     */
    public $title = 'Header';

    /**
     * The blueprint handle.
     *
     * @var string
     */
    public $handle = 'header';

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
                Section::make('Header', [
                    Assets::make('logo')
                        ->maxFiles(1)
                        ->required()
                        ->container('assets')
                        ->folder('hks'),
                    Link::make('control_panel')
                        ->displayName('Link naar CMS')
                        ->required()
                        ->width(50),
                    Icon::make('icon')
                        ->required()
                        ->width(50),
                ]),
            ]),
        ];
    }
}
