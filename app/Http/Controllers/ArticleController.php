<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index($id=1){
        return "Article ID = $id";
    }

    function showArticle($pageNumber, $type){
        return "Dynamic page =" .$pageNumber ."Type =" .$type;
    }

    // function queryString($pageNumber){
    //     $perPage = request()->input('perPage', 10);
    //     $sort = request()->input('sort','asc');        //asc = ascending
    //     return 'Page Number =' .$pageNumber.', Per Page = ' .$perPage.', Sort = '.$sort;
    // }
//or

    function queryString($pageNumber, Request $request){
        $perPage = $request->input('perPage', 10);
        $sort = $request->input('sort','asc');        //asc = ascending
        return 'Page Number =' .$pageNumber.', Per Page = ' .$perPage.', Sort = '.$sort;
    }
}
