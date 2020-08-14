<?php include "menu.php";?>
    <h1>Категории</h1>
<?php foreach ($category as $item): ?>
    <a href="<?=route('CategoryNews', $item['categoryPath'])?>"><?=$item['categoryName']?></a><br>
<?php endforeach; ?>


