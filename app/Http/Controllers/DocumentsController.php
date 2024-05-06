<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Comment $comment)
    {
        return $comment->documents;
    }

    public function store(Request $request, Comment $comment)
    {
        $document = new Document($request->all());
        $comment->documents()->save($document);
        return response()->json($document, 201);
    }

    public function show(Comment $comment, Document $document)
    {
        return $document;
    }

    public function update(Request $request, Comment $comment, Document $document)
    {
        $document->update($request->all());
        return response()->json($document, 200);
    }

    public function destroy(Comment $comment, Document $document)
    {
        $document->delete();
        return response()->json(null, 204);
    }
}