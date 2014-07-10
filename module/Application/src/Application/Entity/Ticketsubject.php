<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticketsubject
 *
 * @ORM\Table(name="ticketSubject", indexes={@ORM\Index(name="fk_ticketSubject_users1_idx", columns={"users_usrId"}), @ORM\Index(name="fk_ticketSubject_ticketCategory1_idx", columns={"ticketCategory_categoryId"})})
 * @ORM\Entity
 */
class Ticketsubject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ticketId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ticketid;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=45, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \Application\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_usrId", referencedColumnName="usrId")
     * })
     */
    private $usersUsrid;

    /**
     * @var \Application\Entity\Ticketcategory
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Ticketcategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticketCategory_categoryId", referencedColumnName="categoryId")
     * })
     */
    private $ticketcategoryCategoryid;



    /**
     * Get ticketid
     *
     * @return integer 
     */
    public function getTicketid()
    {
        return $this->ticketid;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Ticketsubject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Ticketsubject
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Ticketsubject
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set usersUsrid
     *
     * @param \Application\Entity\Users $usersUsrid
     * @return Ticketsubject
     */
    public function setUsersUsrid(\Application\Entity\Users $usersUsrid = null)
    {
        $this->usersUsrid = $usersUsrid;

        return $this;
    }

    /**
     * Get usersUsrid
     *
     * @return \Application\Entity\Users 
     */
    public function getUsersUsrid()
    {
        return $this->usersUsrid;
    }

    /**
     * Set ticketcategoryCategoryid
     *
     * @param \Application\Entity\Ticketcategory $ticketcategoryCategoryid
     * @return Ticketsubject
     */
    public function setTicketcategoryCategoryid(\Application\Entity\Ticketcategory $ticketcategoryCategoryid = null)
    {
        $this->ticketcategoryCategoryid = $ticketcategoryCategoryid;

        return $this;
    }

    /**
     * Get ticketcategoryCategoryid
     *
     * @return \Application\Entity\Ticketcategory 
     */
    public function getTicketcategoryCategoryid()
    {
        return $this->ticketcategoryCategoryid;
    }
}
