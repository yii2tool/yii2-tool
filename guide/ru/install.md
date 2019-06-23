Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-tool
```

Объявляем консольный модуль:

```php
return [
	'modules' => [
		// ...
		'tool' => 'yii2tool\tool\console\Module',
		// ...
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'tool' => [
            'class' => Domain::class,
            'path' => 'yii2tool\tool\domain',
            'repositories' => [
                'password',
            ],
            'services' => [
                'password',
            ],
        ],
		// ...
	],
];
```
