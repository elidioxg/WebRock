<?php
echo 'teste';
$type = $_SESSION['rock_type'];
echo '<div id="menu">';
echo '    <ul class="categories" id="menulist">';
switch ($type) {
    case "metamorphic":
        echo 'Metamorphic';
        echo '  <li> <a href="./index_metamorphic.php" target="mainframe">Ver Registros</a></li>';
        echo '  <li> <a href="./add_metamorphic.php" target="mainframe">Adicionar</a></li>';
        echo '  <li> <a href="">Modificar</a></li>';
        echo '  <li> <a href="">Adicionar Imagem</a></li>';
        echo '  <li> <a href="">Excluir</a></li>';
        break;
    case "magmatic":
        echo 'Magmatic';
        echo '  <li> <a href="./index_magmatic.php >Ver Registros</a></li>';
        echo '  <li> <a href="./add_magmatic.php" >Adicionar</a></li>';
        echo '  <li> <a href="">Modificar</a></li>';
        echo '  <li> <a href="">Adicionar Imagem</a></li>';
        echo '  <li> <a href="./form_exclude.php">Excluir</a></li>';
        break;
    default :
        echo '<h3> Error. Contact admin</h3>';
        break;
}
echo '    </ul>';
echo '</div>';
