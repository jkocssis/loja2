<!doctype html>
<html>
<head>
    <<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuario</title>

</head>
<body>



<form action="{{route('user.edit',['user'=>$user->id])}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome do Usuario</label>
    <input type="text" name="name" value="{{$user->name}}">

    <label for="">E-mail do Usuario</label>
    <input type="email" name="email" value="{{$user->email}}" >

    <label for="">Senha do Usuario:</label>
    <input type="password" name="password" value="{{$user->email}}" >

    <input type="submit" value="Cadastrar" >
</form>
</td>
</tr>

</table>
</body>
</html>
