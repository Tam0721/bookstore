<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsControllers extends Controller
{
    public function addComment() {
        $comment = new Comments;
        $comment->content = $_POST['comment'];
        $comment->product_id = $_POST['pro_id'];
        $comment->user_id = $_POST['user_id'];
        $comment->save();
        return redirect('/san-pham/'.$comment->product_id);
    }
}
