<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Inertia\Inertia;

class QuestionController extends Controller {
    public function index() {
        $questions = Question::query()
        ->select( [ 'id', 'title', 'slug', 'created_at', 'user_id', 'votes', 'answers', 'views' ] )
        ->with( [ 'user:id,name' ] )
        ->latest()
        ->paginate( 10 )
        ->withQueryString();

        return Inertia::render( 'Questions/Index', [
            'questions' => $questions,
        ] );
    }

    public function create() {
        return Inertia::render( 'Questions/Create' );
    }
}
