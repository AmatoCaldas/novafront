<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
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
            background-color: #EEEEEE;

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
            <p class="fw-bold">
                O PREENCHIMENTO DESSE FORMULÁRIO DARÁ ACESSO A VOCÊ A UMA NOVA FORMA DE RECEBER SEUS MEDICAMENTOS (TARV
                e PrEP): EM SUA CASA, UNIDADE DE SAÚDE (TARV) OU OUTRO ENDEREÇO QUE DESEJAR, DE FORMA CÔMODA, SIGILOSA E
                SEGURA.
            </p>
            <p class="fw-light">
                Essa é uma iniciativa da Secretaria Municipal de Saúde de Curitiba, em parceria com o Projeto A Hora é
                Agora da Escola Nacional de Saúde Pública Sérgio Arouca (Ensp)/Fiocruz e os Centros de Controle e
                Prevenção de Doenças dos Estados Unidos da América (CDC), com recursos do Plano de Emergência do
                Presidente dos EUA (PEPFAR) - <a href="https://www.ahoraeagora.org/">https://www.ahoraeagora.org/</a>
            </p>
            <p class="fw-light">Antes de iniciar o preenchimento, algumas regras gerais:</p>
            <p class="fw-light">- Você precisa ter um formulário de prescrição de antirretrovirais ("receita médica")
                válido e adequadamente preenchido e assinado.</p>
            <p class="fw-light">- Você precisa ter um documento oficial com foto.</p>
            <p class="fw-light">- Você poderá escolher o endereço da sua casa ou outro que for mais conveniente para
                você (ex. trabalho, casa de um amigo/a, parente, etc.) em Curitiba.</p>
            <p class="fw-light">- Você deve ser morador de Curitiba e estar cadastrado/a em alguma das Unidades
                Dispensadoras de Medicamentos (UDM) do município (COA, Salgado FIlho, Vila Hauer, Centro de
                Especialidade Santa Felicidade, Tatuquara).</p>

            <p class="fw-light">Caso prefira retirar diretamente na farmácia (UDM), procure a farmácia conforme você já
                está acostumado.</p>
            <p class="fw-light">O seu tratamento é muito importante para nós.</p>
        </div>
        <form class="row" id="cadastro">
            <input type="hidden" id="id_cidade" name="id_cidade" value="2" />
            <input type="hidden" id="id_cadastro" name="id_cadastro" value="" />
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <div class="mb-3">
                    <label for="st_morador" class="form-label">Você é morador de Curitiba?</label>
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Dias de tratamento (saldo de medicamentos)</p>
                <p class="fw-light">Saber quantos dias de tratamento você ainda tem em mãos nos ajudará a priorizar seu
                    pedido. Por favor informe verdadeiramente sua necessidade. O SUS é um sistema de saúde solidário.
                    Amanhã pode ser você a pessoa que mais precisa de auxílio.</p>
                <div class="mb-3">
                    <label for="st_dias" class="form-label">Para quantos dias de tratamento você tem medicamentos
                        antirretrovirais?</label>
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <div class="mb-3">
                    <p class="h1">Não tenho mais medicamentos antirretrovirais (sem tratamento contra o HIV)</p>
                    <p class="fw-light">Precisamos saber porque você está sem medicamentos, assim podemos ajudá-lo/a da
                        melhor forma como consegui-los.</p>
                    <label for="exampleFormControlInput1" class="form-label">Você está iniciando (pela primeira vez) o
                        tratamento?</label>
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1 pt-3">Primeira vez que estou iniciando o tratamento contra o HIV</p>
                <p class="fw-light">Infelizmente, no momento, a entrega pelos Correios/Transportadora somente está
                    disponível para as pessoas que já possuem cadastro em alguma Unidade Dispensadora de Medicamentos
                    (UDM) do município de Curitiba.
                    Esse cadastro presencial é importante para garantirmos a veracidade dos seus dados, qualidade,
                    segurança e sigilo do seu cuidado.</p>

                <p class="fw-light">Você poderá fazer o cadastro e retirar pela primeira vez seus medicamentos nas
                    seguintes UDMs (farmácias), dando preferência para a mais próxima da sua casa.</p>
                <p class="fw-bold"> Lembre-se de levar um documento oficial com foto.</p>
                <p class="fw-bold"> Na próxima vez, você poderá solicitar a entrega pelos Correios/Transportadora por
                    esse formulário digital!</p>
                <p></p>
                <p class="fw-light">- Centro de Orientação e Aconselhamento (COA)
                    <br />Endereço: Rua do Rosário, 144 sexto andar - São Francisco, Curitiba - PR, 80020-110
                    <br />Telefone: (41) 3321-2781
                    <br />Horário de funcionamento: 7h às 18h de segunda a sexta-feira

                <p class="fw-light">- UDM Salgado Filho
                    <br />Endereço: Av. Sen. Salgado Filho, 5265 - Uberaba, Curitiba - PR, 80215-270
                    <br />Telefone: (41) 3217-1228
                    <br />Horário de funcionamento: 7h às 18h de segunda a sexta-feira

                <p class="fw-light">- UDM Vila Hauer
                    <br />Endereço: Rua Waldemar Kost, 650 - Hauer, Curitiba - PR, 81610-100
                    <br />Telefone: (41) 3217-1283
                    <br />Horário de funcionamento: 7h às 18h de segunda a sexta-feira

                <p class="fw-light">- Centro de Especialidades Santa Felicidade
                    <br />Endereço: Av. Ver. Toaldo Túlio, 2500 - São Braz, Curitiba - PR, 82300-332
                    <br />Telefone: (41) 3370-1572
                    <br />Horário de funcionamento: 7h às 17h de segunda a sexta-feira

                <p class="fw-light">- UDM Monteiro Lobato
                    <br />Endereço: Rua Olívio José Rossetti, 538 - Tatuquara, Curitiba - PR, 81470-270
                    <br />Telefone: (41) 3396-5381
                    <br />Horário de funcionamento: 7h às 17h de segunda a sexta-feira



                <div class="d-grid gap-2 py-3">
                    <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte5">Continuar</button>
                </div>
            </div>

            <div class="pt-3 text-justify" id="parte6" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1 pt-3">Não sou morador de Curitiba</p>
                <p class="fw-light">No momento, a entrega pelos Correios/Transportadora somente está disponível para as
                    pessoas moradoras/residentes em Curitiba e que possuem cadastro em alguma Unidade Dispensadora
                    de Medicamentos (UDM) do município.</p>

                <p class="fw-light">Procure a Secretaria Municipal de Saúde/Programa de HIV do seu município para mais
                    informações de onde e como você pode ter acesso aos medicamentos e tratamento contra o HIV.</p>

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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Sou morador de Curitiba: dados cadastrais</p>
                <p class="fw-light">Ok, vamos lá!</p>
                <p class="fw-light">Quais são seus dados?</p>

                <p class="fw-light">Observação:
                    <br />Nas próximas vezes que for solicitar seus medicamentos por esse formulário digital será
                    necessário preencher novamente seus dados. Estamos trabalhando para desenvolver uma plataforma para
                    que suas informações de cadastro já venham automaticamente preenchidas.
                </p>

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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Farmácia de antirretrovirais (Unidade Dispensadora de Medicamentos - UDM)</p>
                <label for="id_udm" class="form-label">Em qual farmácia/UDM você está cadastrado? Se não sabe, qual foi
                    o local onde retirou seus medicamentos antirretrovirais pela última vez?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_udm" id="id_udm1" value="B28">
                    <label class="form-check-label" for="id_udm1">
                        Centro de Orientação e Aconselhamento (COA) - R. do Rosário, 144 sexto andar - São Francisco,
                        Curitiba - PR, 80020-110
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_udm" id="id_udm2" value="370">
                    <label class="form-check-label" for="id_udm2">
                        UDM Salgado Filho - Av. Sen. Salgado Filho, 5265 - Uberaba, Curitiba - PR, 80215-270
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_udm" id="id_udm3" value="363">
                    <label class="form-check-label" for="id_udm3">
                        UDM Vila Hauer- Rua Waldemar Kost, 650 - Hauer, Curitiba - PR, 81610-100
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_udm" id="id_udm4" value="364">
                    <label class="form-check-label" for="id_udm4">
                        Centro de Especialidades Santa Felicidade - Av. Ver. Toaldo Túlio, 2500 - São Braz, Curitiba -
                        PR, 82300-332
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="id_udm" id="id_udm5" value="365">
                    <label class="form-check-label" for="id_udm5">
                        UDM Monteiro Lobato - Rua Olívio José Rossetti, 538 - Tatuquara, Curitiba - PR, 81470-270
                    </label>
                </div>

                <div class="d-grid gap-2 py-3">
                    <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte8">Continuar</button>
                </div>
            </div>
            <div class="pt-3 text-justify" id="parte9" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Modalidade de entrega / retirada</p>
                <p class="fw-light">Decida a forma pela qual deseja receber ou retirar seus antirretrovirais.</p>

                <p class="fw-light">O tempo para a entrega pelos CORREIOS/TRANSPORTADORA é de ATÉ 7 (sete) DIAS ÚTEIS.
                </p>
                <p class="fw-light">Já a retirada na FARMÁCIA (UDM) em que você está cadastrado/a é no MESMO DIA.

                <p class="fw-light">Caso você esteja sem medicamentos ou eles irão acabar antes de 7 (sete) dias úteis,
                    recomendamos que procure buscar presencialmente na sua farmácia (UDM). Entretanto, caso você não
                    consiga ir até a sua farmácia (UDM) nesse prazo, solicite entrega pelos Correios/Transportadora para
                    ficar o mínimo de dias sem tratamento.</p>

                <p class="fw-light">Você receberá um CÓDIGO DE RASTREAMENTO assim que seu medicamento for postado para
                    entrega (WhatsApp).</p>

                <p class="fw-light">Observação:
                    <br />Estamos totalmente empenhados em facilitar o acesso ao seu tratamento, porém vale ressaltar
                    que dependemos dos Correios e serviços de entrega, podendo ocorrer eventuais imprevistos e não
                    cumprimento dos prazos. Portanto, o quanto antes formos informados sobre a necessidade dos seus
                    medicamentos, tanto antes a entrega poderá ser efetivada.
                </p>

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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Receber pelos Correios/Transportadora (no endereço de sua escolha)</p>
                <p class="fw-light">Preencha o endereço que você quer receber os medicamentos antirretrovirais. Esse
                    endereço será usado para ESSA ENTREGA. Você poderá escolher o mesmo ou outro numa próxima vez.</p>
                <p class="fw-light">A entrega por Correios/Transportadora está limitada a endereços pertencentes a
                    Curitiba.</p>

                <div class="mb-3">
                    <label for="ds_rua" class="form-label">Qual a rua/servidão/avenida que você quer receber os
                        medicamentos?</label>
                    <input type="text" class="form-control" id="ds_rua" name="ds_rua" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="ds_numero" class="form-label">Qual o número da casa/prédio?</label>
                    <input type="text" class="form-control" id="ds_numero" name="ds_numero" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="ds_complemento" class="form-label">Qual o complemento (apartamento e bloco)? (se
                        necessário)</label>
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Autorização para envio pelos Correios/Transportadora</p>
                <p class="fw-light">Eu autorizo a Secretaria Municipal de Saúde de Curitiba e a Unidade Dispensadora
                    de Medicamentos na qual sou cadastrado, a enviar pelos Correios/Transportadora os meus medicamentos
                    para até 4 (quatro) meses, conforme disponibilidade de estoque e validade da prescrição médica, para
                    o endereço que escolhi.</p>
                <p class="fw-light">Estamos totalmente empenhados em facilitar o acesso ao seu tratamento, porém vale
                    ressaltar que dependemos dos correios e serviços de entrega, podendo ocorrer eventuais imprevistos e
                    não cumprimento dos prazos.</p>

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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Formulário de Solicitação de Medicamentos (sua receita)</p>
                <p class="fw-light">Informe se você tem um formulário de prescrição de antirretrovirais ("receita
                    médica") válido e adequadamente preenchido e assinado.</p>
                <p class="fw-light">Exemplo:</p>
                <img src="assets/img/formulario.png" alt="" class="img-fluid">
                <label for="st_formulario" class="form-label">Você tem o formulário válido (preenchido e assinado) para
                    poder enviar (arquivo ou foto)?</label>

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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Não tenho um formulário</p>
                <!-- ADCIONAR CONTATO -->
                <p class="fw-light">Se você não tem um formulário de solicitação de medicamentos válido (perda,
                    interrupção de tratamento, extravio, transferência, etc), entre em contato com o e-mail da Entrega
                    Virtual (********) que iremos lhe ajudar. </p>
            </div>

            <div class="pt-3" id="parte14" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Tenho um Formulário de Solicitação de Medicamentos, ou está retido na UDM</p>
                <!--<p class="fw-light text-danger">Envie para o WhatsApp da Entrega Virtual (48 99177 2969) uma foto ou arquivo, após terminar o preenchimento.</p>-->
                <p class="fw-light">A postagem para entrega dos medicamentos antirretrovirais está condicionada ao
                    recebimento de toda documentação necessária.</p>
                <p class="fw-light">O envio inadequado da documentação pode atrasar ou impedir que seus medicamentos
                    sejam postados.</p>
                <!--<p class="h3">Enviarei o Formulário de Solicitação de Medicamentos para o WhatsApp da Entrega Virtual (48 99177 2969).</p>-->
                <p class="fw-light">O arquivo pode ser em qualquer formato de documento (Se enviar uma foto, verifique
                    se está nítida).</p>

                <input type="file" class="form-control" id="file_formulario" name="file_formulario" />

                <div class="d-grid gap-2 py-3">
                    <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte14">Enviar arquivo</button>
                </div>
            </div>

            <div class="pt-3 text-justify" id="parte15" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Selfie com documento oficial com foto</p>
                <p class="fw-light">Para confirmar sua identificação, precisamos agora que você envie uma selfie
                    segurando um documento oficial com foto (RG, CNH, passaporte, carteira de classe profissional).</p>
                <p class="fw-light">A postagem para entrega dos medicamentos antirretrovirais está condicionada ao
                    recebimento de toda documentação necessária.</p>
                <p class="fw-light">O envio inadequado da documentação pode atrasar ou impedir que seus medicamentos
                    sejam postados.</p>
                <p class="fw-light">Exemplo de selfie com documento oficial com foto</p>
                <img src="assets/img/selfie.jpg" alt="" class="img-fluid">
                <p class="fw-light text-danger">Enviarei uma selfie segurando um documento oficial com foto.</p>
                <p class="fw-light">O arquivo pode ser em qualquer formato (se enviar uma foto, verifique se está
                    nítida).</p>
                <input type="file" class="form-control" id="file_selfie" name="file_selfie" />
                <div class="d-grid gap-2 py-3">
                    <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte15">Enviar arquivo</button>
                </div>
            </div>

            <div class="pt-3" id="parte16" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
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
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Retirar na Farmácia (UDM) em que você está cadastrado/a</p>
                <p class="fw-light">Por essa modalidade, você deve procurar a farmácia (UDM) presencialmente, da mesma
                    forma como fez na última vez. Seguem os endereços, contatos e horário de funcionamento padrão, caso
                    precisar.</p>

                <p class="fw-bold">- Unidades próximas ao bairro boqueirão:


                <p class="fw-light">- US Érico Veríssimo
                    <br />Endereço: Rua Expedicionário Francisco Pereira dos Santos, 510 - Alto Boqueirão
                    <br />Telefone: (41) 3378-2018
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Esmeralda
                    <br />Endereço: Rua Coronel Rivadávia Pereira Moraes, 431 - Xaxim
                    <br />Telefone: (41) 3217-1288
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Eucaliptos
                    <br />Endereço: Rua Lázaro Borsato, 150, Alto Boqueirão
                    <br />Telefone: (41) 3286-1738
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Irmã Teresa Araújo
                    <br />Endereço: Rua Maestro Carlos Frank, 785 - Boqueirão
                    <br />Telefone: (41) 3286-1337
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Jardim Paranaense
                    <br />Endereço: Rua Pedro Nabosne 57 - Alto Boqueirão
                    <br />Telefone: (41) 3378-1661
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Menonitas
                    <br />Endereço: Rua Domicio da Costa, 52 - Xaxim
                    <br />Telefone: (41) 3217-1294
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Moradias Belém
                    <br />Endereço: Rua Cezinando Dias Paredes, 1096 - Boqueirão
                    <br />Telefone: (41) 3286-1750
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Pantanal
                    <br />Endereço: Rua Maria Marques de Camargo, 119 - Alto Boqueirão
                    <br />Telefone: (41) 3379-7347
                    <br />Horário de funcionamento: Segunda a sexta das 8h às 17h
                </p>

                <p class="fw-light">- US São Pedro
                    <br />Endereço: Rua Bernardo Mann 131 - Xaxim
                    <br />Telefone: (41) 3212-1546
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Tapajós
                    <br />Endereço: Rua André Ferreira de Camargo, 188 - Xaxim
                    <br />Telefone: (41) 3217-1241
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Hauer
                    <br />Endereço: Rua Waldemar Kost, 650 - Hauer
                    <br />Telefone: (41) 3217-1283
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Visitação
                    <br />Endereço: Rua Bley Zorning, 3136 - Boqueirão
                    <br />Telefone: (41) 3286-1338
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Waldemar Monastier
                    <br />Endereço: Rua Romeu Bach, 80 - Boqueirão
                    <br />Telefone: (41) 3217-1279
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Xaxim
                    <br />Endereço: Rua Batista da Costa, 1163 - Xaxim
                    <br />Telefone: (41) 3212-1543
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- Centro de Especialidades Médicas Vila Hauer
                    <br />Endereço: Rua Waldemar Kost, 650 - Hauer
                    <br />Telefone: (41) 3217-1283
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro novo:

                <p class="fw-light">- US Bairro Novo
                    <br />Endereço: Rua Paulo Rio Branco de Macedo, 791 - Sítio Cercado
                    <br />Telefone: (41) 3289-6877
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Coqueiros
                    <br />Endereço: Rua Coronel Victor Agner Kendrick, 80 - Sítio Cercado
                    <br />Telefone: (41) 3286-1514 / (41) 3286-1589
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US João Cândido
                    <br />Endereço: Rua Ourizona, 2250 - Bairro Novo
                    <br />Telefone: (41) 3289-5628 / (41) 3289-1727
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Nossa Senhora Aparecida
                    <br />Endereço: Rua Carlos Amoretty Osório, 169 - Sítio Cercado
                    <br />Telefone: (41) 3289-6252 / (41) 3289-1876
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Osternack
                    <br />Endereço: Rua Miguel Rossetim, 100 - Vila Osternack
                    <br />Telefone: (41) 3289-4311 / (41) 3289-2246
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Parigot de Souza
                    <br />Endereço: Rua João Eloy de Souza, 111 - Sítio Cercado
                    <br />Telefone: (41) 3378-6467 / (41) 3378-2001
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Salvador Allende
                    <br />Endereço: Rua Celeste Tortato Gabardo, 1712 - Sítio Cercado
                    <br />Telefone: (41) 3227-4059 / (41) 3227-1781
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Sambaqui
                    <br />Endereço: Rua Roberto Dala Barba, 44 - Sítio Cercado
                    <br />Telefone: (41) 3298-6235 / (41) 3298-6234
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US São João Del Rey
                    <br />Endereço: Rua Realeza, 259 - Sítio Cercado
                    <br />Telefone: (41) 3227-4061 / (41) 3349-1765
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Umbará 1
                    <br />Endereço: Rua Dep. Pinheiro Junior, 915 - Umbará
                    <br />Telefone: (41) 3348-5013 / (41) 3348-2575
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Xapinhal
                    <br />Endereço: Rua Elbe de Macedo, 483 - Sítio Cercado
                    <br />Telefone: (41) 3227-4138 / (41) 3227-4276
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro boqueirão:

                <p class="fw-light">- US Abaeté
                    <br />Endereço: Rua Delegado Miguel Zacarias, 403 - Boa Vista
                    <br />Telefone: (41) 3251-1015
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Abranches
                    <br />Endereço: Rua Aldo Pinheiro, 60 - Abranches
                    <br />Telefone: (41) 3354-5447
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Atuba
                    <br />Endereço: Rua Rio Pelotas, 820 - Bairro Alto
                    <br />Telefone: (41) 3315-2292 / (41) 3315-2293
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Bacacheri
                    <br />Endereço: Avenida Erasto Gaertner, 797 Bacacheri
                    <br />Telefone: (41) 3251-1025
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Bairro Alto
                    <br />Endereço: Rua Jornalista Alceu Chichorro, 314 - Bairro Alto
                    <br />Telefone: (41) 3315-2291 / (41) 3315-2281
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Barreirinha
                    <br />Endereço: Rua Santa Gema Galgani, 353 - Barreirinha
                    <br />Telefone: (41) 3585-4061
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Fernando Noronha
                    <br />Endereço: Rua João Mequetti, 389 - Santa Cândida
                    <br />Telefone: (41) 3251-1030
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Jardim Aliança
                    <br />Endereço: Rua José Ursolino Filho, 646 - Santa Candida
                    <br />Telefone: (41) 3015-4560 / (41) 3357-2881
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Cândida
                    <br />Endereço: Avenida Paraná, 5050 - Santa Cândida
                    <br />Telefone: (41) 3251-1031 / (41) 3251-1001
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Efigênia
                    <br />Endereço: Rua Voltaire, 139 - Barreirinha
                    <br />Telefone: (41) 3355-2982
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Tarumã
                    <br />Endereço: Rua José Veríssimo, 1352 - Bairro Alto
                    <br />Telefone: (41) 3315-2294
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Tingui
                    <br />Endereço: Rua Nicolau Salomão, 671 - Tingui
                    <br />Telefone: (41) 3251-1000
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Diana
                    <br />Endereço: Rua René Descartes, 537 Abranches
                    <br />Telefone: (41) 3355-2980
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Esperança
                    <br />Endereço: Rua Cataratas do Iguaçu, 192 - Atuba
                    <br />Telefone: (41) 3251-1037
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Leonice
                    <br />Endereço: Avenida Anita Garibaldi, 6814 - Cachoeira
                    <br />Telefone: (41) 3355-2682 / (41) 3355-2670
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro cajuru:

                <p class="fw-light">- US Alvorada
                    <br />Endereço: Rua Ivone do Espírito Santo Garcia, 100 - Uberaba
                    <br />Telefone: (41) 3575-1773
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Cajuru
                    <br />Endereço: Rua Pedro Bochino, 750 - Vila Oficinas
                    <br />Telefone: (41) 3361-2343
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Camargo
                    <br />Endereço: Rua Pedro Violani, 364 - Cajuru
                    <br />Telefone: (41) 3361-2501
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Iracema
                    <br />Endereço: Rua Professor Nivaldo Braga, 1571 - Capão da Imbuia
                    <br />Telefone: (41) 3266-2123
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Lotiguaçu
                    <br />Endereço: Rua Eunice Betini Bartoszeck, 1287 - Uberaba
                    <br />Telefone: (41) 3364-5498
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Salgado Filho
                    <br />Endereço: Avenida Senador Salgado Filho, 5265 Uberaba
                    <br />Telefone: (41) 3217-1231
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US São Domingos
                    <br />Endereço: Rua Ladislau Mikosz, 133 Cajuru
                    <br />Telefone: (41) 3361-2504
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US São Paulo
                    <br />Endereço: Rua Canal Belém, 6427 Uberaba
                    <br />Telefone: (41) 3217-1221
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Solitude
                    <br />Endereço: Rua Isaias Ferreira da Silva, 150 - Solitude
                    <br />Telefone: (41) 3361-2512
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Trindade
                    <br />Endereço: Rua Roraima, 1790 - Vila Oficinas
                    <br />Telefone: (41) 3361-2348
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Trindade 2
                    <br />Endereço: Rua Sebastião Marcos Luiz, 1197 - Cajuru
                    <br />Telefone: (41) 3361-2513
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Uberaba de Cima
                    <br />Endereço: Rua Capitão Leônidas Marques, 1392 - Uberaba
                    <br />Telefone: (41) 3361-2381 / (41) 3361-2380
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- Centro de Especialidades Salgado Filho
                    <br />Endereço: Avenida Salgado Filho, 5265 - Uberaba
                    <br />Telefone: (41) 3217-1224
                    <br />Horário de funcionamento: 7h às 19h de segunda a sexta-feira
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro Cidade Industrial (CIC):

                <p class="fw-light">- US Atenas
                    <br />Endereço: Rua Emilia Erichsen, 45 - Cidade Industrial
                    <br />Telefone: (41) 3285-5266
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Augusta
                    <br />Endereço: Rua Robert Redzinski, 222 - Cidade Industrial
                    <br />Telefone: (41) 3373-1630
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Barigui
                    <br />Endereço: Rua Arthur Martins Franco, 5516 - Cidade Industrial
                    <br />Telefone: (41) 3314-5133
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Caiuá
                    <br />Endereço: Rua Arnaud Ferreira Vellozo, 200 - Cidade Industrial
                    <br />Telefone: (41) 3314-5204
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Campo Alegre
                    <br />Endereço: Avenida das Industrias, 1749 - Cidade Industrial
                    <br />Telefone: (41) 3327-3489 / (41) 3327-3422
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Cândido Portinari
                    <br />Endereço: Rua Durval Leopolpo Landal, 1529 - Cidade Industrial
                    <br />Telefone: (41) 3314-5208
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Jardim Gabineto
                    <br />Endereço: Rua Engenheiro João Vizinoni, 458 - Cidade Industrial
                    <br />Telefone: (41) 3285-1333
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Nossa Senhora da Luz
                    <br />Endereço: Rua Emídio Nonato da Silva, 45 Cidade Industrial
                    <br />Telefone: (41) 3212-1455
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Oswaldo Cruz
                    <br />Endereço: Rua Pedro Gusso, 3749 - Cidade Industrial
                    <br />Telefone: (41) 99268-8126
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Sabará
                    <br />Endereço: Rua Pedro Andretta, 3030 - Cidade Industrial
                    <br />Telefone: (41) 3314-5202
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US São José
                    <br />Endereço: Rua Piraí do Sul, 280 - Augusta
                    <br />Telefone: (41) 3373-6652
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US São Miguel
                    <br />Endereço: Rua Des. CId Campelo, 8060 - Cidade Industrial
                    <br />Telefone: (41) 99962-0263
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Taiz Viviane Machado
                    <br />Endereço: Rua Gastão Natal Simone, 05 - Cidade Industrial
                    <br />Telefone: (41) 99996-6546
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Tancredo Neves
                    <br />Endereço: Rua Professora Hilda Hank Gonçalves, 435 - Cidade Industrial
                    <br />Telefone: (41) 3314-5131
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Sandra
                    <br />Endereço: Rua Araranguá, 189 - Cidade Industrial
                    <br />Telefone: (41) 3285-2112
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Verde
                    <br />Endereço: Rua Emílio Romani, 2684 - Cidade Industrial
                    <br />Telefone: (41) 3212-1522
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vitória Régia
                    <br />Endereço: Rua Paul Garfunkel, 2000 (esq c/ Cyro Correia Pereira) - Cidade Industrial
                    <br />Telefone: (41) 98535-0763
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro Centro:

                <p class="fw-light">- US Capanema
                    <br />Endereço: Rua Manoel Martins de Abreu, 830 - Prado Velho
                    <br />Telefone: (41) 3218-2400
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Mãe Curitibana
                    <br />Endereço: Rua Jaime Reis, 331 - Alto do São Francisco
                    <br />Telefone: (41) 3321-2714 / (41) 3321-3209
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Ouvidor Pardinho
                    <br />Endereço: Rua 24 de Maio, 807 - Centro - Praça Ouvidor Pardinho
                    <br />Telefone: (41) 3321-2747 /(41) 3321-2820
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- Centro de Orientação e Aconselhamento (COA)
                    <br />Endereço: Rua do Rosário, 144 sexto andar - São Francisco
                    <br />Telefone: (41) 3321-2781
                    <br />Horário de funcionamento: 7h às 18h de segunda a sexta-feira
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro pinheirinho:

                <p class="fw-light">- US Aurora
                    <br />Endereço: Rua Theofhilo Mansur, 500 - Novo Mundo
                    <br />Telefone: (41) 3212-1460
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Concórdia
                    <br />Endereço: Rua Dilermando Pereira de Almeida, 700 - Pinheirinho
                    <br />Telefone: (41) 3227-4141
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Fanny Lindóia
                    <br />Endereço: Rua Conde dos Arcos, 295 Lindóia
                    <br />Telefone: (41) 3212-1453
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Ipiranga
                    <br />Endereço: Rua Santa Regina, 667 - Capão Raso
                    <br />Telefone: (41) 3212-1519
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Maria Angélica
                    <br />Endereço: Rua Professor Júlio Teodorico Guimarães, 337 Pinheirinho
                    <br />Telefone: (41) 3212-1540
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Parque Industrial
                    <br />Endereço: Rua Laudelino Ferreira Lopes, 1801 Capão Raso
                    <br />Telefone: (41) 3212-1424
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Sagrado Coração
                    <br />Endereço: Rua Antônio Claudino, 375 - Pinheirinho
                    <br />Telefone: (41) 3227-4233
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Clarice
                    <br />Endereço: Rua Eloy de Assis Fabris, 634 - Novo Mundo
                    <br />Telefone: (41) 99267-3635
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Feliz
                    <br />Endereço: Rua Pedro Gusso, 866 - Novo Mundo
                    <br />Telefone: (41) 3212-1416
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Leão
                    <br />Endereço: Rua Primo Lourenço Tosin, 21 - Novo Mundo
                    <br />Telefone: (41) 3212-1475
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Machado
                    <br />Endereço: Rua Laudelino Ferreira Lopes, 2959 Pinheirinho
                    <br />Telefone: (41) 3212-1411
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro portão:

                <p class="fw-light">- US Estrela
                    <br />Endereço: Rua Francisco Nowotarski, 78 - Fazendinha
                    <br />Telefone: (41) 3314-5129
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Parolin
                    <br />Endereço: Rua Sergipe, 59 - Vila Guaíra
                    <br />Telefone: (41) 3213-1379
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Amélia
                    <br />Endereço: Rua Berta Klemtz, 215 - Fazendinha
                    <br />Telefone: (41) 3329-1930
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Quitéria 1
                    <br />Endereço: Rua Divina Providência, 1445 - Santa Quitéria
                    <br />Telefone: (41) 3314-5231
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Quitéria 2
                    <br />Endereço: Rua Bocaíuva, 310 - Santa Quitéria
                    <br />Telefone: (41) 3314-5158
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santos Andrade
                    <br />Endereço: Rua Nelson Ferreira da Luz,145 - Campo Comprido
                    <br />Telefone: (41) 3314-5236
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Vila Guaíra
                    <br />Endereço: Rua São Paulo, 1495 - Vila Guaíra
                    <br />Telefone: (41) 3213-7600 / (41) 3213-7591
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro santa felicidade:

                <p class="fw-light">- US Bom Pastor
                    <br />Endereço: Rua José Casagrande, 220 Vista Alegre
                    <br />Telefone: (41) 3240-1304 / (41) 3240-1129
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Butiatuvinha
                    <br />Endereço: Avenida Manoel Ribas, 8640 - Butiatuvinha
                    <br />Telefone: (41) 3372-4405 / (41) 3372-4406
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Campina do Siqueira
                    <br />Endereço: Rua General Mário Tourinho, 1684 Campina do Siqueira
                    <br />Telefone: (41) 3240-1137 / (41) 3240-1138 / (41) 3336-1647
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Nova Órleans
                    <br />Endereço: Avenida Vereador Toaldo Tulio, 4577 -Orleans
                    <br />Telefone: (41) 3370-1584
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Pinheiros
                    <br />Endereço: Rua Joanna Emma Dalpozzo Zardo, 370 - Santa Felicidade
                    <br />Telefone: (41) 3364-8683 / (41) 3364-7396
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Pilarzinho
                    <br />Endereço: Rua Amauri Lange Silvério, 1251 - Pilarzinho
                    <br />Telefone: (41) 3240-1314
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US São Braz
                    <br />Endereço: Rua Antonio Escorsin, 1960 - São Braz
                    <br />Telefone: (41) 3272-3459 / (41) 3372-4776
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Felicidade
                    <br />Endereço: Via Veneto, 10 - Santa Felicidade
                    <br />Telefone: (41) 3370-1570
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 22h
                </p>

                <p class="fw-light">- US Vista Alegre
                    <br />Endereço: Rua Miguel de Lazari, 51 Pilarzinho
                    <br />Telefone: (41) 3240-1303
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US União das Vilas
                    <br />Endereço: Rua Frederico Escorsin, 314 São Braz
                    <br />Telefone: (41) 3370-1580 / (41) 3370-1582
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- Centro de Especialidades Santa Felicidade
                    <br />Endereço: Av. Ver. Toaldo Túlio, 2500 - São Braz
                    <br />Telefone: (41) 3370-1572
                    <br />Horário de funcionamento: 7h às 18h de segunda a sexta-feira
                </p>

                <p class="fw-bold">- Unidades próximas ao bairro Tatuquara:

                <p class="fw-light">- US Caximba
                    <br />Endereço: Rua Delegado Bruno de Almeida, 7881 - Caximba
                    <br />Telefone: (41) 3265-1869
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Dom Bosco
                    <br />Endereço: Rua Angelo Tosin, 100 - Campo do Santana
                    <br />Telefone: (41) 3396-4949
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Monteiro Lobato
                    <br />Endereço: Rua Olivio José Rosetti, 538 -Tatuquara
                    <br />Telefone: (41) 3396-5366
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Moradias da Ordem
                    <br />Endereço: Rua Jovenilson Americo de Oliveira, 240 Tatuquara
                    <br />Telefone: (41) 3396-2056
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Palmeiras
                    <br />Endereço: R. João Batista Burbelo, 12 - Tatuquara
                    <br />Telefone: (41) 3348-1721
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Pompéia
                    <br />Endereço: R. João Batista Bettega Jr. s/n / 125 Tatuquara
                    <br />Telefone: (41) 3396-5967
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>

                <p class="fw-light">- US Rio Bonito
                    <br />Endereço: R. Fanny Bertoldi, 170 - Campo do Santana
                    <br />Telefone: (41) 3396-5624
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 19h
                </p>

                <p class="fw-light">- US Santa Rita
                    <br />Endereço: R. Adriana Ceres Zago Bueno, 1350 - Tatuquara
                    <br />Telefone: (41) 3265-6935
                    <br />Horário de funcionamento: Segunda a sexta das 7h às 17h
                </p>


                <p class="fw-light"> Leve um documento oficial com foto e seu Formulário de Solicitação de Medicamentos
                    impresso ou digital (preenchido e assinado pelo médico).</p>

                <div class="d-grid gap-2 py-3">
                    <button type="button" class="btn btn-primary btn-lg" style="border-radius: 30px;" id="btn-parte17">Ok</button>
                </div>
            </div>

            <div class="pt-3 text-justify" id="parte18" style="display: none;">
                <div class="mb-3">
                    <a class="btn voltar"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
                </div>
                <p class="h1">Tenho mais de 30 dias de tratamento</p>
                <p class="fw-light">Se você tem mais de 30 dias de tratamento, solicitamos que preencha esse formulário
                    novamente quando você tiver 30 ou menos dias de tratamento.</p>
                <p class="fw-light">Nosso serviço ainda não tem a possibilidade de programar a entrega com mais de 30
                    dias de antecedência. Estamos trabalhando para mais essa melhoria.</p>
                <!-- ADICIONAR CONTATO -->
                <p class="fw-light">Se tiver alguma questão específica que necessita de auxílio, entre em contato
                    diretamente pelo e-mail da Entrega Virtual (**********) mencionando qual sua necessidade.</p>
            </div>
        </form>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $(".voltar").on("click", function() {
            let id = $(this).parent().parent().attr('id').replace(/^\D+/g, '');

            if (id == 6) {
                var novo = 2;
            } else if (id == 7 || id == 18) {
                var novo = 3;
            } else if (id == 16) {
                var novo = 5;
            } else if (id == 17) {
                var novo = 9;
            } else {
                var novo = id - 1;
            }

            $("#parte" + id).hide();
            $("#parte" + novo).show();
            if (novo == 1) {
                $("#introducao").show();
            }
        });

        $("#btn-parte1").on("click", function() {
            if ($("#ds_email").val() != "") {
                $("#parte2").show();
                $("#parte1").hide();
                $("#introducao").hide();
            } else {
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
            if (this.value == "N") {
                $("#parte6").show();
            } else {
                $("#parte3").show();
            }

        });

        $("#btn-parte3").on("click", function() {
            $("#parte3").hide();
            if ($("#st_dias option:selected").val() == "0") {
                $("#parte4").show();
            } else if ($("#st_dias option:selected").val() == "30") {
                $("#parte18").show();
            } else {
                $("#parte7").show();
            }
        });

        $("#btn-parte4").on("click", function() {


            if ($("input[name=st_iniciando]:checked").val() == "S") {
                $("#parte4").hide();
                $("#parte5").show();
            } else if ($("input[name=st_iniciando]:checked").val() == "N") {
                $("#parte4").hide();
                $("#parte7").show();
            } else {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
                $("input[name=st_iniciando]").focus();
            }
        });

        $("#btn-parte5").on("click", function() {
            $("#parte16").show();
            $("#parte5").hide();
        });

        $("#btn-parte6").on("click", function() {
            Swal.fire({
                title: 'Pronto!',
                text: 'Dados gravados com sucesso!',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
        });

        $("#btn-parte7").on("click", function() {
            if (validar_cadastro()) {
                gravar_cadastro();
            }
        });

        $("#btn-parte8").on("click", function() {
            if ($("input[name=id_udm]:checked").length == 0) {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            } else {
                $("#parte9").show();
                $("#parte8").hide();
            }
        });

        $("#btn-parte9").on("click", function() {

            if ($("input[name=st_entrega]:checked").val() == "1") {
                $("#parte9").hide();
                $("#parte10").show();
            } else if ($("input[name=st_entrega]:checked").val() == "2") {
                $("#parte9").hide();
                $("#parte17").show();
            } else {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        });

        $("#btn-parte10").on("click", function() {
            if (validar_endereco()) {
                gravar_endereco();
            }

        });

        $("#btn-parte11").on("click", function() {
            $("#parte12").show();
            $("#parte11").hide();
        });

        $("#btn-parte12").on("click", function() {


            if ($("input[name=st_formulario]:checked").val() == "N") {
                $("#parte12").hide();
                $("#parte13").show();
            } else if ($("input[name=st_formulario]:checked").val() == "S") {
                $("#parte12").hide();
                $("#parte14").show();
            } else if ($("input[name=st_formulario]:checked").val() == "SR") {
                $("#parte12").hide();
                $("#parte14").show();
                $("#btn-parte14").html('Pular');

            } else {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Selecione uma das opções',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        });

        $("#btn-parte14").on("click", function() {
            if ($("input[name=st_formulario]:checked").val() == "S") {
                if (validar_formulario()) {
                    gravar_formulario();
                }
            } else if ($("input[name=st_formulario]:checked").val() == "SR") {
                $("#parte15").show();
                $("#parte14").hide();
            }

        });

        $("#btn-parte15").on("click", function() {
            if (validar_selfie()) {
                gravar_selfie();
            }

        });


        $("#btn-parte16").on("click", function() {
            if (validar_comentario()) {
                gravar_comentario();
            }
        });

        function validar_cadastro() {
            if ($("#ds_nome_civil").val() == "" || $("#ds_nome_civil").val().length < 5) {
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

            if ($("#dt_nasc").val() == "" || $("#dt_nasc").val().length < 10) {
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

            if ($("#ds_nome_mae").val() == "" || $("#ds_nome_mae").val().length < 5) {
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

            if ($("#nu_cpf").val() == "" || $("#nu_cpf").val().length < 11) {
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

            if ($("#nu_telefone").val() == "" || $("#nu_telefone").val().length < 11) {
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

        function validar_endereco() {
            if ($("#ds_rua").val() == "" || $("#ds_rua").val().length < 5) {
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

            if ($("#ds_numero").val() == "") {
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

            if ($("#ds_bairro").val() == "") {
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

            if ($("#nu_cep").val() == "" || $("#nu_cep").val().length < 5) {
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

            if ($("input[name=st_autoriza]:checked").length == 0) {
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

        function validar_formulario() {
            if ($("input[name=file_formulario]").length == 0) {
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

        function validar_selfie() {
            if ($("input[name=file_selfie]").length == 0) {
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

        function validar_comentario() {
            if ($("#ds_comentario_final").val() == "" || $("#ds_comentario_final").val().length < 10) {
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

        function gravar_formulario() {
            var formData = new FormData();
            formData.append('file', $('#file_formulario')[0].files[0]);
            formData.append('id_cadastro', $('#id_cadastro').val());
            $.ajax({
                url: 'appCadastro/gravar_formulario.php',
                data: formData,
                processData: false // tell jQuery not to process the data
                    ,
                contentType: false,
                type: 'post',
                success: function(html) {

                    swal.fire({
                        position: 'top-end',
                        type: 'success',
                        showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
                    }).then(function() {
                        $("#parte15").show();
                        $("#parte14").hide();

                    });

                },
                error: function(data) {
                    swal.fire("Erro", data.responseText, "error");
                }
            });
        }

        function gravar_selfie() {
            var formData = new FormData();
            formData.append('file', $('#file_selfie')[0].files[0]);
            formData.append('id_cadastro', $('#id_cadastro').val());
            $.ajax({
                url: 'appCadastro/gravar_selfie.php',
                data: formData,
                processData: false // tell jQuery not to process the data
                    ,
                contentType: false,
                type: 'post',
                success: function(html) {

                    swal.fire({
                        position: 'top-end',
                        type: 'success',
                        showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
                    }).then(function() {
                        $("#parte16").show();
                        $("#parte15").hide();

                    });

                },
                error: function(data) {
                    swal.fire("Erro", data.responseText, "error");
                }
            });
        }

        function gravar_cadastro() {

            $.ajax({
                url: 'appCadastro/gravar_cadastro.php',
                data: $("#cadastro").serialize(),
                type: 'post',
                success: function(html) {
                    console.log(html);
                    $("#id_cadastro").val(html.data.id_cadastro);
                    swal.fire({
                        position: 'top-end',
                        type: 'success',
                        showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
                    }).then(function() {
                        $("#parte8").show();
                        $("#parte7").hide();
                    });

                },
                error: function(data) {
                    swal.fire("Erro", data.responseText, "error");
                }
            });
            return false;
        }

        function gravar_endereco() {

            $.ajax({
                url: 'appCadastro/gravar_endereco.php',
                data: $("#cadastro").serialize(),
                type: 'post',
                success: function(html) {
                    swal.fire({
                        position: 'top-end',
                        type: 'success',
                        showConfirmButton: false,
                        icon: 'success',
                        timer: 1500
                    }).then(function() {
                        $("#parte11").show();
                        $("#parte10").hide();
                    });

                },
                error: function(data) {
                    swal.fire("Erro", data.responseText, "error");
                }
            });
            return false;
        }

        function gravar_comentario() {

            $.ajax({
                url: 'appCadastro/gravar_comentario.php',
                data: $("#cadastro").serialize(),
                type: 'post',
                success: function(html) {
                    swal.fire({
                        position: 'center',
                        type: 'success',
                        title: html.message,
                        icon: 'success',
                        showConfirmButton: true
                    }).then(function() {
                        window.location.href = "index.php";
                    });

                },
                error: function(data) {
                    swal.fire("Erro", data.responseText, "error");
                }
            });
            return false;
        }
    });
</script>