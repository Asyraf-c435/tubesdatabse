<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Show the form for creating a new comment.
     */
    public function create(Request $request)
    {
        $request->validate([
            'commentable_type' => 'required|string',
            'commentable_id' => 'required|integer'
        ]);

        $commentableTypes = ['App\Models\Course', 'App\Models\Lesson', 'App\Models\Comment'];
        $type = $request->query('commentable_type');
        $id = $request->query('commentable_id');
        
        if (!in_array($type, $commentableTypes)) {
            abort(400, 'Invalid commentable type');
        }

        $commentable = $type::findOrFail($id);
        return view('comments.create', compact('commentable'));
    }

    /**
     * Store a newly created comment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:2000',
            'commentable_type' => 'required|string',
            'commentable_id' => 'required|integer'
        ]);

        $commentableTypes = ['App\Models\Course', 'App\Models\Lesson', 'App\Models\Comment'];
        $type = $validated['commentable_type'];
        $id = $validated['commentable_id'];
        
        if (!in_array($type, $commentableTypes)) {
            abort(400, 'Invalid commentable type');
        }

        $commentable = $type::findOrFail($id);

        $comment = new Comment([
            'content' => $validated['content'],
            'user_id' => Auth::id()
        ]);

        $commentable->comments()->save($comment);

        return back()->with('success', 'Comment added!');
    }

    /**
     * Show the form for editing a comment.
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        
        if (Auth::id() !== $comment->user_id && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action');
        }

        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified comment.
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        
        if (Auth::id() !== $comment->user_id && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action');
        }

        $validated = $request->validate([
            'content' => 'required|string|max:2000'
        ]);

        $comment->update($validated);

        return back()->with('success', 'Comment updated!');
    }

    /**
     * Vote on a comment
     */
    public function vote(Request $request, $id)
    {
        $request->validate([
            'vote' => 'required|integer|between:-1,1'
        ]);

        $comment = Comment::findOrFail($id);
        $user = Auth::user();

        $user->commentVotes()->syncWithoutDetaching([
            $comment->id => ['vote' => $request->vote]
        ]);

        return back()->with('success', 'Vote recorded!');
    }

    /**
     * Remove the specified comment.
     */
    public function destroy($id)
    {
        $comment = Comment::withCount('comments')->findOrFail($id);

        if (Auth::id() !== $comment->user_id && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action');
        }

        if ($comment->comments_count > 0) {
            return back()->with('error', 'Cannot delete comment with replies!');
        }

        $comment->reports()->delete();

        $comment->delete();

        return back()->with('success', 'Comment deleted!');
    }
}