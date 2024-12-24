<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <title>Bootstrap Example</title>
  
    <style>
      *{
        transition: all 0.3s ease-in-out;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: white;
        }

        .container {
            width: 75%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tabs {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
            border-bottom: 2px solid #ccc;
        }

        .tabs li {
            padding: 10px 20px;
            cursor: pointer;
            color: #555;
        }

        .tabs .active {
            color: #000;
            border-bottom: 2px solid #000;
        }

        input[type="submit"] {
            width: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #34bc64;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            gap: 40px;
            margin-bottom: 30px;

        }


        .row div {
            flex-grow: 1;
            flex-shrink: 0;
            flex-basis: 0%;
        }



        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            min-width: 150px;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .row-checkbox {
            display: flex;
            justify-content: start;
            gap:40px;
            align-items: center;
            margin-bottom: 30px;
        }

        .row-checkbox input {
            width: auto;
            min-width: 0;
        }

        .row-checkbox label {
            margin-bottom: 0;
        }


        .row-checkbox>div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            
        }


        .checkbox-group {
            display: flex;
            justify-content: flex-start;
        }

        .checkbox-group>div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-right: 20px;
        }
   /* > its meaning we can checek first level of div */
        .checkbox-group>div>label {
            font-weight: normal;
        }

        @media (max-width: 1000px) {
            .row-checkbox {
                flex-direction: column;
                align-items: start;
            }
        }
        @media (max-width:500px){
            .checkbox-group{
                flex-direction: column;
                align-items: start;
            }
        }

        textarea {
            
            resize: vertical;
        }
        input[type="file"]{
         width: auto;
         max-width: 100%;
        }

        @media screen and (max-width: 1100px) and (min-width: 800px) {
            .row {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .row:nth-last-child(2),
            .row:nth-last-child(3) {
                display: flex;
                width: 100%;
            }

        }
    </style>

    <script>
        // JavaScript form validation for Name
        function validateName() {
            var name = document.getElementById("name").value;
            var namePattern = /^[a-zA-Z-' ]*$/; // Only letters, spaces, and hyphens
            var errorMessage = document.getElementById("nameError");

            // Check if the name matches the pattern
            if (!namePattern.test(name)) {
                errorMessage.textContent = "Invalid name";
                return false; // Prevent form submission
            } else {
                errorMessage.textContent = ""; // Clear any previous error message
                return true; // Allow form submission
            }
        }

        function validateName(){
            var email = document.getElementById("email").value;
            var emailPattern=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var errorsMessage = document.getElementById("emailError");
            if(!emailPattern.test(email)){
                errorsMessage.textContent = "Invalid email";
                return false;
            }else{
                errorsMessage.textContent = "";
                return true;
            }
        }
    </script>
</head>

<body>

    <?php
    $nameErr = "";
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Server-side validation for the Name field
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = sanitize_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters, spaces, and hyphens are allowed";
            }
        }
    }

    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="container">
        <form method="POST" class="form-container" onsubmit="return validateName()">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="./hash1.html">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Form</a>
                </li>


            </ul>
            <div class="row">
                <div>
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                    <span id="nameError" style="color: red;"></span> <!-- Error message here -->
                </div>
                <div>
                    <label for="password">Password *</label>
                    <input type="password" id="password" placeholder="Password" required>
                </div>
                <div>
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Enter email" required>
                    <span id="emailError" style="color: red;"></span>
                </div>
                <div>
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" placeholder="Enter Phone Number" required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="dob">Date Of Birth *</label>
                    <input type="date" id="dob" required>
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" id="address" placeholder="Address">
                </div>
                <div>
                    <label for="state">State</label>
                    <select type="text" id="state">
                        <option value="" disabled selected>Select a state</option>
                        <option value="State1">State1</option>
                        <option value="State2">State2</option>
                    </select>
                </div>
                <div>
                    <label for="city">City</label>
                    <select id="city">
                        <option value="" disabled selected>Select a city</option>
                        <option value="City1">City1</option>
                        <option value="City2">City2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div>
                    <label for="zip">Zip/Postal Code</label>
                    <input type="text" id="zip" placeholder="Enter Pincode">
                </div>
                <div>
                    <label for="country">Country</label>
                    <select id="country">
                        <option value="India" selected>India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                    </select>
                </div>
                <div>
                    <label for="experience">Experience *</label>
                    <input type="number" id="experience" placeholder="In years" required>
                </div>
                <div>
                    <label for="salary">Salary</label>
                    <input type="text" id="salary" placeholder="In INR">
                </div>
            </div>
            <div class="row-checkbox">
                <div>
                    <label>Hobbies<sup>*</sup>:</label>
                    <div class="checkbox-group">


                        <div>
                            <input type="checkbox" id="reading" name="hobbies" value="reading" required>
                            <label for="reading">Reading</label>
                        </div>
                        <div>
                            <input type="checkbox" id="travelling" name="hobbies" value="travelling">
                            <label for="travelling">Travelling</label>
                        </div>
                        <div>
                            <input type="checkbox" id="gaming" name="hobbies" value="gaming">
                            <label for="gaming">Gaming</label>
                        </div>
                        <div>
                            <input type="checkbox" id="other" name="hobbies" value="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>

                <div>
                    <label>Gender<sup>*</sup>:</label>
                    <div class="checkbox-group">
                        <div>
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male</label><br>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label><br>
                        </div>
                        <div>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div>
                    <label for="bio">Bio:</label>
                    <textarea id="bio" rows="3" placeholder="Bio"></textarea>
                </div>
            </div>
            <div class="row">
                <div>
                    <label for="image">Upload Image</label>
                    <input type="file" id="image">
                </div>
            </div>
            <!-- Submit Button -->
            <input type="submit" value="Submit">
        </form>

        <?php
        // Displaying the error message or successful submission result
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($nameErr) {
                echo "<p style='color:red;'>Error: $nameErr</p>";
            } else {
                echo "<p>Name: $name</p>";
            }
        }
        ?>
    </div>

</body>
</html>
