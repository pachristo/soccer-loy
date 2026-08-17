<?php

require __DIR__ . '/site.php';

$matches = [
    [
        'home' => 'Manchester United',
        'away' => 'Aston Villa',
        'league' => 'chmp',
        'picks' => ['2'],
        'checks' => ['2'],
    ],
    [
        'home' => 'Blackburn',
        'away' => 'Norway',
        'league' => 'epl',
        'picks' => ['1', 'GG'],
        'checks' => ['1', 'GG'],
    ],
    [
        'home' => 'Paris Saint German',
        'away' => 'Monaco',
        'league' => 'bundesliga',
        'picks' => ['X'],
        'checks' => ['X'],
    ],
    [
        'home' => 'Blackburn',
        'away' => 'Norway',
        'league' => 'laliga',
        'picks' => ['+1.5', '+2.5'],
        'checks' => ['+1.5'],
    ],
    [
        'home' => 'Blackburn',
        'away' => 'Norway',
        'league' => 'seriea',
        'picks' => ['X'],
        'checks' => ['X'],
    ],
    [
        'home' => 'FC Barcelona',
        'away' => 'Atletico Madrid',
        'league' => 'ligue1',
        'picks' => ['2', 'GG'],
        'checks' => ['2'],
    ],
];

$fixtureGroups = [
    ['date' => '14 - 08 - 2026', 'matches' => $matches],
    ['date' => '14 - 08 - 2026', 'matches' => $matches],
    ['date' => '14 - 08 - 2026', 'matches' => $matches],
];
