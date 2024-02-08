<?php
require_once "header.php";
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta name = "description" content="lawrence">
<title>Home page for Admistrator</title>
<div class="container-fluid">
    <h1 class="mt-4">PATIENT MANAGEMENT AND REPORTING SYSTEM ADMINISTRATION</h1>
    <h2>Welcome Test Surveillance</h2>
    <h3>Your assigned role is administrator</h3>
    <form action="{{ url_for('administrator_page') }}" method="post">
    <style>
     </style>   
</head>

<body>
    
<article>
    <form>
        <div class ="administrator_1">
      <p> Expand the pages menu on the left to reveal the set of functionalities you have under assigned role</p>    
<p> To configure the system with dynamic variables for system use, expand the configuration sub-menu of the pages menu located at the side bar on the left of the screen</p>
<p>To create new users and manage existing users, expand the users and accounts sub-menu</p> 
<p> To supervise users and data entry, expand the supervision sub_menu</p> 
<details>
<summary>read more</summary> 
<p> To track client's screening, pregnancy and address change history, expand the history sub menu</p>     
    </details>   
</div>
    </form>
  <?php
require_once "footer.php";
 ?>
    </body>
    </html>

























