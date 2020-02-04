<?php // проверка соответствия url и роутеров в файле routes.php
	namespace Core;
	
	class Router
	{
		public function getTrack($routes, $uri)
		{
            
			foreach ($routes as $route) {
				if ($route->path) { //проверка соответствия роута и URI /test/
					$path_route = stristr($route->path, ':', true);
					
					if (preg_match ("#".$path_route."#", $uri)) {
						$uri = preg_replace("#".$path_route."#"," ", $uri);
						
						$uri = trim($uri, '/');
						$array_uri = explode ("/",$uri);
						$params = [];
						$j = 1;
						foreach ($array_uri as $v) {
							$params['var'.$j] = $v;
							$j++; 
						}
						
						return new Track ($route->controller, $route->action, $params);

					}	
				}
			}
			return new Track('error', 'notFound', 'Роутер не найден!'); // если ни один роут не подойдет
		}
	}
?>