echo -e "gafam:\r"  > app/img.yml
for image in app/assets/img/gafam/*.png
do
  echo -e "  '$(basename $image)': 'data:image/png;base64,\n$(base64 $image)'\n" >> app/img.yml
done
echo -e "leds:\r"  >> app/img.yml
for image in app/assets/img/leds/*.png
do
  echo -e "  '$(basename $image)': 'data:image/png;base64,\n$(base64 $image)'\n" >> app/img.yml
done
echo -e "'ghost.png': 'data:image/png;base64,\n$(base64 app/assets/img/ghost.png)'\n" >> app/img.yml
