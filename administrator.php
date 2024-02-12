<?php
require_once "header.php";
 ?>
 
<body>
    <div class="a_wrapper">
        <nav>
            <a class="nav-link" href="#">Ref Number</a>
            <a class="nav-link" href="#">210775</a>
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

           <div class="form-field">
        <label for="date-of-birth">Date of Birth</label>
        <input type="date" id="date-of-birth" required>

        <div class="form-field">
        <label for="address">Address</label>
        <input type="text" id="address" required>
      </div>
      <div class="form-field">
        <label for="city">City</label>
        <input type="text" id="city" required>
      </div>
      <div class="form-field">
        <label for="state">State</label>
        <input type="text" id="state" required>
      </div>
      <div class="form-field">
        <label for="zip">Zip</label>
        <input type="text" id="zip" required>
        </div>
        <div class="form-field">
          <label for="phone-number">Phone Number</label>
          <input type="text" id="phone-number" required>
        </div>
    
          </div>
            <div class="form-field">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once "footer.php";
 ?>
 </body>
    </html>

























