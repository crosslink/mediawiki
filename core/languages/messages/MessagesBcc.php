<?php
/** Southern Balochi (بلوچی مکرانی)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'fa';

$rtl = true;

$namespaceNames = array(
	NS_MEDIA            => 'مدیا',
	NS_SPECIAL          => 'حاص',
	NS_TALK             => 'گپ',
	NS_USER             => 'کاربر',
	NS_USER_TALK        => 'گپ_کاربر',
	NS_PROJECT_TALK     => 'گپ_$1',
	NS_FILE             => 'عکس',
	NS_FILE_TALK        => 'گپ_عکس',
	NS_MEDIAWIKI        => 'مدیاویکی',
	NS_MEDIAWIKI_TALK   => 'گپ_مدیاویکی',
	NS_TEMPLATE         => 'تمپلت',
	NS_TEMPLATE_TALK    => 'گپ_تمپلت',
	NS_HELP             => 'کمک',
	NS_HELP_TALK        => 'گپ_راهنما',
	NS_CATEGORY         => 'دسته',
	NS_CATEGORY_TALK    => 'گپ_دسته',
);

$namespaceAliases = array(
	'مدیا' => NS_MEDIA,
	'ویژه' => NS_SPECIAL,
	'بحث' => NS_TALK,
	'کاربر' => NS_USER,
	'بحث_کاربر' => NS_USER_TALK,
	'بحث_$1' => NS_PROJECT_TALK,
	'تصویر' => NS_FILE,
	'بحث_تصویر' => NS_FILE_TALK,
	'مدیاویکی' => NS_MEDIAWIKI,
	'بحث_مدیاویکی' => NS_MEDIAWIKI_TALK,
	'الگو' => NS_TEMPLATE,
	'بحث_الگو' => NS_TEMPLATE_TALK,
	'راهنما' => NS_HELP,
	'بحث_راهنما' => NS_HELP_TALK,
	'رده' => NS_CATEGORY,
	'بحث_رده' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'کل کوله یان' ),
	'Allpages'                  => array( 'کل صفحات' ),
	'Ancientpages'              => array( 'صفحات قدیمی' ),
	'Blankpage'                 => array( 'صفحه هالیک' ),
	'Block'                     => array( 'محدود آی پی' ),
	'Booksources'               => array( 'منابع کتاب' ),
	'BrokenRedirects'           => array( 'پرشتگین غیرمستقیم' ),
	'Categories'                => array( 'دستجات' ),
	'ChangePassword'            => array( 'تریتگ رمز' ),
	'Confirmemail'              => array( 'تایید ایمیل' ),
	'Contributions'             => array( 'مشارکتان' ),
	'CreateAccount'             => array( 'شرکتن حساب' ),
	'Deadendpages'              => array( 'مرتگین صفحات' ),
	'DoubleRedirects'           => array( 'دوبل غیر مستقیم' ),
	'Emailuser'                 => array( 'ایمیل کاربر' ),
	'Export'                    => array( 'درگیزگ' ),
	'Fewestrevisions'           => array( 'کمترین بازبینی' ),
	'FileDuplicateSearch'       => array( 'گردگ کپی فایل' ),
	'Filepath'                  => array( 'مسیر فایل' ),
	'Import'                    => array( 'وارد' ),
	'Invalidateemail'           => array( 'نامعتبرین ایمیل' ),
	'BlockList'                 => array( 'لیست محدوددیت آی پی' ),
	'Listadmins'                => array( 'لیست مدیران' ),
	'Listbots'                  => array( 'لیست روباتان' ),
	'Listfiles'                 => array( 'لیست عکس' ),
	'Listgrouprights'           => array( 'لیست حقوق گروه' ),
	'Listredirects'             => array( 'لیست غیر مستقیمان' ),
	'Listusers'                 => array( 'لیست کاربر' ),
	'Lockdb'                    => array( 'کبلدب' ),
	'Log'                       => array( 'ورودان' ),
	'Lonelypages'               => array( 'صفحات یتیم' ),
	'Longpages'                 => array( 'مزنین صفحات' ),
	'MergeHistory'              => array( 'چندوبند تاریح' ),
	'MIMEsearch'                => array( 'گردگ میام' ),
	'Mostcategories'            => array( 'گیشترین دستجات' ),
	'Mostimages'                => array( 'گیشترین عکس' ),
	'Mostlinked'                => array( 'گیشتر لینک بوتت' ),
	'Mostlinkedcategories'      => array( 'دستجات گیشتر لینک بوتگین' ),
	'Mostlinkedtemplates'       => array( 'تمپلتان گیشتر لینک بوتگین' ),
	'Mostrevisions'             => array( 'گیشترین بازبینی' ),
	'Movepage'                  => array( 'جاه په جاهی صفحه' ),
	'Mycontributions'           => array( 'منی مشارکت' ),
	'Mypage'                    => array( 'منی صفحه' ),
	'Mytalk'                    => array( 'منی گپ' ),
	'Newimages'                 => array( 'نوکین عکسان' ),
	'Newpages'                  => array( 'نوکین صفحات' ),
	'Popularpages'              => array( 'مردمی صفحات' ),
	'Preferences'               => array( 'ترجیحات' ),
	'Prefixindex'               => array( 'ایندکس پیشوند' ),
	'Protectedpages'            => array( 'صفحات محافظتی' ),
	'Protectedtitles'           => array( 'عناوین محافظتی' ),
	'Randompage'                => array( 'صفحه تصادفی' ),
	'Randomredirect'            => array( 'غیرمستقیم تصادفی' ),
	'Recentchanges'             => array( 'نوکین تغییرات' ),
	'Recentchangeslinked'       => array( 'نوکین تغییرات لینک' ),
	'Revisiondelete'            => array( 'حذف بازبینی' ),
	'Search'                    => array( 'گردگ' ),
	'Shortpages'                => array( 'هوردین صفحات' ),
	'Specialpages'              => array( 'حاصین صفحات' ),
	'Statistics'                => array( 'آمار' ),
	'Uncategorizedcategories'   => array( 'دستجات بی دسته' ),
	'Uncategorizedimages'       => array( 'عکسان بی دسته' ),
	'Uncategorizedpages'        => array( 'صفحات بی دسته' ),
	'Uncategorizedtemplates'    => array( 'تمپلتان بی دسته' ),
	'Undelete'                  => array( 'حذف نکتن' ),
	'Unlockdb'                  => array( 'کلب نه کتن دب' ),
	'Unusedcategories'          => array( 'بی استفاده این دسته' ),
	'Unusedimages'              => array( 'بی استفاده این عکس' ),
	'Unusedtemplates'           => array( 'تمپلتان بی استفاده' ),
	'Unwatchedpages'            => array( 'نه چارتگین صفحه' ),
	'Upload'                    => array( 'آپلود' ),
	'Userlogin'                 => array( 'ورودکاربر' ),
	'Userlogout'                => array( 'دربیگ کاربر' ),
	'Userrights'                => array( 'حقوق کاربر' ),
	'Version'                   => array( 'نسخه' ),
	'Wantedcategories'          => array( 'لوٹتگین دسته' ),
	'Wantedpages'               => array( 'لوٹتگین صفحات' ),
	'Watchlist'                 => array( 'لیست چارگ' ),
	'Whatlinkshere'             => array( 'ای لینکی ادان هست' ),
	'Withoutinterwiki'          => array( 'بی بین ویکی' ),
);

