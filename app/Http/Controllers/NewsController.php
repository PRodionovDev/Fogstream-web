<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = News::orderBy('created_at', 'asc')->paginate(10);

        return view('welcome')->with(
            [
                'model' => $model
            ]
        );
    }
}
