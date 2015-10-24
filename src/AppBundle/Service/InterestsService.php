<?php


namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class InterestsService
{

	/**
	 * @var \Doctrine\ORM\EntityManager
	 */
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	 * Attach user ratings to the content list passed in parameters
	 *
	 * @param $contents
	 * @return mixed
	 */
	public function attachInterests($users)
	{
		if ($users == array()) {
			return array();
		}

		$userInterests = $this->em->getRepository('AppBundle:UserInterest')->findBy(array('user' => $users));

		foreach ($userInterests as $userInterest) {
			$userInterest->getUser()->addInterest($userInterest->getInterest());
		}

		return $users;
	}



} 