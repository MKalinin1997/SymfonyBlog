<?php
// src/Blogger/BlogBundle/Entity/Xml.php

namespace App\Entity;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlKeyValuePairs;
use JMS\Serializer\Annotation\XmlAttribute;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\XmlRepository")
 * @ORM\Table(name="xml")
 * @ORM\HasLifecycleCallbacks
 */

class Xml
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Type("integer")
     */
    protected $id;

    /** @XmlAttribute
     * @Type("string")
     */
    protected $name;

    /** @XmlAttribute
     * @Type("string")
     */
    protected $type;

    /**
     * @AccessType("name")
     * @SerializedName("secname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $secname;

    /**
     * @SerializedName("shortname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $shortname;

    /**
     * @SerializedName("latname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $latname;

    /**
     * @SerializedName("decimals")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $decimals;

    /**
     * @SerializedName("prevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $prevprice;

    /**
     * @SerializedName("boardid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $boardid;

    /**
     * @SerializedName("secid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $secid;

    /**
     * @SerializedName("status")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $status;

    /**
     * @SerializedName("bid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $bid;

    /**
     * @SerializedName("biddepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $biddepth;

    /**
     * @SerializedName("biddeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $biddeptht;

    /**
     * @SerializedName("numbids")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $numbids;

    /**
     * @SerializedName("offer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $offer;

    /**
     * @SerializedName("offerdepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $offerdepth;

    /**
     * @SerializedName("offerdeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $offerdeptht;

    /**
     * @SerializedName("numoffers")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $numoffers;

    /**
     * @SerializedName("open")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $open;

    /**
     * @SerializedName("high")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $high;

    /**
     * @SerializedName("low")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $low;

    /**
     * @SerializedName("last")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $last;

    /**
     * @SerializedName("change")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $changes;

    /**
     * @SerializedName("lastchangeprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lastchangeprcnt;

    /**
     * @SerializedName("lasttoprevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lasttoprevprice;

    /**
     * @SerializedName("qty")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $qty;

    /**
     * @SerializedName("time")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     * @XmlAttribute
     */
    protected $time;

    /**
     * @SerializedName("voltoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $voltoday;

    /**
     * @SerializedName("valtoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $valtoday;

    /**
     * @SerializedName("valtoday_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $valtoday_usd;

    /**
     * @SerializedName("tradingstatus")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute
     */
    protected $tradingstatus;

    /**
     * @SerializedName("value")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $value;

    /**
     * @SerializedName("value_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $value_usd;

    /**
     * @SerializedName("waprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $waprice;

    /**
     * @SerializedName("waptoprevwapriceprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $waptoprevwapriceprcnt;

    /**
     * @SerializedName("waptoprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $waptoprevwaprice;

    /**
     * @SerializedName("highbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $highbid;

    /**
     * @SerializedName("lowoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lowoffer;

    /**
     * @SerializedName("numtrades")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $numtrades;

    /**
     * @SerializedName("priceminusprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $priceminusprevwaprice;

    /**
     * @SerializedName("closeprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $closeprice;

    /**
     * @SerializedName("lastbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lastbid;

    /**
     * @SerializedName("lastoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lastoffer;

    /**
     * @SerializedName("marketprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $marketprice;

    /**
     * @SerializedName("marketpricetoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $marketpricetoday;

    /**
     * @SerializedName("lopenprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lopenprice;

    /**
     * @SerializedName("lcurrentprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lcurrentprice;

    /**
     * @SerializedName("lcloseprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lcloseprice;

    /**
     * @SerializedName("marketprice2")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $marketprice2;

    /**
     * @SerializedName("admittedquote")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $admittedquote;

    /**
     * @SerializedName("openperiodprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $openperiodprice;

    /**
     * @SerializedName("updatetime")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     * @XmlAttribute
     */
    protected $updatetime;

    /**
     * @SerializedName("seqnum")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $seqnum;

    /**
     * @SerializedName("spread")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $spread;

    /**
     * @SerializedName("lastchange")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute
     */
    protected $lastchange;

    /**
     * @SerializedName("systime")
     * @ORM\Column(type="datetime", nullable=true)
     * @Type("datetime")
     * @XmlAttribute
     */
    protected $systime;
}