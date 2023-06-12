@include('components.headertailwind')


<div class="pl-[144px] w-full h-max bg-[#F2F2F2] py-[32px]">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{-- <h1 class="font-weight-bold" style="font-size: 40px; color: #283D70">
                            Halo, {{ Auth::user()->name }}
                        </h1> --}}

    <div class="mb-[32px]">
        <h1 class="font-bold text-[40px] text-[#283D70] ">Halo, {{ Auth::user()->name }}</h1>
        <p class="text-[14px] text-[#283D70]">Welcome to iSpace! </p>
    </div>

    <!-- semester 1-->
    <div>
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
                        <a class="swiper-button-prev-unique-1 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-1" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container one">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 1)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}</h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.one", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-one",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-1',
                    prevEl: '.swiper-button-prev-unique-1'
                }

            });
        </script>
    </div>
    <!-- semester 1-->

    <!-- semester 2-->
    <div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 2</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique-2 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-2" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container two">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 2)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}</h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.two", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-two",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-2',
                    prevEl: '.swiper-button-prev-unique-2'
                }

            });
        </script>
    </div>
    <!-- semester 2-->

    <!-- semester 3-->
    <div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 3</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique-3 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-3" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container three">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 3)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}
                                        </h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.three", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-three",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-3',
                    prevEl: '.swiper-button-prev-unique-3'
                }

            });
        </script>
    </div>
    <!-- semester 3-->

    <!-- semester 4-->
    <div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 4</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique-4 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-4" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container four">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 4)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}
                                        </h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.four", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-four",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-4',
                    prevEl: '.swiper-button-prev-unique-4'
                }

            });
        </script>
    </div>
    <!-- semester 4-->

    <!-- semester 5-->
    <div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 5</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique-5 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-5" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container five">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 5)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}
                                        </h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.five", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-five",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-5',
                    prevEl: '.swiper-button-prev-unique-5'
                }

            });
        </script>
    </div>
    <!-- semester 5-->

    <!-- semester 6-->
    <div>
        <div>
            <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                <div class="flex flex-row justify-around items-center pt-6">
                    <div
                        class="ring-1 ring-[#142F64] w-[106px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                        <h1 class="text-[#142F64] font-medium">Semester 6</h1>
                    </div>
                    <div class="w-[845px] fill-[#DADADA]">
                        <hr class="bg-[#DADADA] h-1">
                    </div>
                    <div class="flex gap-4 mr-[-15px]">
                        <a class="swiper-button-prev-unique-6 swiper-button-disabled" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-left"></i>
                        </a>
                        <a class="swiper-button-next-unique-6" href="#">
                            <i style="color: #898A8D;" class="fa-solid fa-2x fa-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="swiper  swiper-container six">
                    <div class="flex swiper-wrapper  z-10 flex-row mt-4 justify-start">
                        @foreach ($folder as $matkul)
                            @if ($matkul->folderSemester == 6)
                                <a href="/materi"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src="images/uwong.svg" alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] mb-2 font-normal">{{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}
                                        </h1>
                                    </div>
                            @endif
                        @endforeach
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper1 = new Swiper(".swiper-container.six", {
                slidesPerView: 6,
                spaceBetween: 34,
                loop: false,
                pagination: {
                    el: ".swiper-pagination-six",
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-unique-6',
                    prevEl: '.swiper-button-prev-unique-6'
                }

            });
        </script>
    </div>
    <!-- semester 6-->

</div>
