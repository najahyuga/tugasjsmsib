$(document).ready(function() {
    $("#form-validation").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            firstname: {
                required: true,
                minlength: 3
            },
            lastname: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true,
                minlength: 10
            },
            address: {
                required: true,
                minlength: 3
            }
            // created_at: {
            //     required: true
            // }
        },
        messages : {
            first_name: {
                required: "Please enter your first name",
                minlength: "Name should be at least 3 characters"
            },
            last_name: {
                required: "Please enter your last name",
                minlength: "Name should be at least 3 characters"
            },
            email: {
                required: "Please enter your email",
                email: "The email should be in the format: abc@domain.tld"
            },
            phone: {
                required: "Please enter your phone",
                number: "Please enter your phone as a numerical value",
                min: "You must enter a cellphone number of at least 10 digits"
            },
            address: {
                required: "Address null",
                minlength: "Address should be at least 3 characters"
            }
            // created_at: {
            //     required: "Please enter your create data time"
            // }
        }
    });
});
// $(document).ready(function() {
    //     $("#basic-form").validate();
// });