<!DOCTYPE html>
<html>
<head>
<title>RegForm</title>
</head>
<body>

<h2>Registration Form</h2>
<form>
    <table>
        <tr>
            <td><label for="fname">Full Name:</label></td>
            <td><input type="text" id="fname" name="fname"></td>
        </tr>

        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>

        <tr>
            <td><label for="pwd">Password:</label></td>
            <td><input type="password" id="pwd" name="pwd"></td>

        </tr>
        <tr>
            <td><label for="comment">Comment:</label></td>
            <td><textarea rows="7" name="comment"cols="35"> </textarea></td>
        </tr>

        <tr>
            <td> <label for="Gender"> Gender:</label> </td>
            <td>
                <input type="radio" id="Female" nae="r1" value="Female">
                <label for="Female">Female</label>

                <input type="radio" id="Male" nae="r1" value="Male">
                <label for="Male">Male</label>

                <input type="radio" id="Other" nae="r1" value="Other">
                <label for="Other">Other</label>
            </td>
            

            <tr>
            <td> <label for="hobby"> Please Choose a hobby:</label> </td>
            <td>
                <input type="checkbox" id="Hobby1" nae="Hobby1" value="singing">
                <label for="Hobby1">Singing</label>

                <input type="checkbox" id="Hobby2" nae="Hobby2" value="Dancing">
                <label for="Hobby1">Dancing</label>

                <input type="checkbox" id="Hobby3" nae="Hobby3" value="Reading">
                <label for="Hobby3">Reading</label>
            </td>

            </tr>

            <tr>
                <td><label for="file">Please choose a file:</label></td>
                <td><input type="file" id="file" name="file"></td>
            </tr>
            

            <tr>
                <td><input type="submit" value="Submit"><input type="reset"></td>
            </tr>

    </table>
</form>


</body>
</html>