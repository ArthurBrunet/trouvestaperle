<?php
defined('BASEPATH') OR exit('No direct script access allowed');




?>



<?php print_r($_SESSION) ?>

<section class="full-width-img">

        <div class="box">
            <ul class="subheading-text">
                <li>Deux POUFS</li>
                <li>Un CV</li>
                <li>TROUVETAPERLE.COM</li>
            </ul>
            <button id="modalBtn" class="buttonmodal">Click Here</button>
        </div>

    <div id="simpleModal" class="modal">

        <div class="login-wrap">
                    <div class="login-html">
                        <span class="closeBtn">&times;</span>
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>

                        <div class="login-form">
                            <?php echo form_open('Utilisateurs/create', "sign-in-htm"); ?>
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>

                                    <input id="user" type="text" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <input type="submit" name="submitted" class="button" value="Sign In">
                                </div>

                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
                            </div>

                            <?php
                            echo form_close('Utilisateurs/create');
                            ?>


                            <div class="sign-up-htm">
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <label for="tab-1">Already Member?</label>
                                </div>
                                <?php echo form_close('Utilisateurs/login');?>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

</section>

</body>
</html>