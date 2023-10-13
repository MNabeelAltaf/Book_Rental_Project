<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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

        @php
            $valid_user = session('valid_user');
            $message = session('message');
        @endphp

        <div class="container">
            <div class="container my-3 ">

                @if ($valid_user == 'no')
                    <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
                        <strong>
                            <div> {{ $message }} </div>
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
                    {{ session()->forget('valid_user') }}
                @endif

            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    {{-- User login --}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <h2 class="text-center my-5">User Login</h2>

                                    <div class="row">
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-10">

                                            <form method="POST" action={{ route('login') }}>

                                                @csrf
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        name="email" aria-describedby="emailHelp" required>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        id="password" required>

                                                    <div class="input-group-append mt-2">
                                                        <button class="btn btn-outline-secondary" type="button"
                                                            id="togglePassword">
                                                            <span id="toggleText">Show Password</span>
                                                        </button>
                                                    </div>

                                                </div>
                                                <input name="entity" type="hidden" value="user" required>

                                                <button type="submit" class="btn mb-5"
                                                    style="background-color: rgb(135, 133, 133); color:white;">Submit</button>
                                            </form>

                                        </div>
                                        <div class="col-sm-1"></div>

                                    </div>

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
    <br>
    <br>
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
