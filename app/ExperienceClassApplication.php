<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExperienceClassApplication extends Mailable
{
    use Queueable, SerializesModels;
    public $meeting;
    public $nationality;
    public $first_name;
    public $furigana;
    public $furigana2;
    public $street_address;
    public $address;
    public $building_name;
    public $phone_number;
    public $mail_address;
    public $school_history;
    public $school_name;
    public $graduation;
    public $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($graduation,$school_name,$school_history,$mail_address,$phone_number,$building_name,$address,$message, $meeting,$nationality,$first_name,$furigana,$furigana2,$street_address)
    {
        $this->meeting = $meeting;
        $this->nationality = $nationality;
        $this->first_name = $first_name;
        $this->furigana = $furigana;
        $this->furigana2 = $furigana2;
        $this->street_address = $street_address;
        $this->address = $address;
        $this->building_name = $building_name;
        $this->phone_number = $phone_number;
        $this->mail_address = $mail_address;
        $this->school_history = $school_history;
        $this->school_name = $school_name;
        $this->graduation = $graduation;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail_address = $this->mail_address;
        return $this->from($mail_address)->view('send_mail.experience_class_application');
    }
}
