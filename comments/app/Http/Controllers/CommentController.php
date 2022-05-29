<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index($id)
    {
        return Comment::where('post_id', $id)->get();
    }

    public function store(Request $request)
    {
        return Comment::create([
            'post_id' => $request->input('post_id'),
            'text' => $request->input('text'),
        ]);
    }
}
