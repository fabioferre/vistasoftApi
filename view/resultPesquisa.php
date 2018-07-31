

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
                                    include 'build/imovel.php';

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

