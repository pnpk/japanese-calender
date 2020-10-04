# japanese-calender

西暦を和暦に変換します。
明治から令和までの変換をサポートしており、明治以前を取得しようとすると例外になります。

## install

```php
$ composer require pnpk/japanese-calender
```
## usage

```php
$date = new DateTime('2020-08-16');
$japaneseCalender = new JapaneseCalender();
$japaneseCalender->date($date);
```

### return

```php
^ array:5 [
  "date" => "令和2年8月16日"
  "era" => "令和"
  "year" => "2年"
  "month" => "8月"
  "day" => "16日"
]
```
