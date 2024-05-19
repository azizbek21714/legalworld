<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacCreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LegalworldController extends Controller
{
    public function index()
    {
        //return view('loading');
        return view('legalworld.index');
    }

    public function about()
    {
        return view('legalworld.about');
    }

    public function services()
    {
        return view('legalworld.services');
    }

    public function serviceDetails($number)
    {
        // dd($number);
        // service1.blade
        return view("legalworld.service$number");
    }

    public function privacy()
    {
        return view('legalworld.privacy');
    }

    public function contact()
    {
        return view('legalworld.contact');
    }

    public function contact2(Request $request)
    {
        $apiToken = "5217966594:AAEXkZWIJq8OG7xJgAa0ckkj86Qxz5kPqP0";

        $data = [
            // 'chat_id' => '337775854',
            'chat_id' => '17210609',
            // 'chat_id' => '1376676832',
            'text' => "Отправитель: $request->name $request->surname\n E-mail: $request->email\n Телефон: $request->phone\n Текст сообшение: $request->message"
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        if ($response) {
            return redirect()->back()->withErrors('Ваша заявка успешно сохранена!');
        } else {
            return redirect()->back()->withErrors('Ваша заявка не сохранена!');
        }
    }
}
