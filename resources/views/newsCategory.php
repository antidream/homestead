<?php
include "menu.php";
?>
<h2>Категория</h2>
<?php foreach ($news as $item): ?>
    <a href="<?=route('NewsOne', $item['id'])?>"><?=$item['title']?></a><br>
<?php endforeach; ?>
