// Initialize EmailJS with your user ID
    emailjs.init('vPMBuTFsB-6JZkBvy');

    function formvalidation() {
        var from_name = document.getElementById("fullName").value;
        var email_id = document.getElementById("email_id").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        if (from_name === "" || email_id === "" || phone === "" || message === "") {
            alert("Please provide all the required data.");
        } else {
            // Use the sendMail function to send the email
            sendMail();
        }
    }

    function sendMail() {
        var params = {
            from_name: document.getElementById("fullName").value,
            email_id: document.getElementById("email_id").value,
            phone: document.getElementById("phone").value,
            message: document.getElementById("message").value
        };

        // Replace "service_kuble9n" and "template_2t6n7id" with your EmailJS service ID and template ID
        emailjs.send("service_kuble9n", "template_2t6n7id", params).then(function (res) {
            alert("Success! " + res.status);
        }, function (error) {
            alert("Error: " + error);
        });
    }

