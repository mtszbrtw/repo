
<form method="post"  action="{{ route('cars.update',['id'=>$cars->id]) }}">
    edytujesz rekord id {{ $cars->id }}<br>
@csrf
@method('put')
<label for="title"></label><input value="{{ $cars->details }}" type="text" name="details" placeholder="Podaj tytuł" required><br>
<label for="description"></label><input name="client" placeholder="podaj opis" required type="text"
                                        value="{{ $cars->client }}"><br>
<input type="submit" value="edytuj">
</form>
