<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class modelsWishlistProxy extends \models\Wishlist implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function onPrePersist()
    {
        $this->__load();
        return parent::onPrePersist();
    }

    public function getItems()
    {
        $this->__load();
        return parent::getItems();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setUrlTitle($urlTitle)
    {
        $this->__load();
        return parent::setUrlTitle($urlTitle);
    }

    public function getUrlTitle()
    {
        $this->__load();
        return parent::getUrlTitle();
    }

    public function setPublic($public)
    {
        $this->__load();
        return parent::setPublic($public);
    }

    public function getPublic()
    {
        $this->__load();
        return parent::getPublic();
    }

    public function setUser(\models\User $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function addWishlistItems(\models\WishlistItem $wishlistItems)
    {
        $this->__load();
        return parent::addWishlistItems($wishlistItems);
    }

    public function getWishlistItems()
    {
        $this->__load();
        return parent::getWishlistItems();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function __call($method, $args)
    {
        $this->__load();
        return parent::__call($method, $args);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'url_title', 'public', 'user', 'wishlist_items');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}