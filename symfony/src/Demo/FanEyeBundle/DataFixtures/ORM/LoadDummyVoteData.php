<?php
namespace Demo\FanEyeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Demo\FanEyeBundle\Entity\Vote;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class LoadDummyVoteData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }

    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        // Find the IDs of all the TV series
        $em = $this->container->get('doctrine')->getEntityManager('default');
        $result = $em->createQuery('SELECT s.id FROM DemoFanEyeBundle:TvSeries s')->getScalarResult();
        $ids = array_map('current', $result);

        // Create 3 random vote entries for every possible TV series combination
        for ($i = 0; $i < count($ids); $i++) {
            for ($j = 0; $j < count($ids); $j++) {
                if ($ids[$i] == $ids[$j]) {
                    continue;
                }

                for ($k = 0; $k < 3; $k++) {
                    // Randomly select which is the winner
                    if (mt_rand(0, 1) == 1) {
                        $winnerId = $ids[$i];
                        $loserId = $ids[$j];
                    }
                    else {
                        $winnerId = $ids[$j];
                        $loserId = $ids[$i];
                    }

                    $vote = new Vote();
                    $vote->setWinner($winnerId);
                    $vote->setLoser($loserId);
                    $vote->setRemoteIp('0.0.0.0');
                    $manager->persist($vote);
                }
            }
        }

        $manager->flush();
    }
}