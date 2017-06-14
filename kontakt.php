<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forside</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="row">
		<div class="col-xs-12 pull-left top-head">			
				<div class="pull-left top-head-contact">
					<div class="top-head-p">
						<p><span class="glyphicon glyphicon-earphone"></span> Phone: 12345678</p>
						<div ></div>
					</div>
				</div>		
				<div class="col-xs-3">
					<div class="top-head-p">
						<p><span class="glyphicon glyphicon-envelope"></span> Mail: project@hotmail.com</p>
						<div ></div>
					</div>
				</div>				
			</div>
		</div>
		
	<div class="row">
		<div class="col-xs-8 pull-left brand-section">
			<div class="logo">
				<img class="img-responsive" src="images/logo.jpg" title="baby" alt="baby img" />
			</div>
		</div>
		<div class="col-xs-4 pull-right">
			<div class="col-xs-8 search-input">
				<form class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</form>
			</div>
			<div class="col-xs-4">
				<p><span class="glyphicon glyphicon-shopping-cart" style="margin-top: 15px; font-size: 28px;"></span> 0 Items</p>
			</div>			
		</div>
	</div>
 
	<div class="container">
	<form id="contact-form" class="form-horizontal">
		<legend>Kontakt</legend>

        <div class="form-group">
            <label for="fullname" class="col-sm-1 control-label">Navn</label>
            <div class="col-sm-9">
                <input type="text" id="fullname" name="fullname" class="form-control" />
            </div>
            <div class="col-sm-2"></div>
        </div>
        
        <div class="form-group">
            <label for="email" class="col-sm-1 control-label">E-mail</label>
            <div class="col-sm-9">
                <input type="text" id="email" name="email" class="form-control"  />
            </div>
             <div class="col-sm-2"></div>
        </div>

         <div class="form-group">
            <label for="message" class="col-sm-1 control-label">Besked</label>
            <div class="col-sm-9">
                <textarea type="textarea" id="message" name="message" class="form-control" rows="5" cols="40"></textarea>
            </div>
             <div class="col-sm-2"></div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
    </form>
		
	</div>  

<script>
 // $(function() {

	$("#contact-form").validate({
		rules:{
			fullname:{
				required:true
			},
			email:{
				required:true,
				email:true
			},
			message:{
				required:true
			}
		},

		messages:{
			fullname:{
				required: "please enter your name"
			},
			email:{
				required: "please enter your email",
				email: "please enter a valid email"
			},
			message:{
				required: "write your message here"
			}
		},

		submitHandler: function(form){
			alert("form is submitting");
		},
		

		// highlight: function (element, errorClass) {
  //               $(element).closest('.form-group').addClass('has-error');
  //       } ,

  //        unhighlight: function (element, errorClass) {
  //               $(element).closest('.form-group').removeClass('has-error');
  //           },   
           



	});
// });

</script>
</body>
</html>