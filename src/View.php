<?php 

namespace App;

class View {
    
    function displayHtml($data) {
        ob_start();
        include __DIR__ . '/../templates/template.tpl.php';
        $html = ob_get_clean();
    
        return $html;
    }
    
    function displayJson($data) {
        header('Content-Type: application/json');
    
        return json_encode($data);
    }
    
}