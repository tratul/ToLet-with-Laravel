<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($reg as $row)
      <div>
        {{$row['name']}}
      </div>
    @endforeach
  </body>
</html>
