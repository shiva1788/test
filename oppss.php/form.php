<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="scriptt.js"></script> -->
    <link rel="stylesheet" href="foo.css">
</head>
<body>
    <?php
   include 'inclu.php';
    ?>
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Form</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Table</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">

                <form method="POST" class="form-container maxform" style="margin-top:10px" id="form"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">
                    <div class="row">
                        <div>
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" value="<?php echo $_POST['name'] ?? ''; ?>" placeholder="Name" required>
                            <span id="nameError" style="color: red;"><?php echo $errors['name'] ?? ''; ?></span>
                        </div>
                        <div>
                            <label for="password">Password *</label>
                            <input type="password" id="password" value="<?php echo $_POST['password'] ?? ''; ?>" placeholder="Password" required>
                            <span id="pwdError" style="color: red;"><?php echo $errors['password'] ?? ''; ?></span>
                        </div>
                        <div>
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="<?php echo $_POST['email'] ?? '';?>" placeholder="Enter email" required>
                            <span id="emailError" style="color: red;"><?php echo $errors['email'] ?? '';?></span>
                        </div>
                        <div>
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $_POST['phone'] ?? '';?>" placeholder="Enter Phone Number" required>
                            <span id="phoneError" style="color: red;"><?php echo $errors['phone'] ?? '';?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div>
                            <label for="dob">Date Of Birth *</label>
                            <input type="date" id="dob" required>
                            <!-- <span id="dobError" style="color: red;"></span> -->
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
                                    <input type="checkbox" id="reading" name="hobbies" value="reading">
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
                                    <input type="checkbox" id="Other" name="hobbies" value="other">
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
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <h1>table</h1>
        </div>
    </div>
</body>

</html>