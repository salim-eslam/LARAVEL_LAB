<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


{{-- migrations  --}}

<body>
    <form action="{{ route('category.show', 1) }}">
        <button>show</button>
    </form>
    <form action="">
        <button>edit</button>
    </form>
    <form action="">
        <button>destroy</button>
    </form>
    <form action="">
        <button>create</button>
    </form>
    <form action="">
        <button>index</button>
    </form>

</body>

</html>
