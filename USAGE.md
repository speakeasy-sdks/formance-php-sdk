<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use formance\formance;
use formance\formance\Models\Shared;

$security = new Shared\Security();
$security->authorization = '';

$sdk = formance\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->getVersions();

    if ($response->getVersionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->