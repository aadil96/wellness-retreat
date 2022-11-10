<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    $data = include(__DIR__.'/../app/Models/Product.php');
    $products = [];
    foreach ($data as $product) {
        $products[] = (object) $product;
    }
    return view('home', ['products' => $products]);
})
    ->name('home');

Route::get('cancellation-policy', fn () => view('cancellation-policy'))
    ->name('cancellation-policy');

Route::get('privacy-policy', fn () => view('privacy-policy'))->name('privacy-policy');

Route::get('terms-and-conditions', fn () => view('terms-and-conditions'))->name('terms-and-conditions');

Route::get('products', function () {
    $data = include(__DIR__.'/../app/Models/Product.php');
    $products = [];
    foreach ($data as $product) {
        $products[] = (object) $product;
    }
    return view('products', ['products' => $products]);
})->name('products');

Route::get('products/{slug}', function ($slug) {

    $products = include(__DIR__.'/../app/Models/Product.php');

    abort_if(
        ! in_array($slug, array_keys($products)),
        Response::HTTP_NOT_FOUND
    );

    $product = (object) $products[$slug];

    return view('product-detail', ['product' => $product]);
})
    ->name('product-detail');
