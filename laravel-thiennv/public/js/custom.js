$("#login-submit").click(function (a) {
	var username = $("#login-user").val();
	var password = $("#login-pass").val();
	if (username == "") {
		$("#error-user").text("Vui lòng nhập tên đăng nhập");
		a.preventDefault();
	} else {
		$("#error-user").text("");
	}
	if (password == "") {
		$("#error-pass").text("Vui lòng nhập mật khẩu");
		a.preventDefault();
	} else {
		$("error-pass").text("");
	}
})