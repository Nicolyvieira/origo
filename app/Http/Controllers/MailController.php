<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
  
class MailController extends Controller
{
   public function enviaEmail(Request $request)
   {
        Mail::to('origotcc2023@gmail.com')->send(
            new DemoMail([
                "Nome" => $request->input('txtNome'),
                "Email" => $request->input('txtEmail'),
                "Assunto" => $request->input('txtAssunto'),
                "Mensagem" => $request->input('txtMensagem')
            ]));

        return back();
   }
}