<!DOCTYPE html>
<html>
    <head>
         <?php
         require_once('build/head.php');
         ?>
         
    </head>
    <style type="text/css">
         i{
            color: #afafaf;
         }
         .form-control{
            border-radius: 0px;
            height: 36px;
         }

         .form-control:focus, .custom-select:hover{
            border: 1px solid #fe374d;
         }

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
         .require{
            position: absolute;
            font-size: 30px;
            top: 35%;
            right: 2%;
            color: red;
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

                     <div class="row-fluid" >
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 container-contentbar" style="margin-bottom: 50px;">
                           
                           <!-- FOMULARIO -->
                           <form action="setImovel" method="POST" class="" >
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
                                 <span class="require">*</span>
                                 <div class="custom-select" >
                                    <select name="howMet" required="required">
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
                                 <span class="require">*</span>
                                 <div class="custom-select" >
                                    <select name="Finalidade" required="required">
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
                                 <span class="require" style="right: 0.5%">*</span>
                                 <div class="custom-select">
                                    <select name="Categoria" required="required">
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
                                 <span class="require">*</span>
                                 <input type="text" class="form-control" placeholder="Dormitorios" name="Dormitorios" required="required">
                              </div>

                              <!-- Vagas -->
                              <div class="col-sm-3 pt-2">
                                 <span class="require">*</span>
                                 <input type="text" class="form-control" placeholder="Vagas" name="Vagas" required="required">
                              </div>

                               <!-- Área Construida -->
                              <div class="col-sm-3 pt-2">
                                 <span class="require">*</span>
                                 <input type="text" class="form-control" placeholder="Área Construida M²" name="AreaTotal" required="required">
                              </div>

                              <!-- Financiado? -->
                              <div class="col-sm-3 pt-2">
                                 <span class="require">*</span>
                                 <div class="custom-select">
                                    <select name="Categoria" required="required" class="required">
                                       <option value="">Financiado?</option>
                                       <option value="Sim">Sim</option>
                                       <option value="Não">Não</option>
                                    </select>
                                 </div>
                              </div>

                              <!-- Preço -->
                              <div class="col-sm-12 pt-2">
                                 <span class="require" style="right: 0.5%">*</span>
                                 <input type="text" class="form-control required" placeholder="Valor do Imóvel" name="Valor" required="required">
                              </div>
                                    
                              <div class="col-sm-12 pt-2" style="font-size: 18px;">
                                 Envie Até 10 Fotos de Seu Imóvel
                              </div>


                              <div class="col-sm-12 pt-2" id="imgs">
                                 <label for="envImg" class="btn-env" title="Envie Até 10 fotos">enviar arquivos</label>
                                 <input type="file" id="envImg" multiple="multiple" name="myfiles[]" >
                              </div>

                              <div class="col-sm-10 pt-2">
                                 <button type="button" class="btn col-md-12 btn-salva" style="color: white; font-size: 17px;">
                                    enviar imóvel
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>


                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-sidebar ">
                        <aside id="sidebar" class="sidebar-white">
                           <?php
                              include 'build/navAside.php';
                           ?>
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
      ?>
      <script type="text/javascript">

         jQuery("#envImg").change(function(){
           var names = [];
           for (var i = 0; i < jQuery(this).get(0).files.length; ++i) {
             var thisfile = jQuery(this).get(0).files[i].name;
             jQuery("#imgs").append(` <div class="loadImg">`+thisfile+`</div> `);
           }
         })

         jQuery('.required').blur(function(){
            var campo = jQuery(this);
            var btn = jQuery('.btn-salva');
            if (campo.val() == 0) {
               




            }
         });

      </script>
    </body>
</html>

