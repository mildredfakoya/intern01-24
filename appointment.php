<?php
require_once "header.php";
 ?>
	<link rel="stylesheet" type="text/css" href="css/appointment.css">
<body>
<div class="a_appoint">
    <h1>Appointment Registration Form</h1>
        <nav>
            <a class="nav-link" href="#">Ref Number</a>
            <a class="nav-link" href="#">210775</a>
        </nav>
</div>
	<form id="example-form">
		<label for="firstname">Firstname:</label>
		<input type="text" id="firstname" name="firstname" required>
		<span class="error-message" id="firstname-error"></span><br>

		<label for="middlename">Middlename:</label>
		<input type="text" id="middlename" name="middlename"><br>
        <span class="error-message" id="middlename-error"></span><br>


		<label for="lastname">Lastname:</label>
		<input type="text" id="lastname" name="lastname" required>
		<span class="error-message" id="lastname-error"></span><br>

		<label for="age">Age:</label>
		<input type="number" id="age" name="age" min="1" max="120" required>
		<span class="error-message" id="age-error"></span><br>

		<label for="sex">Sex:</label>
		<select id="sex" name="sex" required>
			<option value="" selected disabled hidden>Select an option</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		<span class="error-message" id="sex-error"></span><br>

		<label for="hospital-record-id">Hospital Record ID:</label>
		<input type="text" id="hospital-record-id" name="hospital-record-id" required>
		<span class="error-message" id="hospital-record-id-error"></span><br>

		<label for="appointment-date">Date of Appointment:</label>
		<input type="date" id="appointment-date" name="appointment-date" required>
		<span class="error-message" id="appointment-date-error"></span><br>

		<label for="appointment-time">Time of Appointment:</label>
		<input type="time" id="appointment-time" name="appointment-time" required>
		<span class="error-message" id="appointment-time-error"></span><br>

		<label for="gender-pronouns">Gender Pronouns:</label>
		<input type="text" id="gender-pronouns" name="gender-pronouns"><br>
        <span class="error-message" id="gender-pronouns-error"></span><br>


		<label for="sexual-orientation">Sexual Orientation:</label>
		<input type="text" id="sexual-orientation" name="sexual-orientation"><br>
        <span class="error-message" id="sexual-orientation-error"></span><br>


		<label for="address">Home Address:</label>
		<textarea id="address" name="address" required></textarea>
		<span class="error-message" id="address-error"></span><br>

		<label for="country">Country:</label>
		<select id="country" name="country" required>
			<option value="" selected disabled hidden>Select a country</option>
			<option value="USA">USA</option>
			<option value="Canada">Canada</option>
			<option value="Mexico">Mexico</option>
		</select>
		<span class="error-message" id="country-error"></span><br>

        <label for="stateCity">State/City:</label>
  <input type="text" id="stateCity" name="stateCity" required>
  <span class="error-message" id="stateCity-error"></span><br>

  <label for="zipCode">Zip Code:</label>
  <input type="text" id="zipCode" name="zipCode" required>
  <span class="error-message" id="zipCode-error"></span><br>

  <button onclick="saveData()" id="Save">save</button>
</form>
<script src="appointment.js"></script>    

       
<?php
require_once "footer.php";
 ?>
 </body>
    </html>
