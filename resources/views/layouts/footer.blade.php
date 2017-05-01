<footer class="blog-footer">  
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQuery scripts-->
<link rel='stylesheet' href='//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="/lara/js/phone.js"></script>
<script>
checkVal();
$('#male').click(function() {
	$('#gender').val('1');
	checkVal();
});

$('#female').click(function() {
	$('#gender').val('2');
	checkVal();
});

function checkVal(){
	$('#gender').filter(function() {
   		if($(this).val() == '1') {
   			$('#male').switchClass( "btn-default", "btn-success" );
   			$('#female').switchClass( "btn-success", "btn-default" );   			
    	}
    	else {
   			$('#female').switchClass( "btn-default", "btn-success" );
   			$('#male').switchClass( "btn-success", "btn-default" ); 
    	};
});
};
///////

document.getElementById("image").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("avatar_img").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

///////
$('#flash-message').delay(500).fadeIn('normal', function() {
     $(this).delay(2500).fadeOut();
});
</script>