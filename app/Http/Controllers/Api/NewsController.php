<?php

namespace App\Http\Controllers\Api;

use App\News;

class NewsController extends ApiController
{
    /**
     * @SWG\Get(
     *     path="/news",
     *     summary="Get list of news posts",
     *     tags={"News"},
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/News")
     *         ),
     *     )
     * )
     */
    public function index()
    {
        return News::orderBy('created_at', 'asc')->get();
    }
}
