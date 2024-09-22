<html>
    <body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات من النموذج
    $firstName = htmlspecialchars($_POST['kb_field_0']);
    $lastName = htmlspecialchars($_POST['kb_field_1']);
    $email = htmlspecialchars($_POST['kb_field_2']);
    $subject = htmlspecialchars($_POST['kb_field_3']);
    $message = htmlspecialchars($_POST['kb_field_4']);

    // إعداد البريد الإلكتروني
    $to = "algadra.ye@gmail.com"; // استبدل هذا بعنوان بريدك الإلكتروني
    $subject = "New Contact Form Submission: " . $subject;
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
</body>
        </html>