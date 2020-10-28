<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="{{route("books.store")}}" method="POST">
            @csrf
            @method('POST')
            <div>
                <label for="title">TITOLO</label>

                <input type="text" name="title" placeholder="Titolo" id="title">
            </div>

            <div>
                <label for="author">AUTORE</label>
                <input type="text" name="author" placeholder="Autore" id="author">
            </div>
            
            <div>
                <label for="edition">EDITION</label>
                <input type="text" name="edition" placeholder="edition" id="edition">
            </div>

            <div>
                <label for="genre">GENRE</label>
                <input type="text" name="genre" placeholder="genre" id="genre">
            </div>
            
            <div>
                <label for="image">URL IMAGE</label>
                <input type="text" name="image" placeholder="image" id="image">
            </div>
            
            <div>
                <label for="year">ANNO PUBBLICAZIONE</label>
                <input type="date" name="year"  id="year">
            </div>

            <div>
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" placeholder="isbn" id="isbn">
            </div>
            
            <div>
                <label for="pages">PAGES</label>
                <input type="text" name="pages" placeholder="pages" id="pages">
            </div>

            <input type="submit" value="save">
        </form>  
    </body>
</html>