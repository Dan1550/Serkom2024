<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        .hidden-button {
            display: none; /* Set the button to be hidden */
        }
        .back-button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            color: white;
            background-color: #28a745; /* Green color, you can customize */
            border: none;
            border-radius: 5px;
            display: inline-block;
        }
        .message {
            margin-top: 10px;
            font-size: 16px;
            color: #007bff; /* Blue color, you can customize */
        }
    </style>
</head>
<body>
        <h1>Invoice</h1>
        <p><strong>Nama:</strong> {{ $pesan->nama }}</p>
        <p><strong>Nomor Identitas:</strong> {{ $pesan->nomor_identitas }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $pesan->jenis_kelamin }}</p>
        <p><strong>Tipe Kamar:</strong> {{ $pesan->tipe_kamar }}</p>
        <p><strong>Durasi Penginapan:</strong> {{ $pesan->Durasi }} Hari</p>
        @if(isset($pesan->discount))
        <p><strong>Discount:</strong> {{ $pesan->discount }}%</p>
        @endif
        <p><strong>Total Bayar:</strong> {{ $pesan->total_bayar }}</p>
        
        <script>
        // Fungsi untuk mengunduh PDF otomatis
        function downloadPDF() {
            // Simulasikan klik pada link unduh
            var downloadLink = document.createElement('a');
            downloadLink.href = "{{ route('invoice.show', ['id' => $pesan->id]) }}";
            downloadLink.target = "_blank";
            downloadLink.download = "invoice.pdf";
            downloadLink.click();
        }

        // Panggil fungsi downloadPDF saat halaman dimuat
        window.onload = function() {
            downloadPDF();
            
            // Setelah mengunduh, redirect ke halaman home
            window.location.href = "{{ url('/') }}";
        };
    </script>
</body>
</html>
