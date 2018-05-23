<?php
/**
 * Created by PhpStorm.
 * User: Ulle
 * Date: 03-May-18
 * Time: 23:31
 */

namespace App;


class tags extends Controller
{
    function index(){
        $this->tags = get_all(
            "SELECT *, ".
            "COUNT(post_id) AS count ".
            "FROM post_tags NATURAL JOIN tag ".
            "GROUP BY tag_id");
    }
    function view(){
        $tag_id = $this->params[0];
        $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post WHERE tag_id='$tag_id'");
    }
}