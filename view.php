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
                <h1 class="text-4xl font-bold text-white">Mobil Sport Epik</h1>
            </div>
        </nav>
    </header>
    <main>
        <section class="p-16 gap-8 mt-4 md:flex items-center w-full lg:place-content-center ld:justify-items-center">
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <table class="text-center">
                        <thead class="bg-red-700 text-xl px">
                            <tr>
                                <th class="font-bold text-white px-4">#</th>
                                <th class="font-bold text-white px-4">Model</th>
                                <th class="font-bold text-white px-4">Merek</th>
                                <th class="font-bold text-white px-4">Negara Asal</th>
                            </tr>
                        </thead>
                        <tbody class="bg-neutral-800">
                            <tr>
                                <td class="text-white font-bold px-4">1</td>
                                <td class="text-white px-4">400z</td>
                                <td class="text-white px-4">Nissan</td>
                                <td class="text-white px-4">Jepang</td>
                            </tr>
                            <tr>
                                <td class="text-white font-bold px-4">2</td>
                                <td class="text-white px-4">Adventador</td>
                                <td class="text-white px-4">Lamborghini</td>
                                <td class="text-white px-4">Italia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <button class="cursor-pointer bg-red-700 text-white font-bold p-3 rounded-3xl">Tambah Mobil Ke
                        List</button>
                </div>
            </div>
        </section>
    </main>
</body>

</html>