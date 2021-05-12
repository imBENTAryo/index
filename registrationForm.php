<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>imBENTAryo Registration Form</title>

    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="client/file.css">

    <!-- Individual CSS-->
    <style>
        body{
            background: linear-gradient(to top right, #f9f5f5 0%, #ad93b5 100%);
        }

        img {
            width: 337.5px;
            height: 162.5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 
        }

        #haveAcc {
            margin-left: 60%;
            margin-top: -5%; 
        }

        a {
            color:#2c6ed5;
        }
    </style>

</head>
<body>

    <div class="page_wrapper bg_01 padTop_130 padBottom_100 font_poppins">
        <img src="logo.png">
        <div class="wrapper wrapper_680 padTop_15">
            <div class="card card_1">
                <div class="cardBody">
                    <h2 class="title">Registration Form</h2>
                    <form /*method='POST' /*action=""*/>
                        <div class="row rowSpace">
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">full name</label>
                                    <input class="inputStyle_1" type="text" name="user_fullName">
                                </div>
                            </div>
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">username</label>
                                    <input class="inputStyle_1" type="text" name="user_name">
                                </div>
                            </div>
                        </div>
                        <div class="row rowSpace">
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">Email Address</label>
                                    <input class="inputStyle_1" type="text" name="user_email">
                                </div>
                            </div>
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">Password</label>
                                    <input class="inputStyle_1" type="password" name="user_password">
                                </div>
                            </div>
                        </div>

                        <div class="padTop_15">
                            <button class="btn btnRadius_2 btn_blue" type="submit">Submit</button>
                        </div>
                        <div id="haveAcc">
                            <b><a href="index.php">I already have an account!</a></b>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>