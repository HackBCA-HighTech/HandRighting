import imageProcess
import os, json

os.system("setPath.py")
dirr = os.path.dirname(__file__)
filename = os.path.join(dirr, '../../../imgs/generated_canvas/verify.png')
img = imageProcess.preprocessing(filename)

proportion = imageProcess.proportion(img)
centroidX = imageProcess.centroid(img)[0]
centroidY = imageProcess.centroid(img)[1]

result = {
	'prop' : proportion,
	'centX' : centroidX,
	'centY' : centroidY,
}

print json.dumps(result)