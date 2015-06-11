<?php namespace App\Blog;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Parsedown;
use Symfony\Component\Yaml\Parser;

class BlogParser {

    /**
     * @var Parsedown
     */
    private $markdown;

    /**
     * @param Parsedown $markdown
     */
    public function __construct(Parsedown $markdown)
    {
        $this->markdown = $markdown;
    }

    public function getArticles()
    {
        $articles = glob(base_path('resources/posts/').'*md');

        rsort($articles);

        foreach ($articles as &$article) {
            $contents = file_get_contents($article);
            $article = $this->parseContents($contents);
        }

        return collect($articles);
    }

    public function getArticle($uri)
    {
        $article = glob(base_path('resources/posts/').'*'.$uri.'.md');
        if (empty($article)) {
            return false;
        };
        $contents = file_get_contents(head($article));
        return $this->parseContents($contents);
    }

    public function parseContents($contents)
    {
        if (substr($contents, 0, 3) !== '---')
        {
            throw new Exception('Bad Markdown Formatting');
        }

        if ( ! ($pos = strpos($contents, '---', 3)))
        {
            throw new Exception('Bad Markdown Formatting');
        }

        $frontMatter = trim(substr($contents, 3, $pos - 3));
        $contents = $this->markdown->text(trim(substr($contents, $pos + 3)));
        $yaml = new Parser();
        $fields = $yaml->parse($frontMatter);

        foreach ($fields as $key => &$value) {
            if ($key == 'date') {
                $value = Carbon::createFromTimestamp(strtotime($value));
            }
        }

        return array_merge([
            'content' => $contents,
            'intro' => $this->getIntro($contents),
            'url' => str_slug($fields['title']),
        ], $fields);
    }

    protected function getIntro($content)
    {
        $start = explode('<!-- more -->', $content);
        return $start[0];
    }
}