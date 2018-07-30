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


          .btn-salva{
            background-color: #d89265; 
            font-weight: 600; 
            padding-bottom: 10px;
          }


         .btn-env {
           background: url(../assets/img/cloud.png) no-repeat left #d89265;
           color: #fff;
           cursor: pointer;
           margin: 10px 10px 10px 0;
           padding: 5px 10px 5px 50px;
           font-weight: 600; 
         }

         input[type='file'] {
           display: none
         }
         
         .btn-env:hover, .btn-salva:hover{
            background-color: #d68b5c;
         }

         @keyframes animacao-box{
            from {
               width: 0%;
               height: 0px;
               background: #fff;
            }
            to{
               width: 100%;
               height: 35px;
               background: #22c222;
            }
         }

         .loadImg{
            color: white;
            width: 100%;
            background: #22c222;
            font-size: 13px;
            border-radius: 3px; 
            padding:5px;
            margin-bottom: 5px;
            animation:animacao-box 5s;
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
                                    
                              <div class="col-sm-12 pt-2" style="font-size: 18px;">
                                 Envie Até 10 Fotos de Seu Imóvel
                              </div>


                              <div class="col-sm-12 pt-2" id="imgs">
                                 <label for="envImg" class="btn-env">enviar arquivos</label>
                                 <input type="file" id="envImg" multiple="multiple" name="myfiles[]">
                              </div>

                              <div class="col-sm-10 pt-2">
                                 <button type="submit" class="btn col-md-12 btn-salva" style="color: white; font-size: 17px;">
                                    enviar imóvel
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>


                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container-sidebar ">
                        <aside id="sidebar" class="sidebar-white">
                          <?php
                              include 'build/formBusca.php';
                              include 'build/equipe.php';
                              include 'build/destaques.php';
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
         </div>
         <!--.container Start in header-->
      </div>


         <?php
            include'build/footer.php';
            include'build/requisicoes.php';
         ?>
         <script type="text/javascript">

            jQuery("#envImg").change(function(){
              var names = [];

              for (var i = 0; i < jQuery(this).get(0).files.length; ++i) {
                var thisfile = jQuery(this).get(0).files[i].name;
                jQuery("#imgs").append(` <div class="loadImg">`+thisfile+`</div> `);

              }
            })
         </script>
    </body>
</html>

