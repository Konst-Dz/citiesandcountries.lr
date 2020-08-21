
<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="country" value="{{$city->country->name}}">Страна<br>
    <input type="text" name="slugCountry"value="{{$city->country->slug}}">Country Slug<br>
    <input type="text" name="city" value="{{$item->city->name}}">Город<br>
    <input type="text" name="slugCity" value="{{$item->city->slug}}">City slug<br>
    <input type="text" name="showplace" value="{{$item->name}}">Достопримечательность<br>
    <input type="text" name="showslug" value="{{$item->slug}}">Show slug<br>
    Описание: <br>
    <textarea name="desc" id="" cols="30" rows="10">{{$item->desc}}</textarea><br>
    <input type="submit" value="Отправить">
</form>
