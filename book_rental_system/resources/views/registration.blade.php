<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    {{-- custom css file link  --}}
    <link rel="stylesheet" href="{{ asset('assets/styling.css') }}">

</head>

<body>

    @php
        $valid_user = session('valid_user');
    @endphp

    {{-- if user login then he/she will not return to login screen again --}}
    @if ($valid_user == 'yes')
        <script>
            window.location.href = "{{ url('home') }}";
        </script>
    @endif


    <header>
        @include('header')
    </header>
    <main>

        <div class="container">

            @php
                $status = session('status');
                $message = session('message');
                $email_exists = session('email_exists');
            @endphp

            <div class="container my-3 ">
                @if ($status == 'pass')
                    <div class="alert alert-success alert-dismissible fade show my-5" role="alert">
                        <strong>
                            {{-- Coalescing operator --}}
                            {{-- <div>{{ $message ?? '' }}</div> --}}
                            {{ $message }}

                        </strong>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    {{-- script for progress bar --}}
                    <script>
                        // JavaScript to close the alert after 5 seconds (5000 milliseconds) with a progress bar
                        const alertDiv = document.querySelector('.alert');
                        const progressBar = document.querySelector('.progress-bar');

                        // Define the duration (in milliseconds) for the progress bar animation
                        const duration = 5000; // 5 seconds

                        let currentTime = 10;
                        const interval = 200; // Update the progress bar every 10 milliseconds

                        const updateProgressBar = () => {
                            currentTime += interval;
                            const progress = (currentTime / duration) * 100;
                            progressBar.style.width = `${progress}%`;

                            if (currentTime >= duration) {
                                // Close the alert when the animation is complete
                                alertDiv.remove();
                            } else {
                                // Continue updating the progress bar
                                setTimeout(updateProgressBar, interval);
                            }
                        };

                        // Start the progress bar animation
                        updateProgressBar();
                    </script>
                @elseif($email_exists == 'yes')
                    <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
                        <strong>
                            {{-- Coalescing operator --}}
                            {{ $message }}

                        </strong>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    {{-- script for progress bar --}}
                    <script>
                        // JavaScript to close the alert after 5 seconds (5000 milliseconds) with a progress bar
                        const alertDiv = document.querySelector('.alert');
                        const progressBar = document.querySelector('.progress-bar');

                        // Define the duration (in milliseconds) for the progress bar animation
                        const duration = 5000; // 5 seconds

                        let currentTime = 10;
                        const interval = 200; // Update the progress bar every 10 milliseconds

                        const updateProgressBar = () => {
                            currentTime += interval;
                            const progress = (currentTime / duration) * 100;
                            progressBar.style.width = `${progress}%`;

                            if (currentTime >= duration) {
                                // Close the alert when the animation is complete
                                alertDiv.remove();
                            } else {
                                // Continue updating the progress bar
                                setTimeout(updateProgressBar, interval);
                            }
                        };

                        // Start the progress bar animation
                        updateProgressBar();
                    </script>
                @elseif($status == 'fail')
                    <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
                        <strong>
                            {{-- Coalescing operator --}}
                            {{ $message }}

                        </strong>
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    {{-- script for progress bar --}}
                    <script>
                        // JavaScript to close the alert after 5 seconds (5000 milliseconds) with a progress bar
                        const alertDiv = document.querySelector('.alert');
                        const progressBar = document.querySelector('.progress-bar');

                        // Define the duration (in milliseconds) for the progress bar animation
                        const duration = 5000; // 5 seconds

                        let currentTime = 10;
                        const interval = 200; // Update the progress bar every 10 milliseconds

                        const updateProgressBar = () => {
                            currentTime += interval;
                            const progress = (currentTime / duration) * 100;
                            progressBar.style.width = `${progress}%`;

                            if (currentTime >= duration) {
                                // Close the alert when the animation is complete
                                alertDiv.remove();
                            } else {
                                // Continue updating the progress bar
                                setTimeout(updateProgressBar, interval);
                            }
                        };

                        // Start the progress bar animation
                        updateProgressBar();
                    </script>
                @endif
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    {{-- User registration --}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <h2 class="text-center my-5">User Registration</h2>
                                    <form class="my-5" method="POST" action="{{ route('registration') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Name
                                                    </label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="exampleInputName" aria-describedby="emailHelp" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Password</label>


                                                    <input type="password" name="password" class="form-control"
                                                        id="password" pattern="^(?=.*\d).{8,}$"
                                                        title="Password should be at least 8 characters long and contain at least one digit"
                                                        required>

                                                    <div class="input-group-append mt-2">
                                                        <button class="btn btn-outline-secondary" type="button"
                                                            id="togglePassword">
                                                            <span id="toggleText">Show Password</span>
                                                        </button>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp" required>

                                                </div>

                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Confirm
                                                            Password</label>
                                                        <input type="password" name="confirm_password"
                                                            class="form-control" id="password_confirmation" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Upload
                                                    Profile
                                                    Picture <span>(.jpg, .jpeg, .png file supported</>)</span></label>
                                                <input type="file" name="file" class="form-control"
                                                    accept=".jpg,.jpeg,.png" id="file" required>
                                            </div>
                                            <button type="submit"
                                                style="background-color: rgb(135, 133, 133); color:white;"
                                                class="btn">Submit</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-1"></div>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

    </main>



    {{-- confirm password  === password --}}
    <script>
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
    </script>



    <footer>
        @include('footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // show/ hide password
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                var passwordInput = $('#password');
                var toggleText = $('#toggleText');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    toggleText.text('Hide Password');
                } else {
                    passwordInput.attr('type', 'password');
                    toggleText.text('Show Password');
                }
            });
        });
    </script>


</body>

</html>
