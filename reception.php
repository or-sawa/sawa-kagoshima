<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="株式会社Sawaは、ただのエージェントではなく、キャリアをデザインするデザインカンパニーです。「働くを夢中に。」という理念のもと、本質的な価値を創り続けます。">
  <meta name="keywords" content="株式会社Sawa,求人,転職,鹿児島,保育園,介護,看護,個室ジム,パーソナルトレーナー">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="icon" href="">
  <meta name="theme-color" content="#ffffff">
  <meta property="og:title" content="株式会社Sawa">
  <meta property="og:site_name" content="株式会社Sawa">
  <meta property="og:type" content="website">
  <meta property="og:description" content="株式会社Sawaは、ただのエージェントではなく、キャリアをデザインするデザインカンパニーです。「働くを夢中に。」という理念のもと、本質的な価値を創り続けます。">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <title> 受付完了 | 株式会社Sawa</title>
</head>
<body class>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3 sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2 class="pt-2 text-white">TOPページに戻る</h2>
        </a>
      </div>
    </nav>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

      $header = null;
      $auto_reply_subject = null;
      $auto_reply_text = null;
      $auto_reply_subject = null;
      $auto_reply_text = null;
      date_default_timezone_set('Asia/Tokyo');

      // ヘッダー情報を設定
      $header = "MIME-Version: 1.0\n";
      $header .= "From: Sawa Company <stakeyama32@gmail.com>\n";
      $header .= "Reply-To: Sawa Company <stakeyama32@gmail.com>\n";

      // 件名を設定
      $auto_reply_subject = 'お問い合わせありがとうございます。';

      // 本文を設定
      $auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
      下記の内容でお問い合わせを受け付けました。\n\n";
      $auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
      $auto_reply_text .= "企業名：" . $_POST['your-name'] . "\n";
      $auto_reply_text .= "企業名(フリガナ）：" . $_POST['text-263'] . "\n";
      $auto_reply_text .= "担当者様お名前：" . $_POST['text-264'] . "\n";
      $auto_reply_text .= "電話番号：" . $_POST['tel-248'] . "\n";
      $auto_reply_text .= "メールアドレス：" . $_POST['your-email'] . "\n";
      $auto_reply_text .= "住所：" . $_POST['textarea-591'] . "\n";
      $auto_reply_text .= "派遣希望の職種：" . $_POST['text-266'] . "\n";
      $auto_reply_text .= "派遣希望の内容：" . $_POST['textarea-592'] . "\n";
      $auto_reply_text .= "入力内容のチェック：" . $_POST['acceptance-503'] . "\n\n";
      $auto_reply_text .= "株式会社Sawa 事務局";

      $to = $_POST['your-email'];

      mb_send_mail($to, $auto_reply_subject, $auto_reply_text, $header);

      // 運営側へ送るメールの件名
      $admin_reply_subject = "問い合わせを受け付けました";
      
      // 本文を設定
      $admin_reply_text = "下記の内容で問い合わせがありました。\n\n";
      $admin_reply_text .= "問い合わせ日時：" . date("Y-m-d H:i") . "\n";
      $admin_reply_text .= "企業名：" . $_POST['your-name'] . "\n";
      $admin_reply_text .= "企業名(フリガナ)：" . $_POST['text-263'] . "\n";
      $admin_reply_text .= "担当者様お名前：" . $_POST['text-264'] . "\n";
      $admin_reply_text .= "電話番号：" . $_POST['tel-248'] . "\n";
      $admin_reply_text .= "メールアドレス：" . $_POST['your-email'] . "\n";
      $admin_reply_text .= "住所：" . $_POST['textarea-591'] . "\n";
      $admin_reply_text .= "派遣希望の職種：" . $_POST['text-266'] . "\n";
      $admin_reply_text .= "派遣希望の内容：" . $_POST['textarea-591'] . "\n";
      $admin_reply_text .= "入力内容のチェック：" . $_POST['acceptance-503'] . "\n\n";

      // 運営側へメール送信
      mb_send_mail( 's.seisaku.co@icloud.com', $admin_reply_subject, $admin_reply_text, $header);
    ?>
    
    <h1 style="text-align: center;">
      受付完了しました！　担当者からの連絡をお待ちください。
    </h1>
  <footer class="front_footer">
    <small class="front_footer-copyright">
       Copyright ©︎ 2022 株式会社Sawa. 
    </small>
  </footer>
</body>
</html>