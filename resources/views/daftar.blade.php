<!DOCTYPE html>
<html>
	<head>
		<title>Sign up to join</title>
	</head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <div>
            <label for="depan">First name:</label>
            <br><br>
            <input type="text" id="depan" name="first">
            <br><br>
            <label for="belakang">Last name:</label>
            <br><br>
            <input type="text" id="belakang" name="last">
            </div>
            
            <br>
            
            <div>
            <label>Gender:</label>
            <br><br>
            <input type="radio" name="gender" value="M">Male
            <br>
            <input type="radio" name="gender" value="F">Female
            <br>
            <input type="radio" name="gender" value="Other">Other
            </div>
            
            <br>
            
            <div>
            <label>Nationality:</label>
            <br><br>
            <select name="" id="">
                <option value="Indonesian">Indonesian</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Australian">Australian</option>
            </select>
            </div>

            <br>
            
            <div>
            <label>Language Spoken:</label>
            <br><br>
            <input type="checkbox" name="bahasa" value="Bahasa Indonesia">Bahasa Indonesia
            <br>
            <input type="checkbox" name="bahasa" value="English">English
            <br>
            <input type="checkbox" name="bahasa" value="Other">Other
            </div>

            <br>

            <div>
            <label>Bio:</label>
            <br><br>
            <textarea cols="30" rows="10"></textarea>
            </div>

            <button type="Sign Up">Sign Up</button>

        </form>
    </body>
</html>