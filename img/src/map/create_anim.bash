#!/bin/bash
## export specified layers from an Insckape file to .png using
## export_layers_batch.bash script and output those .png to an
## animated gif
## (c) pyg@framasoft.org - GNU/GPL v3 license

# Layers to always include
LAYERBASE="bg+labelsFR"

# if you need a specific layer into first image
LAYERS="${LAYERBASE}+camps"

# speed in 1/100 of second => multiply by 10 to convert in milliseconds
SPEED="30"

# input .svg file
INPUT="framacarte_2015v5.svg"

# Output .gif file
OUTPUT="output-en.gif"

# spectial inkscape options (e.g. "-d 90" for 90dpi)
OPTIONS="\"-w 730\""

ALL=$LAYERS

for LAYERGP in 0{0..9} {10..12}
do
  for LAYERSUB in {1..3} 
  do
    ALL=$ALL",${LAYERBASE}+${LAYERGP}-${LAYERSUB}"
  done
done
#echo $ALL


echo "./export_layers_batch.bash $INPUT $ALL $SPEED $OUTPUT -w 730"
./export_layers_batch.bash $INPUT $ALL $SPEED $OUTPUT "-w 730"
