

<!DOCTYPE html>
<html>
   <head>
      <title>Resultados – Terra Lima Imóveis</title>
      <?php
         require_once('build/head.php');
      ?>
   </head>
   <body>
    
      <?php
         require_once('build/navbar.php');
         include 'build/login.php';
      ?>

      <div id="section-body" class="">
         <div class="container">
            <!--end compare panel-->
            <div class="page-title breadcrumb-top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-left">
                        <h2>Resultados</h2>
                     </div>

                     <div class="page-title-right">
                        <div class="view">
                           <form class="sort-tab table-cell" method="post" id="order">
                              Ordenar por:                            
                              <select id="sort_properties" class="selectpicker bs-select-hidden"  name="order">
                                 <option value="" >
                                    Ordem padrão
                                 </option>

                                 <option value="ValorVenda_asc" <?=$imoveis->checkSelect('order','ValorVenda_asc')?>  >
                                    Preço (baixo para alto)
                                 </option>

                                 <option value="ValorVenda_desc" <?=$imoveis->checkSelect('order','ValorVenda_desc')?> >
                                    Preço (alto para baixo)
                                 </option>

                                 <option value="EmDestaque_asc" <?=$imoveis->checkSelect('order','EmDestaque_asc')?>  >
                                    Destaques
                                 </option>

                                 <option value="DataLancamento_asc" <?=$imoveis->checkSelect('order','DataLancamento_asc')?>  >
                                    Data antiga para nova
                                 </option>

                                 <option value="DataLancamento_desc" <?=$imoveis->checkSelect('order','DataLancamento_desc')?>  >
                                    Data nova para antiga
                                 </option>
                              </select>
                           </form>
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
                     <?php if($listagem['total'] >= 1){  ?>
                        <div class="row">
                           <div class="list-search col-md-12" style="background-color: rgba(0, 174, 239, 0.05)">
                             <div class="indicePesquisa">
                                 <?=!empty($_SESSION['Pais'])? $_SESSION['Pais'][1].', ': ''?>

                                 <?=!empty($_SESSION['Categoria']) ? $_SESSION['Categoria'][1]. ', ': ''?>

                                 <?=!empty($_SESSION['Status']) ?  $_SESSION['Status'].', ' : ''?>

                                 <?php
                                    if (!empty($_SESSION['Status'])? $_SESSION['Status'] == 'ALUGUEL': 0) {
                                       echo "Preço desde - R$".$_SESSION['ValorLocacao'][0]." até R$". $_SESSION['ValorLocacao'][1] ;
                                    }else{
                                       echo "Preço desde - R$". $_SESSION['ValorVenda'][0]." até R$". $_SESSION['ValorVenda'][1];
                                    }
                                 ?>

                                 <?=!empty($_SESSION['AreaTerreno'])?', Àrea desde - '. $_SESSION['AreaTerreno'][0].'m² até '. $_SESSION['AreaTerreno'][1].'m² ': ''?>
                             </div>
                           </div>
                        </div>
                     <?php } ?>
                     
                        <div class="row">
                           <?php 
                              if($listagem['total'] >= 1){

                              foreach ($listagem as $key ) { 
                                 if(isset($key['Codigo'])){ 
                                    $key['ValorVenda'] = $imoveis->formataValor($key['ValorVenda'], 1000);
                                    $key['ValorLocacao'] = $imoveis->formataValor($key['ValorLocacao'], 100);
                           ?>
                               
                                 <div id="ID-<?=$key['Codigo']?>" class="item-wrap infobox_trigger <?=$key['TituloSite']?>">
                                    <div class="property-item table-list">
                                       <div class="table-cell">
                                          <div class="figure-block">
                                             <figure class="item-thumb">
                                                <div class="label-wrap label-right hide-on-list">
                                                   <span class="label-status label-status-180 label label-default">
                                                      <a href="#"><?=$key['Status']?></a>
                                                   </span>           
                                                </div>
                                                <div class="price hide-on-list">
                                                   <?php if (!empty($key['ValorVenda'])) { ?>
                                                      <span class="price-start">Venda</span>
                                                      <span class="item-price">R$<?=$key['ValorVenda']?></span>
                                                   <?php } ?>

                                                      <span class="item-sub-price">
                                                         <?=!empty($key['ValorLocacao'])?'R$'.$key['ValorLocacao'].'/Por Mês': ''?>
                                                      </span>
                                                </div>

                                                <a class="hover-effect limitImg" href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>">
                                                   <img src="<?=$key['FotoDestaque']?>" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image limitImg" alt="" width="385" height="258">                    
                                                </a>
                                                
                                                <ul class="actions">
                                                   <li>
                                                      <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" ><i class="fas fa-heart"></i></span>
                                                   </li>
                                                   <li>
                                                      <span data-toggle="tooltip" data-placement="top" title="" data-original-title="(12) Fotos">
                                                      <i class="fas fa-camera"></i>
                                                      </span>
                                                   </li>
                                                  <!--  <li>
                                                      <span id="compare-link-1643" class="compare-property" data-propid="1643" data-toggle="tooltip" data-placement="top" title="" data-original-title="Comparar">
                                                      <i class="fa fa-plus"></i>
                                                      </span>
                                                   </li> -->
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
                                                   <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>">
                                                      <?=$key['Codigo']?> - <?=$key['TituloSite']?>
                                                   </a>
                                                </h2>
                                                <address class="property-address">
                                                   <?=$key['Bairro']?>, <?=$key['Cidade']?> - SP, <?=$key['CEP']?>, <?=$key['Pais']?>
                                                </address>
                                             </div>

                                             <div class="info-row amenities hide-on-grid">
                                                <p>
                                                   <span>Quartos: <?=$key['Dormitorios']?></span>
                                                   <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                                                   <span>m² : <?=$key['AreaConstruida']?></span>
                                                </p>
                                                <p><?=$key['Categoria']?></p>
                                             </div>
                                             <div class="info-row date hide-on-grid"></div>
                                          </div>

                                          <div class="body-right table-cell hidden-gird-cell">
                                             <div class="info-row price">
                                                <?php if (!empty($key['ValorVenda'])) { ?>
                                                   <span class="price-start">Venda</span>
                                                   <span class="item-price">R$<?=$key['ValorVenda']?></span>
                                                <?php } ?>

                                                <span class="item-sub-price"><?=!empty($key['ValorLocacao'])?'R$'.$key['ValorLocacao'].'/Por Mês': ''?></span>
                                             </div>

                                             <div class="info-row phone text-right">
                                                <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="btn btn-primary">
                                                   Detalhes <i class="fa fa-angle-right fa-right"></i>
                                                </a>
                                             </div>
                                          </div>

                                          <div class="table-list full-width hide-on-list">
                                             <div class="cell">
                                                <div class="info-row amenities">
                                                   <p>
                                                      <span>Quartos: <?=$key['Dormitorios']?></span>
                                                      <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                                                      <span>m² : <?=$key['AreaConstruida']?></span>
                                                   </p>
                                                   <p><?=$key['Categoria']?></p>
                                                </div>
                                             </div>

                                             <div class="cell">
                                                <div class="phone">
                                                   <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="btn btn-primary"> 
                                                      Detalhes <i class="fa fa-angle-right fa-right"></i>
                                                   </a>
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
                           <?php } }

                           }else{?>
                              <div style="background: white; width: 400px; padding-top: 10px; text-align: center; margin: 0 auto 0 auto" >
                                 <h4 style="font-weight: 700">Desculpe não foram<br> encontrados resultados</h4>
                              </div>
                           <?php }?>
                        </div>
                     </div>
                 
                     <!--end property items-->
                     <hr>
                     <!--start Pagination-->
                     <form class="pagination-main" method="post" >
                        <input type="num" name="pagina" id="pag" hidden>
                        <ul class="pagination">
                        <?php if ($listagem['pagina'] >= 3) { ?>
                           <li hidden><a class="btnPag"  data-pag="<?=$listagem['pagina']-3?>" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-2?>" href="#"><?=$listagem['pagina']-2?><span class="sr-only"></span></a></li>
                        <?php } if ($listagem['pagina'] >= 2) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']-1?>" href="#"><?=$listagem['pagina']-1?><span class="sr-only"></span></a></li>
                        <?php } ?>

                           <li class="active"><a class="btnPag" data-pag="<?=$listagem['pagina']?>" href="#"><?=$listagem['pagina']?><span class="sr-only"></span></a></li>
                        <?php if ($listagem['pagina'] < ($listagem['total'] - 4) ) { ?>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+1?>" href="#"><?=$listagem['pagina']+1?><span class="sr-only"></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+2?>" href="#"><?=$listagem['pagina']+2?><span class="sr-only"></span></a></li>
                           <li><a class="btnPag" data-pag="<?=$listagem['pagina']+3?>" rel="Next" pag="<?=$listagem['pagina']-5?>"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                        <?php } ?>
                        </ul>
                     </form>
                     <!--end Pagination-->

                  </div>
                  
               </div>

               <!-- end container-content -->
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar ">
                  <aside id="sidebar" class="sidebar-white">
                     <?php
                        include 'build/formBusca.php';
                        include 'build/equipe.php';
                        include 'build/destaques.php';
                     ?>
                     
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

      <!--start footer section-->
      <?php
         include'build/footer.php';
         include'build/requisicoes.php';
      ?>
      <!--end footer section-->

      <script>
         jQuery(document).ready(function() {
            jQuery.cookie('properties-layout', 'grid-view');
            jQuery.cookie('layout-btn', 'btn-grid');
            jQuery('.property-listing').removeClass('list-view grid-view grid-view-3-col');
            jQuery('.property-listing').addClass('grid-view');
            jQuery('.view-btn').removeClass('active');
            jQuery('.view-btn.btn-grid').addClass('active');




         });
      </script>
   </body>
</html>

