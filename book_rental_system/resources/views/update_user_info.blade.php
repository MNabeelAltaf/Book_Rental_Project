<!doctype html>
<html lang="en">

<head>
    <title>Update info</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    @php
        $valid_user = session('valid_user');
        
    @endphp


    @if ($valid_user == 'yes')
        <header>
            @include('header2')
        </header>
    @elseif($valid_user == 'no')
        <header>
            @include('header')
        </header>
    @else
        <header>
            @include('header')
        </header>
    @endif



    <main>
        <div class="container">
            <h2 class="text-center my-5">Edit Profile</h2>
            <div class="row0 w-100  d-flex">
                <img class="dpImg  bg-info " src="{{ asset('storage/' . $img) }}" alt="....">

                <div class="row my-5">

                    {{-- toogle button --}}
                    <div class="d-flex justify-content-end">
                        <label class="switch">
                            <input id="toggleBtn" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>


                    <form method="POST" action="{{ route('edit-data') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value={{ $name }}
                                    id="" aria-describedby="emailHelp"  disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                {{-- <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ $email }}" aria-describedby="emailHelp" required disabled> --}}
                                <h5>{{ $email }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 d-flex ">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" pattern="^(?=.*\d).{8,}$"
                                    title="Password should be at least 8 characters long and contain at least one digit"
                                    id="password"  disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" 
                                    disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="old_password"
                                    placeholder="Enter your old password" id="" required disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Profile Picture</label>
                                <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.png"
                                    id="file"  disabled>
                            </div>
                        </div>

                        <button type="submit" style="display: none;" id="editBtn"
                            class="btn btn-secondary w-25 mb-5">Edit</button>
                    </form>

                </div>





            </div>
        </div>



    </main>
    <footer>
        @include('footer')
    </footer>


    <script>
        // password must be matched with confirm password
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("password_confirmation");

        confirmPassword.addEventListener("input", function() {
            if (confirmPassword.value.length > 0) {
                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity("Passwords do not match");
                } else {
                    confirmPassword.setCustomValidity("");
                }
            }
        });


        // when click on toggle button then input fields become active
        let toggleBtn = document.getElementById('toggleBtn');
        let inputFields = document.querySelectorAll(
            'input[type="text"], input[type="email"] , input[type="password"] ,input[type="file"]');
        let editBtn = document.getElementById('editBtn');
        toggleBtn.addEventListener('change', function() {
            if (this.checked) {
                inputFields.forEach(function(field) {
                    field.disabled = false;
                });
                editBtn.style.display = "block";
            } else {
                inputFields.forEach(function(field) {
                    field.disabled = true;
                });
                editBtn.style.display = "none";
            }

        })
    </script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
