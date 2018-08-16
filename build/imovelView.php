<?php
if(isset($key['Codigo'])){ 
   $key['ValorVenda'] = $imoveis->formataValor($key['ValorVenda'], 1000);
   $key['ValorLocacao'] = $imoveis->formataValor($key['ValorLocacao'], 100);

?>
 
<div id="ID-<?=$key['Codigo']?>" class="item-wrap infobox_trigger <?=$key['TituloSite']?>">
   <div class="property-item table-list">
      <div class="table-cell">
         <div class="figure-block">
            <figure class="item-thumb">
               <!-- <span class="label-featured label label-success"></span> -->
               <div class="label-wrap label-right hide-on-list">
                  <span class="label-status label-status-180 label label-default">
                     <a href="/<?=pasta?>/Portfolio/<?=$key['Status'] == 'venda'?'venda': 'locacao'?>"><?=$key['Status']?></a>
                  </span>           
               </div>

               <div class="price hide-on-list">
                  <?php if (!empty($key['ValorVenda'])) { ?>
                     <span class="price-start">Venda</span>
                     <span class="item-price">R$<?=$key['ValorVenda']?></span>
                  <?php } ?>

                  <span class="item-price">
                     <?=!empty($key['ValorLocacao'])?'R$'.$key['ValorLocacao']: ''?>      
                  </span>
               </div>

               <a class="hover-effect limitImg" href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>">
                  <img src="<?=$key['FotoDestaque']?>" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image limitImg" alt="" width="385" height="250">                    
               </a>
               
               <ul class="actions">
                <!--   <li>
                     <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="1643"><i class="fa fa-heart"></i></span>
                  </li> -->
                  <li>
                     <span data-toggle="tooltip" data-placement="top" title="" data-original-title="<?=$imoveis->countPhoto($key['Codigo']);?>">
                     <i class="fa fa-camera"></i>
                     </span>
                  </li>
              <!--     <li>
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
                     <a href="/<?=pasta?>/Portfolio/<?=$key['Status'] == 'VENDA'?'venda': 'locacao'?>"><?=$key['Status']?> </a>
                  </span>
               </div>

               <h2 class="property-title">
                  <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>">
                     <?=$key['TituloSite']?> - <?=$key['Codigo']?>
                  </a>
               </h2>

               <address class="property-address">
                  <?=!empty($key['Bairro'])? $key['Bairro'].', ': '' ?> 

                  <?=!empty($key['Cidade'])? $key['Cidade']: '' ?>

                  <?=!empty($key['UF'])?' - '.$key['UF'].' ': '' ?>

                  <?=!empty($key['CEP'])?','. $key['CEP'].', ': '' ?>

                  <?=!empty($key['Pais'])? $key['Pais']: '' ?>

               </address>
            </div>

            <div class="info-row amenities hide-on-grid">
               <p>
                  <span>Quartos: <?=$key['Dormitorios']?></span>
                  <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                  <span>m²: <?=$key['AreaTerreno']?> </span>
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

               <span class="item-price">
                  <?=!empty($key['ValorLocacao'])?'R$'.$key['ValorLocacao']: ''?>      
               </span>
            </div>

            <div class="info-row phone text-right">
               <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="btn btn-primary" style="background-color:#727272">Detalhes <i class="fa fa-angle-right fa-right"></i></a>
            </div>
         </div>

         <div class="table-list full-width hide-on-list">
            <div class="cell">
               <div class="info-row amenities">
                  <p>
                     <span>Quartos: <?=$key['Dormitorios']?></span>
                     <span>Banheiros: <?=$key['TotalBanheiros']?></span>
                     <span>m²: <?=$key['AreaTerreno']?></span>
                  </p>
                  <p><?=$key['Categoria']?></p>
               </div>
            </div>
            <div class="cell">
               <div class="phone">
                  <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="btn btn-primary"  style="background-color:#727272"> Detalhes <i class="fa fa-angle-right fa-right"></i></a>
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