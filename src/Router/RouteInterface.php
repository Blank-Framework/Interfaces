<?php

namespace BlankFramework\Interfaces\Router;

use BlankFramework\Interfaces\Responses\ResponseInterface;

interface RouteInterface {
    /**
     * This function returns the controller string that can be used to instantiate the class.
     *
     * @return class-string<RouteInterface>
     */
    public function getController(): string;

    /**
     * This function returns the path associated with the route that will be matched with the URI.
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * This function returns the action or the function that will be called inside the class that will run the functionality for the controller
     *
     * @return string
     */
    public function getMethod(): string;

    public function execute(): ResponseInterface;
}