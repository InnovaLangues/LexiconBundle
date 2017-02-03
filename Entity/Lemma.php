<?php

namespace Innova\LexiconBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lemma.
 *
 * @ORM\Table(name="lexicon.lemma")
 * @ORM\Entity(repositoryClass="Innova\LexiconBundle\Repository\Lexicon\LemmaRepository")
 */
class Lemma
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
    protected $language;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Category")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Subcategory")
     */
    private $subcategory;

    /**
     * @ORM\ManyToOne(targetEntity="Innova\LexiconBundle\Entity\Gender")
     */
    private $gender;

    /**
     * @var bool
     *
     * @ORM\Column(name="locution", type="boolean", length=255)
     */
    private $locution;

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
     * @return Lemma
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
     * Set locution.
     *
     * @param bool $locution
     *
     * @return Lemma
     */
    public function setLocution($locution)
    {
        $this->locution = $locution;

        return $this;
    }

    /**
     * Get locution.
     *
     * @return bool
     */
    public function getLocution()
    {
        return $this->locution;
    }

    /**
     * Set phonetic1.
     *
     * @param string $phonetic1
     *
     * @return Lemma
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
     * @return Lemma
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
     * Set category.
     *
     * @param \Innova\LexiconBundle\Entity\Category $category
     *
     * @return Lemma
     */
    public function setCategory(\Innova\LexiconBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \Innova\LexiconBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subcategory.
     *
     * @param \Innova\LexiconBundle\Entity\Subcategory $subcategory
     *
     * @return Lemma
     */
    public function setSubcategory(\Innova\LexiconBundle\Entity\Subcategory $subcategory = null)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory.
     *
     * @return \Innova\LexiconBundle\Entity\Subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set gender.
     *
     * @param \Innova\LexiconBundle\Entity\Gender $gender
     *
     * @return Lemma
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
     * Set language.
     *
     * @param \Innova\LexiconBundle\Entity\Language $language
     *
     * @return Lemma
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
}
