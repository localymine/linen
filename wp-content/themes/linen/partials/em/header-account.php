<div class="youama-login-window" style="display: none;">
    <div class="youama-window-outside">
        <span class="close">×</span>
        <div class="youama-window-inside">
            <div class="youama-window-title">
                <h3>
                    Login Form
                </h3>
            </div>
            <div class="account-login"> </div>
            <div class="youama-window-box first">
                <div class="youama-window-content">
                    <div class="input-fly youama-showhideme input-email">
                        <label>E-mail address <span>*</span></label>
                        <input type="text" placeholder="E-mail address" class="youama-email" name="youama-email" value="">
                        <div class="youama-ajaxlogin-error err-email err-noemail err-wrongemail err-wronglogin" style="display: none;"></div>
                    </div>
                    <div class="input-fly youama-showhideme input-password">
                        <label>Password <span>*</span></label>
                        <input type="password" placeholder="Password" class="youama-password" name="youama-password" value="">
                        <div class="youama-ajaxlogin-error err-password err-dirtypassword err-nopassword err-longpassword" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div class="youama-window-box last">
                <div class="youama-window-content box-contents box-contents-button youama-showhideme">
                    <span class="youama-forgot-password">
                        <a href="http://ld-magento.template-help.com/magento_58878/customer/account/forgotpassword/">Forgot Password ?</a>
                    </span>
                    <button type="button" class="button btn-login btn-proceed-checkout btn-checkout youama-ajaxlogin-button">
                        <span>
                            <span>
                                Login                      </span>
                        </span>
                    </button>
                    <p id="y-to-register" class="yoauam-switch-window">
                        or registration
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="youama-register-window" style="display: none;">
    <div class="youama-window-outside">
        <span class="close">×</span>
        <div class="youama-window-inside">
            <div class="youama-window-title">
                <h3>
                    Registration
                </h3>
            </div>
            <div class="youama-window-box first">
                <div class="youama-window-subtitle youama-showhideme">
                    <p>Profile Informations</p>
                </div>
                <div class="youama-window-content">
                    <div class="input-fly youama-showhideme input-firstname">
                        <label for="youama-firstname">First Name <span>*</span></label>
                        <input type="text" placeholder="First Name" id="youama-firstname" name="youama-firstname" value="">
                        <div class="youama-ajaxlogin-error err-firstname err-nofirstname err-dirtyfirstname" style="display: none;"></div>
                    </div>
                    <div class="input-fly youama-showhideme input-lastname">
                        <label for="youama-lastname">Last Name <span>*</span></label>
                        <input type="text" placeholder="Last Name" id="youama-lastname" name="youama-lastname" value="">
                        <div class="youama-ajaxlogin-error err-lastname err-nolastname err-dirtylastname" style="display: none;"></div>
                    </div>
                    <div class="input-fly input-fly-checkbox youama-showhideme">
                        <input type="checkbox" id="youama-newsletter" name="youama-newsletter" value="ok">
                        <label for="youama-newsletter">Subscribe to Newsletter</label>
                    </div>
                </div>
            </div>
            <div class="youama-window-box second">
                <div class="youama-window-subtitle youama-showhideme">
                    <p>Login Datas</p>
                </div>
                <div class="youama-window-content">
                    <div class="input-fly youama-showhideme input-email">
                        <label>E-mail address <span>*</span></label>
                        <input type="text" placeholder="E-mail address" class="youama-email" name="youama-email" value="">
                        <div class="youama-ajaxlogin-error err-email err-noemail err-wrongemail err-emailisexist" style="display: none;"></div>
                    </div>
                    <div class="input-fly youama-showhideme input-password">
                        <label>Password <span>*</span></label>
                        <input type="password" placeholder="Password" class="youama-password" name="youama-password" value="">
                        <div class="youama-ajaxlogin-error err-password err-dirtypassword err-nopassword err-shortpassword err-longpassword" style="display: none;"></div>
                    </div>
                    <div class="input-fly youama-showhideme input-passwordsecond">
                        <label for="youama-passwordsecond">Password confirmation <span>*</span></label>
                        <input type="password" placeholder="Password confirmation" id="youama-passwordsecond" name="youama-passwordsecond" value="">
                        <div class="youama-ajaxlogin-error err-passwordsecond err-nopasswordsecond err-notsamepasswords" style=""></div>
                    </div>
                    <div class="input-fly input-fly-checkbox youama-showhideme">
                        <input type="checkbox" id="youama-licence" name="youama-licence" value="ok">
                        <label for="youama-licence">I accept the <a href="http://ld-magento.template-help.com/magento_58878/privacy-policy-cookie-restriction-mode/" target="_blank">Terms and Coditions</a></label>
                        <div class="youama-ajaxlogin-error err-nolicence" style="display: none;"></div>
                    </div>
                </div>
            </div>
            <div class="youama-window-box last">
                <div class="youama-window-content box-contents youama-showhideme">
                    <button type="button" class="button btn-reg btn-proceed-checkout btn-checkout youama-ajaxlogin-button">
                        <span>
                            <span>
                                Register                      </span>
                        </span>
                    </button>
                    <p id="y-to-login" class="yoauam-switch-window">
                        or login
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="youama-ajaxlogin-loader"></div>
<div class="youama-confirmmsg-window" style="display:none;">
    <div class="youama-window-outside">
        <span class="close">×</span><br>
        <div class="alert alert-success">Account confirmation is required. Please, check your email for the confirmation link.</div>
    </div>
</div>