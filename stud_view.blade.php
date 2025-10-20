<html>
<head><title>View Students</title></head>
<body>
<table border="1">
<tr><td>ID</td><td>Name</td></tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
</tr>
@endforeach
</table>
</body>
</html>
