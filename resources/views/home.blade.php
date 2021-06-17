<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Records</title>
</head>
<body class="alert-info">
    <nav class="navbar-dark navbar bg-dark navbar-expand-lg ">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand"><h1>CRM</h1></a>
        </div>

        <ul class="navbar-nav me-5">
            <li class="nav-item me-5"><a href="{{route('home')}}" class="nav-link text-white me-5">Home</a></li>
        </ul>
    </nav>

    <div class="container-fluid px-5 mt-5 pt-5 ">
        <div class="row mt-5">
            <div class="col-lg-3 alert-danger border-right border-dark border p-5 shadow-lg">
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name" class="form-control">
                        @error('name')
                            <p class="small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contact" value="{{old('contact')}}" placeholder="Enter your contact no." class="form-control">
                        @error('contact')
                            <p class="small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" value="{{old('email')}}" placeholder="Enter your email" class="form-control">
                        @error('email')
                            <p class="small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" value="{{old('address')}}" placeholder="Enter your address" class="form-control">
                        @error('address')
                            <p class="small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="remarks" placeholder="Give remarks" class="form-control" rows="3">{{old('name')}}</textarea>
                        @error('remarks')
                            <p class="small text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Submit" name="add" class="btn btn-dark w-100">
                    </div>                                                       
                </form>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-8">
                <div class="display-5 mb-2">Records</div>
                <table class="table table-striped table-success table-hover border border-dark shadow-lg">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $rec)
                    <tr>
                        <td>{{$rec->id}}</td>
                        <td>{{$rec->name}}</td>
                        <td>{{$rec->contact}}</td>
                        <td>{{$rec->email}}</td>
                        <td>{{$rec->address}}</td>
                        <td>{{$rec->remarks}}</td>
                        <td><a href="{{route('delete',['id'=>$rec->id])}}" class="btn btn-outline-dark">Del</a></td>
                    </tr>
                    @endforeach


                </table>
            </div>
        </div>
    </div>


</body>
</html>