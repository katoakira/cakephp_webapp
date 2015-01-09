<!-- 商品一覧TOP -->
<h1>TOP</h1>
<?php
    echo $this->Html->link(
        '出品', 
        array('controller' => 'posts', 'action' => 'add')
    );
?>
<table>
    <tr>
        <th>Title</th>
        <th>Name</th>
        <th>DueDate<th>
        <th>Price</th>
        <th>Body</th>
        <th>Image</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($items as $item): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($item['Item']['title'],
array('controller' => 'items', 'action' => 'view', $item['Item']['id'])); ?>
        </td>
        <td><?php echo $item['Item']['name']; ?></td>
        <td><?php echo $item['Item']['due_date']; ?></td>
        <td><?php echo $item['Item']['price']; ?></td>
        <td><?php echo $item['Item']['body']; ?></td>
        <td><?php echo $item['Item']['img']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($item); ?>
</table>
