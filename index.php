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
        <hr>
      </nav>
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
        <?php 
          $tables = file_get_contents("assets\json\data.json"); 
          $tables = json_decode($tables, true);
          foreach($tables as $table){
            ?>
            <table>
              <tr>
                <?php 
                  $titles = $table["titles"];
                  foreach($titles as $title){
                    ?>
                    <th><?=$title?></th>
                    <?php
                  }?>
              </tr>
              <?php
              $data = $table["data"];
              foreach($data as $infos){
                ?>
                <tr>
                  <?php
                    foreach($infos as $column_name => $column){
                      $is_flag = $column_name == "flag-url";
                      ?>
                      <td class="<?=$is_flag?"icone":""?>">
                        <?php
                          if($is_flag){
                            ?>
                            <img class="icone-bandeira" src="<?=$column?>"/>
                            <?php
                          }else{
                            echo $column;
                          }?></td>
                      <?php
                    }
                  ?>
                </tr>
                <?php
              }
              ?>
            </table>
            <?php
          }
        ?>
      </div>
      <div class="footer">
        Todos os direitos reservados
      </div>
    </div>
  </div>
</body>
</html>