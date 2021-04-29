<?php

// Configurações globais
require_once ('_config.php');





/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Quem somos';

// CSS da página
$T['pageCSS'] = '/css/template.css';

// JavaScript da página
$T['pageJS'] = '/js/template.js';

// Cabeçalho da página
require_once('_header.php');

?>

            <!-- Conteúdo principal -->
            <article>
            <h3>Quem Somos</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur fugit pariatur laudantium provident, fuga laboriosam eligendi quam veniam ex saepe recusandae iste consequatur expedita illo nihil dolorum debitis architecto numquam.</p>

            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>Barra lateral</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><a href="/">Link 1</a></li>
                    <li><a href="/">Link 2</a></li>
                    <li><a href="/">Link 3</a></li>
                    <li><a href="/">Link 4</a></li>
                </ul>
            </aside>

<?php

// Rodapé da página
require_once ('_footer.php');
