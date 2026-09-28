<?php

$word1 = 'Omedetou! Hyaku-man';
$word2 = 'doru kakutoku';
$message = <<<EOT
<ul>
  <li>$word1</li>
  <li>$word2</li>
</ul>
EOT;

echo $message . PHP_EOL;
