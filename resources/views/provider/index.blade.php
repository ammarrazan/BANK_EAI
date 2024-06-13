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
                <p class="text-sm">API : GET api/DataNasabah</p>
                <h3 class="text-lg font-semibold mt-3">Detail Rekening Nasabah</h3>
                <p class="text-sm">API : GET api/DataNasabah/{id}</p>
                
                    <ul>
                        
                        <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                        <p class="text-sm">API : POST api/DataNasabah</p>
                        <p class="text-sm">API : POST api/DataNasabah/{id}</p>
                        <li>id ex : "101"</li>
                        <li>norekening ex: "1112021402"</li>
                        <li>jenisTabungan ex: "Tahapan"</li>
                        <li>activatedDate ex: "2024-04-24"</li>
                        <li>expiredDate ex: "2027-04-24"</li>
                        <li>saldo ex: "100000"</li>
                    </ul>
            
                    <ul>
                        <li>DATA Yang <span class="font-bold">diupdate :</span></li>
                        <p class="text-sm">API : UPDATE api/DataNasabah</p>
                        <p class="text-sm">API : UPDATE api/DataNasabah/{id}</p>
                        <li>id ex : "101"</li>
                        <li>norekening ex: "1112021402"</li>
                        <li>jenisTabungan ex: "Tahapan"</li>
                        <li>activatedDate ex: "2024-04-24"</li>
                        <li>expiredDate ex: "2027-04-24"</li>
                        <li>saldo ex: "100000"</li>
                    </ul>

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
                            <li>BillingID ex : "123456"</li>
                            <li>ReservationID ex : "C02"</li>
                            <li>name ex : "Suguru"</li>
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
                            <li>BillingID ex : "123456"</li>
                            <li>ReservationID ex : "C02"</li>
                            <li>name ex : "Suguru"</li>
                            <li>total : "100000"</li>
                            <li>saldo : "100000"</li>
                            <li>paymentStatus : "paid"</li>
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
                            <li>IDpembayaran ex :'C01' </li>
                            <li>IDpenyewaann ex : '001'</li>
                            <li>metodePembayaran ex: 'tunai'</li>
                            <li>jenisKartuKredit ex : ""</li>
                            <li>nominal : "1500000"</li>
                            <li>tanggalPembayaran ex :'2024-03-25' </li>
                            <li>statusPembayaran ex : 'lunas'</li>


                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Update data pembayaran</h3>
                        <p class="text-sm">API : PUT /api/RentalMobil/{(id)}</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "3001101"</li>
                            <li>IDpembayaran ex :'C01' </li>
                            <li>IDpenyewaann ex : '001'</li>
                            <li>metodePembayaran ex: 'tunai'</li>
                            <li>jenisKartuKredit ex : ""</li>
                            <li>nominal : "1500000"</li>
                            <li>tanggalPembayaran ex :'2024-03-25' </li>
                            <li>statusPembayaran ex : 'lunas'</li>


                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Hapus data pembayaran</h3>
                        <p class="text-sm">API : DELETE /api/RentalMobil/{(id)}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
                <h3 class="text-xl font-bold">asuransi</h3>
                <hr class="border-1 border-gray-500 my-2">
                <div class="space-y-3">
                    <div>
                        <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran asuransi</h3>
                        <p class="text-sm">API : GET /api/asuransi</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran asuransi</h3>
                        <p class="text-sm">API : GET /api/asuransi</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Buat data pembayaran</h3>
                        <p class="text-sm">API : POST /api/asuransi</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "201"</li>
                            <li>rekening ex :'0211402201' </li>
                            <li>nama ex : 'Ali'</li>
                            <li>kategori ex : "kendaraan"</li>
                            <li>jumlah : "60"</li>
                            <li>tagihan ex :'100000' </li>
                            
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Update data pembayaran</h3>
                        <p class="text-sm">API : PUT /api/asuransi/{(id)}</p>
                        <ul>
                            <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                            <li>id ex : "201"</li>
                            <li>rekening ex :'0211402201' </li>
                            <li>nama ex : 'Ali'</li>
                            <li>kategori ex : "kendaraan"</li>
                            <li>jumlah : "60"</li>
                            <li>tagihan ex :'100000' </li>

                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Hapus data pembayaran</h3>
                        <p class="text-sm">API : DELETE /api/asuransi/{(id)}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white border-gray-500 h-auto rounded-lg shadow-lg shadow-gray-400 text-center p-4">
            <h3 class="text-xl font-bold">Biro Tour</h3>
            <hr class="border-1 border-gray-500 my-2">
            <div class="space-y-3">
                <div>
                    <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran Biro Tour</h3>
                    <p class="text-sm">API : GET /api/biro-tour</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Tampil seluruh data pembayaran Biro Tour</h3>
                    <p class="text-sm">API : GET /api/biro-tour/(id)</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Buat data Biro Tour</h3>
                    <p class="text-sm">API : POST /api/biro-tour</p>
                    <ul>
                        <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                        <li>id ex : '1142021402' </li>
                        <li>nama_guider ex : 'Janggar'</li>
                        <li>profile ex : 'Seorang pemandu wisata yang ramah keluarga dengan keahlian dalam merencanakan liburan yang menyenangkan bagi seluruh anggota keluarga.' </li>
                        <li>saldo ex : '4500000' </li>
                        <li>fee ex : '450000' </li>
                        <li>no_guider ex : '114' </li>

                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Update data pembayaran</h3>
                    <p class="text-sm">API : PUT /api/biro-tour/{(id)}</p>
                    <ul>
                        <li>DATA Yang <span class="font-bold">dibutuhkan :</span></li>
                        <li>id ex : '1142021402' </li>
                        <li>nama_guider ex : 'Janggar'</li>
                        <li>profile ex : 'Seorang pemandu wisata yang ramah keluarga dengan keahlian dalam merencanakan liburan yang menyenangkan bagi seluruh anggota keluarga.' </li>
                        <li>saldo ex : '4500000' </li>
                        <li>fee ex : '450000' </li>
                        <li>no_guider ex : '114' </li>

                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Hapus data pembayaran</h3>
                    <p class="text-sm">API : DELETE /api/biro-tour/{(id)}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>
