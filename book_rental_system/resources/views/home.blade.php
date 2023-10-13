<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    {{-- custom style sheet --}}

    <link rel="stylesheet" href="{{ asset('assets/styling') }}">

</head>

<body>

    @php
        $valid_user = session('valid_user');
        $email = session('email');

        $books = $books ?? null;

        $filter = $filter ?? null;

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
            <div class="row">
                <div class="col-sm-6">
                    <div class="bgTxt">
                        <div class="bgTxt2">
                            <h1 class="mt-4">Book Rental System</h1><br>
                            <p>
                                A platform where various books can be rented effortlessly, providing users with a
                                seamless experience
                            </p>
                            <div class="col-sm-5">
                                <button type="button" class="btn btn-info text-dark"
                                    onclick="scrollToBooks()"><b>Explore Books</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="bgImg">
                        <img src="{{ asset('assets/images/bg-img.jpg') }}" alt="bg-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr>
            <div class="row">
                <h1 class="text-center my-4" id="books">Books</h1>

                @if ($filter != null)
                    <div>
                        <a href="{{route('homeView')}}" class="btn btn-danger my-2">
                            Reset Filter 
                        </a>
                    </div>
                @endif
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item my-1">
                        <h2 class="accordion-header text-center" id="headingTwo">
                            <button class="accordion-button collapsed d-flex justify-content-center align-item-center"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Apply Filters
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('filter')
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <div class="row  d-flex justify-content-evenly ">
                    @if ($books != null)

                        @foreach ($books as $book)
                            <div class="card m-3 book_cards" style="width: 18rem;">
                                <a href="{{ route('book_detail', ['id' => $book->id]) }}">
                                    <img src="{{ asset('assets/images/book_card_img.png') }}" class="card-img-top"
                                        alt="image not available">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->title }}</h5>

                                        @if ($book->availability_status == 'yes')
                                            <span class="badge text-bg-success p-2">Available</span>
                                        @elseif ($book->availability_status == 'no')
                                            <span class="badge text-bg-danger p-2">Not Available</span>
                                        @endif

                                        <hr>
                                        <p class="card-text"><strong>Author: </strong> {{ $book->author }}</p>
                                        <p class="card-text"><strong>Isbn No.</strong> {{ $book->isbn }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    @endif
                </div>
            </div>
            @if ($books != null)
                <div class="text-center my-5">
                    {{ $books->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
        </div>


    </main>
    <footer>
        @include('footer')
    </footer>


    <script>
        function scrollToBooks() {
            const element = document.getElementById('books');
            element.scrollIntoView({
                behavior: 'smooth'
            });
        }
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
