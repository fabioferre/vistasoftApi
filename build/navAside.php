
<div id="houzez_advanced_search-7" class="widget widget_houzez_advanced_search">
   <div class="widget-top">
      <h3 class="widget-title">Encontre Seu Imóvel</h3>
   </div>
   <div class="widget-range">
      <div class="widget-body">
         <form  method="post" action="/<?=pasta?>/Result/index" id="firstSearch" >
            <div class="range-block rang-form-block">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="pais" class="selectpicker bs-select-hidden" >
                           <option value="">
                              Todos os Países
                           </option>

                           <option value="Brasil" <?=$imoveis->checkSelect('Pais','Brasil')?> >
                              Brasil
                           </option>

                           <option value="Portugal" <?=$imoveis->checkSelect('Pais','Portugal')?> >
                               Portugal
                           </option>

                           <option value="Estados Unidos" <?=$imoveis->checkSelect('Pais','Estados Unidos')?> >
                              Estados Unidos
                           </option>
                        </select>
                     </div>
                  </div>
                  
   <!--                <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select class="selectpicker bs-select-hidden" name="" data-live-search="false">
                           <option value="">Destaques</option>
                           <option value="arquitetura-assinada"> Arquitetura Assinada</option>
                           <option value="baixou-o-valor"> Baixou o valor</option>
                           <option value="lancamentos"> Lançamentos</option>
                           <option value="novidades"> Novidades</option>
                           <option value="oportunidades"> Oportunidades</option>
                           <option value="premium"> Premium</option>
                           <option value="reforma-total"> Reforma Total</option>
                           <option value="retrofitados"> Retrofitados</option>
                           <option value="vista"> Vista</option>
                        </select>
                     </div>
                  </div> -->

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="categoria" class="selectpicker bs-select-hidden" >
                           <option value=""  >
                              Tipos de imóveis
                           </option>

                           <option value="Apartamento" <?=$imoveis->checkSelect('Categoria','Apartamento')?> >
                              Apartamento
                           </option>

                           <option value="Casa" <?=$imoveis->checkSelect('Categoria','Casa') ?>  >
                              Casa
                           </option>

                           <option value="Casa na praia" <?=$imoveis->checkSelect('Categoria','Casa na praia') ?> >
                              Casa na Praia
                           </option>

                           <option value="Casa no campo" <?=$imoveis->checkSelect('Categoria','Casa no campo') ?> >
                              Casa no Campo
                           </option>

                           <option value="Cobertura" <?=$imoveis->checkSelect('Categoria','Cobertura') ?> > 
                              Cobertura
                           </option>

                           <option value="Salas e Conjunto" <?=$imoveis->checkSelect('Categoria','Salas e Conjuntos') ?> >
                              Salas e Conjunto
                           </option>

                           <option value="duplex" <?=$imoveis->checkSelect('Categoria','duplex') ?> >
                              Duplex
                           </option>

                           <option value="Fazenda" <?=$imoveis->checkSelect('Categoria','Fazenda') ?> >
                              Fazenda
                           </option>

                           <option value="loft" <?=$imoveis->checkSelect('Categoria','loft') ?> >
                              Loft
                           </option>

                           <option value="terreno" <?=$imoveis->checkSelect('Categoria','terreno') ?> >
                              Terreno
                           </option>

                           <option value="triplex" <?=$imoveis->checkSelect('Categoria','triplex') ?> >
                               Triplex
                           </option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select class="selectpicker bs-select-hidden" id="widget_status" name="status" >
                           <option value="">
                                 Status Do imóvel
                           </option>

                           <option value="ALUGUEL" <?=$imoveis->checkSelect('Status','ALUGUEL')?> >
                               Locação
                           </option>

                           <option value="VENDA" <?=$imoveis->checkSelect('Status','VENDA')?> >
                               Venda
                           </option>

                           <option value="BOTH" <?=$imoveis->checkSelect('Status','VENDA E ALUGUEL')?> >
                               Venda / Locação
                           </option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>

            <div class="range-block">
               <h4>Faixa de preço:</h4>
               <div id="slider-price" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                  <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                  <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
               </div>
               <div class="clearfix range-text">
                  <input name="min-price" class="pull-left range-input text-left" id="min-price" readonly="" type="text">
                  <input name="max-price" class="pull-right range-input text-right" id="max-price" readonly="" type="text">
               </div>
            </div>

            <div class="range-block">
               <h4>Tamanho da área</h4>
               <div id="slider-size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                  <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                  <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
               </div>
               <div class="clearfix range-text">
                  <input name="min-area" class="pull-left range-input text-left" id="min-size" readonly="" type="text">
                  <input name="max-area" class="pull-right range-input text-right" id="max-size" readonly="" type="text">
               </div>
            </div>

            <div class="row">
               <div class="col-sm-12 col-xs-12">
                  <label class="advance-trigger"><i class="fa fa-plus-square"></i> Outras características </label>
               </div>
               <div class="col-sm-12 col-xs-12">
                  <div class="features-list field-expand">
                     <div class="clearfix"></div>
                     <label class="checkbox-inline"><input name="feature[]" id="feature-adega" value="adega" type="checkbox">Adega</label><label class="checkbox-inline"><input name="feature[]" id="feature-ar-condicionado" value="ar-condicionado" type="checkbox">Ar Condicionado</label><label class="checkbox-inline"><input name="feature[]" id="feature-area-de-servico" value="area-de-servico" type="checkbox">Área de Serviço</label><label class="checkbox-inline"><input name="feature[]" id="feature-banheiro-senhor" value="banheiro-senhor" type="checkbox">Banheiro Senhor</label><label class="checkbox-inline"><input name="feature[]" id="feature-banheiro-senhora" value="banheiro-senhora" type="checkbox">Banheiro Senhora</label><label class="checkbox-inline"><input name="feature[]" id="feature-biblioteca" value="biblioteca" type="checkbox">Biblioteca</label><label class="checkbox-inline"><input name="feature[]" id="feature-cerca-eletrica" value="cerca-eletrica" type="checkbox">Cerca Elétrica</label><label class="checkbox-inline"><input name="feature[]" id="feature-churrasqueira" value="churrasqueira" type="checkbox">Churrasqueira</label><label class="checkbox-inline"><input name="feature[]" id="feature-circuito-de-tv" value="circuito-de-tv" type="checkbox">Circuito de TV</label><label class="checkbox-inline"><input name="feature[]" id="feature-copa-cozinha" value="copa-cozinha" type="checkbox">Copa Cozinha</label><label class="checkbox-inline"><input name="feature[]" id="feature-cozinha-integrada" value="cozinha-integrada" type="checkbox">Cozinha Integrada</label><label class="checkbox-inline"><input name="feature[]" id="feature-cozinha-planejada" value="cozinha-planejada" type="checkbox">Cozinha Planejada</label><label class="checkbox-inline"><input name="feature[]" id="feature-dependencia-de-empregados" value="dependencia-de-empregados" type="checkbox">Dep. Empregados</label><label class="checkbox-inline"><input name="feature[]" id="feature-deposito" value="deposito" type="checkbox">Depósito</label><label class="checkbox-inline"><input name="feature[]" id="feature-despensa" value="despensa" type="checkbox">Despensa</label><label class="checkbox-inline"><input name="feature[]" id="feature-edicula" value="edicula" type="checkbox">Edícula</label><label class="checkbox-inline"><input name="feature[]" id="feature-escritorio" value="escritorio" type="checkbox">Escritório</label><label class="checkbox-inline"><input name="feature[]" id="feature-espaco-gourmet" value="espaco-gourmet" type="checkbox">Espaço Gourmet</label><label class="checkbox-inline"><input name="feature[]" id="feature-gas-central" value="gas-central" type="checkbox">Gás Central</label><label class="checkbox-inline"><input name="feature[]" id="feature-home-theater" value="home-theater" type="checkbox">Home Theater</label><label class="checkbox-inline"><input name="feature[]" id="feature-interfone" value="interfone" type="checkbox">Interfone</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim" value="jardim" type="checkbox">Jardim</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim-de-inverno" value="jardim-de-inverno" type="checkbox">Jardim de Inverno</label><label class="checkbox-inline"><input name="feature[]" id="feature-jardim-miraflores" value="jardim-miraflores" type="checkbox">Jardim Miraflores</label><label class="checkbox-inline"><input name="feature[]" id="feature-lareira" value="lareira" type="checkbox">Lareira</label><label class="checkbox-inline"><input name="feature[]" id="feature-lavabo" value="lavabo" type="checkbox">Lavabo</label><label class="checkbox-inline"><input name="feature[]" id="feature-living" value="living" type="checkbox">Living</label><label class="checkbox-inline"><input name="feature[]" id="feature-piscina" value="piscina" type="checkbox">Piscina</label><label class="checkbox-inline"><input name="feature[]" id="feature-piscinacoberta" value="piscinacoberta" type="checkbox">PiscinaCoberta</label><label class="checkbox-inline"><input name="feature[]" id="feature-playground" value="playground" type="checkbox">Playground</label><label class="checkbox-inline"><input name="feature[]" id="feature-portaria-24h" value="portaria-24h" type="checkbox">Portaria 24H</label><label class="checkbox-inline"><input name="feature[]" id="feature-prataria-e-loucaria" value="prataria-e-loucaria" type="checkbox">Prataria e Louçaria</label><label class="checkbox-inline"><input name="feature[]" id="feature-quadra-poliesportiva" value="quadra-poliesportiva" type="checkbox">Q. Poliesportiva</label><label class="checkbox-inline"><input name="feature[]" id="feature-quarto-de-motorista" value="quarto-de-motorista" type="checkbox">Qto. Motorista</label><label class="checkbox-inline"><input name="feature[]" id="feature-quadra-de-tenis" value="quadra-de-tenis" type="checkbox">Quadra de Tênis</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-estar" value="sala-de-estar" type="checkbox">Sala de Estar</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-jantar" value="sala-de-jantar" type="checkbox">Sala de Jantar</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-de-jogos" value="sala-de-jogos" type="checkbox">Sala de Jogos</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-fitness" value="sala-fitness" type="checkbox">Sala Fitness</label><label class="checkbox-inline"><input name="feature[]" id="feature-sala-intima" value="sala-intima" type="checkbox">Sala Íntima</label><label class="checkbox-inline"><input name="feature[]" id="feature-salao-de-festas" value="salao-de-festas" type="checkbox">Salão de Festas</label><label class="checkbox-inline"><input name="feature[]" id="feature-salao-de-festas-2" value="salao-de-festas-2" type="checkbox">Salão de Festas</label><label class="checkbox-inline"><input name="feature[]" id="feature-sauna" value="sauna" type="checkbox">Sauna</label><label class="checkbox-inline"><input name="feature[]" id="feature-seguranca" value="seguranca" type="checkbox">Segurança</label><label class="checkbox-inline"><input name="feature[]" id="feature-suite-americana" value="suite-americana" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="feature[]" id="feature-suite-americana-2" value="suite-americana-2" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="feature[]" id="feature-terraco" value="terraco" type="checkbox">Terraço</label><label class="checkbox-inline"><input name="feature[]" id="feature-varanda" value="varanda" type="checkbox">Varanda</label><label class="checkbox-inline"><input name="feature[]" id="feature-vestiario" value="vestiario" type="checkbox">Vestiário</label><label class="checkbox-inline"><input name="feature[]" id="feature-zelador" value="zelador" type="checkbox">Zelador</label>                                
                  </div>
               </div>
            </div>
            
            <div class="range-block rang-form-block">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <button type="submit" class="btn btn-secondary btn-block" name="busca" value="1">
                        <i class="fa fa-search fa-left" style="color:#ffffff"></i> Pesquisa
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<!--    <div id="houzez_property_taxonomies-6" class="widget widget-categories">
   <div class="widget-top">
      <h3 class="widget-title">Busca Rápida</h3>
   </div>
   <div class="widget-body">
      <ul class="children">
         <li><a href="#">Apartamento</a><span class="cat-count">(115)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/casa/">Casa</a><span class="cat-count">(93)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/casa-na-praia/">Casa na Praia</a><span class="cat-count">(4)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/casa-no-campo/">Casa no Campo</a><span class="cat-count">(4)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/cobertura/">Cobertura</a><span class="cat-count">(20)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/conjunto/">Conjunto</a><span class="cat-count">(3)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/duplex/">Duplex</a><span class="cat-count">(10)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/farm/">Fazenda</a><span class="cat-count">(2)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/loft/">Loft</a><span class="cat-count">(7)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/terreno/">Terreno</a><span class="cat-count">(2)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/terreno-na-praia/">Terreno na Praia</a><span class="cat-count">(1)</span></li>
         <li><a href="http://novoterralima.com/tipo-imovel/triplex/">Triplex</a><span class="cat-count">(1)</span></li>
      </ul>
   </div>
</div>
-->
<!-- <div id="houzez_agent_search-6" class="widget widget_houzez_agent_search">
   
   <div class="widget-top">
      <h3 class="widget-title">Nossa Equipe</h3>
   </div>

   <div class="widget-range">
      <div class="widget-body">
         <form method="get" action="http://novoterralima.com/agent/">
            <div class="range-block rang-form-block">
               <div class="row">

                  <div class="col-sm-12 col-xs-12 agent_name_search_field">
                     <div class="form-group">
                        <input class="form-control" value="" name="agent_name" placeholder="Digite o nome do corretor" type="text">
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12 agent_cat_search_field">
                     <div class="form-group">
                        <select name="category" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                           <option value="">Todas categorias <span class="fa fa-sort"></option>
                           <option value="administracao"> Administração</option>
                           <option value="associadas"> Associada</option>
                           <option value="ceo-fundadora"> CEO Fundadora</option>
                           <option value="corretores"> Corretores</option>
                           <option value="diretoria"> Diretoria</option>
                           <option value="fundadora"> Fundadora</option>
                           <option value="marketing"> Marketing</option>
                           <option value="ouvidoria"> Ouvidoria</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12 agent_city_search_field">
                     <div class="form-group">
                        <select name="city" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                           <option value="">Cidades</option>
                           <option value="sao-paulo"> São Paulo</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>

            <div class="range-block rang-form-block">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search fa-left"></i>Procurar corretor</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div> -->


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
               <a href="/<?=pasta?>/Portfolio/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="hover-effect">
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
                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="<?=$imoveis->countPhoto($key['Codigo']);?>">
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

