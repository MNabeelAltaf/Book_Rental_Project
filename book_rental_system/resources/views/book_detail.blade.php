<!doctype html>
<html lang="en">

<head>
    <title>Book Detail</title>
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
        $email = session('email');
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
            <h1 class="text-center my-3">Book Detail</h1>

            @if (session('rented_limit_error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('rented_limit_error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="post_thumbnail">
                            <img src="{{ asset('assets/images/book_card_img.png') }}" class="card-img-top "
                                alt="image unavailable">
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <h3>Title: {{ $books->title }}</h3>
                        <div class="row ">
                            <div class="col-sm-6">
                                @if ($books->availability_status == 'yes')
                                    <span class="badge text-bg-success p-2">Available</span>
                                @elseif($books->availability_status == 'no')
                                    <span class="badge text-bg-danger p-2">Not Available</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <h3>Author:</h3>
                        <p>{{ $books->author }}</p>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-6 ">
                                <p>Published Date:
                                    {{ \Carbon\Carbon::parse($books->published_date)->format('d-m-Y') }}
                                </p>
                            </div>
                            <div class="col-sm-6 ">
                                <p>Publisher: {{ $books->publisher }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-6">
                                <p>ISBN No: {{ $books->isbn }}</p>
                            </div>
                            <div class="col-sm-6">
                                @if ($books->availability_status == 'yes')
                                    <a class="btn btn-secondary w-50"
                                        href="{{ route('book_rented', ['id' => $books->id]) }}" role="button">Rent
                                        a
                                        Book</a>
                                @elseif ($books->availability_status == 'no')
                                    <a class="btn btn-secondary w-50" style="display: none" href="#"
                                        role="button">Rent a Book</a>
                                @endif
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>




    </main>
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
</body>

</html>
