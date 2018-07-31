

<!DOCTYPE html>
<html>
   <head>
      <title>Venda – Terra Lima Imóveis</title>
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
            <div class="page-title breadcrumb-top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-left">
                        <h2>Venda</h2>
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

                        <div class="row">
                           <?php 
                              foreach ($listagem as $key ) {  
                                 include 'build/imovel.php';   
                              } 
                           ?>
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
               
               <?php
                  include 'build/navSide.php';
               ?>
               <!-- end container-sidebar -->
            </div>
         </div>
         <!--.container Start in header-->
      </div>
      <?php
         include'build/footer.php';
      ?>
      <script>
         jQuery(document).ready(function() {
           jQuery('#firstSearch').submit(function(){
               var action = jQuery(this).attr("action");
               window.location.href(action);
           });
         });
      </script>
   </body>
</html>

