<?php

namespace App\Http\Controllers\Api;

use App\News;

class NewsController
{
    /**
     * Display a listing of the resource.
     *
     * @return App\News
     */
    public function index()
    {
        return News::orderBy('created_at', 'asc')->get();
    }
}
