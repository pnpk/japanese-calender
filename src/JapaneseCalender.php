<?php
namespace pnpk\JapaneseCalender;

use Carbon\CarbonImmutable;
use DateTime;

class JapaneseCalender
{
    const ERAS = [
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

    public function get(DateTime $dateTime)
    {
        $date = $dateTime->format('Y-m-d');
        // var_dump($date);
        foreach (self::ERAS as $era) {
            $diff = date_diff(date_create($era['start_at']), date_create($date));
            if ($diff->invert === 0) {
                var_dump(date_create($era['start_at']));
                var_dump(date_create($date));
                var_dump($diff);
                return $era;
            }
        }
        // return false;
    }
}
