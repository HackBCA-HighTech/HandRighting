from PIL import Image, ImageFilter
im = Image.open(fileName)

def findCentroid(im):
    width, height = im.size
    XX, YY, count = 0, 0, 0
    for x in xrange(0, width, 1):
        for y in xrange(0, height, 1):
            if im.getpixel((x, y)) == (255,255,255):
                XX += x
                YY += y
                count += 1

    final_x = XX/count
    final_y = YY/count
    finalArray = []
    finalArray.append(final_x)
    finalArray.append(final_y)
    return finalArray

if __name__ == "__main__":
    print findCentroid(BlackBox.jpg)
