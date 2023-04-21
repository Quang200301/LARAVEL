<html>
    <body>

  
<form method="post">
@csrf
<label >nhập số thứ 1</label>
<input type="text" name="sothunhat" ><br>
<label >nhập số thứ hai</label>
<input type="text" name="sothuhai" >

<select name="caculator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="%">%</option>
</select>
<input type="submit" value="Ok">


</form>

@if(@isset($tong))
    <div>
    <strong> Kết quả là:{{$tong}}</strong>
    @endif
    </div>

    </body>
</html>
