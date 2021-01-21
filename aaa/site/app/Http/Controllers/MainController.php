<?php

namespace App\Http\Controllers;

use App\Models\ContactDB;
use App\Models\User;
use Illuminate\Http\Request;


class MainController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {

        return view('about_product');
    }

    public function product()
    {
        $reviews = new ContactDB();
        return view('product', ['reviews' => $reviews->all()]);
    }


    public function access_user(Request $request)
    {
        $valid = $request->validate([
            'inputUsernameEmail' => 'required|email|min:5|max:50',
            'inputPassword' => 'required|min:4|max:20'
        ]);

        $login = $request->input('inputUsernameEmail');
        $password = $request->input('inputPassword');
        $testLog = 'mail.sh';
       // if (preg_match("/^[а-яА-Яa-zA-Z0-9_\.\-]+@[а-яА-Яa-zA-Z0-9\-]+\.[а-яА-Яa-zA-Z\-\.]+$/Du", $login) > 0) {
        $keywords = preg_split("/[\s@]+/", $login);
        if(!in_array($keywords, (array)$testLog)){
            $users = User::all();
            $products = ContactDB::all();

            foreach ($users as $u) {
                $a = strcmp($u->email, $login);
                $b = strcmp($u->password, $password);
                if ($a == 0 && $b == 0) {
                    return view('product', ['products' => $products->all()]);
                } else {
                    return view('home');
                }
            }
        }else{
            return view('home');
        }
    }
}
