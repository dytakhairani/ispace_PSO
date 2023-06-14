@include('components.headertailwind')


<div class="pl-[144px] w-full h-screen bg-[#F2F2F2] py-[32px]">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-[32px]">
        <h1 class="font-bold text-[40px] text-[#283D70] ">Halo, {{ Auth::user()->name }}</h1>
        <p class="text-[14px] text-[#283D70]">Welcome to iSpace! </p>
    </div>

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
        <div>
            <div>
                <div class="w-[1153px] h-[270px]  mt-3 rounded-[30px] z-20 shadow-md bg-white px-[34px]">
                    <div class="flex flex-row justify-around items-center pt-6">
                        <div
                            class="ring-1 ring-[#142F64] w-[156px] text-sm h-[27px] rounded-full flex justify-center items-center ml-[-15px]">
                            <h1 class="text-[#142F64] font-medium">Hasil Pencarian</h1>
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
                            @foreach ($posts as $matkul)
                                <a href="/m{{ $matkul->folderNama }}"
                                    class="h-[176px]  swiper-slide rounded-lg bg-[#F8F1E9] cursor-pointer hover:opacity-80">
                                    <div class=" h-[63px] bg-[#FABB5A] flex justify-center items-center rounded-t-lg">
                                        <img src={{asset('/images/uwong.svg')}} alt="">
                                    </div>
                                    <div class="flex ml-2 justify-start flex-col">
                                        <h1 class="text-lg  text-[#283D70] my-[8px] font-normal min-h-[2.5rem] leading-[1.25rem] line-clamp-2">
                                            {{ $matkul->folderNama }}
                                        </h1>
                                        <h1
                                            class="rounded-full text-[8px] mb-2 flex justify-center items-center  bg-[#F9DAAB] w-[54px]">
                                            Semester {{ $matkul->folderSemester }}</h1>
                                        <h1 class="text-[8px] ml-1  text-[#76829d]">Total files</h1>
                                        <h1 class="text-[8px] ml-1  text-[#283D70]">{{ $matkul->folderTotalFiles }}
                                        </h1>
                                    </div>
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
    @endif
</div>
