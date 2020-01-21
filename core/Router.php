<?php
	namespace Core;
	
	class Router
	{
		public function getTrack($routes, $uri)
		{
           // var_dump ($routes);
            //var_dump ($uri);
			foreach ($routes as $route) {
        if ($route->path) { //(проверка соответствия роута и URI)
          preg_match_all('#^(\/.+?:)(.+\/)#', $route->path, $array) ;
          $path = $array[1][0];
          $path = preg_replace('#:#','',$path);
          	if ($path == $uri) {
					$params = $array[2][0]; // нужно получить параметры из uri
					var_dump($params)	;
					return new Track($route->controller, $route->action, $params);
				}
				}
			}
			
			return new Track('error', 'route ', 'notFound'); // если ни один роут не подойдет
		}
	}
?>