<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<head>
    <?php include '../link.php' ?>
    <title>Form Practice</title>


</head>

<body>

<?php 

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");


if (isset($_POST['signup'])) {

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$conPassword = $_POST['confirm_password'];
$phone = $_POST['phone'];
// $qualification = $_POST['course'];
// $status = $_POST['martial'];
// $gender = $_POST['gender'];



if (!empty($_POST['gender'])) {
    $gender = $_POST['gender'];
    // echo $gender;
// echo $firstName . "<br/>" .  $lastName . "<br/>" . $email . $gender;

if (!empty($_POST['martial'])) {
    $martial = $_POST['martial'];
}

if (!empty($_POST['language'])) {
    
    $skills = $_POST['language'];

    


}


if (!empty($_POST['course'])) {
    $qual = $_POST['course'];

    

}


    
}



// $skills = $_POST['language'];
// $address = $_POST['address'];

// echo $firstName . "<br/>" .  $lastName . "<br/>" . $email . $gender;



}


?>











    <div class="container-fluid">
        <div class="row bg-light mb-4">
            <div class="col-md-12">
                <h1 class="text-center fs-1">Sign Up</h1>
            </div>
        </div>

        <!-- Form Start -->

        <div class="row justify-content-center">
            <div class="col-md-4 py-5 bg-dark">
                <form class="p-3" action="" method="POST" >
                    <!-- FirstName -->

                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>

                        <input type="text" name="first_name" class="form-control" placeholder="Firstname" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>


                    <!-- LastName -->

                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>

                        <input type="text" name="last_name" class="form-control" placeholder="Lastname" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required/>



                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>


                    <!-- Email -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email.com" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
                        <!-- <span class="text-danger">fggd</span> -->

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>

                    <!-- Password -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>

                    <!-- Confirm Password -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input type="text" name="confirm_password" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>

                    <!-- Contact Number -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                        <input type="text" name="phone" class="form-control" placeholder="+91" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>










                    <!-- Qualification -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>

                        <select class="form-select" name="course" aria-label="Default select example" required>
                            <option selected disabled value="">Select Qualification</option>
                            <option value="BTech">BTech</option>
                            <option value="BCom">BCom</option>
                            <option value="BCA">BCA</option>
                        </select>

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>

                    <!-- Martial State -->

                    <div class="input-group mb-3">


                    <div class="form-check  text-light mx-3">
                            <input class="form-check-input" type="radio" hidden value="" name="martial" id="flexRadioDefault2" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Status
                            </label>
                        </div>





                        <div class="form-check text-light mx-0">
                            <input class="form-check-input" type="radio" value="married" name="martial" id="flexRadioDefault1" >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Married
                            </label>
                        </div>
                        <div class="form-check  text-light mx-3">
                            <input class="form-check-input" type="radio" value="unmarried" name="martial" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Unmarried
                            </label>
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>
                    <!-- Gender -->

                    <div class="input-group mb-3">

                    <div class="form-check  text-light mx-3">
                            <input class="form-check-input" type="radio" hidden value="" name="gender" id="flexRadioDefault2" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Gender
                            </label>
                        </div>


                        <div class="form-check text-light mx-0">
                        <input class="form-check-input" type="radio" value="Male" name="gender" id="flexRadioDefault2" >
                            <label class="form-check-label">
                                Male
                            </label>
                        </div>
                        <div class="form-check  text-light mx-5">
                        <input class="form-check-input" type="radio" value="Female" name="gender" id="flexRadioDefault2" >
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>


                    <!-- Skills Languages -->

                    <div class="input-group mb-3">

                    
                    <div class="form-check  text-light me-2">
                            <input class="form-check-input" type="text" hidden value="" name="language" id="flexRadioDefault2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Skills
                            </label>
                        </div>





                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" name="language" value="HTML" class="btn-check" id="btncheck1" autocomplete="off" required>
                            <label class="btn btn-outline-light me-2" for="btncheck1">HTML</label>

                            <input type="checkbox" name="language" value="CSS" class="btn-check" id="btncheck2" autocomplete="off" required>
                            <label class="btn btn-outline-light me-2" for="btncheck2">CSS</label>

                            <input type="checkbox" name="language" value="JavaScript" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck3">JavaScript</label>

                            <input type="checkbox" name="language" value="JQuery" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck4">JQuery</label>


                        </div>

                    </div>

                    <div class="input-group mb-3">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" name="language" value="React Js" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck5">React Js</label>

                            <input type="checkbox" name="language" value="Node Js" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck6">Node Js</label>

                            <input type="checkbox" name="language" value="Express Js" class="btn-check" id="btncheck7" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck7">Express Js</label>

                            <input type="checkbox" name="language" value="MongoDB" class="btn-check" id="btncheck8" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck8">MongoDB</label>



                        </div>

                    </div>

                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>

                    <!-- Address Field -->
<!-- 
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <textarea class="form-control" name="address" aria-label="With textarea" placeholder="Address"></textarea>
                        </div>

                    </div>

                    <div class="input-group mb-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label text-light fw-bold">Profile Picture</label>
                            <input class="form-control" type="file" name="profile" id="formFile">
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"></div>


 -->


                    <button type="submit" name="signup" class="btn btn-primary btn-lg ">Submit</button>

                </form>

            </div>
        </div>






    </div>



</body>

</html>