function isEmail(evt) {
    var charCode = evt.which || event.charCode || event.char;
    if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && (charCode != 64) && (charCode != 46) && (charCode != 95) && (charCode != 33) && (charCode > 31 && (charCode < 48 || charCode > 57)))
        return false;

    return true;
}

function isAlphaNumSpace(evt) {
    var charCode = evt.which || event.charCode || event.char;
    if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && (charCode != 64) && (charCode != 46) && (charCode != 95) && (charCode != 33) && (charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode != 32))
        return false;


    return true;
}

$(function(){
	$('#submit_reg').click(function(){

		var name = $('#name_reg').val()
		var email = $('#email_reg').val()
		var password = $('#password_reg').val()
		var con_password = $('#con_password_reg').val()

		var mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/;

		var name_regex = /^[(A-Z)?(a-z)?(0-9)?\s*]+$/;

		if ((name == "") || (email == "") || (password == "") || (con_password == "")) {

			$('#reg_error').text("Don't leave the fields blank!");
		}
		else if (!mail_regex.test(email)) {

			$('#reg_error').text('Enter a valid Email!');
		}
		else if (!name_regex.test(name)) {

			$('#reg_error').text('Enter a Proper Name!');
		}
		else if (password != con_password) {

			$('#reg_error').text("Passwords doesn't match!");
		} else {

			$.ajax({
	            url :'/TheKitchen/backends/register.php',
	            type:'POST',
	            data :{
	            'name':name,
	            'email':email,
	            'password':password
	            },
	            dataType:'json',
	            beforeSend:function(){
	                // $('#my_data').html('<img src="images/ajax-loader.gif" alt="Loading...">');
	                $('#submit_reg').prop("disabled", true);

	            },
	            success  :function(data){

	            	$('#name_reg').val("")

	            	$('#email_reg').val("")

	            	$('#password_reg').val("")

	            	$('#con_password_reg').val("")

	            	var instance2 = M.Modal.getInstance($('#modal2'));

	            	instance2.close();

	            	if (data['code'] == "0") {

	            		toggleModal('Error!', data['msg']);

	            	} else if (data['code'] == "1") {

	            		toggleModal('Success!', data['msg']);

	            	}
	            	$('#submit_reg').prop("disabled", false);

	           }
	        });
		}
	})

	$('#login_btn').click(function(){
		var email = $('#email_login').val()
		var password = $('#password_login').val()

		var mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/;

		if ((email == "") || (password == "")) {

			$('#reg_error').text("Don't leave the fields blank!");
		}
		else if (!mail_regex.test(email)) {

			$('#reg_error').text('Enter a valid Email!');
		} else {

			$.ajax({
	            url :'/TheKitchen/backends/login.php',
	            type:'POST',
	            data :{
	            'name':name,
	            'email':email,
	            'password':password
	            },
	            dataType:'json',
	            beforeSend:function(){
	                // $('#my_data').html('<img src="images/ajax-loader.gif" alt="Loading...">');
	                $('#submit_reg').prop("disabled", true);

	            },
	            success  :function(data){

	            	$('#name_reg').val("")

	            	$('#email_reg').val("")

	            	$('#password_reg').val("")

	            	$('#con_password_reg').val("")

	            	var instance2 = M.Modal.getInstance($('#modal2'));

	            	instance2.close();

	            	if (data['code'] == "0") {

	            		toggleModal('Error!', data['msg']);

	            	} else if (data['code'] == "1") {

	            		// toggleModal('Success!', data['msg']);

	            		location.reload(true);

	            	}
	            	$('#login_btn').prop("disabled", false);

	           }
	        });


		}
	})
})