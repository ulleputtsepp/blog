<ul class="list-group">
    <?php foreach($tags as $tag): ?>
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><li class="list-group-item"><?php echo $tag['tag_name']; ?></li></a>
    <?php endforeach; ?>
</ul>
