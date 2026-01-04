<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Signup - Krishibazar</title>
</head>
<body>
    <div class="container">
        <div class="profile-box_2">
            <h2 style="color: #4A8D5F;">SIGNUP</h2>
            <form action="../php/register.php" method="POST" class="profile-form">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone no." required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <input type="date" name="dob" required>
                <select name="gender" required>
                    <option value="">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <input type="text" name="address" placeholder="Address" required>

                <div style="background-color: #A3C9A8; padding: 10px; border-radius: 5px; margin: 15px 0;">
                    <p style="font-size: 12px; margin-bottom: 5px;">Select SignUp as:</p>
                    <input type="radio" name="role" value="seller" id="seller" required> <label for="seller">Seller</label>
                    <input type="radio" name="role" value="customer" id="customer"> <label for="customer">Customer</label>
                </div>
                <button type="submit" class="next-btn">NEXT</button>
            </form>
            <p>Already Have Account? <a href="login.php" style="color: #4A8D5F; font-weight: bold;">Login</a></p>
        </div>
    </div>
</body>
</html>