

<!DOCTYPE html>
<html>
   <head>
      <title>Venda / Locação – Terra Lima Imóveis</title>
      <?php
         require_once('build/head.php');
         ?>
   </head>
   <body>
    
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

                           <?php 
                       
                           foreach ($listagem as $key ) {   if(isset($key['Codigo'])){?>
                            
                           <div id="ID-<?=$key['Codigo']?>" class="item-wrap infobox_trigger <?=$key['DescricaoWeb']?>">
                              <div class="property-item table-list">
                                 <div class="table-cell">
                                    <div class="figure-block">
                                       <figure class="item-thumb">
                                          <div class="label-wrap label-right hide-on-list">
                                             <span class="label-status label-status-180 label label-default"><a href="http://novoterralima.com/status/venda/">Venda</a></span>           
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
                           <?php } }?>
                        </div>
                     </div>
                 
                     <!--end property items-->
                     <hr>
                     <!--start Pagination-->
                     <form class="pagination-main" method="post" >
                        <input type="num" name="pag" id="pag" hidden>
                        <ul class="pagination">
                        <?php if ($listagem['pagina'] >= 3) { ?>
                           <li hidden><a class="btnPag"  data-pag="<?=$listagem['pagina']-3?>" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-2?>" href="#"><?=$listagem['pagina']-2?><span class="sr-only"></span></a></li>
                        <?php } if ($listagem['pagina'] >= 2) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-1?>" href="#"><?=$listagem['pagina']-1?><span class="sr-only"></span></a></li>
                        <?php } ?>

                           <li class="active"><a class="btnPag" data-pag="<?=$listagem['pagina']?>" href="#"><?=$listagem['pagina']?><span class="sr-only"></span></a></li>

                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+1?>" href="#"><?=$listagem['pagina']+1?><span class="sr-only"></span></a></li>

                        <?php if ($listagem['pagina'] <= $listagem['paginas'] - 3) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+2?>" href="#"><?=$listagem['pagina']+2?><span class="sr-only"></span></a></li>
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
      ?>
      <!--end footer section-->

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <script type="text/javascript">
         /* <![CDATA[ */
         var hz_plugin = {"rating_terrible":"Terrible","rating_poor":"Poor","rating_average":"Average","rating_vgood":"Very Good","rating_exceptional":"Exceptional"};
         /* ]]> */
      </script>

      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/plugins.js?ver=1.5.7"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4"></script>
  
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/menu.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/wp-a11y.min.js?ver=4.9.7"></script>
     <!--  <script type="text/javascript">
         /* <![CDATA[ */
         var uiAutocompleteL10n = {"noResults":"Nenhum resultado encontrado.","oneResult":"Foi encontrado um resultado. Use as setas para cima e para baixo do teclado para navegar.","manyResults":"Foram encontrados %d resultados. Use as setas para cima e para baixo do teclado para navegar.","itemSelected":"Item selecionado."};
         /* ]]> */
      </script> -->
      <!-- <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.11.4"></script> -->
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/jquery/jquery.ui.touch-punch.js?ver=0.2.2"></script>
      <script type="text/javascript">
         /* <![CDATA[ */
         var HOUZEZ_ajaxcalls_vars = {"admin_url":"http:\/\/novoterralima.com\/wp-admin\/","houzez_rtl":"no","redirect_type":"same_page","login_redirect":"http:\/\/novoterralima.com\/status\/venda-e-locacao\/","login_loading":"Sending user info, please wait...","direct_pay_text":"Processing, Please wait...","user_id":"0","transparent_menu":"","simple_logo":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_mobile":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_mobile_splash":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_splash":"http:\/\/novoterralima.com\/wp-content\/uploads\/2018\/04\/logo_site.png","retina_logo_height":"24","retina_logo_width":"140","property_lat":"","property_lng":"","property_map":"","property_map_street":"","is_singular_property":"","process_loader_refresh":"fa fa-spin fa-refresh","process_loader_spinner":"fa fa-spin fa-spinner","process_loader_circle":"fa fa-spin fa-circle-o-notch","process_loader_cog":"fa fa-spin fa-cog","success_icon":"fa fa-check","prop_featured":"Destaque","featured_listings_none":"You have used all the \"Featured\" listings in your package.","prop_sent_for_approval":"Sent for Approval","paypal_connecting":"Connecting to paypal, Please wait... ","mollie_connecting":"Connecting to mollie, Please wait... ","confirm":"Are you sure you want to delete?","confirm_featured":"Are you sure you want to make this a featured listing?","confirm_featured_remove":"Are you sure you want to remove from featured listing?","confirm_relist":"Are you sure you want to relist this property?","delete_property":"Processing, please wait...","delete_confirmation":"Are you sure you want to delete?","not_found":"We didn't find any results","for_rent":"locacao","for_rent_price_range":"locacao","currency_symbol":"R$","advanced_search_widget_min_price":"5000","advanced_search_widget_max_price":"200000000","advanced_search_min_price_range_for_rent":"5000","advanced_search_max_price_range_for_rent":"300000","advanced_search_widget_min_area":"10","advanced_search_widget_max_area":"6000","advanced_search_price_slide":"1","fave_page_template":"page.php","google_map_style":"","googlemap_default_zoom":"2","googlemap_pin_cluster":"yes","googlemap_zoom_cluster":"1","map_icons_path":"http:\/\/novoterralima.com\/wp-content\/themes\/houzez\/images\/map\/","infoboxClose":"http:\/\/novoterralima.com\/wp-content\/themes\/houzez\/images\/map\/close.png","clusterIcon":"http:\/\/novoterralima.com\/wp-content\/uploads\/2017\/11\/cluster-icon2.png","google_map_needed":"","paged":"0","search_result_page":"normal_page","search_keyword":"","search_country":"","search_state":"","search_city":"","search_feature":"","search_area":"","search_status":"","search_label":"","search_type":"","search_bedrooms":"","search_bathrooms":"","search_min_price":"","search_max_price":"","search_min_area":"","search_max_area":"","search_publish_date":"","search_no_posts":"10","search_location":"","use_radius":"on","search_lat":"","search_long":"","search_radius":"","transportation":"Transporte P\u00fablico","supermarket":"Lojas e Com\u00e9rcio","schools":"Escolas","libraries":"Bibliotecas","pharmacies":"Farm\u00e1cias","hospitals":"Hospitais","sort_by":"","measurement_updating_msg":"Updating, Please wait...","autosearch_text":"Searching...","currency_updating_msg":"Updating Currency, Please wait...","currency_position":"before","submission_currency":"USD","wire_transfer_text":"To be paid","direct_pay_thanks":"Thank you. Please check your email for payment instructions.","direct_payment_title":"Direct Payment Instructions","direct_payment_button":"SEND ME THE INVOICE","direct_payment_details":"","measurement_unit":"m\u00b2","header_map_selected_city":"","thousands_separator":",","current_tempalte":"","monthly_payment":"Monthly Payment","weekly_payment":"Weekly Payment","bi_weekly_payment":"Bi-Weekly Payment","compare_button_url":"","template_thankyou":"http:\/\/novoterralima.com\/","compare_page_not_found":"Please create page using compare properties template","property_detail_top":"v3","keyword_search_field":"prop_address","keyword_autocomplete":"1","houzez_date_language":"pt","houzez_default_radius":"50","enable_radius_search":"0","enable_radius_search_halfmap":"1","houzez_primary_color":"#404643","geocomplete_country":"BR","houzez_logged_in":"no","ipinfo_location":"0","gallery_autoplay":"1","stripe_page":"http:\/\/novoterralima.com\/","twocheckout_page":"http:\/\/novoterralima.com\/"};
         /* ]]> */
      </script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/houzez_ajax_calls.js?ver=1.5.7"></script>
      <script type="text/javascript" src="http://novoterralima.com/wp-content/themes/houzez/js/custom.js?ver=1.5.7"></script>
     
      <script type="text/javascript" src="http://novoterralima.com/wp-includes/js/wp-embed.min.js?ver=4.9.7"></script>
      <script>
         jQuery(document).ready(function() {
           jQuery('.btnPag').click(function(){
               var valpag = jQuery(this).data('pag');
               jQuery('#pag').val(valpag);

               jQuery('.pagination-main').submit();
           });

           jQuery('#firstSearch').submit(function(){
               var action = jQuery(this).attr("action");
               window.location.href(action);
           });
         });
      </script>
   </body>
</html>

