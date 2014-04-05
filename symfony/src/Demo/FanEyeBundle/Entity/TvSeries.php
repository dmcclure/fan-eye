<?php

namespace Demo\FanEyeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TvSeries
 *
 * @ORM\Table(name="tv_series")
 * @ORM\Entity(repositoryClass="Demo\FanEyeBundle\Entity\TvSeriesRepository")
 */
class TvSeries
{
    public function __construct() {
        $this->winningVotes = new ArrayCollection();
        $this->losingVotes = new ArrayCollection();
    }

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
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="smallint", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="Vote", mappedBy="winner")
     **/
    private $winningVotes;

    /**
     * @ORM\OneToMany(targetEntity="Vote", mappedBy="loser")
     **/
    private $losingVotes;

    /**
     * @var float This is a non-DB field, calculated when displaying the top 5
     */
    private $percentageWon;

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
     * @return TvSeries
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
     * Set description
     *
     * @param string $description
     * @return TvSeries
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
     * @param string $image
     * @return TvSeries
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
     * Set year
     *
     * @param integer $year
     * @return TvSeries
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get winning votes
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getWinningVotes()
    {
        return $this->winningVotes;
    }

    /**
     * Get losing votes
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLosingVotes()
    {
        return $this->losingVotes;
    }

    /**
     * @param mixed $percentageWon
     */
    public function setPercentageWon($percentageWon)
    {
        $this->percentageWon = $percentageWon;
    }

    /**
     * @return mixed
     */
    public function getPercentageWon()
    {
        return $this->percentageWon;
    }
}
