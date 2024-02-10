<?php
require_once "header.php"
 ?>
<body>
<div class="col-s-2">
        <div class="dev_sidenav">
        <h5>CORE</h5>
        <a href="#">Home</a>
        <h5>DOWNLOADS</h5>
        <a href="#">Manuals</a>
        <div class="dev_dropdown">
        <h5>FUNCTIONALITIES</h5>
        <a href="#">Pages</a>
        <div  class="dev_dropdown-content">
        <a id="dev_drop-content" href="#">Users & Accounts</a>
        <div id="dev_dropdown-content">
            <a class="dev_dropdown-content" href="#">Create Users</a>
            <a href="#"> Manage Existing Users </a>
        </div>
        <div>
        <a id="dev_drop-content" href="#">Create Training</a>
        <div id="dev_dropdown-content">
        <a>Create New Trainings</a>
        <a>View Facilitators</a>
        <a>Participants Schedule</a>
       
            </div>
            </div>
            </div>
            </div>
            <div id="footer">Loged in as:<br>
                Test Administrator
            </div> 
        </div>
        
    </div>
        
    <section class="row"> 
    <article class="col-s-8">
    <div class="dev_head">
      <h2>Training & Certification System</h2>
    <h4>Developer</h4>
    </div>
    
    <div class="dev_body">
    <strong>Welcome Test Administrator</strong><br>
    <p>Your assigned role is <strong><i>Developer</i></strong></p>
    <p>Expand the pages manu on the left to reveal the set of functionalities for your assigned role</p>
    <p>To <strong>create new users, manage existing users or print a list of users</strong>, expand the <a href="#"><i>Users & Accounts</i></a> sub-manu</p>
    <p>To <strong>create new trainings, view facilitators and participants schedule</strong>, expand the <a href="#"><i>Create Training</i></a> sub-manu</p>
    </div>
    </article>
    </section>
</body>
<?php
require_once "footer.php"
 ?>
</html>
