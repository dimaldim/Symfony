<?php

namespace Proxies\__CG__\EShopBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \EShopBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'content', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'pictureUrl', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'dateAdded', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'authorId', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'author', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'viewCount', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'productCarts'];
        }

        return ['__isInitialized__', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'content', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'pictureUrl', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'dateAdded', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'authorId', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'author', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'viewCount', '' . "\0" . 'EShopBundle\\Entity\\Product' . "\0" . 'productCarts'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getProductCarts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductCarts', []);

        return parent::getProductCarts();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductCarts(\Doctrine\Common\Collections\ArrayCollection $productCarts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductCarts', [$productCarts]);

        return parent::setProductCarts($productCarts);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setPictureUrl($pictureUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPictureUrl', [$pictureUrl]);

        return parent::setPictureUrl($pictureUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictureUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictureUrl', []);

        return parent::getPictureUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorId($authorId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorId', [$authorId]);

        return parent::setAuthorId($authorId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorId', []);

        return parent::getAuthorId();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewCount($viewCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewCount', [$viewCount]);

        return parent::setViewCount($viewCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewCount', []);

        return parent::getViewCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor(\EShopBundle\Entity\User $author = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

}