
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

                  <div class="col-sm-12 col-xs-12 agent_name_search_field">
                     <div class="form-group">
                        <input class="form-control" value="" name="Codigo" placeholder="Digite o id do imovel" type="text">
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="Pais" class="selectpicker bs-select-hidden" >
                           <option value="">
                              Todos os Países
                           </option>

                           <option value="Brasil">
                              Brasil
                           </option>

                           <option value="Portugal">
                              Portugal
                           </option>

                           <option value="Estados Unidos">
                              Estados Unidos
                           </option>
                        </select>
                     </div>
                  </div>
                  

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="Cidade" class="selectpicker bs-select-hidden" >
                           <option value="">
                              Todos as Cidades
                           </option>
                           <option value="Amparo">Amparo</option>
                           <option value="Avare">Avaré</option>
                           <option value="Braganca Paulista">Bragança Paulista</option>
                           <option value="Campos Do Jordao">Campos Do Jordão</option>
                           <option value="Cotia">Cotia</option>
                           <option value="Guaruja">Guarujá</option>
                           <option value="Indaiatuba">Indaiatuba</option>
                           <option value="Itacare">Itacaré</option>
                           <option value="Lisboa">Lisboa</option>
                           <option value="Porto Feliz">Porto Feliz</option>
                           <option value="Rio De Janeiro">Rio De Janeiro</option>
                           <option value="Sao Paulo">São Paulo</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select class="selectpicker bs-select-hidden" name="Bairro" data-live-search="false">
                           <option value="">Todos os bairros</option>
                           <option value="Alto De Pinheiros">Alto De Pinheiros</option>
                           <option value="Balneario Praia Do Pereque">Balneario Praia Do Perequê</option>
                           <option value="Bela Vista">Bela Vista</option>
                           <option value="Boaçava">Boacava</option>
                           <option value="Brooklin Paulista">Brooklin Paulista</option>
                           <option value="Butanta">Butantã</option>
                           <option value="Centro">Centro</option>
                           <option value="Centro (Caucaia Do Alto)">Centro (Caucaia Do Alto)</option>
                           <option value="Cerqueira Cesar">Cerqueira César</option>
                           <option value="Chacara Flora">Chácara Flora</option>
                           <option value="Chacara Itaim">Chácara Itaim</option>
                           <option value="Cidade Jardim">Cidade Jardim</option>
                           <option value="Cidade Moncoes">Cidade Monções</option>
                           <option value="Consolacao">Consolação</option>
                           <option value="Fazenda Boa Vista">Fazenda Boa Vista</option>
                           <option value="Helvetia Polo Country">Helvétia Polo Country</option>
                           <option value="Higienopolis">Higienópolis</option>
                           <option value="Indianopolis">Indianópolis</option>
                           <option value="Ipanema">Ipanema</option>
                           <option value="Itacare">Itacaré</option>
                           <option value="Itaim Bibi">Itaim Bibi</option>
                           <option value="Jardim America">Jardim América</option>
                           <option value="Jardim Europa">Jardim Europa</option>
                           <option value="Jardim Everest">Jardim Everest</option>
                           <option value="Jardim Guedala">Jardim Guedala</option>
                           <option value="Jardim Londrina">Jardim Londrina</option>
                           <option value="Jardim Miraflores">Jardim Miraflores</option>
                           <option value="Jardim Morumbi">Jardim Morumbi</option>
                           <option value="Jardim Panorama">Jardim Panorama</option>
                           <option value="Jardim Paulista">Jardim Paulista</option>
                           <option value="Jardim Paulistano">Jardim Paulistano</option>
                           <option value="Jardim Silvia (Zona Oeste)">Jardim Sílvia (Zona Oeste)</option>
                           <option value="Jardim Universidade Pinheiros">Jardim Universidade Pinheiros</option>
                           <option value="Leblon">Leblon</option>
                           <option value="Loteamento Joao Batista Juliao">Loteamento João Batista Julião</option>
                           <option value="Moema">Moema</option>
                           <option value="Morro Dos Ingleses">Morro Dos Ingleses</option>
                           <option value="Morumbi">Morumbi</option>
                           <option value="Paineiras Do Morumbi">Paineiras Do Morumbi</option>
                           <option value="Paraiso">Paraíso</option>
                           <option value="Parque Anchieta">Parque Anchieta</option>
                           <option value="Parque Colonial">Parque Colonial</option>
                           <option value="Parque Sao Jorge">Parque São Jorge</option>
                           <option value="Perdizes">Perdizes</option>
                           <option value="Pinheiros">Pinheiros</option>
                           <option value="Praia De Taguaiba">Praia De Taguaiba</option>
                           <option value="Quinta Da Baroneza">Quinta Da Baroneza</option>
                           <option value="Real Parque">Real Parque</option>
                           <option value="Retiro Morumbi">Retiro Morumbi</option>
                           <option value="Santa Cecilia">Santa Cecília</option>
                           <option value="Sumare">Sumaré</option>
                           <option value="Vila Clementino">Vila Clementino</option>
                           <option value="Vila Inah">Vila Inah</option>
                           <option value="Vila Madalena">Vila Madalena</option>
                           <option value="Vila Mariana">Vila Mariana</option>
                           <option value="Vila Mascote">Vila Mascote</option>
                           <option value="Vila Morumbi">Vila Morumbi</option>
                           <option value="Vila Nova Conceicao">Vila Nova Conceicao</option>
                           <option value="Vila Olimpia">Vila Olímpia</option>
                           <option value="Vila Progredior">Vila Progredior</option>
                           <option value="Vila Tramontano">Vila Tramontano</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="Categoria" class="selectpicker bs-select-hidden" >
                           <option value=""  >
                              Tipos de imóveis
                           </option>

                           <option value="apartamento" >
                              Apartamento
                           </option>

                           <option value="Casa">
                              Casa
                           </option>

                           <option value="casa de praia">
                              Casa na Praia
                           </option>

                           <option value="Casa no campo">
                              Casa no Campo
                           </option>

                           <option value="Cobertura"> 
                              Cobertura
                           </option>

                           <option value="salas e Conjunto" >
                              Salas e Conjunto
                           </option>

                           <option value="duplex">
                              Duplex
                           </option>

                           <option value="Fazenda">
                              Fazenda
                           </option>

                           <option value="loft">
                              Loft
                           </option>

                           <option value="terreno">
                              Terreno
                           </option>

                           <option value="triplex">
                               Triplex
                           </option>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select name="Finalidade" class="selectpicker bs-select-hidden" >
                           <option value="">
                              Finalidade de imóvel
                           </option>
                           <option value="COMERCIAL">Comercial</option>
                           <option value="RESIDENCIAL">Residencial</option>
                           <option value="MISTO">Misto</option>
                           <option value="INVESTIMENTO">Investimento</option>
                           <option value="PERMUTA">Permuta</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-12 col-xs-12">
                     <div class="form-group">
                        <select class="selectpicker bs-select-hidden" id="widget_status" name="Status" >
                           <option value="">
                                 Status Do imóvel
                           </option>

                           <option value="destaque">
                                 Destaques
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
                     <div class="clearfix"></div><label class="checkbox-inline"><input name="Aberturas" id="Aberturas" value="Sim" type="checkbox">Aberturas</label><label class="checkbox-inline"><input name="Adega" id="Adega" value="Sim" type="checkbox">Adega</label><label class="checkbox-inline"><input name="ArCentral" id="feature-ar-central" value="Sim" type="checkbox">Ar Central</label><label class="checkbox-inline"><input name="AquecimentoCentral" id="feature-ar-condicionado" value="Sim" type="checkbox">Aquecimento central</label><label class="checkbox-inline"><input name="AreaServico" id="feature-area-de-servico" value="Sim" type="checkbox">Área de Serviço</label><label class="checkbox-inline"><input name="BanheiroAuxiliar" id="feature-banheiro-senhor" value="Sim" type="checkbox">Banheiro Auxiliar</label><label class="checkbox-inline"><input name="BanheiroSocial" id="feature-banheiro-senhora" value="Sim" type="checkbox">Banheiro Sócial</label><label class="checkbox-inline"><input name="Bicicletario" id="feature-biblioteca" value="Sim" type="checkbox">Bicicletario</label><label class="checkbox-inline"><input name="Closet" id="feature-Closet" value="Sim" type="checkbox">Closet</label><label class="checkbox-inline"><input name="Churrasqueira" id="feature-churrasqueira" value="Sim" type="checkbox">Churrasqueira</label><label class="checkbox-inline"><input name="ChurrasqueiraCondominio" id="feature-ChurrasqueiraCondominio" value="Sim" type="checkbox">Churrasqueira C.</label><label class="checkbox-inline"><input name="CircuitoFechadoTV" id="feature-circuito-de-tv" value="Sim" type="checkbox">Circuito de TV</label><label class="checkbox-inline"><input name="CozinhaAmericana" id="feature-CozinhaAmericana" value="Sim" type="checkbox">Cozinha Americana</label><label class="checkbox-inline"><input name="CopaCozinha" id="feature-copa-cozinha" value="Sim" type="checkbox">Copa Cozinha</label><label class="checkbox-inline"><input name="CozinhaMontada" id="feature-CozinhaMontada" value="Sim" type="checkbox">Cozinha Montada</label><label class="checkbox-inline"><input name="CozinhaPlanejada" id="feature-cozinha-planejada" value="Sim" type="checkbox">Cozinha Planejada</label><label class="checkbox-inline"><input name="Despensa" id="feature-dependencia-de-empregados" value="Sim" type="checkbox">Dep. Empregados</label><label class="checkbox-inline"><input name="Deposito" id="feature-deposito" value="Sim" type="checkbox">Depósito</label><label class="checkbox-inline"><input name="Despensa" id="feature-despensa" value="Sim" type="checkbox">Despensa</label><label class="checkbox-inline"><input name="Edicula" id="feature-edicula" value="Sim" type="checkbox">Edícula</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-escritorio" value="Sim" type="checkbox">Escritório</label> --><label class="checkbox-inline"><input name="EspacoGourmet" id="feature-espaco-gourmet" value="Sim" type="checkbox">Espaço Gourmet</label><label class="checkbox-inline"><input name="GasCentral" id="feature-gas-central" value="Sim" type="checkbox">Gás Central</label><label class="checkbox-inline"><input name="HomeTheater" id="feature-home-theater" value="Sim" type="checkbox">Home Theater</label><label class="checkbox-inline"><input name="Interfone" id="feature-interfone" value="Sim" type="checkbox">Interfone</label><label class="checkbox-inline"><input name="Jardim" id="feature-jardim" value="Sim" type="checkbox">Jardim</label><label class="checkbox-inline"><input name="JardimInverno" id="feature-jardim-de-inverno" value="Sim" type="checkbox">Jardim de Inverno</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-jardim-miraflores" value="Sim" type="checkbox">Jardim Miraflores</label> --><label class="checkbox-inline"><input name="Lareira" id="feature-lareira" value="Sim" type="checkbox">Lareira</label><label class="checkbox-inline"><input name="Lavabo" id="feature-lavabo" value="Sim" type="checkbox">Lavabo</label><label class="checkbox-inline"><input name="Living" id="feature-living" value="Sim" type="checkbox">Living</label><label class="checkbox-inline"><input name="Piscina" id="feature-piscina" value="Sim" type="checkbox">Piscina</label><label class="checkbox-inline"><input name="PiscinaAquecida" id="feature-PiscinaAquecida" value="Sim" type="checkbox">Piscina Aquecida</label><label class="checkbox-inline"><input name="Playground" id="feature-playground" value="Sim" type="checkbox">Playground</label><label class="checkbox-inline"><input name="Portaria" id="feature-Portaria" value="Sim" type="checkbox">Portaria</label><label class="checkbox-inline"><input name="Portaria24Hrs" id="feature-portaria-24h" value="Sim" type="checkbox">Portaria 24H</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-prataria-e-loucaria" value="Sim" type="checkbox">Prataria e Louçaria</label> --><label class="checkbox-inline"><input name="Quadra" id="feature-Quadra" value="Sim" type="checkbox">Quadra</label><label class="checkbox-inline"><input name="QuadraPoliEsportiva" id="feature-quadra-poliesportiva" value="Sim" type="checkbox">Q. Poliesportiva</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-quarto-de-motorista" value="Sim" type="checkbox">Qto. Motorista</label> --><label class="checkbox-inline"><input name="QuadraTenis" id="feature-quadra-de-tenis" value="Sim" type="checkbox">Quadra de Tênis</label><label class="checkbox-inline"><input name="Sala" id="feature-sala-de-estar" value="Sim" type="checkbox">Sala de Estar</label><label class="checkbox-inline"><input name="SalaJantar" id="feature-sala-de-jantar" value="Sim" type="checkbox">Sala de Jantar</label><label class="checkbox-inline"><input name="SalaFitness" id="feature-sala-fitness" value="Sim" type="checkbox">Sala Fitness</label><label class="checkbox-inline"><input name="SalaoBrinquedo" id="feature-sala-de-jogos" value="Sim" type="checkbox">Salão de brinquedos</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-sala-intima" value="Sim" type="checkbox">Sala Íntima</label> --><label class="checkbox-inline"><input name="SalaoFestas" id="feature-salao-de-festas" value="Sim" type="checkbox">Salão de Festas</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-salao-de-festas-2" value="Sim" type="checkbox">Salão de Festas</label> --><label class="checkbox-inline"><input name="Sauna" id="feature-sauna" value="Sim" type="checkbox">Sauna</label><label class="checkbox-inline"><input name="SegurancaPatrimonial" id="feature-seguranca" value="Sim" type="checkbox">Segurança</label><label class="checkbox-inline"><input name="SuiteMaster" id="feature-suite-americana" value="Sim" type="checkbox">Suíte Americana</label><label class="checkbox-inline"><input name="Terraco" id="feature-terraco" value="Sim" type="checkbox">Terraço</label><label class="checkbox-inline"><input name="Varanda" id="feature-varanda" value="Sim" type="checkbox">Varanda</label><!-- <label class="checkbox-inline"><input name="feature[" id="feature-vestiario" value="Sim" type="checkbox">Vestiário</label> --><label class="checkbox-inline"><input name="WCEmpregada" id="feature-empregada" value="Sim" type="checkbox">WC Empregada</label> <label class="checkbox-inline"><input name="Zelador" id="feature-zelador" value="Sim" type="checkbox">Zelador</label> 
                  </div>
               </div>
            </div>
            
            <div class="range-block rang-form-block">
               <div class="row">
                  <div class="col-sm-12 col-xs-12">
                     <button type="submit" class="btn btn-secondary btn-block" >
                        <i class="fa fa-search fa-left" style="color:#ffffff"></i> Pesquisa
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>



<!-- 

<div id="houzez_agent_search-6" class="widget widget_houzez_agent_search">
   
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
            $key['ValorVenda'] = $imoveisdes->formataValor($key['ValorVenda'], 1000);
            $key['ValorLocacao'] = $imoveisdes->formataValor($key['ValorLocacao'], 100);
      ?>

         <div class="figure-block">
            <figure class="item-thumb">
               <span class="label-featured label label-success">Destaque</span>
               <div class="label-wrap label-right">
                  <span class="label-status label-status-180 label label-default">
                     <a href="/<?=pasta?>/Imoveis/<?=$key['Status'] == 'venda'?'venda': 'locacao'?>"><?=$key['Status']?></a>
                  </span>
               </div>
               <a href="/<?=pasta?>/Imoveis/imovel/<?=$key['Codigo']?>/<?=$key['TituloSite']?>" class="hover-effect">
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
                        <span title="" data-placement="top" data-toggle="tooltip" data-original-title="<?=$imoveisdes->countPhoto($key['Codigo']);?>">
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
<!-- 

<div id="houzez_propert" class="widget widget-categories">
   <div class="widget-top">
      <h3 class="widget-title">Busca Rápida</h3>
   </div>
   <div class="widget-body">
      <ul class="children">
         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Apartamento">
            Apartamento
            
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Casa">
               Casa
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Casa de Praia">
               Casa na Praia
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Casa no Campo">
               Casa no Campo
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Cobertura">
               Cobertura
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Conjunto">
               Conjunto
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Duplex">
               Duplex
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Fazenda">
               Fazenda
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Loft">
               Loft
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Terreno">
               Terreno
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Terreno na Praia">
               Terreno na Praia
            </a> <span class="cat-count">(0)</span>
         </li>

         <li>
            <a href="/<?=pasta?>/Result/index?&Categoria=Triplex">
               Triplex
            </a> <span class="cat-count">(0)</span>
         </li>
      </ul>
   </div>
</div>
 -->

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

