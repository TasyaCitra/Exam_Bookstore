<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <form method="POST" action="{{ route('menu.paginate') }}">
                                    @csrf
                                    <select id="page" name="page">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="60">60</option>
                                        <option value="70">70</option>
                                        <option value="80">80</option>
                                        <option value="90">90</option>
                                        <option value="100">100</option>
                                    </select>
                                    <div class="input-group">
                                        <input type="text" name="src" class="form-control" placeholder="Search"
                                            required>
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <tr>
                                    <th>No</th>
                                    <th>Book Name</th>
                                    <th>category Name</th>
                                    <th>Author Name</th>
                                    <th>average rating</th>
                                    <th>Voter</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($value as $b)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $b->book_name }}</td>
                                        <td>{{ $b->category }}</td>
                                        <td>{{ $b->author }}</td>
                                        <td>{{ $b->rating / 100 }}</td>
                                        <td>{{ $b->voter }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
