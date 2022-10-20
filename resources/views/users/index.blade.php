<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">image</th>
            <th scope="col">edite</th>
            <th scope="col">delete</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ '/images/users/'.$user->image }}" style="height:100px; width:100px;" alt=""></td>
                <td> <form  action="{{ route('user.edit',$user->id) }}">
                <input type="text" style="display: none;"class="form-control" id="exampleInputavatar1" name="id" value="{{ $user->id }}">
                <button type="submit" class="btn btn-primary">update</button>
                </form>
               </td>
               <td> <form method="post" action="{{ route('user.destroy',$user->id) }}">
                @csrf
                @method('DELETE')
                <input type="text" style="display: none;"class="form-control" id="exampleInputavatar1" name="id" value="{{ $user->id }}">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               </td>
              </tr>
            @endforeach

        </tbody>
      </table>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
