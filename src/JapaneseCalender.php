<?php
namespace pnpk\JapaneseCalender;

use Carbon\CarbonImmutable;
use DateTime;

class JapaneseCalender
{
    const WAREKI = [
        [
            'name' => '令和',
            'start_at' => '2019-05-01',
            'end_at' => null,
        ],
        [
            'name' => '平成',
            'start_at' => '1989-01-08',
            'end_at' => '2019-04-30',
        ],
        [
            'name' => '昭和',
            'start_at' => '1926-12-25',
            'end_at' => '1989-01-07',
        ],
        [
            'name' => '大正',
            'start_at' => '1912-07-30',
            'end_at' => '1926-12-24',
        ],
        [
            'name' => '明治',
            'start_at' => '1868-09-08',
            'end_at' => '1912-07-29',
        ]
    ];

    public function getByDate(DateTime $date)
    {
        CarbonImmutable::parse($date);

        foreach (self::WAREKI as $era) {
            var_dump(CarbonImmutable::parse($date));
        }
        // return false;
    }
}
