<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsResource;
use App\Models\News;

class IndexController extends Controller
{
    public function __invoke()
    {
        return NewsResource::collection(
            News::select(
                'id',
                'title',
                'description',
                'created_at')->get()
        );
    }
}
