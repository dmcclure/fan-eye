<?php

namespace Demo\FanEyeBundle\Controller;

use Demo\FanEyeBundle\Entity\Complaint;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // Load two random sci-fi shows to use in the vote
        $candidates = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->findVoteCandidates();

        // Load the current top 5
        $top5 = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->findTop5();

        return $this->render('DemoFanEyeBundle:Default:index.html.twig', ['candidates'=>$candidates, 'top5'=>$top5]);
    }

    public function voteAction($winnerId, $loserId)
    {
        // Save the user's vote
        $clientIp = $this->container->get('request')->getClientIp();
        $pctMatch = $this->getDoctrine()->getRepository('DemoFanEyeBundle:Vote')->createVote($winnerId, $loserId, $clientIp);

        // Load two random sci-fi shows to use in the next vote, not including either of the series the user just voted for
        $candidates = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->findVoteCandidates([$winnerId, $loserId]);

        // Load both the winning and losing TV series
        $winner = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->find($winnerId);
        $loser = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->find($loserId);

        // Load the current top 5
        $top5 = $this->getDoctrine()->getRepository('DemoFanEyeBundle:TvSeries')->findTop5();

        return $this->render('DemoFanEyeBundle:Default:vote.html.twig', ['pctMatch'=>$pctMatch, 'candidates'=>$candidates, 'winner'=>$winner, 'loser'=>$loser, 'top5'=>$top5]);
    }

    public function complaintAction(Request $request)
    {
        $complaint = new Complaint();
        $complaint->setName($request->request->get('name'));
        $complaint->setEmail($request->request->get('email'));
        $complaint->setRationalArgument($request->request->get('rationalArgument'));

        $form = $this->createFormBuilder($complaint)
            ->add('name', 'text')
            ->add('email', 'email')
            ->add('rationalArgument', 'textarea')
            ->add('save', 'submit', ['label'=>'Send!'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->render('DemoFanEyeBundle:Default:complaintsent.html.twig');
        }
        return $this->render('DemoFanEyeBundle:Default:complaint.html.twig', ['form' => $form->createView()]);
    }
}
