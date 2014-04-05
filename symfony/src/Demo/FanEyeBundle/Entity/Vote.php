<?php

namespace Demo\FanEyeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity(repositoryClass="Demo\FanEyeBundle\Entity\VoteRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Vote
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
     * @var integer
     *
     * @ORM\Column(name="winner_id", type="integer")
     * @ORM\ManyToOne(targetEntity="TvSeries")
     * @ORM\JoinColumn(name="winner_id", referencedColumnName="id")
     */
    private $winner;

    /**
     * @var integer
     *
     * @ORM\Column(name="loser_id", type="integer")
     * @ORM\ManyToOne(targetEntity="TvSeries")
     * @ORM\JoinColumn(name="loser_id", referencedColumnName="id")
     */
    private $loser;

    /**
     * @var string
     *
     * @ORM\Column(name="remote_ip", type="string", length=45)
     */
    private $remoteIp;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="create_date", type="datetime")
	 */
	private $createDate;

    /**
     * Tell doctrine that before we persist we call this function to initialize the createDate attribute
     *
     * @ORM\PrePersist
     */
    public function initCreateDate()
    {
        if($this->getCreateDate() === null) {
            $this->setCreateDate(new \DateTime());
        }
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
     * Set winner
     *
     * @param integer $winner
     * @return Vote
     */
    public function setWinner($winner){
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return integer 
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set loser
     *
     * @param integer $loser
     * @return Vote
     */
    public function setLoser($loser)
    {
        $this->loser = $loser;

        return $this;
    }

    /**
     * Get loser
     *
     * @return integer 
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * Set remoteIp
     *
     * @param string $remoteIp
     * @return Vote
     */
    public function setRemoteIp($remoteIp)
    {
        $this->remoteIp = $remoteIp;

        return $this;
    }

    /**
     * Get remoteIp
     *
     * @return string 
     */
    public function getRemoteIp()
    {
        return $this->remoteIp;
    }

	/**
	 * Set createDate
	 *
	 * @param \DateTime $createDate
	 * @return Vote
	 */
	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;

		return $this;
	}

	/**
	 * Get createDate
	 *
	 * @return \DateTime
	 */
	public function getCreateDate()
	{
		return $this->createDate;
	}
}
