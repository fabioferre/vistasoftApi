

<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title><?=$e['DescricaoWeb']?></title>

       <?php
         include 'build/head.php';
      ?>

      <meta property='og:url' content='http://novoterralima.com/imovel/apartamento-reformado-e-mobiliado-tl1639/'/>
      <meta property='og:title' content='Reformado e mobiliado TL1639'/>
      <meta property='og:description' content='Descrição'/>
   </head>

   <body class="property-template-default single single-property postid-816  transparent- wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
      <?php
         include 'build/navbar.php';
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
                                 <h1><?=$e['Codigo']?> - <?=$e['DescricaoWeb']?> </h1>
                              </div>
                              <div class="table-cell hidden-sm hidden-xs">
                                 <span class="label-wrap">
                                    <span class="label-status label-status-23 label label-default">
                                       <a href="/<?=pasta?>/Portfolio/<?=$imovel[$idImovel]['Status'] == 'VENDA'? 'venda': 'locacao'?>">
                                          <?=$e['Status']?>
                                       </a>
                                    </span>                
                                 </span>
                              </div>
                           </div>
                           <address class="property-address"> 
                              <?=$e['Bairro']?>, <?=$e['BairroComercial']?> <?=$e['Cidade']?> - <?=$e['UF']?>
                           </address>
                        </div>
                        <div class="header-right">
                           <ul class="actions">
                              <li class="share-btn">
                                 <div class="share_tooltip tooltip_left fade">
                                    <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text=Reformado+e+mobiliado+TL1639&url=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F&via=Terra+Lima+Im%C3%B3veis" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}"><i class="fa fa-twitter"></i></a>
                                    <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F&amp;media=http://novoterralima.com/wp-content/uploads/2017/11/23-1024x682.jpg" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-pinterest"></i></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F&title=Reformado+e+mobiliado+TL1639&source=http%3A%2F%2Fnovoterralima.com%2F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-linkedin"></i></a>
                                    <a href="http://plus.google.com/share?url=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-google-plus"></i></a>
                                    <a href="mailto:example.com?subject=Reformado+e+mobiliado+TL1639&body=http%3A%2F%2Fnovoterralima.com%2Fimovel%2Fapartamento-reformado-e-mobiliado-tl1639%2F"><i class="fa fa-envelope"></i></a>
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
                             <?=$e['ValorVenda'] > 0?"Venda - R$".$e['ValorVenda'] : '' ?>
                           </span> 
                           <span class="item-price">
                              <?=$e['ValorLocacao'] > 0?"Aluguel - R$".$e['ValorLocacao']."/Por Mês" : '' ?>
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
                                    <span class="label label-primary label-status-23"></span>
                                 </span>

                                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 450px;">

                                   <!-- Indicadores-->
                                    <ol class="carousel-indicators">
                                     <?php $i=0; 
                                      foreach ($e['Foto'] as $key => $value ) { ?>

                                      <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$i == 1?'active':''?>"></li>

                                     <?php $i++; } ?>
                                   </ol>

                                   <!-- Slides -->
                                   <div class="carousel-inner" style="height: 450px;">
                  
                                    <?php $i=0 ;
                                      foreach ($e['Foto'] as $key => $value ) { ?>

                                     <div class="item <?=$i == 1?'active':''?>">
                                       <img src="<?=$value['Foto']?>" alt="">
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
                                          <a target="_blank" href="http://maps.google.com/?q=%20Bairro%20Bela%20Vista,%20São%20Paulo%20-%20SP">Abrir no Google Maps <i class="fa fa-map-marker"></i></a>
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
                                            <?=$e['AreaTotal'] > 0? $e['AreaTotal']: 'não infomado' ?>
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
                                       <li><a href="#">Copa Cozinha</a></li>
                                       <li><a href="#">Cozinha Integrada</a></li>
                                       <li><a href="#">Sala de Estar</a></li>
                                       <li><a href="#">Sala de Jantar</a></li>
                                       <li><a href="#">Suíte Americana</a></li>
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
                                 <div id="ID-761" class="item-wrap infobox_trigger item-localizacao-impar-no-coracao-do-jardins-tl1970">
                                    <div class="property-item table-list">
                                       <div class="table-cell">
                                          <div class="figure-block">
                                             <figure class="item-thumb">
                                                <div class="label-wrap label-right hide-on-list">
                                                   <span class="label-status label-status-23 label label-default"><a href="http://novoterralima.com/status/locacao/">Locação</a></span>                    
                                                </div>
                                                <div class="price hide-on-list"><span class="price-start">Aluguel</span><span class="item-price">R$10,000</span></div>
                                                <a class="hover-effect" href="http://novoterralima.com/imovel/apartamento-impar-localizacao/">
                                                <img width="385" height="258" src="http://novoterralima.com/wp-content/uploads/2017/11/05-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" srcset="http://novoterralima.com/wp-content/uploads/2017/11/05-385x258.jpg 385w, http://novoterralima.com/wp-content/uploads/2017/11/05-300x200.jpg 300w, http://novoterralima.com/wp-content/uploads/2017/11/05-768x512.jpg 768w, http://novoterralima.com/wp-content/uploads/2017/11/05-150x100.jpg 150w, http://novoterralima.com/wp-content/uploads/2017/11/05-720x480.jpg 720w" sizes="(max-width: 385px) 100vw, 385px" />                    </a>
                                                <ul class="actions">
                                                   <li>
                                                      <span class="add_fav" data-placement="top" data-toggle="tooltip" data-original-title="Favorito" data-propid="761"><i class="fa fa-heart-o"></i></span>
                                                   </li>

                                                   <li>
                                                      <span data-toggle="tooltip" data-placement="top" title="(11) Fotos">
                                                      <i class="fa fa-camera"></i>
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
                                                   <span class="label-status label-status-23 label label-default">
                                                      <a href="http://novoterralima.com/status/locacao/">Locação</a>
                                                   </span>                    
                                                </div>

                                                <h2 class="property-title">
                                                   <a href="http://novoterralima.com/imovel/apartamento-impar-localizacao/">
                                                      Localização ímpar no coração do Jardins TL1970
                                                   </a>
                                                </h2>

                                                <address class="property-address">Jardim Paulista, São Paulo - SP, 04002-010, Brasil</address>
                                             </div>

                                             <div class="info-row amenities hide-on-grid">
                                                <p><span>Quartos: 3</span><span>m2: 262</span></p>
                                                <p>Apartamento</p>
                                             </div>

                                             <div class="info-row date hide-on-grid"></div>
                                          </div>


                                          <div class="body-right table-cell hidden-gird-cell">
                                             <div class="info-row price"><span class="price-start">
                                                Aluguel</span><span class="item-price">R$10,000</span>
                                             </div>

                                             <div class="info-row phone text-right">
                                                <a href="http://novoterralima.com/imovel/apartamento-impar-localizacao/" class="btn btn-primary">
                                                   Detalhes <i class="fa fa-angle-right fa-right"></i>
                                                </a>
                                             </div>
                                          </div>


                                          <div class="table-list full-width hide-on-list">
                                             <div class="cell">
                                                <div class="info-row amenities">
                                                   <p><span>Quartos: 3</span><span>m2: 262</span></p>
                                                   <p>Apartamento</p>
                                                </div>
                                             </div>

                                             <div class="cell">
                                                <div class="phone">
                                                   <a href="http://novoterralima.com/imovel/apartamento-impar-localizacao/" class="btn btn-primary"> 
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
                                       <div class="media-left"><a href="http://novoterralima.com/author/ana-claudia/"><img src="http://novoterralima.com/wp-content/themes/houzez/images/profile-avatar.png" alt="Ana Claudia" width="75" height="75"></a></div>
                                       <div class="media-body">
                                          <dl>
                                             <dd><i class="fa fa-user"></i> Ana Claudia</dd>
                                             <dd><a href="http://novoterralima.com/author/ana-claudia/" class="view">Ver listagens</a></dd>
                                          </dl>
                                       </div>
                                    </div>
                                    <input type="hidden" name="target_email" value="ana&#99;&#108;&#97;udi&#97;&#64;te&#114;r&#97;lim&#97;&#105;mov&#101;is&#46;&#99;&#111;&#109;.b&#114;">
                                    <input type="hidden" name="agent_contact_form_ajax" value="bfa4cd7f70"/>
                                    <input type="hidden" name="property_permalink" value="http://novoterralima.com/imovel/apartamento-reformado-e-mobiliado-tl1639/"/>
                                    <input type="hidden" name="property_title" value="Reformado e mobiliado TL1639"/>
                                    <input type="hidden" name="action" value="houzez_agent_send_message">
                                    <div class="form-group">
                                       <input class="form-control" name="name" value="" type="text"
                                          placeholder="Seu nome">
                                    </div>
                                    <div class="form-group">
                                       <input class="form-control" name="phone" value="" type="text"
                                          placeholder="Telefone">
                                    </div>
                                    <div class="form-group">
                                       <input class="form-control" name="email" value="" type="email"
                                          placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                       <textarea class="form-control" name="message" rows="4" placeholder="Descrição">Olá, estou interessado em [Reformado e mobiliado TL1639]</textarea>
                                    </div>
                                    <button class="agent_contact_form btn btn-secondary btn-block">Solicitar informação</button>
                                    <div class="form_messages"></div>
                                 </form>
                              </div>
                           </div>
                        </div>

                        <?php
                           include 'build/formBusca.php';
                        ?>

                     
                        <div id="houzez_contact-4" class="widget widget-contact">
                           <div class="widget-top">
                              <h3 class="widget-title">Fale Conosco</h3>
                           </div>
                           <div class="widget-body">
                              <div class="contact_text">Conquistar a satisfação dos nossos clientes através de um imóvel residencial, de temporada, de propriedade rural, comercial ou simplesmente como investimento, seja no Brasil ou no exterior.
                                 <br>
                              </div>
                              <ul class="list-unstyled">
                                 <li><i class="fa fa-location-arrow"></i> Av. Brg. Faria Lima, 1982, 12° Andar</li>
                                 <li><i class="fa fa-phone"></i> +55 11 3628-4111</li>
                                 <li><i class="fa fa-envelope-o"></i> <a href="mailto:contato@terralimaimoveis.com.br">contato@terralimaimoveis.com.br</a></li>
                              </ul>
                           </div>
                        </div>


                     </aside>
                  </div>
               </div>
            </div>
         </section>
         <!--end detail content-->
      </div>

      <?php
         include 'build/footer.php';
         require 'build/requisicoes.php';
      ?>
   </body>
</html>

