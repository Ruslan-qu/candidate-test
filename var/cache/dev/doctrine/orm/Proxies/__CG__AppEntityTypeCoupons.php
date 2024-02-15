<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TypeCoupons extends \App\Entity\TypeCoupons implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'type_coupon', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'coupons_type_coupon1'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'type_coupon', '' . "\0" . 'App\\Entity\\TypeCoupons' . "\0" . 'coupons_type_coupon1'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TypeCoupons $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getTypeCoupon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeCoupon', []);

        return parent::getTypeCoupon();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeCoupon(string $type_coupon): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeCoupon', [$type_coupon]);

        return parent::setTypeCoupon($type_coupon);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponsTypeCoupon1(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponsTypeCoupon1', []);

        return parent::getCouponsTypeCoupon1();
    }

    /**
     * {@inheritDoc}
     */
    public function addCouponsTypeCoupon1(\App\Entity\Coupons $couponsTypeCoupon1): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCouponsTypeCoupon1', [$couponsTypeCoupon1]);

        return parent::addCouponsTypeCoupon1($couponsTypeCoupon1);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCouponsTypeCoupon1(\App\Entity\Coupons $couponsTypeCoupon1): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCouponsTypeCoupon1', [$couponsTypeCoupon1]);

        return parent::removeCouponsTypeCoupon1($couponsTypeCoupon1);
    }

}
