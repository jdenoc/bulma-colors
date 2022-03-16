<?php

namespace Jdenoc\TailwindColors;

use InvalidArgumentException;

class BulmaColors {

    /**
     * @link    https://bulma.io/documentation/customize/variables/#initial-variables
     */
    private static $colors = [
        'COLOR_BLACK' => "#0a0a0a",
        'COLOR_BLACK_BIS' => "#121212",
        'COLOR_BLACK_TER' => "#242424",
        'COLOR_BLUE' => '#485fc7',
        'COLOR_CYAN' => '#3e8ed0',
        'COLOR_GREEN' => '#48c78e',
        'COLOR_GREY' => '#7a7a7a',
        'COLOR_GREY_DARKER' => "#363636",
        'COLOR_GREY_DARK' => "#4A4A4A",
        'COLOR_GREY_LIGHT' => "#B5B5B5",
        'COLOR_GREY_LIGHTER' => "#DBDBDB",
        'COLOR_GREY_LIGHTEST' => "#ededed",
        'COLOR_ORANGE' => '#ff470f',
        'COLOR_PURPLE' => '#b86bff',
        'COLOR_RED' => '#f14668',
        'COLOR_TURQUOISE' => "#00D1B2",
        'COLOR_YELLOW' => '#ffe08a',
        'COLOR_WHITE' => "#FFFFFF",
        'COLOR_WHITE_BIS' => "#FAFAFA",
        'COLOR_WHITE_TER' => "#f5f5f5",
    ];

    public function __construct(){
        // color alias'
        self::$colors['COLOR_DANGER'] = self::$colors['COLOR_RED'];
        self::$colors['COLOR_DARK'] = self::$colors['COLOR_GREY_DARKER'];
        self::$colors['COLOR_INFO'] = self::$colors['COLOR_CYAN'];
        self::$colors['COLOR_LIGHT'] = self::$colors['COLOR_WHITE_TER'];
        self::$colors['COLOR_LINK'] = self::$colors['COLOR_BLUE'];
        self::$colors['COLOR_PRIMARY'] = self::$colors['COLOR_TURQUOISE'];
        self::$colors['COLOR_SUCCESS'] = self::$colors['COLOR_GREEN'];
        self::$colors['COLOR_WARNING'] = self::$colors['COLOR_YELLOW'];
    }

    public function getColor(string $colorName):string{
        $colorName = strtoupper($colorName);
        $permitted_colors = $this->getColorNames();

        if(!in_array($colorName, $permitted_colors)){
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid colorName [%s] provided. Valid colorName values: %s",
                    $colorName,
                    implode(',', $permitted_colors)
                )
            );
        }

        return self::$colors[$colorName];
    }

    public function getColorNames():array{
        return array_keys(self::$colors);
    }

}