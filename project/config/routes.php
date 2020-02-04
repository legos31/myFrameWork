<?

use \Core\Route;

return [
    new Route('/test/new/:var1/:var2/', 'test', 'new'),
    new Route('/test/:var1/', 'test', 'index'),
    ];
    
?>