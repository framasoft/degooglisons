echo -e "<?php \n"  > base64.php
for image in gafam/*.png
do
  echo -e "\$i['$image'] = 'data:image/png;base64,\n$(base64 $image)';\n" >> base64.php
done
for image in leds/*.png
do
  echo -e "\$i['$image'] = 'data:image/png;base64,\n$(base64 $image)';\n" >> base64.php
done
echo -e "?>"  >> base64.php