<?php
/**
 * Abstract Index Service Factory
 *
 * @since     Nov 2015
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */
namespace Search\Query\Service\Factory;

use Search\Query\Service\UserQueryService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserQueryServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return UserIndexService
     */
    public function createService(ServiceLocatorInterface $sm)
    {
        $userQueryService = new UserQueryService($sm->get('search.service.elastica'));

        return $userQueryService;
    }
}
