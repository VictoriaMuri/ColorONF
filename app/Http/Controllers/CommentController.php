<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller {
  public function index() {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    // $comments = Comment::orderBy('date')->paginate(3);
    return view('pages.comment', compact('comments'));
  }

  public function store(Request $request) {
    $new_comment = new Comment();
    $new_comment->user_id = $request->user_id;
    $new_comment->description = $request->description;
    $new_comment->save();

    return redirect()->back();
  }
}
