<?php

namespace PersianFaker\Fields;

class LastName extends Base
{
	protected static $lastNames = array('فرهادی', 'مرادی', 'سعیدی', 'شاه‌مرادی', 'بلوریان', 'فرهادیان', 'محمدی', 'ناصری', 'ناصریان', 'حسینی', 'حسنی', 'طباطبایی', 'مستوفی', 'حسن‌زاده', 'مشکینی', 'زمانی', 'ظاهری', 'دماوندی', 'شایسته', 'کریمی', 'یغموری', 'سبحانی', 'محمدیان', 'لاجوردی', 'زارعی', 'قریشی', 'زاهدی', 'صالحی', 'رحمتی', 'مردانی', 'زندسلیمی', 'فروغی', 'لشکری', 'شریفی', 'انصاری', 'مهدوی', 'نراقی', 'جاوید', 'تهامی', 'کلهری', 'نسایی', 'قهرمانی', 'بلوری', 'سهرابی', 'جمشیدی');

	public static function generate()
	{
		return static::picker(static::$lastNames);
	}
}