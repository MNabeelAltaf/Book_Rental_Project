<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Use the meta tag to refresh the page after 120 seconds (adjust the "content" value as needed) -->
    {{-- <meta http-equiv="refresh" content="10"> --}}

    <link rel="stylesheet" href="{{ asset('assets/styling.css') }}">


</head>

<body>

    @php
        $name = session()->has('name') ? session('name') : null;
        $email = session()->has('email') ? session('email') : null;
        // status that rented book has added to profile
        $status = session()->has('book_rented') ? session('book_rented') : null;
      
        $rented_books = $rented_books ?? null;


    @endphp

    <main>

        @if ($email != null)
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('homeView') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($status != null)
                            <div class="alert alert-success">
                                {{ session('book_rented') }}
                                {{ session()->forget('book_rented') }}
                            </div>
                        @endif

                        <div class="col-lg-4">
                            <div class="card mb-4">

                                <div class="card-body text-center">

                                    <img class="img-thumbnail" src="{{ asset('storage/' . $user_dp) }}"
                                        alt="{{ $email }}'s Profile Image">

                                    <p class="my-3">Name: {{ $name }}</p>
                                    <p class="my-3">Email: {{ $email }}</p>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="d-flex justify-content-end align-items-center  ">
                                                    <a href={{ route('logout') }} title="Logout" class="mx-4 my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor"
                                                            class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                                            <path fill-rule="evenodd"
                                                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                                        </svg>&nbsp;
                                                        <span
                                                            class="d-flex justify-content-end align-items-center">Logout</span>
                                                    </a>
                                                    <a href="{{ route('update_user_info') }}" title="Edit info"
                                                        class="mx-4 my-2">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg> &nbsp;
                                                        <span class="d-flex justify-content-end align-items-center">Edit
                                                            Info</span>
                                                    </a>
                                                </div>
                                                <br>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <h5 class="text-center my-2">Books Rented </h5>
                                        <hr>
                                        @if ($rented_books != null)
                                            @foreach ($rented_books as $books)
                                                <div class="card m-1 book_cards" style="width: 15rem;">
                                                    <a
                                                        href="{{ route('rented_book_detail', ['rented_book_id' => $books->id]) }}">
                                                        <div style="display: flex; justify-content: center;">
                                                            <img style="width: 50%;"
                                                                src="{{ asset('assets/images/book_card_img.png') }}"
                                                                class="card-img-top" alt="image unavailable">
                                                        </div>
                                                        <div class="card-body">
                                                            <span class="card-text">{{ $books->title }}</span>
                                                            <hr>
                                                            <span class="card-text">
                                                                <strong>Author: </strong>{{ $books->author }}
                                                            </span>
                                                            <br>
                                                            <span class="card-text">
                                                                <strong>Isbn: </strong>{{ $books->isbn }}
                                                            </span>
                                                            <br>
                                                            <span class="card-text">
                                                                <strong>Rented Date:
                                                                    <br></strong>{{ \Carbon\Carbon::parse($books->rented_date)->format('d-m-Y') }}
                                                            </span>

                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @elseif($rented_books == null)
                                            <h5 class="text-center my-2">No Book Rented</h5>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                @include('footer');
            </footer>
        @else
            <h2 class="text-center m-5">Not Registered</h2>
        @endif



    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
