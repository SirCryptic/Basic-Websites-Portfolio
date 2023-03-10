alternatively you can replace the `index.php` with what ever you like just add this code to your desired webpage

```php
<?php

include("main/Discord.php");

$sendembed = New Discord();

$sendembed->Visitor();

include("main/Guilded.php");

$sendembed = New Guilded();


$sendembed->Visitor();

?>
```

also remember to Change Your_Webhook_URL in `discord.php` & `guilded.php`
