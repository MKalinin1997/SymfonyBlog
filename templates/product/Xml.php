<?php
// src/App/Entity/Xml.php

namespace App\Entity;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlKeyValuePairs;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlDiscriminator;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="xml")
 * @ORM\HasLifecycleCallbacks
 */

/** @XmlRoot("row")
* @XmlDiscriminator(attribute=true)
*/
class Xml
{
    /**
     * @return mixed
     */
    public function getSecname()
    {
        return $this->secname;
    }

    /**
     * @param mixed $secname
     */
    public function setSecname($secname): void
    {
        $this->secname = $secname;
    }

    /**
     * @return mixed
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * @param mixed $shortname
     */
    public function setShortname($shortname): void
    {
        $this->shortname = $shortname;
    }

    /**
     * @return mixed
     */
    public function getLatname()
    {
        return $this->latname;
    }

    /**
     * @param mixed $latname
     */
    public function setLatname($latname): void
    {
        $this->latname = $latname;
    }

    /**
     * @return mixed
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * @param mixed $decimals
     */
    public function setDecimals($decimals): void
    {
        $this->decimals = $decimals;
    }

    /**
     * @return mixed
     */
    public function getPrevprice()
    {
        return $this->prevprice;
    }

    /**
     * @param mixed $prevprice
     */
    public function setPrevprice($prevprice): void
    {
        $this->prevprice = $prevprice;
    }

    /**
     * @return mixed
     */
    public function getBoardid()
    {
        return $this->boardid;
    }

    /**
     * @param mixed $boardid
     */
    public function setBoardid($boardid): void
    {
        $this->boardid = $boardid;
    }

    /**
     * @return mixed
     */
    public function getSecid()
    {
        return $this->secid;
    }

    /**
     * @param mixed $secid
     */
    public function setSecid($secid): void
    {
        $this->secid = $secid;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid): void
    {
        $this->bid = $bid;
    }

    /**
     * @return mixed
     */
    public function getBiddepth()
    {
        return $this->biddepth;
    }

    /**
     * @param mixed $biddepth
     */
    public function setBiddepth($biddepth): void
    {
        $this->biddepth = $biddepth;
    }

    /**
     * @return mixed
     */
    public function getBiddeptht()
    {
        return $this->biddeptht;
    }

    /**
     * @param mixed $biddeptht
     */
    public function setBiddeptht($biddeptht): void
    {
        $this->biddeptht = $biddeptht;
    }

    /**
     * @return mixed
     */
    public function getNumbids()
    {
        return $this->numbids;
    }

    /**
     * @param mixed $numbids
     */
    public function setNumbids($numbids): void
    {
        $this->numbids = $numbids;
    }

    /**
     * @return mixed
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param mixed $offer
     */
    public function setOffer($offer): void
    {
        $this->offer = $offer;
    }

    /**
     * @return mixed
     */
    public function getOfferdepth()
    {
        return $this->offerdepth;
    }

    /**
     * @param mixed $offerdepth
     */
    public function setOfferdepth($offerdepth): void
    {
        $this->offerdepth = $offerdepth;
    }

    /**
     * @return mixed
     */
    public function getOfferdeptht()
    {
        return $this->offerdeptht;
    }

    /**
     * @param mixed $offerdeptht
     */
    public function setOfferdeptht($offerdeptht): void
    {
        $this->offerdeptht = $offerdeptht;
    }

    /**
     * @return mixed
     */
    public function getNumoffers()
    {
        return $this->numoffers;
    }

    /**
     * @param mixed $numoffers
     */
    public function setNumoffers($numoffers): void
    {
        $this->numoffers = $numoffers;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param mixed $open
     */
    public function setOpen($open): void
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param mixed $high
     */
    public function setHigh($high): void
    {
        $this->high = $high;
    }

    /**
     * @return mixed
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param mixed $low
     */
    public function setLow($low): void
    {
        $this->low = $low;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last): void
    {
        $this->last = $last;
    }

    /**
     * @return mixed
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @param mixed $changes
     */
    public function setChanges($changes): void
    {
        $this->changes = $changes;
    }

    /**
     * @return mixed
     */
    public function getLastchangeprcnt()
    {
        return $this->lastchangeprcnt;
    }

    /**
     * @param mixed $lastchangeprcnt
     */
    public function setLastchangeprcnt($lastchangeprcnt): void
    {
        $this->lastchangeprcnt = $lastchangeprcnt;
    }

    /**
     * @return mixed
     */
    public function getLasttoprevprice()
    {
        return $this->lasttoprevprice;
    }

    /**
     * @param mixed $lasttoprevprice
     */
    public function setLasttoprevprice($lasttoprevprice): void
    {
        $this->lasttoprevprice = $lasttoprevprice;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getVoltoday()
    {
        return $this->voltoday;
    }

    /**
     * @param mixed $voltoday
     */
    public function setVoltoday($voltoday): void
    {
        $this->voltoday = $voltoday;
    }

    /**
     * @return mixed
     */
    public function getValtoday()
    {
        return $this->valtoday;
    }

    /**
     * @param mixed $valtoday
     */
    public function setValtoday($valtoday): void
    {
        $this->valtoday = $valtoday;
    }

    /**
     * @return mixed
     */
    public function getValtodayUsd()
    {
        return $this->valtoday_usd;
    }

    /**
     * @param mixed $valtoday_usd
     */
    public function setValtodayUsd($valtoday_usd): void
    {
        $this->valtoday_usd = $valtoday_usd;
    }

    /**
     * @return mixed
     */
    public function getTradingstatus()
    {
        return $this->tradingstatus;
    }

    /**
     * @param mixed $tradingstatus
     */
    public function setTradingstatus($tradingstatus): void
    {
        $this->tradingstatus = $tradingstatus;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValueUsd()
    {
        return $this->value_usd;
    }

    /**
     * @param mixed $value_usd
     */
    public function setValueUsd($value_usd): void
    {
        $this->value_usd = $value_usd;
    }

    /**
     * @return mixed
     */
    public function getWaprice()
    {
        return $this->waprice;
    }

    /**
     * @param mixed $waprice
     */
    public function setWaprice($waprice): void
    {
        $this->waprice = $waprice;
    }

    /**
     * @return mixed
     */
    public function getWaptoprevwapriceprcnt()
    {
        return $this->waptoprevwapriceprcnt;
    }

    /**
     * @param mixed $waptoprevwapriceprcnt
     */
    public function setWaptoprevwapriceprcnt($waptoprevwapriceprcnt): void
    {
        $this->waptoprevwapriceprcnt = $waptoprevwapriceprcnt;
    }

    /**
     * @return mixed
     */
    public function getWaptoprevwaprice()
    {
        return $this->waptoprevwaprice;
    }

    /**
     * @param mixed $waptoprevwaprice
     */
    public function setWaptoprevwaprice($waptoprevwaprice): void
    {
        $this->waptoprevwaprice = $waptoprevwaprice;
    }

    /**
     * @return mixed
     */
    public function getHighbid()
    {
        return $this->highbid;
    }

    /**
     * @param mixed $highbid
     */
    public function setHighbid($highbid): void
    {
        $this->highbid = $highbid;
    }

    /**
     * @return mixed
     */
    public function getLowoffer()
    {
        return $this->lowoffer;
    }

    /**
     * @param mixed $lowoffer
     */
    public function setLowoffer($lowoffer): void
    {
        $this->lowoffer = $lowoffer;
    }

    /**
     * @return mixed
     */
    public function getNumtrades()
    {
        return $this->numtrades;
    }

    /**
     * @param mixed $numtrades
     */
    public function setNumtrades($numtrades): void
    {
        $this->numtrades = $numtrades;
    }

    /**
     * @return mixed
     */
    public function getPriceminusprevwaprice()
    {
        return $this->priceminusprevwaprice;
    }

    /**
     * @param mixed $priceminusprevwaprice
     */
    public function setPriceminusprevwaprice($priceminusprevwaprice): void
    {
        $this->priceminusprevwaprice = $priceminusprevwaprice;
    }

    /**
     * @return mixed
     */
    public function getCloseprice()
    {
        return $this->closeprice;
    }

    /**
     * @param mixed $closeprice
     */
    public function setCloseprice($closeprice): void
    {
        $this->closeprice = $closeprice;
    }

    /**
     * @return mixed
     */
    public function getLastbid()
    {
        return $this->lastbid;
    }

    /**
     * @param mixed $lastbid
     */
    public function setLastbid($lastbid): void
    {
        $this->lastbid = $lastbid;
    }

    /**
     * @return mixed
     */
    public function getLastoffer()
    {
        return $this->lastoffer;
    }

    /**
     * @param mixed $lastoffer
     */
    public function setLastoffer($lastoffer): void
    {
        $this->lastoffer = $lastoffer;
    }

    /**
     * @return mixed
     */
    public function getMarketprice()
    {
        return $this->marketprice;
    }

    /**
     * @param mixed $marketprice
     */
    public function setMarketprice($marketprice): void
    {
        $this->marketprice = $marketprice;
    }

    /**
     * @return mixed
     */
    public function getMarketpricetoday()
    {
        return $this->marketpricetoday;
    }

    /**
     * @param mixed $marketpricetoday
     */
    public function setMarketpricetoday($marketpricetoday): void
    {
        $this->marketpricetoday = $marketpricetoday;
    }

    /**
     * @return mixed
     */
    public function getLopenprice()
    {
        return $this->lopenprice;
    }

    /**
     * @param mixed $lopenprice
     */
    public function setLopenprice($lopenprice): void
    {
        $this->lopenprice = $lopenprice;
    }

    /**
     * @return mixed
     */
    public function getLcurrentprice()
    {
        return $this->lcurrentprice;
    }

    /**
     * @param mixed $lcurrentprice
     */
    public function setLcurrentprice($lcurrentprice): void
    {
        $this->lcurrentprice = $lcurrentprice;
    }

    /**
     * @return mixed
     */
    public function getLcloseprice()
    {
        return $this->lcloseprice;
    }

    /**
     * @param mixed $lcloseprice
     */
    public function setLcloseprice($lcloseprice): void
    {
        $this->lcloseprice = $lcloseprice;
    }

    /**
     * @return mixed
     */
    public function getMarketprice2()
    {
        return $this->marketprice2;
    }

    /**
     * @param mixed $marketprice2
     */
    public function setMarketprice2($marketprice2): void
    {
        $this->marketprice2 = $marketprice2;
    }

    /**
     * @return mixed
     */
    public function getAdmittedquote()
    {
        return $this->admittedquote;
    }

    /**
     * @param mixed $admittedquote
     */
    public function setAdmittedquote($admittedquote): void
    {
        $this->admittedquote = $admittedquote;
    }

    /**
     * @return mixed
     */
    public function getOpenperiodprice()
    {
        return $this->openperiodprice;
    }

    /**
     * @param mixed $openperiodprice
     */
    public function setOpenperiodprice($openperiodprice): void
    {
        $this->openperiodprice = $openperiodprice;
    }

    /**
     * @return mixed
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * @param mixed $updatetime
     */
    public function setUpdatetime($updatetime): void
    {
        $this->updatetime = $updatetime;
    }

    /**
     * @return mixed
     */
    public function getSeqnum()
    {
        return $this->seqnum;
    }

    /**
     * @param mixed $seqnum
     */
    public function setSeqnum($seqnum): void
    {
        $this->seqnum = $seqnum;
    }

    /**
     * @return mixed
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * @param mixed $spread
     */
    public function setSpread($spread): void
    {
        $this->spread = $spread;
    }

    /**
     * @return mixed
     */
    public function getLastchange()
    {
        return $this->lastchange;
    }

    /**
     * @param mixed $lastchange
     */
    public function setLastchange($lastchange): void
    {
        $this->lastchange = $lastchange;
    }

    /**
     * @return mixed
     */
    public function getSystime()
    {
        return $this->systime;
    }

    /**
     * @param mixed $systime
     */
    public function setSystime($systime): void
    {
        $this->systime = $systime;
    }

    /**
     * @AccessType("name")
     * @SerializedName("secname")
     * @Groups({"secname"})
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute;
     * @var array;
     */
    protected $secname ;// = array();

    /**
     * @SerializedName("shortname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")

     * @XmlAttribute;
     */
    protected $shortname ;// = array();

    /**
     * @SerializedName("latname")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")

     * @XmlAttribute;
     */
    protected $latname ;// = array();

    /**
     * @SerializedName("decimals")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $decimals ;// = array();

    /**
     * @SerializedName("prevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $prevprice ;// = array();

    /**
     * @SerializedName("boardid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")

     * @XmlAttribute;
     */
    protected $boardid ;// = array();

    /**
     * @SerializedName("secid")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")

     * @XmlAttribute;
     */
    protected $secid ;// = array();

    /**
     * @SerializedName("status")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")

     * @XmlAttribute;
     */
    protected $status ;// = array();

    /**
     * @SerializedName("bid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $bid ;// = array();

    /**
     * @SerializedName("biddepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $biddepth ;// = array();

    /**
     * @SerializedName("biddeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $biddeptht ;// = array();

    /**
     * @SerializedName("numbids")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $numbids ;// = array();

    /**
     * @SerializedName("offer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $offer ;// = array();

    /**
     * @SerializedName("offerdepth")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $offerdepth ;// = array();

    /**
     * @SerializedName("offerdeptht")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $offerdeptht ;// = array();

    /**
     * @SerializedName("numoffers")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")

     * @XmlAttribute;
     */
    protected $numoffers ;// = array();

    /**
     * @SerializedName("open")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $open ;// = array();

    /**
     * @SerializedName("high")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $high ;// = array();

    /**
     * @SerializedName("low")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $low ;// = array();

    /**
     * @SerializedName("last")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $last ;// = array();

    /**
     * @SerializedName("change")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $changes ;// = array();

    /**
     * @SerializedName("lastchangeprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lastchangeprcnt ;// = array();

    /**
     * @SerializedName("lasttoprevprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lasttoprevprice ;// = array();

    /**
     * @SerializedName("qty")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $qty ;// = array();

    /**
     * @SerializedName("time")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     * @XmlAttribute;
     */
    protected $time ;// = array();

    /**
     * @SerializedName("voltoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $voltoday ;// = array();

    /**
     * @SerializedName("valtoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $valtoday ;// = array();

    /**
     * @SerializedName("valtoday_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $valtoday_usd ;// = array();

    /**
     * @SerializedName("tradingstatus")
     * @ORM\Column(type="string", nullable=true)
     * @Type("string")
     * @XmlAttribute;
     */
    protected $tradingstatus ;// = array();

    /**
     * @SerializedName("value")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $value ;// = array();

    /**
     * @SerializedName("value_usd")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $value_usd ;// = array();

    /**
     * @SerializedName("waprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $waprice ;// = array();

    /**
     * @SerializedName("waptoprevwapriceprcnt")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $waptoprevwapriceprcnt ;// = array();

    /**
     * @SerializedName("waptoprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $waptoprevwaprice ;// = array();

    /**
     * @SerializedName("highbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $highbid ;// = array();

    /**
     * @SerializedName("lowoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lowoffer ;// = array();

    /**
     * @SerializedName("numtrades")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $numtrades ;// = array();

    /**
     * @SerializedName("priceminusprevwaprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $priceminusprevwaprice ;// = array();

    /**
     * @SerializedName("closeprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $closeprice ;// = array();

    /**
     * @SerializedName("lastbid")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lastbid ;// = array();

    /**
     * @SerializedName("lastoffer")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lastoffer ;// = array();

    /**
     * @SerializedName("marketprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $marketprice ;// = array();

    /**
     * @SerializedName("marketpricetoday")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $marketpricetoday ;// = array();

    /**
     * @SerializedName("lopenprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lopenprice ;// = array();

    /**
     * @SerializedName("lcurrentprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lcurrentprice ;// = array();

    /**
     * @SerializedName("lcloseprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lcloseprice ;// = array();

    /**
     * @SerializedName("marketprice2")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $marketprice2 ;// = array();

    /**
     * @SerializedName("admittedquote")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $admittedquote ;// = array();

    /**
     * @SerializedName("openperiodprice")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $openperiodprice ;// = array();

    /**
     * @SerializedName("updatetime")
     * @ORM\Column(type="time", nullable=true)
     * @Type("time")
     * @XmlAttribute;
     */
    protected $updatetime ;// = array();

    /**
     * @SerializedName("seqnum")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $seqnum ;// = array();

    /**
     * @SerializedName("spread")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $spread ;// = array();

    /**
     * @SerializedName("lastchange")
     * @ORM\Column(type="integer", nullable=true)
     * @Type("integer")
     * @XmlAttribute;
     */
    protected $lastchange ;// = array();

    /**
     * @SerializedName("systime")
     * @ORM\Column(type="datetime", nullable=true)
     * @Type("datetime")
     * @XmlAttribute;
     */
    protected $systime ;// = array();
}