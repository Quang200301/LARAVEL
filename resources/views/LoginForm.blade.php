<html>
        <body>
            <form method="post">
                <lable> Ten</lable>
                @CSRF
                <input type="text" name="ten"/>
                <br>
                <label> Tuoi</label>
                <input type="text" name="tuoi"/>
                <label> Ngay</label>
                <input type="text" name="ngay"/>
                <label> Phone</label>
                <input type="text" name="phone"/> 
                <label> Web</label>
                <input type="text" name="web"/> 
                <label> Địa chỉ</label>
                <input type="text" name="diachi"/> 
                @include('block.error')
                <input type="submit" value="OK"/>
                <div>
                    @if(isset($user))
                    <p>Ten:{{$user['ten']}}</p>
                    <p>Tuoi:{{$user['tuoi']}}</p>
                    <p>Ngay:{{$user['ngay']}}</p>
                    <p>Phone:{{$user['phone']}}</p>
                    <p>Web:{{$user['web']}}</p>
                    <p>Diachi:{{$user['diachi']}}</p>
                    @endif
                </div>
                
            </form>
          
        </body>
    </html>