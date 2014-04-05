<?php
namespace Demo\FanEyeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Demo\FanEyeBundle\Entity\TvSeries;

class LoadTvSeriesData implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        $tvSeries = new TvSeries();
        $tvSeries->setName('Firefly');
        $tvSeries->setYear(2002);
        $tvSeries->setDescription("Five hundred years in the future, a renegade crew aboard a small spacecraft tries to survive as they travel the unknown parts of the galaxy and evade warring factions as well as authority agents out to get them.");
        $tvSeries->setImage('firefly.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Twilight Zone');
        $tvSeries->setYear(1959);
        $tvSeries->setDescription("Rod Serling's seminal anthology series focused on ordinary folks who suddenly found themselves in extraordinary, usually supernatural, situations. The stories would typically end with an ironic twist that would see the guilty punished.");
        $tvSeries->setImage('twilight_zone_1959.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Doctor Who');
        $tvSeries->setYear(2005);
        $tvSeries->setDescription("The further adventures of the time traveling alien adventurer and his companions.");
        $tvSeries->setImage('dr_who_2005.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Doctor Who');
        $tvSeries->setYear(1963);
        $tvSeries->setDescription("Time and Space traveling adventures of a Gallifreyan Time Lord only known as the Doctor and his companions, traveling through time and space.");
        $tvSeries->setImage('dr_who_1963.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Battlestar Galactica');
        $tvSeries->setYear(2004);
        $tvSeries->setDescription("When an old enemy, the Cylons, resurface and obliterate the 12 colonies, the crew of the aged Galactica protects a small civilian fleet - the last of humanity - as they journey toward the fabled 13th colony of Earth.");
        $tvSeries->setImage('battlestar_galactica_2004.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('The Prisoner');
        $tvSeries->setYear(1967);
        $tvSeries->setDescription("After resigning, a secret agent is abducted and taken to what looks like an idyllic village, but is really a bizarre prison. His warders demand information. He gives them nothing, but only tries to escape.");
        $tvSeries->setImage('prisoner.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('The X-Files');
        $tvSeries->setYear(1993);
        $tvSeries->setDescription("Two FBI agents, Fox Mulder the believer and Dana Scully the skeptic, investigate the strange and unexplained while hidden forces work to impede their efforts.");
        $tvSeries->setImage('x_files.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Star Trek: The Next Generation');
        $tvSeries->setYear(1987);
        $tvSeries->setDescription("Set decades after Captain James T. Kirk's 5-year mission, a new generation of Starfleet officers in a new Enterprise set off on their own mission to go where no one has gone before.");
        $tvSeries->setImage('star_trek_tng.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Red Dwarf');
        $tvSeries->setYear(1988);
        $tvSeries->setDescription("The adventures of the last human alive and his friends, stranded three million years into deep space on the mining ship Red Dwarf.");
        $tvSeries->setImage('red_dwarf.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Fringe');
        $tvSeries->setYear(2008);
        $tvSeries->setDescription("A television drama centered around a female FBI agent who is forced to work with an institutionalized scientist in order to rationalize a brewing storm of unexplained phenomena.");
        $tvSeries->setImage('fringe.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Stargate SG-1');
        $tvSeries->setYear(1997);
        $tvSeries->setDescription("A secret military team, SG-1, is formed to explore the recently discovered Stargates.");
        $tvSeries->setImage('stargate_sg1.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Star Trek: The Original Series');
        $tvSeries->setYear(1966);
        $tvSeries->setDescription("Captain James T. Kirk and the crew of the Starship Enterprise explore the Galaxy and defend the United Federation of Planets.");
        $tvSeries->setImage('star_trek_tos.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Farscape');
        $tvSeries->setYear(1999);
        $tvSeries->setDescription("Thrown into a distant part of the universe, an Earth astronaut finds himself part of a fugitive alien starship crew.");
        $tvSeries->setImage('farscape.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Almost Human');
        $tvSeries->setYear(2013);
        $tvSeries->setDescription("In a not-so-distant future, human cops and androids partner up to protect and serve.");
        $tvSeries->setImage('almost_human.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Babylon 5');
        $tvSeries->setYear(1994);
        $tvSeries->setDescription("A space station in neutral territory is the focus of a unique five year saga.");
        $tvSeries->setImage('babylon5.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Quantum Leap');
        $tvSeries->setYear(1989);
        $tvSeries->setDescription("Scientist Sam Beckett finds himself trapped in time--\"leaping\" into the body of a different person in a different time period each week.");
        $tvSeries->setImage('quantum_leap.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Stargate: Atlantis');
        $tvSeries->setYear(2004);
        $tvSeries->setDescription("An international team of scientists and military personnel discover a Stargate network in the Pegasus Galaxy and come face-to-face with a new, powerful enemy, The Wraith.");
        $tvSeries->setImage('stargate_atlantis.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Jericho');
        $tvSeries->setYear(2006);
        $tvSeries->setDescription("A small town in Kansas is literally left in the dark after seeing a mushroom cloud over near-by Denver, Colorado. The townspeople struggle to find answers about the blast and solutions on how to survive.");
        $tvSeries->setImage('jericho.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('The Hitch Hiker\'s Guide to the Galaxy');
        $tvSeries->setYear(1981);
        $tvSeries->setDescription("An Earth man and his alien friend escape Earth's destruction and go on a truly strange adventure as space hitchhikers.");
        $tvSeries->setImage('hitch_hikers.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Star Trek: Deep Space Nine');
        $tvSeries->setYear(1993);
        $tvSeries->setDescription("Orbiting the liberated planet of Bajor, a Federation space station guards the opening of a stable wormhole to the far side of the Galaxy.");
        $tvSeries->setImage('star_trek_ds9.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('The Twilight Zone');
        $tvSeries->setYear(1985);
        $tvSeries->setDescription("A collection of tales which range from comic to tragic, but often have a wicked sense of humor and an unexpected twist.");
        $tvSeries->setImage('twilight_zone_1985.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Heroes');
        $tvSeries->setYear(2006);
        $tvSeries->setDescription("They thought they were like everyone else... until they woke with incredible abilities.");
        $tvSeries->setImage('heroes.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Torchwood');
        $tvSeries->setYear(2006);
        $tvSeries->setDescription("The members of the Torchwood Institute, a secret organization founded by the British Crown, fight to protect the Earth from extraterrestrial and supernatural threats.");
        $tvSeries->setImage('torchwood.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Terminator: The Sarah Connor Chronicles');
        $tvSeries->setYear(2008);
        $tvSeries->setDescription("Set after the events in 'Terminator 2' Sarah Connor and her son John, trying to stay under-the-radar from the government as they plot to destroy the computer network Skynet in hopes of preventing Armageddon.");
        $tvSeries->setImage('terminator_sarah_connor_chronicles.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('SGU Stargate Universe');
        $tvSeries->setYear(2009);
        $tvSeries->setDescription("Trapped on an Ancient spaceship billions of light years from home, a group of soldiers and civilians struggle to survive and find their way back to Earth.");
        $tvSeries->setImage('stargate_sgu.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Star Trek: Voyager');
        $tvSeries->setYear(1995);
        $tvSeries->setDescription("Pulled to the far side of the Galaxy, where the Federation is 75 years away at maximum warp speed, a Starfleet ship must cooperate with Maquis rebels to find a way home.");
        $tvSeries->setImage('star_trek_voyager.jpg');
        $manager->persist($tvSeries);

        $tvSeries = new TvSeries();
        $tvSeries->setName('Star Trek: Enterprise');
        $tvSeries->setYear(2001);
        $tvSeries->setDescription("A prequel series, set 100 years before the original Star Trek series, which focuses on the early years of Starfleet, leading up to the formation of the Federation and the Earth-Romulan Wars. The series is set aboard the Earth ship Enterprise NX-01, captained by Jonathan Archer.");
        $tvSeries->setImage('star_trek_enterprise.jpg');
        $manager->persist($tvSeries);
        
        $manager->flush();
    }
}