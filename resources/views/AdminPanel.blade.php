<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
</head>
<body>
  <form method="POST" action="/AdminPanel-store">
    @csrf
    {{-- @method('post') --}}
    <label>Movie Name</label> <br>
    <input type="text" name="movie_name" placeholder="Movie Name"> <br><br>
    <label>Release Date</label> <br>
    <input type="date" name="release_date" placeholder="Release Date"><br><br>
    <label>Image URL</label> <br>
    <input type="string" name="image_url" placeholder="Cover Image URL"><br><br>
    <label>Trailer URL</label> <br>
    <input type="string" name="video_url" placeholder="Trailer URL"><br><br>
    <label>Movie Description</label> <br>
    <input type="text" name="description" placeholder="Movie Synopsis"><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>