<?php

$this->title = $product->title;
?>
<h1><?=$product->title;?></h1>
<table class="table table-striped">
    <tr>
        <th>Цена</th>
        <th>Старая цена</th>
        <th>Описание</th>
    </tr>
    <tr>
        <td><?=$product->price;?></td>
        <td><?=$product->old_price;?></td>
        <td><?=$product->description;?></td>
    </tr>
</table>