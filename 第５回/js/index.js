$(function(){
    $(".service_menu").click(function(){
        let id = $(this).attr("id");
        $(".service_menu").removeClass("active");
        $(this).addClass("active");
        $(".service_plans").removeClass("active")
        $("#"+id+"_plan").addClass("active")
    });
});



  $('#next_reserve').on('submit', function(event) {
     event.preventDefault();
    var input = $('#myInput').val();
  
    // 日本の電話番号の正規表現 (固定電話、携帯、フリーダイヤル、IP電話を考慮)
  var regex = /^(0[5-9]0[-(]?[0-9]{4}[-)]?[0-9]{4}|0120[-]?\d{1,3}[-]?\d{4}|050[-]?\d{4}[-]?\d{4}|0[1-9][-]?\d{1,4}[-]?\d{1,4}[-]?\d{4})*$/;

  if (regex.test(input)) {
      $('#errorMessage').text('');
      this.submit();
  } 
  else {
      $('#errorMessage').text('有効な電話番号を入力してください。');
     
  }
});

$(document).ready(function(){
  validation(); 
  $('form input,select').on('change', function (){
    validation();
  });
function validation(){
  let select = $("select").val();
  let tel = $('input[type="tel"]').val();
  let tel_validation = true;
  if(tel){
    var regex = /^(0[5-9]0[-(]?[0-9]{4}[-)]?[0-9]{4}|0120[-]?\d{1,3}[-]?\d{4}|050[-]?\d{4}[-]?\d{4}|0[1-9][-]?\d{1,4}[-]?\d{1,4}[-]?\d{4})*$/;
    if (regex.test(input)) {
      tel_validation = false;
  } 
  }

if(
    $('input[type="e-mail"]').val() !=="" &&
    $('input[name="name"]').val() !=="" &&
    select !=="" &&
    tel_validation
  ){
    $('input[type="submit"]').prop("disabled",false);
  } else{
    $('input[type="submit"]').prop("disabled",true);
  }
}
});