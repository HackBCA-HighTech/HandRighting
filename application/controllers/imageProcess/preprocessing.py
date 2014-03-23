from PIL import Image, ImageChops

def trim(filename):
	im = Image.open(filename)
    bg = Image.new(im.mode, im.size, im.getpixel((0,0)))
    diff = ImageChops.difference(im, bg)
    diff = ImageChops.add(diff, diff, 2.0, -100)
    bbox = diff.getbbox()
    if bbox:
        return im.crop(bbox)

im = Image.open("example-rosemary.jpg")
im = trim(im)
im.show()