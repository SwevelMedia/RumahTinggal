<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- External CSS

    https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
    https://fonts.googleapis.com/css?family=Open+Sans

External JavaScript

    https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
 -->

<style type="text/css">


html,body{
  min-height:100%
}
body {
  background: #f6f6f6 url(https://goo.gl/1yhE3P) top center no-repeat;
  background-size:cover;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  margin:0
}
#box {
  width: 400px;
  margin: 10% auto;
  text-align: center;
  background:rgba(255,255,255,0.6);
  padding:20px 50px;
  box-sizing:border-box;
  box-shadow:0 3px 12px rgba(0,0,0,0.2);
  border-radius:2%
}
h1 {
  margin-bottom: 1.5em;
  font-size: 30px;
  color: #484548;
  font-weight: 100;
}
 h1 span, small {
  display:block;
  font-size: 14px;
  color: #989598;
 }
small{ font-style: italic; 
  font-size: 11px;}
form p { position: relative; }

.password {
  width: 90%;
  padding: 10px 12px;
  margin-bottom: 5px;
  border: 1px solid #e5e5e5;
  border-bottom: 2px solid #ddd;
  background: rgba(255,255,255,0.2) !important;
  color: #555;
}
.password + .unmask {
  position: absolute;
  right: 5%;
  top: 10px;
  width: 25px;
  height: 25px;
  background: transparent;
  border-radius: 50%;
  cursor:pointer;
  border: none;
  font-family:'fontawesome';
  font-size:14px;
  line-height:24px;
  -webkit-appearance:none;
  outline:none
}
.password + .unmask:before {
  content: "\f06e";
  position:absolute;
  top:0px; left:-11px;
  width: 25px;
  height: 25px;
  /*background: rgba(205,205,205,0.2);*/
  z-index:1;
  color:#aaa;
  /*border:2px solid;*/
  /*border-radius: 50%;*/
}
.password[type="text"] + .unmask:before {
 content:"\f070";
  /*background: rgba(105,205,255,0.2);*/
  color:#06a
}
#valid{
  font-size:12px;
  color:#98e5f2;
  height:15px
}
#strong{
  height:20px;
  font-size:12px;
  color: #98e5f2;
  text-transform:capitalize;
  background:rgba(205,205,205,0.1);
  border-radius:5px;
  overflow:hidden;
  box-shadow: 0px 3px 10px #dfdfdf;
}

#strong span{  
  display:block;
  box-shadow:0 0 0 #fff inset;
  height:100%;
  transition:all 0.8s
}
#strong .lemah{
   box-shadow: 5em 0 0 #98e5f2 inset;
}
#strong .sedang{
    color: #3d9bd4;
    box-shadow: 10em 0 0 #31a7cb inset;
}
#strong .kuat{
    color: #fff;
    box-shadow: 50em 0 0 #1400ff inset;
}
.img-logo {
    width: 100px;
    position: absolute;
    top: -29px;
    margin: 0px -50px;
}

</style>




<div id="box">
   <div class="mb-5"><img src="https://rumahtinggal.id/assets/img/logo.png" class="img-logo"></div>
  <form id="myform-search" method="post" autocomplete="off" onsubmit="return resetPasword()">
  <h1>Reset Kata Sandi <span>Atur ulang kata sandi Anda</span></h1>
  <form>
    <p>
       <input type="password" class="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  id="password_baru" name="password" placeholder="Kata sandi baru" oninvalid="setCustomValidity('Harus terdiri dari 6+ karakter dan berisi minimal 1 huruf besar, 1 angka, 1 karakter khusus')" required/>
      <button class="unmask" type="button"></button>
    </p>
    <p>     
      <input type="password" class="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="ulang_password_baru" name="password" placeholder="Ulang kata sandi baru" required />
      <button class="unmask" type="button"></button>
    <div id="strong"><span></span></div>
    <div id="valid"></div>
    <small>Harus terdiri dari 6+ karakter dan berisi minimal 1 huruf besar, 1 angka, 1 karakter khusus</small>

     <!-- <center> <button type="button" class="btnContact btn btn-primary mt-3"  onclick="resetPasword($('#password_baru').val())">Reset</button> </center> -->
       <input type="submit" class="btnContact btn btn-primary mt-3" value="Reset">
    </p>
  </form>
</div>





























<script type="text/javascript">
       function resetPasword() {
        var password = $('#password_baru').val();
        var email = location.href.substring(0, location.href.lastIndexOf('/'));
        var parts = window.location.href.split('/');
var lastSegment = parts.pop() || parts.pop();  
        $.ajax({ 
            url: "<?= base_url('api/getResetPassword/') ?>"+lastSegment+"/"+password,
            type: "get",
            dataType: "JSON",
            success: function(response){
              // if(response.status == 1) {
              //   $('#ModalLogin').modal('hide');
                toastr.success('Berhasil merubah password', 'Informasi', opsi_toastr);
                // let url = $(location).attr('href');
                // window.location.href();
                location.href = "<?= base_url('') ?>"
              //   let url = $(location).attr('href');
              //   window.location.href = url;
              // } else alert(response.info);
                 // toastr.error('Silahkan cek email Anda', 'Berhasil', opsi_toastr);
            },
            error: function (jqXHR, textStatus, errorThrown){
              // toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
               toastr.error('', 'Gagal', opsi_toastr);
            }
        });
    }




$('.unmask').on('click', function(){  
  if($(this).prev('input').attr('type') == 'password')
    $(this).prev('input').prop('type', 'text');  
  else
    $(this).prev('input').prop('type', 'password');  
  return false;
});
//Begin supreme heuristics 
$('.password').on('keyup',function (){
  var p_c = $('#ulang_password_baru');
  var p = $('#password_baru');
  console.log(p.val() + p_c.val());
 if(p.val().length > 0){
  if(p.val() != p_c.val()) {
    $('#valid').html("Kata sandi tidak sama");
  } else {
     $('#valid').html('');  
  }
    var s = 'lemah'
if(p.val().length > 5 && p.val().match(/\d+/g))
  s = 'sedang';
if(p.val().length > 6 && p.val().match(/[^\w\s]/gi))
  s = 'kuat';   
   $('#strong span').addClass(s).html(s);
  }
});


</script>