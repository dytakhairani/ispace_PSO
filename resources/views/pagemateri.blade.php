<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <!-- CDN Tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- dropdown menu -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <title>Our Service</title>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .swiper-button-disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }

    .swiper-button-next-unique .fa-solid .swiper-button-disabled,
    .swiper-button-prev-unique .fa-solid .swiper-button-disabled {
        color: #DADADA;

    }
</style>


<body class="bg-[#ededed] ">
    <nav>
        @include('components.headertailwind')
    </nav>

    <div class="mx-[147px] py-[50px]">
        <div class="flex items-center flex-row justify-between">
            <h1 class="text-[#283D70] ml-20 text-4xl font-semibold">Matematika 1</h1>
            <div class=" shadow-md mr-20 rounded-full  shadow-black">
                <!-- popup : start -->
                <div x-data="{ open: false }">
                    <img @click="open = true" class="transform transition duration-300 hover:scale-105 cursor-pointer"
                        src="images/btn-add.svg" alt="">
                    <div x-show="open"
                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                        <div class="bg-white p-6 rounded shadow-xl">
                            <!-- Form untuk posting ke database -->
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="file_name" class="block text-gray-800 font-bold mb-2">File Name:</label>
                                    <input type="text" name="file_name" id="file_name"
                                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="material_type" class="block text-gray-800 font-bold mb-2">Material
                                        Type:</label>
                                    <select name="material_type" id="material_type"
                                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                        <option value="type1">Type 1</option>
                                        <option value="type2">Type 2</option>
                                        <option value="type3">Type 3</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="material_description"
                                        class="block text-gray-800 font-bold mb-2">Material Description:</label>
                                    <textarea name="material_description" id="material_description" rows="3"
                                        class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500" required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="upload_file" class="block text-gray-800 font-bold mb-2">Upload
                                        File:</label>
                                    <input type="file" name="upload_file" id="upload_file"
                                        class="focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white font-bold rounded">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- popup : start -->

            </div>
        </div>
        <div class="relative overflow-x-auto z-20 mt-12 rounded-[30px]">
            <div class="bg-[#D9D9D9]/[0.47] w-[1300px] top-5 z-0 left-[3%] absolute rounded-full h-[49px] mx-[#42px]">
            </div>
            <table class="w-full  text-sm bg-white text-center text[#283D70]">

                <thead class="text-sm pt-12 font-extralight">
                    <tr>
                        <th scope="col"
                            class="pl-24 text-left w-64 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                            File Name
                        </th>
                        <th scope="col"
                            class="w-32 px-6  pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                            File Type
                        </th>
                        <th scope="col" class="w-36 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                            Owner
                        </th>
                        <th scope="col" class="w-32 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                            Last Modified
                        </th>
                        <th scope="col" class="w-32 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                            File size
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <th scope="row"
                            class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                            <img src="images/file-text-icon.svg" alt="">
                            <h1 class="mt-2">

                            </h1>
                        </th>
                        <td class="px-6 py-4 ">
                            <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">Notes</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            <h1>Syifa Mumtaz</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            December 2022
                        </td>
                        <td class="px-6  py-4 text-[#7988a8] relative  font-light">
                            113 KB
                            <a href=""><i
                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i></a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <th scope="row"
                            class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                            <img src="images/file-text-icon.svg" alt="">
                            <h1 class="mt-2">
                                Matriks dan Determinan
                            </h1>
                        </th>
                        <td class="px-6 py-4 ">
                            <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">Notes</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            <h1>Avisha Nathania</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            October 2022
                        </td>
                        <td class="px-6 py-4 text-[#7988a8] relative  font-light">
                            128 KB
                            <a href=""><i
                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i></a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <th scope="row"
                            class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                            <img src="images/file-vid-icon.svg" alt="">
                            <h1 class="mt-2">
                                Record Fungsi, Limit, dan Kontinu
                            </h1>
                        </th>
                        <td class="px-6 py-4 ">
                            <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">Video</h1>
                        </td>
                        <td class="px-6 text-left py-4 text-[#7988a8] font-light">
                            <h1>Alodia Angelica Hutahaean</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            November 2022
                        </td>
                        <td class="px-6 py-4 text-[#7988a8] relative  font-light">
                            180 KB
                            <a href=""><i
                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i></a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <th scope="row"
                            class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                            <img src="images/file-quiz-icon.svg" alt="">
                            <h1 class="mt-2">
                                Sistem Bilangan Riil
                            </h1>
                        </th>
                        <td class="px-6 py-4 ">
                            <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">Quiz</h1>
                        </td>
                        <td class="px-6 text-left py-4 text-[#7988a8] font-light">
                            <h1>Kurniaman Andreas Zega</h1>
                        </td>
                        <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                            Januari 2020
                        </td>
                        <td class="px-6 py-4 text-[#7988a8] relative  font-light">
                            145 KB
                            <a href=""><i
                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-12">
            <h1 class="text-[#283D70] ml-20 text-2xl font-semibold">Reccomendation</h1>
        </div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 1</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper  mySwiper">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        <a href="/materi"
                            class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </a>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="images/uwong.svg" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                        <div class=" h-[176px] swiper-slide rounded-lg bg-[#F8F1E9]">
                            <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                <img src="{{ asset('images/uwong.svg') }}" alt="">
                            </div>
                            <div class="flex ml-2 justify-start flex-col">
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit</h1>
                                <h1
                                    class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                    Semester 1</h1>
                                <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                <h1 class="text-[8px] ml-1  text-[#283D70]">25</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique',
                    prevEl: '.swiper-button-prev-unique'
                }

            });
        </script>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
            spaceBetween: 34,
            loop: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next-unique',
                prevEl: '.swiper-button-prev-unique'
            }

        });
    </script>
</body>

</html>
