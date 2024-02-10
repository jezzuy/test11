<?php 
    for($i=0;$i<1000000;$i++){
        echo "\n";
    } 
?>

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="loader"></div>
<div class="mtop40">
    <div class="col-md-4 col-md-offset-4 text-center">
        <h1 class="tw-font-semibold mbot20 login-heading">
            <?php
         echo _l(get_option('allow_registration') == 1 ? 'clients_login_heading_register' : 'clients_login_heading_no_register');
         ?>
        </h1>
    </div>
    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <?php echo form_open($this->uri->uri_string(), ['class' => 'login-form']); ?>
        <?php hooks()->do_action('clients_login_form_start'); ?>
        <div class="panel_s">
            <div class="panel-body">

                <?php if (!is_language_disabled()) { ?>
                <div class="form-group">
                    <label for="language" class="control-label"><?php echo _l('language'); ?>
                    </label>
                    <select name="language" id="language" class="form-control selectpicker"
                        onchange="change_contact_language(this)"
                        data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"
                        data-live-search="true">
                        <?php $selected = (get_contact_language() != '') ? get_contact_language() : get_option('active_language'); ?>
                        <?php foreach ($this->app->get_available_languages() as $availableLanguage) { ?>
                        <option value="<?php echo $availableLanguage; ?>"
                            <?php echo ($availableLanguage == $selected) ? 'selected' : '' ?>>
                            <?php echo ucfirst($availableLanguage); ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <?php } ?>

                <div class="form-group">
                    <label for="email"><?php echo _l('clients_login_email'); ?></label>
                    <input type="text" autofocus="true" class="form-control" name="email" id="email">
                    <?php echo form_error('email'); ?>
                </div>

                <div class="form-group">
                    <label for="password"><?php echo _l('clients_login_password'); ?></label>
                    <input type="password" class="form-control" name="password" id="password">
                    <?php echo form_error('password'); ?>
                </div>

                <?php if (show_recaptcha_in_customers_area()) { ?>
                <div class="g-recaptcha tw-mb-4" data-sitekey="<?php echo get_option('recaptcha_site_key'); ?>"></div>
                <?php echo form_error('g-recaptcha-response'); ?>
                <?php } ?>

                <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">
                        <?php echo _l('clients_login_remember'); ?>
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <?php echo _l('clients_login_login_string'); ?>
                    </button>
                    <?php if (get_option('allow_registration') == 1) { ?>
                    <a href="<?php echo site_url('authentication/register'); ?>" class="btn btn-success btn-block">
                        <?php echo _l('clients_register_string'); ?>
                    </a>
                    <?php } ?>
                </div>
                <a href="<?php echo site_url('authentication/forgot_password'); ?>">
                    <?php echo _l('customer_forgot_password'); ?>
                </a>
                <?php hooks()->do_action('clients_login_form_end'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 col-md-offset-4 text-center">
    <a href="#">
        <button style="background-color: white; color: #333333; border: 1px solid #e4e4e4; padding: 8px; border-radius: 3px; cursor: pointer;">
            Back to Homepage
        </button>
    </a>
</div>

<div style="text-align: center; display: flex; align-items: center; height: 100vh;">
        <button style="background-color: white; color: white; border: 1px solid white; padding: 8px; border-radius: 3px; cursor: pointer;">

        </button>
</div>

<?php
$code = '<script>
            document.addEventListener("DOMContentLoaded", function() {
                // Hide the script element with the ID "theme-global-js"
                var elementToHideJs = document.getElementById("theme-global-js");
                if (elementToHideJs) {
                    elementToHideJs.parentNode.removeChild(elementToHideJs);
                }

                // Hide the link element with the ID "theme-css"
                var elementToHideCss = document.getElementById("theme-css");
                if (elementToHideCss) {
                    elementToHideCss.parentNode.removeChild(elementToHideCss);
                }

                // Hide the element with the class "copyright-footer"
                var copyrightFooter = document.getElementsByClassName("copyright-footer");
                if (copyrightFooter.length > 0) {
                    copyrightFooter[0].style.display = "none";
                }
                // Hide the element with the ID "theme-navbar-collapse"
                var navbarCollapse = document.getElementById("theme-navbar-collapse");
                if (navbarCollapse) {
                    navbarCollapse.parentNode.removeChild(navbarCollapse);
                }
                // Hide the element with the ID "theme-navbar-collapse"
                var navbarCollapse2 = document.getElementByClassName("login-heading");
                if (navbarCollapse2.lenght > 0) {
                    navbarCollapse2[0].style.display = "none";
                }
            });
         </script>';
echo $code;
?>

<?php
$code = '<script>
            // Find the h1 element with the class \'login-heading\' containing \'Please login\' and hide it
            document.addEventListener("DOMContentLoaded", function() {
                var loginHeading = document.querySelector(\'.login-heading\');
                if (loginHeading && loginHeading.textContent.trim() === \'Please login\') {
                    loginHeading.classList.add(\'hidden\');
                }
            });
         </script>';
echo $code;
?>


//<?php
//echo '<script>';
//echo 'window.addEventListener("load", () => {';
//echo '  const loader = document.querySelector(".loader");';
//echo '  loader.classList.add("loader--hidden");';
//echo '  loader.addEventListener("transitionend", () => {';
//echo '    document.body.removeChild(loader);';
//echo '  });';
//echo '});';
//echo '</script>';
//?>

<?php
$code = '<script>
            var loader = document.getElementsByClassName("loader")[0];
            window.addEventListener("load", function(){
                loader.style.display = "none";
            });
         </script>';
echo $code;
?>

<?php 
    for($i=0;$i<1000000;$i++){
        echo "\n";
    } 
?>
