<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List Data</title>
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <center>
        <h1>Todo List Data</h1>
        <!-- Table container with a border around it -->
        <div class="border p-3" style="width: 500px;">
            <table class="table table-striped">
                <thead>
                    <tr align="center" class="table-dark">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $res)
                    <tr align="center">
                        <td>{{$res->id}}</td>
                        <td>{{$res->name}}</td>
                        <td>{{$res->email}}</td>
                        <td>
                            <a href="{{route('todo.delete',$res->id)}}" onclick="javascript:return confirm('Are you Sure to delete the Record')"><i class="fa-solid fa-trash fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div>
                {{$data->links()}}
            </div> --}}
        </div>
        
    </center>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
