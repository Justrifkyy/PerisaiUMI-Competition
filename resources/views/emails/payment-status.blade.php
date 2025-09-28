<!DOCTYPE html>
<html>
<head>
    <title>Update Status Pembayaran</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>Halo, {{ $payment->registration->full_name }}</h2>

    <p>Kami memberitahukan bahwa status pembayaran Anda untuk konferensi LONTARA 2025 telah diperbarui.</p>

    @if ($payment->status == 'Verified')
        <p style="color: green; font-weight: bold;">Status: Pembayaran Diterima (Verified)</p>
        <p>Terima kasih, pendaftaran Anda telah lunas dan Anda resmi terdaftar sebagai peserta.</p>
    @elseif ($payment->status == 'Rejected')
        <p style="color: red; font-weight: bold;">Status: Pembayaran Ditolak (Rejected)</p>
        <p>Alasan: {{ $payment->admin_notes }}</p>
        <p>Mohon untuk mengunggah ulang bukti pembayaran yang sesuai melalui dashboard Anda.</p>
    @endif

    <p>Terima kasih,<br>Panitia LONTARA 2025</p>
</body>
</html>