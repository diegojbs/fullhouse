<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class Contacto extends Model
{
    protected $table = 'contactos';
    protected $fillable = ['nombre', 'email', 'telefonos', 'ciudad', 'mensaje', 't_tatos'];

    public function enviarEmail($datos){
        
        // dd($datos->nombre);

        Mail::send('emails.nuevo_contacto', ['datos'=> $datos], function($msj) use ($datos) {
            $msj->subject('Solicitud de informacion');
            $msj->from($datos->email, $datos->nombre);
            $msj->replyTo($datos->email, $datos->nombre);
            $msj->to('fullhouseprefabricados@gmail.com');
        });
    }
}
