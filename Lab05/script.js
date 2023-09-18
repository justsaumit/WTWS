document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registrationForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        const fname = document.getElementById("fname").value;
        const lname = document.getElementById("lname").value;
        const gender = document.getElementById("gender").value;
        const phone = document.getElementById("phone").value;
        const email = document.getElementById("email").value;
        const address = document.getElementById("address").value;
        const department = document.querySelector('input[name="department"]:checked');

        const verificationText = `
            First Name: ${fname}\n
            Last Name: ${lname}\n
            Gender: ${gender}\n
            Phone Number: ${phone}\n
            Email Address: ${email}\n
            Home Address: ${address}\n
            Department: ${department ? department.value : "Not specified"}\n
        `;

        const isVerified = window.confirm("Please verify the entered information:\n\n" + verificationText + "\n\nDo you want to proceed?");

        if (isVerified) {
            alert("Form successfully submitted!");
            form.reset(); // Clear the form fields
        }
    });
});
