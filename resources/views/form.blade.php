<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="/pages" method="POST">
    {{ csrf_field() }}
    Name:
    <input type="text" name="name1" /><br />
    Comment:
    <textarea name="text1" id="text1" cols="30" rows="10"></textarea>
    <!--<input type="hidden" name="_method" value="PUT">-->
    <br />
    <input type="submit" value="ADD" />
</form>
</body>
</html>