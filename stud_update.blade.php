<html>
<head><title>Edit Student</title></head>
<body>
<form action="edit/{{ $users[0]->id }}" method="post">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="stud_name" value="{{ $users[0]->name }}"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Update Student"></td>
        </tr>
    </table>
</form>
</body>
</html>
