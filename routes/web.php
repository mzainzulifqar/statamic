<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/geo-map',function(){
    return view('map');
});

Route::get('/', function () {
    $html = '';
    $content = '';
    $replace_vars = [
        '[[year]]' => date('Y'),
        '[[company]]' => 'MojoSolo',
        '[[first_name]]' => 'David',
        '[[revenue]]' => '150K$',
    ];

    $foo = Entry::query()
    ->where('collection', 'snippets')
    ->get();
    
    foreach ($foo as $value) {
        $html .= view($value->template,['page' => $value])->render(); 
        $content .= everything_in_tags($html,'<!--section-start-->','<!--section-end-->');
        $html = '';
    }
    
    $keys = array_keys($replace_vars);
    $values = array_values($replace_vars);
    $content = str_replace($keys, $values, $content);
    
    return view('page_holder',['content' => $content]);
});
