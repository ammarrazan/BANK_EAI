<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="build.css">
</head>

<body class="bg-sky-300">
    <div class="w-full md:w-1/2 m-auto border-2 border-red-400 mt-5 py-5 px-4 md:px-0">
        <h1 class="text-3xl md:text-5xl text-center font-bold text-black">Dokumentasi Bank EAI</h1>

        <div class="w-full mt-10 space-y-5">
            <div class="w-full md:w-3/4 m-auto bg-white border-gray-500 h-auto md:h-40 rounded-lg shadow-lg shadow-gray-400 text-center p-4 md:p-0">
                <h3 class="text-xl font-bold">Data Tabungan</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Tabungan</h3>
                <p class="text-sm">API : GET /tabungan</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Tabungan</h3>
                <p class="text-sm">API : GET /tabungan/{id}</p>
            </div>

            <div class="w-full md:w-3/4 m-auto bg-white border-gray-500 h-auto md:h-40 rounded-lg shadow-lg shadow-gray-400 text-center p-4 md:p-0">
                <h3 class="text-xl font-bold">Jenis Data Nasabah</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Nasabah</h3>
                <p class="text-sm">API : GET /nasabah</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Nasabah</h3>
                <p class="text-sm">API : GET /nasabah/{id}</p>
            </div>

            <div class="w-full md:w-3/4 m-auto bg-white border-gray-500 h-auto md:h-40 rounded-lg shadow-lg shadow-gray-400 text-center p-4 md:p-0">
                <h3 class="text-xl font-bold">Data Pembayaran</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Pembayaran</h3>
                <p class="text-sm">API : GET /pembayaran</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Pembayaran</h3>
                <p class="text-sm">API : GET /pembayaran/{id}</p>
            </div>

            <div class="w-full md:w-3/4 m-auto bg-white border-gray-500 h-auto md:h-40 rounded-lg shadow-lg shadow-gray-400 text-center p-4 md:p-0">
                <h3 class="text-xl font-bold">Kartu Kredit</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Kartu Kredit</h3>
                <p class="text-sm">API : GET /kartu-kredit</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Kartu Kredit</h3>
                <p class="text-sm">API : GET /kartu-kredit/{id}</p>
            </div>
        </div>
    </div>
</body>

</html>
