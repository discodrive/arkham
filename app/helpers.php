<?php

namespace App;

function cardMap(): array
{
    return [
        'string' => [
            'name', 
            'real_name',
            'subname', 
            'pack_name', 
            'pack_code', 
            'type_code', 
            'type_name', 
            'faction_code',
            'faction_name',
            'code',
            'traits',
            'real_traits',
            'illustrator',
        ],
        'text' => [
            'text',
            'real_text',
            'back_text',
            'back_flavour',
            'flavor',
        ],
        'boolean' => [
            'exceptional',
            'clues_fixed',
            'health_per_investigator',
            'is_unique',
            'exile',
            'hidden',
            'permanent',
            'double_sided'
        ],
        'integer' => [
            'quantity',
            'skill_willpower',
            'skill_intellect',
            'skill_combat',
            'skill_agility',
            'health',
            'sanity',
            'deck_limit',
            'position'
        ],
    ];
}