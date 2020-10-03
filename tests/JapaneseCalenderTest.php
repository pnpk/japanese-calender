<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use pnpk\JapaneseCalender\JapaneseCalender;

use function PHPUnit\Framework\assertFalse;

class JapaneseCalenderTest extends TestCase
{
    /**
     * @test
     */
    public function hoge()
    {
        $dateTimeZoneJapan = new \DateTimeZone("Asia/Tokyo");

        $japaneseCalender = new JapaneseCalender();
        // $date = new \DateTime('1979/03/12', $dateTimeZoneJapan);
        $date = new \DateTime('2019/5/1', $dateTimeZoneJapan);
        // $date = new \DateTime('2019/5/1', $dateTimeZoneJapan);

        var_dump($japaneseCalender->get($date));
        // assertFalse();
    }
}
