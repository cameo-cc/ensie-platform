<div class="modal modal-login fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title w-100 text-center">Inloggen</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Log hier in om direct te kunnen beginnen met schrijven (je LinkedIn gegevens worden nooit gedeeld).</p>
                <form method="post" action="/login">
                    <div id="loginInputs" class="form-fields hidden">
                        <input type="hidden" name="_csrf_token" value="mbDknUsYztid9j8l5SI8_lXbwjT1sbH8AGOjQUwhaaA">
                        <div class="form-group">
                            <label for="inputEmail">Gebruikersnaam</label>
                            <input class="form-control" type="text" id="inputEmail" name="email" value="" required="">
                        </div>
                        <div class="form-group ">
                            <label for="inputPassword">Wachtwoord</label>
                            <input type="password" id="inputPassword" name="password" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="remember_me" name="_remember_me">
                            <label for="remember_me">Blijf ingelogd</label>
                        </div>
                    </div>
                    <div class="form-row pb-4">
                        <div class="col-md-6">
                            <input type="button" class="btn btn-secondary btn-block" value="Login met LinkedIn" onclick="location.href='https://www.ensie.nl/connect/linkedin';">
                        </div>
                        <div class="col-md-6">
                            <input type="button" id="showInputs" class="login-username-show btn btn-secondary btn-block " style="margin: 0" value="Login als bedrijf">
                            <input type="submit" class="login-username-hidden" style="margin: 0; display: none;" value="Login als bedrijf" onclick="location.href='https://www.ensie.nl/connect/linkedin';" id="_submit" name="_submit">
                        </div>
                    </div>
                    <div class="form-group form-footer text-center">
                        <a href="#" data-action="register">Ik heb nog geen account</a>
                        <br>
                        <a data-action="resetting" href="#">Ik ben mijn wachtwoord vergeten</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>