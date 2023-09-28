<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #ffffff, #e6ccff); /* soft background */
        }

        .form-container {
            width: 400px;
            height: 200px;
            margin: 50px auto;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1); /* glassmorphism */
            backdrop-filter: blur(10px); /* glassmorphism */
        }

        .form-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333; /* color combination */
            padding: 20px;
        }

        .form-input {
            width: 80%;
            margin: 10px auto;
            display: block;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 10px;
        }

        .form-button {
            width: 80%;
            margin: 10px auto;
            display: block;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(214, 230, 255); /* color combination */
            color: #ffffff; /* color combination */
        }

    </style>
</head>
<body>
@include('sweetalert::alert')
@include('validation.validation')
<div class="form-container">
    <form action="{{route('ramz.confirm')}}" method="post">
        @csrf
        <h1 class="form-title">Enter your password</h1>
        <input type="password" name="password" class="form-input" placeholder="Password" required>
        <button type="submit" class="btn btn-default form-button">Submit</button>
    </form>
    </div>

</body>
</html>
