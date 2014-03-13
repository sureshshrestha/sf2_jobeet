<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ens\JobeetBundle\Entity\CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Ens\JobeetBundle\Entity\Category
     */
    private $category;

    /**
     * @var Ens\JobeetBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param Ens\JobeetBundle\Entity\Category $category
     */
    public function setCategory(\Ens\JobeetBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Ens\JobeetBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param Ens\JobeetBundle\Entity\Affiliate $affiliate
     */
    public function setAffiliate(\Ens\JobeetBundle\Entity\Affiliate $affiliate)
    {
        $this->affiliate = $affiliate;
    }

    /**
     * Get affiliate
     *
     * @return Ens\JobeetBundle\Entity\Affiliate 
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}