<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Mobil Epik</title>
</head>

<body class="bg-neutral-800">
    <header>
        <nav class="w-full h-25 bg-red-700 flex items-center justify-between">
            <div class="w-full p-4 bg-neutral-950">
                <h1 class="text-4xl font-bold text-white">Mobil Epik</h1>
            </div>
        </nav>
    </header>
    <main>
        <section class="p-4 gap-8 place-content-center justify-items-center">
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <form method="POST" action="controller.php" class="justify-items-center">
                        <div class="form-row">
                            <label class="text-white font-bold" for="model">Model:</label><br>
                            <input class="text-white bg-neutral-800" type="text" name="model"><br>
                        </div>
                        <div class="form-row justify-items-center">
                            <label class="text-white font-bold" for="img">Gambar Mobil:</label><br>
                            <input class="cursor-pointer bg-neutral-800 text-white p-2 rounded-2xl text-xs" type="file"
                                id="img" name="img" accept="image?*"><br>
                        </div>
                        <div class="form-row">
                            <label class="text-white font-bold" for="kategori">Kategori:</label><br>
                            <input class="text-white bg-neutral-800" type="text" name="kategori"><br>
                        </div>
                        <div class="form-row">
                            <label class="text-white font-bold" for="model">Merek:</label><br>
                            <input class="text-white bg-neutral-800" type="text" name="merek"><br>
                        </div>
                        <div class="form-row">
                            <label class="text-white font-bold" for="kategori">Negara:</label><br>
                            <input class="text-white bg-neutral-800" type="text" name="negara"><br>
                        </div>
                        <div class="form-row">
                            <label class="text-white font-bold" for="kategori">Tahun:</label><br>
                            <input class="text-white bg-neutral-800" type="text" name="tahun"><br>
                        </div>
                        <div class="form-row">
                            <button name="daftar"
                                class="cursor-pointer bg-red-700 text-white font-bold p-3 rounded-3xl mt-4"
                                type="submit">Tambah Mobil Ke
                                List</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <a href="view.php"><button
                            class="cursor-pointer bg-red-700 text-white font-bold p-3 rounded-3xl">Kembali</button>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>