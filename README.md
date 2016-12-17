# PHPTimbuktwo
####An Internal Functions/Class Library of useful reusable functions used at [BITVoxy Portal](http://www.bitvoxy.com/)
##Why PHPTimbuktwo?
"PHPTimbuktwo" is a more efficently controlled Library for which to place internally generated functions/classes.

It is named after "Timbuktwo" also spelled as Tinbuktu, Timbuctoo and Timbuktoo, a historical and still-inhabited city in the West African nation of Mali, situated 20 km (12 mi) north of the River Niger on the southern edge of the Sahara Desert.
In its Golden Age, the town's numerous Islamic scholars and extensive trading network made possible an important book trade: together with the campuses of the Sankore Madrasah, an Islamic university, this established Timbuktu as a scholarly centre in Africa. Several notable historic writers, such as Shabeni and Leo Africanus, have described Timbuktu. These stories fueled speculation in Europe, where the city's reputation shifted from being extremely rich to being mysterious. This reputation overshadows the town itself in modern times, to the point where it is best known in Western culture as an expression for a distant or outlandish place.
[Learn More](https://en.wikipedia.org/wiki/Timbuktu)
##Additional Libraries Used
 
This Library is used in conjunction with [RECIPE](https://github.com/ngfw/Recipe).

---
Table of Contents
* [🚀 Quick Start](#quick-start)
* [Bitcoin Unit Converter](#bitcoin-unit)

---
###Quick Start
Run in your terminal:
```bash
composer require bitvoxy/phptimbuktwo
```
Create new file and start using the Recipes
```php
<?php

require "vendor/autoload.php";

?>
```
###Bitcoin Unit
a function to efficiently convert to/from various bitcoin units.
```php
<?php

$unit = 'satoshi';
$amount = 1.54325;
btcUnit($amount,$type)
// returns  value in btc

?>
```

---


