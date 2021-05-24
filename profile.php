<?php
include('session.php');
?>
<?php
// fa_custom_setup_cdn_webfont(
//     'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
//     'sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
//   );
$conn = new mysqli('localhost','root','','symphony');
if(mysqli_connect_errno())
{
    die("Failed to connect with MySQL: ".mysqli_connect_error());
}
$sql="SELECT * FROM signup where mem_id=$loggedin_id";
$result=mysqli_query($conn,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result))
{
?>
<head>
<meta charset="utf-8">
	<title>Symphony</title>
	<link rel="icon" type="image/jpg" href="images/title.jpg" style="border-radius:100%">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"></script>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity:1;
  }

  /* Float cancel and delete buttons and add an equal width */
  .cancelbtn, .deletebtn {
    float: left;
    width: 50%;
  }

  /* Add a color to the cancel button */
  .cancelbtn {
    background-color: #ccc;
    color: black;
  }

  /* Add a color to the delete button */
  .deletebtn {
    background-color: #f44336;
  }

  /* Add padding and center-align text to the container */
  .container {
    padding: 16px;
    text-align: center;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* The Modal Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and delete button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .deletebtn {
       width: 100%;
    }
  }
      a:hover{
          text-decoration:none;
      }
      video{
  position: fixed;
   right: 0;
   bottom: 0;
   min-width: 100%;
   min-height: 100%;
}
    body{
        background-color:#333456;
    }
    #imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    width: auto;
    height: 200px;
/*
    padding-left:50px;  */
    overflow: hidden;
    /* -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    border-radius: 100%; */
}

#profile-container img {
    width: 300px;
    height: 200px;
}
#nopadding {
   padding: 0 !important;
   margin: 0 !important;
}
  </style>
</head>
<body>
<center>
<h1 style="color:white;">Profile</h1>
<div class="card" style="width: 25rem; opacity:0.9; background-color:#cfd3ce;">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="profile-container">
   <image id="nopadding" id="profileImage" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTOkHm3_mPQ5PPRvGtU6Si7FJg8DVDtZ47rw&usqp=CAU" />
</div>
<input id="imageUpload" type="file"
       name="profile_photo" placeholder="Photo" required="" capture>
  <div class="card-body">
    <h5 class="card-title"> <i class="fas fa-user-alt"></i> :  <?php echo $rows['fn']; ?></h5>

    <p class="card-text"><i class="fas fa-birthday-cake"></i> : <?php echo $rows['date']; ?></p>
    <p class="card-text"><i class="fas fa-flag"></i> : <?php echo $rows['Country']; ?></p>
    <p class="card-text"><i class="far fa-envelope"></i> : <?php echo $rows['mail']; ?></p>
     <p class="card-text"><i class="fas fa-phone-square-alt"></i> : <?php echo $rows['number']; ?></p>
    <p class="card-text"><a href="logout.php"><button type="button" onclick="logout()" class="btn btn-outline-dark btn-lg btn-block" name="logout">Log Out</button></a></p>
    <p class="card-text"><a href="#" onclick="document.getElementById('id01').style.display='block'"><button type="button"  class="btn btn-outline-dark btn-lg btn-block" name="delacc">Delete Account</button></a></p>
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container">
          <h1>Delete Account</h1>
          <p>Are you sure you want to delete your account?</p>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

          <a href="delacc.php" style="text-decoration:none;">  <button type="button"  class="deletebtn">Delete</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>


</div>
</center>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script>
     $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src',
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
function logout() {
  alert("Logged Out Successfully... click ok to continue!");

}
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
 </script>

</body>
<?php
// close while loop
}
?>
