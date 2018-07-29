<div id="houzez_featured_properties-5" class="widget widget_houzez_featured_properties">
   <div class="widget-top">
      <h3 class="widget-title">Highlights</h3>
   </div>
   <div class="widget-body">

      <?php foreach ($destaques as $key ) { 
         if(isset($key['Codigo'])){ 
            $key['ValorVenda'] = $imoveis->formataValor($key['ValorVenda'], 1000);
            $key['ValorLocacao'] = $imoveis->formataValor($key['ValorLocacao'], 100);
      ?>

            <div class="figure-block">
               <figure class="item-thumb">
                  <span class="label-featured label label-success">Destaque</span>
                  <div class="label-wrap label-right">
                     <span class="label-status label-status-180 label label-default">
                        <a href="/<?=pasta?>/Portfolio/<?=$key['Status'] == 'venda'?'venda': 'locacao'?>"><?=$key['Status']?></a>
                     </span>
                  </div>
                  <a href="#" class="hover-effect">
                     <img src="<?=$key['FotoDestaque']?>" width="385" height="258">                               
                  </a>

                  <figcaption class="thumb-caption clearfix">
                     <div class="cap-price pull-left">
                     <?php if ($key['Status'] == 'ALUGUEL') { ?> 

                           <span class="price-start"><?=$key['Status']?></span> 
                           <?=$key['ValorLocacao'] > 0?'R$'.$key['ValorLocacao']: '' ?>
                           

                     <?php }else{ ?>

                           <span class="price-start"><?=$key['Status']?></span> 
                           <?=$key['ValorVenda'] > 0?'R$'.$key['ValorVenda']: '' ?>

                     <?php  } ?>
                     </div>

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
         
      <?php } } ?>
       </div>
</div>
   