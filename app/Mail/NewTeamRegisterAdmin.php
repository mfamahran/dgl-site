<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewTeamRegisterAdmin extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $tag;
    public $logo;
    public $created;

  /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tag, $logo, $created)
    {
        //

      $this->name = $name;
      $this->tag = $tag;
      $this->logo = $logo;
      $this->created = $created;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.admin_new_team_register');
    }
}
