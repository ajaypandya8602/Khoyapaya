function submitForm() {
var data = $("#login-form").serialize();
$.ajax({
type : 'POST',
url : 'login_process.php',
data : data,
beforeSend: function(){
$("#error").fadeOut();
$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
},
success : function(response){
if(response=="ok"){
$("#login_button").html('<img src="ajax-loader.gif" />   Signing In ...');
setTimeout(' window.location.href = "welcome.php"; ',4000);
} else {
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   '+response+' !</div>');
$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span>   Sign In');
});
}
}
});
return false;
}