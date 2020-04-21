<?php
/**
* Template Name: Recovery Reza
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
 get_header(); 

?>
<style>
.col-md-4
{
    width:33%;display:inline-block;
}
@media only screen and (max-width: 700px) {
.col-md-4
{
    width:96%;display:block;
}
#exampleInputEmail1{
    width:93% !important;
}
#exampleInputorder,#clickadder{
    width:93% !important;
}
}
</style>
<div id="ajax_result" class="row"></div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-lg-4 col-md-4" style="background: #fff;padding: 15px;border-radius: 12px;">
        <h3 style="padding: 10px;border-bottom: 1px solid #ccc;text-align: center;">بازیابی لینک دانلود</h3>
  <div class="form-group">
      <br>
    <input type="text" class="form-control" id="exampleInputorder" placeholder="شماره سفارش" style="width: 97%;padding: 8px;">
    <br><br>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل" style="width: 97%;padding: 8px;">
    <br><br>
    <small id="emailHelp" class="form-text text-muted">شماره سفارش به ایمیل و موبایل(از طریق پیامک) ارسال شده است.</small>
  </div>
  <br><div class="row" style="text-align:center;">
  <a id="clickadder" style="cursor: pointer;background: #3131d5;color: #fff;padding:10px;border-radius:15px;margin:auto;width:97%;display: block;" >دریافت لینک دانلود</a>
  </div>
</div><div class="col-md-4"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#clickadder").click(function(){
    
    if($("#exampleInputorder").val().length>0 && $("#exampleInputEmail1").val().length>5)
    {
          $("#clickadder").hide();
      $("#ajax_result").html("<div><h3>شکیبا باشید!!!</h3></div>");  
                  $("#ajax_result").animate({
                    scrollTop: $("#ajax_result").offset().top
                    }, 2000);
     $.ajax({
            type: 'post',async: false,
            data:{code:$("#exampleInputorder").val(),email:$("#exampleInputEmail1").val()},
            url: '/abc',
            success: function (response) {
              if(response.length>0){
                  $("#ajax_result").html(response);  
                  $("#ajax_result").animate({
                    scrollTop: $("#ajax_result").offset().top
                    }, 2000);
              }
              else{
                  $("#ajax_result").html("<div><h3>هیچی یافت نشد</h3></div>");
                  $("#ajax_result").animate({
                  scrollTop: $("#ajax_result").offset().top
                    }, 2000);
              }
            }
            ,error: function () {
                console.log("error"); 
                $("#ajax_result").html("<div><h3>خطا! 3862</h3></div>"); 
                $("#ajax_result").animate({
                scrollTop: $("#ajax_result").offset().top}, 2000);
            }
           });
    }
    else
    {
        $("#ajax_result").html("<div><h3>اطلاعات را کامل وارد کنید</h3></div>"); 
        $("#ajax_result").animate({
        scrollTop: $("#ajax_result").offset().top}, 2000);
    }
    
  });
});
</script>
<?php get_footer();?>