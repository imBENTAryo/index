<html>

<head>

    <!-- Title Page-->
    <title>imBENTAryo Login Form</title>

    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">

    <!-- Individual CSS-->
    <style>
        body {
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

        a {
            color:#2c6ed5;
        }

        #noAccYet {
            margin-left: 60%;
            margin-top: -5%; 
        } 
    </style>    

</head>
<body>

    <div class="page_wrapper .bg_01 padTop_130 padBottom_100 font_poppins">
    <img src="benta.png">
        <div class="wrapper wrapper_680 padTop_15">
            <div class="card card_1">
                <div class="cardBody">
                    <h2 class="title">Login Form</h2>
                    <form /*method='POST' /*action=""*/>
                        <div class="row rowSpace">
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">username</label>
                                    <input class="inputStyle_1" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col_1">
                                <div class="inputGroup">
                                    <label class="label">password</label>
                                    <input class="inputStyle_1" type="password" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="padTop_15">
                            <button class="btn btnRadius_2 btn_blue" type="submit">Submit</button>
                        </div>
                        <div id="noAccYet">
                        <b><a href="registrationForm.php">I don't have an account yet!</a></b>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
