const firstnameInput = document.getElementById("firstname");
const lastnameInput = document.getElementById("lastname");
const middlenameInput = document.getElementById("middlename");
const ageInput = document.getElementById("age");
const hospitalRecordIdInput = document.getElementById("hospital-record-id");
const appointmentDateInput = document.getElementById("appointment-date");
const appointmentTimeInput = document.getElementById("appointment-time");
const genderpronounsInput = document.getElementById("genderpronouns");
const sexualorientationInput = document.getElementById("sexualorientation");
const addressInput = document.getElementById("address");
const countryInput = document.getElementById("country");
const stateCityInput = document.getElementById("stateCity");
const zipCodeInput = document.getElementById("zipCode");

firstnameInput.addEventListener("input", validateFirstname);
lastnameInput.addEventListener("input", validateLastname);
middlenameInput.addEventListener("input", validateMiddlename);
ageInput.addEventListener("input", validateAge);
hospitalRecordIdInput.addEventListener("input", validateHospitalRecordId);
appointmentDateInput.addEventListener("input", validateAppointmentDate);
appointmentTimeInput.addEventListener("input", validateAppointmentTime);
genderpronounsInput.addEventListener("input", validateGenderPronouns);
sexualorientationInput.addEventListener("input", validateSexualOrientation);
addressInput.addEventListener("input", validateAddress);
countryInput.addEventListener("input", validateCountry);
stateCityInput.addEventListener("input", validateStateCity);
zipCodeInput.addEventListener("input", validateZipCode);

function validateFirstname() {
  if (firstnameInput.validity.valueMissing) {
    firstnameInput.setCustomValidity("First name is required.");
  } else {
    firstnameInput.setCustomValidity("");
  }
}

function validateLastname() {
  if (lastnameInput.validity.valueMissing) {
    lastnameInput.setCustomValidity("Last name is required.");
  } else {
    lastnameInput.setCustomValidity("");
  }
}

function validateMiddlename() {
    if (middlenameInput.validity.valueMissing) {
      middlenameInput.setCustomValidity("Middle name is required.");
    } else {
      middlenameInput.setCustomValidity("");
    }
  }

function validateAge() {
  if (ageInput.validity.valueMissing || ageInput.validity.rangeUnderflow || ageInput.validity.rangeOverflow) {
    ageInput.setCustomValidity("Please enter a valid age between 1 and 120.");
  } else {
    ageInput.setCustomValidity("");
  }
}

function validateHospitalRecordId() {
  if (hospitalRecordIdInput.validity.valueMissing) {
    hospitalRecordIdInput.setCustomValidity("Hospital Record ID is required.");
  } else {
    hospitalRecordIdInput.setCustomValidity("");
  }
}

function validateAppointmentDate() {
  if (appointmentDateInput.validity.valueMissing) {
    appointmentDateInput.setCustomValidity("Date of Appointment is required.");
  } else {
    appointmentDateInput.setCustomValidity("");
  }
}

function validateAppointmentTime() {
  if (appointmentTimeInput.validity.valueMissing) {
    appointmentTimeInput.setCustomValidity("Time of Appointment is required.");
  } else {
    appointmentTimeInput.setCustomValidity("");
  }
}

function validateGenderPronouns() {
    if (genderpronounsInput.validity.valueMissing) {
        genderpronounsInput.setCustomValidity("Gender Pronouns is required.");
    } else {
        genderpronounsInput.setCustomValidity("");
    }
  }

  function validateSexualOrientation() {
    if (sexualorientationInput.validity.valueMissing) {
        sexualorientationInput.setCustomValidity("Sexual Orientation is required.");
    } else {
        sexualorientationInput.setCustomValidity("");
    }
  }

function validateAddress() {
  if (addressInput.validity.valueMissing) {
    addressInput.setCustomValidity("Home Address is required.");
  } else {
    addressInput.setCustomValidity("");
  }
}

function validateCountry() {
  if (countryInput.validity.valueMissing) {
    countryInput.setCustomValidity("Country is required.");
  } else {
    countryInput.setCustomValidity("");
  }
}

function validateStateCity() {
  if (stateCityInput.validity.valueMissing) {
    stateCityInput.setCustomValidity("State/City is required.");
  } else {
    stateCityInput.setCustomValidity("");
  }
}

function validateZipCode() {
  if (zipCodeInput.validity.valueMissing) {
    zipCodeInput.setCustomValidity("Zip Code is required.");
  } else {
    zipCodeInput.setCustomValidity("");
  }
}

    // save form data to local storage
    function saveData() {
        const firstnameInput = document.getElementById("firstname");
        const middlenameInput = document.getElementById("middlename");
        const lastnameInput = document.getElementById("lastname");
        const ageInput = document.getElementById("age");
        const sexInput = document.getElementById("sex");
        const hospitalRecordIdInput = document.getElementById("hospital-record-id");
        const appointmentDateInput = document.getElementById("appointment-date");
        const appointmentTimeInput = document.getElementById("appointment-time");
        const genderPronounsInput = document.getElementById("gender-pronouns");
        const sexualOrientationInput = document.getElementById("sexual-orientation");
        const addressInput = document.getElementById("address");
        const countryInput = document.getElementById("country");
        const stateCityInput = document.getElementById("stateCity");
        const zipCodeInput = document.getElementById("zipCode");
      
        const formData = {
          firstname: firstnameInput.value,
          middlename: middlenameInput.value,
          lastname: lastnameInput.value,
          age: ageInput.value,
          sex: sexInput.value,
          hospitalRecordId: hospitalRecordIdInput.value,
          appointmentDate: appointmentDateInput.value,
          appointmentTime: appointmentTimeInput.value,
          genderPronouns: genderPronounsInput.value,
          sexualOrientation: sexualOrientationInput.value,
          address: addressInput.value,
          country: countryInput.value,
          stateCity: stateCityInput.value,
          zipCode: zipCodeInput.value
        };
      
        localStorage.setItem("formData", JSON.stringify(formData));
      }