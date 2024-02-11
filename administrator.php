<?php
require_once "header.php";
 ?>
 
<body>
    <div class="a_wrapper">
        <nav>
            <a class="nav-link" href="participant.php">Next</a>
            <a class="nav-link" href="developer.php">Pervious</a>
        </nav>
        <div class="a_administrator">
    <h1>PATIENT MANAGEMENT AND REPORTING SYSTEM ADMINISTRATION</h1>
    <h2>Welcome Test Surveillance</h2>
    <h3>Your assigned role is administrator</h3>
</div>


        <form>
            <div class="form-field">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" required>
            </div>
            <div class="form-field">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" required>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-field">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

<?php
require_once "footer.php";
 ?>
 </body>
    </html>

























