#!/bin/bash
. /var/www/html/openWB/openwb.conf

sudo python /var/www/html/openWB/modules/wr_solaredge/solaredge.py $solaredgepvip $solaredgepvslave1 $solaredgepvslave2 $solaredgepvslave3 $wattbezugmodul $speichermodul

pvwatt=$(</var/www/html/openWB/ramdisk/pvwatt)
echo $pvwatt
