<?php
    $to = 'negocios@ips-mexico.com';  // Your Email Address

  $headers = 'From: Contact Form';
    $name = $_POST['cname'];
    $email = $_POST['cemail'];
    $subject = $_POST['csubject'];
    $comment = $_POST['ccomment'];
    $body = " Name: $cname\n E-Mail: $cemail\n Subject: $csubject\n Comment: $ccomment\n";

    $answer = $_POST['answer'];
    if ($_POST['submit'] && $answer == '7') {          // Your Answer
        if (mail ($to, $subject, $body, $headers)) {
        echo '<p class="contact-success">Gracias por contactarnos. Thank you for contacting us.</p>';
    } else {
        echo '<p class="contact-error">Algo salió mal. Por favor, inténtelo de nuevo. Something went wrong. Please enter your answer again.</p>';
    }
    } else if ($_POST['submit'] && $answer != '7') {   // Your Answer
    echo '<p class="contact-error">Por favor, introduzca el número de verificación correcta. Please enter the correct answer.</p>';
    }

// Spam Prevention http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/
?>
