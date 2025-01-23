<?php 
namespace App\Libraries;

class MenuAtivo
{
    public function linkAtivo(string $uri, string $classe = 'active'): string
    {
        $request = \Config\Services::request();
        $currentUri = $request->getUri()->getPath(); // Pega o caminho da URI atual

        // Remove a / do início da string, se houver
        $currentUri = ltrim($currentUri, '/');

        // Verifica se a URI atual é a mesma que a URI do link
        if ($currentUri === $uri) {
            return $classe;
        }

        // Verifica se a URI atual CONTÉM a URI do link (útil para submenus)
        $uri = rtrim($uri, '/');
        if (strpos($currentUri, $uri) === 0) {
            return $classe;
        }

        return '';
    }
}