TransliteratorHelper for Yii 2
==============================

TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require 2amigos/transliteration-helper "2.0.*"
```
or add

```json
"2amigos/transliteration-helper": "2.0.*"
```

to the require section of your application's `composer.json` file.

Usage
-----
Pass to the method `process()` the UTF-8 encoded string you wish to transliterate:

```
use dosamigos\TransliteratorHelper;

// will echo
TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));
```


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)
<i>web development has never been so fun</i>
[www.2amigos.us](http://www.2amigos.us)

