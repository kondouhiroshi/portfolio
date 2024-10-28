<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<title>近藤宏史のダミーサイトへようこそ</title>
<body>
  <?php include(dirname(__file__).'/header.php');?>
  <?php include(dirname(__file__).'/slide.php');?>

<div class=kv></div>

<div class="catch">
    <h1>今年も始まる<span>夏祭り</span></h1>
</div>

<div>
  <h3 class="service" id="service">スケジュール</h3> 
</div>

<div class="service_content">
    <div class="service_group">
            <div class="service_menu  active"  id="web">
                <p>９月１日</p>
            </div> 
            <div class="service_menu" id="seo">
                <p>９月２日</p>
            </div>
            <div class="service_menu" id="app">
                <p>９月３日</p>
            </div>
    </div> 
            <div class="service_plan">
                <p class="service_plans active" id="web_plan">９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日９月１日</p>
                <p class="service_plans" id="seo_plan">９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日９月２日</p>
                <p class="service_plans" id="app_plan">９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日９月３日</p>
            </div> 
</div>

  <h3 class="access" id="access">アクセス</h3>
    <h6 class="addres">〒771-1154 徳島県徳島市応神町
      東貞方南川淵</h6>
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.067702094407!2d134.51810744342896!3d34.10708029254509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a43298fb3%3A0x1bc47188f8f9226a!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b-c56We55S65p2x6LKe5pa55Y2X5bed5re1!5e0!3m2!1sja!2sjp!4v1724429217570!5m2!1sja!2sjp"
     width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
<div class="contact_header">
  <h3  id="contact">席予約</h3>

  <form id=next_reserve action="./reserve.php" method="post">
    <div class="form_content">
      <label for="name">お名前<span class="required">*必須</span></label>
      
      <input required type="text" name="name" placeholder="例）田中太郎" value="<?php
if( isset($_POST["name"]) ) 
{echo $_POST["name"];
}
?>
">
      </div>
      <div class="form_content">
      <label for="seat">席の場所<span class="required">*必須</span></label>
      <select required name="seat" >
      <option value="">---</option>
      <?php $seats=array("SS席","S席","A席","B席","C席");
      foreach($seats as $value){
        if(isset($_POST['seat'])){
          $seats = $_POST['seat'];
        }
  
        if($value === $seats){
          // ① POST データが存在する場合はこちらの分岐に入る
          echo "<option value='$value' selected>".$value."</option>";
        }else{
          // ② POST データが存在しない場合はこちらの分岐に入る
          echo "<option value='$value'>".$value."</option>";
        }
      
      }
      ?>
    
      </select>
      </div>
      <div class="form_content">
      <label for="e-mail">メールアドレス<span class="required">*必須</span></label>
      <input required type="e-mail" name="e-mail" placeholder="abcd123@example.com" value="<?php
if( isset($_POST["e-mail"]) ) 
{echo $_POST["e-mail"];
}
?>">
      </div>
      <div class="form_content">
      <label for="tel">電話番号<span class="may">*任意</span></label>
      <input type="text" id="myInput" name="tel" placeholder="09012345678" value="<?php
if( isset($_POST["tel"]) ) 
{echo $_POST["tel"];
}
?>">
      <div id="errorMessage" style="color: red;"></div>
    </div>      
<div class="form_content">
    <input type="submit" disabled  id ="next"  value="送信" >
    </div>
</form>
</div>
<?php include(dirname(__file__).'/footer.php');?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8/swiper-bundle.min.js"></script>    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./js/index.js"></script>

</body>

