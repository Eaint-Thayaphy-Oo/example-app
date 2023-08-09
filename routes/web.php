<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['name' => 'code lab', 'lecture' => 'programming']);
});

// Route::get('/about', function () {
//     $num1 = 10;
//     $num2 = 20;
//     $result = $num1 + $num2;
//     return view('aboutPage', ['message' => 'This is testing message from server site', 'result' => $result]);
// });

Route::view('/about', 'aboutPage', ['message' => 'This is testing message from server site', 'fruits' => ["apple", "mango", "banana", "orange"], 'name' => 'code lab', 'lecture' => 'programming']);

Route::view('customer/help/service', 'service')->name('ser');

Route::get('/contact', function () {
    return view('contact', ['name' => 'code lab', 'lecture' => 'programming']);
});

Route::get('customer/list', function () {
    return view('customer.list');
});

Route::get('vipMaleCustomer', function () {
    return view('customer.vipCustomer.male.list');
});

Route::get('vipFemaleCustomer', function () {
    return view('customer.vipCustomer.female.list');
});

Route::get('/user/contact', function () {
    return "user contact page";
});

Route::get('/customer/{name}', function ($name) {
    return "customer name is" . $name;
});

Route::get('/customer/{name}/{age}', function ($name, $age) {
    return "customer name is" . $name . "and his age is" . $age;
});

Route::get('/customer/{name}/register/{age}', function ($name, $age) {
    return "customer name is" . $name . "and his age is" . $age;
});

Route::get('customer/{name?}/register/{age?}', function ($name = 'aung aung', $age = '13') {
    return "customer name is" . $name . "and his age is" . $age;
});

Route::get('result/{num1}/{num2}', function ($num1, $num2) {
    $myResult = $num1 + $num2;
    return view('result', ['result' => $myResult]);
})->name('myCalculation');

Route::get('paraPass/{name}', function ($myName = "Your name is empty") {
    return $myName;
});

Route::get('paraPass/{name?}', function ($myName = "Your name is empty") {
    return $myName;
})->name('passWithRoute');

Route::get('sum/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});

Route::get('add/{num1}/{num2}', fn ($num1, $num2) => $num1 + $num2);

//pure php code
Route::get('getData', function () {
    $data = file_get_contents("https://fakestoreapi.com/products");
    $jsonData = json_decode($data);
    // return $jsonData;

    // dd($jsonData[0]->price);
    // dd($jsonData[6]->title);
    // dd($jsonData[7]);
    //dd($jsonData);

    $result = array_filter($jsonData, fn ($j) => $j->price < 10);
    dd($result);
});

//laravel code
Route::get('laraGetData', function () {
    $data = Http::get("https://fakestoreapi.com/products");
    $data = $data->json();
    dd($data);
    //dd($data[5]);
    //dd($data[5]['title']);
});

Route::get('laraObjectGetData', function () {
    $data = Http::get("https://fakestoreapi.com/products")->object();
    // dd($data);
    dd($data[6]->price);
});

Route::get('laraCollectGetData', function () {
    $data = Http::get("https://fakestoreapi.com/products")->object();
    //$data = collect($data)->where("price", "<", 10)->toArray();
    //$data = collect($data)->last();
    // $data = collect($data)->first();
    // $data = collect([1,2,3,4,5,6,7])->max();
    $data = collect($data)->whereIn("price", [168, 109])->toArray();
    dd($data);
});

Route::view('product/register', 'customerRegister');

// Route::post('postTest/{name}', function ($name) {
//     return "My name is" . $name;
// })->name('customerPostTest');

// php lo pone san
// Route::post('postTest' , function() {
//     return $_POST['userName'];
// })->name('customerPostTest');

// Route::post('postTest', function(Request $request) {
//     dd($request->all());
// })->name('customerPostTest');

Route::post('postTest/{id}/{name}', function (Request $request, $id, $name) {
    $userData = [
        'name' => $request->userName,
        'age' => $request->userAge,
        'address' => $request->userAddress,
        'gender' => $request->userGender
    ];
    dd($request->all(), $userData, $id, $name);
})->name('customerPostTest');

Route::get('helloTest', [CustomerController::class, 'outputFunction']);

Route::get('adminTest', [AdminController::class, 'adminPostTest'])->name('customerPostTest');

Route::get('compact/list', [CustomerController::class, 'compactList']);

Route::get('student/home', [StudentController::class, 'home'])->name('studentHome');

Route::post('student/insert', [StudentController::class, 'insert'])->name('studentInsert');

Route::get('student/read', [StudentController::class, 'read'])->name('studentRead');
