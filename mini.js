function togglePassword(action) {
		const passwordField = document.getElementById('password');
		const showPwdBtn = document.getElementById('showPwdBtn');
		const hidePwdBtn = document.getElementById('hidePwdBtn');

		if (action === 'show') {
		  passwordField.type = 'text';
		  showPwdBtn.style.display = 'none';
		  hidePwdBtn.style.display = 'inline-block';
		} else if (action === 'hide') {
		  passwordField.type = 'password';
		  hidePwdBtn.style.display = 'none';
		  showPwdBtn.style.display = 'inline-block';
		}
	  }