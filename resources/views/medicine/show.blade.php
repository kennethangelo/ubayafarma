
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h2>Medicine Detail</h2>
    @if($message)
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Result</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ID</td>
            <td>{{$message->id}}</td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>{{$message->generic_name}}</td>
          </tr>
          <tr>
            <td>Harga</td>
            <td>{{$message->price}}</td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>{{$message->category->name}}</td>
          </tr>
          <tr>
            <td>Created At</td>
            <td>{{$message->created_at}}</td>
          </tr>    
          <tr>
            <td>Updated At</td>
            <td>{{$message->updated_at}}</td>
          </tr>    
        </tbody>
      </table>
      @else
      <h2>Tidak ada data!</h2>
      @endif
</body>
</html>
