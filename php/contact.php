<!DOCTYPE html>

<?php

// 変数の初期化
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

} elseif( !empty($_POST['btn_submit']) ) {

  $page_flag = 2;

}
?>


<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="株式会社Sawaは、ただのエージェントではなく、キャリアをデザインするデザインカンパニーです。「働くを夢中に。」という理念のもと、本質的な価値を創り続けます。">
  <meta name="keywords" content="株式会社Sawa,求人,転職,鹿児島,保育園,ハコフィット,チェストJobs">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="stylesheet" href="../css/partners.css">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
  <link rel="icon" href="../images/サイトアイコン.png">
  <link rel="canonical" href="https://www.sawa.kagoshima.jp/contact.php"/>
  <meta name="theme-color" content="#ffffff">
  <meta property="og:title" content="株式会社Sawa">
  <meta property="og:site_name" content="株式会社Sawa">
  <meta property="og:type" content="website">
  <meta property="og:description" content="株式会社Sawaは、ただのエージェントではなく、キャリアをデザインするデザインカンパニーです。「働くを夢中に。」という理念のもと、本質的な価値を創り続けます。">
  <meta property="og:url" content="https://www.sawa.kagoshima.jp/contact.php">
  <meta property="og:image" content="">
  <title> 派遣依頼 | 株式会社Sawa</title>
</head>
<body class>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3 sticky-top">
      <div class="container">
        <a class="navbar-brand" href="../index.html">
          <h2 class="pt-2 text-white">株式会社Sawa</h2>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="background-color: #fff;"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.php">お問い合わせ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../partners.html">取引先一覧</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../blog.html">新着情報</a>
            </li>
            <!-- ボタン部分 -->
            <div class="bl_sizeBtn_wrap">
              <span class="text-white">文字サイズ変更</span>
              <button type="button" class="bl_sizeBtn" id="fz_sm">小</button>
              <button type="button" class="bl_sizeBtn is_active" id="fz_md">中</button>
              <button type="button" class="bl_sizeBtn" id="fz_lg">大</button>
            </div>
          </ul>
        </div>
      </div>
      
    </nav>
    <div class="topicpathBlock showTopicpathBlock clearfix" style="margin-top: 10px;">
      <div class="topicpathBox">
        <ol>
          <li class="activepath">
            <a href="../index.html">
              ホーム
            </a>
          </li>
          <li class="activepath">
            <a>
              お問い合わせ
            </a>
          </li>
        </ol>
      </div>
    </div>
    <div class="l-contents">
      <div class="l-contents__inner l-inner">
        <article class="p-entry l-primary">
          
            <h1 class="p-entry__title" style="font-size: 34px;">
              企業向け | 派遣依頼フォーム
            </h1>
          
            <br>

            <hr>

          <div class="p-entry__body">
            <p>
              当WEBサイトでは、企業様からの派遣スタッフをご依頼いただくための入り口として、
              派遣スタッフ依頼フォームを設けております。
              <br>
              以下のフォームにご明記の上、送信ボタンを押してください。
            </p>
            <p>
              通常、3営業日以内のご返信を差し上げますが1週間経ちましても返信がない場合は、送信トラブルの可能性がございますので、
              その際はお手数でございますが、株式会社Sawa(099-297-6922)までお問い合わせくださいませ。
            </p>

            <?php if( $page_flag === 1 ): ?>

            <h1 style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 25px;">入力内容の確認</h1>

            <form method="post" action="reception.php" style="text-align: center;">
              <div class="element_wrap">
                <label>企業名</label>
                <p><?php echo $_POST['your-name']; ?></p>
              </div>
              <div class="element_wrap">
                <label>企業名(フリガナ）</label>
                <p><?php echo $_POST['text-263']; ?></p>
              </div>
              <div class="element_wrap">
                <label>担当者様お名前</label>
                <p><?php echo $_POST['text-264']; ?></p>
              </div>
              <div class="element_wrap">
                <label>お電話番号</label>
                <p><?php echo $_POST['tel-248']; ?></p>
              </div>
              <div class="element_wrap">
                <label>メールアドレス</label>
                <p><?php echo $_POST['your-email']; ?></p>
              </div>
              <div class="element_wrap">
                <label>会社ご住所</label>
                <p><?php echo $_POST['textarea-591']; ?></p>
              </div>
              <div class="element_wrap">
                <label>派遣希望の職種</label>
                <p><?php echo $_POST['text-266']; ?></p>
              </div>
              <div class="element_wrap">
                <label>派遣依頼の内容</label>
                <p><?php echo $_POST['textarea-592']; ?></p>
              </div>
              <div class="element_wrap">
                <label>入力内容のチェック</label>
                <p><?php echo $_POST['acceptance-503']; ?></p>
              </div>

              <a href="contact.php">戻る</a>
              <input type="submit" name="btn_submit" value="送信">
              <input type="hidden" name="your-name" value="<?php echo $_POST['your-name']; ?>">
              <input type="hidden" name="text-263" value="<?php echo $_POST['text-263']; ?>">
              <input type="hidden" name="text-264" value="<?php echo $_POST['text-264']; ?>">
              <input type="hidden" name="tel-248" value="<?php echo $_POST['tel-248']; ?>">
              <input type="hidden" name="your-email" value="<?php echo $_POST['your-email']; ?>">
              <input type="hidden" name="textarea-591" value="<?php echo $_POST['textarea-591']; ?>">
              <input type="hidden" name="text-266" value="<?php echo $_POST['text-266']; ?>">
              <input type="hidden" name="textarea-592" value="<?php echo $_POST['textarea-592']; ?>">
              <input type="hidden" name="acceptance-503" value="<?php echo $_POST['acceptance-503']; ?>">
            </form>

            <?php elseif( $page_flag === 2 ): ?>

            <p>送信が完了しました。</p> 

            <?php else: ?>

            <div role="form" class="wpcf7" id="wpcf7-f1176-p1177-o1" lang="ja" dir="ltr">
              <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
              </div>
              <form action="" method="post" class="wpcf7-form init">
                <div style="display: none;">

                </div>
                <p>
                  <label>
                    企業名
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                      <input type="text" name="your-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    企業名(フリガナ)
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="text-263">
                      <input type="text" name="text-263" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    担当者様お名前
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="text-264">
                      <input type="text" name="text-264" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    お電話番号
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="tel-248">
                      <input type="text" name="tel-248" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    メールアドレス
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                      <input type="text" name="your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    会社ご住所
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="textarea-591">
                      <input type="text" name="textarea-591" cols="40" rows="10" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    派遣希望の職種
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="text-266">
                      <input type="text" name="text-266" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <label>
                    派遣依頼の内容などをご記入ください。
                    <br>
                    <span class="wpcf7-form-control-wrap" data-name="textarea-592">
                      <input type="text" name="textarea-592" cols="40" rows="10" class="wpcf7-form-control wpcf7-text wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required="required">
                    </span>
                  </label>
                </p>
                <p>
                  <span class="wpcf7-form-control-wrap" data-name="acceptance-503">
                    <span class="wpcf7-form-control wpcf7-acceptance">
                      <span class="wpcf7-list-item">
                        <input type="checkbox" name="acceptance-503" value="1" aria-invalid="false" required="required">
                      </span>
                    </span>
                  </span>
                  内容にお間違いがなければ、チェックをお願いします。
                </p>
                <p>
                  <input type="submit" value="入力内容を確認" class="wpcf7-form-control has-spinner wpcf7-submit" name="btn_confirm">
                  <span class="wpcf7-spinner">

                  </span>
                </p>
              </form>
            </div>
          </div>
        </article>
      </div>
    </div>
  </main>

  <?php endif; ?>

  <footer class="front_footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
         <div class="col-md-4">
            <h4 class="text-white">THE CAREER DESIGN COMPANY.</h4>
         </div>
         <div class="col-md-2">
           <h5 class="text-white">株式会社Sawa</h5>
           <ul class="list-unstyled">
            <li><a href="../company/about.html">会社概要</a></li>
            <li><a href="../company/career.html">Sawaの特典</a></li>
            <li><a href="../company/client.html">法人のお客さまへ</a></li>
            <li><a href="../info.html">労働者派遣事業に係る情報提供</a></li>
           </ul>
         </div>
         <div class="col-md-4">
            <h5 class="text-white">Company</h5>
            <ul class="list-unstyled">
             <li class="text-white">Name: 株式会社Sawa</li>
             <li class="text-white">Address: 890-0056 鹿児島市下荒田2丁目25-1-1F</li>
             <li class="text-white">Email: s.seisaku.co@icloud.com</li>
             <li class="text-white">Phone: 099-297-6922</li>
            </ul>
         </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
         CopyRight 2022 Sawa Co.,LTD. All Rights Reserved.
      </div>
    </div>
  </footer>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/script.js"></script>
</body>
</html>