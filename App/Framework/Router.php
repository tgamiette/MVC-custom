use Controller\ErrorController; //TODO


class Router
{
    public function getController()
    {
        $xml = new \DOMDocument();
        $xml->load('./routes.xml');
        $routes = $xml->getElementsByTagName('route');

        isset($_GET['p']) ? path = htmlspecialchars($_GET['p']) : $path = "";

        foreach ($routes as $route) {
            if ($path === $route->getAttribute('p')) {
                $controllerClass = 'Controller\\' . $route->getAttribute('controller');
                $action = $route->getAttribute('action');
                $params = [];
                if ($route->hasAttribute('params')) {
                    $keys = explode(',', $route->getAttribute('params'));
                    foreach ($keys as $key) {
                        $params[$key] = $_GET[$key];
                    }
                }
                return new $controllerClass($action, $params);
            }
        }

        return new ErrorController('noRoute');
    }
}