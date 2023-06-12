<!-- resources/views/profile.blade.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

@include('components.headertailwind')


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">{{ __('Full Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name"
                            value="{{ old('name', $user->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control" name="email"
                            value="{{ old('email', $user->email) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" value="{{ old('password', $user->password) }}" type="password" class="form-control"
                                name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="nrp">{{ __('NRP') }}</label>
                            <input id="nrp" type="number" value="{{ old('nrp', $user->nrp) }}" class="form-control"
                                name="nrp" required>
                        </div>

                        <div class="form-group">
                            <label for="date">{{ __('Date') }}</label>
                            <input id="date" type="date" value="{{ old('date', $user->date) }}" class="form-control"
                                name="date" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div style="font-family: 'Poppins', sans-serif;" class="bg-[#F2F2F2]">
    <div class="mx-[234px] py-[90px]">
        <div class="flex flex-row gap-[134px]">
            <div class="flex justify-center items-center mb-24">
                <div class="w-[237px] h-[237px] relative">
                    <img id="img-preview" src="images/placeholder.png" class="w-[237px] rounded-full h-[237px]"
                        src="" alt="">
                    <input id='image' class="rounded-full" type='file' name='image' onchange="loadFile(event)"
                        hidden />
                    <button class="text-white mb-2 rounded-full absolute bottom-2 right-2 space-x-4" id='buttonid'
                        type='button' value='' href=""><img class="rounded-full" src="images/cam.svg"
                            alt=""></button>
                </div>
            </div>
            <div class="flex gap-11 flex-col">
                <form action="{{ route('profile.update') }}" method="POST">
                    {{ method_field('PUT') }}
                    {{-- <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                        <p class="font-bold">Informational message</p>
                        @if (session('success'))
                            <div class=" text-sm">
                                {{ session('success') }}
                            </div>
                        @endif
                      </div> --}}

                    @csrf
                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black" for="Full Name">Full Name</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="w-[553px] pr-10 h-[50px] shadow-md pl-4 shadow-black rounded-xl">
                            <img class="absolute bottom-[26%] right-4" src="images/Edit.svg" alt="">
                        </div>
                    </div>
                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black" for="email">Email</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="email" name="email" id="email" value="{{ $user->email }}"
                                class="w-[553px] pr-10 h-[50px] shadow-md pl-4 shadow-black rounded-xl">
                            <img class="absolute bottom-[26%] right-4" src="images/Edit.svg" alt="">
                        </div>
                    </div>
                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black" for="nrp">NRP</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="text" name="nrp" id="nrp" value="{{ $user->nrp }}"
                                class="w-[553px] pr-10 h-[50px] shadow-md pl-4 shadow-black rounded-xl">
                            <img class="absolute bottom-[26%] right-4" src="images/Edit.svg" alt="">
                        </div>
                    </div>
                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black" for="date">Date of Birth</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="date" name="date" id="date" value="{{ $user->date }}"
                                class="w-[553px] pr-4 h-[50px] appearance-none shadow-md text-[##9ca3af] pl-4 shadow-black rounded-xl">
                        </div>
                    </div>
                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black" for="password">Password</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="password" name="password" id="password"
                                class="w-[553px] pr-10 h-[50px] shadow-md pl-4 shadow-black rounded-xl">
                            <img class="absolute bottom-[26%] right-4" src="images/Edit.svg" alt="">
                        </div>
                    </div>

                    <div class="flex gap-3 flex-col">
                        <label class="ml-4 font-semibold text-sm text-black"
                            for="password_confirmation">Password</label>
                        <div class="w-[553px] h-[50px] relative">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="w-[553px] pr-10 h-[50px] shadow-md pl-4 shadow-black rounded-xl">
                            <img class="absolute bottom-[26%] right-4" src="images/Edit.svg" alt="">
                        </div>
                    </div>

                    <div class="flex flex-row justify-center mt-[38px]">
                        <button type="submit"
                            class="w-[193px] flex justify-center font-light items-center text-white rounded-[25px] bg-[#FABB5A] hover:bg-[#68CE93] h-[54px]">Update
                            Profil</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- <script>
        document.getElementById('buttonid').addEventListener('click', openDialog);

        function openDialog() {
            document.getElementById('image').click();
        }



        let loadFile = function(e) {
            let image = document.getElementById('img-preview');
            image.src = URL.createObjectURL(e.target.files[0]);
        }
    </script> --}}
</div>

<!-- resources/views/profile.blade.php -->




<!-- resources/views/profile/show.blade.php -->




{{-- <div class="container">
    <h1>Profil</h1>
    <form action="{{ route('profile.update') }}" method="POST">
        {{ method_field('PUT') }}
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="nrp">NRP:</label>
            <input type="text" name="nrp" id="nrp" value="{{ $user->nrp }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Tanggal:</label>
            <input type="date" name="date" id="date" value="{{ $user->date }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Profil</button>
    </form>
</div> --}}
