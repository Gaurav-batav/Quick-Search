<?php 
include('header2.php');

$msg = '';
if(isset($_POST['submit'])) {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $job_role = htmlspecialchars($_POST['job_role']);
    $message = htmlspecialchars($_POST['message']);
    $date = date('Y-m-d H:i:s');

    // Email to admin
    $subject = 'Job Application Request by '.$name;
    $message_body = '<html><body>';
    $message_body .= '<table rules="all" cellpadding="10">';
    $message_body .= "<tr style='background: #eee;'><td colspan='2'><strong>Job Application Details : <span style='color:#d24836'>". $name." </span> </strong> </td></tr>";
    $message_body .= "<tr><td><strong>Name</strong> </td><td>: " . $name . "</td></tr>";
    $message_body .= "<tr><td><strong>Contact Number</strong> </td><td>: " . $phone . "</td></tr>";
    $message_body .= "<tr><td><strong>Email</strong> </td><td>: " . $email . "</td></tr>";
    $message_body .= "<tr><td><strong>Job Role</strong> </td><td>: " . $job_role . "</td></tr>";
    $message_body .= "<tr><td><strong>Message</strong> </td><td>: " . $message . "</td></tr>";
    $message_body .= "<tr><td><strong>Date</strong> </td><td>: " . $date . "</td></tr>";
    $message_body .= "</table>";
    $message_body .= "</body></html>";

    $to = "your-email@example.com"; 
    $bcc = "backup-email@example.com"; 

    $headers = "From: ".strip_tags($email). "\r\n";
    $headers .= "Reply-To: ".strip_tags($email). "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "Bcc: ".$bcc . "\r\n";

    // Attempt to send mail (suppress errors with @)
    $mail_sent = @mail($to, $subject, $message_body, $headers);

    // Set message based on mail success
    $msg = $mail_sent 
        ? "<div class='alert alert-success'>Thank You! Your job application has been received.</div>"
        : "<div class='alert alert-danger'>Your request has been received but there was an issue sending the confirmation.</div>";

    // Redirect to thank you page
    echo '<script type="text/javascript">';
    echo 'window.location.href="thank-you.php";';
    echo '</script>';
    exit();
}
?>

<!-- Error/404 Section Area -->
<section class="our-error">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="animate_content text-center text-xl-start">
                    <div class="animate_thumb">
                        <img class="w-100" src="images/icon/error-page-img.svg" alt="error-page-img">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
                <div class="inquiry-form mb30-md">
                    <form class="form-style1" method="post" action="">
                        <div class="row">
                            <div class="main-title mb10">
                                <h2 class="title">Apply Job</h2>
                                <p class="paragraph fz15">Fill out the form and we'll be in touch soon!</p>
                                <?php echo $msg; ?>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color"> Name <span class="text-red">* </span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color"> Mobile No <span class="text-red">* </span></label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Mobile No"  minlength="10" maxlength="10" required onkeypress="return isNumberKey(event)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color"> Email <span class="text-red">* </span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color"> Job Role <span class="text-red">* </span></label>
                                    <select class="form-control" name="job_role" id="job_role" required>
                                        <option value="" disabled selected> Select Job Role </option>
                                        <option value="admin">Admin</option>
                                        <option value="hr">HR</option>
                                        <option value="sales_excutive">Sales Executive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Message</label>
                                    <textarea name="message" id="textarea1" cols="30" rows="3" placeholder="Type Here..."></textarea>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="ud-btn btn-thm">Submit <i class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
var verifyCallback = function(response) {
    //alert(response);
};
var widgetId1;
var widgetId2;
var onloadCallback = function() {
    grecaptcha.render('example3', {
        'sitekey' : '6LcSbBQUAAAAAEbi7hllc5b_z8ng9kifxFCrLD1x',
        'callback' : verifyCallback,
        'theme' : 'light'
    });
    grecaptcha.render('RecaptchaField2', {'sitekey' : '6LcSbBQUAAAAAEbi7hllc5b_z8ng9kifxFCrLD1x'});
};

$(function() {
    $("#departure").datepicker({
        dateFormat: "dd/mm/yy",
        changeMonth: true,
        changeYear: true,
        minDate: +1
    });
    $("#departure").datepicker("setDate", "0");
});

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

// Form validation
document.getElementById('contact-form').addEventListener('submit', function(e) {
    let isValid = true;
    const requiredFields = this.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = 'red';
        } else {
            field.style.borderColor = '';
        }
    });
    
    const phoneField = this.querySelector('[name="phone"]');
    if (phoneField && !/^\d{10}$/.test(phoneField.value)) {
        isValid = false;
        phoneField.style.borderColor = 'red';
        alert('Please enter a valid 10-digit mobile number');
    }
    
    const emailField = this.querySelector('[name="email"]');
    if (emailField && emailField.value && !/^\S+@\S+\.\S+$/.test(emailField.value)) {
        isValid = false;
        emailField.style.borderColor = 'red';
        alert('Please enter a valid email address');
    }
    
    if (!isValid) {
        e.preventDefault();
    }
});
</script>
<?php include('footer.php'); ?>