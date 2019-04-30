<?php
// src/Blogger/BlogBundle/Entity/Xml.php

namespace App\Entity;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
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

    /**
     * @SerializedName("secname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $secname;

    /**
     * @SerializedName("shortname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $shortname;

    /**
     * @SerializedName("latname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $latname;

    /**
     * @SerializedName("decimals")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $decimals;

    /**
     * @SerializedName("prevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $prevprice;

    /**
     * @SerializedName("boardid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $boardid;

    /**
     * @SerializedName("secid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $secid;

    /**
     * @SerializedName("status")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $status;

    /**
     * @SerializedName("bid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $bid;

    /**
     * @SerializedName("biddepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $biddepth;

    /**
     * @SerializedName("biddeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $biddeptht;

    /**
     * @SerializedName("numbids")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $numbids;

    /**
     * @SerializedName("offer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $offer;

    /**
     * @SerializedName("offerdepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $offerdepth;

    /**
     * @SerializedName("offerdeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $offerdeptht;

    /**
     * @SerializedName("numoffers")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $numoffers;

    /**
     * @SerializedName("open")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $open;

    /**
     * @SerializedName("high")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $high;

    /**
     * @SerializedName("low")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $low;

    /**
     * @SerializedName("last")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $last;

    /**
     * @SerializedName("change")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $changes;

    /**
     * @SerializedName("lastchangeprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lastchangeprcnt;

    /**
     * @SerializedName("lasttoprevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lasttoprevprice;

    /**
     * @SerializedName("qty")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $qty;

    /**
     * @SerializedName("time")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     */
    protected $time;

    /**
     * @SerializedName("voltoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $voltoday;

    /**
     * @SerializedName("valtoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $valtoday;

    /**
     * @SerializedName("valtoday_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $valtoday_usd;

    /**
     * @SerializedName("tradingstatus")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     */
    protected $tradingstatus;

    /**
     * @SerializedName("value")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $value;

    /**
     * @SerializedName("value_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $value_usd;

    /**
     * @SerializedName("waprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $waprice;

    /**
     * @SerializedName("waptoprevwapriceprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $waptoprevwapriceprcnt;

    /**
     * @SerializedName("waptoprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $waptoprevwaprice;

    /**
     * @SerializedName("highbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $highbid;

    /**
     * @SerializedName("lowoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lowoffer;

    /**
     * @SerializedName("numtrades")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $numtrades;

    /**
     * @SerializedName("priceminusprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $priceminusprevwaprice;

    /**
     * @SerializedName("closeprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $closeprice;

    /**
     * @SerializedName("lastbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lastbid;

    /**
     * @SerializedName("lastoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lastoffer;

    /**
     * @SerializedName("marketprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $marketprice;

    /**
     * @SerializedName("marketpricetoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $marketpricetoday;

    /**
     * @SerializedName("lopenprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lopenprice;

    /**
     * @SerializedName("lcurrentprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lcurrentprice;

    /**
     * @SerializedName("lcloseprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lcloseprice;

    /**
     * @SerializedName("marketprice2")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $marketprice2;

    /**
     * @SerializedName("admittedquote")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $admittedquote;

    /**
     * @SerializedName("openperiodprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $openperiodprice;

    /**
     * @SerializedName("updatetime")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     */
    protected $updatetime;

    /**
     * @SerializedName("seqnum")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $seqnum;

    /**
     * @SerializedName("spread")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $spread;

    /**
     * @SerializedName("lastchange")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     */
    protected $lastchange;

    /**
     * @SerializedName("systime")
     * @ORM\Column(type="datetime", nullable=true)
     * @Type("datetime")
     */
    protected $systime;
}