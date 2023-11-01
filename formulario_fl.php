<!DOCTYPE html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="assets/css/components.css" />
        <script src="https://kit.fontawesome.com/24a4701a66.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       
        <style>
            a {
                /* Mobile/Heading/X-Small */

                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 16px;
                line-height: 133%;
                /* or 21px */

                display: flex;
                align-items: center;

                /* Viva!/Primary/Primary Dark */

                color: #2253CA;
            }

            .btn-circle.btn-xl {
                width: 40px;
                height: 40px;
                padding: 5px 8px;
                border-radius: 60px;
                font-size: 15px;
                text-align: center;
                border: 1px solid #D1D1D1;
            }
            .conteudo {
                background-image: url('assets/img/fundo.png'); 
                height: 100vh; 
                background-repeat: no-repeat; 
                background-size: cover; 
                background-color:#EEEEEE;

            }

            .form-check {
                border-radius: 20px;
                border: 1px solid #D1D1D1;
                padding: 10px 10px 10px 40px;
                margin: 10px;
                
            }

            .text-justify {
                text-align: justify;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="text-center">
            <img src="assets/img/ahoraeagora.jpg" class="img-fluid" alt="..." width="100%">
        </div>
        <div class="container px-5 pt-3" id="container"> 
        <div class="pt-3 text-justify" id="introducao">    
                <p class="fw-light">Essa é uma iniciativa da Secretaria Municipal de Saúde de Florianópolis, em parceria com o Projeto A Hora é Agora da Escola Nacional de Saúde Pública Sérgio Arouca (Ensp)/Fiocruz e os Centros de Controle e Prevenção de Doenças dos Estados Unidos da América (CDC), com recursos do Plano de Emergência do Presidente dos EUA para Alívio da Aids (PEPFAR) - https://www.ahoraeagora.org/</p>
                <p class="fw-light">Antes de iniciar o preenchimento, algumas regras gerais:</p>
                <p class="fw-light">- Você precisa ter um formulário de prescrição de antirretrovirais ("receita médica") válido e adequadamente preenchido e assinado.</p>
                <p class="fw-light">- Você precisa ter um documento oficial com foto.</p>
                <p class="fw-light">- Você poderá escolher o endereço da sua casa ou outro que for mais conveniente para você (ex. trabalho, casa de um amigo/a, parente, etc.) em Florianópolis.</p>
                <p class="fw-light">- Você deve ser morador de Florianópolis e estar cadastrado/a em alguma das Unidades Dispensadoras de Medicamentos (UDM) do município (Policlínica Centro, Policlínica Norte, Policlínica Sul, Policlínica Continente ou Centro de Saúde Saco Grande).</p>

                <p class="fw-light">Caso prefira retirar diretamente na farmácia (UDM), procure a farmácia conforme você já está acostumado.</p>
                <p class="fw-light">O seu tratamento é muito importante para nós.</p>
            </div>
            <form class="row" id="cadastro">
                <input type="hidden" id="id_cidade" name="id_cidade" value="3"/> 
                <input type="hidden" id="id_cadastro" name="id_cadastro" value=""/> 
                <div id="parte1">
                    <div class="mb-3">
                        <label for="ds_email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="ds_email" name="ds_email" placeholder="Digite seu email">
                    </div>
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte1">Continuar</button>
                    </div>
                </div>

                <div class="pt-3" id="parte2" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <div class="mb-3">
                        <label for="st_morador" class="form-label">Você é morador de Florianópolis?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_morador" id="st_morador_s" value="S">
                            <label class="form-check-label" for="st_morador_s">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_morador" id="st_morador_n" value="N">
                            <label class="form-check-label" for="st_morador_n">
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="pt-3" id="parte3" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Dias de tratamento (saldo de medicamentos)</p>
                    <p class="fw-light">Saber quantos dias de tratamento você ainda tem em mãos nos ajudará a priorizar seu pedido. Por favor informe verdadeiramente sua necessidade. O SUS é um sistema de saúde solidário. Amanhã pode ser você a pessoa que mais precisa de auxílio.</p>
                    <div class="mb-3">
                        <label for="st_dias" class="form-label">Para quantos dias de tratamento você tem medicamentos antirretrovirais?</label>
                        <select class="form-select form-control-lg" name="st_dias" id="st_dias">
                            <option value="0">Não tenho medicamentos</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="14_30">Entre 14 e 30</option>
                            <option value="30">Mais de 30 dias</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte3">Continuar</button>
                    </div>
                </div>

                <div class="pt-3" id="parte4" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <div class="mb-3">
                        <p class="h1">Não tenho mais medicamentos antirretrovirais (sem tratamento contra o HIV)</p>
                        <p class="fw-light">Precisamos saber porque você está sem medicamentos, assim podemos ajudá-lo/a da melhor forma como consegui-los.</p>
                        <label for="exampleFormControlInput1" class="form-label">Você está iniciando (pela primeira vez) o tratamento?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_iniciando" id="st_iniciando_s" value="S">
                            <label class="form-check-label" for="st_iniciando_s">
                                Sim
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="st_iniciando" id="st_iniciando_s" value="N">
                            <label class="form-check-label" for="st_iniciando_n">
                                Não
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte4">Continuar</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte5" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1 pt-3">Primeira vez que estou iniciando o tratamento contra o HIV</p>
                    <p class="fw-light">Infelizmente, no momento, a entrega pelos Correios/Transportadora somente está disponível para as pessoas que já possuem cadastro em alguma Unidade Dispensadora de Medicamentos (UDM) do município de Florianópolis.
                    Esse cadastro presencial é importante para garantirmos a  veracidade dos seus dados, qualidade, segurança e sigilo do seu cuidado.</p>

                    <p class="fw-light">Você poderá fazer o cadastro e retirar pela primeira vez seus medicamentos nas seguintes UDMs (farmácias), dando preferência para a mais próxima da sua casa.</p>
                    <p class="fw-light">* Lembre-se de levar um documento oficial com foto.</p>
                    <p class="fw-light">* Na próxima vez, você poderá solicitar a entrega pelos Correios/Transportadora por esse formulário digital!</p>
                    <p></p>
                    <p class="fw-light">- UDM Centro (Policlínica Centro)
                    <br/>Endereço: Av. Rio Branco, 90 - Centro, Florianópolis - SC, 88010-400
                    <br/>Telefone: (48) 3952.0103
                    <br/>WhatsApp: (48) 99166.3952
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>
                    <p></p>
                    <p class="fw-light">- UDM Continente (Policlínica Continente)
                    <br/>Endereço: R. Dr. Heitor Blum, 521 - Estreito, Florianópolis - SC, 88075-110
                    <br/>Telefone: (48) 3271.1716
                    <br/>WhatsApp: (48) 98428.3307
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>
                    <p></p>
                    <p class="fw-light">- UDM Sul (Policlínica Sul)
                    <br/>Endereço: Rodovia Sc - 405, 682 - 2ª andar - Rio Tavares, Florianópolis - SC, 88063-700. Próximo ao TIRIO
                    <br/>Telefone: (48) 3239.1717
                    <br/>WhatsApp: (48) 3239.1717
                    <br/>Horário de funcionamento: 8h às 17h de segunda a sexta-feira</p>
                    <p></p>
                    <p class="fw-light">- UDM Norte (Policlínica Norte)
                    <br/>Endereço: R. Francisco Fausto Martins, 0 - Vargem Grande, Florianópolis - SC, 88010-102. Próximo ao TICAN
                    <br/>Telefone: (48) 3284.2124
                    <br/>WhatsApp: (48) 3284.2124
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>
                    <p></p>
                    <p class="fw-light">- UDM Saco Grande (Centro de Saúde Saco Grande)
                    <br/>Endereço: Rod. Virgílio Várzea, s/n - Saco Grande, Florianópolis - SC, 88032-001
                    <br/>Telefone: (48) 3238.0110 (Telefone da recepção do Centro de Saúde)
                    <br/>WhatsApp: (48) 98838.0178
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>
                   
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte5">Continuar</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte6" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1 pt-3">Não sou morador de Florianópolis</p>
                    <p class="fw-light">No momento, a entrega pelos Correios/Transportadora somente está disponível para as pessoas moradoras/residentes em Florianópolis e que possuem cadastro em alguma Unidade Dispensadora de Medicamentos (UDM) do município.</p>

                    <p class="fw-light">Procure a Secretaria Municipal de Saúde/Programa de HIV do seu município para mais informações de onde e como você pode ter acesso aos medicamentos e tratamento contra o HIV.</p>

                    <div class="mb-3">
                        <label for="ds_comentario" class="form-label">Você quer fazer algum comentário?</label>
                        <textarea id="ds_comentario" name="ds_comentario" class="form-control"></textarea>
                    </div>
                    
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte6">Enviar formulário</button>
                    </div>
                </div>

                <div class="pt-3" id="parte7" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Sou morador de Florianópolis: dados cadastrais</p>
                    <p class="fw-light">Ok, vamos lá!</p>
                    <p class="fw-light">Quais são seus dados?</p>

                    <p class="fw-light">Observação:
                    <br/>Nas próximas vezes que for solicitar seus medicamentos por esse formulário digital será necessário preencher novamente seus dados. Estamos trabalhando para desenvolver uma plataforma para que suas informações de cadastro já venham automaticamente preenchidas.</p>
                    
                        <div class="mb-3">
                            <label for="ds_nome_civil" class="form-label">Nome Civil</label>   
                            <input type="text" class="form-control" id="ds_nome_civil" name="ds_nome_civil" placeholder="Digite o nome civil">
                        </div>
    
                        <div class="mb-3">
                            <label for="ds_nome_social" class="form-label">Nome social (se tiver)</label>   
                            <input type="text" class="form-control" id="ds_nome_social" name="ds_nome_social" placeholder="Digite o nome social (se tiver)">
                        </div>
    
                        <div class="mb-3">
                            <label for="dt_nasc" class="form-label">Data de Nascimento</label>   
                            <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" placeholder="DD/MM/AAAA">
                        </div>
    
                        <div class="mb-3">
                            <label for="ds_nome_mae" class="form-label">Nome completo da mãe</label>   
                            <input type="text" class="form-control" id="ds_nome_mae" name="ds_nome_mae" placeholder="Digite o nome da mãe">
                        </div>
    
                        <div class="mb-3">
                            <label for="nu_cpf" class="form-label">Número do seu CPF</label>   
                            <input type="text" class="form-control" id="nu_cpf" name="nu_cpf" placeholder="Digite o CPF">
                        </div>
    
                        <div class="mb-3">
                            <label for="nu_telefone" class="form-label">Número do celular / Whatsapp (com DDD)</label>   
                            <input type="text" class="form-control" id="nu_telefone" name="nu_telefone" placeholder="Digite o número do telefone">
                        </div>
                    
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte7">Continuar</button>
                    </div>
                </div>

                <div class="pt-3" id="parte8" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Farmácia de antirretrovirais (Unidade Dispensadora de Medicamentos - UDM)</p>
                    <label for="id_udm" class="form-label">Em qual farmácia/UDM você está cadastrado? Se não sabe, qual foi o local onde retirou seus medicamentos antirretrovirais pela última vez?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_udm" id="id_udm1" value="157">
                        <label class="form-check-label" for="id_udm1">
                            Policlínica CENTRO - Av. Rio Branco, 90 - Centro, Florianópolis - SC, 88010-400
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_udm" id="id_udm2" value="A03">
                        <label class="form-check-label" for="id_udm2">
                            Policlínica NORTE -  R. Francisco Fausto Martins, 0 - Vargem Grande, Florianópolis - SC, 88010-102. Próximo ao TICAN
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_udm" id="id_udm3" value="934">
                        <label class="form-check-label" for="id_udm3">
                            Policlínica CONTINENTE -  R. Dr. Heitor Blum, 521 - Estreito, Florianópolis - SC, 88075-110
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_udm" id="id_udm4" value="B40">
                        <label class="form-check-label" for="id_udm4">
                            Policlínica SUL - Rodovia Sc - 405, 682 - 2ª andar - Rio Tavares, Florianópolis - SC, 88063-700. Próximo ao TIRIO
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="id_udm" id="id_udm5" value="949">
                        <label class="form-check-label" for="id_udm5">
                            Centro de Saúde SACO GRANDE - Rod. Virgílio Várzea, s/n - Saco Grande, Florianópolis - SC, 88032-001
                        </label>
                    </div>
                    
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte8">Continuar</button>
                    </div>
                </div>
                <div class="pt-3 text-justify" id="parte9" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Modalidade de entrega / retirada</p>
                    <p class="fw-light">Decida a forma pela qual deseja receber ou retirar seus antirretrovirais.</p>

                    <p class="fw-light">O tempo para a entrega pelos CORREIOS/TRANSPORTADORA é de ATÉ 7 (sete) DIAS ÚTEIS.</p>
                    <p class="fw-light">Já a retirada na FARMÁCIA (UDM) em que você está cadastrado/a é no MESMO DIA.

                    <p class="fw-light">Caso você esteja sem medicamentos ou eles irão acabar antes de 7 (sete) dias úteis, recomendamos que procure buscar presencialmente na sua farmácia (UDM). Entretanto, caso você não consiga ir até a sua farmácia (UDM) nesse prazo, solicite entrega pelos Correios/Transportadora para ficar o mínimo de dias sem tratamento.</p>

                    <p class="fw-light">Você receberá um CÓDIGO DE RASTREAMENTO assim que seu medicamento for postado para entrega (WhatsApp).</p>

                    <p class="fw-light">Observação:
                    <br/>Estamos totalmente empenhados em facilitar o acesso ao seu tratamento, porém vale ressaltar que dependemos dos Correios e serviços de entrega, podendo ocorrer eventuais imprevistos e não cumprimento dos prazos. Portanto, o quanto antes formos informados sobre a necessidade dos seus medicamentos, tanto antes a entrega poderá ser efetivada.</p>

                    <label for="st_entrega" class="form-label">De que forma você quer receber seus medicamentos?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_entrega" id="st_entrega1" value="1">
                        <label class="form-check-label" for="st_entrega1">
                            Receber pelos Correios/Transportadora (no endereço de sua escolha)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_entrega" id="st_entrega2" value="2">
                        <label class="form-check-label" for="st_entrega2">
                            Retirar na farmácia (UDM) em que você está cadastrado/a
                        </label>
                    </div>

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte9">Continuar</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte10" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Receber pelos Correios/Transportadora (no endereço de sua escolha)</p>
                    <p class="fw-light">Preencha o endereço que você quer receber os medicamentos antirretrovirais. Esse endereço será usado para ESSA ENTREGA. Você poderá escolher o mesmo ou outro numa próxima vez.</p>
                    <p class="fw-light">A entrega por Correios/Transportadora está limitada a endereços  pertencentes a Florianópolis.</p>

                    <div class="mb-3">
                        <label for="ds_rua" class="form-label">Qual a rua/servidão/avenida que você quer receber os medicamentos?</label>   
                        <input type="text" class="form-control" id="ds_rua" name="ds_rua" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="ds_numero" class="form-label">Qual o número da casa/prédio?</label>   
                        <input type="text" class="form-control" id="ds_numero" name="ds_numero" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="ds_complemento" class="form-label">Qual o complemento (apartamento e bloco)? (se necessário)</label>   
                        <input type="text" class="form-control" id="ds_complemento" name="ds_complemento" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="ds_ponto_referencia" class="form-label">Ponto de referência? (se tiver)</label>   
                        <input type="text" class="form-control" id="ds_ponto_referencia" name="ds_ponto_referencia" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="ds_bairro" class="form-label">Qual o bairro?</label>   
                        <input type="text" class="form-control" id="ds_bairro" name="ds_bairro" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="nu_cep" class="form-label">Qual o CEP?</label>   
                        <input type="text" class="form-control" id="nu_cep" name="nu_cep" placeholder="">
                    </div>

                    <label for="st_autoriza" class="form-label">Quem você autoriza receber seus medicamentos?</label>
                    <p class="fw-light">Embalagem discreta, sem identificar que são medicamentos/antiretrovirais.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_autoriza" id="st_autoriza1" value="1">
                        <label class="form-check-label" for="st_autoriza1">
                            Somente eu
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_autoriza" id="st_autoriza2" value="2">
                        <label class="form-check-label" for="st_autoriza2">
                            Eu ou terceiros (outras pessoas, portaria, recepção...)
                        </label>
                    </div>

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte10">Continuar</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte11" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Autorização para envio pelos Correios/Transportadora</p>
                    <p class="fw-light">Eu autorizo a Secretaria Municipal de Saúde de Florianópolis e a Unidade Dispensadora de Medicamentos na qual sou cadastrado, a enviar pelos Correios/Transportadora os meus medicamentos para até 4 (quatro) meses, conforme disponibilidade de estoque e validade da prescrição médica, para o endereço que escolhi.</p>
                    <p class="fw-light">Estamos totalmente empenhados em facilitar o acesso ao seu tratamento, porém vale ressaltar que dependemos dos correios e  serviços de entrega, podendo ocorrer eventuais imprevistos e não cumprimento dos prazos.</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_ciente" id="st_ciente" value="S">
                        <label class="form-check-label" for="st_ciente">
                            Ciente e de acordo
                        </label>
                    </div>
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte11">Continuar</button>
                    </div>
                </div>

                <div class="pt-3" id="parte12" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Formulário de Solicitação de Medicamentos (sua receita)</p>
                    <p class="fw-light">Informe se você tem um formulário de prescrição de antirretrovirais ("receita médica") válido e adequadamente preenchido e assinado.</p>
                    <p class="fw-light">Exemplo:</p>
                    <img src="assets/img/formulario.png" alt="" class="img-fluid">
                    <label for="st_formulario" class="form-label">Você tem o formulário válido (preenchido e assinado) para poder enviar (arquivo ou foto)?</label>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_formulario" id="st_formulario_s" value="S">
                        <label class="form-check-label" for="st_formulario_s">
                            Sim
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_formulario" id="st_formulario_sr" value="SR">
                        <label class="form-check-label" for="st_formulario_sr">
                            Sim, mas está retido na UDM.
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="st_formulario" id="st_formulario_n" value="N">
                        <label class="form-check-label" for="st_formulario_n">
                            Não
                        </label>
                    </div>

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte12">Continuar</button>
                    </div>
                </div>

                <div class="pt-3" id="parte13" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Não tenho um formulário</p>
                    <p class="fw-light">Se você não tem um formulário de solicitação de medicamentos válido (perda, interrupção de tratamento, extravio, transferência, etc), entre em contato com o WhatsApp da Entrega Virtual (67 98164-0004) que iremos lhe ajudar.</p>
                </div>

                <div class="pt-3" id="parte14" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Tenho um Formulário de Solicitação de Medicamentos, ou está retido na UDM</p>
                    <!--<p class="fw-light text-danger">Envie para o WhatsApp da Entrega Virtual (48 99177 2969) uma foto ou arquivo, após terminar o preenchimento.</p>-->
                    <p class="fw-light">A postagem para entrega dos medicamentos antirretrovirais está condicionada ao recebimento de toda documentação necessária.</p>
                    <p class="fw-light">O envio inadequado da documentação pode atrasar ou impedir que seus medicamentos sejam postados.</p>
                    <!--<p class="h3">Enviarei o Formulário de Solicitação de Medicamentos para o WhatsApp da Entrega Virtual (48 99177 2969).</p>-->
                    <p class="fw-light">O arquivo pode ser em qualquer formato de documento (Se enviar uma foto, verifique se está nítida).</p>

                    <input type="file" class="form-control" id="file_formulario" name="file_formulario" />

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte14">Enviar arquivo</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte15" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Selfie com documento oficial com foto</p>
                    <p class="fw-light">Para confirmar sua identificação, precisamos agora que você envie uma selfie segurando um documento oficial com foto (RG, CNH, passaporte, carteira de classe profissional).</p>
                    <p class="fw-light">A postagem para entrega dos medicamentos antirretrovirais está condicionada ao recebimento de toda documentação necessária.</p>
                    <p class="fw-light">O envio inadequado da documentação pode atrasar ou impedir que seus medicamentos sejam postados.</p>
                    <p class="fw-light">Exemplo de selfie com documento oficial com foto</p>
                    <img src="assets/img/selfie.jpg" alt="" class="img-fluid">
                    <p class="fw-light text-danger">Enviarei uma selfie segurando um documento oficial com foto.</p>
                    <p class="fw-light">O arquivo pode ser em qualquer formato (se enviar uma foto, verifique se está nítida).</p>
                    <input type="file" class="form-control" id="file_selfie" name="file_selfie" />
                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte15">Enviar arquivo</button>
                    </div>
                </div>

                <div class="pt-3" id="parte16" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Comentários e sugestões</p>

                    <div class="mb-3">
                        <label for="ds_comentario_final" class="form-label">Você quer fazer mais algum comentário?</label>
                        <textarea id="ds_comentario_final" name="ds_comentario_final" class="form-control"></textarea>
                    </div>

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte16">Enviar formulário</button>
                    </div>

                </div>

                <div class="pt-3" id="parte17" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Retirar na Farmácia (UDM) em que você está cadastrado/a</p>
                    <p class="fw-light">Por essa modalidade, você deve procurar a farmácia (UDM) presencialmente, da mesma forma como fez na última vez. Seguem os endereços, contatos e horário de funcionamento padrão, caso precisar.</p>


                    <p class="fw-light">- UDM Centro (Policlínica Centro)
                    <br/>Endereço: Av. Rio Branco, 90 - Centro, Florianópolis - SC, 88010-400
                    <br/>Telefone: (48) 3952.0103
                    <br/>WhatsApp: (48) 99166.3952
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>

                    <p class="fw-light">- UDM Continente (Policlínica Continente)
                    <br/>Endereço: R. Dr. Heitor Blum, 521 - Estreito, Florianópolis - SC, 88075-110
                    <br/>Telefone: (48) 3271.1716
                    <br/>WhatsApp: (48) 98428.3307
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>

                    <p class="fw-light">- UDM Sul (Policlínica Sul)
                    <br/>Endereço: Rodovia Sc - 405, 682 - 2ª andar - Rio Tavares, Florianópolis - SC, 88063-700. Próximo ao TIRIO
                    <br/>Telefone: (48) 3239.1717
                    <br/>WhatsApp: (48) 3239.1717
                    <br/>Horário de funcionamento: 8h às 17h de segunda a sexta-feira</p>

                    <p class="fw-light">- UDM Norte(Policlínica Norte)
                    <br/>Endereço: R. Francisco Fausto Martins, 0 - Vargem Grande, Florianópolis - SC, 88010-102. Próximo ao TICAN
                    <br/>Telefone: (48) 3284.2124
                    <br/>WhatsApp: (48) 3284.2124:
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>

                    <p class="fw-light">- UDM Saco Grande (Centro de Saúde Saco Grande)
                    <br/>Endereço: Rod. Virgílio Várzea, s/n - Saco Grande, Florianópolis - SC, 88032-001
                    <br/>Telefone: (48) 323.8010 (Telefone da recepção do Centro de Saúde)
                    <br/>WhatsApp: (48) 98838.0178
                    <br/>Horário de funcionamento: 7h às 19h de segunda a sexta-feira</p>
              
                    <p class="fw-light"> Leve um documento oficial com foto e seu Formulário de Solicitação de Medicamentos impresso ou digital (preenchido e assinado pelo médico).</p>

                    <div class="d-grid gap-2 py-3">
                        <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte17">Ok</button>
                    </div>
                </div>

                <div class="pt-3 text-justify" id="parte18" style="display: none;">
                    <div class="mb-3">
                        <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i>   Voltar</a>
                    </div>
                    <p class="h1">Tenho mais de 30 dias de tratamento</p>
                    <p class="fw-light">Se você tem mais de 30 dias de tratamento, solicitamos que preencha esse formulário novamente quando você tiver 30 ou menos dias de tratamento.</p>
                    <p class="fw-light">Nosso serviço ainda não tem a possibilidade de programar a entrega com mais de 30 dias de antecedência. Estamos trabalhando para mais essa melhoria.</p>
                    <p class="fw-light">Se tiver alguma questão específica que necessita de auxílio, entre em contato diretamente pelo WhatsApp da Entrega Virtual (48 99177 2969) mencionando qual sua necessidade.</p>
                </div>
            </form>
        </div>
    </body>

</html>
<script>
    $(document).ready(function() {
        $(".voltar").on("click", function() {
            let id = $(this).parent().parent().attr('id').replace(/^\D+/g, '');
            
            if(id == 6)
            {
                var novo = 2;
            }
            else if(id == 7 ||  id == 18)
            {
                var novo = 3;
            }
            else if(id == 16)
            {
                var novo = 5;
            }
            else if(id == 17)
            {
                var novo = 9;
            }
            else
            {
                var novo = id-1;
            }
           
            $("#parte"+id).hide();
            $("#parte"+novo).show();
            if(novo == 1)
            {
                $("#introducao").show();
            }
        });
        
        $("#btn-parte1").on("click", function(){
            if($("#ds_email").val() != "")
            {
                $("#parte2").show();
                $("#parte1").hide();
                $("#introducao").hide();
            }
            else
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o email',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        });

        $("input[name=st_morador]").on("change", function() {
            $("#parte2").hide();
            if(this.value == "N")
            {
                $("#parte6").show();
            }
            else {
                $("#parte3").show();
            }

        });

        $("#btn-parte3").on("click", function(){
            $("#parte3").hide();
            if($("#st_dias option:selected").val() == "0")
            {
                $("#parte4").show();
            }
            else if($("#st_dias option:selected").val() == "30")
            {
                $("#parte18").show();
            }
            else {
                $("#parte7").show();
            }
        });

        $("#btn-parte4").on("click", function(){
            
            
            if($("input[name=st_iniciando]:checked").val() == "S")
            {
                $("#parte4").hide();
                $("#parte5").show();
            }
            else if($("input[name=st_iniciando]:checked").val() == "N"){
                $("#parte4").hide();
                $("#parte7").show();
            }
            else {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });    
                $("input[name=st_iniciando]").focus();
            }
        });

        $("#btn-parte5").on("click", function(){
            $("#parte16").show();
            $("#parte5").hide();
        });

        $("#btn-parte6").on("click", function(){
            Swal.fire({
                title: 'Pronto!',
                text: 'Dados gravados com sucesso!',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        });

        $("#btn-parte7").on("click", function(){
            if(validar_cadastro())
            {
                gravar_cadastro();
            }
        });

        $("#btn-parte8").on("click", function(){
            if($("input[name=id_udm]:checked").length == 0)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });        
            }
            else
            {
                $("#parte9").show();
                $("#parte8").hide();
            }
        });

        $("#btn-parte9").on("click", function(){
            
            if($("input[name=st_entrega]:checked").val() == "1")
            {
                $("#parte9").hide();
                $("#parte10").show();
            }
            else if($("input[name=st_entrega]:checked").val() == "2")
            {
                $("#parte9").hide();
                $("#parte17").show();
            }
            else
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });    
            }
        });

        $("#btn-parte10").on("click", function(){
            if(validar_endereco())
            {
                gravar_endereco();
            }
            
        });

        $("#btn-parte11").on("click", function(){
            $("#parte12").show();
            $("#parte11").hide();
        });

        $("#btn-parte12").on("click", function(){
            

            if($("input[name=st_formulario]:checked").val() == "N")
            {
                $("#parte12").hide();
                $("#parte13").show();
            }
            else if($("input[name=st_formulario]:checked").val() == "S")
            {
                $("#parte12").hide();
                $("#parte14").show();
            }
            else if($("input[name=st_formulario]:checked").val() == "SR")
            {
                $("#parte12").hide();
                $("#parte14").show();
                $("#btn-parte14").html('Pular');

            }
            else
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });    
            }
        });

        $("#btn-parte14").on("click", function(){
            if($("input[name=st_formulario]:checked").val() == "S")
            {
                if(validar_formulario())
                {
                    gravar_formulario();
                }
            }
            else if($("input[name=st_formulario]:checked").val() == "SR")
            {
                $("#parte15").show();
                $("#parte14").hide();   
            }
            
        });

        $("#btn-parte15").on("click", function(){
            if(validar_selfie())
            {
                gravar_selfie();
            }
            
        });


        $("#btn-parte16").on("click", function(){
            if(validar_comentario())
            {
                gravar_comentario();
            }
        });

        function validar_cadastro()
        {
            if($("#ds_nome_civil").val() == "" || $("#ds_nome_civil").val().length < 5)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o nome civil corretamente',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_nome_civil").focus();
                    }
                    
                });  
                return false;  
            }

            if($("#dt_nasc").val() == "" || $("#dt_nasc").val().length < 10)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha a data de nascimento',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#dt_nasc").focus();
                    }
                });    
               
                return false;  
            }

            if($("#ds_nome_mae").val() == "" || $("#ds_nome_mae").val().length < 5)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o nome da mãe',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_nome_mae").focus(); 
                    }
                });   
                
                return false;  
            }

            if($("#nu_cpf").val() == "" || $("#nu_cpf").val().length < 11)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o CPF',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#nu_cpf").focus();   
                    }
                }); 
                
                return false;  
            }

            if($("#nu_telefone").val() == "" || $("#nu_telefone").val().length < 11)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o número do telefone com DDD',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#nu_telefone").focus();   
                    }
                }); 
                
                return false;  
            }
            
            return true;
        }

        function validar_endereco()
        {
            if($("#ds_rua").val() == "" || $("#ds_rua").val().length < 5)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o nome da rua',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_rua").focus();
                    }
                    
                });  
                return false;  
            }

            if($("#ds_numero").val() == "")
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o número',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_numero").focus();
                    }
                    
                });  
                return false;  
            }

            /*if($("#ds_complemento").val() == "")
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o complemento',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_complemento").focus();
                    }
                    
                });  
                return false;  
            }*/

            if($("#ds_bairro").val() == "")
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o bairro',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#ds_bairro").focus();
                    }
                    
                });  
                return false;  
            }

            if($("#nu_cep").val() == "" || $("#nu_cep").val().length < 5)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Preencha o nome da rua',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    didClose: () => {
                        $("#nu_cep").focus();
                    }
                    
                });  
                return false;  
            }

            if($("input[name=st_autoriza]:checked").length == 0)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });   
                
                return false;
            }
            
            return true;
        }

        function validar_formulario()
        {
            if($("input[name=file_formulario]").length == 0)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione um arquivo',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });   
                
                return false;
            }
            return true;
        }

        function validar_selfie()
        {
            if($("input[name=file_selfie]").length == 0)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione um arquivo',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });   
                
                return false;
            }
            return true;
        }

        function validar_comentario()
        {
            if($("#ds_comentario_final").val() == "" || $("#ds_comentario_final").val().length < 10)
            {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Descreva o seu comentário',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });   
                
                return false;
            }
            return true;
        }

        function gravar_formulario()
        {
            var formData = new FormData();
            formData.append('file', $('#file_formulario')[0].files[0]);
            formData.append('id_cadastro', $('#id_cadastro').val());
            $.ajax({
		        url: 'appCadastro/gravar_formulario.php'
				, data: formData
                ,processData: false  // tell jQuery not to process the data
                ,contentType: false
		        , type: 'post'
		        , success: function(html) {
                   
		        	swal.fire({
		                position: 'top-end',
		                type: 'success',
		                showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
		            }).then(function(){
                        $("#parte15").show();
                        $("#parte14").hide();
                        
                    });
                    
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });	    
        }

        function gravar_selfie()
        {
            var formData = new FormData();
            formData.append('file', $('#file_selfie')[0].files[0]);
            formData.append('id_cadastro', $('#id_cadastro').val());
            $.ajax({
		        url: 'appCadastro/gravar_selfie.php'
				, data: formData
                ,processData: false  // tell jQuery not to process the data
                ,contentType: false
		        , type: 'post'
		        , success: function(html) {
                   
		        	swal.fire({
		                position: 'top-end',
		                type: 'success',
		                showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
		            }).then(function(){
                        $("#parte16").show();
                        $("#parte15").hide();
                        
                    });
                    
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });	    
        }

        function gravar_cadastro()
        {
           
            $.ajax({
		        url: 'appCadastro/gravar_cadastro.php'
				, data: $("#cadastro").serialize()
		        , type: 'post'
		        , success: function(html) {
                    console.log(html);
                    $("#id_cadastro").val(html.data.id_cadastro);
		        	swal.fire({
		                position: 'top-end',
		                type: 'success',
		                showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
		            }).then(function(){
                        $("#parte8").show();
                        $("#parte7").hide();
                    });
                    
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });	
            return false;   
        }

        function gravar_endereco()
        {
           
            $.ajax({
		        url: 'appCadastro/gravar_endereco.php'
				, data: $("#cadastro").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'top-end',
		                type: 'success',
		                showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
		            }).then(function(){
                        $("#parte11").show();
                        $("#parte10").hide();
                    });
                    
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });	
            return false;   
        }

        function gravar_comentario()
        {
           
            $.ajax({
		        url: 'appCadastro/gravar_comentario.php'
				, data: $("#cadastro").serialize()
		        , type: 'post'
		        , success: function(html) {
		        	swal.fire({
		                position: 'center',
		                type: 'success',
		                title: html.message,
                        icon: 'success',
		                showConfirmButton: true
		            }).then(function() {
                        window.location.href="index.php";
                    });
                    
		        }
				, error: function (data) {
					swal.fire("Erro", data.responseText, "error");
				}
		    });	
            return false;   
        }
    });

</script>