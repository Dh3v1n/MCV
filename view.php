<?php require("controller.php"); ?>

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
        <section class="p-16 gap-8 mt-4 place-content-center justify-items-center">
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <table class="text-center">
                        <thead class="bg-red-700 text-xl px">
                            <tr>
                                <th class="font-bold text-white px-4">Model</th>
                                <th class="font-bold text-white px-4">Gambar</th>
                                <th class="font-bold text-white px-4">Kategori</th>
                                <th class="font-bold text-white px-4">Merek</th>
                                <th class="font-bold text-white px-4">Negara Asal</th>
                                <th class="font-bold text-white px-4">Tahun</th>
                                <th class="font-bold text-white px-4"></th>
                                <th class="font-bold text-white px-4"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-neutral-800">
                            <?php
                            $counter = 0;
                            $allMobil = getAllMobil();
                            foreach ($allMobil as $index => $mobil) {
                                $counter++;
                                ?>
                                <tr>
                                    <td class="text-white px-4"><?= $mobil->model ?></td>
                                    <td>
                                        <img src=<?= $mobil->gambar ?> width="150">
                                    </td>
                                    <td class="text-white px-4"><?= $mobil->kategori ?></td>
                                    <td class="text-white px-4"><?= $mobil->merek ?></td>
                                    <td class="text-white px-4"><?= $mobil->negara ?></td>
                                    <td class="text-white px-4"><?= $mobil->tahun ?></td>
                                    <td>
                                        <a href="Edit.php?editID=<?= $index ?>">
                                            <button
                                                class="cursor-pointer bg-neutral-950 text-white font-semibold p-4">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="controller.php?deleteID=<?= $index ?>">
                                            <button
                                                class="cursor-pointer bg-red-700 text-white font-semibold p-4">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-red-700 rounded-2xl">
                <div class="p-4 m-2 bg-neutral-950 rounded-2xl justify-items-center">
                    <a href="add.php"><button
                            class="cursor-pointer bg-red-700 text-white font-bold p-3 rounded-3xl">Tambah Mobil Ke
                            List</button>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>