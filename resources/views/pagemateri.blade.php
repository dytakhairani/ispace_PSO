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

        <div class="flex items-center flex-row justify-between">
            <h1 class="text-[#283D70] ml-20 text-4xl font-semibold">Matematika 1</h1>
            <div class=" shadow-md mr-20 rounded-full  shadow-black">
                <!-- popup : start -->
                <div x-data="{ open: false }">
                    <img @click="open = true" class="transform transition duration-300 hover:scale-105 cursor-pointer"
                        src="images/btn-add.svg" alt="">
                    <div x-show="open"
                        class=" fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                        <div class="bg-white rounded-[20px]  shadow-xl w-[676px] h-[579px]">
                            <!-- Form untuk posting ke database -->
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                {{-- @foreach ($posts as $post)
                                    <h2>{{ $post->file_name }}</h2>
                                    <p>{{ $post->material_type }}</p>
                                    <p>{{ $post->material_description }}</p>
                                    <!-- Tambahkan kode HTML lainnya untuk menampilkan data posting -->
                                @endforeach --}}
                                <div class=" pr-[44.8px]">
                                    <div class="flex flex-row">
                                        <img src="{{ asset('images/material.png') }}"
                                            class="ml-[34px] w-[21.33px] h-[26.67px] my-auto" alt="">
                                        <div class="ml-[22.6px] text-[#283D70] font-bold my-[27px]">
                                            Share your material here!
                                        </div>
                                        <div class="flex justify-end ml-auto">
                                            <button type="button" @click="open = false">
                                                <img src="{{ asset('images/close.png') }}" alt="">
                                            </button>
                                        </div>
                                        <img src="" alt="">
                                    </div>
                                </div>

                                <div class="pl-[83px] pr-[93px]">

                                    <div>
                                        <label for="owner"
                                            class="block text-[#283D70] font-bold text-[16px] mb-[8px]">Owner
                                            Name:</label>
                                        <input type="text" name="owner" id="owner"
                                            class="w-full px-3 py-2 bg-[#F8F1E9] h-[39px] rounded-[20px] border  focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            value="{{ old('uploader', Auth::user()->name) }}" readonly>
                                    </div>

                                    <div>
                                        <label for="file_name"
                                            class="block text-[#283D70] font-bold text-[16px] mb-[8px]">File
                                            Name:</label>
                                        <input type="text" name="file_name" id="file_name"
                                            class="w-full px-3 py-2 bg-[#F8F1E9] h-[39px] rounded-[20px] border  focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>

                                    <div class="mb-[16px]">
                                        <label for="material_type"
                                            class="block text-[#283D70] font-bold text-[16px] mb-[8px]">Material
                                            Type</label>
                                        <select name="material_type" id="material_type"
                                            class="w-full bg-[#F8F1E9] h-[39px] rounded-[20px] px-3 py-2 border  focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                            <option value="type1">Notes</option>
                                            <option value="type2">Video</option>
                                            <option value="type3">Quiz</option>
                                        </select>
                                    </div>
                                    <div class="mb-[16px]">
                                        <label for="material_description"
                                            class="block text-[#283D70] font-bold text-[16px] mb-[8px]">Material
                                            Description</label>
                                        <textarea name="material_description" id="material_description" rows="3"
                                            class="w-full bg-[#F8F1E9] h-[69px] rounded-[20px] px-3 py-2 border  focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            required></textarea>
                                    </div>
                                    <div class="mb-[8px]">
                                        <label for="upload_file"
                                            class="block text-[#283D70] font-bold text-[16px] mb-[8px]">Upload
                                            File</label>
                                        {{-- <input type="file" name="upload_file" id="upload_file"
                                        class="focus:outline-none h-[69px] bg-[#F8F1E9] rounded-[20px] focus:ring-blue-500 focus:border-blue-500"
                                        required> --}}
                                    </div>
                                    <!---->

                                    <div class="flex items-center justify-center w-full">
                                        <label for="upload_file"
                                            class="flex flex-col items-center justify-center w-full h-[69px] border-2 rounded-[20px] bg-[#F8F1E9]">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <img src="images/file-upload.png" alt="">
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 text-[12px]">
                                                    <span class="font-semibold">Input your file
                                                </p>
                                            </div>
                                            <input name="upload_file" id="upload_file" type="file" class="hidden" />
                                        </label>
                                    </div>

                                    <!---->
                                    <div class="flex justify-end flex-col items-center mt-[40px]">
                                        <button type="submit"
                                            class="px-4 py-2 w-[91.02px] bg-[#01AC49] opacity-50 rounded-[20px] text-white font-bold ">Send</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>


                <!-- popup : start -->

            </div>
        </div>

        <div class="relative w-[1146px] overflow-x-auto z-20 mt-12 rounded-[30px]">
            <div class="bg-[#D9D9D9]/[0.47] w-[1080px] top-5 z-0 left-[3%] absolute rounded-full h-[49px] mx-[#42px]">
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
                @foreach ($ecak as $post)
                    <tbody>
                        <tr class="bg-white">

                            <th scope="row"
                                class="pl-[76px] ml-3 w-64 flex flex-row gap-2 justify-start text-left py-4 font-medium whitespace-nowrap ">
                                <img src="images/file-text-icon.svg" alt="">
                                <a href="{{ route('post.show', ['id' => $post]) }}">
                                    <h1 class="mt-2">
                                        {{ $post->file_name }}
                                    </h1>
                                </a>
                            </th>

                            <td class="px-6 py-4 ">
                                <h1 class="rounded-full mx-auto  bg-[#F9DAAB] w-[65px]">{{ $post->material_type }}</h1>
                            </td>
                            <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                                <h1>{{ $post->owner }}</h1>
                            </td>
                            <td class="px-6 py-4 text-left text-[#7988a8] font-light">
                                {{ $post->created_at }}
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
                                            <a id="downloadBtn" href="{{ url('/download/' . $post->id) }}"
                                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200"><i
                                                    class="fa fa-download"></i> Download
                                            </a>
                                        </li>
                                        <div x-data="{ open: false }">
                                            <li><a @click="open = true"
                                                    class="transform transition duration-300 cursor-pointer
                                        block px-4 py-2 text-gray-800 hover:bg-gray-200"><i
                                                        class="fa fa-trash"></i> Delete</a>
                                                <div x-show="open"
                                                    class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-50">
                                                    <div class="bg-white p-6 rounded shadow-xl">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h5><b>Delete File?</b></h5>
                                                        <br>
                                                        <br>
                                                        <div class="group-delete-confirmation" style="">
                                                            <a class="btn rounded-5 d-flex align-items-center justify-content-center"
                                                                style="width: 250px;height: 50px;background-color:#F8F1E9; color: #000000;margin-top: 49px">Are
                                                                you sure you want to delete?</a>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="group-delete-confirmation" style="">
                                                            <a href="/materi/delete/{{ $post->id }}"
                                                                class="btn rounded-5 d-flex align-items-center justify-content-center"
                                                                style="width: 250px;height: 50px;background-color:#68CE93; color: #FFFF;margin-top: 49px">Delete</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                </div>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

        <!-- alert -->

        <div>
            {{-- <button id="downloadBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                Download
            </button> --}}

            <script>
                document.getElementById("downloadBtn").addEventListener("click", function() {
                    var alertDiv = document.createElement("div");
                    alertDiv.className =
                        "bg-white rounded-[30px] border-2 border-[#283D70] pl-[37px] text-[#283D70] w-[586px] h-[94px] fixed top-24 right-8 gap-4";

                    var heading = document.createElement("h1");
                    heading.className = "text-[20px] mb-[6px] mt-[11px] font-bold";
                    heading.textContent = "Download";

                    var contentDiv = document.createElement("div");
                    contentDiv.className = "flex flex-row items-center gap-[7px]";

                    var image = document.createElement("img");
                    image.src = "{{ asset('images/logo-download.png') }}";
                    image.alt = "";

                    var message = document.createElement("h1");
                    message.textContent = "“Bilangan Kompleks” telah berhasil diunduh";

                    // var closeButton = document.createElement("button");
                    // closeButton.className = "ml-auto mt-[-50px] p-2 rounded-full hover:bg-gray-200";
                    // closeButton.innerHTML =
                    //     '<svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1zm5.9 14.7a1 1 0 0 1-1.4 1.4L12 13.42l-4.5 4.5a1 1 0 1 1-1.4-1.42l4.5-4.5-4.5-4.5a1 1 0 0 1 1.4-1.4l4.5 4.5 4.5-4.5a1 1 0 0 1 1.4 1.4L13.42 12l4.5 4.5z"/></svg>';
                    // closeButton.addEventListener("click", function() {
                    //     alertDiv.remove();
                    // });

                    contentDiv.appendChild(image);
                    contentDiv.appendChild(message);
                    // contentDiv.appendChild(closeButton);

                    alertDiv.appendChild(heading);
                    alertDiv.appendChild(contentDiv);

                    document.body.appendChild(alertDiv);

                    setTimeout(function() {
                        alertDiv.remove();
                    }, 3000);
                });
            </script>
        </div>

        <!-- alert -->
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
                                <h1 class="text-lg  text-[#283D70] mb-2 font-normal">Logika dan Struktur Diskrit
                                </h1>
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
