```php
$data = file_get_contents('large_file.txt');
// ... process $data ...
```
This code might cause an out-of-memory error if `large_file.txt` is extremely large.  PHP will load the entire file into memory at once.