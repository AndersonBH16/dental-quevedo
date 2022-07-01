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
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 18, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 17, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 16, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_UP, 'number' => 15, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_CANINE,      'position' => self::POSITION_TOOTH_UP, 'number' => 14, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 13, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 12, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 11, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 21, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 22, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 23, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_CANINE,      'position' => self::POSITION_TOOTH_UP, 'number' => 24, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_UP, 'number' => 25, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 26, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 27, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 28, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 48, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 47, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 46, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 45, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 44, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 43, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 42, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 41, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 31, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 32, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 33, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 34, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_PREMOLAR,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 35, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 36, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 37, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_ADULT, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 38, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 55, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 54, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 53, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 52, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 51, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 61, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 62, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_UP, 'number' => 63, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 64, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_UP, 'number' => 65, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 85, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 84, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 83, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 82, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 81, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 71, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 72, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_INCISIVE,    'position' => self::POSITION_TOOTH_DOWN, 'number' => 73, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 74, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
            ['age' => self::AGE_CHILD, 'type' => self::TOOTH_MOLAR,       'position' => self::POSITION_TOOTH_DOWN, 'number' => 75, 'findingTypes' => [], 'findingText' => null, 'canvasPaths' => [[]], 'url' => null],
        ];
    }

    public function routeTooth($tooth)
    {
        if (empty($tooth['canvasPaths'])) return null;
        return "odontograms/$this->id/" . $tooth['number'] . ".png";
    }
}
