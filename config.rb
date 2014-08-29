require 'sass-globbing'
require 'singularitygs'
require 'breakpoint'

http_path = "/"
http_images_path = "http://static.grayghostvisuals.com/imgblog"

css_dir = "/"
sass_dir = "css/src"
images_dir = "img"
javascripts_dir = "js"

#output_style = :expanded
#environment = :development
output_style = :compressed
environment = :production

relative_assets = false
line_comments = false
color_output = false
sourcemap = false