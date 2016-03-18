#!/bin/bash
FILE=imagelist.txt
FILES=$(cat $FILE)
echo $FILES
FIRST=$(head -n 1 $FILE)
LAST=$(tail -n 1 $FILE)
echo $FIRST
echo $LAST
#convert  -delay 200 $FIRST -delay 30 @imagelist.txt -delay 300 -loop -1 -coalesce -layers optimize $LAST output.gif
convert   -resize 690x output.gif carte_animee_690x803.gif
