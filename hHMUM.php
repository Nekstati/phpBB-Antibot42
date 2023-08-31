<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class hHMUM implements EventSubscriberInterface { protected $o8IwQ, $LIBDk; public function __construct(\nekstati\antibot42\urM7S $guk2k, \nekstati\antibot42\l_KGC $B4mSJ) { $this->o8IwQ = $guk2k; $this->LIBDk = $B4mSJ; } public function qBQebn($huACi) { if (!($huACi instanceof GetResponseForExceptionEvent)) return; goto tafPt; tafPt: if ($this->LIBDk->vpJK_["\x6d\x65\x74\x68\157\x64\x33"]) { goto WRGty; } goto FYxGc; CAR6N: $ul5cG = $huACi->getException(); goto c3qRP; c3qRP: $i0Osb = $huACi->getRequest(); goto S3T01; SNdZv: yrX2g: goto W3muu; pTf5s: if (!($ul5cG instanceof NotFoundHttpException && $ul5cG->getStatusCode() == "\64\60\x34" && $i0Osb->getPathInfo() == "\57" . $SNbmI)) { goto yrX2g; } goto LeLve; gZTM_: $huACi->setResponse($LsMGs); goto SNdZv; FYxGc: return; goto QmMWV; LeLve: $LsMGs = $this->o8IwQ->B4vLX($SNbmI); goto gZTM_; S3T01: $SNbmI = $this->LIBDk->aX27v; goto pTf5s; QmMWV: WRGty: goto CAR6N; W3muu: } public static function getSubscribedEvents() { goto s6wkT; NgXaa: VNo3t: goto KAXB8; lA9Hi: return []; goto NgXaa; s6wkT: if (!defined("\x41\104\x4d\111\116\137\123\124\101\x52\x54")) { goto VNo3t; } goto lA9Hi; KAXB8: return [KernelEvents::EXCEPTION => ["\161\x42\121\145\x62\x6e", 2001]]; goto QkqkH; QkqkH: } }
