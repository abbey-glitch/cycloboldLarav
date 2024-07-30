<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
  <div class="wrapper">
    <form action="/user/reguser" method="post">
      @csrf
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li class="error" style="color:red">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <h2>Register</h2>
        <div class="input-field">
          <input type="username" required name="name">
          <label>Enter your username</label>
        </div>
        <div class="input-field">
        <input type="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name = "password" required>
        <label>Enter your password</label>
      </div>
      <button type="submit">Register</button>
      <div class="register">
        <p>Don't have an account? <a href="/login">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>