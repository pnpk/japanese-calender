<?php
namespace tests;

require "./vendor/larapack/dd/src/helper.php";

use PHPUnit\Framework\TestCase;
use pnpk\JapaneseCalender\JapaneseCalender;
use function PHPUnit\Framework\assertEquals;
use DateTime;

class JapaneseCalenderTest extends TestCase
{
    /**
     * @test
     */
    public function 令和の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('2020-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '令和2年8月16日');
    }

    /**
     * @test
     */
    public function 平成の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('1990-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '平成2年8月16日');
    }

    /**
     * @test
     */
    public function 昭和の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('1950-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '昭和25年8月16日');
    }

    /**
     * @test
     */
    public function 大正の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('1915-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '大正4年8月16日');
    }

    /**
     * @test
     */
    public function 明治の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('1869-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '明治2年8月16日');
    }

    /**
     * @test
     */
    public function 令和1年は令和元年で取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $date = new DateTime('2019-08-16');
        $ret = $japaneseCalender->date($date);
        assertEquals($ret['date'], '令和元年8月16日');
    }

    /**
     * @test
     */
    public function 明治以前の年号は取得出来ない()
    {
        $this->expectException(\OutOfRangeException::class);

        $japaneseCalender = new JapaneseCalender();

        $date = new DateTime('1800-08-16');
        $ret = $japaneseCalender->date($date);
    }
}
