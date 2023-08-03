
<!DOCTYPE html>
<html>
<title>Página Inicial</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

  <div class="w3-sidebar w3-bar-block w3-blue w3-xxlarge" style="width:230px">
    <div style="font-size: 22px;">
      <div style="margin-bottom: 100px;">

      </div>
      <hr>
      <div style="margin-bottom: 100px;"></div>
      <a href="pagina.html" class="w3-bar-item w3-button"><i class="fa fa-home">Página inicial</i></a>
      <div style="margin-bottom: 40px;"></div>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"> Perfil</i></a>
      <div style="margin-bottom: 40px;"></div>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"> Conversas</i></a>
      <div style="margin-bottom: 145px;"></div>
      <a href="login.html" class="w3-bar-item w3-button"><i class="fa fa-close">Sair</i></a>
    </div>
  </div>
  <div style="margin-left: 260px">

    <div class="w3-container">
      <div>
        <div style="text-align: center; margin-top: 25px;">
          <button onclick="document.getElementById('id01').style.display='block'"
            class="button mb-4  mt-1 is-info is-responsive w3-right" style="border-radius: 20px;"><i
              class="fa fa-search"> Pesquisar por Usuário</i></button>
        </div>
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom">
            <form class="m-2 has-background-white">

              <form class="box pt-6 pl-5 mt-6 has-background-white">
                <strong>
                  <p class=" is-size-3 mb-3 has-text-centered has-text-dark">
                    Selecione seus interesses
                  </p>
                </strong>


                <div class="select is-info mr-3 mb-3">
                  <select>
                    <option value="País">Selecione seu País</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Afeganistão">Afeganistão</option>
                    <option value="África do Sul">África do Sul</option>
                    <option value="Albânia">Albânia</option>
                    <option value="Alemanha">Alemanha</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                    <option value="Antárctida">Antárctida</option>
                    <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Argélia">Argélia</option>
                    <option value="Armênia">Armênia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Arábia Saudita">Arábia Saudita</option>
                    <option value="Austrália">Austrália</option>
                    <option value="Áustria">Áustria</option>
                    <option value="Azerbaijão">Azerbaijão</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belize">Belize</option>
                    <option value="Benim">Benim</option>
                    <option value="Bermudas">Bermudas</option>
                    <option value="Bielorrússia">Bielorrússia</option>
                    <option value="Bolívia">Bolívia</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgária">Bulgária</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Butão">Butão</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camarões">Camarões</option>
                    <option value="Camboja">Camboja</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Catar">Catar</option>
                    <option value="Cazaquistão">Cazaquistão</option>
                    <option value="Chade">Chade</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Chipre">Chipre</option>
                    <option value="Colômbia">Colômbia</option>
                    <option value="Comores">Comores</option>
                    <option value="Coreia do Norte">Coreia do Norte</option>
                    <option value="Coreia do Sul">Coreia do Sul</option>
                    <option value="Costa do Marfim">Costa do Marfim</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croácia">Croácia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Egito">Egito</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                    <option value="Equador">Equador</option>
                    <option value="Eritreia">Eritreia</option>
                    <option value="Escócia">Escócia</option>
                    <option value="Eslováquia">Eslováquia</option>
                    <option value="Eslovênia">Eslovênia</option>
                    <option value="Espanha">Espanha</option>
                    <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Estônia">Estônia</option>
                    <option value="Etiópia">Etiópia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Filipinas">Filipinas</option>
                    <option value="Finlândia">Finlândia</option>
                    <option value="França">França</option>
                    <option value="Gabão">Gabão</option>
                    <option value="Gana">Gana</option>
                    <option value="Geórgia">Geórgia</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Granada">Granada</option>
                    <option value="Gronelândia">Gronelândia</option>
                    <option value="Grécia">Grécia</option>
                    <option value="Guadalupe">Guadalupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesei">Guernesei</option>
                    <option value="Guiana">Guiana</option>
                    <option value="Guiana Francesa">Guiana Francesa</option>
                    <option value="Guiné">Guiné</option>
                    <option value="Guiné Equatorial">Guiné Equatorial</option>
                    <option value="Guiné-Bissau">Guiné-Bissau</option>
                    <option value="Gâmbia">Gâmbia</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungria">Hungria</option>
                    <option value="Ilha Bouvet">Ilha Bouvet</option>
                    <option value="Ilha de Man">Ilha de Man</option>
                    <option value="Ilha do Natal">Ilha do Natal</option>
                    <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                    <option value="Ilha Norfolk">Ilha Norfolk</option>
                    <option value="Ilhas Cayman">Ilhas Cayman</option>
                    <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                    <option value="Ilhas Cook">Ilhas Cook</option>
                    <option value="Ilhas Feroé">Ilhas Feroé</option>
                    <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul
                    </option>
                    <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                    <option value="Ilhas Marshall">Ilhas Marshall</option>
                    <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados
                      Unidos</option>
                    <option value="Ilhas Salomão">Ilhas Salomão</option>
                    <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                    <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                    <option value="Ilhas Åland">Ilhas Åland</option>
                    <option value="Indonésia">Indonésia</option>
                    <option value="Inglaterra">Inglaterra</option>
                    <option value="Índia">Índia</option>
                    <option value="Iraque">Iraque</option>
                    <option value="Irlanda do Norte">Irlanda do Norte</option>
                    <option value="Irlanda">Irlanda</option>
                    <option value="Irã">Irã</option>
                    <option value="Islândia">Islândia</option>
                    <option value="Israel">Israel</option>
                    <option value="Itália">Itália</option>
                    <option value="Iêmen">Iêmen</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japão">Japão</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordânia">Jordânia</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Laos">Laos</option>
                    <option value="Lesoto">Lesoto</option>
                    <option value="Letônia">Letônia</option>
                    <option value="Libéria">Libéria</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lituânia">Lituânia</option>
                    <option value="Luxemburgo">Luxemburgo</option>
                    <option value="Líbano">Líbano</option>
                    <option value="Líbia">Líbia</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedônia">Macedônia</option>
                    <option value="Madagáscar">Madagáscar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldivas">Maldivas</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Malásia">Malásia</option>
                    <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                    <option value="Marrocos">Marrocos</option>
                    <option value="Martinica">Martinica</option>
                    <option value="Mauritânia">Mauritânia</option>
                    <option value="Maurícia">Maurícia</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Moldávia">Moldávia</option>
                    <option value="Mongólia">Mongólia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Moçambique">Moçambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="México">México</option>
                    <option value="Mônaco">Mônaco</option>
                    <option value="Namíbia">Namíbia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Nicarágua">Nicarágua</option>
                    <option value="Nigéria">Nigéria</option>
                    <option value="Niue">Niue</option>
                    <option value="Noruega">Noruega</option>
                    <option value="Nova Caledônia">Nova Caledônia</option>
                    <option value="Nova Zelândia">Nova Zelândia</option>
                    <option value="Níger">Níger</option>
                    <option value="Omã">Omã</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Panamá">Panamá</option>
                    <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                    <option value="Paquistão">Paquistão</option>
                    <option value="Paraguai">Paraguai</option>
                    <option value="País de Gales">País de Gales</option>
                    <option value="Países Baixos">Países Baixos</option>
                    <option value="Peru">Peru</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Polinésia Francesa">Polinésia Francesa</option>
                    <option value="Polônia">Polônia</option>
                    <option value="Porto Rico">Porto Rico</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Quirguistão">Quirguistão</option>
                    <option value="Quênia">Quênia</option>
                    <option value="Reino Unido">Reino Unido</option>
                    <option value="República Centro-Africana">República Centro-Africana</option>
                    <option value="República Checa">República Checa</option>
                    <option value="República Democrática do Congo">República Democrática do Congo</option>
                    <option value="República do Congo">República do Congo</option>
                    <option value="República Dominicana">República Dominicana</option>
                    <option value="Reunião">Reunião</option>
                    <option value="Romênia">Romênia</option>
                    <option value="Ruanda">Ruanda</option>
                    <option value="Rússia">Rússia</option>
                    <option value="Saara Ocidental">Saara Ocidental</option>
                    <option value="Saint Martin">Saint Martin</option>
                    <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                    <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                    <option value="Samoa Americana">Samoa Americana</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha
                    </option>
                    <option value="Santa Lúcia">Santa Lúcia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serra Leoa">Serra Leoa</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Somália">Somália</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Suazilândia">Suazilândia</option>
                    <option value="Sudão">Sudão</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Suécia">Suécia</option>
                    <option value="Suíça">Suíça</option>
                    <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                    <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                    <option value="São Marino">São Marino</option>
                    <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                    <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                    <option value="Sérvia">Sérvia</option>
                    <option value="Síria">Síria</option>
                    <option value="Tadjiquistão">Tadjiquistão</option>
                    <option value="Tailândia">Tailândia</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tanzânia">Tanzânia</option>
                    <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas
                    </option>
                    <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Toquelau">Toquelau</option>
                    <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                    <option value="Tunísia">Tunísia</option>
                    <option value="Turcas e Caicos">Turcas e Caicos</option>
                    <option value="Turquemenistão">Turquemenistão</option>
                    <option value="Turquia">Turquia</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Ucrânia">Ucrânia</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Uruguai">Uruguai</option>
                    <option value="Uzbequistão">Uzbequistão</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vaticano">Vaticano</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietname">Vietname</option>
                    <option value="Wallis e Futuna">Wallis e Futuna</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    <option value="Zâmbia">Zâmbia</option>
                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>

                    <option>Gênero</option>
                    <option>Feminino</option>
                    <option>Masculino</option>
                    <option>Outro</option>
                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>

                    <option>Sexualidade</option>
                    <option>Heterossexual</option>
                    <option>Homossexual</option>
                    <option>Bissexual</option>
                    <option>Assexual</option>
                    <option>Pansexual</option>
                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>

                    <option>Status de Relacionamento</option>
                    <option>Casado</option>
                    <option>Namorando</option>
                    <option>Separado</option>
                    <option>Divorciado</option>
                    <option>Viúvo</option>
                  </select>
                </div>


                <div class="select is-info mr-3">
                  <select>

                    <option>Religião</option>
                    <option>Cristianismo</option>
                    <option>Budismo</option>
                    <option>Candomblé</option>
                    <option>Hinduísmo</option>
                    <option>Islamismo</option>
                    <option>Judaísmo</option>
                    <option>Ateu</option>
                    <option>Agnóstico</option>

                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>
                    <option>Escolha um esporte</option>
                    <option>Futebol</option>
                    <option>Críquete</option>
                    <option>Hóquei</option>
                    <option>Corridas</option>
                    <option>Tênis</option>
                    <option>Voleibol</option>
                    <option>Boxe</option>
                    <option>Tênis de Mesa</option>
                    <option>Basquetebol</option>
                    <option>Beisebol</option>
                    <option>Rugby</option>
                    <option>Golfe</option>
                    <option>Tênis</option>
                    <option>Atletismo</option>
                    <option>Natação</option>
                    <option>Ginástica</option>
                    <option>Ciclismo</option>
                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>
                    <option>Genero Musical Favorito</option>
                    <option>Axé</option>
                    <option>Blues</option>
                    <option>Country</option>
                    <option>Eletrônica</option>
                    <option>Forró</option>
                    <option>Funk</option>
                    <option>Gospel</option>
                    <option>Hip Hop</option>
                    <option>Jazz</option>
                    <option>MPB</option>
                    <option>Música clássica</option>
                    <option>Pagode</option>
                    <option>Pop</option>
                    <option>Rap</option>
                    <option>Reggae</option>
                    <option>Rock</option>
                    <option>Samba</option>
                    <option>Sertanejo</option>
                  </select>
                </div>

                <div class="select is-info mr-3">
                  <select>
                    <option>Maior qualidade</option>

                    <option>adorável</option>
                    <option>afável</option>
                    <option>afetivo</option>
                    <option>agradável</option>
                    <option>ajuizado</option>
                    <option>alegre</option>
                    <option>altruísta</option>
                    <option>amável</option>
                    <option>amigável</option>
                    <option>amoroso</option>
                    <option>aplicado</option>
                    <option>assertivo</option>
                    <option>atencioso</option>
                    <option>atento</option>
                    <option>autêntico</option>
                    <option>aventureiro</option>
                    <option>bacana</option>
                    <option>benévolo</option>
                    <option>bondoso</option>
                    <option>brioso</option>
                    <option>calmo</option>
                    <option>carinhoso</option>
                    <option>carismático</option>
                    <option>caritativo</option>
                    <option>cavalheiro</option>
                    <option>cívico</option>
                    <option>civilizado</option>
                    <option>companheiro</option>
                    <option>compreensivo</option>
                    <option>comunicativo</option>
                    <option>confiante</option>
                    <option>confiável</option>
                    <option>consciencioso</option>
                    <option>corajoso</option>
                    <option>cordial</option>
                    <option>cortês</option>
                    <option>credível</option>
                    <option>criativo</option>
                    <option>criterioso</option>
                    <option>cuidadoso</option>
                    <option>curioso</option>
                    <option>decente</option>
                    <option>decoroso</option>
                    <option>dedicado</option>
                    <option>descontraído</option>
                    <option>desenvolto</option>
                    <option>determinado</option>
                    <option>digno</option>
                    <option>diligente</option>
                    <option>disciplinado</option>
                    <option>disponível</option>
                    <option>divertido</option>
                    <option>doce</option>
                    <option>educado</option>
                    <option>eficiente</option>
                    <option>eloquente</option>
                    <option>empático</option>
                    <option>empenhado</option>
                    <option>empreendedor</option>
                    <option>encantador</option>
                    <option>engraçado</option>
                    <option>entusiasta</option>
                    <option>escrupuloso</option>
                    <option>esforçado</option>
                    <option>esmerado</option>
                    <option>esperançoso</option>
                    <option>esplêndido</option>
                    <option>excelente</option>
                    <option>extraordinário</option>
                    <option>extrovertido</option>
                    <option>feliz</option>
                    <option>fiel</option>
                    <option>fofo</option>
                    <option>forte</option>
                    <option>franco</option>
                    <option>generoso</option>
                    <option>gentil</option>
                    <option>genuíno</option>
                    <option>habilidoso</option>
                    <option>honesto</option>
                    <option>honrado</option>
                    <option>honroso</option>
                    <option>humanitário</option>
                    <option>humilde</option>
                    <option>idôneo</option>
                    <option>imparcial</option>
                    <option>independente</option>
                    <option>inovador</option>
                    <option>íntegro</option>
                    <option>inteligente</option>
                    <option>inventivo</option>
                    <option>justo</option>
                    <option>leal</option>
                    <option>legal</option>
                    <option>livre</option>
                    <option>maduro</option>
                    <option>maravilhoso</option>
                    <option>meigo</option>
                    <option>modesto</option>
                    <option>natural</option>
                    <option>nobre</option>
                    <option>observador</option>
                    <option>organizado</option>
                    <option>otimista</option>
                    <option>ousado</option>
                    <option>pacato</option>
                    <option>paciente</option>
                    <option>perfeccionista</option>
                    <option>perseverante</option>
                    <option>persistente</option>
                    <option>perspicaz</option>
                    <option>ponderado</option>
                    <option>pontual</option>
                    <option>preocupado</option>
                    <option>preparado</option>
                    <option>prestativo</option>
                    <option>prestável</option>
                    <option>proativo</option>
                    <option>produtivo</option>
                    <option>prudente</option>
                    <option>racional</option>
                    <option>respeitador</option>
                    <option>responsável</option>
                    <option>sábio</option>
                    <option>sagaz</option>
                    <option>sensato</option>
                    <option>sensível</option>
                    <option>simpático</option>
                    <option>sincero</option>
                    <option>solícito</option>
                    <option>solidário</option>
                    <option>sossegado</option>
                    <option>ternurento</option>
                    <option>tolerante</option>
                    <option>tranquilo</option>
                    <option>transparente</option>
                    <option>valente</option>
                    <option>valoroso</option>
                    <option>verdadeiro</option>
                    <option>zeloso</option>
                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>
                    <option>Maior defeito</option>
                    <option>agressivo</option>
                    <option>ansioso</option>
                    <option>antipático</option>
                    <option>antissocial</option>
                    <option>apático</option>
                    <option>apressado</option>
                    <option>arrogante</option>
                    <option>atrevido</option>
                    <option>autoritário</option>
                    <option>avarento</option>
                    <option>birrento</option>
                    <option>bisbilhoteiro</option>
                    <option>bruto</option>
                    <option>calculista</option>
                    <option>casmurro</option>
                    <option>chato</option>
                    <option>cínico</option>
                    <option>ciumento</option>
                    <option>colérico</option>
                    <option>comodista</option>
                    <option>covarde</option>
                    <option>crítico</option>
                    <option>cruel</option>
                    <option>debochado</option>
                    <option>depressivo</option>
                    <option>desafiador</option>
                    <option>desbocado</option>
                    <option>descarado</option>
                    <option>descomedido</option>
                    <option>desconfiado</option>
                    <option>descortês</option>
                    <option>desequilibrado</option>
                    <option>desleal</option>
                    <option>desleixado</option>
                    <option>desmazelado</option>
                    <option>desmotivado</option>
                    <option>desobediente</option>
                    <option>desonesto</option>
                    <option>desordeiro</option>
                    <option>despótico</option>
                    <option>desumano</option>
                    <option>discriminador</option>
                    <option>dissimulado</option>
                    <option>distraído</option>
                    <option>egoísta</option>
                    <option>estourado</option>
                    <option>estressado</option>
                    <option>exigente</option>
                    <option>falso</option>
                    <option>fingido</option>
                    <option>fraco</option>
                    <option>frio</option>
                    <option>frívolo</option>
                    <option>fútil</option>
                    <option>ganancioso</option>
                    <option>grosseiro</option>
                    <option>grosso</option>
                    <option>hipócrita</option>
                    <option>ignorante</option>
                    <option>impaciente</option>
                    <option>impertinente</option>
                    <option>impetuoso</option>
                    <option>impiedoso</option>
                    <option>imponderado</option>
                    <option>impostor</option>
                    <option>imprudente</option>
                    <option>impulsivo</option>
                    <option>incompetente</option>
                    <option>inconstante</option>
                    <option>inconveniente</option>
                    <option>incorreto</option>
                    <option>indeciso</option>
                    <option>indecoroso</option>
                    <option>indelicado</option>
                    <option>indiferente</option>
                    <option>infiel</option>
                    <option>inflexível</option>
                    <option>injusto</option>
                    <option>inseguro</option>
                    <option>insensato</option>
                    <option>insincero</option>
                    <option>instável</option>
                    <option>insuportável</option>
                    <option>interesseiro</option>
                    <option>intolerante</option>
                    <option>intransigente</option>
                    <option>irracional</option>
                    <option>irascível</option>
                    <option>irrequieto</option>
                    <option>irresponsável</option>
                    <option>irritadiço</option>
                    <option>malandro</option>
                    <option>maldoso</option>
                    <option>malicioso</option>
                    <option>malvado</option>
                    <option>mandão</option>
                    <option>manhoso</option>
                    <option>maquiavélico</option>
                    <option>medroso</option>
                    <option>mentiroso</option>
                    <option>mesquinho</option>
                    <option>narcisista</option>
                    <option>negligente</option>
                    <option>nervoso</option>
                    <option>neurótico</option>
                    <option>obcecado</option>
                    <option>odioso</option>
                    <option>oportunista</option>
                    <option>orgulhoso</option>
                    <option>pedante</option>
                    <option>pessimista</option>
                    <option>pé-frio</option>
                    <option>possessivo</option>
                    <option>precipitado</option>
                    <option>preconceituoso</option>
                    <option>preguiçoso</option>
                    <option>prepotente</option>
                    <option>presunçoso</option>
                    <option>problemático</option>
                    <option>quezilento</option>
                    <option>rancoroso</option>
                    <option>relapso</option>
                    <option>rigoroso</option>
                    <option>rabugento</option>
                    <option>rude</option>
                    <option>sarcástico</option>
                    <option>sedentário</option>
                    <option>teimoso</option>
                    <option>tímido</option>
                    <option>tirano</option>
                    <option>traiçoeiro</option>
                    <option>traidor</option>
                    <option>trapaceiro</option>
                    <option>tendencioso</option>
                    <option>trocista</option>
                    <option>vagabundo</option>
                    <option>vaidoso</option>
                    <option>vulnerável</option>
                    <option>vigarista</option>
                    <option>xenófobo</option>

                  </select>
                </div>

                <div class="select is-info mr-3 mb-3">
                  <select>

                    <option>Gênero Literário Favorito</option>
                    <option>Fantasia</option>
                    <option>Ficção científica</option>
                    <option>Distopia</option>
                    <option>Ação e aventura</option>
                    <option>Ficção Policial</option>
                    <option>Horror</option>
                    <option>Thriller e Suspense</option>
                    <option>Ficção histórica</option>
                    <option>Romance</option>
                    <option>Biografia</option>
                    <option>Gastronomia</option>
                    <option>Arte e Fotografia</option>
                    <option>Autoajuda</option>
                    <option>História</option>
                    <option>Viagem</option>
                    <option>Crimes Reais</option>
                    <option>Humor</option>
                    <option>Ensaios</option>
                  </select>
                </div>


                <div class="select is-info mr-3">
                  <select>
                    <option>Gênero de Filme Favorito</option>
                    <option>Ação</option>
                    <option>Aventura</option>
                    <option>Cinema de arte</option>
                    <option>Chanchada</option>
                    <option>Comédia</option>
                    <option>Comédia de ação</option>
                    <option>Comédia de terror</option>
                    <option>Comédia dramática</option>
                    <option>Dança</option>
                    <option>Documentário</option>
                    <option>Docuficção</option>
                    <option>Drama</option>
                    <option>Espionagem</option>
                    <option>Faroeste</option>
                    <option>Fantasia</option>
                    <option>Fantasia científica</option>
                    <option>Ficção científica</option>
                    <option>Filmes com truques</option>
                    <option>Filmes de guerra</option>
                    <option>Mistério</option>
                    <option>Musical</option>
                    <option>Filme policial</option>
                    <option>Romance</option>
                    <option>Terror</option>
                    <option>Thriller</option>

                  </select>
                </div>
                <br>
                <br>
                <button class="button mb-4  mt-1 is-info is-responsive">Pesquisar</button>

                <button class="button mb-4  mt-1 is-info is-responsive w3-right"
                  onclick="document.getElementById('id01').style.display='none'">Close</button>
                <br>
                <br>
              </form>

          </div>
        </div>
      </div>

    </div>

    <div class="w3-container">
      <button onclick="document.getElementById('id02').style.display='block'"
        class="w3-button w3-blue w3-large w3-right" style="border-radius: 20px">Ver Match do Dia!</button>

      <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <header class="w3-container w3-blue">
              <h2>Match do Dia!</h2>
            </header>
            <img src="imagens/logo.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">
            </div>
          </form>

          <div style="text-align: center" class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id02').style.display='none'" type="button"
              class="w3-button w3-blue">Iniciar Conversa</button>
            <button onclick="document.getElementById('id02').style.display='none'" type="button"
              class="w3-button w3-red">Cancelar</button>
          </div>

        </div>
      </div>
    </div>

  </div>

  </div>

</body>

</html>