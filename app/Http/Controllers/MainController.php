<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;


class MainController extends Controller
{
    //получаем все записи телефонного справочника из БД
    public function index()
    {
//        $users = Phonebook::all(); // все записи
//        $users = Phonebook::orderby('name')->get(); // сортировка по алфавиту
        $users = Phonebook::orderby('name')->paginate(10); // по 10 записей на странице
        return view('home', compact('users'));
    }

    // поиск записей
    public function search(Request $request)
    {
        $s = $request->s;
        //dd($s);
        $users = Phonebook::query()->where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(10);
        return view('home', compact('users'));
    }
}
