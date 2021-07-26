<html>
<body>
<form method="post" action="{{ route('upload_file_store') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required />
    <input type="submit" value="submit">
</form>
</body>
</html>
