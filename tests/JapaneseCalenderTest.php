<?php
namespace tests;

require "./vendor/larapack/dd/src/helper.php";

use PHPUnit\Framework\TestCase;
use pnpk\JapaneseCalender\JapaneseCalender;
use Carbon\Exceptions\InvalidFormatException;
use function PHPUnit\Framework\assertEquals;

class JapaneseCalenderTest extends TestCase
{
    /**
     * @test
     */
    public function 令和の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('2020-08-16');
        assertEquals($ret, '令和2年8月16日');
    }

    /**
     * @test
     */
    public function 平成の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('1990-08-16');
        assertEquals($ret, '平成2年8月16日');
    }

    /**
     * @test
     */
    public function 昭和の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('1950-08-16');
        assertEquals($ret, '昭和25年8月16日');
    }

    /**
     * @test
     */
    public function 大正の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('1915-08-16');
        assertEquals($ret, '大正4年8月16日');
    }

    /**
     * @test
     */
    public function 明治の年号が取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('1869-08-16');
        assertEquals($ret, '明治2年8月16日');
    }

    /**
     * @test
     */
    public function 令和1年は令和元年で取得できる()
    {
        $japaneseCalender = new JapaneseCalender();
        $ret = $japaneseCalender->date('2019-08-16');
        assertEquals($ret, '令和元年8月16日');
    }

    /**
     * @test
     */
    public function 明治以前の年号は取得出来ない()
    {
        $this->expectException(\OutOfRangeException::class);

        $japaneseCalender = new JapaneseCalender();
        $japaneseCalender->date('1800-08-16');
    }

    /**
     * @test
     */
    public function 日付に変換出来ない引数を投げると例外()
    {
        $this->expectException(InvalidFormatException::class);

        $japaneseCalender = new JapaneseCalender();
        $japaneseCalender->date('test');
    }
}
