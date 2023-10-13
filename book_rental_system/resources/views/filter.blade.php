<!doctype html>
<html lang="en">

<head>
    <title>Filters</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

    <main>

        <div class="container">
            <form action="{{ route('filter') }}" method="POST">
                @csrf
            <div class="row">
                    <div class="col-sm-3 my-1">
                        <input type="text" name="book_title" placeholder="Book Title" class="form-control"
                            id="book_title" value="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-3 my-1">
                        <input type="text" name="author" placeholder="Author" class="form-control" id="author"
                            value="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-3 my-1">
                        <input type="text" name="publisher" placeholder="Publisher" class="form-control"
                            id="publisher" value="" aria-describedby="emailHelp">
                    </div>
                    <div class="col-sm-3 my-1">
                        <input type="date" name="published_date" placeholder="Published Date" class="form-control"
                            value="" id="published_date" aria-describedby="emailHelp" max="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <div class="d-flex justify-content-center align-items-center ">
                        <button type="submit" class="btn btn-secondary w-25 my-1 mt-4">Apply</button>
                    </div>
                </div>
            </form>
        </div>

    </main>


</body>

</html>
