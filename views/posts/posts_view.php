<div class="container">
    <div class="well">
        <div class="media">
            <div class="media-body">
            <h4 class= "media-heading"><?php echo $post['post_subject'];?></h4>
            <p class="text-right"><?php echo $post['name'];?></p>
            <p><?php echo $post['post_text'];?></p>
            <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo $post['post_created'];?></span></li>
                <li></li>
                <?php foreach($tags as $tag):?>
                <a href="#">
                    <span class="label label-info">
                        <?php echo $tag['tag_name']; ?>
                    </span>
                </a>&nbsp;
                <?php endforeach?>
                <li>|</li>
                <span><i class="glyphicon glyphicon-comment"></i><?php echo $comment['comment_text'];?></span>
            </ul>
            </div>
        </div>
    </div>
</div>

  <div class="container">
      <div class="row">
          <div class="media comment-box">
              <div class="media-body">

                  <?php foreach($comments as $comment): ?>
                  <h4 class="media-heading"><?php echo $comment['comment_subject']?></h4>
                  <p><?php echo $comment['comment_text']?></p>
                  <span class="badge badge-success">Commented on <?php echo $comment['comment_created']?></span>
                  <span class="badge badge-success">Author: <?php echo $comment['comment_author']?></span>
                  <hr>
                  <?php endforeach?>
              </div>
          </div>
      </div>
  </div>