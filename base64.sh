#!/bin/sh
echo "{\n  \"gafam\": {\r"  > app/assets/img/img.json
for image in app/assets/img/gafam/*.png
do
  name=${image##*/}
  name=${name%.*}
  echo "    \"$name\": \"data:image/png;base64,$(base64 --wrap=0 $image)\"," >> app/assets/img/img.json
done
truncate -s-2 app/assets/img/img.json
echo "\n  },\n  \"leds\": {\r"  >> app/assets/img/img.json
for image in app/assets/img/leds/*.png
do
  name=${image##*/}
  name=${name%.*}
  echo "    \"$name\": \"data:image/png;base64,$(base64 --wrap=0 $image)\"," >> app/assets/img/img.json
done
truncate -s-2 app/assets/img/img.json
echo "\n  }\n}" >> app/assets/img/img.json

