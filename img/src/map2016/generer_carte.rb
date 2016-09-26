#!/usr/bin/ruby -w
# coding: utf-8

$english = true # Switch to false for French version



$geom = Hash.new
$events = Array.new
$nb_img = 0
$last = false

# Define name of frame
def image_name_idx(idx)
  out = "image_"
  if(idx < 100)
    out = out + "0"
  end
  if(idx < 10)
    out = out + "0"
  end
  out = out + idx.to_s + ".png"
  return out
end

# Define name of frame and increment counter
def image_name
  out = image_name_idx($nb_img)
  $nb_img = $nb_img + 1
  return out
end

# From Inkscape coordinates to Imagemagick coordinates
def compute_geom(coord)
  # SVG size = 744 * 866
  # Counter height = 70
  # Camp height = 95
  # Camp height = 504

  x = (730.0 * coord[0].to_f / 744.0).to_i
  y = (850.0 * (866 - coord[1] - 95).to_f / 866.0).to_i
  return "+#{x}+#{y}"
end

# Add one camp to the image
def add_camp(img, camp_state) # STATE = "framasphere"/"FRAMA", "framinetest"/"PIF", etc
  g = $geom[camp_state[0]]
  # Find right file
  filename = camp_state[0] + ".png"
  if (camp_state[1] == "ROMAIN")
    filename = camp_state[0] + "_romain.png"
  elsif (camp_state[1] == "PIF")
    add_camp(img, [camp_state[0], "ROMAIN"]) # If PIF (or PAF), first add ROMAIN underneath
    filename = "pif.png"
  elsif (camp_state[1] == "PAF")
    add_camp(img, [camp_state[0], "ROMAIN"]) # If PIF (or PAF), first add ROMAIN underneath
    filename = "paf.png"
  end
  # Compose image
  system "composite -geometry #{g} #{filename} #{img} #{img}"
end

# Add the counter with the right date
def add_counter(img, value) # Value = OCT2013, NOV2014, etc.
  # Change string in SVG
  File.write("tmp_counter.svg",File.open("counter.svg",&:read).gsub("XXXXXXX",value))
  # Export SVG
  system "inkscape -C -e counter.png tmp_counter.svg > /dev/null"
  # Compose image
  system "composite -geometry #{$geom["counter"]} counter.png #{img} #{img}"
end

# Add the animated flag (looping on 3 frames)
def add_flag(img,date)
  # Compose image
  if($last)
    name = "drapeau_fin.png"
  else
    name = "drapeau_" + ($nb_img % 3).to_s + ".png"
  end

  system "composite -geometry #{$geom["flag"]} #{name} #{img} #{img}"
end

# Generate one frame
def generate_image(img, date, camp_states)
  # Init with empty map
  if($english)
    system "cp fond_en.png #{img}"
  else
    system "cp fond.png #{img}"
  end
  # Add the right counter
  add_flag(img,date)
  add_counter(img,date)
  # Add the right camps/frama/pif/paf
  camp_states.each do |c|
    add_camp(img, c)
  end
end

# Generate one animation (romain -> pif -> paf -> frama)
def generate_animation(i)
  states = ["ROMAIN", "PIF", "PAF", "FRAMA"] # Animation states
  states.each do |s|
    camp_states = Array.new
    for j in 0..(i-1)
      camp_states.push([$events[j][1], "FRAMA"])
    end
    for j in i..($events.size - 1)
      if($events[j][0] == $events[i][0]) # Events with same date are animated
        camp_states.push([$events[j][1], s])
      else # Events after are still ROMAIN
        camp_states.push([$events[j][1], "ROMAIN"])
      end
    end
    
    generate_image(image_name(),$events[i][0], camp_states)
  end
end

puts "GENERATION DE CARTE ANIMEE POUR DEGOOGLISONS-INTERNET.ORG"

# Generate geometry
# Coordinates are in Inkscape world
$geom["counter"] = compute_geom([607, 787 - 25])
$geom["flag"] = compute_geom([344, 324 + 409])
$geom["framapad"] = compute_geom([325, 768])
$geom["framadate"] = compute_geom([400, 729])
$geom["framacalc"] = compute_geom([309, 688])
$geom["framindmap"] = compute_geom([359, 627])
$geom["framanews"] = compute_geom([622, 639])
$geom["framabag"] = compute_geom([315, 566])
$geom["framasphere"] = compute_geom([615, 562])
$geom["framapic"] = compute_geom([380, 547])
$geom["framabin"] = compute_geom([287, 492])
$geom["framalink"] = compute_geom([598, 488])
$geom["framagit"] = compute_geom([354, 451])
$geom["framabookin"] = compute_geom([511, 470])
$geom["framabee"] = compute_geom([582, 412])
$geom["framadrop"] = compute_geom([484, 411])
$geom["framaboard"] = compute_geom([323, 378])
$geom["framadrive"] = compute_geom([312, 308])
$geom["framacarte"] = compute_geom([515, 340])
$geom["framavox"] = compute_geom([145, 341])
$geom["framateam"] = compute_geom([229, 349])
$geom["framinetest"] = compute_geom([236, 279])
$geom["framemo"] = compute_geom([435, 322])
$geom["framalistes"] = compute_geom([609, 319])
$geom["framaforms"] = compute_geom([156, 248])
$geom["framagenda"] = compute_geom([306, 213])
$geom["myframa"] = compute_geom([386, 264])
$geom["framanotes"] = compute_geom([541, 263])
$geom["framatalk"] = compute_geom([451, 241])


# Events (ordered)
# Two events with same date are generated altogether
$events.push(["MAR2011", "framapad"])
$events.push(["JUN2011", "framadate"])
$events.push(["OCT2012", "framacalc"])
$events.push(["OCT2012", "framindmap"])
$events.push(["JUN2013", "framanews"])
$events.push(["FEV2014", "framabag"])
$events.push(["OCT2014", "framasphere"])
$events.push(["MAR2015", "framapic"])
$events.push(["MAR2015", "framabin"])
$events.push(["MAR2015", "framalink"])
$events.push(["MAR2015", "framagit"])
$events.push(["JUN2015", "framabookin"])
$events.push(["MAI2015", "framabee"])
$events.push(["OCT2015", "framadrop"])
$events.push(["OCT2015", "framaboard"])
$events.push(["OCT2015", "framadrive"])
$events.push(["DEC2015", "framacarte"])
$events.push(["MAI2016", "framateam"])
$events.push(["JUN2016", "framavox"])
$events.push(["SEP2016", "framinetest"])
$events.push(["SEP2016", "framemo"])
$events.push(["OCT2016", "framalistes"])
$events.push(["OCT2016", "framaforms"])
$events.push(["OCT2016", "framagenda"])
$events.push(["OCT2016", "myframa"])
$events.push(["OCT2016", "framanotes"])
$events.push(["OCT2016", "framatalk"])


# SCRIPT BEGINS HERE

# Remove old images
system "rm -rf image_*.png"

# Generate first image (all camps are ROMAIN)
camp_states = Array.new
for j in 0..($events.size-1)
  camp_states.push([$events[j][1], "ROMAIN"])
end

# 6 frames (flag is animated), no date
6.times do 
  generate_image(image_name(),"-------", camp_states)
end

# Generate animation
last_date = ""
for i in 0..($events.size()-1)
  date = $events[i][0]
  if (date == last_date)
    next
  end
  last_date = date

  generate_animation(i)
  print "\rDone " + (i+1).to_s + " on " + $events.size.to_s
end

# Generate last frame
camp_states = Array.new
for j in 0..($events.size-1)
  camp_states.push([$events[j][1], "FRAMA"])
end

# Put $last to true for flag final state
$last = true;
generate_image(image_name(),"OCT2016", camp_states)

puts ""

# Create GIF
cmd = "convert -loop -1 -coalesce -layers optimize "
$nb_img.times do |n|
  if n == $nb_img-1
    cmd = cmd + "-delay 350 "
  else
    cmd = cmd + "-delay 30 "
  end
  cmd = cmd + image_name_idx(n) + " "
end

if($english)
  cmd = cmd + "animation_en.gif"
else
  cmd = cmd + "animation.gif"
end

system cmd



