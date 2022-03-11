<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <h2>Medicine Detail</h2>
    <h2>List Medicine by Category</h2>
    <p>ID Category: {{ $id_category }} with name: {{ $name }}</p>
    <hr>
    <p>Total Rows: {{ $getTotalData }}</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Form</th>
                <th scope="col">Restriction Formula</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $li)
                <tr>
                    <td>{{ $li->generic_name }}</td>
                    <td>{{ $li->form }}</td>
                    <td>{{ $li->restriction_formula }}</td>
                    <td>{{ $li->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
