<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    // Constuir elemento base
    public function __construct()
    {
        //
    }

    // Se encarga de establecer todos los parametros del correo
    // como el asunto, destinatario, nombre de la persona que envía, etc.
    // La clase envelope es la que se encarga de definir el sobre del correo
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Example Mail',
        );
    }

    // Contenido del correo, que es la vista que se va a renderizar
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    // Adjuntos del correo, si es que se necesitan
    public function attachments(): array
    {
        return [];
    }
}
