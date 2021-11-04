

<p>Cписок всех сообщений:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Посмотреть содержимое</a>
  </p>
<?php } ?>