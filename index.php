<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/style.css">
  <title>Relembrando...</title>
</head>
<body>
  <div class="back">
    <div class="header">
      <nav class="navbar centralizer">
        <ul>
          <li>
            <a href="http://fatecjahu.edu.br">
              <img id="logo-fatec" src="assets/img/logo_topo.png" alt="Logo Fatec Jahu">
            </a>
          </li>
          <li>
            <div class="centralized centralized-v">
              <a  id='title' href="#">Relembrando HTML <s>e CSS</s></a>
            </div>
          </li>
          <li><div class="centralized centralized-v"><a href="#teste-padrao">Seção inicial</a></div></li>
          <li><div class="centralized centralized-v"><a href="#section-tabela">Seção tabela</a></div></li>
        </ul>
      </nav>
      <hr>
    </div>
    <div class="main">
      <div id="teste-padrao" class="sliding">
        <h2><?="Hello World!"?></h2>
        <p>Spicy jalapeno bacon ipsum dolor amet tenderloin cow tail tri-tip. Landjaeger pork loin tail, t-bone tri-tip cupim pancetta shank ball tip ground round. Capicola bacon swine, tail chuck jowl frankfurter shankle ribeye. Ground round jowl venison tongue picanha. Prosciutto filet mignon fatback pork ribeye shank, spare ribs strip steak chuck meatloaf andouille.</p>
        <p>Shank cupim tri-tip, boudin frankfurter pork chop pork belly shankle pig capicola ground round cow doner. Swine short ribs salami meatball andouille ground round bresaola doner landjaeger pig jowl tenderloin. Corned beef drumstick prosciutto pork chop picanha pig. Kevin alcatra pork chop, leberkas pancetta chicken picanha chuck sirloin swine biltong. Boudin ham hock pork loin porchetta short loin alcatra sausage frankfurter drumstick biltong bacon. Picanha turducken chicken, filet mignon turkey pork belly swine beef ribs alcatra kielbasa andouille burgdoggen pig tail. Shank kevin pancetta boudin ball tip pastrami.</p>
      </div>
      <div id="section-tabela" class="section-tabela sliding">
        <table id="disciplinas">
          <tr>
            <th>Disciplina</th>
            <th>Média Final</th>
          </tr>
          <tr>
            <td>Algoritimos</td>
            <td class="numeric">9.0</td>
          </tr>
          <tr>
            <td>Banco de Dados</td>
            <td class="numeric">8.0</td>
          </tr>
        </table>
        <table id="disciplinas">
          <tr><th>Bandeira</th><th>País</th><th>Moeda</th></tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAwFBMVEV1qtv////u7u5no9nm6e1uptqnx+fx8/T8v0nz9vf/y07u7Oq+nY6VUze8op67eiydVh+CMA/enzujXSHOjjV2AACxiHd7JQnq5eLf1dDTw761koiWTyy5ch6jXi33ukeFMACbXkGdZlPpqzzl7vjK2+y60+uHtd+QTDjQvLObTxG6mpP/0VCRRRi0cSmXXE6pWwDXli2XvePXx7qAIgCmdWPYiUTqembSji3wrEfppEfAY0DNeEK7Wj+ZYljimUW6Jii0AAACx0lEQVRoge2aW3OiMBSAabsaDnhBlEuICIgKXmpLvVR72f7/f7UJdnqZ7gvpypnt5HtAYUY/kpwcEuZoF5hoyq7syq7syq7syv6T7ZPprHl+ZtPJVzvMskZdZDP4bJ9pDa0+Gtrsoz27qtEtuMre7JDV2fATjQxe7Xf1y7n+7mRvYsi5vinsExw510+4HaXfS/vdhYbWdNF4bYpon2pNNDmPOy3Ds6O6FQqFQqE4L1eYaL++xeZ7P9cu5fBNcSQuER+mL/kvsnazJbz+jfCSllmzHRLK9TSmXE4TqM9edjawnH+bO3N+ljN4u35uO9n43EMChwGwW3FwAnHB3FTXS7TdHwe8rdRaUBgXY6ALi3c/BGOJ0JPp+WDLTGImdg7DdAh5kfAztg1q6Xkx5ts2hV0auiN95IbpDmh7y2QiTyrmzXYRd5YHI+6uurFxWHbioi016SrafROA8DkWr0JvnVq9656Vrr1wFfP5RwCqpp2KdrOVsICa0AkN2+vbURTZfc82wg6YNGBJ1bRTtecJzR0r2S092xroJwaW7S13ieXktGrgVR53cskWRXpYewPj1W4MvPUhLRaser6RiDqgeWikff2dfroKcyoR9BK5DgDc2LJ1/Xjk5oeHSLet2AURjue1E+LTORsPR91eFD0+Pu/1p+fnxyjqdUfDMZtTn1S7g0p2snF/x85tkeqra11/edqn+nG/f9Cj65WeFrdOfONWS/bybf8w7vW0/XQHb+MuvOVN1DTuJe8xf7y/vz+WMW/UFPOf5nskwr7G+Y6a63ieb+Hledxn3Ams53sJ6toGd13n3/x9TSvR9//dev7rXqZV317mBNo+rgR3D/uP9u+47y5w39soFAqFQvFTwa09QKr1ETSayDUnuPU2uLVGyHVWuDVmyPV1yLWFuHWV2DWlyPW0yLXEOCi7siu7siu7siv7z7P/AY/hi0ISQu9CAAAAAElFTkSuQmCC" alt="Argentina">
            </td>
            <td>Argentina</td>
            <td>Peso argentino</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/206/206702.svg" alt="Bolívia">
            </td>
            <td>Bolívia</td>
            <td>Boliviano</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330430.svg" alt="Brasil">
            </td>
            <td>Brasil</td>
            <td>Real</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330554.svg" alt="Chile">
            </td>
            <td>Chile</td>
            <td>Peso chileno</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330508.svg" alt="Colômbia">
            </td>
            <td>Colômbia</td>
            <td>Peso colombiano</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330581.svg" alt="Equador">
            </td>
            <td>Equador</td>
            <td>Dólar dos EUA</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_Guyana.svg/2000px-Flag_of_Guyana.svg.png" alt="Guiana">
            </td>
            <td>Guiana</td>
            <td>Dólar da Guiana</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/321/321231.svg" alt="GuianaFrancesa">
            </td>
            <td>Guiana Francesa</td>
            <td>Euro</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/630/630623.svg" alt="Paraguai">
            </td>
            <td>Paraguai</td>
            <td>Guarani</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/321/321204.svg" alt="Peru">
            </td>
            <td>Peru</td>
            <td>Novo sol</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330609.svg" alt="Suriname">
            </td>
            <td>Suriname</td>
            <td>Dólar do Suriname</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330597.svg" alt="Uruguai">
            </td>
            <td>Uruguai</td>
            <td>Peso uruguaio</td>
          </tr>
          <tr>
            <td class="icone">
              <img class="icone-bandeira" src="https://image.flaticon.com/icons/svg/330/330546.svg" alt="Venezuela">
            </td>
            <td>Venezuela</td>
            <td>Bolívar Soberano / Petro</td>
          </tr>
        </table>
        <?php 
          $tables = file_get_contents("assets\json\data.json"); 
          $tables = json_decode($tables);
          foreach($tables as $table){
            ?>
            <table>
              <tr>
                <th><?= var_dump($table) ?></th>
              </tr>
            </table>
            <?php
          }
        ?>
      </div>
      <div class="footer">
        todos os direitos reservados
      </div>
    </div>
  </div>
</body>
</html>