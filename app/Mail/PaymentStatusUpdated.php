<?php

namespace App\Mail;

use App\Models\Payment; // Import model Payment
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PaymentStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    // Buat properti publik untuk menyimpan data payment
    public $payment;

    /**
     * Create a new message instance.
     */
    public function __construct(Payment $payment)
    {
        // Terima data payment saat class ini dibuat
        $this->payment = $payment;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Update Status Pembayaran LONTARA 2025',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Arahkan ke file view yang akan kita buat
        return new Content(
            view: 'emails.payment-status',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
