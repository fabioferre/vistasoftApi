<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title><?=$e['TituloSite']?></title>
      <meta property='og:url' content='http://novoterralima.com/imovel/apartamento-reformado-e-mobiliado-tl1639/'/>
      <meta property='og:title' content='Reformado e mobiliado TL1639'/>
      <meta property='og:description' content='Descrição'/>
       <?php
         include 'build/head.php';
      ?>
      <link rel="stylesheet" type="text/css" href="/<?=pasta?>/assets/css/mediaqueries.css">
   </head>

   <body class="property-template-default single single-property postid-816  transparent- wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
      <?php
         require_once('build/navbar.php');
         include 'build/login.php';
      ?>
      <div id="section-body" class="">
       
         <!--start detail top-->
         <section class="detail-top detail-top-grid no-margin">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="header-detail">
                        <div class="header-left">
                           <div class="table-list">
                              <div class="table-cell limitText ">
                                 <h1><?=$e['Codigo']?> - <?=$e['TituloSite']?> </h1>
                              </div>
                              <div class="table-cell hidden-sm hidden-xs">
                                 <span class="label-wrap">
                                    <span class="label-status label-status-23 label label-default">
                                       <a href="/<?=pasta?>/Portfolio/<?=$e['Status'] == 'VENDA'? 'venda': 'locacao'?>">
                                          <?=$e['Status']?>
                                       </a>
                                    </span>                
                                 </span>
                              </div>
                           </div>
                           <address class="property-address"> 
                              <?=!empty($e['Bairro'])? $e['Bairro'].', ': '' ?> 

                              <?=!empty($e['Cidade'])? $e['Cidade']: '' ?>

                              <?=!empty($e['UF'])?' - '.$e['UF'].' ': '' ?>

                              <?=!empty($e['CEP'])?','. $e['CEP'].', ': '' ?>

                              <?=!empty($e['Pais'])? $e['Pais']: '' ?>
                           </address>
                        </div>
                        
                        <div class="header-right">
                           <ul class="actions">
                              <li class="share-btn">
                                 <div class="share_tooltip tooltip_left fade">
                                    <a href="http://www.facebook.com/sharer.php?u=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-facebook"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?text=<?=$e['TituloSite']?>&url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}">
                                      <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="http://pinterest.com/pin/create/button/?url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&amp;media=<?=$e['FotoDestaque']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-pinterest"></i>
                                    </a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&title=<?=$e['TituloSite']?>&source=/<?=pasta?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a href="http://plus.google.com/share?url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-google-plus"></i>
                                    </a>

                                    <a href="mailto:example.com?subject=<?=$e['TituloSite']?>&body=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>">
                                      <i class="fa fa-envelope"></i>
                                    </a>
                                 </div>
                                 <span title="" data-placement="right" data-toggle="tooltip" data-original-title="compartilhar"><i class="fa fa-share-alt"></i></span>            
                              </li>
                              <li class="fvrt-btn">
                                 <span class="add_fav" data-placement="right" data-toggle="tooltip" data-original-title="Favorito" data-propid="816"><i class="fa fa-heart"></i></span>            
                              </li>
                             <!--  <li class="print-btn">
                                 <span data-toggle="tooltip" data-placement="right" data-original-title="Imprimir"><i id="houzez-print" class="fa fa-print" data-propid="816"></i></span>
                              </li> -->
                           </ul>
              
                            <span class="item-price">
                              <span class="price-start"><?=$e['Status']?></span>
                              <?=$e['ValorVenda'] > 0?"R$".$e['ValorVenda'] : '' ?>

                              <span class="item-sub-price">
                                <?=$e['ValorLocacao'] > 0?"R$".$e['ValorLocacao']."/Por Mês" : '' ?>
                              </span> 
                            </span>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--end detail top-->

         <!--start detail content-->
         <section class="section-detail-content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                     <div class="detail-bar">
                        <div class="detail-media detail-content-slideshow">
                            <div class="tab-content">
                              <div id="gallery" class="tab-pane fade in active">
                                 <span class="label-wrap visible-sm visible-xs">
                                    <span class="label label-primary label-status-23"><?=$e['Status']?></span>
                                 </span>

                                <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                                   <!-- Indicadores-->
                                    <ol class="carousel-indicators">
                                     <?php $i=0; 
                                      foreach ($e['Foto'] as $key => $value ) { ?>

                                      <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$i == 1?'active':''?>"></li>

                                     <?php $i++; } ?>
                                   </ol>

                                   <!-- Slides -->
                                   <div class="carousel-inner" >
                  
                                    <?php $i=0 ;
                                      foreach ($e['Foto'] as $key => $value ) { ?>

                                     <div class="item <?=$i == 1?'active':''?>">
                                       <img src="<?=$value['Foto']?>" alt=""  style="width: 100%">
                                     </div>

                                    <?php $i++; } ?>
                                   </div>

                                   <!-- Controle de direita e esquerda -->
                                   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                     <span class="glyphicon glyphicon-chevron-left"></span>
                                     <span class="sr-only">Anterior</span>
                                   </a>
                                   <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Próximo</span>
                                   </a>
                                 </div>
                              </div>
                           </div>


                           <div class="media-tabs">
                         <!--      <ul class="media-tabs-list">
                                 <li data-placement="bottom" data-toggle="tooltip" data-original-title="Map View">
                                    <a href="#singlePropertyMap" data-toggle="tab">
                                    <i class="fa fa-map"></i>
                                    </a>
                                 </li>
                              </ul> -->
                              <ul class="actions">
                                 <li class="share-btn">
                                    <div class="share_tooltip tooltip_left fade">
                                       <a href="http://www.facebook.com/sharer.php?u=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-facebook"></i>
                                       </a>

                                       <a href="https://twitter.com/intent/tweet?text=<?=$e['TituloSite']?>&url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}">
                                         <i class="fab fa-twitter"></i>
                                       </a>

                                       <a href="http://pinterest.com/pin/create/button/?url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&amp;media=<?=$e['FotoDestaque']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-pinterest"></i>
                                       </a>

                                       <a href="http://www.linkedin.com/shareArticle?mini=true&url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&title=<?=$e['TituloSite']?>&source=/<?=pasta?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-linkedin"></i>
                                       </a>

                                       <a href="http://plus.google.com/share?url=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-google-plus"></i>
                                       </a>

                                       <a href="mailto:example.com?subject=<?=$e['TituloSite']?>&body=/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>">
                                         <i class="fa fa-envelope"></i>
                                       </a>
                                    </div>
                                    <span title="" data-placement="right" data-toggle="tooltip" data-original-title="compartilhar">
                                       <i class="fa fa-share-alt"></i>
                                    </span>        
                                 </li>

                                 <li>
                                    <span class="add_fav" data-placement="right" data-toggle="tooltip" data-original-title="Favorito" data-propid="1643">
                                       <i class="fa fa-heart"></i>
                                    </span>        
                                 </li>
                              </ul>
                           </div>

                        </div>

                        <!--start detail content tabber-->
                        <div class="detail-content-tabber">
                           <!--start detail tabs-->
                           <ul class="detail-tabs">
                              <li class="active">Descrição</li>
                              <li>Endereço</li>
                              <li>Detalhes</li>
                              <li>Destaques</li>
                           </ul>
                           <!--end detail tabs-->
                           <!--start tab-content-->
                           <div class="tab-content">
                              <div class="tab-pane fade in active">
                                 <div id="description" class="property-description detail-block target-block">
                                    <div class="detail-title">
                                       <h2 class="title-left">Descrição</h2>
                                    </div>
                                    <p>
                                       <?=$e['DescricaoWeb']?>
                                    </p>
                                 </div>
                              </div>

                              <div class="tab-pane fade">
                                 <div id="address" class="detail-address detail-block target-block">
                                    <div class="detail-title">
                                       <h2 class="title-left">Endereço</h2>
                                       <div class="title-right">
                                          <a target="_blank" href="http://maps.google.com/?q=<?=$e['Bairro']?>,<?=$e['Cidade']?>-<?=$e['UF']?>,<?=$e['CEP']?> ">Abrir no Google Maps <i class="fa fa-map-marker"></i></a>
                                       </div>
                                    </div>
                                    <ul class="list-three-col">
                                       <li class="detail-city"><strong>Cidade:</strong> <?=$e['Cidade'] ?> </li>
                                       <li class="detail-state"><strong>Estado:</strong> <?=$e['UF'] ?> </li>
                                       <li class="detail-area"><strong>Bairro:</strong>  <?=$e['Bairro'] ?></li>
                                       <li class="detail-country"><strong>País:</strong> <?=$e['Pais'] ?> </li>
                                    </ul>
                                 </div>
                              </div>

                              <div class="tab-pane fade">
                                 <div id="detail" class="detail-list detail-block target-block">
                                    <div class="detail-title">
                                       <h2 class="title-left">Detalhes</h2>
                                    </div>
                                    <div class="alert alert-info">
                                       <ul class="list-two-col">
                                          <li><strong>Id do Imóvel:</strong> <?=$e['Codigo'] ?> </li>
                                          
                                          <li><strong>Preço:</strong>  
                                             <?=$e['ValorVenda'] > 0?"Venda - R$".$e['ValorVenda'] : '' ?>
                                          </li>

                                          <li>
                                            <?=$e['ValorLocacao'] > 0?"Aluguel - R$".$e['ValorLocacao']."/Por Mês" : '' ?>
                                          </li>

                                          <li><strong>Tamanho do imóvel:</strong> 
                                            <?=$e['AreaConstruida'] > 0? $e['AreaConstruida'].' m²': 'não infomado' ?>
                                          </li>

                                          <li><strong>Área do terreno:</strong> 
                                            <?=$e['AreaTerreno'] > 0?$e['AreaTerreno'].' m²': 'não infomado' ?>
                                          </li>

                                          <li><strong>Quartos:</strong> 
                                            <?=$e['Dormitorios']?>
                                          </li>
                                          

                                          <li><strong>Vagas:</strong>
                                            <?=$e['Vagas'] > 0?$e['Vagas']: 'Não informado' ?>
                                          </li>

                                          <li class="prop_type"><strong>Tipo de imóvel:</strong> 
                                            <?=$e['Categoria'] ?>
                                          </li>

                                          <li class="prop_status"><strong>Status do Imóvel:</strong> 
                                            <?=$e['Status'] ?>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="tab-pane fade">
                                 <div id="features" class="detail-features detail-block target-block">
                                    <div class="detail-title">
                                       <h2 class="title-left">Destaques</h2>
                                    </div>
                                    <ul class="list-three-col list-features">

                                    <?php foreach ($e['Caracteristicas'] as $key => $value) { 
                                          if ($value == 'Sim') {  ?>

                                             <li><a href="#"><?=$key?></a></li>

                                    <?php } } ?>

                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!--end tab-content-->
                        </div>
                        <!--end detail content tabber-->


                        <div class="property-similer">
                           <div class="detail-title">
                              <h2 class="title-left">Propriedades similares</h2>
                           </div>
                           <div class="property-listing grid-view">
                              <div class="row">
                                 <?php 

                                   foreach ($sml as $key) { 
                                     include 'build/imovelView.php'; 
                                   }
                                   
                                 ?>
                              </div>
                           </div>
                           <hr>
                        </div>

                     </div>
                  </div>



                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar ">
                     <aside id="sidebar" class="sidebar-white">
                        <div class="widget widget-contact-agent ">
                           <div class="widget-body">
                              <div class="form-small">
                                 <form method="post" action="#">
                                    <div class="media agent-media">
                                       <div class="media-left">
                                          <a href="#">
                                             <img src="<?=!empty($e['Corretor'][$e['CodigoCorretor']]['Foto'])? $e['Corretor'][$e['CodigoCorretor']]['Foto']: 'http://novoterralima.com/wp-content/themes/houzez/images/profile-avatar.png' ?>" alt="<?=$e['Corretor'][$e['CodigoCorretor']]['Nome']?>" width="75" height="75">
                                          </a>
                                       </div>

                                       <div class="media-body">
                                          <dl>
                                             <dd>
                                                <i class="fa fa-user"></i> <?=$e['Corretor'][$e['CodigoCorretor']]['Nome']?> 
                                             </dd>

                                             <!-- <dd>
                                                <a href="http://novoterralima.com/author/<?=$e['Corretor'][$e['CodigoCorretor']]['Nome']?>/" class="view">
                                                   Ver listagens
                                                </a>
                                             </dd> -->
                                          </dl>
                                       </div>
                                    </div>

                                    <input name="target_email" value="vitorkortez@gmail.com" type="hidden">
                                    <input name="agent_contact_form_ajax" value="0b00f3127d" type="hidden">
                                    <input name="property_permalink" value="/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" type="hidden">
                                    <input name="property_title" value="<?=$e['TituloSite'].'-'.$e['Codigo']?>" type="hidden">
                                    <input name="action" value="houzez_agent_send_message" type="hidden">

                                    <div class="form-group">
                                       <input class="form-control" name="name" value="" placeholder="Seu nome" type="text">
                                    </div>

                                    <div class="form-group">
                                       <input class="form-control" name="phone" value="" placeholder="Telefone" type="text">
                                    </div>

                                    <div class="form-group">
                                       <input class="form-control" name="email" value="" placeholder="E-mail" type="email">
                                    </div>

                                    <div class="form-group">
                                       <textarea class="form-control" name="message" rows="4" placeholder="Descrição">Olá, estou interessado em [ <?=$e['TituloSite'] .' - '. $e['Codigo']  ?>]</textarea>
                                    </div>

                                    <button class="agent_contact_form btn btn-secondary btn-block">Solicitar informação</button>
                                    <div class="form_messages"></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                         <?php
                            include 'build/navAside.php';
                         ?>
                     </aside>
                  </div>

               </div>
            </div>
         </section>
         <!--end detail content-->
      </div>

      <?php
         include 'build/footer.php';
      ?>
   </body>
</html>

