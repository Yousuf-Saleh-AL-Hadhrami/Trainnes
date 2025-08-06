<?php 

if (! function_exists('localized_route')) {
    function localized_route(string $name, array $params = [], bool $absolute = true)
    {
        $params = array_merge(['lang' => app()->getLocale()], $params);
        return route($name, $params, $absolute);
    }
}
