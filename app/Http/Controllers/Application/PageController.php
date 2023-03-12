<?php

namespace App\Http\Controllers\Application;

use App;
use App\Base\Services\SitemapService;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Block;
use App\Models\Category;
use App\Models\Page;
use phpDocumentor\Reflection\Types\Collection;

class PageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        LangController::setDefault();



        return view('app.landpage', [
            'title' => getTitle(),
            'description' => getDescription(),
            'articles' => Article::published()->paginate(4),
            'blocks' => Block::get(),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getArticles()
    {
        LangController::setDefault();

        return view('app.articles', [
            'title' => getTitle(),
            'description' => getDescription(),
            'articles' => Article::published()->paginate(4)
        ]);
    }

    /**
     * @param \App\Models\Category $category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCategory(Category $category)
    {
        LangController::setDefault();

        return view('app.articles', [
            'title' => $category->title,
            'description' => $category->description,
            'articles' => Article::where('category_id', $category->id)->paginate(4)
        ]);
    }

    /**
     * @param \App\Models\Page $page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage(Page $page)
    {
        LangController::setDefault();

        return view('app.content', ['object' => $page]);
    }

    /**
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getArticle(Article $article)
    {
        LangController::setDefault();

        return view('app.content', ['object' => $article]);
    }

    /**
     * @param \App\Base\Services\SitemapService $sitemapService
     *
     * @return mixed
     * @throws \Exception
     */
    public function getSitemap(SitemapService $sitemapService)
    {
        LangController::setDefault();

        return $sitemapService->render();
    }
}
