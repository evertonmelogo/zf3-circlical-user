<?php

namespace Spec\CirclicalUser\Factory\Controller\Plugin;

use CirclicalUser\Controller\Plugin\AuthenticationPlugin;
use CirclicalUser\Service\AccessService;
use CirclicalUser\Service\AuthenticationService;
use PhpSpec\ObjectBehavior;
use Zend\Mvc\Controller\PluginManager;
use Zend\ServiceManager\ServiceManager;

class AuthenticationPluginFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CirclicalUser\Factory\Controller\Plugin\AuthenticationPluginFactory');
    }

    function it_supports_factory_interface(PluginManager $pluginLocator, ServiceManager $serviceLocator, AuthenticationService $authenticationService, AccessService $accessService )
    {
        $serviceLocator->get(AuthenticationService::class)->willReturn($authenticationService);
        $serviceLocator->get(AccessService::class)->willReturn($accessService);
        $pluginLocator->getServiceLocator()->willReturn($serviceLocator);

        $this->createService($pluginLocator)->shouldBeAnInstanceOf(AuthenticationPlugin::class);
    }
}
