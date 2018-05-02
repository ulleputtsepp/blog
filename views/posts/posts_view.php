<div class="container">
    <div class="well">
        <div class="media">
            <div class="media-body">
            <h4 class= "media-heading"><?php echo $post['post_subject'];?></h4>
            <p class=""text-right"><?php echo $post['name'];?></p>
            <p><?php echo $post['post_text'];?></p>
            <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"><?php echo $post['post_created'];?></i></span></li>
                <li></li>
                <span><i class="glyphicon glyphicon-comment"></i> ? comments</span>
            </ul>
        </div>
    </div>
</div>

