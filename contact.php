<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- style.css  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- validation js -->
    <!-- <link rel="stylesheet" href="assets/js/form.js"> -->

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />

    <title>Contact Us</title>
</head>

<body style="background-color : #e6ffff;">
    
<?php
    include 'navbar.php';
  ?>

    <!-- ==============contact starts here============== -->
    <section class="contact py-5 my-5" id="contact">
        <div class="container ">
            <div class="section_title text-center mb-5">
                <h1 class="text-capitalize">Contact Us</h1>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fas fa-phone-alt fa-3x"></i>
                        </div>
                        <div>
                            <h3>Let's Talk</h3>
                            <p><b>Phone:</b> +91-XXXXXXXXXX</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="fas fa-envelope-open fa-3x"></i>
                        </div>
                        <div>
                            <h3>Drop a Line</h3>
                            <p><b>Email:</b> xyz@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="border border-success rounded shadow text-center p-3">
                        <div class="mb-4">
                            <i class="far fa-life-ring fa-3x"></i>
                        </div>
                        <div>
                            <h3>24x7 Support</h3>
                            <p><b>Customer:</b> 1800 1XX XXX</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-10 mx-auto mb-3 my-5 py-5 border shadow">
                    <h3 class="text-center mb-3">Form</h3>
                    <form action="contact.html" method="POST" id="form" onsubmit="return formValidation();">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email" id="email" type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="msg" id="msg" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============contact ends here============== -->

    <?php
    include 'footer.php';
  ?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>
<script>

    //form validation with javascript
    function formValidation()
    {
        //Get Value
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var msg = document.getElementById('msg').value.trim();

        var isValidForm = true;       

        //Validation Conditions here
        if (name.length < 1) {
            alert("Name is Required!");
            var isValidForm = false;
        }       
        else if (email.length < 1) {
            alert("Email is Required!");
            var isValidForm = false;
        } 
        else if (msg.length < 1) {
            alert("Message is Required!");
            var isValidForm = false;
        }
        else
        {
            isValidForm = true;
        }

        return isValidForm;  //if isValidForm is true then form submits else submission is stopped
        
    }

    /*
    //Form validation with Jquery and JavaScript
    $(document).ready(function () {

        $('#form').submit(function (e) {

            //Get Value
            var name = $('#name').val().trim();
            var email = $('#email').val().trim();
            var msg = $('#msg').val().trim();

            //reset the errors
            $(".error").remove();

            var isValidForm = true; 

            //Validation Conditions here
            if (name.length < 1) {
                $('#name').after('<span class="error">This field is required</span>');
                var isValidForm = false;
            }
            
            if (email.length < 1) {
                $('#email').after('<span class="error">This field is required</span>');
                var isValidForm = false;
            } 

            if (msg.length < 1) {
                $('#msg').after('<span class="error">This field is required</span>');
                var isValidForm = false;
            }

            return isValidForm;  //if isValidForm is true then form submits else submission is stopped
                     
        });

    });*/

</script>