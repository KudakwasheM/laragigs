<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index']);

// Route::get('/posts/{id}', function ($id) {
//     return response('Post: ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing,
//         ]);
//     } else {
//         abort('404');
//     }
// });

Route::get("/listings/create", [ListingController::class, 'create']);

Route::post("/listings", [ListingController::class, 'store']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);
