<?php
header('Access-Control-Allow-Origin: *');
$results = '';
// get or generate your key at https://www.dynadot.com/account/domain/setting/api.html
$key = '8J6LQ6C6b7E9QG7Z8x8qz8dK8B8ZN8i6m8O7U7pC7u';
foreach (explode(",", $_GET['domains']) as $domain) {
    foreach (explode(",", $_GET['domainexts']) as $ext) {
        $results .= file_get_contents("https://api.dynadot.com/api3.xml?key={$key}&command=search&domain0={$domain}.{$ext}");
    }
}
echo $results;

?>
