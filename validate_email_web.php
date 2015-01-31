<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>validate email and url</title>
         <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />  
        
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <style>
            .error{
                font-family: cursive;
                font-size: 10px;
                color: red;
                margin-bottom: 10px;
            }
        </style>
       
       
        
    </head>
    <body id="html_body">
      
        
         <div class="row"  style="padding: 5px;margin: 2px;">
                        <div class="step2 col-md-12" style="margin-bottom:10px">
                            <div class="heading"><h2><strong> Check Email and url </strong></h2></div>
                            
                          <form action="" method="post" id="register-form" novalidate="novalidate">   
                        <div class="content col-md-12" style="border: solid 1px #eaeaea;padding: 10px;">
                           
                            <div class="content col-md-12">
                                 <div class="form-group col-md-12" >
                                   <label for="width" class="col-sm-4" >Email-Id</label>
                                   <div class="col-sm-8" >
                                       <input type="email" name="emailid" class="form-control" id="email" placeholder="admin@php999.com " required="required">
                                   </div>
                                 </div>
                                 <div class="col-sm-8 col-sm-offset-4 error email"></div>

                            </div>
                            
                             <div class="content col-md-12">
                                 <div class="form-group col-md-12" >
                                   <label for="width" class="col-sm-4" >Website</label>
                                   <div class="col-sm-8" >
                                          <input type="text" name="website"  class="form-control" id="website" placeholder="www.php999.blogspot.in " required="required">
                                   </div>
                                 </div>
                                 <div class="col-sm-8 col-sm-offset-4 error website"></div>

                            </div>
                            
                            </div>
                            </form>
                            
                    </div>
                        <div class="content col-md-12">
                            <div class="col-md-3" style="float:right;">
                                <button class="btn" style="background-color:#fe8409;" id="get-code" type="" name="preview">GET CODE!</button>
                            </div>
                        </div>
                        <div class="col-md-12" id="html-block" style="margin:10px;display:none">
                            <textarea id="html-content" rows="8" cols="55"></textarea>
                        </div>
                    </div>
        
        
        
 

        
     <script>
         $('#get-code').click(function(e){
             
             var email = $('#email').val();
             var email_status=validateEmail(email);
             
             
          //  alert("email_status="+email_status);
            
             var website = $('#website').val();
            // alert(website);
             var website_status=validateWeb(website);
            //   alert("website_status="+website_status);
             
             if(email_status==false){
                 $('.email').html('Please enter your a valid email address...');
             } else if(website_status==false){
                 $('.website').html('Please enter a valid url ');
             } else {
                  $('.email').html('');
                   $('.website').html('');
                   
             //    alert("tick tok");
                 
                 var htmlcode = $('#html_body').html();
                $('#html-content').val(htmlcode);
                $('#html-block').css('display','block');
                e.preventDefault();
             }
         });
      </script>
      
      <script>
     function validateEmail(email){
	var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	var valid = emailReg.test(email);

                if(!valid) {
                return false;
            } else {
                return true;
            }
        }
        
         function validateWeb(web){
             	var webReg = new RegExp(/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:[\w-]*)\.\w{2,}$/);

	//var webReg = new RegExp(/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:[\w-]*)\.\w{2,}$);
	var valid = webReg.test(web);

                if(!valid) {
                return false;
            } else {
                return true;
            }
        }
       
     </script>

     <div class="row">
         <span class="glyphicon glyphicon-barcode"> 2015&COPY; himmsrathore | <a target="_blank" href="http://php999.blogspot.in">php999 </a></span></div>
    </body>
</html>
