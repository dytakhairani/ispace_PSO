<header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4 bg-[#283D70]">

    <!-- Logo text or image -->
    <div class="flex items-center justify-between mb-4 md:mb-0">
        <a class="ml-[110px]" href="{{ route('home') }}">
            <img class="" src="{{ asset('/images/logonavbar.png ') }}">
        </a>

        <a class="text-black hover:text-orange md:hidden" href="#">
            <i class="fa fa-2x fa-bars"></i>
        </a>
    </div>
    <!-- END Logo text or image -->

    <!-- Search field -->
    <form class="mb-4 w-[449px] md:mb-0 md:w-1/4">
        <label class="hidden" for="search-form">Search</label>
        <input class="bg-grey-lightest border-2 focus:border-orange p-2 rounded-lg shadow-inner w-full"
            placeholder="What lesson do you want to find?" type="text">
        <button class="hidden">Submit</button>
    </form>
    <!-- END Search field -->

    <!-- User menu dropdown -->
    <nav>
        
    </nav>
    <!-- END User menu dropdown -->

</header>
