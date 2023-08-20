<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <!-- worker dashboard -->
    <section id="dashboard">
        <div class="container">
            <!-- sidebar -->
            @include('worker.components.sidebar')

            <!-- main section -->
            @yield('main')
        </div>
    </section>

    <!-- iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- html2pdf.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <!-- generates pdf file -->
    <script>
        document.getElementById('download-section-pdf-btn').addEventListener('click', function() {
            const sectionToDownload = document.getElementById('section-to-download');

            const opt = {
                margin: 10,
                filename: 'resume.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            // Use html2pdf.js to generate the PDF
            html2pdf().set(opt).from(sectionToDownload).save();
        });
    </script>
</body>

</html>
