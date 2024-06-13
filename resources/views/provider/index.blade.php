<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="build.css">
</head>

<body class="bg-sky-300">
    <div class="w-full md:w-3/4 m-auto border-2 border-red-400 mt-5 py-5 px-4 md:px-0">
        <h1 class="text-3xl md:text-5xl text-center font-bold text-black">Dokumentasi Bank EAI</h1>

        <div class="w-full mt-10 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">Data Tabungan</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Tabungan</h3>
                <p class="text-sm">API : GET /tabungan</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Tabungan</h3>
                <p class="text-sm">API : GET /tabungan/{id}</p>
            </div>

            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">Jenis Data Nasabah</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Nasabah</h3>
                <p class="text-sm">API : GET /nasabah</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Nasabah</h3>
                <p class="text-sm">API : GET /nasabah/{id}</p>
            </div>

            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">Data Pembayaran</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Pembayaran</h3>
                <p class="text-sm">API : GET /pembayaran</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Pembayaran</h3>
                <p class="text-sm">API : GET /pembayaran/{id}</p>
            </div>

            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">Kartu Kredit</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Jenis Data Kartu Kredit</h3>
                <p class="text-sm">API : GET /kartu-kredit</p>
                <h3 class="text-lg font-semibold mt-3">Detail Data Kartu Kredit</h3>
                <p class="text-sm">API : GET /kartu-kredit/{id}</p>
            </div>

            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">Data Nasabah</h3>
                <hr class="border-1 border-gray-500 my-2">
                <h3 class="text-lg font-semibold mt-3">List Data Nasabah</h3>
                <p class="text-sm">API : GET /DataNasabah</p>
                <h3 class="text-lg font-semibold mt-3">Detail Rekening Nasabah</h3>
                <p class="text-sm">API : GET /DataNasabah/{id}</p>
            </div>
            

            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">OBJECT WISATA</h3>
                <hr class="border-1 border-gray-500 my-2">
                <div class="space-y-3">
                    <div>
                        <h3 class="text-lg font-semibold">Tampil Seluruh Akun Bank</h3>
                        <p class="text-sm">API : GET /api/obj-wisata</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Tampil Detail Akun Bank</h3>
                        <p class="text-sm">API : GET /api/obj-wisata</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Buat Akun Bank</h3>
                        <p class="text-sm">API : POST /api/obj-wisata</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id_wisata ex : "OP01"</li>
                            <li>nama_objek ex : "North Point"</li>
                            <li>harga_tiket : "100000"</li>
                            <li>saldo : "100000"</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Update Akun Bank</h3>
                        <p class="text-sm">API : Update /api/obj-wisata/{rekening(id)}</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id_wisata ex : "OP01"</li>
                            <li>nama_objek ex : "North Point"</li>
                            <li>harga_tiket : "100000"</li>
                            <li>saldo : "100000"</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Hapus Akun Bank</h3>
                        <p class="text-sm">API : Update /api/obj-wisata/{rekening(id)}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">HOTEL</h3>
                <hr class="border-1 border-gray-500 my-2">
                <div class="space-y-3">
                    <div>
                        <h3 class="text-lg font-semibold">Tampil data pembayaran hotel</h3>
                        <p class="text-sm">API : GET /api/hotel</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Tampil data pembayaran hotel</h3>
                        <p class="text-sm">API : GET /api/hotel</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Buat data pembayaran</h3>
                        <p class="text-sm">API : POST /api/hotel</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "305123460"</li>
                            <li>nama ex : "Suguru"</li>
                            <li>total : "100000"</li>
                            <li>saldo : "100000"</li>
                            <li>paymentStatus : "paid"</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Update data pembayaran</h3>
                        <p class="text-sm">API : Update /api/hotel/{(id)}</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "305123460"</li>
                            <li>nama ex : "Suguru"</li>
                            <li>total : "100000"</li>
                            <li>saldo : "100000"</li>
                            <li>paymentStatus : "paid"</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Hapus data pembayaran</h3>
                        <p class="text-sm">API : Update /api/hotel/{(id)}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">RENTAL MOBIL</h3>
                <hr class="border-1 border-gray-500 my-2">
                <div class="space-y-3">
                    <div>
                        <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran rental mobil</h3>
                        <p class="text-sm">API : GET /api/RentalMobil</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran rental mobil</h3>
                        <p class="text-sm">API : GET /api/hotel</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Buat data pembayaran</h3>
                        <p class="text-sm">API : POST /api/RentalMobil</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "3001101"</li>
                            <li>jenisKartuKredit ex : ""</li>
                            <li>jenisTabungan : "Tahapan"</li>
                            <li>nominal : "1500000"</li>
                            <li>saldo : "1500000000"</li>
                            <li>nama : Ale</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Update data pembayaran</h3>
                        <p class="text-sm">API : Update /api/RentalMobil/{(id)}</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "3001101"</li>
                            <li>jenisKartuKredit ex : ""</li>
                            <li>jenisTabungan : "Tahapan"</li>
                            <li>nominal : "1500000"</li>
                            <li>saldo : "1500000000"</li>
                            <li>nama : Ale</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Hapus data pembayaran</h3>
                        <p class="text-sm">API : Update /api/RentalMobil/{(id)}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>
