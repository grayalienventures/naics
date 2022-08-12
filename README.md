# naics
Utility tools for 2022 NAICS standards in PHP.

## Installation
Install this package using composer.
```
$ composer require grayalienventures/naics
```

## Usage
Get industry by NAICS code.
```php
<?php

use Grayalienventures\Naics;

$industry = new NAICS();
echo $industry->verbose_label('62111');
```

## Contributing
Contributions are HIGHLY encouraged.

## License
[MIT](https://choosealicense.com/licenses/mit/)