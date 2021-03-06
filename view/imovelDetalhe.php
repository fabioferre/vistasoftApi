<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title><?=$e['TituloSite']?></title>
      <meta property='og:url' content='http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>'/>
      <meta property='og:title' content='<?=$e['TituloSite']?>'/>
      <meta property='og:description' content='<?=$e['DescricaoWeb']?>'/>
       <?php
         include 'build/head.php';
      ?>
      <link rel="stylesheet" type="text/css" href="/<?=pasta?>/assets/css/mediaqueries.css">
      <link rel="stylesheet" type="text/css" href="src='https://static.matterport.com/showcase-sdk/1.2.0-0-g1d0799d/sdk.js'>">
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
                                       <a href="/<?=pasta?>/Imoveis/<?=$e['Status'] == 'Locacao'? 'locacao': 'venda'?>">
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

                              <!-- <?=!empty($e['CEP'])?','. $e['CEP'].', ': '' ?> -->

                              <?=!empty($e['Pais'])? $e['Pais']: '' ?>
                           </address>
                        </div>
                        
                        <div class="header-right">
                           <ul class="actions">
                              <li class="share-btn">
                                 <div class="share_tooltip tooltip_left fade">
                                    <a href="http://www.facebook.com/sharer.php?u=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-facebook"></i>
                                    </a>

                                    <a href="https://twitter.com/intent/tweet?text=<?=$e['TituloSite']?>&url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}">
                                      <i class="fab fa-twitter"></i>
                                    </a>

                                    <a href="http://pinterest.com/pin/create/button/?url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&amp;media=<?=$e['FotoDestaque']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-pinterest"></i>
                                    </a>

                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&title=<?=$e['TituloSite']?>&source=/<?=pasta?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a href="http://plus.google.com/share?url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                      <i class="fab fa-google-plus"></i>
                                    </a>

                                    <a href="mailto:example.com?subject=<?=$e['TituloSite']?>&body=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>">
                                      <i class="fa fa-envelope"></i>
                                    </a>
                                 </div>
                                 <span title="" data-placement="right" data-toggle="tooltip" data-original-title="compartilhar"><i class="fa fa-share-alt"></i></span>            
                              </li>
                              <!-- <li class="fvrt-btn">
                                 <span class="add_fav" data-placement="right" data-toggle="tooltip" data-original-title="Favorito" data-propid="816"><i class="fa fa-heart"></i></span>            
                              </li> -->
                             <!--  <li class="print-btn">
                                 <span data-toggle="tooltip" data-placement="right" data-original-title="Imprimir"><i id="houzez-print" class="fa fa-print" data-propid="816"></i></span>
                              </li> -->
                           </ul>
              
                            <span class="item-price">
                              <span class="price-start"><?=$e['Status']?></span>
                              <?=$e['ValorVenda'] > 0?"R$".$e['ValorVenda'] : '' ?>

                              <span class="item-sub-price">
                                <?=$e['ValorLocacao'] > 0?"R$".$e['ValorLocacao']: '' ?>
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
                                    <span class="label label-primary label-status-23">
                                       <a href="/<?=pasta?>/Imoveis/<?=$e['Status'] == 'Locacao'? 'locacao': 'venda'?>">
                                          <?=$e['Status']?>
                                       </a>
                                     </span>
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
                             <!--  <ul class="media-tabs-list">
                                 <li data-placement="bottom" data-toggle="tooltip" data-original-title="3d view">
                                    <a  data-toggle="modal" href="#myModal">
                                      <i class="far fa-eye"></i>
                                    </a>
                                 </li>
                              </ul> -->
                              <ul class="actions">
                                 <li class="share-btn">
                                    <div class="share_tooltip tooltip_left fade">
                                       <a href="http://www.facebook.com/sharer.php?u=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-facebook"></i>
                                       </a>

                                       <a href="https://twitter.com/intent/tweet?text=<?=$e['TituloSite']?>&url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}">
                                         <i class="fab fa-twitter"></i>
                                       </a>

                                       <a href="http://pinterest.com/pin/create/button/?url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&amp;media=<?=$e['FotoDestaque']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-pinterest"></i>
                                       </a>

                                       <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>&title=<?=$e['TituloSite']?>&source=/<?=pasta?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-linkedin"></i>
                                       </a>

                                       <a href="http://plus.google.com/share?url=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                         <i class="fab fa-google-plus"></i>
                                       </a>

                                       <a href="mailto:example.com?subject=<?=$e['TituloSite']?>&body=http://www.terralimaimoveis.com.br/<?=pasta?>/Imoveis/imovel/<?=$e['Codigo']?>/<?=$e['TituloSite']?>">
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
                                       <li class="detail-city"><strong>Cidade:</strong> <?=!empty($e['Cidade'])?$e['Cidade']: 'Não informado' ?> </li>
                                       <li class="detail-state"><strong>Estado:</strong> <?=!empty($e['UF'])?$e['UF']:'Não informado' ?> </li>
                                       <li class="detail-area"><strong>Bairro:</strong>  <?=!empty($e['Bairro'])?$e['Bairro']:'Não informado' ?></li>
                                       <li class="detail-country"><strong>País:</strong> <?=!empty($e['Pais'])?$e['Pais']:'Não informado' ?></li>
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
                                            <?=$e['ValorLocacao'] > 0?"Aluguel - R$".$e['ValorLocacao']: '' ?>
                                          </li>

                                          <li><strong>Tamanho do imóvel:</strong> 
                                            <?=$e['AreaConstruida'] > 0? $e['AreaConstruida'].' m²': $e['AreaPrivativa'].' m²'?>
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
                                          if ($value == 'Sim') { 
                                             $pesquisa = $key;
                                             $pesquisa = $imoveis->formatStr($pesquisa, ' ','','' );
                                    ?>

                                            <li><a href="/<?=pasta?>/Result/index?&<?=$pesquisa?>=Sim"><?=$key?></a></li>

                                    <?php } } ?>

                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!--end tab-content-->
                        </div>
                        <!--end detail content tabber-->

                        <?php if (isset($sml)) { ?>
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
                        <?php } ?>

                     </div>
                  </div>

                  

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar ">
                     <aside id="sidebar" class="sidebar-white">
                        <div class="widget widget-contact-agent ">
                           <div class="widget-body">
                              <div class="form-small">
                                 <form method="post" action="/<?=pasta?>/Imoveis/leadMail" id="contactForm"  >
                                    <div class="media agent-media">
                                       <div class="media-left">
                                          <a href="#">
                                             <img src="<?=!empty($e['Corretor'][$e['CodigoCorretor']]['Foto'])? $e['Corretor'][$e['CodigoCorretor']]['Foto']: 'http://novoterralima.com/wp-content/themes/houzez/images/profile-avatar.png' ?>" alt="<?=$e['Corretor'][$e['CodigoCorretor']]['Nome']?>" width="75" height="75">
                                          </a>
                                       </div>

                                       <div class="media-body">
                                          <dl>
                                             <dd>
                                                <i class="fa fa-user"></i> <?=isset($e['Corretor'][$e['CodigoCorretor']]['Nome'])?$e['Corretor'][$e['CodigoCorretor']]['Nome']: 'indefinido' ?> 
                                             </dd>

                                             <!-- <dd>
                                                <a href="http://novoterralima.com/author/<?=$e['Corretor'][$e['CodigoCorretor']]['Nome']?>/" class="view">
                                                   Ver listagens
                                                </a>
                                             </dd> -->
                                          </dl>
                                       </div>
                                    </div>

                                    
                                    <input name="linkPropriedade" value="http://www.terralimaimoveis.com.br/<?=pasta?>/Portfolio/imovel/<?=$e['Codigo']?>" type="hidden">
                                    <input name="titulo" value="<?=$e['TituloSite']?>" hidden>
                                    <input name="idPropriedade" value="<?=$e['Codigo']?>" hidden>
                                  

                                    <div class="form-group">
                                       <input class="form-control" name="name" placeholder="Seu nome" type="text">
                                    </div>

                                    <div class="form-group">
                                       <input class="form-control" name="phone"  placeholder="Telefone" type="text">
                                    </div>

                                    <div class="form-group">
                                       <input class="form-control" name="email"  placeholder="E-mail" type="email">
                                    </div>

                                    <div class="form-group">
                                       <textarea class="form-control" name="message" rows="4" placeholder="Descrição">Olá, estou interessado em [ <?=$e['TituloSite'] .' - '. $e['Codigo']  ?>]</textarea>
                                    </div>

                                    <button type="button" class="agent_contact_form btn btn-secondary btn-block" >Solicitar informação</button>
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



      

      <!-- Modal -->
     <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Visualização 3d </h4>
            </div>

     
            <div class="modal-body">
                <iframe src="https://my.matterport.com/showcase-beta?m=mR3ZRrLscgA&play=1" 
                frameborder="0" allowfullscreen allow="vr" id="showcase_iframe"  style="height: 450px; width: 100%;">
    
                </iframe>
            </div>

          </div>
        </div>
      </div> -->

      <?php
         include 'build/footer.php';
      ?>


   </body>
   <script type="text/javascript">

    jQuery('#view3d').click(function(){
        var iframe = jQuery('#showcase_iframe');
        iframe.addEventListener('load', showcaseLoader, true);

        function showcaseLoader() {
            try {
                showcase = window.SHOWCASE_SDK.connect(
                iframe, // Obtained earlier
                    'Terralima2015', // Your API key
                    '3.0' // SDK version you are using
                    // Use the latest version you can for your app
                ).then(loadedShowcaseHandler).catch(handleError);

                // What to do if action was successful
                function successCallback(message) { 
                    // console.log(message); 
                }

                // What to do if the action failed
                function errorCallback(err) {
                    console.error(err); 
                }
            }
            catch (e) {
                console.error(e);
            }
        }

      });
   </script>
</html>

