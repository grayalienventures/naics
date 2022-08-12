# naics
NAICS code utility tools.

## Installation
Install this package using composer.
```
$ composer require grayalienventures/naics
```

## Usage
Get industry by NAICS code.
```php
<?php

use GrayAlienVentures\naics;

$industry = new NAICS();
echo $industry->verbose_label('62111');
```

## License
[MIT](https://choosealicense.com/licenses/mit/)