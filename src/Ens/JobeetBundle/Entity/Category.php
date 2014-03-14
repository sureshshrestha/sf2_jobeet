<?php

namespace Ens\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ens\JobeetBundle\Utils\Jobeet;

/**
 * Ens\JobeetBundle\Entity\Category
 */
class Category
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Ens\JobeetBundle\Entity\Job
     */
    private $jobs;

    /**
     * @var Ens\JobeetBundle\Entity\CategoryAffiliate
     */
    private $category_affiliates;

    private $active_jobs;
    private $more_jobs;

    /**
     * @var  string $slug
     */
    private $slug;

    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
    $this->category_affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
      return $this->getName();
    }
    
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add jobs
     *
     * @param Ens\JobeetBundle\Entity\Job $jobs
     */
    public function addJob(\Ens\JobeetBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;
    }

    /**
     * Get jobs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add category_affiliates
     *
     * @param Ens\JobeetBundle\Entity\CategoryAffiliate $categoryAffiliates
     */
    public function addCategoryAffiliate(\Ens\JobeetBundle\Entity\CategoryAffiliate $categoryAffiliates)
    {
        $this->category_affiliates[] = $categoryAffiliates;
    }

    /**
     * Get category_affiliates
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategoryAffiliates()
    {
        return $this->category_affiliates;
    }

    public function setActiveJobs($jobs)
    {
        $this->active_jobs=$jobs;
    }

    public function getActiveJobs()
    {
        return $this->active_jobs;
    }

    // public function getSlug()
    // {
    //     return Jobeet::slugify($this->getName());
    // }

    public function setMoreJobs($jobs)
    {
        $this->more_jobs = $jobs >= 0 ? $jobs : 0;
    }

    public function getMoreJobs()
    {
        return $this->more_jobs;
    }

    /**
    * Set slug
    *
    * @param string $slug
    */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
    /**
    * Get slug
    *
    * @return string
    */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
    * @ORM\prePersist
    */
    public function setSlugValue()
    {
        $this->slug = Jobeet::slugify($this->getName());
    }

}