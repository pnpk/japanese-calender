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
        $japaneseCalender = new JapaneseCalender();
        $date = new \DateTime();
        
        assertFalse($japaneseCalender->getByDate($date));
    }
}
