

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
                                 <option value="" <?=$imoveis->selected('orderBy','DataCadastro-desc') ?> >
                                    Ordem padrão 
                                 </option>

                                 <option value="ValorVenda-asc" <?=$imoveis->selected('orderBy','ValorVenda-asc') ?> >
                                    Preço (baixo para alto)
                                 </option>

                                 <option value="ValorVenda-desc" <?=$imoveis->selected('orderBy','ValorVenda-desc') ?> >
                                    Preço (alto para baixo)
                                 </option>

                                 <option value="EmDestaque-asc" <?=$imoveis->selected('orderBy','EmDestaque-asc') ?> >
                                    Destaques
                                 </option>

                                 <option value="DataCadastro-asc" <?=$imoveis->selected('orderBy','DataCadastro-asc') ?> >
                                    Data antiga para nova
                                 </option>

                                 <option value="DataCadastro-desc" >
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
                              <?php if (!empty($f['Codigo'])) {
                                 echo 'Imovel - '. $f['Codigo'];
                              }else{ ?>
                                 <?=!empty($params['Pais'])? $params['Pais'].', ': ''?>

                                 <?=!empty($params['Cidade'])? $params['Cidade'].', ': ''?>

                                 <?=!empty($params['Bairro'])? $params['Bairro'].', ': ''?>
                                 
                                 <?=!empty($params['Categoria']) ? $params['Categoria']. ', ': ''?>

                                 <?=!empty($params['Status']) ?  $params['Status'].', ' : ''?>
                                 
                                 <?=!empty($f['EmDestaque']) ?  'Destaques, ' : ''?>

                                 <?=!empty($params['min-price'])? "Preço desde - ".$params['min-price']." até ". $params['max-price']:'' ?>

                                 <?=!empty($f['AreaTerreno'])?', Àrea desde - '. $f['AreaTerreno'][0].'m² até '. $f['AreaTerreno'][1].'m² ': ''?>

                                 <?php 
                                    foreach ($f as $key => $value) { 
                                       if ($value == 'Sim') {  
                                          echo " $key ";
                                       } 
                                    } 
                                 }
                                 ?>
                             </div>
                           </div>
                        </div>
                     <?php } ?>
                     
                        <div class="row">
                        <?php 
                              if($listagem['total'] >= 1){

                                 foreach ($listagem as $key ) { 
                                    include 'build/imovelView.php';

                                 }

                              }else{ ?>

                                 <div style="background: white; width: 400px; padding-top: 10px; text-align: center; margin: 0 auto 0 auto" >
                                    <h4 style="font-weight: 700">Desculpe não foram<br> encontrados resultados</h4>
                                 </div>

                        <?php } ?>
                        </div>
                     </div>
                 
                     <!--end property items-->
                     <hr>
                       <!--start Pagination-->
                     <div class="pagination-main limitText"  style="max-width: 26ch;" >
                        <form method="post" id="pagination">
                           <input type="num" name="pagina" id="pag" hidden>
                        </form>

                        <ul class="pagination ">

                        <?php if ($listagem['pagina'] > 1) { ?>  
                              <li>
                                 <a class="btnPag"  data-pag="<?=$listagem['pagina']-1?>" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                 </a>
                              </li>
                        <?php } ?>

                        <li class="active">
                           <a class="btnPag" data-pag="<?=$listagem['pagina']?>" href="#">
                              <?=$listagem['pagina']?><span class="sr-only"></span>
                           </a>
                        </li>

                        <?php for ($listagem['pagina'] += 1; $listagem['pagina'] < $listagem['paginas']; $listagem['pagina']++) { ?>
                              <li>
                                 <a class="btnPag" data-pag="<?=$listagem['pagina']?>"  href="#">
                                    <?=$listagem['pagina']?><span class="sr-only"></span>
                                 </a>
                              </li>
                        <?php } ?>
                        </ul>
                     </div>
                     <!--end Pagination-->

                  </div>
                  
               </div>

               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-sidebar ">
                  <aside id="sidebar" class="sidebar-white">
                     <?php
                        include 'build/navAside.php';
                     ?>
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

