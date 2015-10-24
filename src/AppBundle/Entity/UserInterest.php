<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInterest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserInterestRepository")
 */
class UserInterest
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
	 * @var \DateTime
	 *
	 * @ORM\Column(name="date", type="datetime")
	 */
	private $date;

	/**
	 * @var User
	 *
	 * @ORM\ManyToOne(targetEntity="User", cascade={"merge"})
	 * @ORM\JoinColumn(name="user", referencedColumnName="id")
	 */
	protected $user;

	/**
	 * @var Interest
	 *
	 * @ORM\ManyToOne(targetEntity="Interest", cascade={"merge"})
	 * @ORM\JoinColumn(name="interest", referencedColumnName="id")
	 */
	protected $interest;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


	public function __construct()
	{
		$this->setDate(new \DateTime());
	}


	/**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UserInterest
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

	/**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

	/**
	 * Get user
	 *
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * Set user
	 *
	 * @param User $user
	 * @return UserInterest
	 */
	public function setUser($user)
	{
		$this->user = $user;

		return $this;
	}

	/**
	 * Set interest
	 *
	 * @param Interest $interest
	 * @return UserInterest
	 */
	public function setInterest($interest)
	{
		$this->interest = $interest;

		return $this;
	}

	/**
	 * Get interest
	 *
	 * @return Interest
	 */
	public function getInterest()
	{
		return $this->interest;
	}

}

