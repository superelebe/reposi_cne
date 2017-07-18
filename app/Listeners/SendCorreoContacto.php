<?php

namespace App\Listeners;

use App\Events\EnvioCorreo;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\NuevoCorreoContacto;


class SendCorreoContacto
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EnvioCorreo  $event
     * @return void
     */
    public function handle(EnvioCorreo $event)
    {
        //
    }
}
