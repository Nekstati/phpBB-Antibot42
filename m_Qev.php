<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/
 namespace nekstati\antibot42; use Symfony\Component\HttpKernel\KernelEvents; use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent; use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; use Symfony\Component\EventDispatcher\EventSubscriberInterface; class m_Qev implements EventSubscriberInterface { protected $z_YM6, $KUm8b; public function __construct(\nekstati\antibot42\QT0JZ $i1eot, \nekstati\antibot42\DhEYv $u3y6o) { $this->z_YM6 = $i1eot; $this->KUm8b = $u3y6o; } public function khytcO($YNvaA) { goto QKJ1F; vxhGl: return; goto s_jwm; PMPNi: $WVOcu = $YNvaA->getException(); goto XU17W; XU17W: $dBlOO = $YNvaA->getRequest(); goto vz3zD; bmos2: wIPQO: goto eZ8CO; QKJ1F: if ($YNvaA instanceof GetResponseForExceptionEvent) { goto wIPQO; } goto oufg4; vz3zD: $m84Cn = $this->KUm8b->Z9SRp; goto WVOuW; eZ8CO: if ($this->KUm8b->rwM7y["\x6d\x65\x74\150\x6f\x64\x33"]) { goto DsZ2A; } goto vxhGl; NlJzz: $YNvaA->setResponse($no0DT); goto LlShw; LMU46: $no0DT = $this->z_YM6->lPb27($m84Cn); goto NlJzz; WVOuW: if (!($WVOcu instanceof NotFoundHttpException && $WVOcu->getStatusCode() == "\x34\60\x34" && $dBlOO->getPathInfo() == "\57" . $m84Cn)) { goto EH5iV; } goto LMU46; LlShw: EH5iV: goto i0KAu; s_jwm: DsZ2A: goto PMPNi; oufg4: return; goto bmos2; i0KAu: } public static function getSubscribedEvents() { goto Wx9zm; Wx9zm: if (!defined("\101\104\x4d\x49\116\137\123\124\101\122\124")) { goto CO49N; } goto vLK8O; vLK8O: return []; goto iMxF1; He1vL: return [KernelEvents::EXCEPTION => ["\153\x68\171\x74\x63\x4f", 2001]]; goto bfacO; iMxF1: CO49N: goto He1vL; bfacO: } }
