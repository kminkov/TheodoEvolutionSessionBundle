<?php

namespace Theodo\Evolution\Bundle\SessionBundle\Manager\ZendFramework1;

use Theodo\Evolution\Bundle\SessionBundle\Manager\BagManagerConfigurationInterface;

/**
 * This class contains configuration for zf1 namespaces
 *
 * @author Jean Ashton <jeana@theodo.fr>
 * @author Marek Kalnik <marekk@theodo.fr>
 */
class BagConfiguration implements BagManagerConfigurationInterface
{
    private $namespaces;

    public function __construct($namespaces)
    {
        $this->namespaces = $namespaces;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace($key)
    {
        return $this->namespaces[$key];
    }

    public function isArray($namespaceName)
    {
        return true;
    }
}
