<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Hospital | Login </title>
</head>
<body>
  <div class="bg-gray-100 flex h-screen justify-center items-center ">
    <form method="post" action="{{ route('submit_login') }}"  class=" bg-white shadow-md p-8 rounded">
      @csrf
      @method('POST')
      <div>
        <label for="">Email</label>
        <input type="text" class="shadow-sm appearence-none border rounded w-full p-3" placeholder="Email" name="email" >
        @error('email')
        <div class="w-full p-2 text-xs text-red-300 ">{{ $message }}</div> 
        @enderror
      </div>
      <div>
        <label for="">Mot de passe</label>
        <input type="password" class="shadow-sm appearence-none border rounded w-full p-3" placeholder="*******" name="password">
        @error('password')
        <div class="w-full p-2 text-xs text-red-300 ">{{ $message }}</div> 
        @enderror
      </div>

      <div>
        <button type="submit" class="w-full p-3 shadow-sm rounded-sm text-white bg-blue-300 mt-2 hover:border-2 hover:border-blue-300 hover:bg-white hover:text-gray-400 hover:rounded-lg">Me Connecter</button>
      </div>
    </form>
  </div>

</body>
</html>