<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($image as $row)
      <div>
        <img src="{{Storage::url($row['image'])}}" alt="dhuro ghorar dim" width="100px">
      </div>
    @endforeach
  </body>
</html>
