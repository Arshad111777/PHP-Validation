<?php

// $first_err = $last_err = $email_err = $pass_err = $conpass_err = $qual_err = $mar_err = $gen_err = $cou_err = $pro_err = "";

// if (isset($_POST['signup'])) {

//     if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['courses']) && !empty($_POST['martial']) && !empty($_POST['gender']) && !empty($_POST['language']) && !empty($_POST['profile'])) {


//         echo $first_err = "";
//         echo $last_err = "";
//         echo $email_err = "";
//         echo $pass_err = "";
//         echo $conpass_err = "";
//         echo $qual_err = "";
//         echo $mar_err = "";
//         echo $gen_err = "";
//         echo $cou_err = "";



//     } else {


//         $first_err = "Please Fill FirstName";
//         $last_err = "Please Fill LastName";
//         $email_err = "Please Fill Email";
//         $pass_err = "Please Fill Password";
//         $conpass_err = "Please Fill Confirm Password";
//         $qual_err = "Please Fill Qualification";
//         $mar_err = "Please Fill Your Martial";
//         $gen_err = "Please Fill Your Gender";
//         $cou_err = "Please Fill Your Languages";
//         $pro_err = "Please Upload Your Profile";

//     }








// }




?>


















<!doctype html>
<html lang="en">

<head>

    <?php include './link.php' ?>

    <title>SignUp Form</title>
</head>

<body>
    <!-- PHP Code Start -->
    <?php

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

    $first_err = $last_err = $email_err = $pass_err = $conpass_err = $phone_err = $qual_err = $mar_err = $gen_err  = $pro_err = "";

    if (isset($_POST['signup'])) {

        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $full_name = $firstName . $lastName;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conPass = $_POST['confirm_password'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $martial = $_POST['martial'];
        $gender = $_POST['gender'];
        $profile = $_POST['profile'];

        $pass_inc = password_hash($password, PASSWORD_BCRYPT);
        $conpass_inc = password_hash($conPass, PASSWORD_BCRYPT);

        
// if (!empty($_POST['course'])) {
//     $course = $_POST['course'];
//     $qual_err = "";
// }else{
//     $qual_err = "Qualification Are Required";
// }



// if (!empty($_POST['martial'])) {
//     $martial = $_POST['martial'];
//     $mar_err = "";
// }else{
//     $mar_err = "Martial Are Required";
// }



// if (!empty($_POST['gender'])) {
//     $gender = $_POST['gender'];
//     $gen_err = "";
// }else{
//     $gen_err = "Gender Are Required";
// }



// if (!empty($_POST['profile'])) {
//     $profile = $_POST['profile'];
//     $pro_err = "";

//        if (preg_match('/\.(jpg|png|jpeg)$/',$profile)) {

//                 $pro_err = "Only Png Jpg Extension Allow";
//             } else {
//                 $pro_err = "";
//             }

// }else{
//     $pro_err = "Profile Are Required";
    
    
         


// }







        if (empty($email)) {

            

            $email_err = "Email Is Required";
        } else {

            if (!preg_match("/^(\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*\s*[,]?\b)*$/", $email)) {
                $email_err = "Please Fill Valid Email xyx@gmail.com";
            } else {

                $email_check = "SELECT * FROM data WHERE email = '$email'";

                $res = mysqli_query($conn, $email_check) or die("Query Failed");

                $rows = mysqli_num_rows($res);

                if ($rows > 0) {

                    echo "Email Already Exist";








                } else {

                    if ($password === $conPass) {
                        
                        $insert_query = "INSERT INTO data(username,email,password,conpassword,phone,qualification,status,gender,image)
                        VALUES ('$full_name','$email','$pass_inc','$conpass_inc','$phone','$course','$martial','$gender','$profile')";


                   $res1 = mysqli_query($conn,$insert_query); 
           
                   if ($res1) {
                    ?> 
<script>
    alert("Insert Successful");
</script>
<?php 
                   }else{
?>

<script>
    alert("Error Query");
</script>
<?php 

                   }



                    }else{
                        ?>
                         <script>
                             alert("Password Are Not Matched");
                         </script>
                        <?php 
                    }

                }

            }
        }







       

//         if (empty($password) || empty($conPass)) {
//             $pass_err = "Password Are Required";
//             $conpass_err = "Password Are Required";
//         }else {
//             $pass_err = "";

//             if ($pass_inc === $conpass_inc ) {
                
//                 ?>

 <script>
//     alert("Password Matched");
// </script>

 <?php 
//             }else{
// ?>
 <script>
//     alert("Password Are Not Matched");

// </script>

 <?php 
                
//             }



//         }
       










        if (empty($firstName)) {
            $first_err = "Name Is Required";
        } else {

            if (!preg_match("/^[a-zA-Z]{1,10}$/", $firstName)  || !(strlen($_POST['first_name']) >= 3)) {
                $first_err = "Only letters allowed At Minimum 3 Characters";
            } else {
            }
        }


        if (empty($lastName)) {

            $last_err = "Lastname Is Required";
        } else {

            if (!preg_match("/^[a-zA-Z]{1,10}$/", $lastName)  || !(strlen($_POST['last_name']) >= 3)) {
                $last_err = "Only letters allowed At Minimum 3 Characters";
            }
        }










    }



    ?>
































































    <?php
    // $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Failed");

    // // define variables and set to empty values

    // $first_err = $last_err = $email_err = $pass_err = $conpass_err = $phone_err = $qual_err = $mar_err = $gen_err = $cou_err = $pro_err = "";


    // if (isset($_POST['signup'])) {







    //     // First Name

    //     if (empty($_POST['first_name'])) {

    //         $first_err = "Name Is Required";
    //     } else {

    //         $name = check_data($_POST['first_name']);
    //         // Check Name Only Letters
    //         if (!preg_match("/^[a-zA-Z]{1,10}$/", $name)  || !(strlen($_POST['first_name']) >= 3)) {
    //             $first_err = "Only letters allowed At Minimum 3 Characters";
    //         }
    //     }

    //     // Last Name

    //     if (empty($_POST['last_name'])) {

    //         $last_err = "Last Name Is Required Minimum 4 Characters";
    //     } else {

    //         $last_name = check_data($_POST['last_name']);

    //         if (!preg_match("/^[a-zA-Z]{1,10}$/", $last_name)  || !(strlen($_POST['last_name']) >= 3)) {
    //             $last_err = "Only letters  allowed ";
    //         }
    //     }

    //     // Email 

    //     if (empty($_POST['email'])) {
    //         $email_err = "Email Is Required";
    //     } else {
    //         $email = check_data($_POST['email']);

    //         if (!preg_match("/^(\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*\s*[,]?\b)*$/", $email)) {
    //             $email_err = "Please Fill Valid Email xyx@gmail.com";
    //         } else {

    //             $email_query = "SELECT * FROM users WHERE uemail = '$email'";

    //             $query_res = mysqli_query($conn, $email_query) or die("Query Failed");

    //             $email_count = mysqli_num_rows($query_res);

    //             if ($email_count > 0) {
    //                 echo "Email already exists";
    //             } else {


    //                 echo "";
    //             }
    //         }
    //     }

    //     // Password

    //     if (empty($_POST['password'])) {

    //         $pass_err = "Password Is Required ";
    //     } else {
    //         $pass = check_data($_POST['password']);
    //         $pass_inc = password_hash($_POST['password'], PASSWORD_BCRYPT);

    //         if (!preg_match("/^[a-zA-Z1-9]{1,20}$/", $pass)) {
    //             $pass_err = "Password Only A-Z & Number";
    //         }
    //     }

    //     // Confirm Password


    //     if (empty($_POST['confirm_password'])) {

    //         $conpass_err = "Cofirm Password Is Required";
    //     } else {
    //         $confirm = check_data($_POST['confirm_password']);
    //         $conpass_inc = password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);

    //         if (!preg_match("/^[a-zA-Z1-9]{1,20}$/", $confirm)) {
    //             $conpass_err = "Password Length 10 digits";

    //             // if (check_data($pass) === check_data($confirm)) {
    //             //     $conpass_err = "Password Not Matched";

    //             // } else {
    //             //     $conpass_err = "";
    //             // }
    //         } else {
    //             $concat = $name . $last_name;

    //             if ($pass_inc == $conpass_inc) {
    //                 $conpass_err = "";
    //                 // echo $pass_inc . "<br/>" . $conpass_inc;

    //                 $insert_query = "INSERT INTO users(uname,uemail,upassword,uphone,ugender,umartial,uqualification,uskills,uaddress)
    //                 VALUES ('$concat','$email','$pass_inc','$conpass_inc','$phone')
    //                 ";

    //                 $insert_res = mysqli_query($conn, $insert_query);


    //                 if ($insert_res) {
    //                 echo "Data Has Insert";
    //                 }else{
    //                     echo "Data Has Failed";

    //                 }




    //             } else {

    //                 $conpass_err = "Password Are Not Matched";
    //             }
    //         }

    //         // 




    //     }

    //     // Phone Number Pattern

    //     if (empty($_POST['phone'])) {

    //         $phone_err = "Number Is Required";
    //     } else {
    //         $phone = check_data($_POST['phone']);

    //         if (is_numeric($phone) && strlen($phone) == 10) {
    //             $phone_err = "";
    //         } else {
    //             $phone_err = "Only Numeric digits Atleast 10 digits";
    //         }
    //     }

    //     // Qualification

    //     if (empty($_POST['course'])) {
    //         // $qual = $_POST['course'];
    //         $qual_err = "Qualification Is Required";
    //     } else {
    //         $qual_err = "";
    //     }

    //     // Martial Status

    //     if (empty($_POST['martial'])) {
    //         // $martial = check_data($_POST['martial']);
    //         $mar_err = "Martial Is Required";
    //     } else {
    //         $mar_err = "";
    //     }

    //     // Gender

    //     if (empty($_POST['gender'])) {
    //         // $gender = check_data($_POST['gender']);
    //         $gen_err = "Gender Is Required";
    //     } else {
    //         $gen_err = "";
    //     }

    //     // Skills 

    //     if (empty($_POST['language'])) {
    //         // $skills = check_data($_POST['language']);
    //         $cou_err = "Please Skills Required";
    //     } else {
    //         $cou_err = "";
    //     }

    //     // Address 

    //     $address = check_data($_POST['address']);






    //     // Profile Image

    //     if (empty($_POST['profile'])) {
    //         $pro_err = "Please Chose Img File";
    //     } else {

    //         $profile = check_data($_POST['profile']);

    //         if (!preg_match('/\.(jpg|png|jpeg)$/', $profile)) {

    //             $pro_err = "Only Png Jpg Extension Allow";
    //         } else {
    //             $pro_err = "";

    //             if ($profile) {
    ?>
    <!-- <script>
                        alert("Data Has Submit");
                    </script> -->
    <?php

    //             } else {
    //                 echo "Data Has Not Submit";
    //             }
    //         }
    //     }
    //     // End Validation



    // }



    // // Phone Regex  ^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$






    // function check_data($data)
    // {
    //     $data = trim($data);
    //     return $data;
    // }






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
                <form class="p-3" action="" method="POST" onsubmit="">
                    <!-- FirstName -->

                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>

                        <input type="text" name="first_name" class="form-control" placeholder="Firstname" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $first_err; ?></div>


                    <!-- LastName -->

                    <div class="input-group mb-3">

                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>

                        <input type="text" name="last_name" class="form-control" placeholder="Lastname" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" />



                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $last_err; ?></div>


                    <!-- Email -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email.com" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                        <!-- <span class="text-danger">fggd</span> -->

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $email_err; ?></div>

                    <!-- Password -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $pass_err;  ?></div>

                    <!-- Confirm Password -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input type="text" name="confirm_password" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $conpass_err; ?></div>

                    <!-- Contact Number -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                        <input type="text" name="phone" class="form-control" placeholder="+91" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $phone_err; ?></div>










                    <!-- Qualification -->

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>

                        <select class="form-select" name="course" aria-label="Default select example">
                            <option selected disabled>Select Qualification</option>
                            <option value="BTech">BTech</option>
                            <option value="BCom">BCom</option>
                            <option value="BCA">BCA</option>
                        </select>

                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $qual_err; ?></div>

                    <!-- Martial State -->

                    <div class="input-group mb-3">
                        <div class="form-check text-light mx-0">
                            <input class="form-check-input" type="radio" value="married" name="martial" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Married
                            </label>
                        </div>
                        <div class="form-check  text-light mx-3">
                            <input class="form-check-input" type="radio" value="unmarried" name="martial" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Unmarried
                            </label>
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $mar_err;  ?></div>
                    <!-- Gender -->

                    <div class="input-group mb-3">
                        <div class="form-check text-light mx-0">
                            <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check  text-light mx-5">
                            <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php echo $gen_err; ?></div>


                    <!-- Skills Languages -->
                    <!-- <div class="input-group mb-3">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" name="language" value="HTML" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck1">HTML</label>

                            <input type="checkbox" name="language" value="CSS" class="btn-check" id="btncheck2" autocomplete="off">
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

                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php //echo $cou_err; 
                                                                                        ?></div>
 -->
                    <!-- Address Field -->

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
                    <div id="emailHelp" class="form-text text-danger mb-3 text-center"><?php  echo $pro_err;  ?></div>





                    <button type="submit" name="signup" class="btn btn-primary btn-lg ">Submit</button>

                </form>
           
                
<p  class="text-light text-center">Have An Account <a href="login.php">Login</a>Here</p>

            </div>
        </div>






    </div>

    <?php

    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $confirm_pass = $_POST['confirm_password'];
    // $qualification = $_POST['courses'];
    // $martial = $_POST['martial'];
    // $gender = $_POST['gender'];
    // $skills = $_POST['language'];
    // $address = $_POST['address'];
    // $profile = $_POST['profile'];



    // echo "$first_name <br/> $last_name <br/> $email <br/> $password <br/> $confirm_pass <br/> $qualification <br/> $martial
    // <br/> $gender <br/> $skills <br/> $address <br/> $profile";





    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>


</html>