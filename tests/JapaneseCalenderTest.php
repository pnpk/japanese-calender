<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use pnpk\JapaneseCalender\JapaneseCalender;
use Carbon\CarbonImmutable;

use function PHPUnit\Framework\assertFalse;

class JapaneseCalenderTest extends TestCase
{
    /**
     * @test
     */
    public function hoge()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = CarbonImmutable::now()->toDate();
        assertFalse($japaneseCalender->get($date));
    }
}
