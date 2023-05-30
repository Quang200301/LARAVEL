<html>
    
<head>
    
</head>

@if(Session::get('success'))
    <div class="alert.alert-success">
        {{Session::get('success')}}
    </div>

@endif
@if(Session::get('fail'))
    <div class="alert.alert-danger">
        {{Session::get('fail')}}
    </div>

@endif
<form action="add" method="POST">
    @csrf
    <input type="text" name="id" placeholder="ID"><br>
    <span style="color:red">@error('id'){{$message}} @enderror</span>
    <br>
    <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
    <span style="color:red">@error('name'){{$message}} @enderror</span><br>
    <input type="text" name="price" placeholder="Price" value="{{old('price')}}"><br>
    <span style="color:red">@error('price'){{$message}} @enderror</span><br>
    <input type="text" name="image" placeholder="Image" value="{{old('image')}}"><br>
    <span style="color:red">@error('image'){{$message}} @enderror</span><br>
    <button type="submit">Gửi</button>
</form>
</html>