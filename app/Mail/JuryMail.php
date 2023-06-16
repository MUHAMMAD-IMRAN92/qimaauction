<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JuryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $jury;
    public $auctionId;
    public function __construct($jury, $auctionId)
    {
        $this->jury = $jury;
        $this->auctionId = $auctionId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@mg.bestofyemenauction.com', 'QIMA Coffee')->subject('Best of Yemen 2022 International Jury Cupping')->markdown('jury_email', [
            'jury' => $this->jury,
            'auction_id' => $this->auctionId
        ]);
    }
}
