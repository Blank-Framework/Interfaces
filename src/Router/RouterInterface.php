<?php

namespace BlankFramework\Interfaces\Router;

interface RouterInterface {
    /**
     * This function should return an array of preferably RouteInterfaces which will basically be an array of routes.
     *
     * @return RouteInterface[]
     */
    public function getRouteList(): iterable;

    /**
     * This function should look for and match a route within your route list.
     *
     * @param string $requestUri This is the portion after the domain name that should match to the route configuration
     * @return RouteInterface|null
     */
    public function match(string $requestUri): ?RouteInterface;
}