<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>

        @foreach(config('app.category') as $category)
        <a href="subcategory/{{ ($category['name']) }}">{{strtoupper($category['name'])}}</a><br>
        @endforeach
        
    </body>
    
    
</html>