<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation as JMS;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
	/**
	 * @var integer
	 * @JMS\Type("integer")
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
	 */
	private $facebookId;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="string", length=5000, nullable=true)
	 */
	private $description;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="image", type="string", length=255, nullable=true)
	 */
	private $image;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
	 */
	private $firstName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
	 */
	private $lastName;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="date_register", type="datetime")
	 */
	private $dateRegister;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="locale", type="string", length=10, nullable=true)
	 */
	private $locale;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="gender", type="string", length=50, nullable=true)
	 */
	private $gender;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="type", type="string", length=50, nullable=true)
	 */
	private $type;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="meeting_pref", type="string", length=50, nullable=true)
	 */
	private $meetingPref;

	/**
	 * @var Interest $interests
	 */
	private $interests;

	public function __construct()
	{
		parent::__construct();
		$this->dateRegister = new \DateTime();
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
	 * Set facebookId
	 *
	 * @param string $facebookId
	 * @return User
	 */
	public function setFacebookId($facebookId)
	{
		$this->facebookId = $facebookId;

		return $this;
	}

	/**
	 * Get facebookId
	 *
	 * @return string
	 */
	public function getFacebookId()
	{
		return $this->facebookId;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return User
	 */
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set image
	 *
	 * @param string $cover
	 * @return User
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
	 * Set firstName
	 *
	 * @param string $firstName
	 * @return User
	 */
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * Get firstName
	 *
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * Set lastName
	 *
	 * @param string $lastName
	 * @return User
	 */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;

		return $this;
	}

	/**
	 * Get lastName
	 *
	 * @return string
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * Set dateRegister
	 *
	 * @param \DateTime $dateRegister
	 * @return User
	 */
	public function setDateRegister($dateRegister)
	{
		$this->dateRegister = $dateRegister;

		return $this;
	}

	/**
	 * Get dateRegister
	 *
	 * @return \DateTime
	 */
	public function getDateRegister()
	{
		return $this->dateRegister;
	}

	/**
	 * Set locale
	 *
	 * @param string $locale
	 * @return User
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;

		return $this;
	}

	/**
	 * Get locale
	 *
	 * @return string
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
	 * Set gender
	 *
	 * @param string $gender
	 * @return User
	 */
	public function setGender($gender)
	{
		$this->gender = $gender;

		return $this;
	}

	/**
	 * Get gender
	 *
	 * @return string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 * @return User
	 */
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Set meetingPref
	 *
	 * @param string $meetingPref
	 * @return User
	 */
	public function setMeetingPref($meetingPref)
	{
		$this->meetingPref = $meetingPref;

		return $this;
	}

	/**
	 * Get meetingPref
	 *
	 * @return string
	 */
	public function getMeetingPref()
	{
		return $this->meetingPref;
	}

	/**
	 * Set interests
	 *
	 * @param array $interests
	 * @return User
	 */
	public function setInterests($interests)
	{
		$this->interests = $interests;

		return $this;
	}

	/**
	 * Get interests
	 *
	 * @return array
	 */
	public function getInterests()
	{
		return $this->interests;
	}

	/**
	 * Add interest to interests
	 *
	 * @param Interest $interest
	 * @return array
	 */
	public function addInterest($interest)
	{
		$interests = ($this->interests == null) ? array() : $this->interests;

		if (!in_array($interest, $interests)) {
			$interests[] = $interest;
		}
		$this->interests = $interests;

		return $this->interests;
	}

	public function __toString()
	{
		return ($this->username != null) ? $this->username : 'null';
	}
}