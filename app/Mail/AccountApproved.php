<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountApproved extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Account Approved')
            ->view('emails.account-approved');
    }

    public function approveAccount($userId)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($userId);

        if ($user) {
            // Periksa apakah akun sudah diapprove sebelumnya
            if ($user->is_approved) {
                // Akun sudah diapprove sebelumnya
                return "Akun sudah diapprove sebelumnya.";
            }

            // Lakukan proses approve akun
            $user->is_approved = true;
            $user->save();

            // Kirim email notifikasi
            Mail::to($user->email)->send(new AccountApproved());

            // Kode lain yang diperlukan setelah pengapprovean akun

            return "Akun berhasil diapprove.";
        } else {
            return "Pengguna tidak ditemukan.";
        }
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Account Approved',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.account-approved',
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
