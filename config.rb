# Require any additional compass plugins here.
#
# use the absolute path to the plugin
# require "/Library/Ruby/Gems/1.8/gems/compass-0.12.1/lib/compass.rb";

# Set this to the root of your project when deployed:
http_path = "/"

# Set the images directory relative to your http_path or change
# the location of the images themselves using http_images_path:
# http_images_dir = "assets/images"

# Production Assets URL
http_images_path = "http://static.grayghostvisuals.com/imgblog"

css_dir = "/"
sass_dir = "css/sass"
#images_dir = "img"
javascripts_dir = "js"

# Development
# output_style = :expanded
# environment = :development

# Production
output_style = :compressed
environment = :production

# To enable relative paths to assets via compass helper functions. Uncomment:
#relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass css/sass scss && rm -rf sass && mv scss sass
