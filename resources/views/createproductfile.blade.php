<form action=" " method="post">
{{@csrf_field()}}    

Product Name:<input type="text" name="p_name" value="{{old('p_name')}}"></br>
@error("p_name")
<span class="text danger">{{$message}}</span></br>
@enderror

Product ID:<input type="text" name="p_id" value="{{old('p_id')}}"></br>
@error("p_id")
<span class="text danger">{{$message}}</span></br>
@enderror

Customer Phone:<input type="text" name="c_phone" value="{{old('c_phone')}}"></br>
@error("c_phone")
<span class="text danger">{{$message}}</span></br>
@enderror

<input type="submit" value="Add">
</form>