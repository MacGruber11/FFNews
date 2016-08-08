<?php
/**
 * Created by PhpStorm.
 * User: stepanov
 * Date: 08.08.2016
 * Time: 15:37
 */

namespace MacGruber11\FFNews\Http\Controllers;

use App\Http\Controllers\Controller;
use MacGruber11\FFNews\Models\FFNewsCategory as Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FFNewsCategoryController extends Controller
{

    public function show($slug)
    {
        return view('MacGruber11::category_show');
    }
}