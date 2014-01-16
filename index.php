<?php

/**
 * 
 *    Este arquivo � parte do Framework MyKing
 *    
 * 
 *    MyKing � um software livre; voc� pode redistribui-lo e/ou 
 *    
 *    modifica-lo dentro dos termos da Licen�a P�blica Geral GNU como 
 *    
 *    publicada pela Funda��o do Software Livre (FSF); na vers�o 2 da 
 *    
 *    Licen�a.
 *    
 *    
 *    Este programa � distribuido na esperan�a que possa ser  util, 
 *    
 *    mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUA��O a qualquer
 *    
 *    MERCADO ou APLICA��O EM PARTICULAR. Veja a
 *    
 *    Licen�a P�blica Geral GNU para maiores detalhes.
 *    
 *    
 *    Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral GNU
 *    
 *    junto com este programa, se n�o, escreva para a Funda��o do Software
 *    
 *    Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


$config = parse_ini_file("system/config/config.ini", true);

foreach ($config["includes"] as $file) {
    require_once "system/" . $file . '.php';
}

// Definir as constante do sistema
Path::getInstancia();

// iniicia aplica��o
$start = new System();
$start->run();

?>