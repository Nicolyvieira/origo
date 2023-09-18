<?php
  
namespace App\Mail;

use Faker\Provider\ar_EG\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
  
class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $name, $emailRem, $assunto, $mensagem ;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public readonly array $data)
    {

    }
  
    public function enviar(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['Email'], $this->data['Nome']),
            subject: $this->data['Mensagem'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.demoMail',
        );
    }
}
