<?php

namespace PersianFaker\Fields;

class City extends Base
{
	protected static $cities = array('تهران', 'مشهد', 'اصفهان', 'کرج', 'شیراز', 'تبریز', 'قم', 'اهواز', 'کرمانشاه', 'ارومیه', 'رشت', 'زاهدان', 'یزد', 'کرمان', 'اراک', 'اسلام‌شهر', 'بندرعباس', 'سنندج', 'زنجان', 'قزوین', 'خرم‌آباد', 'گرگان', 'ساری', 'شهریار', 'قدس', 'کاشان', 'ملارد', 'بابل', 'سبزوار', 'گلستان', 'آمل', 'پاکدشت', 'آبادان', 'قرچک', 'بوشهر', 'ورامین', 'ساوه', 'قائم‌شهر', 'خوی', 'ایلام', 'سقز', 'شاهرود', 'مهاباد', 'رفسنجان');

	public static function generate()
	{
		return static::picker(static::$cities);
	}
}