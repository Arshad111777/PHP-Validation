<?php
$first_err = "";
$last_err = $first_err;


if (isset($_POST['signup'])) {

    if (!empty($_POST['first_name']) && !empty($_POST['last_name'])) {
        echo $first_err = "";
        echo $last_err = "";
    } else {


        $first_err = "Please Fill FirstName";

        $last_err = "Please Fill LastName";

      
    }
}




?>


















<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>SignUp Form</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-light mb-4">
            <div class="col-md-12">
                <h1 class="text-center fs-1">Sign Up</h1>
            </div>
        </div>

        <!-- Form Start -->

        <div class="row justify-content-center">
            <div class="col-md-4 py-5 bg-dark">
                <form class="p-3" action="" method="POST" onsubmit="return validate()">
                    <!-- FirstName -->

                    <div class="input-group mb-4">

                        <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>

                        <input type="text" name="first_name" class="form-control" placeholder="Firstname" aria-label="Username" aria-describedby="basic-addon1">

                    </div>
                    <span class="text-danger fw-bold"><?php echo $first_err; ?></span>

                    <!-- LastName -->

                    <div class="input-group mb-5">

                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>

                        <input type="text" name="last_name" class="form-control" placeholder="Lastname" aria-label="Username" aria-describedby="basic-addon1" />



                    </div>
                    <span class="text-danger fw-bold"><?php echo $last_err; ?></span>

                    <!-- Email -->

                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open-text"></i></span>
                        <input type="text" class="form-control" placeholder="Email.com" aria-label="Username" aria-describedby="basic-addon1">
                        <!-- <span class="text-danger">fggd</span> -->

                    </div>

                    <!-- Password -->

                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <!-- Confirm Password -->

                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <!-- Qualification -->

                    <div class="input-group mb-4">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Qualification</option>
                            <option value="1">BTech</option>
                            <option value="2">BCom</option>
                            <option value="3">BCA</option>
                        </select>

                    </div>
                    <!-- Martial State -->

                    <div class="input-group mb-3">
                        <div class="form-check text-light mx-0">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Married
                            </label>
                        </div>
                        <div class="form-check  text-light mx-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Unmarried
                            </label>
                        </div>
                    </div>

                    <!-- Gender -->

                    <div class="input-group mb-4">
                        <div class="form-check text-light mx-0">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check  text-light mx-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>


                    <!-- Skills Languages -->
                    <div class="input-group mb-3">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck1">HTML</label>

                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck2">CSS</label>

                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck3">JavaScript</label>

                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck4">JQuery</label>


                        </div>

                    </div>

                    <div class="input-group mb-5">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck5">React Js</label>

                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck6">Node Js</label>

                            <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck7">Express Js</label>

                            <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                            <label class="btn btn-outline-light me-2" for="btncheck8">MongoDB</label>



                        </div>

                    </div>



                    <div class="input-group mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <textarea class="form-control" aria-label="With textarea" placeholder="Address"></textarea>
                        </div>

                    </div>

                    <div class="input-group mb-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label text-light fw-bold">Profile Picture</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>





                    <button type="submit" name="signup" onclick="validation()" class="btn btn-primary btn-lg ">Submit</button>

                </form>

            </div>
        </div>






    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>

</html>