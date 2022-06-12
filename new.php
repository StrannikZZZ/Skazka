<html>
  <head>
    <title>СКАЗКА</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_new.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://bot.jaicp.com/chatwidget/VoVtSclC%3A88944f857f3bd95c2054eaefac505a2aa7c402db/justwidget.js" async></script>
  </head>
  <body>

    <div class="div1">

      <div class="img">
        <a title="На главную" href="index.htm">
        <img src="img/logo.gif" height="170px" width="220px" />
      </a>
      </div>

      <div class="menu">
        <ul>
          <a href="index.htm" class="men"><li>Главная</li></a>
          <a href="kataloc.php" class="men"><li>Походы</li></a>
          <a href="new.php" class="men"><li>Новости и статьи</li></a>
          <a href="reviews.html" class="men"><li>Отзывы</li></a>
          <a href="contact.htm" class="men"><li>Контакты</li></a>
        </ul>
      </div>
      <div class="qr">
      <img title="Нажмите чтобы увеличить" src="img/qr-code.png" height="150px" width="150px" onclick="changeSizeImage(this)"/>
        <script language = "JavaScript">
var bigsize = "300"; //Размер большой картинки
var smallsize = "150"; //Размер маленькой картинки
function changeSizeImage(im) {
  if(im.height == bigsize) im.height = smallsize;
  else im.height = bigsize;
  if(im.width == bigsize) im.width = smallsize;
  else im.width = bigsize;
}
</script>
      </div>
    </div>

    <div class="content">
       <p style="color: #00BFFF; font-size: 23px; width: 70%; margin: auto; margin-bottom: 20px; text-align: center; font-family: Impact">
        <em>Недаром дети любят сказку. Ведь сказка тем и хороша, что в ней счастливую развязку уже предчувствует душа!
        И на любые испытанья согласны храбрые сердца. В нетерпеливом ожиданье благополучного конца. 
        <br>
        <span style="font-size: 14px;">(Валентин Берестов)</em></span>
      </p>
      <h2 style="text-align: center;">НОВОСТИ:</h2>
      <div class="new">


      <?php
      $dbUser = 'root';
      $dbName = 'skazka';
      $dbPass = '';
      $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
      $query = "set names utf8";
      $mysqli->query($query);
      $query = "select * from new";
      $results = $mysqli->query($query);
      while($row = $results->fetch_assoc()){
        echo '
        <div class="new1">
        <p style="color: rgb(92, 92, 92);">'.$row["date_start"].' '.$row["date"].'</p>
         <img src="'.$row["img"].'" height="30%" width="60%"/>
        <h2 style="color: blue;">'.$row["name"].'</h2>
        <p>
        '.$row["info"].'
        </p>
      </div>
        ';
      }
?>

      <!--
      <div class="new1">
        <p style="color: rgb(92, 92, 92);">Дата публикации: 18.01.22</p>
         <img src="img/new/new_1.gif" height="30%" width="80%"/>
        <h2 style="color: blue;">ВНИМАНИЕ! Изменение в работе офиса</h2>
        <p>
          С 01.02.2022 офис перейдет на новый график. Офис будет открыт с 9:00 до 21:00.
        </p>
      </div>
      <div class="new2">
        <p style="color: rgb(92, 92, 92);">Дата публикации: 10.01.22</p>
        <img src="img/new/new_2.gif" height="30%" width="80%"/>
        <h2 style="color: blue;">Мы снова открыты!</h2>
        <p>
          Наш клуб снова готов радовать Вас незабываемыми и яркими впечатлениями! 
        </p>
      </div>
      <div class="new3">
        <p style="color: rgb(92, 92, 92);">Дата публикации: 30.12.21</p>
        <img src="img/new/new_3.gif" height="30%" width="80%"/>
        <h2 style="color: blue;">С наступающим Новым годом!</h2>
        <p>
          Поздравляем вас с наступающими праздниками!
          Пусть 2022-й будет богатым на путешествия и яркие впечатления! Желаем новых открытий, приятных знакомств, море прекрасных рассветов и закатов и как можно больше моментов настоящего, искреннего счастья.
        </p>
      </div>
-->
    </div>
    <h2 style="text-align: center;">СТАТЬИ:</h2>
    <div class="stat">
   
   
   <?php
      $dbUser = 'root';
      $dbName = 'skazka';
      $dbPass = '';
      $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
      $query = "set names utf8";
      $mysqli->query($query);
      $query = "select * from paper";
      $results = $mysqli->query($query);
      while($row = $results->fetch_assoc()){
        echo '
        <div class="stat1">
        <p style="font-size: 20px;">'.$row["info"].'</p>
      </div>
        ';
      }
?>



    <!--
      <div class="stat1">
        <p style="font-size: 20px;">Прошедшие два года после начала пандемии коронавируса, стали тяжелым испытанием для всех участников индустрии гостеприимства: от отелей и ресторанов до круизных компаний и массовых туроператоров. Турагенты в этой истории оказались буквально на передовой — перед туристами, которые требовали исполнения обязательств туроператоров.</p>
      </div>
      <div class="stat2">
        <p style="font-size: 20px;">Оживление на российском туристическом рынке, а также развитие внутреннего туризма привело к резкому росту числа вакансий в этой отрасли, рассказали специалисты портала SuperJob. По данным сервиса, число предложений на рынке труда в категории «Туризм» в 2021 году выросло в два раза относительно 2020 года.
          <br>
        Больше всего готовы платить менеджеру по туризму в одном из московских турагентств — до 150 тыс. рублей в месяц. На этой должности нужно будет подбирать индивидуальные и групповые туры, консультировать клиентов, а также заниматься подготовкой документов для виз и страховок.</p>
      </div>
      <div class="stat3">
        <p style="font-size: 20px;">Ростуризм предлагает сделать членство в саморегулируемых организациях (СРО) обязательным для работы турагентов в России. Такие предложения содержатся в проекте нового закона о туризме, предложенном ведомством на рассмотрение.</p>
      </div>
    -->
    </div>
    </div>

    <div class="footer">

      <div class="footer1">
        ООО «СКАЗКА» © Copyright, 2022
      </div>
    </div>
  </body>
</html>
