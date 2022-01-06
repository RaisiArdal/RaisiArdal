<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa-IR', array (
));

$catalogueFa = new MessageCatalogue('fa', array (
));
$catalogue->addFallbackCatalogue($catalogueFa);

return $catalogue;
