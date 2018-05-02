<!--<h1>Welcome!</h1>


<p>This is the welcome controller's default view file. It is located at <code>/views/welcome/welcome_index.php</code>.
</p>

<h2>Examples</h2>
<p>Below are some examples how to use Halo</p>

<h3>Adding pages</h3>
<p>For example, to To have the URL localhost/halo/<span class="label label-primary">posts/view/3</span> working, visit
    <a href="halo">Halo admin</a> and create a subpage there, or do it manually:</p>

<ol>
    <li>Create new file <code>/controllers/<i>posts</i>.php</code></li>
    <li>In that file create <code>class posts</code> (lower case letters) which <code>extends Controller</code>
        (capitalized)
    </li>
    <li>Create <code>function index()</code> within that class. This is the default action which will be called when no
        action is specified (e.g. just /posts). There you can set all the variables your view will need.
    </li>
    <li>Create <code>function view()</code> within that class.
        This is the <i>action</i> that gets run when users access <code>posts/view...</code>.
        Here you usually make a database query and put its result into a variable that is preceded with
        <code>$this</code>
        (so that you can later access it from the <i>view</i>).
        To access what is put after the action name on the URL (<code>3</code> in our example), use <code>$this->params[0]</code>.
        An example: <code>$this->post = get_one("SELECT * FROM post WHERE id={$this->params[0]}");</code> (You would
        have to create the <i>post</i> table in your database and add at least <i>id</i> field to it, of course)
    </li>
    <li>Create new folder <code>/views/posts</code></li>
    <li>Create new file <code>/views/posts/posts_view</code></li>
    <li>Place content to that file. You could <code>&lt;?php var_dump($post)?></code> for starters.</li>
</ol>

<h3>Sending data to server</h3>
<h4>jQuery $.post (Ajax) submit example</h4>
Fill the name field below and click <i>submit form using ajax</i>.
<form id="ajax-form">
    Your name: <input type="text" placeholder="Write something here" name="name"/><br/>
</form>
<a onclick="success()">Submit form using ajax (success)</a><br/>
<a onclick="error()">Submit form using ajax (error)</a><br/>

The form containing the name field will be submitted to the
server by jQuery and server's response will be written to the box below.

<div class="well result"></div>


<h4>Traditional POST submit example</h4>
<p>Here is an example how to use traditional POST to send data to the server. Click Post after filling the form. The
    server will invoke <code>post::post_index()</code> action (which is in <code>/controllers/posts.php</code> file)
    which just dumps $_POST to the screen.</p>-->

<!-- Button for executing post -->
<!--<form method="post">
    <input type="text" name="foobar"/>
    <input type="submit" value="Post"/>
</form>-->
<!-- php foreach kood-->
<div class="span8">
    <?php foreach($posts as $post): ?>
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject'] ?></a></h1>
        <p><?=$post['post_text'] ?></p>
        <div>
            <span class="badge badge-success"><?=$post['post_created'] ?></span>
            <div class="pull-right"><span class="label"><?=$post['user_id'] ?></span> <span class="label">story</span> <span class="label">blog</span>
                <span class="label">personal</span></div>
        </div>
    <?php endforeach ?>
</div>

<!--https://bootsnipp.com/snippets/featured/simple-blog-layout-example
alguse ja lõpu tagid siit ülaloleva php koodi jaoks:
<div class="span8">
    <h1>Alice in Wonderland, part dos</h1>
    <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
        'Yes, we went to school in the sea, though you mayn't believe it—'
        'I never said I didn't!' interrupted Alice.
        'You did,' said the Mock Turtle.</p>
    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
</div>
    <hr>-->

<!-- Code for ajax -->
<script type="text/javascript">
    function success() {
        ajax("welcome/success", $("#ajax-form").serialize(), function (json) {
            $(".result").html(json.data);
        });
    }

    function error() {
        ajax("welcome/error", $("#ajax-form").serialize(), function (json) {
            $(".result").html(json.data);
        });
    }
</script>