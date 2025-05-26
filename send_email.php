<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 配置信息
    $to = "zzulchao@163.com";  // 替换为你的邮箱
    $subject = "新的联系表单提交";

    // 收集表单数据
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 构造邮件内容
    $email_content = "姓名: $name\n";
    $email_content .= "单位: $company\n";
    $email_content .= "邮箱: $email\n\n";
    $email_content .= "留言内容:\n$message";

    // 邮件头
    $headers = "From: $name <$email>";

    // 发送邮件
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('邮件发送成功！');history.go(-1);</script>";
    } else {
        echo "<script>alert('邮件发送失败，请重试！');history.go(-1);</script>";
    }
}
?>
