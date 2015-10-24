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
	 * Attach interests to a list of users
	 *
	 * @param $users
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

	/**
	 * Attach user ratings to the content list passed in parameters
	 *
	 * @param $interests
	 * @return mixed
	 */
	public function getUsersFromInterests($interests)
	{
		if ($interests == array()) {
			return array();
		}

		$userInterests = $this->em->getRepository('AppBundle:UserInterest')->findBy(array('interest' => $interests));

		$users = array();
		foreach ($userInterests as $userInterest) {
			if (!in_array($userInterest->getUser(), $users)) {
				$users[] = $userInterest->getUser();
			}
		}

		return $users;
	}

} 