<?php
/**
 * Arquivo para adaptação da aplicação para Português-Brasil
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @author        Juan Basso <jrbasso@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

use Cake\Core\Plugin;

// Tradução das mensagens do core
include Plugin::path('CakePtbr') . 'config' . DS . 'traducao_core.php';

// Alteração das regras de inflections
include Plugin::path('CakePtbr') . 'config' . DS . 'inflections.php';
