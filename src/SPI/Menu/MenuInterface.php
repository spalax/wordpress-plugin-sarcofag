<?php
namespace Sarcofag\SPI\Menu;

interface MenuInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getDescription();
}
