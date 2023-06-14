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
        @include('components.headertailwind_pagemateri')
    </nav>

    <div class="mx-[147px] py-[50px]">
        @if ($posts->isEmpty())
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                </div>
                <div class="flex flex-row">
                    <img src={{ asset('/images/searchfile.png') }} alt="" class="ml-[117px] mt-[50px]">
                    <h1 class="font-medium text-[22px] flex items-center ml-[101px]">Kata yang anda cari tidak dapat
                        ditemukan</h1>
                </div>
            </div>
        @else
            <div class="flex items-center flex-row justify-between">
                <div class="mb-[10px]">
                    <h1 class="font-bold text-[40px] text-[#283D70] ">Halo, {{ Auth::user()->name }}</h1>
                    <p class="text-[14px] text-[#283D70]">Welcome to iSpace! </p>
                </div>
                <div class=" shadow-md mr-20 rounded-full  shadow-black">
                    <!-- popup : start -->
                    <div x-data="{ open: false }">
                        <img @click="open = true"
                            class="transform transition duration-300 hover:scale-105 cursor-pointer"
                            src="images/btn-add.svg" alt="">
                        <div x-show="open"
                            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded shadow-xl">
                                <!-- Form untuk posting ke database -->
                                {{-- <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    {{-- @foreach ($posts as $post)
                                    <h2>{{ $post->file_name }}</h2>
                                    <p>{{ $post->material_type }}</p>
                                    <p>{{ $post->material_description }}</p>
                                    <!-- Tambahkan kode HTML lainnya untuk menampilkan data posting -->
                                @endforeach --}}
                                    <div class="mb-4">
                                        <label for="file_name" class="block text-gray-800 font-bold mb-2">File
                                            Name:</label>
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
                                            <option value="Notes">Notes</option>
                                            <option value="Video">Video</option>
                                            <option value="Quiz">Quiz</option>
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
                                            class="focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-500 text-white font-bold rounded">Send</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>


                    <!-- popup : start -->

                </div>
            </div>

            <div class="relative w-[1146px] overflow-x-auto z-20 mt-12 rounded-[30px]">
                <div
                    class="bg-[#D9D9D9]/[0.47] w-[1080px] top-5 z-0 left-[3%] absolute rounded-full h-[49px] mx-[#42px]">
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
                                Mata Kuliah
                            </th>
                            <th scope="col"
                                class="w-32 px-6  pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                                File Type
                            </th>
                            <th scope="col"
                                class="w-36 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                                Owner
                            </th>
                            <th scope="col"
                                class="w-32 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                                Last Modified
                            </th>
                            <th scope="col"
                                class="w-32 px-6 pb-3 font-normal text-lg text-[#283D70] relative pt-[30px]">
                                File size
                            </th>
                        </tr>
                    </thead>

                    <!-- Tambahkan kode HTML lainnya untuk menampilkan data posting -->
                    @foreach ($posts as $p)
                        <tbody>
                            <tr class="bg-white">
                                <th scope="row"
                                    class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                                    <img src="images/file-text-icon.svg" alt="">
                                    <a href="/page/{{ $p->id }}">
                                        <h1 class="mt-2">
                                            {{ $p->file_name }}
                                        </h1>
                                    </a>
                                </th>
                                <td class="px-6 py-4 ">
                                    <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[130px]">{{ $p->folderNama }}
                                    </h1>
                                </td>
                                <td class="px-6 py-4 ">
                                    <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">{{ $p->material_type }}
                                    </h1>
                                </td>
                                <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                                    <h1>{{ $p->owner }}</h1>
                                </td>
                                <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                                    {{ $p->created_at }}
                                </td>
                                <td class="px-6  py-4 text-[#7988a8] relative  font-light">
                                    113 KB
                                    <div x-data="{ open: false }" class="relative">
                                        <div @click="open = !open" class="  cursor-pointer">

                                            <div x-show="!open" href=""><i
                                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i>
                                            </div>
                                            <div x-show="open" href=""><i
                                                    class="fa-solid absolute bottom-[39%] left-[70%] fa-ellipsis-vertical"></i>
                                            </div>
                                        </div>

                                        <ul x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 py-2 w-48 bg-white rounded shadow-xl z-10">
                                            <li>
                                                <a id="downloadBtn" href="{{ url('/download/' . $p->id) }}"
                                                    class="block px-4 py-2 text-gray-800 hover:bg-gray-200"><i
                                                        class="fa fa-download"></i> Download
                                                </a>
                                            </li>
                                            <div x-data="{ open: false }">
                                                <li><a @click="open = true"
                                                        class="transform transition duration-300 cursor-pointer
                                                            block px-4 py-2 text-gray-800 hover:bg-gray-200"><i
                                                            class="fa fa-trash"></i> Delete</a>
                                                    @if ((Auth::user()->name == $p->owner) || (Auth::user()->name == "Admin"))
                                                    <div x-show="open"
                                                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                                                        <div class="bg-white w-[433px] h-[379px] rounded-[20px] shadow-xl">
                                                            <button @click="open = false"
                                                                class="absolute right-[510px] top-[170px]">
                                                                <!-- Tambahkan ikon close di sini, misalnya menggunakan font awesome -->
                                                                <img src="images/close.png" alt="">
                                                            </button>

                                                            <h5
                                                                class="text-[#283D70] font-bold text-[20px] mb-[35px] mt-[66px]">
                                                                Delete File?</h5>
                                                            <div
                                                                class="mx-auto flex items-center justify-center w-[317.7px] h-[45.17px] bg-[#F8F1E9] rounded-[20px]">
                                                                <p class="text-black text-[14px]">Are you sure you want to
                                                                    delete?</p>
                                                            </div>
                                                            <div
                                                                class="bg-[#68CE93] w-[78.96px] h-[26.47px] mx-auto rounded-[20px] flex justify-center items-center mt-[160.8px]">
                                                                <a href="/materi/delete/{{ $p->id }}"
                                                                    class="text-white font-bold text-[16px]">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <!--pop up bukan owner-->
                                                    <div x-show="open"
                                                    class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                                                        <div class="bg-white w-[433px] h-[379px] rounded-[20px] shadow-xl">
                                                            <button @click="open = false"
                                                                class="absolute right-[510px] top-[170px]">
                                                                <!-- Tambahkan ikon close di sini, misalnya menggunakan font awesome -->
                                                                <img src="images/close.png" alt="">
                                                            </button>

                                                            <h5
                                                                class="text-[#283D70] font-bold text-[20px] mb-[35px] mt-[66px]">
                                                                WARNING</h5>
                                                            <div
                                                                class="mx-auto flex items-center justify-center w-[317.7px] h-[45.17px] bg-[#F8F1E9] rounded-[20px]">
                                                                <p class="text-black text-[14px]">Sorry you are not the owner of the file</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    @endif
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @endif


    </div>


</body>

</html>
