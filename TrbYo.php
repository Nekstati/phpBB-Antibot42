<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class TrbYo implements EventSubscriberInterface { protected $RqDpS, $N0kBQ; public function __construct(\nekstati\antibot42\OXPJH $p84pH, \nekstati\antibot42\vXdZ5 $m1qWE) { $this->RqDpS = $p84pH; $this->N0kBQ = $m1qWE; } public function OADtjW($vPHzF) { goto uFnrN; CDctC: $hv1Ao = $this->N0kBQ->T_Ez4; goto fQR6x; FA6yJ: return; goto acLps; uFnrN: if ($vPHzF instanceof GetResponseForExceptionEvent) { goto NLTfa; } goto FA6yJ; fQR6x: if (!($HRI2t instanceof NotFoundHttpException && $HRI2t->getStatusCode() == "\x34\60\x34" && $gIUWO->getPathInfo() == "\57" . $hv1Ao)) { goto C8IPs; } goto OZJMg; WDSJK: if ($this->N0kBQ->WfnPB["\155\145\164\150\x6f\144\63"]) { goto qMvsr; } goto dBqWg; dBqWg: return; goto iHGe2; BALWF: $gIUWO = $vPHzF->getRequest(); goto CDctC; EnjZD: C8IPs: goto yjaxe; acLps: NLTfa: goto WDSJK; Xt557: $HRI2t = $vPHzF->getException(); goto BALWF; OZJMg: $UnccA = $this->RqDpS->jygB6($hv1Ao); goto Qwp6p; Qwp6p: $vPHzF->setResponse($UnccA); goto EnjZD; iHGe2: qMvsr: goto Xt557; yjaxe: } public static function getSubscribedEvents() { goto yLMj7; osd5J: return []; goto S4kJ3; yLMj7: if (!defined("\101\104\x4d\111\x4e\x5f\123\124\101\122\124")) { goto M5dpO; } goto osd5J; J6R6S: return [KernelEvents::EXCEPTION => ["\117\101\x44\x74\152\127", 2001]]; goto K6G46; S4kJ3: M5dpO: goto J6R6S; K6G46: } }
