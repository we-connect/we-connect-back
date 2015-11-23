<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\InterestRepository")
 */
class Interest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="category", type="string", length=100, nullable=true)
	 */
	private $category;


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
     *
     * @return Interest
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set image
     *
     * @param string $image
     *
     * @return Interest
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Interest
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

	/**
	 * Set category
	 *
	 * @param string $category
	 *
	 * @return Interest
	 */
	public function setCategory($category)
	{
		$this->category = $category;

		return $this;
	}

	/**
	 * Get category
	 *
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
	}
}

