<?php

namespace App\Http\Controllers;

use App\Models\ContactDB;
use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;


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

    public function company()
    {
        return view('company');
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
        if (!in_array($keywords, (array)$testLog)) {
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
        } else {
            return view('home');
        }
    }

    public function add_company(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:20',
            'adres' => 'required|max:200',
            'cuntry' => 'required|max:50',
        ]);

        $company = new ContactDB();
        $company->name = $request->input('name');
        $company->adres = $request->input('adres');
        $company->cuntry = $request->input('cuntry');
        $company->created_at = date("Y-m-d H:i");

        $company->save();

        $products = ContactDB::all();

        return redirect()->route('product', ['products' => $products->all()]);
    }

    public function delete_company(Request $request, $id)
    {
        $errors = false;

        try {
            $company = ContactDB::find($id);

            $status = true;
            $company->delete();

        }catch (Exception $e){
            $status = false;
        }

        $temp = $status ? "OK" : "NO";
        $respons = array(
            "status" => $temp,
            "error" => $errors,
        );
        echo json_encode($respons);
    }

    public function change_company(Request $request, $id)
    {
        $valid = $request->validate([
            'name' => 'required|min:2|max:20',
            'adres' => 'required|max:200',
            'cuntry' => 'required|max:50',
        ]);

        $company = ContactDB::find($id);

        $company->name = $request->input('name');
        $company->adres = $request->input('adres');
        $company->cuntry = $request->input('cuntry');

        $company->save();

        $products = ContactDB::all();

        return redirect()->route('product', ['products' => $products->all()]);
    }

    public function about_company(Request $request, $id)
    {
        $contacts = Contacts::where('id_company', '=', $id)->get();

        return redirect()->route('about_product', ['$contacts' => $contacts->all()]);
    }
}
