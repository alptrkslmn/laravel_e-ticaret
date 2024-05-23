<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    public function iletisimkaydet(Request $request){
       /* $data = $request->all();
        $data['ip'] = request()->ip();
        */
        $newdata =[
            'name'=> Str::title($request->name),
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
            'ip'=> request()->ip(),
        ];

        $sonkaydedilen = Contact::create($newdata);

        return back()->with(['message'=>'Başarıyla Gönderildi']);
    }
}
