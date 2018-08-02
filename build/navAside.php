
<div id="houzez_advanced_search-7" class="widget widget_houzez_advanced_search">
   <div class="widget-top">
      <h3 class="widget-title">Encontre Seu Imóvel</h3>
   </div>
   <div class="widget-range">
      <div class="widget-body">
         <form  method="get" action="/<?=pasta?>/Result/index" id="firstSearch" >
            <input type="text" name="&" hidden>
            <div class="range-block rang-form-block">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="Pais" class="selectpicker bs-select-hidden" >
                           <option value="">
                              Todos os Países
                           </option>

                           <option value="Brasil-like">
                              Brasil
                           </option>

                           <option value="Portugal-like">
                               Portugal
                           </option>

                           <option value="Estados Unidos-like">
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
                        <select name="Categoria" class="selectpicker bs-select-hidden" >
                           <option value=""  >
                              Tipos de imóveis
                           </option>

                           <option value="Apartamento-like" >
                              Apartamento
                           </option>

                           <option value="Casa-like">
                              Casa
                           </option>

                           <option value="Casa na praia-like">
                              Casa na Praia
                           </option>

                           <option value="Casa no campo-like">
                              Casa no Campo
                           </option>

                           <option value="Cobertura-like"> 
                              Cobertura
                           </option>

                           <option value="Salas e Conjunto-like" >
                              Salas e Conjunto
                           </option>

                           <option value="duplex-like">
                              Duplex
                           </option>

                           <option value="Fazenda-like">
                              Fazenda
                           </option>

                           <option value="loft-like">
                              Loft
                           </option>

                           <option value="terreno-like">
                              Terreno
                           </option>

                           <option value="triplex-like">
                               Triplex
                           </option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select class="selectpicker bs-select-hidden" id="widget_status" name="Status" >
                           <option value="">
                                 Status Do imóvel
                           </option>

                           <option value="ALUGUEL" >
                               Locação
                           </option>

                           <option value="VENDA">
                               Venda
                           </option>

                           <option value="BOTH" >
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
                     <div class="clearfix"></div><label class="checkbox-inline"><input name="Aberturas" id="Aberturas" value="Sim" type="checkbox">Aberturas</label><label class="checkbox-inline"><input name="Adega" id="Adega" value="Sim" type="checkbox">Adega</label><label class="checkbox-inline"><input name="ArCentral" id="feature-ar-central" value="Sim" type="checkbox">Ar Central</label><label class="checkbox-inline"><input name="AquecimentoCentral" id="feature-ar-condicionado" value="Sim" type="checkbox">Aquecimento central</label><label class="checkbox-inline"><input name="AreaServico" id="feature-area-de-servico" value="Sim" type="checkbox">Área de Serviço</label><label class="checkbox-inline"><input name="BanheiroAuxiliar" id="feature-banheiro-senhor" value="Sim" type="checkbox">Banheiro Auxiliar</label><label class="checkbox-inline"><input name="BanheiroSocial" id="feature-banheiro-senhora" value="Sim" type="checkbox">Banheiro Sócial</label><label class="checkbox-inline"><input name="Bicicletario" id="feature-biblioteca" value="Sim" type="checkbox">Bicicletario</label><label class="checkbox-inline"><input name="Closet" id="feature-Closet" value="Sim" type="checkbox">Closet</label><label class="checkbox-inline"><input name="Churrasqueira" id="feature-churrasqueira" value="Sim" type="checkbox">Churrasqueira</label><label class="checkbox-inline"><input name="ChurrasqueiraCondominio" id="feature-ChurrasqueiraCondominio" value="Sim" type="checkbox">Churrasqueira C.</label><label class="checkbox-inline"><input name="CircuitoFechadoTV" id="feature-circuito-de-tv" value="Sim" type="checkbox">Circuito de TV</label><label class="checkbox-inline"><input name="CozinhaAmericana" id="feature-CozinhaAmericana" value="Sim" type="checkbox">Cozinha Americana</label><label class="checkbox-inline"><input name="CopaCozinha" id="feature-copa-cozinha" value="Sim" type="checkbox">Copa Cozinha</label><label class="checkbox-inline"><input name="CozinhaMontada" id="feature-CozinhaMontada" value="Sim" type="checkbox">Cozinha Montada</label><label class="checkbox-inline"><input name="CozinhaPlanejada" id="feature-cozinha-planejada" value="Sim" type="checkbox">Cozinha Planejada</label><label class="checkbox-inline"><input name="Despensa" id="feature-dependencia-de-empregados" value="Sim" type="checkbox">Dep. Empregados</label><label class="checkbox-inline"><input name="Deposito" id="feature-deposito" value="Sim" type="checkbox">Depósito</label><label class="checkbox-inline"><input name="Despensa" id="feature-despensa" value="Sim" type="checkbox">Despensa</label><label class="checkbox-inline"><input name="Edicula" id="feature-edicula" value="Sim" type="checkbox">Edícula</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-escritorio" value="Sim" type="checkbox">Escritório</label> --><label class="checkbox-inline"><input name="EspacoGourmet" id="feature-espaco-gourmet" value="Sim" type="checkbox">Espaço Gourmet</label><label class="checkbox-inline"><input name="GasCentral" id="feature-gas-central" value="Sim" type="checkbox">Gás Central</label><label class="checkbox-inline"><input name="HomeTheater" id="feature-home-theater" value="Sim" type="checkbox">Home Theater</label><label class="checkbox-inline"><input name="Interfone" id="feature-interfone" value="Sim" type="checkbox">Interfone</label><label class="checkbox-inline"><input name="Jardim" id="feature-jardim" value="Sim" type="checkbox">Jardim</label><label class="checkbox-inline"><input name="JardimInverno" id="feature-jardim-de-inverno" value="Sim" type="checkbox">Jardim de Inverno</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-jardim-miraflores" value="Sim" type="checkbox">Jardim Miraflores</label> --><label class="checkbox-inline"><input name="Lareira" id="feature-lareira" value="Sim" type="checkbox">Lareira</label><label class="checkbox-inline"><input name="Lavabo" id="feature-lavabo" value="Sim" type="checkbox">Lavabo</label><label class="checkbox-inline"><input name="Living" id="feature-living" value="Sim" type="checkbox">Living</label><label class="checkbox-inline"><input name="Piscina" id="feature-piscina" value="Sim" type="checkbox">Piscina</label><label class="checkbox-inline"><input name="PiscinaAquecida" id="feature-PiscinaAquecida" value="Sim" type="checkbox">Piscina Aquecida</label><label class="checkbox-inline"><input name="Playground" id="feature-playground" value="Sim" type="checkbox">Playground</label><label class="checkbox-inline"><input name="Portaria" id="feature-Portaria" value="Sim" type="checkbox">Portaria</label><label class="checkbox-inline"><input name="Portaria24Hrs" id="feature-portaria-24h" value="Sim" type="checkbox">Portaria 24H</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-prataria-e-loucaria" value="Sim" type="checkbox">Prataria e Louçaria</label> --><label class="checkbox-inline"><input name="Quadra" id="feature-Quadra" value="Sim" type="checkbox">Quadra</label><label class="checkbox-inline"><input name="QuadraPoliEsportiva" id="feature-quadra-poliesportiva" value="Sim" type="checkbox">Q. Poliesportiva</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-quarto-de-motorista" value="Sim" type="checkbox">Qto. Motorista</label> --><label class="checkbox-inline"><input name="QuadraTenis" id="feature-quadra-de-tenis" value="Sim" type="checkbox">Quadra de Tênis</label><label class="checkbox-inline"><input name="Sala" id="feature-sala-de-estar" value="Sim" type="checkbox">Sala de Estar</label><label class="checkbox-inline"><input name="SalaJantar" id="feature-sala-de-jantar" value="Sim" type="checkbox">Sala de Jantar</label><label class="checkbox-inline"><input name="SalaFitness" id="feature-sala-fitness" value="Sim" type="checkbox">Sala Fitness</label><label class="checkbox-inline"><input name="SalaoBrinquedo" id="feature-sala-de-jogos" value="Sim" type="checkbox">Salão de brinquedos</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-sala-intima" value="Sim" type="checkbox">Sala Íntima</label> --><label class="checkbox-inline"><input name="SalaoFestas" id="feature-salao-de-festas" value="Sim" type="checkbox">Salão de Festas</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-salao-de-festas-2" value="Sim" type="checkbox">Salão de Festas</label> --><label class="checkbox-inline"><input name="Sauna" id="feature-sauna" value="Sim" type="checkbox">Sauna</label><label class="checkbox-inline"><input name="SegurancaPatrimonial" id="feature-seguranca" value="Sim" type="checkbox">Segurança</label><label class="checkbox-inline"><input name="SuiteMaster" id="feature-suite-americana" value="Sim" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="Terraco" id="feature-terraco" value="Sim" type="checkbox">Terraço</label><label class="checkbox-inline"><input name="Varanda" id="feature-varanda" value="Sim" type="checkbox">Varanda</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-vestiario" value="Sim" type="checkbox">Vestiário</label> --><label class="checkbox-inline"><input name="WCEmpregada" id="feature-zelador" value="Sim" type="checkbox">WC Empregada</label> <label class="checkbox-inline"><input name="Zelador" id="feature-zelador" value="Sim" type="checkbox">Zelador</label> 
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

<div id="houzez_propert" class="widget widget-categories">
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
</div>
 -->

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

