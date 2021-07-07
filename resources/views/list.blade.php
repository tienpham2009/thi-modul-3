<!doctype html>
<html lang="en">
<head>
    <title>list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>


<div class="container" style="max-width: 1450px">
    <div class="card">
        <div class="card-header">
            Danh sach dai ly
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('create') }}" class="btn btn-success ">Them Moi</a>
                    <a href="{{ route('show') }}" class="btn btn-success ">Quay Lai</a>
                </div>

                <div class="col-6">
                    <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

            </div>

            <table class="table" style="text-align: center">
                <thead>
                <tr>
                    <th scope="col">Ma so dai li</th>
                    <th scope="col">Ten dai ly</th>
                    <th scope="col">Dien thoai</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dia chi</th>
                    <th scope="col">Ten nguoi quan li</th>
                    <th scope="col">Trang thai</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($agencys as $agency)
                    <tr>
                        <th scope="row">{{$agency->code}}</th>
                        <td>{{ $agency->name }}</td>
                        <td>{{ $agency->phone }}</td>
                        <td>{{ $agency->email}}</td>
                        <td>{{ $agency->address }}</td>
                        <td>{{ $agency->manger_name }}</td>
                        <td>{{ $agency->status }}</td>
                        <td>
                            <a href="{{ route('delete' , $agency->id) }}" onclick="return confirm('Ban chac chan muon xoa ?')" class="btn btn-danger">Xoa</a>
                            <a href="{{ route('edit' , $agency->id) }}" class="btn btn-primary">Sua</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>
