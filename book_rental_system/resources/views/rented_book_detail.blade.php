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


        @if ($email != null)
            @if ($books != null)
                <div class="container">
                    <h1 class="text-center my-3">Rented Book Detail</h1>
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
                                        <p><strong>Rented Date:</strong>
                                            {{ \Carbon\Carbon::parse($books->rented_date)->format('d-m-Y') }}</p>
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
                                        <div>
                                            <a class="btn btn-secondary w-50"
                                                href="{{ route('return_rented_book', ['rented_book_id' => $books]) }}"
                                                role="button">Return
                                                a
                                                Book</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            @elseif($books == null)
            <h2 class="text-center my-4">Book Returned</h2>
            @endif
        @endif



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
