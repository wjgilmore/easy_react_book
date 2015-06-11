<?php namespace App\Http\Controllers;

use App\Blog\BlogParser;
use Illuminate\Pagination\Paginator;

class BlogController extends Controller
{
    /**
     * @var BlogParser
     */
    private $parser;
    /**
     * @var Paginator
     */
    private $paginator;

    /**
     * @param BlogParser $parser
     */
    public function __construct(BlogParser $parser)
    {
        $this->parser = $parser;
    }

    public function index()
    {
        $articles = $this->parser->getArticles();
        return view('blog.index', compact('articles'));
    }

    public function details($uri)
    {
        if ( ! $article = $this->parser->getArticle($uri)) {
            return abort(404);
        }
        return view('blog.details', compact('article'));
    }
}
