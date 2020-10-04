# japanese-calender

西暦を和暦に変換します。
明治から令和までの変換をサポートしており、明治以前を取得しようとすると例外になります。

## install

```php
$ composer require pnpk/japanese-calender
```
## usage

```php
$japaneseCalender = new JapaneseCalender();
$ret = $japaneseCalender->get('1990-08-16');

// ..^ array:4 [
//   "date" => "令和2年8月16日"
//   "year" => "令和2年"
//   "month" => "8月"
//   "day" => "16日"
// ]
```
