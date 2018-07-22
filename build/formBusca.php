<div id="houzez_advanced_search-7" class="widget widget_houzez_advanced_search">
<div class="widget-top">
   <h3 class="widget-title">Encontre Seu Imóvel</h3>
</div>
<div class="widget-range">
   <div class="widget-body">
      <form autocomplete="off" method="post" action="#">
         <div class="range-block rang-form-block">
            <div class="row">
               <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                     <select name="country" class="selectpicker bs-select-hidden" data-live-search="false" data-live-search-style="begins">
                        <option value="">Todos os países</option>
                        <option value="BR">Brasil</option>
                        <option value="PT">Portugal</option>
                        <option value="US">Estados Unidos</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                     <select class="selectpicker bs-select-hidden" name="label" data-live-search="false">
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
               </div>
               <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                     <select name="type" class="selectpicker bs-select-hidden" data-live-search="false">
                        <option value="">Tipos de Imóveis</option>
                        <option value="apartment"> Apartamento</option>
                        <option value="casa"> Casa</option>
                        <option value="casa-na-praia"> Casa na Praia</option>
                        <option value="casa-no-campo"> Casa no Campo</option>
                        <option value="cobertura"> Cobertura</option>
                        <option value="conjunto"> Conjunto</option>
                        <option value="duplex"> Duplex</option>
                        <option value="farm"> Fazenda</option>
                        <option value="loft"> Loft</option>
                        <option value="terreno"> Terreno</option>
                        <option value="terreno-na-praia"> Terreno na Praia</option>
                        <option value="triplex"> Triplex</option>
                     </select>
                  </div>
               </div>
               <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                     <select class="selectpicker bs-select-hidden" id="widget_status" name="status" data-live-search="false">
                        <option value="">Status do Imóvel</option>
                        <option value="locacao"> Locação</option>
                        <option value="venda"> Venda</option>
                        <option value="venda-e-locacao"> Venda / Locação</option>
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
               <label class="advance-trigger"><i class="fa fa-plus-square"></i> Outras características                                </label>
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
                  <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-search fa-left"></i>Pesquisa</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
</div>