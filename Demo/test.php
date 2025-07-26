<!DOCTYPE html>
<html>
<head>

<style>
body {
     background-color: skyblue;
    font-family: Arial, Helvetica, sans-serif;
    }
            
h1, h3 {
     color: blue;
    font-family: 'Times New Roman', Times, serif;
    }

 table {
    background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin:10px;
        }

input[type="text"], input[type="email"], input[type="password"], input[type="date"], select {
            width: 90%;
            padding: 5px;
        }
 input[type="submit"] {
          padding: 8px 16px;
          background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }

input[type="file"] {
            width: 100%;
        }
    </style>
</head>
<body>

    <center>
        <h1>AIUB</h1>
        <h3>Registration Form</h3>
    </center>

    <form>
        <table>
            <tr>
                <td>Full Name:</td>
             <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>Email:</td>
              <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
               <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
             <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Other"> Other
                </td>
            </tr>
            <tr>
                <td>Languages Known:</td>
                <td>
                    <input type="checkbox" name="language" value="English"> English
                    <input type="checkbox" name="language" value="Bangla"> Bangla
                    <input type="checkbox" name="language" value="Hindi"> Hindi
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country" required>
                        <option value="">-- Select --</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Upload Photo:</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td>Comments:</td>
                <td><input type="text" name="comments"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>

</body>
</html>