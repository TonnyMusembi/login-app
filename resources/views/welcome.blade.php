<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
{{-- <h1>Welcome</h1> --}}

<div class="container">
    <div class="m-5">
        <h1 class="alert alert-success">Welcome</h1>
    </div>

<div class="m-5">
    <div class="card">
    <div class="card-body p-5">
        <form  action="" >
            @csrf
            <div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control " name="username" id="">
            </div>
        {{-- </form> --}}


            <div class="form-group">
<label for="username">Full Names</label>
<input type="text" class="form-control " name="Full Names" id="">
            </div>
        {{-- </form> --}}

            <div class="form-group">
<label for="username">Id</label>
<input type="text" class="form-control " name="Id" id="">
            </div>
            <br>
<button class=" btn btn-primary">Save Button</button>
        </form>
    {{-- </div>
    <div>

</div> --}}
</div>

<form action="/foo/bar" method="POST">
    @method('PUT')

    ...
</form>
</body>
</html>