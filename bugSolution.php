```php
$chunkSize = 8192;
$file = fopen('large_file.txt', 'r');
if ($file) {
    while (($chunk = fread($file, $chunkSize)) !== false) {
        // Process the chunk
        // ...
    }
    fclose($file);
}
```
This improved version reads the file in chunks of 8KB, processing each piece before moving on. This prevents loading the entire file into memory simultaneously.