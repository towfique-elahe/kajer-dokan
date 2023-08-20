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
    <!-- admin dashboard -->
    <section id="dashboard">
        <div class="container">
            @include('admin.components.sidebar')

            @yield('main')
        </div>
    </section>


    <!-- iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <script>
        const clientInput = document.getElementById('search-client');
        const clientsList = document.getElementById('clients-list');

        clientInput.addEventListener('input', filterClients);

        function filterClients() {
            const searchTerm = clientInput.value.toLowerCase();

            const workerItems = clientsList.querySelectorAll('.client');

            workerItems.forEach(item => {
                const workerName = item.innerText.toLowerCase();
                const searchTermMatch = workerName.includes(searchTerm);

                if (searchTermMatch) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>

    <script>
        const searchInput = document.getElementById('search-bar');
        const categorySelect = document.getElementById('category-select');
        const workersList = document.getElementById('workers-list');

        searchInput.addEventListener('input', filterWorkers);
        categorySelect.addEventListener('change', filterWorkers);

        function filterWorkers() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategory = categorySelect.value;

            const workerItems = workersList.querySelectorAll('.worker-item');

            workerItems.forEach(item => {
                const workerName = item.innerText.toLowerCase();
                const workerCategory = item.dataset.category;
                const searchTermMatch = workerName.includes(searchTerm);
                const categoryMatch = selectedCategory === 'all' || workerCategory === selectedCategory;

                if (searchTermMatch && categoryMatch) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>
