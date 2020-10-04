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
        ],
        [
            'name' => '平成',
            'start_at' => '1989-01-08',
        ],
        [
            'name' => '昭和',
            'start_at' => '1926-12-25',
        ],
        [
            'name' => '大正',
            'start_at' => '1912-07-30',
        ],
        [
            'name' => '明治',
            'start_at' => '1868-09-08',
        ]
    ];

    public function date(DateTime $dateTime): array
    {
        $targetAt = CarbonImmutable::parse($dateTime);

        foreach (self::ERAS as $era) {
            $startAt = CarbonImmutable::parse($era['start_at']);

            if ($targetAt->greaterThanOrEqualTo($startAt)) {
                $era = $era['name'];
                $year = $targetAt->year - $startAt->year + 1 === 1 ? '元年' : ($targetAt->year - $startAt->year + 1) . '年';
                $month = $targetAt->month . '月';
                $day = $targetAt->day . '日';

                return [
                    'date' => $era . $year . $month . $day,
                    'era' => $era,
                    'year' => $year,
                    'month' => $month,
                    'day' => $day,
                ];
            }
        }
        throw new \OutOfRangeException('明治以前は取得出来ません。');
    }
}
