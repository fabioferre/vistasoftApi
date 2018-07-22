

<!DOCTYPE html>
<html>
   <head>
      <?php
         require_once('build/head.php');
         ?>
   </head>
   <body>
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div><iframe name="fb_xdm_frame_http" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="http://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f8b8b640d3f3e4&amp;origin=http%3A%2F%2Fnovoterralima.com" frameborder="0"></iframe><iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="https://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f8b8b640d3f3e4&amp;origin=http%3A%2F%2Fnovoterralima.com" frameborder="0"></iframe></div>
         </div>
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
         </div>
      </div>
      <div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-sm">
            <div class="modal-content">
               <div class="modal-header">
                  <ul class="login-tabs">
                     <li class="active">Login</li>
                     <li>Register</li>
                  </ul>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
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
      <div class="top-bar  hide-top-bar-mobile">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="top-bar-right  houzez-top-bar-full">
                     <div class="top-contact">
                        <ul class="">
                           <li class="top-bar-social">
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--start section header-->
      <header id="header-section" class="houzez-header-main header-section-4 nav-right   houzez-disabled-login" data-sticky="1">
         <div class="container-fluid">
            <div class="header-left">
               <div class="logo logo-desktop">
                  <a href="http://novoterralima.com/">
                  <img src="http://novoterralima.com/wp-content/uploads/2018/04/logo_site.png" alt="logo">
                  </a>
               </div>
               <nav class="navi main-nav">
                  <ul id="main-nav" class="">
                     <li id="menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="http://novoterralima.com/empresa/">Sobre Nós</a></li>
                     <li id="menu-item-740" class="menu-item menu-item-type-taxonomy menu-item-object-property_status current-menu-item menu-item-has-children menu-item-740 has-child">
                        <a href="http://novoterralima.com/status/venda-e-locacao/">Portfólio</a>
                        <ul class="sub-menu">
                           <li id="menu-item-739" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-739"><a href="http://novoterralima.com/status/locacao/">Locação</a></li>
                           <li id="menu-item-741" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-741"><a href="http://novoterralima.com/status/venda/">Venda</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-4644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4644"><a href="http://novoterralima.com/corretores-terra-lima/">Corretores</a></li>
                     <li id="menu-item-4570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="http://novoterralima.com/fale-conosco/?yp_rand=683893">Fale Conosco</a></li>
                     <li id="menu-item-4562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4562"><a href="http://novoterralima.com/fale-conosco-2/">Cadastre Seu Imóvel</a></li>
                     <li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608"><a href="http://novoterralima.com/resultados/">Mapa</a></li>
                     <li id="menu-item-4561" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4561"><a href="http://novoterralima.com/category/terra-lima-imoveis/">Blog</a></li>
                  </ul>
               </nav>
            </div>
            <div class="header-right">
               <div class="user">
               </div>
            </div>
         </div>
      </header>
      <!--end section header-->
      <div class="header-mobile houzez-header-mobile " data-sticky="1" style="">
         <div class="container">
            <!--start mobile nav-->
            <div class="mobile-nav">
               <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
               <div class="nav-dropdown main-nav-dropdown">
                  <ul id="main-nav" class="">
                     <li id="menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="http://novoterralima.com/empresa/">Sobre Nós</a></li>
                     <li id="menu-item-740" class="menu-item menu-item-type-taxonomy menu-item-object-property_status current-menu-item menu-item-has-children menu-item-740 has-child">
                        <a href="http://novoterralima.com/status/venda-e-locacao/">Portfólio</a>
                        <ul class="sub-menu">
                           <li id="menu-item-739" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-739"><a href="http://novoterralima.com/status/locacao/">Locação</a></li>
                           <li id="menu-item-741" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-741"><a href="http://novoterralima.com/status/venda/">Venda</a></li>
                        </ul>
                        <span class="expand-me"></span>
                     </li>
                     <li id="menu-item-4644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4644"><a href="http://novoterralima.com/corretores-terra-lima/">Corretores</a></li>
                     <li id="menu-item-4570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="http://novoterralima.com/fale-conosco/?yp_rand=683893">Fale Conosco</a></li>
                     <li id="menu-item-4562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4562"><a href="http://novoterralima.com/fale-conosco-2/">Cadastre Seu Imóvel</a></li>
                     <li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608"><a href="http://novoterralima.com/resultados/">Mapa</a></li>
                     <li id="menu-item-4561" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4561"><a href="http://novoterralima.com/category/terra-lima-imoveis/">Blog</a></li>
                  </ul>
               </div>
            </div>
            <!--end mobile nav-->
            <div class="header-logo logo-mobile">
               <a href="http://novoterralima.com/">
               <img src="http://novoterralima.com/wp-content/uploads/2018/04/logo_site.png" alt="Mobile logo">
               </a>        
            </div>
            <div class="header-user">
               <ul class="account-action">
                  <li>
                     <span class="user-icon"><i class="fa fa-user"></i></span>
                     <div class="account-dropdown">
                        <ul>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div id="section-body" class="">
         <div class="container">
            <!--start compare panel-->
            <div id="compare-controller" class="compare-panel">
               <div class="compare-panel-header">
                  <h4 class="title"> Comparar listagens <span class="panel-btn-close pull-right"><i class="fa fa-times"></i></span></h4>
               </div>
               <div id="compare-properties-basket">
               </div>
            </div>
            <!--end compare panel-->
            <div class="page-title breadcrumb-top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-left">
                        <h2>Venda / Locação</h2>
                     </div>
                     <div class="page-title-right">
                        <div class="view">
                           <div class="sort-tab table-cell">
                              Ordenar por:                            
                              <select id="sort_properties" class="selectpicker bs-select-hidden" title="" data-live-search-style="begins" data-live-search="false">
                                 <option value="">Ordem padrão</option>
                                 <option value="a_price">Preço (baixo para alto)</option>
                                 <option value="d_price">Preço (alto para baixo)</option>
                                 <option value="featured">Destaque</option>
                                 <option value="a_date">Data antiga para nova</option>
                                 <option value="d_date">Data nova para antiga</option>
                              </select>
                              <div class="btn-group bootstrap-select">
                                 <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="sort_properties" title="Ordem padrão"><span class="filter-option pull-left">Ordem padrão</span>&nbsp;<span class="fa fa-sort"></span></button>
                                 <div class="dropdown-menu open">
                                    <ul class="dropdown-menu inner" role="menu">
                                       <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ordem padrão</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                       <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Preço (baixo para alto)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                       <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Preço (alto para baixo)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                       <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Destaque</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                       <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Data antiga para nova</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                       <li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Data nova para antiga</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="table-cell hidden-xs">
                              <span class="view-btn btn-list active"><i class="fa fa-th-list"></i></span>
                              <span class="view-btn btn-grid"><i class="fa fa-th-large"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 list-grid-area container-contentbar">
                  <div id="content-area">
                     <!--start property items-->
                     <div class="property-listing list-view">
                        <div class="row">
                           <div id="ID-1643" class="item-wrap infobox_trigger item-protegido-belissima-casa-com-agradavel-jardim-tl979">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-180 label label-default"><a href="http://novoterralima.com/status/venda/">Venda</a></span><span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$3,700,000</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/muito-bem-construida-tl979/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/219-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1643"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(12) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1643" class="compare-property" data-propid="1643" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-180 label label-default"><a href="http://novoterralima.com/status/venda/">Venda</a></span><span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/muito-bem-construida-tl979/">Protegido: Belíssima casa com agradável jardim  TL979</a></h2>
                                          <address class="property-address">Morumbi, São Paulo - SP, 03178-200, Brasil</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m² : 694</span></p>
                                          <p>Casa</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$3,700,000</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/muito-bem-construida-tl979/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m² : 694</span></p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/muito-bem-construida-tl979/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1593" class="item-wrap infobox_trigger item-casa-classica-tl860">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$13,500,000</span><span class="item-sub-price">R$65,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/casa-classica-tl860/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/204-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/204-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/204-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/204-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/204-1024x683.jpg 1024w, http://novoterralima.com/wp-content/uploads/2017/12/204-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/204-720x480.jpg 720w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1593"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(6) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1593" class="compare-property" data-propid="1593" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/casa-classica-tl860/">Casa clássica TL860</a></h2>
                                          <address class="property-address">Bairro Jardim Europa, São Paulo - SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 528</span></p>
                                          <p>Casa</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$13,500,000</span><span class="item-sub-price">R$65,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/casa-classica-tl860/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 528</span></p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/casa-classica-tl860/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1580" class="item-wrap infobox_trigger item-pratico-com-muito-espaco-tl819">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$4,000,000</span><span class="item-sub-price">R$16,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/pratico-com-muito-espaco-tl819/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/200-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/200-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/200-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/200-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/200-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/200.jpg 900w, http://novoterralima.com/wp-content/uploads/2017/12/200-720x480.jpg 720w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1580"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(5) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1580" class="compare-property" data-propid="1580" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/pratico-com-muito-espaco-tl819/">Prático com Muito Espaço TL819</a></h2>
                                          <address class="property-address">Bairro Consolação, São Paulo - SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 2</span><span>m2: 298</span></p>
                                          <p>Apartamento</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$4,000,000</span><span class="item-sub-price">R$16,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/pratico-com-muito-espaco-tl819/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 2</span><span>m2: 298</span></p>
                                             <p>Apartamento</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/pratico-com-muito-espaco-tl819/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1489" class="item-wrap infobox_trigger item-condominio-morumbi-tl758">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$4,990,000</span><span class="item-sub-price">R$28,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl758/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/171-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/171-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/171-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/171-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/171-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/171.jpg 900w, http://novoterralima.com/wp-content/uploads/2017/12/171-720x480.jpg 720w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1489"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(15) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1489" class="compare-property" data-propid="1489" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl758/">Condomínio Morumbi TL758</a></h2>
                                          <address class="property-address">Paineiras Do Morumbi, São Paulo, SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 557</span></p>
                                          <p>Casa</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$4,990,000</span><span class="item-sub-price">R$28,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl758/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 557</span></p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl758/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1485" class="item-wrap infobox_trigger item-claro-e-espacoso-tl729">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$7,500,000</span><span class="item-sub-price">R$40,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl729/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/173-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/173-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/173-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/173-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/173-1024x683.jpg 1024w, http://novoterralima.com/wp-content/uploads/2017/12/173-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/173-350x234.jpg 350w, http://novoterralima.com/wp-content/uploads/2017/12/173-719x480.jpg 719w, http://novoterralima.com/wp-content/uploads/2017/12/173.jpg 1151w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1485"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(10) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1485" class="compare-property" data-propid="1485" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl729/">Claro e Espaçoso TL729</a></h2>
                                          <address class="property-address">Cerqueira César, São Paulo, SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 3</span><span>Banheiros: 3</span><span>m2: 455</span></p>
                                          <p>Apartamento, Conjunto, Terreno</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$7,500,000</span><span class="item-sub-price">R$40,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl729/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 3</span><span>Banheiros: 3</span><span>m2: 455</span></p>
                                             <p>Apartamento, Conjunto, Terreno</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl729/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1479" class="item-wrap infobox_trigger item-oasis-ao-lado-do-clube-pinheiros-tl705">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$16,000,000</span><span class="item-sub-price">R$60,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl705/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/176-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/176-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/176-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/176-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/176-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/176-720x480.jpg 720w, http://novoterralima.com/wp-content/uploads/2017/12/176.jpg 1000w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1479"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(7) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1479" class="compare-property" data-propid="1479" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl705/">Oasis ao Lado do Clube Pinheiros TL705</a></h2>
                                          <address class="property-address">Jardim Europa, São Paulo, SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 3</span><span>Banheiros: 3</span><span>m2: 620</span></p>
                                          <p>Cobertura</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$16,000,000</span><span class="item-sub-price">R$60,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl705/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 3</span><span>Banheiros: 3</span><span>m2: 620</span></p>
                                             <p>Cobertura</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl705/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1477" class="item-wrap infobox_trigger item-projeto-ricardo-ramezoe-tl702">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$3,900,000</span><span class="item-sub-price">R$10,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl702/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/177-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/177-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/177-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/177-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/177-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/177-720x480.jpg 720w, http://novoterralima.com/wp-content/uploads/2017/12/177.jpg 800w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1477"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(16) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1477" class="compare-property" data-propid="1477" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl702/">Projeto Ricardo Ramezoe TL702</a></h2>
                                          <address class="property-address">Cidade Jardim, São Paulo</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 5</span><span>m2: 600</span></p>
                                          <p>Casa</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$3,900,000</span><span class="item-sub-price">R$10,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl702/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 5</span><span>m2: 600</span></p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl702/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1467" class="item-wrap infobox_trigger item-simpatica-e-confortavel-tl664">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <span class="label-featured label label-success">Destaque</span>
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$3,200,000</span><span class="item-sub-price">R$20,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl664/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/182-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/182-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/182-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/182-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/182-350x234.jpg 350w, http://novoterralima.com/wp-content/uploads/2017/12/182.jpg 640w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1467"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(7) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1467" class="compare-property" data-propid="1467" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl664/">Simpática e confortável TL664</a></h2>
                                          <address class="property-address">Morumbi, São Paulo, SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 717</span></p>
                                          <p>Casa</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$3,200,000</span><span class="item-sub-price">R$20,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl664/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 4</span><span>m2: 717</span></p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl664/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1455" class="item-wrap infobox_trigger item-edificio-celebration-tl58">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$13,500,000</span><span class="item-sub-price">R$45,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl58/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/12/189-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/189-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/189-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/189-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/12/189-150x100.jpg 150w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1455"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(10) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1455" class="compare-property" data-propid="1455" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl58/">Edifício Celebration TL58</a></h2>
                                          <address class="property-address">Jardim Europa, São Paulo, SP</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 4</span><span>Banheiros: 6</span><span>m2: 360</span></p>
                                          <p>Apartamento</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$13,500,000</span><span class="item-sub-price">R$45,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl58/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 4</span><span>Banheiros: 6</span><span>m2: 360</span></p>
                                             <p>Apartamento</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl58/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                           <div id="ID-1453" class="item-wrap infobox_trigger item-pe-na-areia-tl575">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$25,000,000</span><span class="item-sub-price">R$15,000/por mês</span></div>
                                          <a class="hover-effect" href="http://novoterralima.com/imovel/tl575/">
                                          <img src="http://novoterralima.com/wp-content/uploads/2017/11/190-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" width="385" height="258">                    </a>
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1453"><i class="fa fa-heart-o"></i></span>
                                             </li>
                                             <li>
                                                <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(7) Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                             <li>
                                                <span id="compare-link-1453" class="compare-property" data-propid="1453" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figure>
                                    </div>
                                 </div>
                                 <div class="item-body table-cell">
                                    <div class="body-left table-cell">
                                       <div class="info-row">
                                          <div class="label-wrap hide-on-grid">
                                             <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                    
                                          </div>
                                          <h2 class="property-title"><a href="http://novoterralima.com/imovel/tl575/">Pé na Areia TL575</a></h2>
                                          <address class="property-address">Parque Anchieta, Rio De Janeiro, RJ</address>
                                       </div>
                                       <div class="info-row amenities hide-on-grid">
                                          <p><span>Quartos: 7</span><span>Banheiros: 6</span><span>m2: 1000</span></p>
                                          <p>Casa na Praia</p>
                                       </div>
                                       <div class="info-row date hide-on-grid">
                                       </div>
                                    </div>
                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$25,000,000</span><span class="item-sub-price">R$15,000/por mês</span></div>
                                       <div class="info-row phone text-right">
                                          <a href="http://novoterralima.com/imovel/tl575/" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>
                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p><span>Quartos: 7</span><span>Banheiros: 6</span><span>m2: 1000</span></p>
                                             <p>Casa na Praia</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="http://novoterralima.com/imovel/tl575/" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-foot date hide-on-list">
                                 <div class="item-foot-left">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end property items-->
                     <hr>
                     <!--start Pagination-->
                     <div class="pagination-main ">
                        <ul class="pagination">
                           <li class="disabled"><a aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                           <li class="active"><a data-houzepagi="1" href="http://novoterralima.com/status/venda-e-locacao/">1 <span class="sr-only"></span></a></li>
                           <li><a data-houzepagi="2" href="http://novoterralima.com/status/venda-e-locacao/page/2/">2</a></li>
                           <li><a data-houzepagi="3" href="http://novoterralima.com/status/venda-e-locacao/page/3/">3</a></li>
                           <li><a data-houzepagi="4" href="http://novoterralima.com/status/venda-e-locacao/page/4/">4</a></li>
                           <li><a data-houzepagi="5" href="http://novoterralima.com/status/venda-e-locacao/page/5/">5</a></li>
                           <li><a data-houzepagi="2" rel="Next" href="http://novoterralima.com/status/venda-e-locacao/page/2/"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                        </ul>
                     </div>
                     <!--start Pagination-->
                  </div>
               </div>
               <!-- end container-content -->
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar ">
                  <aside id="sidebar" class="sidebar-white">
                     <div id="houzez_advanced_search-7" class="widget widget_houzez_advanced_search">
                        <div class="widget-top">
                           <h3 class="widget-title">Encontre Seu Imóvel</h3>
                        </div>
                        <div class="widget-range">
                           <div class="widget-body">
                              <form autocomplete="off" method="get" action="http://novoterralima.com/resultados-2/">
                                 <div class="range-block rang-form-block">
                                    <div class="row">
                                       <div class="col-sm-12 col-xs-12">
                                          <div class="form-group">
                                             <select name="country" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                                                <option value="">Todos os países</option>
                                                <option value="BR">Brasil</option>
                                                <option value="PT">Portugal</option>
                                                <option value="US">Estados Unidos</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Todos os países"><span class="filter-option pull-left">Todos os países</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Todos os países</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Brasil</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Portugal</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Estados Unidos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-xs-12">
                                          <div class="form-group">
                                             <select class="selectpicker bs-select-hidden" name="label" data-live-search="false">
                                                <option value="">Destaques</option>
                                                <option value="arquitetura-assinada"> Arquitetura Assinada</option>
                                                <option value="baixou-o-valor"> Baixou o valor</option>
                                                <option value="lancamentos"> Lançamentos</option>
                                                <option value="novidades"> Novidades</option>
                                                <option value="oportunidades"> Oportunidades</option>
                                                <option value="premium"> Premium</option>
                                                <option value="reforma-total"> Reforma Total</option>
                                                <option value="retrofitados"> Retrofitados</option>
                                                <option value="vista"> Vista</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Destaques"><span class="filter-option pull-left">Destaques</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Destaques</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Arquitetura Assinada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Baixou o valor</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Lançamentos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Novidades</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Oportunidades</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Premium</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Reforma Total</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Retrofitados</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Vista</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-xs-12">
                                          <div class="form-group">
                                             <select name="type" class="selectpicker bs-select-hidden" data-live-search="false">
                                                <option value="">Tipos de Imóveis</option>
                                                <option value="apartment"> Apartamento</option>
                                                <option value="casa"> Casa</option>
                                                <option value="casa-na-praia"> Casa na Praia</option>
                                                <option value="casa-no-campo"> Casa no Campo</option>
                                                <option value="cobertura"> Cobertura</option>
                                                <option value="conjunto"> Conjunto</option>
                                                <option value="duplex"> Duplex</option>
                                                <option value="farm"> Fazenda</option>
                                                <option value="loft"> Loft</option>
                                                <option value="terreno"> Terreno</option>
                                                <option value="terreno-na-praia"> Terreno na Praia</option>
                                                <option value="triplex"> Triplex</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Tipos de Imóveis"><span class="filter-option pull-left">Tipos de Imóveis</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Tipos de Imóveis</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Apartamento</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Casa</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Casa na Praia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Casa no Campo</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Cobertura</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Conjunto</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Duplex</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Fazenda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Loft</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Terreno</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Terreno na Praia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Triplex</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-xs-12">
                                          <div class="form-group">
                                             <select class="selectpicker bs-select-hidden" id="widget_status" name="status" data-live-search="false">
                                                <option value="">Status do Imóvel</option>
                                                <option value="locacao"> Locação</option>
                                                <option value="venda"> Venda</option>
                                                <option value="venda-e-locacao"> Venda / Locação</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="widget_status" title="Status do Imóvel"><span class="filter-option pull-left">Status do Imóvel</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Status do Imóvel</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Locação</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Venda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Venda / Locação</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="range-block">
                                    <h4>Faixa de preço:</h4>
                                    <div id="slider-price" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                       <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                       <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                    </div>
                                    <div class="clearfix range-text">
                                       <input name="min-price" class="pull-left range-input text-left" id="min-price" readonly="" type="text">
                                       <input name="max-price" class="pull-right range-input text-right" id="max-price" readonly="" type="text">
                                    </div>
                                 </div>
                                 <div class="range-block">
                                    <h4>Tamanho da área</h4>
                                    <div id="slider-size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                       <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                       <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                    </div>
                                    <div class="clearfix range-text">
                                       <input name="min-area" class="pull-left range-input text-left" id="min-size" readonly="" type="text">
                                       <input name="max-area" class="pull-right range-input text-right" id="max-size" readonly="" type="text">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                       <label class="advance-trigger"><i class="fa fa-plus-square"></i> Outras características                                </label>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                       <div class="features-list field-expand">
                                          <div class="clearfix"></div>
                                          <label class="checkbox-inline"><input name="feature[]" id="feature-adega" value="adega" type="checkbox">Adega</label><label class="checkbox-inline"><input name="feature[]" id="feature-ar-condicionado" value="ar-condicionado" type="checkbox">Ar Condicionado</label><label class="checkbox-inline"><input name="feature[]" id="feature-area-de-servico" value="area-de-servico" type="checkbox">Área de Serviço</label><label class="checkbox-inline"><input name="feature[]" id="feature-banheiro-senhor" value="banheiro-senhor" type="checkbox">Banheiro Senhor</label><label class="checkbox-inline"><input name="feature[]" id="feature-banheiro-senhora" value="banheiro-senhora" type="checkbox">Banheiro Senhora</label><label class="checkbox-inline"><input name="feature[]" id="feature-biblioteca" value="biblioteca" type="checkbox">Biblioteca</label><label class="checkbox-inline"><input name="feature[]" id="feature-cerca-eletrica" value="cerca-eletrica" type="checkbox">Cerca Elétrica</label><label class="checkbox-inline"><input name="feature[]" id="feature-churrasqueira" value="churrasqueira" type="checkbox">Churrasqueira</label><label class="checkbox-inline"><input name="feature[]" id="feature-circuito-de-tv" value="circuito-de-tv" type="checkbox">Circuito de TV</label><label class="checkbox-inline"><input name="feature[]" id="feature-copa-cozinha" value="copa-cozinha" type="checkbox">Copa Cozinha</label><label class="checkbox-inline"><input name="feature[]" id="feature-cozinha-integrada" value="cozinha-integrada" type="checkbox">Cozinha Integrada</label><label class="checkbox-inline"><input name="feature[]" id="feature-cozinha-planejada" value="cozinha-planejada" type="checkbox">Cozinha Planejada</label><label class="checkbox-inline"><input name="feature[]" id="feature-dependencia-de-empregados" value="dependencia-de-empregados" type="checkbox">Dep. Empregados</label><label class="checkbox-inline"><input name="feature[]" id="feature-deposito" value="deposito" type="checkbox">Depósito</label><label class="checkbox-inline"><input name="feature[]" id="feature-despensa" value="despensa" type="checkbox">Despensa</label><label class="checkbox-inline"><input name="feature[]" id="feature-edicula" value="edicula" type="checkbox">Edícula</label><label class="checkbox-inline"><input name="feature[]" id="feature-escritorio" value="escritorio" type="checkbox">Escritório</label><label class="checkbox-inline"><input name="feature[]" id="feature-espaco-gourmet" value="espaco-gourmet" type="checkbox">Espaço Gourmet</label><label class="checkbox-inline"><input name="feature[]" id="feature-gas-central" value="gas-central" type="checkbox">Gás Central</label><label class="checkbox-inline"><input name="feature[]" id="feature-home-theater" value="home-theater" type="checkbox">Home Theater</label><label class="checkbox-inline"><input name="feature[]" id="feature-interfone" value="interfone" type="checkbox">Interfone</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim" value="jardim" type="checkbox">Jardim</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim-de-inverno" value="jardim-de-inverno" type="checkbox">Jardim de Inverno</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim-miraflores" value="jardim-miraflores" type="checkbox">Jardim Miraflores</label><label class="checkbox-inline"><input name="feature[]" id="feature-lareira" value="lareira" type="checkbox">Lareira</label><label class="checkbox-inline"><input name="feature[]" id="feature-lavabo" value="lavabo" type="checkbox">Lavabo</label><label class="checkbox-inline"><input name="feature[]" id="feature-living" value="living" type="checkbox">Living</label><label class="checkbox-inline"><input name="feature[]" id="feature-piscina" value="piscina" type="checkbox">Piscina</label><label class="checkbox-inline"><input name="feature[]" id="feature-piscinacoberta" value="piscinacoberta" type="checkbox">PiscinaCoberta</label><label class="checkbox-inline"><input name="feature[]" id="feature-playground" value="playground" type="checkbox">Playground</label><label class="checkbox-inline"><input name="feature[]" id="feature-portaria-24h" value="portaria-24h" type="checkbox">Portaria 24H</label><label class="checkbox-inline"><input name="feature[]" id="feature-prataria-e-loucaria" value="prataria-e-loucaria" type="checkbox">Prataria e Louçaria</label><label class="checkbox-inline"><input name="feature[]" id="feature-quadra-poliesportiva" value="quadra-poliesportiva" type="checkbox">Q. Poliesportiva</label><label class="checkbox-inline"><input name="feature[]" id="feature-quarto-de-motorista" value="quarto-de-motorista" type="checkbox">Qto. Motorista</label><label class="checkbox-inline"><input name="feature[]" id="feature-quadra-de-tenis" value="quadra-de-tenis" type="checkbox">Quadra de Tênis</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-estar" value="sala-de-estar" type="checkbox">Sala de Estar</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-jantar" value="sala-de-jantar" type="checkbox">Sala de Jantar</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-jogos" value="sala-de-jogos" type="checkbox">Sala de Jogos</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-fitness" value="sala-fitness" type="checkbox">Sala Fitness</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-intima" value="sala-intima" type="checkbox">Sala Íntima</label><label class="checkbox-inline"><input name="feature[]" id="feature-salao-de-festas" value="salao-de-festas" type="checkbox">Salão de Festas</label><label class="checkbox-inline"><input name="feature[]" id="feature-salao-de-festas-2" value="salao-de-festas-2" type="checkbox">Salão de Festas</label><label class="checkbox-inline"><input name="feature[]" id="feature-sauna" value="sauna" type="checkbox">Sauna</label><label class="checkbox-inline"><input name="feature[]" id="feature-seguranca" value="seguranca" type="checkbox">Segurança</label><label class="checkbox-inline"><input name="feature[]" id="feature-suite-americana" value="suite-americana" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="feature[]" id="feature-suite-americana-2" value="suite-americana-2" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="feature[]" id="feature-terraco" value="terraco" type="checkbox">Terraço</label><label class="checkbox-inline"><input name="feature[]" id="feature-varanda" value="varanda" type="checkbox">Varanda</label><label class="checkbox-inline"><input name="feature[]" id="feature-vestiario" value="vestiario" type="checkbox">Vestiário</label><label class="checkbox-inline"><input name="feature[]" id="feature-zelador" value="zelador" type="checkbox">Zelador</label>                                
                                       </div>
                                    </div>
                                 </div>
                                 <div class="range-block rang-form-block">
                                    <div class="row">
                                       <div class="col-sm-12 col-xs-12">
                                          <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search fa-left"></i>Pesquisa</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div id="houzez_property_taxonomies-6" class="widget widget-categories">
                        <div class="widget-top">
                           <h3 class="widget-title">Busca Rápida</h3>
                        </div>
                        <div class="widget-body">
                           <ul class="children">
                              <li><a href="http://novoterralima.com/tipo-imovel/apartment/">Apartamento</a><span class="cat-count">(115)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/casa/">Casa</a><span class="cat-count">(93)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/casa-na-praia/">Casa na Praia</a><span class="cat-count">(4)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/casa-no-campo/">Casa no Campo</a><span class="cat-count">(4)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/cobertura/">Cobertura</a><span class="cat-count">(20)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/conjunto/">Conjunto</a><span class="cat-count">(3)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/duplex/">Duplex</a><span class="cat-count">(10)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/farm/">Fazenda</a><span class="cat-count">(2)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/loft/">Loft</a><span class="cat-count">(7)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/terreno/">Terreno</a><span class="cat-count">(2)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/terreno-na-praia/">Terreno na Praia</a><span class="cat-count">(1)</span></li>
                              <li><a href="http://novoterralima.com/tipo-imovel/triplex/">Triplex</a><span class="cat-count">(1)</span></li>
                           </ul>
                        </div>
                     </div>
                     <div id="houzez_agent_search-6" class="widget widget_houzez_agent_search">
                        <div class="widget-top">
                           <h3 class="widget-title">Nossa Equipe</h3>
                        </div>
                        <div class="widget-range">
                           <div class="widget-body">
                              <form method="get" action="http://novoterralima.com/agent/">
                                 <div class="range-block rang-form-block">
                                    <div class="row">
                                       <div class="col-sm-12 col-xs-12 agent_name_search_field">
                                          <div class="form-group">
                                             <input class="form-control" value="" name="agent_name" placeholder="Digite o nome do corretor" type="text">
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-xs-12 agent_cat_search_field">
                                          <div class="form-group">
                                             <select name="category" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                                                <option value="">Todas categorias</option>
                                                <option value="administracao"> Administração</option>
                                                <option value="associadas"> Associada</option>
                                                <option value="ceo-fundadora"> CEO Fundadora</option>
                                                <option value="corretores"> Corretores</option>
                                                <option value="diretoria"> Diretoria</option>
                                                <option value="fundadora"> Fundadora</option>
                                                <option value="marketing"> Marketing</option>
                                                <option value="ouvidoria"> Ouvidoria</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Todas categorias"><span class="filter-option pull-left">Todas categorias</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Todas categorias</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Administração</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Associada</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> CEO Fundadora</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Corretores</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Diretoria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Fundadora</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Marketing</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> Ouvidoria</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-xs-12 agent_city_search_field">
                                          <div class="form-group">
                                             <select name="city" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                                                <option value="">Cidades</option>
                                                <option value="sao-paulo"> São Paulo</option>
                                             </select>
                                             <div class="btn-group bootstrap-select">
                                                <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Cidades"><span class="filter-option pull-left">Cidades</span>&nbsp;<span class="fa fa-sort"></span></button>
                                                <div class="dropdown-menu open">
                                                   <ul class="dropdown-menu inner" role="menu">
                                                      <li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Cidades</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                      <li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text"> São Paulo</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="range-block rang-form-block">
                                    <div class="row">
                                       <div class="col-sm-12 col-xs-12">
                                          <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search fa-left"></i>Procurar corretor</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div id="houzez_featured_properties-5" class="widget widget_houzez_featured_properties">
                        <div class="widget-top">
                           <h3 class="widget-title">Highlights</h3>
                        </div>
                        <div class="widget-body">
                           <div class="figure-block">
                              <figure class="item-thumb">
                                 <span class="label-featured label label-success">Destaque</span>
                                 <div class="label-wrap label-right">
                                    <span class="label-status label-status-180 label label-default"><a href="http://novoterralima.com/status/venda/">Venda</a></span>                               
                                 </div>
                                 <a href="http://novoterralima.com/imovel/cobertura-co-vista-para-o-parque-tl977/" class="hover-effect">
                                 <img src="http://novoterralima.com/wp-content/uploads/2017/12/218-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/218-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/218-150x100.jpg 150w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                               </a>
                                 <figcaption class="thumb-caption clearfix">
                                    <div class="cap-price pull-left"><span class="price-start">Venda</span> R$6,500,000</div>
                                    <ul class="list-unstyled actions pull-right">
                                       <li>
                                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="4 Fotos">
                                          <i class="fa fa-camera"></i>
                                          </span>
                                       </li>
                                    </ul>
                                 </figcaption>
                              </figure>
                           </div>
                           <div class="figure-block">
                              <figure class="item-thumb">
                                 <span class="label-featured label label-success">Destaque</span>
                                 <div class="label-wrap label-right">
                                    <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                               
                                 </div>
                                 <a href="http://novoterralima.com/imovel/tl664/" class="hover-effect">
                                 <img src="http://novoterralima.com/wp-content/uploads/2017/12/182-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/12/182-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/12/182-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/12/182-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/12/182-350x234.jpg 350w, http://novoterralima.com/wp-content/uploads/2017/12/182.jpg 640w" sizes="(max-width: 385px) 100vw, 385px" width="385" height="258">                             </a>
                                 <figcaption class="thumb-caption clearfix">
                                    <div class="cap-price pull-left"><span class="price-start">Venda</span> R$3,200,000</div>
                                    <ul class="list-unstyled actions pull-right">
                                       <li>
                                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="7 Fotos">
                                          <i class="fa fa-camera"></i>
                                          </span>
                                       </li>
                                    </ul>
                                 </figcaption>
                              </figure>
                           </div>
                           <div class="figure-block">
                              <figure class="item-thumb">
                                 <span class="label-featured label label-success">Destaque</span>
                                 <div class="label-wrap label-right">
                                    <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                               
                                 </div>
                                 <a href="http://novoterralima.com/imovel/cobertura-duplex-tl316/" class="hover-effect">
                                 <img src="http://novoterralima.com/wp-content/uploads/2017/11/141-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" width="385" height="258">                               </a>
                                 <figcaption class="thumb-caption clearfix">
                                    <div class="cap-price pull-left"><span class="price-start">Venda</span> R$35,000,000</div>
                                    <ul class="list-unstyled actions pull-right">
                                       <li>
                                          <span title="" data-placement="top" data-toggle="tooltip" data-original-title="3 Fotos">
                                          <i class="fa fa-camera"></i>
                                          </span>
                                       </li>
                                    </ul>
                                 </figcaption>
                              </figure>
                           </div>
                        </div>
                     </div>
                     <div id="houzez_contact-5" class="widget widget-contact">
                        <div class="widget-top">
                           <h3 class="widget-title">Fale Conosco</h3>
                        </div>
                        <div class="widget-body">
                           <div class="contact_text">Conquistar a satisfação dos nossos clientes através de um imóvel residencial, de temporada, de propriedade rural, comercial ou simplesmente como investimento, seja no Brasil ou no exterior.
                              <br>
                           </div>
                           <ul class="list-unstyled">
                              <li><i class="fa fa-location-arrow"></i> Av. Brg. Faria Lima, 1982, 12° Andar</li>
                              <li><i class="fa fa-phone"></i> +55 11 3628-4111</li>
                              <li><i class="fa fa-envelope-o"></i> <a href="mailto:contato@terralimaimoveis.com.br">contato@terralimaimoveis.com.br</a></li>
                           </ul>
                        </div>
                     </div>
                  </aside>
               </div>
               <!-- end container-sidebar -->
            </div>
         </div>
         <!--.container Start in header-->
      </div>
      <!--Start in header end #section-body-->
      <button class="scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
      <!--start footer section-->
      <?php
         include'build/footer.php';
         ?>
      <!--end footer section-->
      <script type="text/javascript">
         /* <![CDATA[ */
         var wpcf7 = {"apiSettings":{"root":"http:\/\/novoterralima.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Verifique se voc\u00ea n\u00e3o \u00e9 um rob\u00f4."}}};
         /* ]]> */
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.2"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/bootstrap.min.js?ver=3.3.5"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var hz_plugin = {"rating_terrible":"Terrible","rating_poor":"Poor","rating_average":"Average","rating_vgood":"Very Good","rating_exceptional":"Exceptional"};
         /* ]]> */
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/plugins.js?ver=1.5.7"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4"></script>
      <script type="text/javascript">
         jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Fechar","currentText":"Hoje","monthNames":["janeiro","fevereiro","mar\u00e7o","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"],"monthNamesShort":["jan","fev","mar","abr","maio","jun","jul","ago","set","out","nov","dez"],"nextText":"Seguinte","prevText":"Anterior","dayNames":["domingo","segunda-feira","ter\u00e7a-feira","quarta-feira","quinta-feira","sexta-feira","s\u00e1bado"],"dayNamesShort":["dom","seg","ter","qua","qui","sex","s\u00e1b"],"dayNamesMin":["D","S","T","Q","Q","S","S"],"dateFormat":"dd\/mm\/yy","firstDay":1,"isRTL":false});});
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/i18n/datepicker-pt.js?ver=1.0"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/wp-a11y.min.js?ver=4.9.7"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var uiAutocompleteL10n = {"noResults":"Nenhum resultado encontrado.","oneResult":"Foi encontrado um resultado. Use as setas para cima e para baixo do teclado para navegar.","manyResults":"Foram encontrados %d resultados. Use as setas para cima e para baixo do teclado para navegar.","itemSelected":"Item selecionado."};
         /* ]]> */
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/jquery.ui.touch-punch.js?ver=0.2.2"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var HOUZEZ_ajaxcalls_vars = {"admin_url":"http:\/\/novoterralima.com\/wp-admin\/","houzez_rtl":"no","redirect_type":"same_page","login_redirect":"http:\/\/novoterralima.com\/status\/venda-e-locacao\/","login_loading":"Sending user info, please wait...","direct_pay_text":"Processing, Please wait...","user_id":"0","transparent_menu":"","simple_logo":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_mobile":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_mobile_splash":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_splash":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_height":"24","retina_logo_width":"140","property_lat":"","property_lng":"","property_map":"","property_map_street":"","is_singular_property":"","process_loader_refresh":"fa fa-spin fa-refresh","process_loader_spinner":"fa fa-spin fa-spinner","process_loader_circle":"fa fa-spin fa-circle-o-notch","process_loader_cog":"fa fa-spin fa-cog","success_icon":"fa fa-check","prop_featured":"Destaque","featured_listings_none":"You have used all the \"Featured\" listings in your package.","prop_sent_for_approval":"Sent for Approval","paypal_connecting":"Connecting to paypal, Please wait... ","mollie_connecting":"Connecting to mollie, Please wait... ","confirm":"Are you sure you want to delete?","confirm_featured":"Are you sure you want to make this a featured listing?","confirm_featured_remove":"Are you sure you want to remove from featured listing?","confirm_relist":"Are you sure you want to relist this property?","delete_property":"Processing, please wait...","delete_confirmation":"Are you sure you want to delete?","not_found":"We didn't find any results","for_rent":"locacao","for_rent_price_range":"locacao","currency_symbol":"R$","advanced_search_widget_min_price":"5000","advanced_search_widget_max_price":"200000000","advanced_search_min_price_range_for_rent":"5000","advanced_search_max_price_range_for_rent":"300000","advanced_search_widget_min_area":"10","advanced_search_widget_max_area":"6000","advanced_search_price_slide":"1","fave_page_template":"page.php","google_map_style":"","googlemap_default_zoom":"2","googlemap_pin_cluster":"yes","googlemap_zoom_cluster":"1","map_icons_path":"http:\/\/novoterralima.com\/wp-content\/themes\/houzez\/images\/map\/","infoboxClose":"http:\/\/novoterralima.com\/wp-content\/themes\/houzez\/images\/map\/close.png","clusterIcon":"http:\/\/novoterralima.com\/wp-content\/uploads\/2017\/11\/cluster-icon2.png","google_map_needed":"","paged":"0","search_result_page":"normal_page","search_keyword":"","search_country":"","search_state":"","search_city":"","search_feature":"","search_area":"","search_status":"","search_label":"","search_type":"","search_bedrooms":"","search_bathrooms":"","search_min_price":"","search_max_price":"","search_min_area":"","search_max_area":"","search_publish_date":"","search_no_posts":"10","search_location":"","use_radius":"on","search_lat":"","search_long":"","search_radius":"","transportation":"Transporte P\u00fablico","supermarket":"Lojas e Com\u00e9rcio","schools":"Escolas","libraries":"Bibliotecas","pharmacies":"Farm\u00e1cias","hospitals":"Hospitais","sort_by":"","measurement_updating_msg":"Updating, Please wait...","autosearch_text":"Searching...","currency_updating_msg":"Updating Currency, Please wait...","currency_position":"before","submission_currency":"USD","wire_transfer_text":"To be paid","direct_pay_thanks":"Thank you. Please check your email for payment instructions.","direct_payment_title":"Direct Payment Instructions","direct_payment_button":"SEND ME THE INVOICE","direct_payment_details":"","measurement_unit":"m\u00b2","header_map_selected_city":"","thousands_separator":",","current_tempalte":"","monthly_payment":"Monthly Payment","weekly_payment":"Weekly Payment","bi_weekly_payment":"Bi-Weekly Payment","compare_button_url":"","template_thankyou":"http:\/\/novoterralima.com\/","compare_page_not_found":"Please create page using compare properties template","property_detail_top":"v3","keyword_search_field":"prop_address","keyword_autocomplete":"1","houzez_date_language":"pt","houzez_default_radius":"50","enable_radius_search":"0","enable_radius_search_halfmap":"1","houzez_primary_color":"#404643","geocomplete_country":"BR","houzez_logged_in":"no","ipinfo_location":"0","gallery_autoplay":"1","stripe_page":"http:\/\/novoterralima.com\/","twocheckout_page":"http:\/\/novoterralima.com\/"};
         /* ]]> */
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/houzez_ajax_calls.js?ver=1.5.7"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/custom.js?ver=1.5.7"></script>
      <div class="sticky_nav houzez-header-main header-section-4 nav-right houzez-disabled-login" style="top: 0px;">
         <header id="header-section" class="houzez-header-main header-section-4 nav-right   houzez-disabled-login" data-sticky="1">
            <div class="container-fluid">
               <div class="header-left">
                  <div class="logo logo-desktop">
                     <a href="http://novoterralima.com/">
                     <img src="http://novoterralima.com/wp-content/uploads/2018/04/logo_site.png" alt="logo">
                     </a>
                  </div>
                  <nav class="navi main-nav">
                     <ul id="main-nav" class="">
                        <li id="menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="http://novoterralima.com/empresa/">Sobre Nós</a></li>
                        <li id="menu-item-740" class="menu-item menu-item-type-taxonomy menu-item-object-property_status current-menu-item menu-item-has-children menu-item-740 has-child">
                           <a href="http://novoterralima.com/status/venda-e-locacao/">Portfólio</a>
                           <ul class="sub-menu">
                              <li id="menu-item-739" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-739"><a href="http://novoterralima.com/status/locacao/">Locação</a></li>
                              <li id="menu-item-741" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-741"><a href="http://novoterralima.com/status/venda/">Venda</a></li>
                           </ul>
                        </li>
                        <li id="menu-item-4644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4644"><a href="http://novoterralima.com/corretores-terra-lima/">Corretores</a></li>
                        <li id="menu-item-4570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="http://novoterralima.com/fale-conosco/?yp_rand=683893">Fale Conosco</a></li>
                        <li id="menu-item-4562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4562"><a href="http://novoterralima.com/fale-conosco-2/">Cadastre Seu Imóvel</a></li>
                        <li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608"><a href="http://novoterralima.com/resultados/">Mapa</a></li>
                        <li id="menu-item-4561" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4561"><a href="http://novoterralima.com/category/terra-lima-imoveis/">Blog</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="header-right">
                  <div class="user">
                  </div>
               </div>
            </div>
         </header>
      </div>
      <div class="sticky_nav header-mobile houzez-header-mobile" style="top: 0px;">
         <div class="header-mobile houzez-header-mobile" data-sticky="1">
            <div class="container">
               <!--start mobile nav-->
               <div class="mobile-nav">
                  <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
                  <div class="nav-dropdown main-nav-dropdown">
                     <ul id="main-nav" class="">
                        <li id="menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="http://novoterralima.com/empresa/">Sobre Nós</a></li>
                        <li id="menu-item-740" class="menu-item menu-item-type-taxonomy menu-item-object-property_status current-menu-item menu-item-has-children menu-item-740 has-child">
                           <a href="http://novoterralima.com/status/venda-e-locacao/">Portfólio</a>
                           <ul class="sub-menu">
                              <li id="menu-item-739" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-739"><a href="http://novoterralima.com/status/locacao/">Locação</a></li>
                              <li id="menu-item-741" class="menu-item menu-item-type-taxonomy menu-item-object-property_status menu-item-741"><a href="http://novoterralima.com/status/venda/">Venda</a></li>
                           </ul>
                           <span class="expand-me"></span>
                        </li>
                        <li id="menu-item-4644" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4644"><a href="http://novoterralima.com/corretores-terra-lima/">Corretores</a></li>
                        <li id="menu-item-4570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4570"><a href="http://novoterralima.com/fale-conosco/?yp_rand=683893">Fale Conosco</a></li>
                        <li id="menu-item-4562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4562"><a href="http://novoterralima.com/fale-conosco-2/">Cadastre Seu Imóvel</a></li>
                        <li id="menu-item-608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-608"><a href="http://novoterralima.com/resultados/">Mapa</a></li>
                        <li id="menu-item-4561" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4561"><a href="http://novoterralima.com/category/terra-lima-imoveis/">Blog</a></li>
                     </ul>
                  </div>
               </div>
               <!--end mobile nav-->
               <div class="header-logo logo-mobile">
                  <a href="http://novoterralima.com/">
                  <img src="http://novoterralima.com/wp-content/uploads/2018/04/logo_site.png" alt="Mobile logo">
                  </a>        
               </div>
               <div class="header-user">
                  <ul class="account-action">
                     <li>
                        <span class="user-icon"><i class="fa fa-user"></i></span>
                        <div class="account-dropdown">
                           <ul>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/wp-embed.min.js?ver=4.9.7"></script>
      <script>
         jQuery(document).ready(function() {
           
         });
      </script>
      <div id="wp-a11y-speak-polite" aria-live="polite" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
      <div id="wp-a11y-speak-assertive" aria-live="assertive" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
   </body>
</html>

