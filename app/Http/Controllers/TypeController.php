<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function show(){
        return view('type.show', ['name' => 'abubachir', 'surname' => 'trahov']);
    }
    public function all(){
        return view('type.all', ['name' => 'abubachir', 'surname' => 'trahov']);
    }
    public function show52(){
        return view('type.show52', ['name' => 'abubachir', 'surname' => 'trahov']);
    }

    public function showOne(int $id): string{
        // return 'какая-нибудь строка -----';
        // return $id;
        // return pow($id, 2);
        $types =[
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        foreach ($types as $key => $value){
            if ($id == $key){
                $res = $types[$id];
                break;
            }
            else{
                $res = 'такого значения нет';
            }
        }
        return $res;

    }
    public function showAll(){
        return 'какая-нибудь строка +++++';
    }
    public function bl(){
        return view('type.bl', ['name' => 'kirill', 'salary' => '5555555', 'age' => '42', 'csskal' => 'popipo' ,'frscolor' => 'red', 
        'text' => 'click here', 'href' => 'https://rutube.ru/video/c6cc4d620b1d4338901770a44b3e82f4/', 'arr' => ['name', 'age', 'salary'], 
        'city', 'country', 'location' => ['city' => ['Москва'], 'country' => ['Россия']], 'year', 'month', 'day', 'str' => '<b>text</b>', 
        'howOld' => 18, 'taskArr' => [0, 2, 10, -8, 13, 7], 'arr2' => [10, 49, 13, 9, 64], 'arr3' => [0 => [13, 9, 64], 1 => [2, 10, -8], 2 => [10, 49, 13]]]);
    }
}
