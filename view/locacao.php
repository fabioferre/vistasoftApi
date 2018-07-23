

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

      <?php
         require_once('build/navbar.php');
      ?>

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
                        <h2>Locação</h2>
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
                           <?php foreach ($listagem as $key ) { ?>
                           <div id="ID-<?=$key['Codigo']?>" class="item-wrap infobox_trigger <?=$key['DescricaoWeb']?>">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-180 label label-default"><a href="http://novoterralima.com/status/venda/">Venda</a></span><span class="label-status label-status-171 label label-default"><a href="#">Venda / Locação</a></span>                    
                                          </div>
                                          <div class="price hide-on-list"><span class="price-start">Venda</span><span class="item-price">R$ <?=$key['ValorVenda']?></span></div>

                                          <a class="hover-effect" href="<?=$linkDetalhe?>/<?=$key['Codigo']?>">
                                             <img src="http://novoterralima.com/wp-content/uploads/2017/12/219-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" width="385" height="258">                    
                                          </a>
                                          
                                          <ul class="actions">
                                             <li>
                                                <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1643"><i class="fa fa-heart"></i></span>
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

                                             <span class="label-status label-status-180 label label-default">
                                                <a href="#"><?=$key['Status']?> </a>
                                             </span>

                                             <span class="label-status label-status-171 label label-default">
                                                <a href="#">Venda / Locação</a>
                                             </span>

                                          </div>

                                          <h2 class="property-title">
                                             <a href="<?=$linkDetalhe?>/<?=$key['Codigo']?>"></i><?=$key['DescricaoWeb']?></a>
                                          </h2>
                                          <address class="property-address"><?=$key['Bairro']?>, <?=$key['Cidade']?> - SP, <?=$key['CEP']?>, <?=$key['Pais']?></address>
                                       </div>

                                       <div class="info-row amenities hide-on-grid">
                                          <p>
                                             <span>Quartos: <?=$key['Dormitorios']?></span>
                                             <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                                             <span>m² : <?=$key['AreaTotal']?></span>
                                          </p>
                                          <p><?=$key['Categoria']?></p>
                                       </div>
                                       <div class="info-row date hide-on-grid"></div>
                                    </div>

                                    <div class="body-right table-cell hidden-gird-cell">
                                       <div class="info-row price"><span class="price-start">Venda</span><span class="item-price">R$ <?=$key['ValorVenda']?></span></div>
                                       <div class="info-row phone text-right">
                                          <a href="<?=$linkDetalhe?>/<?=$key['Codigo']?>" class="btn btn-primary">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
                                       </div>
                                    </div>

                                    <div class="table-list full-width hide-on-list">
                                       <div class="cell">
                                          <div class="info-row amenities">
                                             <p>
                                                <span>Quartos: <?=$key['Dormitorios']?></span>
                                                <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                                                <span>m² : <?=$key['AreaTotal']?></span>
                                             </p>
                                             <p>Casa</p>
                                          </div>
                                       </div>
                                       <div class="cell">
                                          <div class="phone">
                                             <a href="<?=$linkDetalhe?>/<?=$key['Codigo']?>" class="btn btn-primary"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
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
                           <?php } ?>
                        </div>
                     </div>
                 
                     <!--end property items-->
                     <hr>
                     <!--start Pagination-->
                     <form class="pagination-main" method="post">
                        <input type="num" name="pag" id="pag" hidden>
                        <ul class="pagination">
                        <?php if ($listagem['pagina'] >= 3) { ?>
                           <li hidden><a class="btnPag"  data-pag="<?=$listagem['pagina']-3?>" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-2?>" href=""><?=$listagem['pagina']-2?><span class="sr-only"></span></a></li>
                        <?php } if ($listagem['pagina'] >= 2) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-1?>" href=""><?=$listagem['pagina']-1?><span class="sr-only"></span></a></li>
                        <?php } ?>

                           <li class="active"><a class="btnPag" data-pag="<?=$listagem['pagina']?>" href=""><?=$listagem['pagina']?><span class="sr-only"></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+1?>" href=""><?=$listagem['pagina']+1?><span class="sr-only"></span></a></li>

                        <?php if ($listagem['pagina'] <= $listagem['paginas'] - 3) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+2?>" href=""><?=$listagem['pagina']+2?><span class="sr-only"></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+3?>" rel="Next" pag="<?=$listagem['pagina']-5?>"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                        <?php } ?>
                        </ul>
                     </form>
                     <!--start Pagination-->
                  </div>
               </div>

               <!-- end container-content -->
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar ">
                  <aside id="sidebar" class="sidebar-white">

                     <?php
                        include 'build/formBusca.php';
                        include 'build/buscaRapida.php';
                        include 'build/equipe.php';
                     ?>
                     
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
                              <li><i class="fas fa-location-arrow"></i> Av. Brg. Faria Lima, 1982, 12° Andar</li>
                              <li><i class="fas fa-phone"></i> +55 11 3628-4111</li>
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
         include'build/requisicoes.php';
      ?>
      <!--end footer section-->

     
   </body>
</html>

