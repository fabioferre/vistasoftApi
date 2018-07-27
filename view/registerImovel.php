<!DOCTYPE html>
<html>
    <head>
         <?php
         require_once('build/head.php');
         ?>
         
    </head>
    <style type="text/css">
        .breadcrumb-top .page-title-left h1 {
            font-weight: 400;
            color: #d89265;
            font-size: 24px;
            width: 135%;
        }
        .article-detail {
             background-color: #f2ecdd;
             padding: 40px;
         }
         .pt-2{
            padding-top: 20px;
         }
         .btn-default{
            height: 36px;
         }
         .form-control{
            border-radius: 0px;
            height: 36px;

          }

         .custom-select{
            height: 35px;
            overflow: hidden;
            src: url("../webfonts/fa-solid-900.eot");
            background: url(../assets/img/caret.png) no-repeat right #fff; /* novo ícone para o <select> */
            border: 1px solid #ccc;
            transition: border 0.5s;
            color: #777777;
            font-weight: 500;
         }

         .custom-select select { /* <select> */
            background: transparent; /* importante para exibir o novo ícone */
             width: 115%;
             padding: 5px;
             font-size: 16px;
             line-height: 1;
             border: 0;
             border-radius: 0;
             height: 34px;
             -webkit-appearance: none;
          }  
          
          .form-control:focus, .custom-select:hover{
            border: 1px solid #fe374d;
          }
          i{
            color: #afafaf;
          }
    </style>
    <body>
     <?php
     require_once('build/navbar.php');
     ?>
     

      <div id="section-body" class="">
         <div class="container">

            <div class="page-title breadcrumb-top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="page-title-left">
                        <h1 class="title-head">
                           Cadastre Seu Imóvel                
                        </h1>
                     </div>
                  </div>
               </div>
            </div>


            <section class="section-detail-content default-page" >
               <div class="container" >
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-contentbar" >
                        <div class="page-main">
                           <div class="article-detail">
                              <article id="post-4608" class="post-4608 page type-page status-publish hentry" >
                                 <div class="entry-content">
                                    <form class="row row-fluid" >
                                       <!-- nome completo -->
                                       <div class="col-sm-12 pt-2">
                                          <input type="text" class="form-control" placeholder="Nome completo">
                                       </div>

                                      <!-- e-mail -->
                                       <div class="col-sm-7 pt-2">
                                          <div class="input-group">
                                             <input type="text" class="form-control" placeholder="E-mail">

                                             <span class="input-group-btn">
                                               <button class="btn btn-default" type="button"><i class="fas fa-envelope"></i></button>
                                             </span>
                                          </div><!-- /input-group -->
                                       </div>

                                       <!-- telefone -->
                                       <div class="col-sm-5 pt-2" >
                                          <input type="text" class="form-control" placeholder="telefone" name="Telefone">
                                       </div>

                                       <!-- Endereço -->
                                       <div class="col-sm-12 pt-2">
                                          <input type="text" class="form-control" placeholder="Endereço" name="Endereco">
                                       </div>

                                       <!--  Bairro -->
                                       <div class="col-sm-12 pt-2" >
                                          <input type="text" class="form-control" placeholder="Bairro" name="Bairro">
                                       </div>

                                       <!-- Cidade -->
                                       <div class="col-sm-10 pt-2">
                                          <input type="text" class="form-control" placeholder="Cidade" name="Cidade">
                                       </div>

                                       <!-- UF -->
                                       <div class="col-sm-2 pt-2">
                                          <input type="text" class="form-control" placeholder="UF" name="UF">
                                       </div>

                                       <!-- como conheceu -->
                                       <div class="col-sm-7 pt-2">
                                          <div class="custom-select" >
                                             <select >
                                                <option value="">Como Conheceu  a Terra Lima Imóveis</option>
                                                <option value="google">google</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="indicação">Indicação</option>
                                                <option value="corretor">Corretor</option>
                                             </select>
                                          </div>
                                       </div>

                                       <!-- Finalidade -->
                                       <div class="col-sm-5 pt-2">
                                          <div class="custom-select" >
                                             <select name="Finalidade">
                                                <option value="">Finalidade</option>
                                                <option value="residencial">Residencial</option>
                                                <option value="comercial">Comercial</option>
                                                <option value="investimento">Investimento</option>
                                                <option value="permuta">Permuta</option>
                                             </select>
                                          </div>
                                       </div>

                                       <!-- Tipo de imovel -->
                                       <div class="col-sm-12 pt-2">
                                          <div class="custom-select">
                                             <select name="Categoria">
                                                <option value="">Tipo de imóvel</option>
                                                <option value="casa">casa</option>
                                                <option value="apartamento">apartamento</option>
                                                <option value="comercial">Comercial</option>
                                                <option value="condominio">Casa/condominio</option>
                                                <option value="Cobertura">Cobertura</option>
                                                <option value="duplex">duplex</option>
                                                <option value="triplex">triplex</option>
                                             </select>
                                          </div>
                                       </div>
                                       
                                       <!-- Dormitorios -->
                                       <div class="col-sm-3 pt-2">
                                          <input type="text" class="form-control" placeholder="Dormitorios" name="Dormitorios">
                                       </div>

                                       <!-- Vagas -->
                                       <div class="col-sm-3 pt-2">
                                          <input type="text" class="form-control" placeholder="Vagas" name="Vagas">
                                       </div>

                                        <!-- Área Construida -->
                                       <div class="col-sm-3 pt-2">
                                          <input type="text" class="form-control" placeholder="Área Construida M²" name="AreaTotal">
                                       </div>


                                       <!-- Financiado? -->
                                       <div class="col-sm-3 pt-2">
                                          <div class="custom-select">
                                             <select name="Categoria">
                                                <option value="">Financiado?</option>
                                                <option value="Sim">Sim</option>
                                                <option value="Não">Não</option>
                                             </select>
                                          </div>
                                       </div>

                                       
                                       <!-- Preço -->
                                       <div class="col-sm-12 pt-2">
                                          <input type="text" class="form-control" placeholder="Valor do Imóvel" name="Valor">
                                       </div>


                                    </form>
                                 </div>
                                 <!-- .entry-content -->
                              </article>
                              <!-- #post-## -->
                           </div>
                        </div>
                     </div>


                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-sidebar ">
                        <aside id="sidebar" class="sidebar-white">
                          <?php
                              include 'build/formBusca.php';
                              include 'build/equipe.php';
                           ?>

                           <div id="houzez_featured_properties-4" class="widget widget_houzez_featured_properties">
                              <div class="widget-top">
                                 <h3 class="widget-title">Highlights</h3>
                              </div>
                              <div class="widget-body">
                                 <div class="figure-block">
                                    <figure class="item-thumb">
                                       <span class="label-featured label label-success">Destaque</span>
                                       <div class="label-wrap label-right">
                                          <span class="label-status label-status-171 label label-default"><a href="http://novoterralima.com/status/venda-e-locacao/">Venda / Locação</a></span>                               
                                       </div>
                                       <a href="http://novoterralima.com/imovel/cobertura-duplex-tl316/" class="hover-effect">
                                       <img src="http://novoterralima.com/wp-content/uploads/2017/11/141-385x258.jpg" class="attachment-houzez-property-thumb-image size-houzez-property-thumb-image wp-post-image" alt="" width="385" height="258">                              </a>
                                       <figcaption class="thumb-caption clearfix">
                                          <div class="cap-price pull-left"><span class="price-start">Venda</span> R$35,000,000</div>
                                          <ul class="list-unstyled actions pull-right">
                                             <li>
                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="3 Fotos">
                                                <i class="fa fa-camera"></i>
                                                </span>
                                             </li>
                                          </ul>
                                       </figcaption>
                                    </figure>
                                 </div>
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
                        </aside>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <!--.container Start in header-->
      </div>


        


        
        <?php
            include'build/footer.php';
            include'build/requisicoes.php';
        ?>
    </body>
</html>

