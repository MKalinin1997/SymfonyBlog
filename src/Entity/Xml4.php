<?php

namespace App\Entity;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as A;
use Doctrine\ORM\Mapping as ORM;

// for annotations see
// http://jmsyst.com/libs/serializer/master/reference/annotations

/**
 * @ORM\Entity(repositoryClass="App\Repository\XmlRepository")
 * @ORM\Table(name="xml")
 * @ORM\HasLifecycleCallbacks
 * @A\XmlRoot("row")
 */
class Xml4
{
    /**
     * @return mixed
     */
    public function __set($set, $val)
    {
        $this->{$set} = $val;
    }

    /**
     * @return mixed
     */
    public function getSecname()
    {
        return $this->secname;
    }

    /**
     * @return mixed
     */
    public function getLatname()
    {
        return $this->latname;
    }

    /**
     * @return mixed
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * @return mixed
     */
    public function getPrevprice()
    {
        return $this->prevprice;
    }

    /**
     * @return mixed
     */
    public function getBoardid()
    {
        return $this->boardid;
    }

    /**
     * @return mixed
     */
    public function getSecid()
    {
        return $this->secid;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @return mixed
     */
    public function getBiddepth()
    {
        return $this->biddepth;
    }

    /**
     * @return mixed
     */
    public function getBiddeptht()
    {
        return $this->biddeptht;
    }

    /**
     * @return mixed
     */
    public function getNumbids()
    {
        return $this->numbids;
    }

    /**
     * @return mixed
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @return mixed
     */
    public function getOfferdepth()
    {
        return $this->offerdepth;
    }

    /**
     * @return mixed
     */
    public function getOfferdeptht()
    {
        return $this->offerdeptht;
    }

    /**
     * @return mixed
     */
    public function getNumoffers()
    {
        return $this->numoffers;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @return mixed
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @return mixed
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @return mixed
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return mixed
     */
    public function getLastchangeprcnt()
    {
        return $this->lastchangeprcnt;
    }

    /**
     * @return mixed
     */
    public function getLasttoprevprice()
    {
        return $this->lasttoprevprice;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return mixed
     */
    public function getVoltoday()
    {
        return $this->voltoday;
    }

    /**
     * @return mixed
     */
    public function getValtoday()
    {
        return $this->valtoday;
    }

    /**
     * @return mixed
     */
    public function getValtodayUsd()
    {
        return $this->valtoday_usd;
    }

    /**
     * @return mixed
     */
    public function getTradingstatus()
    {
        return $this->tradingstatus;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getValueUsd()
    {
        return $this->value_usd;
    }

    /**
     * @return mixed
     */
    public function getWaprice()
    {
        return $this->waprice;
    }

    /**
     * @return mixed
     */
    public function getWaptoprevwapriceprcnt()
    {
        return $this->waptoprevwapriceprcnt;
    }

    /**
     * @return mixed
     */
    public function getWaptoprevwaprice()
    {
        return $this->waptoprevwaprice;
    }

    /**
     * @return mixed
     */
    public function getHighbid()
    {
        return $this->highbid;
    }

    /**
     * @return mixed
     */
    public function getLowoffer()
    {
        return $this->lowoffer;
    }

    /**
     * @return mixed
     */
    public function getNumtrades()
    {
        return $this->numtrades;
    }

    /**
     * @return mixed
     */
    public function getPriceminusprevwaprice()
    {
        return $this->priceminusprevwaprice;
    }

    /**
     * @return mixed
     */
    public function getCloseprice()
    {
        return $this->closeprice;
    }

    /**
     * @return mixed
     */
    public function getLastbid()
    {
        return $this->lastbid;
    }

    /**
     * @return mixed
     */
    public function getLastoffer()
    {
        return $this->lastoffer;
    }

    /**
     * @return mixed
     */
    public function getMarketprice()
    {
        return $this->marketprice;
    }

    /**
     * @return mixed
     */
    public function getMarketpricetoday()
    {
        return $this->marketpricetoday;
    }

    /**
     * @return mixed
     */
    public function getLopenprice()
    {
        return $this->lopenprice;
    }

    /**
     * @return mixed
     */
    public function getLcurrentprice()
    {
        return $this->lcurrentprice;
    }

    /**
     * @return mixed
     */
    public function getLcloseprice()
    {
        return $this->lcloseprice;
    }

    /**
     * @return mixed
     */
    public function getMarketprice2()
    {
        return $this->marketprice2;
    }

    /**
     * @return mixed
     */
    public function getAdmittedquote()
    {
        return $this->admittedquote;
    }

    /**
     * @return mixed
     */
    public function getOpenperiodprice()
    {
        return $this->openperiodprice;
    }

    /**
     * @return mixed
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * @return mixed
     */
    public function getSeqnum()
    {
        return $this->seqnum;
    }

    /**
     * @return mixed
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * @return mixed
     */
    public function getLastchange()
    {
        return $this->lastchange;
    }

    /**
     * @return mixed
     */
    public function getSystime()
    {
        return $this->systime;
    }
    /**
     * @param mixed $secname
     */
    public function setSecname($secname): void
    {
        $this->secname = $secname;
    }

    /**
     * @param mixed $latname
     */
    public function setLatname($latname): void
    {
        $this->latname = $latname;
    }

    /**
     * @param mixed $decimals
     */
    public function setDecimals($decimals): void
    {
        $this->decimals = $decimals;
    }

    /**
     * @param mixed $prevprice
     */
    public function setPrevprice($prevprice): void
    {
        $this->prevprice = $prevprice;
    }

    /**
     * @param mixed $boardid
     */
    public function setBoardid($boardid): void
    {
        $this->boardid = $boardid;
    }

    /**
     * @param mixed $secid
     */
    public function setSecid($secid): void
    {
        $this->secid = $secid;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid): void
    {
        $this->bid = $bid;
    }

    /**
     * @param mixed $biddepth
     */
    public function setBiddepth($biddepth): void
    {
        $this->biddepth = $biddepth;
    }

    /**
     * @param mixed $biddeptht
     */
    public function setBiddeptht($biddeptht): void
    {
        $this->biddeptht = $biddeptht;
    }

    /**
     * @param mixed $numbids
     */
    public function setNumbids($numbids): void
    {
        $this->numbids = $numbids;
    }

    /**
     * @param mixed $offer
     */
    public function setOffer($offer): void
    {
        $this->offer = $offer;
    }

    /**
     * @param mixed $offerdepth
     */
    public function setOfferdepth($offerdepth): void
    {
        $this->offerdepth = $offerdepth;
    }

    /**
     * @param mixed $offerdeptht
     */
    public function setOfferdeptht($offerdeptht): void
    {
        $this->offerdeptht = $offerdeptht;
    }

    /**
     * @param mixed $numoffers
     */
    public function setNumoffers($numoffers): void
    {
        $this->numoffers = $numoffers;
    }

    /**
     * @param mixed $open
     */
    public function setOpen($open): void
    {
        $this->open = $open;
    }

    /**
     * @param mixed $high
     */
    public function setHigh($high): void
    {
        $this->high = $high;
    }

    /**
     * @param mixed $low
     */
    public function setLow($low): void
    {
        $this->low = $low;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last): void
    {
        $this->last = $last;
    }

    /**
     * @param mixed $changes
     */
    public function setChanges($changes): void
    {
        $this->changes = $changes;
    }

    /**
     * @param mixed $lastchangeprcnt
     */
    public function setLastchangeprcnt($lastchangeprcnt): void
    {
        $this->lastchangeprcnt = $lastchangeprcnt;
    }

    /**
     * @param mixed $lasttoprevprice
     */
    public function setLasttoprevprice($lasttoprevprice): void
    {
        $this->lasttoprevprice = $lasttoprevprice;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @param mixed $voltoday
     */
    public function setVoltoday($voltoday): void
    {
        $this->voltoday = $voltoday;
    }

    /**
     * @param mixed $valtoday
     */
    public function setValtoday($valtoday): void
    {
        $this->valtoday = $valtoday;
    }

    /**
     * @param mixed $valtoday_usd
     */
    public function setValtodayUsd($valtoday_usd): void
    {
        $this->valtoday_usd = $valtoday_usd;
    }

    /**
     * @param mixed $tradingstatus
     */
    public function setTradingstatus($tradingstatus): void
    {
        $this->tradingstatus = $tradingstatus;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @param mixed $value_usd
     */
    public function setValueUsd($value_usd): void
    {
        $this->value_usd = $value_usd;
    }

    /**
     * @param mixed $waprice
     */
    public function setWaprice($waprice): void
    {
        $this->waprice = $waprice;
    }

    /**
     * @param mixed $waptoprevwapriceprcnt
     */
    public function setWaptoprevwapriceprcnt($waptoprevwapriceprcnt): void
    {
        $this->waptoprevwapriceprcnt = $waptoprevwapriceprcnt;
    }

    /**
     * @param mixed $waptoprevwaprice
     */
    public function setWaptoprevwaprice($waptoprevwaprice): void
    {
        $this->waptoprevwaprice = $waptoprevwaprice;
    }

    /**
     * @param mixed $highbid
     */
    public function setHighbid($highbid): void
    {
        $this->highbid = $highbid;
    }

    /**
     * @param mixed $lowoffer
     */
    public function setLowoffer($lowoffer): void
    {
        $this->lowoffer = $lowoffer;
    }

    /**
     * @param mixed $numtrades
     */
    public function setNumtrades($numtrades): void
    {
        $this->numtrades = $numtrades;
    }

    /**
     * @param mixed $priceminusprevwaprice
     */
    public function setPriceminusprevwaprice($priceminusprevwaprice): void
    {
        $this->priceminusprevwaprice = $priceminusprevwaprice;
    }

    /**
     * @param mixed $closeprice
     */
    public function setCloseprice($closeprice): void
    {
        $this->closeprice = $closeprice;
    }

    /**
     * @param mixed $lastbid
     */
    public function setLastbid($lastbid): void
    {
        $this->lastbid = $lastbid;
    }

    /**
     * @param mixed $lastoffer
     */
    public function setLastoffer($lastoffer): void
    {
        $this->lastoffer = $lastoffer;
    }

    /**
     * @param mixed $marketprice
     */
    public function setMarketprice($marketprice): void
    {
        $this->marketprice = $marketprice;
    }

    /**
     * @param mixed $marketpricetoday
     */
    public function setMarketpricetoday($marketpricetoday): void
    {
        $this->marketpricetoday = $marketpricetoday;
    }

    /**
     * @param mixed $lopenprice
     */
    public function setLopenprice($lopenprice): void
    {
        $this->lopenprice = $lopenprice;
    }

    /**
     * @param mixed $lcurrentprice
     */
    public function setLcurrentprice($lcurrentprice): void
    {
        $this->lcurrentprice = $lcurrentprice;
    }

    /**
     * @param mixed $lcloseprice
     */
    public function setLcloseprice($lcloseprice): void
    {
        $this->lcloseprice = $lcloseprice;
    }

    /**
     * @param mixed $marketprice2
     */
    public function setMarketprice2($marketprice2): void
    {
        $this->marketprice2 = $marketprice2;
    }

    /**
     * @param mixed $admittedquote
     */
    public function setAdmittedquote($admittedquote): void
    {
        $this->admittedquote = $admittedquote;
    }

    /**
     * @param mixed $openperiodprice
     */
    public function setOpenperiodprice($openperiodprice): void
    {
        $this->openperiodprice = $openperiodprice;
    }

    /**
     * @param mixed $updatetime
     */
    public function setUpdatetime($updatetime): void
    {
        $this->updatetime = $updatetime;
    }

    /**
     * @param mixed $seqnum
     */
    public function setSeqnum($seqnum): void
    {
        $this->seqnum = $seqnum;
    }

    /**
     * @param mixed $spread
     */
    public function setSpread($spread): void
    {
        $this->spread = $spread;
    }

    /**
     * @param mixed $lastchange
     */
    public function setLastchange($lastchange): void
    {
        $this->lastchange = $lastchange;
    }

    /**
     * @param mixed $systime
     */
    public function setSystime($systime): void
    {
        $this->systime = $systime;
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @A\Type("integer");
     */
    private $id;
    /**
     * @A\SerializedName("SECNAME")
     * @ORM\Column(type="string")
     * @A\XmlKeyValuePairs()
     * @A\Type("string")
     * @A\XmlAttribute
     */
    private $secname;
    /**
     * @A\SerializedName("LATNAME")
     * @ORM\Column(type="string")
     * @A\XmlKeyValuePairs()
     * @A\Type("string")
     * @A\XmlAttribute
     */
    private $latname;
    /**
     * @A\SerializedName("DECIMALS")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $decimals ;

    /**
     * @A\SerializedName("PREVPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $prevprice ;

    /**
     * @A\SerializedName("BOARDID")
     * @ORM\Column(type="string")
     * @A\Type("string")

     * @A\XmlAttribute;
     */
    private $boardid ;

    /**
     * @A\SerializedName("SECID")
     * @ORM\Column(type="string")
     * @A\Type("string")

     * @A\XmlAttribute;
     */
    private $secid ;

    /**
     * @A\SerializedName("STATUS")
     * @ORM\Column(type="string")
     * @A\Type("string")

     * @A\XmlAttribute;
     */
    private $status ;

    /**
     * @A\SerializedName("BID")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $bid ;

    /**
     * @A\SerializedName("BIDDEPTH")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $biddepth ;

    /**
     * @A\SerializedName("BIDDEPTHT")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $biddeptht ;

    /**
     * @A\SerializedName("NUMBIDS")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $numbids ;

    /**
     * @A\SerializedName("OFFER")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $offer ;

    /**
     * @A\SerializedName("OFFERDEPTH")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $offerdepth ;

    /**
     * @A\SerializedName("OFFERDEPTHT")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $offerdeptht ;

    /**
     * @A\SerializedName("NUMOFFERS")
     * @ORM\Column(type="float")
     * @A\Type("float")

     * @A\XmlAttribute;
     */
    private $numoffers ;

    /**
     * @A\SerializedName("OPEN")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $open ;

    /**
     * @A\SerializedName("HIGH")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $high ;

    /**
     * @A\SerializedName("LOW")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $low ;

    /**
     * @A\SerializedName("LAST")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $last ;

    /**
     * @A\SerializedName("CHANGE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $changes ;

    /**
     * @A\SerializedName("LASTCHANGEPRCNT")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lastchangeprcnt ;

    /**
     * @A\SerializedName("LASTTOPREVPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lasttoprevprice ;

    /**
     * @A\SerializedName("QTY")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $qty ;

    /**
     * @A\SerializedName("TIME")
     * @ORM\Column(type="string")
     * @A\Type("string")
     * @A\XmlAttribute;
     */
    private $time ;

    /**
     * @A\SerializedName("VOLTODAY")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $voltoday ;

    /**
     * @A\SerializedName("VALTODAY")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $valtoday ;

    /**
     * @A\SerializedName("VALTODAY_USD")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $valtoday_usd ;

    /**
     * @A\SerializedName("TRADINGSTATUS")
     * @ORM\Column(type="string")
     * @A\Type("string")
     * @A\XmlAttribute;
     */
    private $tradingstatus ;

    /**
     * @A\SerializedName("VALUE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $value ;

    /**
     * @A\SerializedName("VALUE_USD")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $value_usd ;

    /**
     * @A\SerializedName("WAPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $waprice ;

    /**
     * @A\SerializedName("WAPTOPREVWAPRICEPRCNT")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $waptoprevwapriceprcnt ;

    /**
     * @A\SerializedName("WAPTOPREVWAPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $waptoprevwaprice ;

    /**
     * @A\SerializedName("HIGHBID")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $highbid ;

    /**
     * @A\SerializedName("LOWOFFER")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lowoffer ;

    /**
     * @A\SerializedName("NUMTRADES")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $numtrades ;

    /**
     * @A\SerializedName("PRICEMINUSPREVWAPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $priceminusprevwaprice ;

    /**
     * @A\SerializedName("CLOSEPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $closeprice ;

    /**
     * @A\SerializedName("LASTBID")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lastbid ;

    /**
     * @A\SerializedName("LASTOFFER")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lastoffer ;

    /**
     * @A\SerializedName("MARKETPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $marketprice ;

    /**
     * @A\SerializedName("MARKETPRICETODAY")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $marketpricetoday ;

    /**
     * @A\SerializedName("LOPENPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lopenprice ;

    /**
     * @A\SerializedName("LCURRENTPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lcurrentprice ;

    /**
     * @A\SerializedName("LCLOSEPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lcloseprice ;

    /**
     * @A\SerializedName("MARKETPRICE2")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $marketprice2 ;

    /**
     * @A\SerializedName("ADMITTEDQUOTE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $admittedquote ;

    /**
     * @A\SerializedName("OPENPERIODPRICE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $openperiodprice ;

    /**
     * @A\SerializedName("UPDATETIME")
     * @ORM\Column(type="string")
     * @A\Type("string")
     * @A\XmlAttribute;
     */
    private $updatetime ;

    /**
     * @A\SerializedName("SEQNUM")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $seqnum ;

    /**
     * @A\SerializedName("SPREAD")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $spread ;

    /**
     * @A\SerializedName("LASTCHANGE")
     * @ORM\Column(type="float")
     * @A\Type("float")
     * @A\XmlAttribute;
     */
    private $lastchange ;

    /**
     * @A\SerializedName("SYSTIME")
     * @ORM\Column(type="string")
     * @A\Type("string")
     * @A\XmlAttribute;
     */
    private $systime ;
}