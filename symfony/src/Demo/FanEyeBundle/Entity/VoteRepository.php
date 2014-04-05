<?php

namespace Demo\FanEyeBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * VoteRepository
 */
class VoteRepository extends EntityRepository
{
    /**
     * @param $winnerId int ID of the winning TV series
     * @param $loserId int ID of the losing TV series
     * @param $remoteIp string The user's IP address
     * @return int The percentage match of this vote compared with all others
     */
    public function createVote($winnerId, $loserId, $remoteIp) {
        // Insert the new vote
        $vote = new Vote();
        $vote->setWinner($winnerId);
        $vote->setLoser($loserId);
        $vote->setRemoteIp($remoteIp);

        $em = $this->getEntityManager();
        $em->persist($vote);

        // Find out what % this vote matches other votes for the same two TV series combination.

        // Find how many times this same winner/loser combination was voted
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('count(v.id)')
           ->from('DemoFanEyeBundle:Vote', 'v')
           ->where('v.winner = :winner_id')
           ->andWhere('v.loser = :loser_id')
           ->setParameters(['winner_id'=>$winnerId, 'loser_id'=>$loserId]);

        $numSameVotes = $qb->getQuery()->getSingleScalarResult();

        // Find out how many votes there have been for the same two TV series, but with winner and loser swapped
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('count(v.id)')
            ->from('DemoFanEyeBundle:Vote', 'v')
            ->where('v.winner = :winner_id')
            ->andWhere('v.loser = :loser_id')
            ->setParameters(['winner_id'=>$loserId, 'loser_id'=>$winnerId]);

        $numOppositeVotes = $qb->getQuery()->getSingleScalarResult();

        $pctMatch = 0;
        $totalVotes = $numSameVotes + $numOppositeVotes;
        if ($totalVotes > 0) {
            $pctMatch = $numSameVotes / (float)$totalVotes * 100;
            $pctMatch = round($pctMatch);
        }

        // Persist the new vote to the DB
        $em->flush();

        return $pctMatch;
    }
}
