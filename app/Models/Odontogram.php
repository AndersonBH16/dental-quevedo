<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontogram extends Model
{
    const TYPE_INITIAL      = 10;
    const TYPE_EVOLUTION    = 20;

    const AGE_CHILD    = 'child';
    const AGE_ADULT    = 'adult';

    const TOOTH_MOLAR       = 100;
    const TOOTH_PREMOLAR    = 200;
    const TOOTH_CANINE      = 300;
    const TOOTH_INCISIVE    = 400;

    const POSITION_TOOTH_UP     = 'up';
    const POSITION_TOOTH_DOWN   = 'down';

    protected $guarded = [];

    protected $casts = [
        'payload' => 'array',
    ];

    use HasFactory;

    public static function generatePayload()
    {
        return [
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 18, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 17, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 16, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_UP, 'number' => 15, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_CANINE,      'position' => self::POSITION_TOOTH_UP, 'number' => 14, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 13, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 12, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 11, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 21, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 22, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 23, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_CANINE,      'position' => self::POSITION_TOOTH_UP, 'number' => 24, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_UP, 'number' => 25, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 26, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 27, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 28, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 48, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 47, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 46, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 45, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 44, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 43, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 42, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 41, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 31, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 32, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 33, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 34, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 35, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 36, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 37, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 38, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 55, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 54, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 53, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 52, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 51, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 61, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 62, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 63, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 64, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 65, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 85, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 84, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 83, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 82, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 81, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 71, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 72, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 73, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 74, 'findingType' => '-', 'draw' => null, 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 75, 'findingType' => '-', 'draw' => null, 'url' => null],
        ];
    }

    public function routeTooth($tooth)
    {
        if (!$tooth['draw']) return null;
        return "odontograms/$this->id/" . $tooth['number'] . ".png";
    }
}
