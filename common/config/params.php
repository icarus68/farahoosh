<?php
return [
    'adminEmail' => 'info@farafekr.co',
    'supportEmail' => 'support@farafekr.co',
    'user.passwordResetTokenExpire' => 3600,
    'opt'=> [
            'SiteTitle'=>array('editable'=>true,'title'=>'عنوان سایت'),
            'AdminPanelName'=>array('editable'=>true,'title'=>'عنوان صفحه مدیریت سایت'),
            'SiteKeyword'=>array('editable'=>true,'title'=>'کلمات کلیدی سایت'),
            'FooterText'=>array('editable'=>true,'title'=>'متن فوتر سایت'),
            'SiteContactEmail'=>array('editable'=>true,'title'=>'ایمیل فرم ارتباط با ما'),
            'SiteTestMessage'=>array('editable'=>true,'title'=>'متن ارسال پیام تست سایت'),

            'DownloadDuration'=>array('editable'=>true,'title'=>'مدت زمان دانلود(دقیقه)'),

            'AdminPanelName'=>array('editable'=>true,'title'=>'عنوان صفحه مدیریت'),

            'PayWebserviceUrl'=>array('editable'=>true,'title'=>'آدرس وب سرویس درگاه پرداخت'),
            'PayWebservicePin'=>array('editable'=>true,'title'=>'پین کد درگاه پرداخت'),

            'SmsApi'=>array('editable'=>true,'title'=>'آدرس وب سرویس پیامک'),
            'SmsNumber'=>array('editable'=>true,'title'=>'شماره پیامکی'),
            'SmsUsername'=>array('editable'=>true,'title'=>'نام کاربری ارسال پیامک'),
            'SmsPassword'=>array('editable'=>true,'title'=>'کلمه عبور ارسال پیامک'),
            'SmsPriceFa'=>array('editable'=>true,'title'=>'نرخ ارسال هر پیامک فارسی(ریال)'),
            'SmsPriceEn'=>array('editable'=>true,'title'=>'نرخ ارسال هر پیامک لاتین(ریال)'),

            'ViberApi'=>array('editable'=>true,'title'=>'آدرس وب سرویس وایبر'),
            'ViberNumber'=>array('editable'=>true,'title'=>'شماره وایبری'),
            'ViberUsername'=>array('editable'=>true,'title'=>'نام کاربری ارسال وایبر'),
            'ViberPassword'=>array('editable'=>true,'title'=>'کلمه عبور ارسال وایبر'),
            'ViberPrice'=>array('editable'=>true,'title'=>'نرخ ارسال هر پیام وایبر(ریال)'),

            'TelegramApi'=>array('editable'=>true,'title'=>'آدرس وب سرویس تلگرام'),
            'TelegramNumber'=>array('editable'=>true,'title'=>'شماره تلگرام'),
            'TelegramUsername'=>array('editable'=>true,'title'=>'نام کاربری ارسال تلگرام'),
            'TelegramPassword'=>array('editable'=>true,'title'=>'کلمه عبور ارسال تلگرام'),
            'TelegramPrice'=>array('editable'=>true,'title'=>'نرخ ارسال هر پیام تلگرام(ریال)'),

            'EmailServer'=>array('editable'=>true,'title'=>'آدرس سرور ایمیل'),
            'EmailServerPort'=>array('editable'=>true,'title'=>'پورت ایمیل سرور'),
            'EmailUsername'=>array('editable'=>true,'title'=>'نام کاربری ایمیل سرور'),
            'EmailPassword'=>array('editable'=>true,'title'=>'کلمه عبور ایمیل سرور'),
            'EmailFrom'=>array('editable'=>true,'title'=>'ایمیل ارسال کننده ایمیل سرور(from)'),
            'EmailTemplete'=>array('editable'=>false,'title'=>'قالب ارسال ایمیل'),
            'EmailPrice'=>array('editable'=>true,'title'=>'نرخ ارسال هر ایمیل(ریال)'),
                    ],
];
