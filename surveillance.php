<?php
  require_once "header.php";
 ?>
<body>


<!-- top navbar -->
<nav class="navbar navbar-expand-lg
            navbar-light bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <!-- hamburger button that toggles the navbar-->
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link
                    active" href="#">Home
                  </a>
                <a class="nav-item nav-link" href="#">About</a>
                <a class="nav-item nav-link" href="#">Blog</a>
                <a class="nav-item nav-link" href="#">Events</a>
            </div>
        </div>
    </nav>










<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Screening</a>
  <a href="#">Prevention/Control</a>
  <a href="#">OECS M&E</a>
  <button class="dropdown-btn">Reports 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">HIV</a>
    <a href="#">TB</a>
    <a href="#">Syphilis cases</a>
  </div>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<span style="font-size:23px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>



<section class="S_grid_container">
  <div class="row">
       <div class="col-xl-6 col-md-6">
           <div class="card bg-info class mb-4">
             <h2 class='card-header bg-primary'>Patient Management & Reporting System</h2>
             <h3 >Reporting</h3>
               <div class="card-body bg-white">
                 <h5>Welcome test surveillance</h5>
                  <p>Your assigned role is <b>Monitoring and Reporting</b>:<br/><br/>
                  <p>Expand the pages menu on the left to reveal the set of functionalities
                    you have under your assigned role.<br/><br/>

                <i> To get the Screening, Prevention/Control and OECS M&E auto-generated Report,
                  expand the <b>Screening,Prevention and Control</b> sub-menu of the pages menu
                  located at the side bar on the left of the screen.<br/><br/>

                2. To get report on HIV, TB, Syphilis Cases OECS Summary Sheet,
                expand the <b>Commitment to the 90-90-90 Target</b> sub-menu.<br/><br/>

                3. To get reports on Antenatal and Exposed Infants, expand the <b>Antenatal Reporting </b> sub-menu. <br/><br/>

                4. To get pharmacy reports, expand the <b>Pharmacy Report</b> sub-menu.<br/><br/>
                </i>
                </p>
                <div class="card-footer d-flex align-items-center justify-content-between">
               </div>
           </div>
       </div>
     </div>

</section>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "180px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}




var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<?php
  require_once "footer.php";
 ?>
</body>
</html>
