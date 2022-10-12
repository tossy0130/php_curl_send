<?php

// エラーを出力する
ini_set('display_errors', "On");

# セッション初期化
$curl = curl_init();

//$POST_url = "http://xs810378.xsrv.jp/Dnp_Asano_R_01/index.php"; // エックスサーバー
//$POST_url = "http://13.114.247.114/Dnp_Asano_R_01/index.php";   // AWS

$POST_url = "http://127.0.0.1/Dnp_Asano_R_01/send.php";

curl_setopt($curl, CURLOPT_URL, $POST_url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  // 証明書の検証を無効化
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);  // 証明書の検証を無効化 

/* POSTする値 */
$postParams = [
    'REQUEST_CMD' => '4rHxdrPTEa8i6wHVq+BES4mVbx7dssFVVfAHmou7J0JStpDXR1Ig1Y/1ABA+vdjzTzZDaMrYYxuNrISI1Q6QLXhn+YArsnSoaOjPFepRMRKCyhUrQmzL61QiUVZnw05iTC25AF7pgm0pPtOzN/pDg9ACUv/0r2dJL5A4w9lx6rHTeZ65FqfgrM/TzxFuezxa2F/TK/rTsB15Yx38DXsVHnORbTld1BlV8XJV3cmk/c9T5CInSVIdDEkobzthW66Fzo/jYEMZtYw1BThIsZXD16gU45uoLbN1GkN8Ewx8qCh6r+Fb3IVgSpW84ss/XW1tdNYzne5Tb+52KiawAwdYU2dmIQ957/Lg9adcdEIF1DxTcB6qldwtCAIlSZO4jzdx6zxNu4Uy3ElOakJFWOHRWzsgC9MgnYUIOkiBo017TwhTKLaWWWlIRfnkC/210QUN6+8pAZ0Wtj6cEwFugJhZeTtZAV5A0LvAu16z80EpaEow0I/ntENR/HQbw270RiUuZrNuKSLVD83UO0gp3/9C7/3qZqfIlLkxlbBb4WdmDGLYuUZYWwSnNZUpQfxR4NRcaZuQ++jQse+tRaFy5B6nTji4Kg8t7q/k1TZFmJdVdWBryqgFrHUcauhdIzLK+SEbKry1bfKt81U0dBjz9lFKdlZQevvQQTpAIcGt++Vf3tcslLK+tQ62pbq4E785HeFQ2wj9+kxstOQow0g2Gtyq8GZjo2E78xg7SOnxTY+td6FXQuff6fmV31mqAcgJg9uJ2H8y57HecILeJpTbhD9xbE0h/VpYzfHRRFKpiq/6j33PWg6x2/Qpce/EBiKSkCXpFoWAdJSst+ociPMCJhkrW52bdt3Og8Qy78rlzpfeEbsrdv47ML2IZZw0MCZg8gJuwArmO/2nW8GHN2oxsG3wf01XQpa78yziTrqAnMqLBpqW8wFKPopqiF6rXs/FjqcUnxa6UJVfUwl4irPM6WMgrD0dhWXbMEKquPgRnr5cvb5zY142g8sFgDJbNMGfTyYvcoVMdim2CarJdFj0ImfP9Io/TEJFBECVBePFxJablRQG6O0swKP3+HzDTvUtvk57VciwnA+S1Bm0QbVx9qOxtr4VTxjta5GXeb4WQ1FS54QJzetrHDBMjiRTAfP1DteYTdIRCvpMBa7d7Jk6wwDnJBx45TKlwPJvkD2KqlKLtI2fPHhFfL90gjQJg0iLIeGAqnhULoq1FGcJvIQTCeCdQXB45HSRmWmPUbzZfrMBQA5t7zJ/K8AmGQpaxedK5jl9iPeETmP+II/0E1Eei9OmU+FSDC6xRZVWpQikIRwybE4/kBLdxIF/SzBoITlRJZor6NGonFmSdezL96xoDkBToZcJ0J+LJTeloCvgfBhxX5wvX42hmeTaqQp8AYwF174WQoPY4MwuZf93atFr9SIUpo4vtxWSI8zDpMELATwJ7jzjOi29PLjFsfWYNjaz3noOWaE1Hi52acemVdFxqRS8+S2x17zHoFM3RiZ08aHtLl/sicKrZaF03pwPblrm2La9X1pLMNk33v896wkf/ThbAI6JZHUJejwUJOiuqgwglow=',
];
# 送信データ
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postParams));

$headers = [
    'Content-Type: application/x-www-form-urlencoded',
    'Accept-Charset: UTF-8',
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

# 実行
$output = curl_exec($curl);

# HTTPステータスコード取得
$httpcode = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

/*
print $httpcode;
print "\n\n";
print $output;
*/

curl_close($curl);
