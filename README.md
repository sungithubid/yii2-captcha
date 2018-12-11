Captcha With Math Equation
==========================
forked from [mdmsoft/yii2-captcha](https://github.com/mdmsoft/yii2-captcha)

改动:
- 支持php7
- 重写验证码方程式，原版动不动求极限...
- 每次刷新改为默认重新生成验证码

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist gybe/yii2-captcha "~1.0"
```

or add

```
"gybe/yii2-captcha": "~1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply modify your controler, add or change methode `actions()`:

```php
public function actions()
{
	return [
		...
		'captcha' => [
                'class' => 'gybe\captcha\CaptchaAction',
                'level' => 1, // avaliable level are 1,2,3 :D
            ],
	];
}
```

In view
```php
<?=
$form->field($model, 'verifyCode')->widget(Captcha::className(), [
    'template' => '<div class="row"><div class="col-lg-12">{image}</div><div class="col-lg-12">{input}</div></div>',
])
?>

```
