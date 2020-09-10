
@error('country')
<span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
</span>
@enderror

<form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="country">Страна<br>
    <input type="text" name="slugCountry">Country Slug<br>
    <input type="text" name="city">Город<br>
    <input type="text" name="slugCity">City slug<br>
    <input type="text" name="showplace">Достопримечательность<br>
    <input type="text" name="showslug">Show slug<br>
    Описание: <br>
    <textarea name="desc" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Отправить">
</form>

