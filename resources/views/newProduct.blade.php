<form action=" " method="post">
{{@csrf_field()}}    

Product Name:<input type="text" name="p_name" value="{{old('p_name')}}"></br>
@error("p_name")
<span class="text danger">{{$message}}</span></br>
@enderror

<input type="submit" value="Add">
</form>