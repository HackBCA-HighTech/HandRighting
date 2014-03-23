import os, sys, json
dirr = os.path.dirname(sys.argv[0])
filename = os.path.join(dirr, '../../libraries')
sys.path.append(filename)

dirr = os.path.dirname(sys.argv[0])
filename = os.path.join(dirr, '../imageProcess')
sys.path.append(filename)

import preprocessing, proportion, centroid

dirr = os.path.dirname(sys.argv[0])
filename = os.path.join(dirr, '../../../img/generated_canvas/verify_11.png')
img = preprocessing.preprocessing(filename)

proportion = proportion.proportion(img)
centroidX = centroid.centroid(img)[0]
centroidY = centroid.centroid(img)[1]

result = {
	'prop' : proportion,
	'centX' : centroidX,
	'centY' : centroidY,
}

print json.dumps(result)
