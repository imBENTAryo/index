<html>

<head>

    <!-- Title Page-->
    <title>Inventory - imBENTAryo</title>
    
    <!-- Main CSS-->
    <link href="main_inv.css" rel="stylesheet" media="all">
    
    <!-- Individual CSS-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>        
        .wrapper_inv {
          margin: 0 1% 0 22%;
        }
        .topbar{
            width: 100%;
            height: 5vh;
            background-color: black;
        }
        .sidebar{
            width: 20%;
            height: 100vh;
            float: left;
            background-color: darkgrey;
            padding-right: 20px;
            margin-right: 20px;
        }
        body {
            background: #e9ecef;
        }
        img {
            width: 70px;
            height: 60px;
            display: block;
        }
        a {
            color:#2c6ed5;
        }
        #noAccYet {
            margin-left: 60%;
            margin-top: -5%; 
        } 
        p {
            font-size: 20;
        }
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }
    </style>    
</head>
    
<body>
    <div class="topbar"></div>
    <div class="sidebar"></div>
    <div class="page_wrapper .bg_01 padTop_30 padBottom_100 font_poppins">
        <h1 class="title_upper wrapper_inv padTop_15">Items</h1>
        <div class="wrapper_inv wrapper_1200 padTop_15">
            <div class="card card_1">
                <div class="cardBody">
                    <form /*method='POST' /*action=""*/>
                        <div class="row rowSpace">
                            <div class="col_inv1">
                                <img src="box.png" alt="Box" margin-top="10px">
                                <div class="inputGroup">
                                    <div class="center">
                                        <p>
                                          </p><div class="input-group">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                      <span class="glyphicon glyphicon-minus"></span>
                                                  </button>
                                              </span>
                                              <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                  </button>
                                              </span>
                                          </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col_inv2">
                                <h2 class="title_product">Product 1</h2>
                                <p>
                                    LOREM IPSUM GENERATOR
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </form>
                <div class="row rowSpace padTop_30">
                    <div class="row">
                        <img src="location.png" alt="Location Tag">
                        <div class="row_p"><p>Muntinlupa, Kidapawan City</p></div>
                    </div>
                    <div class="row">
                        <img src="trashbin.png" alt="Trash Bin">
                        <div class="row_image"><img src="ghost.jpg" alt="Ghost"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="wrapper_inv wrapper_1200 padTop_15">
            <div class="card card_1">
                <div class="cardBody">
                    <form /*method='POST' /*action=""*/>
                        <div class="row rowSpace">
                            <div class="col_inv1">
                                <img src="box.png" alt="Box" margin-top="10px">
                                <div class="inputGroup">
                                    <div class="center">
                                        <p>
                                          </p><div class="input-group">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                      <span class="glyphicon glyphicon-minus"></span>
                                                  </button>
                                              </span>
                                              <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                  </button>
                                              </span>
                                          </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col_inv2">
                                <h2 class="title_product">Product 1</h2>
                                <p>
                                    LOREM IPSUM GENERATOR
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </form>
                <div class="row rowSpace padTop_30">
                    <div class="row">
                        <img src="location.png" alt="Location Tag">
                        <div class="row_p"><p>Muntinlupa, Kidapawan City</p></div>
                    </div>
                    <div class="row">
                        <img src="trashbin.png" alt="Trash Bin">
                        <div class="row_image"><img src="ghost.jpg" alt="Ghost"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        <button CLASS="title_upper wrapper_inv padTop_15" id="myBtn">Open Modal</button>
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
            <input class="inputStyle_1" type="text" name="user_name">
          </div>
        </div>
    </div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</body>
</html>