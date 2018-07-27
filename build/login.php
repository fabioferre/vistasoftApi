<div id="fb-root" class=" fb_reset">
   <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
      <div><iframe name="fb_xdm_frame_http" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="http://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f8b8b640d3f3e4&amp;origin=http%3A%2F%2Fnovoterralima.com" frameborder="0"></iframe><iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="https://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f8b8b640d3f3e4&amp;origin=http%3A%2F%2Fnovoterralima.com" frameborder="0"></iframe></div>
   </div>
   <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
      <div></div>
   </div>
</div>


<div class="modal fade" id="pop-login" tabindex="-1" role="dialog" >
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <ul class="login-tabs">
               <li class="active">Login</li>
               <li>Register</li>
            </ul>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
         </div>
         <div class="modal-body login-block class-for-register-msg">
            <div class="tab-content">
               <div class="tab-pane fade in active">
                  <div id="houzez_messages" class="houzez_messages message"></div>
                  <form>
                     <div class="form-group field-group">
                        <div class="input-user input-icon">
                           <input id="login_username" name="username" placeholder="Usuário" type="text">
                        </div>
                        <div class="input-pass input-icon">
                           <input id="password" name="password" placeholder="Senha" type="password">
                        </div>
                     </div>
                     
                     <div class="forget-block clearfix">
                        <div class="form-group pull-left">
                           <div class="checkbox">
                              <label>
                              <input name="remember" id="remember" type="checkbox">
                              Lembrar-me                        </label>
                           </div>
                        </div>
                        <div class="form-group pull-right">
                           <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pop-reset-pass">Perdeu sua senha?</a>
                        </div>
                     </div>
                     <input id="houzez_login_security" name="houzez_login_security" value="e3af311657" type="hidden"><input name="_wp_http_referer" value="/status/venda-e-locacao/" type="hidden">            <input name="action" id="login_action" value="houzez_login" type="hidden">
                     <button type="submit" class="fave-login-button btn btn-primary btn-block">Login</button>
                  </form>
               </div>
               <div class="tab-pane fade">
                  <div id="houzez_messages_register" class="houzez_messages_register message"></div>
                  <form>
                     <div class="form-group field-group">
                        <div class="input-user input-icon">
                           <input id="register_username" name="username" placeholder="Usuário" type="text">
                        </div>
                        <div class="input-email input-icon">
                           <input id="useremail" name="useremail" placeholder="E-mail" type="email">
                        </div>
                        <div class="input-pass input-icon">
                           <input id="register_pass" name="register_pass" placeholder="Senha" type="password">
                        </div>
                        <div class="input-pass input-icon">
                           <input id="register_pass_retype" name="register_pass_retype" placeholder="Redigisse a senha" type="password">
                        </div>
                     </div>
                     <div class="form-group">
                     </div>
                     <div class="form-group">
                        <div class="checkbox">
                           <label>
                           <input name="term_condition" id="term_condition" type="checkbox">
                           Eu concordo com seus  <a href="“http://novoterralima.com/imovel/muito-bem-construida-tl979/”"> termos e condições</a>                    </label>
                        </div>
                     </div>
                     <input id="houzez_register_security" name="houzez_register_security" value="16bee7c4ef" type="hidden"><input name="_wp_http_referer" value="/status/venda-e-locacao/" type="hidden">            <input name="action" value="houzez_register" id="register_action" type="hidden">
                     <button type="submit" class="fave-register-button btn btn-primary btn-block">Register</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <ul class="login-tabs">
               <li class="active">Reset Password</li>
            </ul>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
         </div>
         <div class="modal-body login-block">
            <p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
            <div id="houzez_msg_reset" class="message"></div>
            <form>
               <div class="form-group">
                  <div class="input-user input-icon">
                     <input name="user_login_forgot" id="user_login_forgot" placeholder="Enter your username or email" class="form-control">
                  </div>
               </div>
               <input id="fave_resetpassword_security" name="fave_resetpassword_security" value="4f113898fd" type="hidden"><input name="_wp_http_referer" value="/status/venda-e-locacao/" type="hidden">                    <button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block">Get new password</button>
            </form>
         </div>
      </div>
   </div>
</div>