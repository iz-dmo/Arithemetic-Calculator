<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>

<body>
    <div class="container">
        <form action="{{route('formData')}}" method="POST" class="formC">
            @csrf
            <h3 class="offset-3 mb-5 w-25">Calculate Here</h3>
            <div class="form-group">
            <input type="text" name="expression" id="name" class="w-75 px-3  {{$errors->has('name') ? 'is-invalid' : ''}}">
            @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
            @endif
            </div>
            <button class="btn btn-outline-success mt-4" type="submit">Calculate</button>
            @if(isset($result))
                <button class="btn btn-success float-end mt-4">Result = {{$result}}</button>
            @endif
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>