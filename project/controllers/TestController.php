<?
namespace Project\Controllers;
use Core\Controller;
use Core\Model;

class TestController extends Controller{
   
   public function index ($params) {
      $id = $params['var1'];
      $query = "SELECT content FROM `page` WHERE `id` = $id";
      $result = (new Model)->findOne($query);
      $this->title = 'Действие index контроллера Test';
      return $this->render('test/test', $result);
   }
   
   public function new ($params) {
      
      $query = "SELECT content FROM `page` WHERE `id` = 2";
      $result = (new Model)->findOne($query);
      $this->title = 'Действие New контроллера Test';
      return $this->render('test/new', $result);
   }
}

?>