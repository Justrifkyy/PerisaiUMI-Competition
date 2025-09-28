<!DOCTYPE html>
<html>
<head>
    <title>Update Status Paper</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>Halo, {{ $submission->user->name }}</h2>

    <p>Kami memberitahukan bahwa status untuk paper Anda yang berjudul:</p>
    <p><strong>"{{ $submission->title }}"</strong></p>
    <p>telah diperbarui menjadi:</p>

    @if ($submission->status == 'Accepted')
        <p style="font-size: 1.2em; color: green; font-weight: bold;">Diterima (Accepted)</p>
        <p>Selamat! Paper Anda telah diterima untuk dipresentasikan di LONTARA 2025. Informasi lebih lanjut mengenai jadwal dan persiapan teknis akan kami kirimkan dalam email terpisah.</p>
    @elseif ($submission->status == 'Rejected')
        <p style="font-size: 1.2em; color: red; font-weight: bold;">Ditolak (Rejected)</p>
        <p>Terima kasih atas partisipasi Anda. Setelah melalui proses review, dengan berat hati kami sampaikan bahwa paper Anda belum dapat kami terima saat ini. Kami sangat menghargai usaha Anda dan menantikan partisipasi Anda di kesempatan berikutnya.</p>
    @elseif ($submission->status == 'Revision Needed')
        <p style="font-size: 1.2em; color: orange; font-weight: bold;">Perlu Revisi (Revision Needed)</p>
        <p>Paper Anda memiliki potensi besar, namun reviewer kami menyarankan beberapa perbaikan. Silakan periksa catatan dari reviewer (jika ada) dan unggah kembali versi revisi melalui dashboard Anda.</p>
    @else
        <p style="font-size: 1.2em; color: blue; font-weight: bold;">{{ $submission->status }}</p>
        <p>Status paper Anda telah diperbarui. Silakan cek dashboard Anda untuk informasi lebih lanjut.</p>
    @endif

    @if($submission->admin_notes)
    <div style="background-color: #f5f5f5; border-left: 4px solid #ccc; padding: 15px; margin-top: 20px;">
        <h4 style="margin-top: 0;">Catatan dari Reviewer:</h4>
        <p style="white-space: pre-wrap;">{{ $submission->admin_notes }}</p>
    </div>
    @endif


    <p>Terima kasih,<br>Panitia LONTARA 2025</p>
</body>
</html>