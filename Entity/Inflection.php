<?php

namespace Innova\LexiconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;
use JsonSerializable;

/**
 * Inflection.
 *
 * @ORM\Table(name="lexicon.inflection", indexes={
 *  @Index(name="cleaned_content", columns={"cleaned_content"}),
 * })
 * @ORM\Entity(repositoryClass="Innova\LexiconBundle\Repository\Lexicon\InflectionRepository")
 */
class Inflection implements JsonSerializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Language")
     */
    private $language;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Lemma", cascade={"persist"})
     */
    private $lemma;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="cleaned_content", type="string", length=255)
     */
    private $cleanedContent;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Number")
     */
    private $number;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Gender")
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Tense")
     */
    private $tense;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Person")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Mood")
     */
    private $mood;

    /**
     * @var string
     *
     * @ORM\Column(name="phonetic1", type="string", length=255)
     */
    private $phonetic1;

    /**
     * @var string
     *
     * @ORM\Column(name="phonetic2", type="string", length=255)
     */
    private $phonetic2;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return Inflection
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set phonetic1.
     *
     * @param string $phonetic1
     *
     * @return Inflection
     */
    public function setPhonetic1($phonetic1)
    {
        $this->phonetic1 = $phonetic1;

        return $this;
    }

    /**
     * Get phonetic1.
     *
     * @return string
     */
    public function getPhonetic1()
    {
        return $this->phonetic1;
    }

    /**
     * Set phonetic2.
     *
     * @param string $phonetic2
     *
     * @return Inflection
     */
    public function setPhonetic2($phonetic2)
    {
        $this->phonetic2 = $phonetic2;

        return $this;
    }

    /**
     * Get phonetic2.
     *
     * @return string
     */
    public function getPhonetic2()
    {
        return $this->phonetic2;
    }

    /**
     * Set lemma.
     *
     * @param \Innova\LexiconBundle\Entity\Lemma $lemma
     *
     * @return Inflection
     */
    public function setLemma(\Innova\LexiconBundle\Entity\Lemma $lemma = null)
    {
        $this->lemma = $lemma;

        return $this;
    }

    /**
     * Get lemma.
     *
     * @return \Innova\LexiconBundle\Entity\Lemma
     */
    public function getLemma()
    {
        return $this->lemma;
    }

    /**
     * Set number.
     *
     * @param \Innova\LexiconBundle\Entity\Number $number
     *
     * @return Inflection
     */
    public function setNumber(\Innova\LexiconBundle\Entity\Number $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return \Innova\LexiconBundle\Entity\Number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set gender.
     *
     * @param \Innova\LexiconBundle\Entity\Gender $gender
     *
     * @return Inflection
     */
    public function setGender(\Innova\LexiconBundle\Entity\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return \Innova\LexiconBundle\Entity\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set tense.
     *
     * @param \Innova\LexiconBundle\Entity\Tense $tense
     *
     * @return Inflection
     */
    public function setTense(\Innova\LexiconBundle\Entity\Tense $tense = null)
    {
        $this->tense = $tense;

        return $this;
    }

    /**
     * Get tense.
     *
     * @return \Innova\LexiconBundle\Entity\Tense
     */
    public function getTense()
    {
        return $this->tense;
    }

    /**
     * Set person.
     *
     * @param \Innova\LexiconBundle\Entity\Person $person
     *
     * @return Inflection
     */
    public function setPerson(\Innova\LexiconBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person.
     *
     * @return \Innova\LexiconBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set mood.
     *
     * @param \Innova\LexiconBundle\Entity\Mood $mood
     *
     * @return Inflection
     */
    public function setMood(\Innova\LexiconBundle\Entity\Mood $mood = null)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * Get mood.
     *
     * @return \Innova\LexiconBundle\Entity\Mood
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set cleanedContent.
     *
     * @param string $cleanedContent
     *
     * @return Inflection
     */
    public function setCleanedContent($cleanedContent)
    {
        $this->cleanedContent = $cleanedContent;

        return $this;
    }

    /**
     * Get cleanedContent.
     *
     * @return string
     */
    public function getCleanedContent()
    {
        return $this->cleanedContent;
    }

    /**
     * Set language.
     *
     * @param \Innova\LexiconBundle\Entity\Language $language
     *
     * @return Game
     */
    public function setLanguage(\Innova\LexiconBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return \Innova\LexiconBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'content' => $this->content,
            'cleanedContent' => $this->cleanedContent,
        );
    }
}
