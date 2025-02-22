<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class xjBma implements EventSubscriberInterface { protected $VPhaN, $MqMg6; public function __construct(\nekstati\antibot42\WmAC_ $a8MAl, \nekstati\antibot42\AcCvK $MdhuK) { $this->VPhaN = $a8MAl; $this->MqMg6 = $MdhuK; } public function FOhDig($tYT0T) { goto kwvxI; LuN5M: $NqYle = $this->VPhaN->JOpIi($CUjBx); goto UYCvE; S2e1Q: $CUjBx = $this->MqMg6->wGp20; goto XBGLA; gzt_f: mf04g: goto UbVU1; UYCvE: $tYT0T->setResponse($NqYle); goto ITIW6; Bt30Z: CFXiq: goto HewtO; VFozC: return; goto gzt_f; ITIW6: PwSKR: goto YmF_a; aBeM6: $tbt3R = $tYT0T->getRequest(); goto S2e1Q; kwvxI: if ($tYT0T instanceof GetResponseForExceptionEvent) { goto mf04g; } goto VFozC; HewtO: $M1dRl = $tYT0T->getException(); goto aBeM6; UbVU1: if ($this->MqMg6->bKZC1["\155\145\x74\150\157\144\x33"]) { goto CFXiq; } goto K5M89; K5M89: return; goto Bt30Z; XBGLA: if (!($M1dRl instanceof NotFoundHttpException && $M1dRl->getStatusCode() == "\64\x30\64" && $tbt3R->getPathInfo() == "\57" . $CUjBx)) { goto PwSKR; } goto LuN5M; YmF_a: } public static function getSubscribedEvents() { goto w9PDz; plfht: return [KernelEvents::EXCEPTION => ["\x46\x4f\150\x44\151\x67", 2001]]; goto Iefdd; Qm36P: skPLT: goto plfht; w9PDz: if (!defined("\x41\x44\x4d\111\116\x5f\123\124\x41\122\124")) { goto skPLT; } goto dNgP4; dNgP4: return []; goto Qm36P; Iefdd: } }
