<form method="post"  action="{{ route('cars.create') }}">

    @csrf

    <label for="title"></label><input  type="text" name="client" placeholder="Podaj tytuł" required><br>
    <label for="description"></label><input name="details" placeholder="podaj opis" required type="text"><br>
    <input type="submit" value="dodaj">
</form>


<?php
        echo $cars;

        ?>