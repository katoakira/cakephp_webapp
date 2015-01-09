<h1><?php echo h($item['Item']['title']); ?></h1>
<p>投稿者名：<?php echo $item['Item']['name']; ?></p>
<p><small>締め切り日：<?php echo $item['Item']['due_date']; ?></small></p>
<p>¥ <?php echo $item['Item']['price']; ?></p>
<p><?php echo $item['Item']['img']; ?></p>
<p><?php echo h($item['Item']['body']); ?></p>
<?php echo $this->Form->submit('Back', array('controller' => 'item', 'action' => 'index'));?>
