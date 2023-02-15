<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$token = "1729126717:AAH3p26awsYbD6BAEtQQFB0FIq47eBPl-yI";
$chat_id = "-515702547";
$arr = array(
  'Від кого: ' => $name,
  'Email: ' => $email,
  'Повідомлення: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Thank you – Have a nice day</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      html,
      body,
      div,
      span,
      applet,
      object,
      iframe,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p,
      blockquote,
      pre,
      a,
      abbr,
      acronym,
      address,
      big,
      cite,
      code,
      del,
      dfn,
      em,
      img,
      ins,
      kbd,
      q,
      s,
      samp,
      small,
      strike,
      strong,
      sub,
      sup,
      tt,
      var,
      b,
      u,
      i,
      center,
      dl,
      dt,
      dd,
      ol,
      ul,
      li,
      fieldset,
      form,
      label,
      legend,
      table,
      caption,
      tbody,
      tfoot,
      thead,
      tr,
      th,
      td,
      article,
      aside,
      canvas,
      details,
      embed,
      figure,
      figcaption,
      footer,
      header,
      hgroup,
      menu,
      nav,
      output,
      ruby,
      section,
      summary,
      time,
      mark,
      audio,
      video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
      }
      article,
      aside,
      details,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      menu,
      nav,
      section {
        display: block;
      }
      body {
        line-height: 1;
      }
      ol,
      ul {
        list-style: none;
      }
      blockquote,
      q {
        quotes: none;
      }
      blockquote:before,
      blockquote:after,
      q:before,
      q:after {
        content: "";
        content: none;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }
    </style>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <h1 class="text" aria-label="Thank you. Have a nice day!">
      <span class="heading" aria-hidden="true">
        <span class="filled">Thank you</span>
      </span>
      <span class="subheading" aria-hidden="true">Have a nice day</span>
    </h1>
  </body>
</html>
