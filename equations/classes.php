<?php

return [
    // level 1
    '1' => [
        'mdm\captcha\equations\AddSub',
        'mdm\captcha\equations\Multiply',
        'mdm\captcha\equations\Division',
    ],
    // level 2
    '2'=>[
        'mdm\captcha\equations\Polynom2',
        'mdm\captcha\equations\Fraction',
    ],
    // level 3
    '3'=>[
        'mdm\captcha\equations\LimitZero',
        'mdm\captcha\equations\LimitInvinity',
        'mdm\captcha\equations\Integrate',
    ],
];