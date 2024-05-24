<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    public function iletisimkaydet(ContentFormRequest $request){
       /* $data = $request->all();
        $data['ip'] = request()->ip();
        */
        /*$validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ],[
            'name.required' => 'Ad Soyad alanı boş bırakılamaz',
            'name.string' => 'Ad Soyad alanı sadece harflerden oluşabilir',
            'name.min' => 'Ad Soyad alanı en az 3 karakter olmalıdır',
            'email.required' => 'Email alanı boş bırakılamaz',
            'email.email' => 'Email formatı uygun değil',
            'subject.required' => 'Konu alanı boş bırakılamaz',
            'message.required' => 'Mesaj alanı boş bırakılamaz',
        ]);*/


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
